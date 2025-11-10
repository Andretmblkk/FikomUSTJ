# 🔄 Panduan Update Admin Panel di Laptop Lain

Panduan ini untuk laptop yang **sudah pernah clone** project ini sebelumnya dan ingin **update** untuk mendapatkan fitur admin panel yang baru.

---

## ⚡ Quick Start (Paling Sederhana!)

Buka terminal di folder project, lalu jalankan **4 perintah ini saja**:

```bash
git pull origin main
php artisan migrate
php artisan db:seed
php artisan optimize:clear
```

**Selesai!** Login ke admin: `http://localhost:8000/admin`
- **Email:** `admin@fikom.ustj.ac.id`
- **Password:** `password`

**Catatan:** Jika pertama kali install admin panel, tambahkan `composer install` dan `php artisan storage:link` sebelum perintah di atas.

---

## 🚀 Langkah-Langkah Lengkap

### **Update Pertama Kali** (Jika Belum Pernah Install Admin Panel)

Buka terminal di folder project dan jalankan perintah berikut **secara berurutan**:

```bash
cd c:\laragon\www\fikom-website
git pull origin main
composer install
php artisan migrate
php artisan storage:link
php artisan db:seed
php artisan optimize:clear
```

**Selesai!** Sekarang akses admin panel di: `http://localhost:8000/admin`

**Login dengan:**
- **Email:** `admin@fikom.ustj.ac.id`
- **Password:** `password`

---

### **Update Selanjutnya** (Jika Sudah Pernah Install)

Untuk update berikutnya, cukup jalankan **4 perintah ini saja**:

```bash
git pull origin main
php artisan migrate
php artisan db:seed
php artisan optimize:clear
```

**Catatan:** 
- `composer install` hanya perlu dijalankan sekali atau jika ada perubahan `composer.json`
- `php artisan storage:link` hanya perlu dijalankan sekali

---

## 📝 Penjelasan Singkat

1. **`git pull origin main`** - Update kode terbaru dari GitHub
2. **`composer install`** - Install dependencies Filament (hanya pertama kali)
3. **`php artisan migrate`** - Buat/update tabel database
4. **`php artisan storage:link`** - Buat link untuk upload gambar (hanya pertama kali)
5. **`php artisan db:seed`** - Buat user admin dan data contoh
6. **`php artisan optimize:clear`** - Clear cache

**Seeder akan membuat:**
- ✅ User admin: `admin@fikom.ustj.ac.id` / `password`
- ✅ 8 berita contoh dengan gambar dari folder `images`

---

## ✅ Checklist Update

**Update Pertama Kali:**
- [ ] `git pull origin main`
- [ ] `composer install`
- [ ] `php artisan migrate`
- [ ] `php artisan storage:link`
- [ ] `php artisan db:seed`
- [ ] `php artisan optimize:clear`
- [ ] Bisa akses `/admin` dan login berhasil

**Update Selanjutnya:**
- [ ] `git pull origin main`
- [ ] `php artisan migrate`
- [ ] `php artisan db:seed`
- [ ] `php artisan optimize:clear`

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

