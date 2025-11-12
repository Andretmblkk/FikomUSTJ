# 📚 Konsep dan Alur Kerja 

## 🎯 Konsep MVC (Model-View-Controller)

### Apa itu MVC?
MVC adalah pola arsitektur yang memisahkan aplikasi menjadi 3 komponen utama:

1. **Model (M)** - Menangani data dan logika bisnis
   - Lokasi: `app/Models/`
   - Contoh: `News.php`, `Service.php`, `User.php`
   - Bertugas: Berinteraksi dengan database, validasi data, relasi antar tabel

2. **View (V)** - Menampilkan data ke user
   - Lokasi: `resources/views/`
   - Contoh: `academic.blade.php`, `news.blade.php`, `home.blade.php`
   - Bertugas: Template HTML yang menampilkan data dari Controller

3. **Controller (C)** - Menghubungkan Model dan View
   - Lokasi: `app/Http/Controllers/`
   - Contoh: `NewsController.php`
   - Bertugas: Menerima request, memproses data melalui Model, mengirim data ke View

---

## 🔄 Alur Kerja Lengkap: Dari Admin Panel ke Frontend

### **BAGIAN 1: ADMIN PANEL (Filament)**

#### 1.1. Struktur Admin Panel
```
app/
├── Filament/
│   ├── Resources/              # Resource = CRUD interface untuk Model
│   │   ├── NewsResource.php    # Interface untuk mengelola Berita
│   │   ├── ServiceResource.php # Interface untuk mengelola Dokumen Penting
│   │   └── [Resource]/Pages/
│   │       └── Manage[Resource].php  # Halaman manage CRUD
│   └── Providers/
│       └── AdminPanelProvider.php   # Konfigurasi admin panel
```

#### 1.2. Cara Kerja Admin Panel

**Lokasi File:**
- `app/Filament/Resources/ServiceResource.php` - Resource untuk Dokumen Penting
- `app/Filament/Providers/Filament/AdminPanelProvider.php` - Konfigurasi panel
- `app/Models/Service.php` - Model yang digunakan

**Alur Kerja Admin:**

```
1. User Login → Admin Panel (http://localhost:8000/admin)
   ↓
2. Filament memeriksa autentikasi (AdminPanelProvider.php)
   ↓
3. User klik menu "Dokumen Penting"
   ↓
4. Filament memuat ServiceResource.php
   ↓
5. ServiceResource membaca Model Service.php
   ↓
6. ServiceResource menampilkan form (form()) dan tabel (table())
   ↓
7. User input data → Klik "Create"
   ↓
8. Filament memvalidasi data sesuai form() di ServiceResource
   ↓
9. Data disimpan ke database melalui Model Service
   ↓
10. Service Model menggunakan Eloquent ORM untuk INSERT ke tabel 'services'
```

**Detail Proses:**

**File: `app/Filament/Resources/ServiceResource.php`**
```php
// Bagian ini menentukan form input di admin
public static function form(Schema $schema): Schema
{
    return $schema->components([
        Forms\Components\TextInput::make('title'),  // Field judul
        Forms\Components\Textarea::make('description'), // Field deskripsi
        // ... dll
    ]);
}

// Bagian ini menentukan tabel yang ditampilkan
public static function table(Table $table): Table
{
    return $table->columns([
        Tables\Columns\TextColumn::make('title'), // Kolom judul
        // ... dll
    ]);
}
```

**File: `app/Models/Service.php`**
```php
// Model menentukan field apa saja yang bisa diisi
protected $fillable = [
    'title',
    'description',
    'type',
    'file_url',
    'is_active',
];
```

**File: `database/migrations/2025_11_10_012404_create_services_table.php`**
```php
// Migration menentukan struktur tabel di database
Schema::create('services', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->text('description');
    // ... dll
});
```

---

### **BAGIAN 2: DATABASE**

#### 2.1. Struktur Database

**Tabel yang digunakan:**
- `services` - Menyimpan data dokumen penting
- `news` - Menyimpan data berita
- `users` - Menyimpan data admin

**Lokasi Migration:**
- `database/migrations/2025_11_10_012404_create_services_table.php`
- `database/migrations/2025_11_12_181757_add_file_url_to_services_table.php`

**Proses:**
```
1. Migration file menentukan struktur tabel
2. php artisan migrate → Membuat tabel di database
3. Model Service.php → Berinteraksi dengan tabel 'services'
4. Eloquent ORM → Query builder Laravel untuk database
```

---

### **BAGIAN 3: ROUTING (Penghubung URL ke Controller/View)**

#### 3.1. File Routing

**Lokasi:** `routes/web.php`

**Contoh Route untuk Halaman Akademik:**
```php
Route::get('/academic', function () {
    // 1. Mengambil data dari Model
    $documents = Service::where('is_active', true)
        ->orderBy('created_at', 'desc')
        ->get();
    
    // 2. Mengirim data ke View
    return view('academic', compact('documents'));
})->name('academic');
```

**Alur Routing:**
```
1. User akses URL: http://localhost:8000/academic
   ↓
2. Laravel mencari route di routes/web.php
   ↓
3. Route handler dijalankan (closure atau Controller)
   ↓
4. Query ke database melalui Model Service
   ↓
5. Data dikirim ke View 'academic'
   ↓
6. View di-render dan dikirim ke browser
```

**Contoh Route dengan Controller:**
```php
// routes/web.php
Route::get('/news', [NewsController::class, 'index'])->name('news');

// app/Http/Controllers/NewsController.php
public function index(Request $request)
{
    // 1. Ambil data dari Model
    $news = News::where('is_published', true)->get();
    
    // 2. Kirim ke View
    return view('news', compact('news'));
}
```

---

### **BAGIAN 4: CONTROLLER (Logika Aplikasi)**

#### 4.1. Struktur Controller

**Lokasi:** `app/Http/Controllers/`

**File yang ada:**
- `NewsController.php` - Menangani logika untuk halaman berita
- `Controller.php` - Base controller

**Contoh Controller:**

**File: `app/Http/Controllers/NewsController.php`**
```php
class NewsController extends Controller
{
    public function index(Request $request)
    {
        // 1. Menerima request dari user (bisa ada parameter)
        $category = $request->get('category');
        
        // 2. Query ke database melalui Model
        $query = News::where('is_published', true);
        
        if ($category) {
            $query->where('category', $category);
        }
        
        $news = $query->orderBy('published_at', 'desc')->get();
        
        // 3. Mengirim data ke View
        return view('news', compact('news', 'category'));
    }
}
```

**Alur Controller:**
```
1. Request masuk → Controller menerima
   ↓
2. Controller memproses logika bisnis
   ↓
3. Controller memanggil Model untuk ambil data
   ↓
4. Controller mengirim data ke View
   ↓
5. View di-render dan dikembalikan ke user
```

---

### **BAGIAN 5: MODEL (Interaksi dengan Database)**

#### 5.1. Struktur Model

**Lokasi:** `app/Models/`

**File yang ada:**
- `Service.php` - Model untuk dokumen penting
- `News.php` - Model untuk berita
- `User.php` - Model untuk user/admin

**Contoh Model:**

**File: `app/Models/Service.php`**
```php
class Service extends Model
{
    // Field yang bisa diisi (mass assignment)
    protected $fillable = [
        'title',
        'description',
        'type',
        'file_url',
        'is_active',
    ];
    
    // Tipe data casting
    protected $casts = [
        'is_active' => 'boolean',
    ];
}
```

**Cara Kerja Model:**
```
1. Model extends Eloquent Model
   ↓
2. Eloquent otomatis menghubungkan ke tabel database
   (Nama Model = Nama Tabel, contoh: Service → services)
   ↓
3. Model menyediakan method untuk query:
   - Service::all() → SELECT * FROM services
   - Service::where('is_active', true)->get()
   - Service::create([...]) → INSERT
   - $service->update([...]) → UPDATE
   - $service->delete() → DELETE
```

**Contoh Penggunaan Model di Route/Controller:**
```php
// Mengambil semua data
$documents = Service::all();

// Mengambil dengan kondisi
$documents = Service::where('is_active', true)->get();

// Mengambil satu data
$document = Service::find(1);

// Membuat data baru
Service::create([
    'title' => 'Judul',
    'description' => 'Deskripsi',
    'type' => 'panduan',
    'is_active' => true,
]);
```

---

### **BAGIAN 6: VIEW (Template HTML)**

#### 6.1. Struktur View

**Lokasi:** `resources/views/`

**File yang ada:**
- `academic.blade.php` - Halaman akademik
- `news.blade.php` - Halaman berita
- `home.blade.php` - Halaman home
- `layouts/app.blade.php` - Layout utama

**Contoh View:**

**File: `resources/views/academic.blade.php`**
```blade
@extends('layouts.app')

@section('content')
    <h2>Dokumen Penting</h2>
    
    {{-- Loop data dari Controller --}}
    @forelse($documents as $document)
        <div>
            <h4>{{ $document->title }}</h4>
            <p>{{ $document->description }}</p>
            @if($document->file_url)
                <a href="{{ $document->file_url }}">Download</a>
            @endif
        </div>
    @empty
        <p>Tidak ada dokumen</p>
    @endforelse
@endsection
```

**Cara Kerja View:**
```
1. Controller mengirim data ke View: view('academic', compact('documents'))
   ↓
2. Blade template engine memproses file .blade.php
   ↓
3. Blade mengganti variabel PHP dengan data:
   - {{ $document->title }} → Menampilkan judul
   - @forelse → Loop data
   ↓
4. HTML final dihasilkan
   ↓
5. HTML dikirim ke browser user
```

**Blade Syntax:**
- `{{ $variable }}` - Menampilkan data (auto escape)
- `{!! $html !!}` - Menampilkan HTML tanpa escape
- `@if`, `@foreach`, `@forelse` - Control structure
- `@extends`, `@section` - Layout inheritance

---

## 🔄 ALUR LENGKAP: Contoh Real dari Admin ke Frontend

### **Skenario: Admin Menambah Dokumen Baru**

#### **STEP 1: Admin Input Data**
```
1. Admin login → http://localhost:8000/admin
2. Klik menu "Dokumen Penting"
3. Klik tombol "New"
4. Isi form:
   - Title: "Panduan Skripsi"
   - Description: "Panduan lengkap..."
   - Type: "Panduan"
   - File URL: "https://example.com/file.pdf"
   - Is Active: ✓
5. Klik "Create"
```

#### **STEP 2: Filament Memproses**
```
1. ServiceResource.php menerima data
2. Validasi data sesuai form()
3. Memanggil Model Service
4. Service::create([...]) dijalankan
5. Eloquent ORM membuat query SQL:
   INSERT INTO services (title, description, type, file_url, is_active)
   VALUES ('Panduan Skripsi', 'Panduan lengkap...', 'panduan', 'https://...', 1)
6. Data tersimpan di database
```

#### **STEP 3: User Akses Frontend**
```
1. User buka browser → http://localhost:8000/academic
2. Laravel mencari route di routes/web.php
3. Route handler dijalankan:
   $documents = Service::where('is_active', true)->get();
4. Eloquent membuat query SQL:
   SELECT * FROM services WHERE is_active = 1
5. Data dikirim ke view('academic', compact('documents'))
```

#### **STEP 4: View Render**
```
1. Blade engine memproses academic.blade.php
2. @forelse loop data $documents
3. Setiap dokumen ditampilkan dengan:
   - {{ $document->title }}
   - {{ $document->description }}
   - Link download jika ada file_url
4. HTML final dikirim ke browser
5. User melihat dokumen baru di halaman akademik
```

---

## 📁 STRUKTUR FILE LENGKAP

```
fikom-website/
│
├── app/                                    # Aplikasi utama
│   ├── Filament/                          # Admin Panel
│   │   ├── Resources/                    # Resource = CRUD Interface
│   │   │   ├── NewsResource.php          # Interface untuk Berita
│   │   │   ├── ServiceResource.php       # Interface untuk Dokumen
│   │   │   └── [Resource]/Pages/
│   │   │       └── Manage[Resource].php  # Halaman manage
│   │   └── Providers/
│   │       └── AdminPanelProvider.php    # Konfigurasi admin
│   │
│   ├── Http/
│   │   └── Controllers/                   # Controller (C)
│   │       └── NewsController.php        # Controller untuk berita
│   │
│   └── Models/                            # Model (M)
│       ├── News.php                      # Model berita
│       ├── Service.php                   # Model dokumen
│       └── User.php                      # Model user
│
├── database/
│   ├── migrations/                        # Struktur database
│   │   ├── create_news_table.php
│   │   └── create_services_table.php
│   └── seeders/                          # Data contoh
│       ├── NewsSeeder.php
│       └── ServiceSeeder.php
│
├── resources/
│   └── views/                            # View (V)
│       ├── academic.blade.php           # Halaman akademik
│       ├── news.blade.php               # Halaman berita
│       ├── home.blade.php               # Halaman home
│       └── layouts/
│           └── app.blade.php            # Layout utama
│
└── routes/
    └── web.php                           # Routing URL
```

---

## 🔍 DETAIL PROSES PER KOMPONEN

### **1. ADMIN PANEL (Filament)**

**File Kunci:**
- `app/Filament/Resources/ServiceResource.php`
- `app/Filament/Providers/Filament/AdminPanelProvider.php`

**Proses:**
```
User Login
  ↓
AdminPanelProvider.php → Cek autentikasi
  ↓
ServiceResource.php → Tampilkan form & tabel
  ↓
User input → Validasi → Simpan ke Model
  ↓
Model → Database
```

### **2. ROUTING**

**File Kunci:**
- `routes/web.php`

**Proses:**
```
URL Request
  ↓
web.php → Cari route yang cocok
  ↓
Route handler (Closure atau Controller)
  ↓
Ambil data dari Model
  ↓
Kirim ke View
```

### **3. CONTROLLER**

**File Kunci:**
- `app/Http/Controllers/NewsController.php`

**Proses:**
```
Request masuk
  ↓
Controller method dijalankan
  ↓
Proses logika bisnis
  ↓
Query Model untuk ambil data
  ↓
Return view dengan data
```

### **4. MODEL**

**File Kunci:**
- `app/Models/Service.php`
- `app/Models/News.php`

**Proses:**
```
Controller/Route memanggil Model
  ↓
Model menggunakan Eloquent ORM
  ↓
Eloquent membuat SQL query
  ↓
Query dijalankan ke database
  ↓
Data dikembalikan sebagai Collection/Object
```

### **5. VIEW**

**File Kunci:**
- `resources/views/academic.blade.php`
- `resources/views/news.blade.php`

**Proses:**
```
Controller return view('academic', $data)
  ↓
Blade engine memproses .blade.php
  ↓
Blade mengganti variabel dengan data
  ↓
HTML final dihasilkan
  ↓
Dikirim ke browser
```

---

## 🎓 KESIMPULAN: Alur Lengkap dalam 1 Flow

```
┌─────────────────────────────────────────────────────────────┐
│                    ADMIN PANEL (Filament)                    │
│  User login → Input data → ServiceResource → Model Service   │
│                      ↓                                       │
│                  DATABASE                                    │
│              (Tabel: services)                               │
└─────────────────────────────────────────────────────────────┘
                            ↓
┌─────────────────────────────────────────────────────────────┐
│                    FRONTEND (Public)                         │
│  User akses URL → Route → Controller/Closure                │
│                      ↓                                       │
│  Model Service → Query database → Ambil data                 │
│                      ↓                                       │
│  View (Blade) → Render HTML → Kirim ke browser               │
│                      ↓                                       │
│              User melihat halaman                            │
└─────────────────────────────────────────────────────────────┘
```

---

## 📝 CATATAN PENTING

1. **MVC Separation:**
   - Model: Hanya data & logika database
   - View: Hanya tampilan HTML
   - Controller: Penghubung Model & View

2. **Filament Admin Panel:**
   - Resource = CRUD interface otomatis
   - Tidak perlu buat Controller manual untuk admin
   - Otomatis generate form & tabel dari Model

3. **Eloquent ORM:**
   - Query builder Laravel
   - Tidak perlu tulis SQL manual
   - Lebih aman (SQL injection protection)

4. **Blade Template:**
   - Template engine Laravel
   - Bisa pakai PHP syntax
   - Support layout inheritance

5. **Routing:**
   - URL → Route → Handler (Closure/Controller)
   - Route bisa dengan parameter
   - Named route untuk mudah reference

---



