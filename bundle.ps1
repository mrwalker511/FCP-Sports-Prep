param(
    [string]$OutputPath = $PSScriptRoot
)

Set-StrictMode -Version Latest
$ErrorActionPreference = 'Stop'

$themeSlug = 'fl-coastal-prep'
$projectRoot = $PSScriptRoot
$stagingRoot = Join-Path $env:TEMP "wp-theme-bundle-$(Get-Random)"
$stagingDir = Join-Path $stagingRoot $themeSlug
$zipName = "$themeSlug.zip"
$zipPath = Join-Path $OutputPath $zipName

# ── 1. Parse .distignore ─────────────────────────────────────────
$distignorePath = Join-Path $projectRoot '.distignore'
if (-not (Test-Path $distignorePath)) {
    Write-Error ".distignore not found at $distignorePath"
    exit 1
}

$excludePatterns = @()
foreach ($line in (Get-Content $distignorePath)) {
    $trimmed = $line.Trim()
    if ($trimmed -eq '') { continue }
    if ($trimmed.StartsWith('#')) { continue }
    $excludePatterns += $trimmed.TrimEnd('/')
}

Write-Host ""
Write-Host "Bundling theme: $themeSlug" -ForegroundColor Cyan
Write-Host "  Exclude patterns ($($excludePatterns.Count)):" -ForegroundColor DarkGray
foreach ($ep in $excludePatterns) {
    Write-Host "    - $ep" -ForegroundColor DarkGray
}

# ── 2. Copy production files to staging ──────────────────────────
if (Test-Path $stagingRoot) { Remove-Item $stagingRoot -Recurse -Force }
New-Item -ItemType Directory -Path $stagingDir -Force | Out-Null

$gitDir = Join-Path $projectRoot '.git'
$allItems = Get-ChildItem -Path $projectRoot -Recurse -Force | Where-Object {
    -not $_.FullName.StartsWith($gitDir + [IO.Path]::DirectorySeparatorChar) -and $_.FullName -ne $gitDir
}

foreach ($item in $allItems) {
    $relativePath = $item.FullName.Substring($projectRoot.Length + 1)
    $relativeUnix = $relativePath -replace '\\', '/'

    $excluded = $false
    foreach ($pat in $excludePatterns) {
        $p = $pat -replace '\\', '/'
        if ($relativeUnix -eq $p) { $excluded = $true; break }
        if ($relativeUnix.StartsWith("$p/")) { $excluded = $true; break }
        if ($p.Contains('*')) {
            $rx = '^' + [regex]::Escape($p).Replace('\*', '.*') + '$'
            if ($relativeUnix -match $rx) { $excluded = $true; break }
            $leaf = Split-Path $relativeUnix -Leaf
            if ($leaf -match $rx) { $excluded = $true; break }
        }
    }
    if ($excluded) { continue }

    $destPath = Join-Path $stagingDir $relativePath
    if ($item.PSIsContainer) {
        if (-not (Test-Path $destPath)) {
            New-Item -ItemType Directory -Path $destPath -Force | Out-Null
        }
    }
    else {
        $destDir = Split-Path $destPath -Parent
        if (-not (Test-Path $destDir)) {
            New-Item -ItemType Directory -Path $destDir -Force | Out-Null
        }
        Copy-Item -Path $item.FullName -Destination $destPath -Force
    }
}

# ── 3. Create ZIP ────────────────────────────────────────────────
if (Test-Path $zipPath) { Remove-Item $zipPath -Force }

Write-Host ""
Write-Host "Compressing -> $zipName" -ForegroundColor Yellow
Compress-Archive -Path $stagingDir -DestinationPath $zipPath -CompressionLevel Optimal

# ── 4. Report ────────────────────────────────────────────────────
$zipInfo = Get-Item $zipPath
$fileCt = (Get-ChildItem $stagingDir -Recurse -File).Count
$zipKB = [math]::Round($zipInfo.Length / 1KB, 1)
$zipMB = [math]::Round($zipInfo.Length / 1MB, 2)

Write-Host ""
Write-Host "Bundle complete!" -ForegroundColor Green
Write-Host "  Output : $zipPath"
Write-Host "  Files  : $fileCt production files"
Write-Host "  Size   : $zipKB KB ($zipMB MB)"

Write-Host ""
Write-Host "Bundle contents:" -ForegroundColor Cyan
$bundleItems = Get-ChildItem $stagingDir
foreach ($bi in $bundleItems) {
    if ($bi.PSIsContainer) {
        $cc = @(Get-ChildItem $bi.FullName -Recurse -File).Count
        Write-Host "  [DIR]  $($bi.Name)/  ($cc files)" -ForegroundColor White
    }
    else {
        $sk = [math]::Round($bi.Length / 1KB, 1)
        Write-Host "  [FILE] $($bi.Name)  ($sk KB)" -ForegroundColor White
    }
}

# ── 5. Cleanup staging ──────────────────────────────────────────
Remove-Item $stagingRoot -Recurse -Force

Write-Host ""
Write-Host "Ready to upload to WordPress!" -ForegroundColor Green
Write-Host "  Dashboard > Appearance > Themes > Add New > Upload Theme"
Write-Host ""
