param(
    [string]$Path = "",
    [switch]$All
)

$ErrorActionPreference = "Stop"
$root = Split-Path -Parent $MyInvocation.MyCommand.Path

$files = @()
if ($Path) {
    $files += Get-Item $Path
}
elseif ($All) {
    $files += Get-ChildItem "$root\parts" -Filter "*.html" -ErrorAction SilentlyContinue
    $files += Get-ChildItem "$root\templates" -Filter "*.html" -ErrorAction SilentlyContinue
    $files += Get-ChildItem "$root\patterns" -Filter "*.php" -ErrorAction SilentlyContinue
}
else {
    Write-Host "Usage: .\check-blocks.ps1 -Path <file> | -All" -ForegroundColor Yellow
    exit 0
}

$totalErrors = 0
$totalWarnings = 0

function Test-BlockFile {
    param([string]$FilePath)

    $fileName = Split-Path -Leaf $FilePath
    $content = Get-Content $FilePath -Raw -Encoding UTF8
    $lines = Get-Content $FilePath -Encoding UTF8
    $errors = @()
    $warnings = @()

    Write-Host ""
    Write-Host "--- Checking: $fileName ---" -ForegroundColor Cyan

    # 1. Check opener/closer balance
    $voidPattern = '<!-- wp:(\S+)\s*(\{.*?\})?\s*/-->'
    $closerPattern = '<!-- /wp:(\S+)\s*-->'
    $openerPattern = '<!-- wp:(\S+)\s*(\{.*?\})?\s*-->'

    $openStack = New-Object System.Collections.Generic.Stack[string]
    for ($i = 0; $i -lt $lines.Count; $i++) {
        $line = $lines[$i]
        $lineNum = $i + 1

        if ($line -match $voidPattern) { continue }

        if ($line -match $closerPattern) {
            $closerName = $Matches[1]
            if ($openStack.Count -eq 0) {
                $errors += "  Line $lineNum : Unexpected closer <!-- /wp:$closerName --> with no matching opener."
            }
            else {
                $top = $openStack.Pop()
                if ($top -ne $closerName) {
                    $errors += "  Line $lineNum : Mismatched closer <!-- /wp:$closerName --> (expected <!-- /wp:$top -->)."
                }
            }
            continue
        }

        if ($line -match $openerPattern) {
            $openStack.Push($Matches[1])
        }
    }
    while ($openStack.Count -gt 0) {
        $unclosed = $openStack.Pop()
        $errors += "  Unclosed block: <!-- wp:$unclosed --> never closed."
    }

    # 2. Validate JSON in block comments
    $jsonBlocks = [regex]::Matches($content, '<!-- wp:\S+\s+(\{.*?\})\s*(/?)-->')
    foreach ($m in $jsonBlocks) {
        $jsonStr = $m.Groups[1].Value
        $pos = $content.Substring(0, $m.Index).Split("`n").Count
        try {
            $null = $jsonStr | ConvertFrom-Json -ErrorAction Stop
        }
        catch {
            $errors += "  Line ~$pos : Invalid JSON in block comment: $($_.Exception.Message)"
        }
    }

    # 3. Check group blocks
    $groupPattern = '(?s)<!-- wp:group\s+(\{.*?\})\s*-->\s*\r?\n\s*(<\w+[^>]*>)'
    $groupMatches = [regex]::Matches($content, $groupPattern)

    foreach ($gm in $groupMatches) {
        $attrs = $gm.Groups[1].Value | ConvertFrom-Json
        $htmlTag = $gm.Groups[2].Value
        $pos = $content.Substring(0, $gm.Index).Split("`n").Count

        # position sticky
        if ($attrs.style -and $attrs.style.position -and $attrs.style.position.type -eq "sticky") {
            if ($htmlTag -notmatch 'is-position-sticky') {
                $errors += "  Line ~$pos : Group has position sticky but HTML missing 'is-position-sticky' class."
            }
            if ($attrs.style.position.top -and $htmlTag -notmatch "top:") {
                $errors += "  Line ~$pos : Group has sticky top but HTML missing 'top:' style."
            }
        }

        # background color (inline)
        if ($attrs.style -and $attrs.style.color -and $attrs.style.color.background) {
            if ($htmlTag -notmatch 'has-background') {
                $errors += "  Line ~$pos : Group has background color but HTML missing 'has-background' class."
            }
            $bgVal = [regex]::Escape($attrs.style.color.background)
            if ($htmlTag -notmatch "background-color:$bgVal") {
                $warnings += "  Line ~$pos : Background color mismatch between JSON and inline style."
            }
        }

        # backgroundColor preset
        if ($attrs.backgroundColor) {
            $slug = $attrs.backgroundColor
            if ($htmlTag -notmatch "has-$slug-background-color") {
                $errors += "  Line ~$pos : Group uses backgroundColor '$slug' but HTML missing 'has-$slug-background-color' class."
            }
            if ($htmlTag -notmatch 'has-background') {
                $errors += "  Line ~$pos : Group uses backgroundColor preset but HTML missing 'has-background' class."
            }
        }

        # textColor preset
        if ($attrs.textColor) {
            $slug = $attrs.textColor
            if ($htmlTag -notmatch "has-$slug-color") {
                $warnings += "  Line ~$pos : Group uses textColor '$slug' but HTML missing 'has-$slug-color' class."
            }
            if ($htmlTag -notmatch 'has-text-color') {
                $warnings += "  Line ~$pos : Group uses textColor preset but HTML missing 'has-text-color' class."
            }
        }

        # padding
        if ($attrs.style -and $attrs.style.spacing -and $attrs.style.spacing.padding) {
            $pad = $attrs.style.spacing.padding
            foreach ($side in @("top", "right", "bottom", "left")) {
                $val = $pad.$side
                if ($val) {
                    $expected = "padding-${side}:" + $val
                    if ($htmlTag -notmatch [regex]::Escape($expected)) {
                        $errors += "  Line ~$pos : Padding mismatch - expected '$expected' in inline style."
                    }
                }
            }
        }

        # layout flex class
        if ($attrs.layout -and $attrs.layout.type -eq "flex") {
            if ($htmlTag -notmatch 'is-layout-flex') {
                $warnings += "  Line ~$pos : Group has flex layout in JSON but HTML may be missing 'is-layout-flex' class (WP adds dynamically)."
            }
        }
    }

    # 4. Check button blocks
    $btnPattern = '(?s)<!-- wp:button\s+(\{.*?\})\s*-->\s*\r?\n\s*(<\w+[^>]*>)\s*\r?\n\s*(<a[^>]*>)'
    $btnMatches = [regex]::Matches($content, $btnPattern)

    foreach ($bm in $btnMatches) {
        $attrs = $bm.Groups[1].Value | ConvertFrom-Json
        $wrapper = $bm.Groups[2].Value
        $anchor = $bm.Groups[3].Value
        $pos = $content.Substring(0, $bm.Index).Split("`n").Count

        if ($attrs.backgroundColor) {
            $slug = $attrs.backgroundColor
            if ($anchor -notmatch "has-$slug-background-color") {
                $errors += "  Line ~$pos : Button backgroundColor '$slug' but anchor missing 'has-$slug-background-color'."
            }
            if ($anchor -notmatch 'has-background') {
                $errors += "  Line ~$pos : Button anchor missing 'has-background' class."
            }
        }

        if ($attrs.textColor) {
            $slug = $attrs.textColor
            if ($anchor -notmatch "has-$slug-color") {
                $errors += "  Line ~$pos : Button textColor '$slug' but anchor missing 'has-$slug-color'."
            }
            if ($anchor -notmatch 'has-text-color') {
                $errors += "  Line ~$pos : Button anchor missing 'has-text-color' class."
            }
        }

        if ($attrs.fontSize) {
            $slug = $attrs.fontSize
            if ($anchor -notmatch "has-$slug-font-size") {
                $errors += "  Line ~$pos : Button fontSize '$slug' but anchor missing 'has-$slug-font-size'."
            }
        }

        if ($anchor -notmatch 'wp-element-button') {
            $errors += "  Line ~$pos : Button anchor missing required 'wp-element-button' class."
        }

        if ($attrs.style -and $attrs.style.spacing -and $attrs.style.spacing.padding) {
            $pad = $attrs.style.spacing.padding
            foreach ($side in @("top", "right", "bottom", "left")) {
                $val = $pad.$side
                if ($val) {
                    $expected = "padding-${side}:" + $val
                    if ($anchor -notmatch [regex]::Escape($expected)) {
                        $errors += "  Line ~$pos : Button padding mismatch - expected '$expected' on anchor."
                    }
                }
            }
        }

        if ($attrs.style -and $attrs.style.typography) {
            $typo = $attrs.style.typography
            if ($typo.fontWeight) {
                if ($anchor -notmatch "font-weight:$($typo.fontWeight)") {
                    $errors += "  Line ~$pos : Button anchor missing 'font-weight:$($typo.fontWeight)'."
                }
            }
            if ($typo.letterSpacing) {
                if ($anchor -notmatch ([regex]::Escape("letter-spacing:$($typo.letterSpacing)"))) {
                    $errors += "  Line ~$pos : Button anchor missing 'letter-spacing:$($typo.letterSpacing)'."
                }
            }
            if ($typo.textTransform) {
                if ($anchor -notmatch "text-transform:$($typo.textTransform)") {
                    $errors += "  Line ~$pos : Button anchor missing 'text-transform:$($typo.textTransform)'."
                }
            }
        }
    }

    # 5. Check navigation block
    $navPattern = '<!-- wp:navigation\s+(\{.*?\})\s*/-->'
    $navMatches = [regex]::Matches($content, $navPattern)
    foreach ($nm in $navMatches) {
        $attrs = $nm.Groups[1].Value | ConvertFrom-Json
        $pos = $content.Substring(0, $nm.Index).Split("`n").Count

        if (-not $attrs.ariaLabel) {
            $warnings += "  Line ~$pos : Navigation block missing 'ariaLabel' attribute (accessibility)."
        }
    }

    # 6. Check for whitespace in style attributes (WP uses no spaces around colons)
    for ($i = 0; $i -lt $lines.Count; $i++) {
        $line = $lines[$i]
        $lineNum = $i + 1
        if ($line -match 'style="[^"]*\s:\s') {
            $errors += "  Line $lineNum : Extra whitespace around colon in style attribute."
        }
    }

    # Report
    if ($errors.Count -eq 0 -and $warnings.Count -eq 0) {
        Write-Host "  PASS - No issues found." -ForegroundColor Green
    }

    if ($warnings.Count -gt 0) {
        Write-Host "  WARNINGS ($($warnings.Count)):" -ForegroundColor Yellow
        foreach ($w in $warnings) { Write-Host $w -ForegroundColor Yellow }
    }

    if ($errors.Count -gt 0) {
        Write-Host "  ERRORS ($($errors.Count)):" -ForegroundColor Red
        foreach ($e in $errors) { Write-Host $e -ForegroundColor Red }
    }

    return @{ Errors = $errors.Count; Warnings = $warnings.Count }
}

Write-Host ""
Write-Host "========================================" -ForegroundColor Magenta
Write-Host "  WordPress Block Validation Checker" -ForegroundColor Magenta
Write-Host "========================================" -ForegroundColor Magenta

foreach ($f in $files) {
    $result = Test-BlockFile -FilePath $f.FullName
    $totalErrors += $result.Errors
    $totalWarnings += $result.Warnings
}

Write-Host ""
Write-Host "----------------------------------------" -ForegroundColor Magenta
Write-Host "  Files checked : $($files.Count)" -ForegroundColor White
Write-Host "  Total errors  : $totalErrors" -ForegroundColor $(if ($totalErrors -gt 0) { "Red" } else { "Green" })
Write-Host "  Total warnings: $totalWarnings" -ForegroundColor $(if ($totalWarnings -gt 0) { "Yellow" } else { "Green" })
Write-Host "----------------------------------------" -ForegroundColor Magenta

if ($totalErrors -gt 0) { exit 1 } else { exit 0 }
