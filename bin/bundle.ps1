param(
    [string]$OutputPath = $PSScriptRoot
)

Set-StrictMode -Version Latest
$ErrorActionPreference = 'Stop'

Add-Type -AssemblyName System.IO.Compression
Add-Type -AssemblyName System.IO.Compression.FileSystem

$themeSlug = 'fl-coastal-prep'
$projectRoot = $PSScriptRoot
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

# ── 2. Collect production files ──────────────────────────────────
$gitDir = Join-Path $projectRoot '.git'
$allItems = Get-ChildItem -Path $projectRoot -Recurse -Force | Where-Object {
    -not $_.FullName.StartsWith($gitDir + [IO.Path]::DirectorySeparatorChar) -and $_.FullName -ne $gitDir
}

$filesToBundle = @()

foreach ($item in $allItems) {
    if ($item.PSIsContainer) { continue }

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

    $filesToBundle += @{
        FullPath  = $item.FullName
        EntryName = "$themeSlug/$relativeUnix"
    }
}

Write-Host "  Production files: $($filesToBundle.Count)" -ForegroundColor DarkGray

# ── 3. Create ZIP with forward-slash paths ───────────────────────
if (Test-Path $zipPath) { Remove-Item $zipPath -Force }

Write-Host ""
Write-Host "Compressing -> $zipName (using forward-slash paths)" -ForegroundColor Yellow

$zipStream = $null
$archive = $null
$filesAdded = 0

try {
    $zipStream = [System.IO.File]::Create($zipPath)
    $archive = New-Object System.IO.Compression.ZipArchive($zipStream, [System.IO.Compression.ZipArchiveMode]::Create)

    $currentFile = 0
    foreach ($f in $filesToBundle) {
        $currentFile++

        # Progress indication every 10 files
        if ($currentFile % 10 -eq 0) {
            Write-Progress -Activity "Creating ZIP" -Status "File $currentFile of $($filesToBundle.Count)" -PercentComplete (($currentFile / $filesToBundle.Count) * 100)
        }

        # Skip if file was deleted since enumeration
        if (-not (Test-Path $f.FullPath)) {
            Write-Warning "Skipping deleted file: $($f.EntryName)"
            continue
        }

        $entryName = $f.EntryName
        $entry = $archive.CreateEntry($entryName, [System.IO.Compression.CompressionLevel]::Optimal)

        $entryStream = $null
        $fileStream = $null
        try {
            $entryStream = $entry.Open()
            $fileStream = [System.IO.File]::OpenRead($f.FullPath)
            $fileStream.CopyTo($entryStream)
            $filesAdded++
        }
        finally {
            # Always dispose streams, even on exception
            if ($fileStream) { $fileStream.Dispose() }
            if ($entryStream) { $entryStream.Dispose() }
        }
    }

    Write-Progress -Activity "Creating ZIP" -Completed
}
catch {
    Write-Error "Failed to create ZIP: $_"

    # Clean up resources
    if ($archive) { $archive.Dispose() }
    if ($zipStream) { $zipStream.Close() }

    # Remove partial/corrupted ZIP file
    if (Test-Path $zipPath) {
        Write-Host "Removing partial ZIP file..." -ForegroundColor Yellow
        Remove-Item $zipPath -Force
    }

    exit 1
}
finally {
    # Ensure resources are always released
    if ($archive) { $archive.Dispose() }
    if ($zipStream) { $zipStream.Close() }
}

# ── 3.1. Validate ZIP integrity ──────────────────────────────────
Write-Host "Validating ZIP integrity..." -ForegroundColor Yellow
try {
    $testArchive = [System.IO.Compression.ZipFile]::OpenRead($zipPath)
    $entryCount = $testArchive.Entries.Count
    $testArchive.Dispose()

    if ($entryCount -ne $filesAdded) {
        Write-Warning "ZIP entry count mismatch: expected $filesAdded, got $entryCount"
    }
    else {
        Write-Host "  ZIP validation: PASSED ($entryCount entries)" -ForegroundColor Green
    }
}
catch {
    Write-Error "ZIP validation failed: $_"
    Remove-Item $zipPath -Force -ErrorAction SilentlyContinue
    exit 1
}

# ── 4. Report ────────────────────────────────────────────────────
$zipInfo = Get-Item $zipPath
$zipKB = [math]::Round($zipInfo.Length / 1KB, 1)
$zipMB = [math]::Round($zipInfo.Length / 1MB, 2)

Write-Host ""
Write-Host "Bundle complete!" -ForegroundColor Green
Write-Host "  Output : $zipPath"
Write-Host "  Files  : $filesAdded files added to ZIP"
Write-Host "  Size   : $zipKB KB ($zipMB MB)"

# Show top-level contents summary
Write-Host ""
Write-Host "Bundle contents:" -ForegroundColor Cyan

$dirs = @{}
$roots = @()
foreach ($f in $filesToBundle) {
    $parts = $f.EntryName.Split('/')
    if ($parts.Count -gt 2) {
        $dirName = $parts[1]
        if (-not $dirs.ContainsKey($dirName)) { $dirs[$dirName] = 0 }
        $dirs[$dirName] += 1
    }
    else {
        $roots += $parts[1]
    }
}
foreach ($d in ($dirs.Keys | Sort-Object)) {
    Write-Host "  [DIR]  $d/  ($($dirs[$d]) files)" -ForegroundColor White
}
foreach ($r in ($roots | Sort-Object)) {
    Write-Host "  [FILE] $r" -ForegroundColor White
}

Write-Host ""
Write-Host "Ready to upload to WordPress!" -ForegroundColor Green
Write-Host "  Dashboard > Appearance > Themes > Add New > Upload Theme"
Write-Host ""
