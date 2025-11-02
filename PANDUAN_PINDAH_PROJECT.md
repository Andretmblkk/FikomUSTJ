# 📦 Panduan Memindahkan Project Laravel ke Laptop Lain via GitHub

## 🚀 Tahap 1: Upload Project ke GitHub (Di Laptop Saat Ini)

### Langkah 1: Install Git (Jika Belum Ada)
1. Download Git dari: https://git-scm.com/download/win
2. Install dengan default settings
3. Buka Git Bash atau PowerShell

### Langkah 2: Inisialisasi Git Repository
Buka terminal di folder project dan jalankan:

```bash
cd c:\laragon\www\fikom-website
git init
```

### Langkah 3: Konfigurasi Git (Pertama Kali)
```bash
git config --global user.name "Nama Anda"
git config --global user.email "email@anda.com"
```

### Langkah 4: Buat File .env.example (Penting!)
Copy file `.env` menjadi `.env.example` dan hapus nilai sensitif:

```bash
copy .env .env.example
```

Edit `.env.example` dan ganti nilai-nilai ini:
- `APP_KEY=` (kosongkan)
- `DB_DATABASE=` (kosongkan)
- `DB_USERNAME=` (kosongkan)
- `DB_PASSWORD=` (kosongkan)

**Catatan:** File `.env` sudah ada di `.gitignore` jadi tidak akan ter-upload ke GitHub.

### Langkah 5: Tambahkan Semua File ke Git
```bash
git add .
```

### Langkah 6: Commit Pertama
```bash
git commit -m "Initial commit: FIKOM Website"
```

### Langkah 7: Buat Repository di GitHub
1. Buka https://github.com
2. Login atau daftar akun baru
3. Klik tombol **"New"** atau **"+"** → **"New repository"**
4. Isi:
   - **Repository name:** `fikom-website` (atau nama lain)
   - **Description:** `Website FIKOM USTJ`
   - **Visibility:** Pilih **Private** (disarankan) atau **Public**
   - **JANGAN** centang "Initialize this repository with a README"
5. Klik **"Create repository"**

### Langkah 8: Hubungkan dengan GitHub dan Push
Copy URL repository GitHub Anda (misalnya: `https://github.com/username/fikom-website.git`), lalu jalankan:

```bash
git remote add origin https://github.com/username/fikom-website.git
git branch -M main
git push -u origin main
```

Masukkan username dan password GitHub Anda jika diminta.

---

## 📥 Tahap 2: Clone dan Setup di Laptop Baru

### Langkah 1: Install Tools yang Diperlukan
Di laptop baru, install:

1. **XAMPP/Laragon** (untuk PHP, MySQL, Apache)
   - Download: https://laragon.org/download/ (disarankan) atau https://www.apachefriends.org/

2. **Composer** (Package Manager PHP)
   - Download: https://getcomposer.org/download/
   - Ikuti instruksi instalasi

3. **Node.js dan NPM** (untuk Vite/frontend)
   - Download: https://nodejs.org/

4. **Git** (jika belum ada)
   - Download: https://git-scm.com/download/win

### Langkah 2: Clone Repository dari GitHub
Buka terminal dan jalankan:

```bash
cd c:\laragon\www
git clone https://github.com/username/fikom-website.git
cd fikom-website
```

**Catatan:** Ganti `username` dengan username GitHub Anda.

### Langkah 3: Copy File Environment
```bash
copy .env.example .env
```

### Langkah 4: Install Dependencies PHP
```bash
composer install
```

### Langkah 5: Generate Application Key
```bash
php artisan key:generate
```

### Langkah 6: Setup Database
1. Buka phpMyAdmin atau database manager
2. Buat database baru (misalnya: `fikom_website`)
3. Edit file `.env` dan sesuaikan konfigurasi database:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=fikom_website
   DB_USERNAME=root
   DB_PASSWORD=
   ```

### Langkah 7: Run Migrations (Jika Ada)
```bash
php artisan migrate
```

### Langkah 8: Install Dependencies Node.js
```bash
npm install
```

### Langkah 9: Build Assets (Development)
```bash
npm run dev
```

Atau untuk production:
```bash
npm run build
```

### Langkah 10: Buat Symbolic Link untuk Storage
```bash
php artisan storage:link
```

### Langkah 11: Set Permissions (Jika di Linux/Mac)
```bash
chmod -R 775 storage bootstrap/cache
```

---

## ✅ Checklist Setup di Laptop Baru

- [ ] XAMPP/Laragon terinstall dan berjalan
- [ ] Composer terinstall
- [ ] Node.js dan NPM terinstall
- [ ] Git terinstall
- [ ] Repository di-clone dari GitHub
- [ ] File `.env` sudah dibuat dari `.env.example`
- [ ] `composer install` sudah dijalankan
- [ ] `php artisan key:generate` sudah dijalankan
- [ ] Database sudah dibuat dan dikonfigurasi di `.env`
- [ ] `npm install` sudah dijalankan
- [ ] `npm run dev` atau `npm run build` sudah dijalankan
- [ ] Server Laravel berjalan di `http://localhost:8000` atau domain lokal

---

## 🔄 Cara Update Project (Jika Ada Perubahan)

### Di Laptop Pertama (Setelah Update Code):
```bash
git add .
git commit -m "Deskripsi perubahan"
git push
```

### Di Laptop Kedua (Untuk Update):
```bash
git pull
composer install  # Jika ada perubahan composer.json
npm install       # Jika ada perubahan package.json
npm run dev       # Jika ada perubahan assets
php artisan migrate  # Jika ada migration baru
```

---

## ⚠️ File-File yang TIDAK Di-upload ke GitHub

File berikut sudah ada di `.gitignore` dan tidak akan ter-upload:
- `.env` (file konfigurasi dengan password database)
- `vendor/` (dependencies PHP)
- `node_modules/` (dependencies Node.js)
- `storage/logs/*` (file log)
- File-file cache lainnya

Ini adalah praktik yang **benar** untuk keamanan!

---

## 🆘 Troubleshooting

### Error: "Vendor directory not found"
Jalankan: `composer install`

### Error: "Node modules not found"
Jalankan: `npm install`

### Error: "No application encryption key"
Jalankan: `php artisan key:generate`

### Error: "SQLSTATE[HY000] [1045] Access denied"
Cek konfigurasi database di file `.env`

### Error: "Class 'PDO' not found"
Pastikan extension PDO diaktifkan di `php.ini`

---

## 📝 Catatan Penting

1. **JANGAN PERNAH** commit file `.env` ke GitHub (berisi password!)
2. Selalu gunakan `.env.example` sebagai template
3. Update `.env.example` jika menambah konfigurasi baru
4. Backup database secara terpisah sebelum pindah laptop
5. Pastikan versi PHP, MySQL, dan Node.js kompatibel di kedua laptop

---

## 🎯 Quick Start Summary

**Upload ke GitHub:**
```bash
git init
git add .
git commit -m "Initial commit"
git remote add origin https://github.com/username/fikom-website.git
git push -u origin main
```

**Clone di Laptop Baru:**
```bash
git clone https://github.com/username/fikom-website.git
cd fikom-website
copy .env.example .env
composer install
php artisan key:generate
npm install
npm run dev
```

Selamat! Project Anda sekarang bisa diakses di laptop manapun! 🎉

