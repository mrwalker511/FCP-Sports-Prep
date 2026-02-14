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

$zipStream = [System.IO.File]::Create($zipPath)
$archive = New-Object System.IO.Compression.ZipArchive($zipStream, [System.IO.Compression.ZipArchiveMode]::Create)

foreach ($f in $filesToBundle) {
    $entryName = $f.EntryName
    $entry = $archive.CreateEntry($entryName, [System.IO.Compression.CompressionLevel]::Optimal)
    $entryStream = $entry.Open()
    $fileStream = [System.IO.File]::OpenRead($f.FullPath)
    $fileStream.CopyTo($entryStream)
    $fileStream.Close()
    $entryStream.Close()
}

$archive.Dispose()
$zipStream.Close()

# ── 4. Report ────────────────────────────────────────────────────
$zipInfo = Get-Item $zipPath
$zipKB = [math]::Round($zipInfo.Length / 1KB, 1)
$zipMB = [math]::Round($zipInfo.Length / 1MB, 2)

Write-Host ""
Write-Host "Bundle complete!" -ForegroundColor Green
Write-Host "  Output : $zipPath"
Write-Host "  Files  : $($filesToBundle.Count) production files"
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
