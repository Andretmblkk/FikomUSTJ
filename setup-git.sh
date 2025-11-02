#!/bin/bash

echo "========================================"
echo "Setup Git untuk FIKOM Website"
echo "========================================"
echo ""

# Check if git is installed
if ! command -v git &> /dev/null; then
    echo "ERROR: Git belum terinstall!"
    echo "Silakan install Git terlebih dahulu"
    exit 1
fi

echo "[1/5] Inisialisasi Git repository..."
git init

echo ""
echo "[2/5] Menambahkan semua file ke staging..."
git add .

echo ""
echo "[3/5] Membuat commit pertama..."
git commit -m "Initial commit: FIKOM Website"

echo ""
echo "[4/5] Setup selesai!"
echo ""
echo "========================================"
echo "LANGKAH SELANJUTNYA:"
echo "========================================"
echo "1. Buat repository baru di GitHub.com"
echo "2. Copy URL repository (contoh: https://github.com/username/fikom-website.git)"
echo "3. Jalankan perintah berikut di terminal:"
echo ""
echo "   git remote add origin [URL_REPOSITORY_ANDA]"
echo "   git branch -M main"
echo "   git push -u origin main"
echo ""
echo "========================================"

