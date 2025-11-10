# 📋 Admin Panel Filament - Panduan Penggunaan

## 🚀 Akses Admin Panel

1. Buka browser dan akses: `http://localhost:8000/admin`
2. Login dengan kredensial:
   - **Email:** `admin@fikom.ustj.ac.id`
   - **Password:** `password`

## 📝 Fitur yang Tersedia

### 1. **Berita** (News)
Mengelola berita, event, dan pengumuman.

**Field yang tersedia:**
- Judul (Title)
- Kategori (Berita/Event/Pengumuman)
- Konten (Content)
- Gambar (Image) - Upload gambar
- Tanggal Publikasi (Published At)
- Status Publikasi (Is Published) - Toggle untuk publish/unpublish

**Fitur:**
- ✅ Create, Read, Update, Delete (CRUD)
- ✅ Filter berdasarkan kategori
- ✅ Filter berdasarkan status publikasi
- ✅ Search berdasarkan judul
- ✅ Upload gambar

### 2. **Layanan** (Service)
Mengelola layanan surat online dan formulir.

**Field yang tersedia:**
- Judul (Title)
- Deskripsi (Description)
- Tipe (Type) - Surat Online atau Formulir
- Status Aktif (Is Active) - Toggle untuk aktif/nonaktif

**Fitur:**
- ✅ Create, Read, Update, Delete (CRUD)
- ✅ Filter berdasarkan tipe
- ✅ Filter berdasarkan status aktif
- ✅ Search berdasarkan judul

## 🔧 Setup Database

Jika belum menjalankan migration, jalankan:

```bash
php artisan migrate
```

## 👤 Membuat User Admin Baru

Untuk membuat user admin baru, jalankan di terminal:

```bash
php artisan tinker
```

Kemudian jalankan:

```php
App\Models\User::create([
    'name' => 'Nama Admin',
    'email' => 'email@fikom.ustj.ac.id',
    'password' => bcrypt('password_anda')
]);
```

## 📁 Struktur File

```
app/
├── Filament/
│   ├── Resources/
│   │   ├── NewsResource.php          # Resource untuk Berita
│   │   ├── NewsResource/
│   │   │   └── Pages/
│   │   │       └── ManageNews.php
│   │   ├── ServiceResource.php       # Resource untuk Layanan
│   │   └── ServiceResource/
│   │       └── Pages/
│   │           └── ManageServices.php
│   └── Providers/
│       └── AdminPanelProvider.php    # Konfigurasi Panel
├── Models/
│   ├── News.php                      # Model Berita
│   └── Service.php                   # Model Layanan
database/
└── migrations/
    ├── 2025_11_10_012400_create_news_table.php
    └── 2025_11_10_012404_create_services_table.php
```

## 🎯 Cara Menggunakan

### Menambah Berita Baru:
1. Login ke admin panel
2. Klik menu **"Berita"** di sidebar
3. Klik tombol **"New"** atau **"Create"**
4. Isi form:
   - Masukkan judul berita
   - Pilih kategori (Berita/Event/Pengumuman)
   - Tulis konten berita
   - Upload gambar (opsional)
   - Set tanggal publikasi
   - Aktifkan toggle "Publikasikan" jika ingin langsung publish
5. Klik **"Create"**

### Mengelola Layanan:
1. Login ke admin panel
2. Klik menu **"Layanan"** di sidebar
3. Klik tombol **"New"** untuk menambah layanan baru
4. Isi form:
   - Masukkan judul layanan
   - Tulis deskripsi
   - Pilih tipe (Surat Online/Formulir)
   - Aktifkan toggle "Aktif" jika layanan tersedia
5. Klik **"Create"**

## ⚙️ Konfigurasi

Panel admin dapat dikonfigurasi di file:
`app/Providers/Filament/AdminPanelProvider.php`

## 🔒 Keamanan

- Pastikan untuk mengubah password default setelah pertama kali login
- Jangan share kredensial admin ke orang yang tidak berwenang
- Gunakan password yang kuat

## 📞 Troubleshooting

### Error: "Route not found"
- Pastikan migration sudah dijalankan: `php artisan migrate`
- Clear cache: `php artisan config:clear && php artisan route:clear`

### Error: "Class not found"
- Jalankan: `composer dump-autoload`

### Tidak bisa login
- Pastikan user sudah dibuat di database
- Cek email dan password yang digunakan

---

**Selamat menggunakan Admin Panel!** 🎉

