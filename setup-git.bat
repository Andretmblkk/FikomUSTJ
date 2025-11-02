@echo off
echo ========================================
echo Setup Git untuk FIKOM Website
echo ========================================
echo.

REM Check if git is installed
git --version >nul 2>&1
if errorlevel 1 (
    echo ERROR: Git belum terinstall!
    echo Silakan download dan install Git dari: https://git-scm.com/download/win
    pause
    exit /b 1
)

echo [1/5] Inisialisasi Git repository...
git init
if errorlevel 1 (
    echo ERROR: Gagal inisialisasi Git!
    pause
    exit /b 1
)

echo.
echo [2/5] Menambahkan semua file ke staging...
git add .
if errorlevel 1 (
    echo ERROR: Gagal menambahkan file!
    pause
    exit /b 1
)

echo.
echo [3/5] Membuat commit pertama...
git commit -m "Initial commit: FIKOM Website"
if errorlevel 1 (
    echo ERROR: Gagal membuat commit!
    pause
    exit /b 1
)

echo.
echo [4/5] Setup selesai!
echo.
echo ========================================
echo LANGKAH SELANJUTNYA:
echo ========================================
echo 1. Buat repository baru di GitHub.com
echo 2. Copy URL repository (contoh: https://github.com/username/fikom-website.git)
echo 3. Jalankan perintah berikut di terminal:
echo.
echo    git remote add origin [URL_REPOSITORY_ANDA]
echo    git branch -M main
echo    git push -u origin main
echo.
echo ========================================
pause

