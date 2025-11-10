# 🔄 Panduan Update Admin Panel di Laptop Lain

Panduan ini untuk laptop yang **sudah pernah clone** project ini sebelumnya dan ingin **update** untuk mendapatkan fitur admin panel yang baru.

---

## 📋 Langkah-Langkah Update

### 1. **Pull Perubahan Terbaru dari GitHub**

Buka terminal di folder project dan jalankan:

```bash
cd c:\laragon\www\fikom-website
git pull origin main
```

Ini akan mengunduh semua perubahan terbaru termasuk admin panel.

---

### 2. **Install Dependencies Baru (Filament)**

Karena admin panel menggunakan Filament, perlu install dependencies baru:

```bash
composer install
```

Atau jika ada masalah, gunakan:

```bash
composer update
```

**Catatan:** Proses ini mungkin memakan waktu beberapa menit karena Filament memiliki banyak dependencies.

---

### 3. **Jalankan Migration Database**

Admin panel membutuhkan tabel baru untuk `news` dan `services`. Jalankan migration:

```bash
php artisan migrate
```

Ini akan membuat tabel:
- `news` (untuk berita, event, dan pengumuman)
- `services` (untuk layanan)

---

### 4. **Buat Symbolic Link untuk Storage**

Untuk upload gambar di admin panel, perlu symbolic link:

```bash
php artisan storage:link
```

Ini akan membuat link dari `public/storage` ke `storage/app/public`.

---

### 5. **Jalankan Seeder untuk User Admin dan Data Contoh**

Jalankan seeder untuk membuat user admin dan beberapa berita contoh dengan gambar:

```bash
php artisan db:seed
```

Atau jika ingin menjalankan seeder tertentu saja:

```bash
# Hanya user admin
php artisan db:seed --class=UserSeeder

# Hanya berita contoh
php artisan db:seed --class=NewsSeeder
```

**Seeder akan membuat:**
- ✅ User admin dengan kredensial:
  - **Email:** `admin@fikom.ustj.ac.id`
  - **Password:** `password`
- ✅ 8 berita contoh (berita, event, pengumuman) dengan gambar dari folder `images`

**Catatan:** Seeder akan otomatis copy gambar dari `public/images/` ke `storage/app/public/news/` dan membuat berita dengan gambar tersebut.

---

### 6. **Clear Cache**

Bersihkan cache untuk memastikan perubahan terbaru ter-load:

```bash
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear
```

Atau jalankan semua sekaligus:

```bash
php artisan optimize:clear
```

---

### 7. **Akses Admin Panel**

Setelah semua langkah selesai, akses admin panel di browser:

```
http://localhost:8000/admin
```

Atau jika menggunakan domain lokal:

```
http://fikom-website.test/admin
```

Login dengan:
- **Email:** `admin@fikom.ustj.ac.id`
- **Password:** `password`

**Catatan:** Setelah login pertama kali, segera ubah password untuk keamanan!

---

## ✅ Checklist Update

Pastikan semua langkah sudah dilakukan:

- [ ] `git pull origin main` - Update kode dari GitHub
- [ ] `composer install` - Install dependencies Filament
- [ ] `php artisan migrate` - Buat tabel database baru
- [ ] `php artisan storage:link` - Buat symbolic link storage
- [ ] `php artisan db:seed` - Buat user admin dan data contoh
- [ ] `php artisan optimize:clear` - Clear cache
- [ ] Bisa akses `/admin` dan login berhasil

---

## 🎯 Quick Command (Copy-Paste Semua Sekaligus)

Jika ingin menjalankan semua langkah sekaligus, copy-paste perintah ini:

**Windows (PowerShell):**
```powershell
cd c:\laragon\www\fikom-website
git pull origin main
composer install
php artisan migrate
php artisan storage:link
php artisan db:seed
php artisan optimize:clear
```

**Linux/Mac:**
```bash
cd ~/path/to/fikom-website
git pull origin main
composer install
php artisan migrate
php artisan storage:link
php artisan db:seed
php artisan optimize:clear
```

Setelah itu, login ke admin panel dengan:
- **Email:** `admin@fikom.ustj.ac.id`
- **Password:** `password`

---

## 🆘 Troubleshooting

### Error: "Class 'Filament\Panel' not found"
**Solusi:** Jalankan `composer install` atau `composer update`

### Error: "Table 'news' already exists"
**Solusi:** Tabel sudah ada, skip migration atau jalankan `php artisan migrate:fresh` (HATI-HATI: ini akan menghapus semua data!)

### Error: "The stream or file could not be opened"
**Solusi:** Pastikan folder `storage/app/public` ada dan bisa ditulis. Jalankan:
```bash
php artisan storage:link
```

### Error: "Route [admin.login] not defined"
**Solusi:** Clear cache dengan `php artisan optimize:clear`

### Error: "419 Page Expired" saat login
**Solusi:** Clear cache dan pastikan `APP_KEY` di `.env` sudah ada. Jika belum, jalankan:
```bash
php artisan key:generate
```

### Tidak bisa login
**Solusi:** 
1. Pastikan seeder sudah dijalankan: `php artisan db:seed`
2. Cek email dan password yang digunakan (default: `admin@fikom.ustj.ac.id` / `password`)
3. Jika user belum ada, jalankan: `php artisan db:seed --class=UserSeeder`

---

## 📝 Catatan Penting

1. **Backup Database Sebelum Migrate**
   - Jika ada data penting, backup dulu sebelum menjalankan `php artisan migrate`
   - Gunakan phpMyAdmin atau `mysqldump` untuk backup

2. **Password Default**
   - Setelah pertama kali login, **segera ubah password** untuk keamanan
   - Jangan share kredensial admin ke orang yang tidak berwenang

3. **File Upload**
   - Gambar yang di-upload via admin panel akan tersimpan di `storage/app/public/news/`
   - Pastikan symbolic link sudah dibuat agar gambar bisa diakses di frontend

4. **Update Selanjutnya**
   - Setiap kali ada update dari GitHub, cukup jalankan:
     ```bash
     git pull origin main
     composer install  # Jika ada perubahan composer.json
     php artisan migrate  # Jika ada migration baru
     php artisan optimize:clear
     ```

---

## 🎉 Selesai!

Setelah semua langkah selesai, Anda sudah bisa menggunakan admin panel untuk:
- ✅ Mengelola Berita, Event, dan Pengumuman
- ✅ Mengelola Layanan
- ✅ Upload gambar untuk berita
- ✅ Publish/Unpublish konten

Selamat menggunakan admin panel! 🚀

