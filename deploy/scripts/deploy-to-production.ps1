# Games Y'all Production Deployment (Windows)
# Requires: Ruby/Jekyll installed, WinSCP

param(
    [switch]$SkipBuild,
    [switch]$Help
)

if ($Help) {
    Write-Host "Usage: .\deploy-to-production.ps1 [-SkipBuild]"
    Write-Host ""
    Write-Host "Options:"
    Write-Host "  -SkipBuild  Skip Jekyll build (use existing _site)"
    Write-Host "  -Help       Show this help message"
    exit 0
}

$ErrorActionPreference = "Stop"
$ScriptDir = Split-Path -Parent $MyInvocation.MyCommand.Path
$ProjectRoot = Split-Path -Parent (Split-Path -Parent $ScriptDir)

Write-Host "======================================" -ForegroundColor Cyan
Write-Host "  Games Y'all Production Deployment" -ForegroundColor Cyan
Write-Host "======================================" -ForegroundColor Cyan
Write-Host "Project root: $ProjectRoot" -ForegroundColor Yellow

# Load .env file
$EnvFile = Join-Path $ProjectRoot "deploy\.env"
if (-not (Test-Path $EnvFile)) {
    Write-Host "ERROR: .env file not found at $EnvFile" -ForegroundColor Red
    Write-Host "Please create deploy\.env with your credentials." -ForegroundColor Yellow
    exit 1
}

# Parse .env file
Get-Content $EnvFile | ForEach-Object {
    $line = $_.Trim()
    if ($line -and -not $line.StartsWith("#") -and $line -match '^([^=]+)=(.*)$') {
        $name = $matches[1].Trim()
        $value = $matches[2].Trim().Trim('"').Trim("'")
        Set-Variable -Name $name -Value $value -Scope Script
    }
}

# Validate credentials
if (-not $PRODUCTION_HOST -or -not $PRODUCTION_USERNAME -or -not $PRODUCTION_PASSWORD) {
    Write-Host "ERROR: Missing credentials in .env file" -ForegroundColor Red
    Write-Host "Required: PRODUCTION_HOST, PRODUCTION_USERNAME, PRODUCTION_PASSWORD" -ForegroundColor Yellow
    exit 1
}

$SiteDir = Join-Path $ProjectRoot "games_yall_site"

# Build Jekyll site
if (-not $SkipBuild) {
    Write-Host "Building Jekyll site..." -ForegroundColor Yellow
    Push-Location $SiteDir
    try {
        Write-Host "Installing dependencies..." -ForegroundColor Yellow
        bundle install --quiet

        $env:JEKYLL_ENV = "production"
        Write-Host "Running Jekyll build..." -ForegroundColor Yellow
        bundle exec jekyll build

        if (-not (Test-Path "_site")) {
            throw "Jekyll build failed - _site directory not found"
        }
        Write-Host "Build complete!" -ForegroundColor Green
    }
    catch {
        Write-Host "ERROR: Build failed - $_" -ForegroundColor Red
        exit 1
    }
    finally {
        Pop-Location
    }
}
else {
    Write-Host "Skipping build (using existing _site)" -ForegroundColor Yellow
}

$SiteOutput = Join-Path $SiteDir "_site"
if (-not (Test-Path $SiteOutput)) {
    Write-Host "ERROR: _site directory not found at $SiteOutput" -ForegroundColor Red
    Write-Host "Run without -SkipBuild to build the site first." -ForegroundColor Yellow
    exit 1
}

# Find WinSCP
$WinSCPPaths = @(
    "C:\Program Files (x86)\WinSCP\WinSCPnet.dll",
    "C:\Program Files\WinSCP\WinSCPnet.dll",
    "$env:LOCALAPPDATA\Programs\WinSCP\WinSCPnet.dll"
)

$WinSCPPath = $null
foreach ($path in $WinSCPPaths) {
    if (Test-Path $path) {
        $WinSCPPath = $path
        break
    }
}

if (-not $WinSCPPath) {
    Write-Host "ERROR: WinSCP not found." -ForegroundColor Red
    Write-Host ""
    Write-Host "Please install WinSCP:" -ForegroundColor Yellow
    Write-Host "  1. Download from https://winscp.net/eng/download.php" -ForegroundColor Yellow
    Write-Host "  2. Choose 'Installation package'" -ForegroundColor Yellow
    Write-Host "  3. Run the installer" -ForegroundColor Yellow
    exit 1
}

Write-Host "======================================" -ForegroundColor Cyan
Write-Host "  Deploying to Production" -ForegroundColor Cyan
Write-Host "======================================" -ForegroundColor Cyan
Write-Host "Host: $PRODUCTION_HOST" -ForegroundColor Yellow
Write-Host "Path: $(if ($PRODUCTION_PATH) { $PRODUCTION_PATH } else { '/' })" -ForegroundColor Yellow

# Load WinSCP .NET assembly
Add-Type -Path $WinSCPPath

$sessionOptions = New-Object WinSCP.SessionOptions -Property @{
    Protocol = [WinSCP.Protocol]::Sftp
    HostName = $PRODUCTION_HOST
    UserName = $PRODUCTION_USERNAME
    Password = $PRODUCTION_PASSWORD
    GiveUpSecurityAndAcceptAnySshHostKey = $true
}

$session = New-Object WinSCP.Session

try {
    Write-Host "Connecting to server..." -ForegroundColor Yellow
    $session.Open($sessionOptions)

    $transferOptions = New-Object WinSCP.TransferOptions
    $transferOptions.TransferMode = [WinSCP.TransferMode]::Binary

    $remotePath = if ($PRODUCTION_PATH) { $PRODUCTION_PATH } else { "/" }

    Write-Host "Synchronizing files..." -ForegroundColor Yellow
    $syncResult = $session.SynchronizeDirectories(
        [WinSCP.SynchronizationMode]::Remote,
        $SiteOutput,
        $remotePath,
        $false,  # Delete removed files from server
        $false,  # Mirror mode
        [WinSCP.SynchronizationCriteria]::Time,
        $transferOptions
    )

    # Check for errors
    $syncResult.Check()

    # Report results
    $uploads = $syncResult.Uploads.Count
    $removals = $syncResult.Removals.Count

    Write-Host ""
    Write-Host "======================================" -ForegroundColor Green
    Write-Host "  Deployment Complete!" -ForegroundColor Green
    Write-Host "======================================" -ForegroundColor Green
    Write-Host "Files uploaded: $uploads" -ForegroundColor Green
    Write-Host "Files removed: $removals" -ForegroundColor Green
    Write-Host ""
    Write-Host "Visit https://gamesyall.com to review changes." -ForegroundColor Green
}
catch {
    Write-Host "ERROR: Deployment failed - $_" -ForegroundColor Red
    exit 1
}
finally {
    $session.Dispose()
}
