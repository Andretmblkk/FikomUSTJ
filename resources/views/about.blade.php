@extends('layouts.app')

@section('title', 'Tentang - FIKOM USTJ')
@section('description', 'Tentang Fakultas Ilmu Komputer USTJ Jayapura - Sejarah, Visi Misi, Struktur Organisasi, dan Profil Pimpinan')

@section('content')
<!-- Menggunakan Hero Section dari Tailwind -->
<section class="relative h-96 md:h-[500px] overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="{{ asset('images/1.jpg') }}" alt="Tentang FIKOM USTJ" class="w-full h-full object-cover">
    </div>
    <div class="relative z-10 h-full flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="text-center text-white">
                <div class="bg-black bg-opacity-30 rounded-lg p-8">
                    <h1 class="text-4xl md:text-6xl font-bold mb-4">Tentang FIKOM</h1>
                    <p class="text-xl md:text-2xl">Fakultas Ilmu Komputer Manajemen dan USTJ - Mengembangkan Generasi Programmer Papua</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Menggunakan Grid Layout dari Tailwind -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-8">Sejarah FIKOM USTJ</h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="space-y-4 text-gray-700">
                    <p>Fakultas Ilmu Komputer dan Manajemen (FIKOM) USTJ memiliki sejarah panjang yang dimulai dari Program Studi Aplikasi Komputer Diploma I di tahun 1993 di masa Akademi Teknik Jayapura (ATJ).</p>
                    <p>Perjalanan institusi mengalami transformasi: ATJ → STTJ (1995) → ISTJ (1999) → USTJ (2003). Saat USTJ berdiri pada tahun 2003, FIKOM juga dibuka sebagai fakultas yang berkomitmen mengembangkan pendidikan teknologi informasi berkualitas di Papua.</p>
                    <p>Dengan pengalaman lebih dari 30 tahun dalam pendidikan teknologi informasi, FIKOM USTJ telah menghasilkan ratusan lulusan yang berhasil berkontribusi di berbagai sektor industri teknologi di Papua dan Indonesia Timur.</p>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="w-full h-80 rounded-lg overflow-hidden shadow-lg">
                    <img src="{{ asset('images/fakultas.jpg') }}" alt="Gedung FIKOM USTJ" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Menggunakan Grid Layout dan Card dari Tailwind -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Visi, Misi, dan Tujuan</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Visi -->
            <div class="bg-white rounded-lg shadow-md p-8">
                <div class="text-center mb-6">
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white text-2xl">👁️</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">Visi</h3>
                </div>
                <p class="text-gray-700 text-center">"Menjadikan FIKOM USTJ sebagai fakultas terunggul bidang Teknologi Informasi di Indonesia Timur pada tahun 2030."</p>
            </div>
            
            <!-- Misi -->
            <div class="bg-white rounded-lg shadow-md p-8">
                <div class="text-center mb-6">
                    <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white text-2xl">🎯</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">Misi</h3>
                </div>
                <ul class="text-gray-700 space-y-2">
                    <li>• Menyelenggarakan pendidikan teknologi informasi berkualitas</li>
                    <li>• Melakukan penelitian dan pengabdian masyarakat</li>
                    <li>• Meningkatkan akreditasi program studi</li>
                    <li>• Mengembangkan kompetensi dosen dan mahasiswa</li>
                    <li>• Memperbaiki sarana dan prasarana pembelajaran</li>
                    <li>• Membangun kemitraan dengan instansi lokal</li>
                </ul>
            </div>
            
            <!-- Tujuan -->
            <div class="bg-white rounded-lg shadow-md p-8">
                <div class="text-center mb-6">
                    <div class="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white text-2xl">🎯</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">Tujuan</h3>
                </div>
                <ul class="text-gray-700 space-y-2">
                    <li>• Menghasilkan lulusan yang kompeten</li>
                    <li>• Mengembangkan ilmu pengetahuan</li>
                    <li>• Berperan dalam pembangunan bangsa</li>
                    <li>• Membangun karakter mahasiswa</li>
                    <li>• Menjadi pusat unggulan teknologi</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Menggunakan Container dan Image dari Tailwind -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Struktur Organisasi</h2>
        <div class="flex justify-center">
            <div class="w-full max-w-3xl rounded-lg overflow-hidden shadow-lg">
                <img src="{{ asset('images/struktur.jpg') }}" alt="Struktur Organisasi FIKOM USTJ" class="w-full h-auto object-contain">
            </div>
        </div>
    </div>
</section>

<!-- Menggunakan Grid Layout dan Card dari Tailwind -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Fokus Kompetensi</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-white rounded-lg shadow-md p-6 text-center">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-blue-600 text-2xl">💻</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Rekayasa Perangkat Lunak</h3>
                <p class="text-gray-600">Software Engineering dan pengembangan aplikasi</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6 text-center">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-green-600 text-2xl">🗄️</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Basis Data</h3>
                <p class="text-gray-600">Database design dan management system</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6 text-center">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-purple-600 text-2xl">🌐</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Web Development</h3>
                <p class="text-gray-600">Pengembangan aplikasi web dan teknologi web</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6 text-center">
                <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-yellow-600 text-2xl">🔗</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Jaringan Komputer</h3>
                <p class="text-gray-600">Computer networking dan sistem komunikasi</p>
            </div>
        </div>
    </div>
</section>

<!-- Menggunakan Grid Layout dan Card dari Tailwind -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Pimpinan Fakultas</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Dekan -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="h-64 overflow-hidden">
                    <img src="{{ asset('images/struktur.jpg') }}" alt="Foto Dekan FIKOM USTJ" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Prof. Dr. Ahmad Rahman, M.Kom</h3>
                    <p class="text-blue-600 font-semibold mb-4">Dekan</p>
                    <p class="text-gray-600 mb-4">Doktor Teknik Informatika dengan pengalaman 20 tahun di bidang teknologi informasi dan komunikasi.</p>
                    <div class="space-y-1 text-sm text-gray-500">
                        <p>📧 ahmad.rahman@fikom.ac.id</p>
                        <p>📞 (021) 1234-5678</p>
                    </div>
                </div>
            </div>
            
            <!-- Wakil Dekan -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="h-64 overflow-hidden">
                    <img src="{{ asset('images/struktur.jpg') }}" alt="Foto Wakil Dekan FIKOM USTJ" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Dr. Siti Nurhaliza, M.T</h3>
                    <p class="text-green-600 font-semibold mb-4">Wakil Dekan</p>
                    <p class="text-gray-600 mb-4">Doktor Sistem Informasi dengan spesialisasi dalam pengembangan sistem informasi manajemen.</p>
                    <div class="space-y-1 text-sm text-gray-500">
                        <p>📧 siti.nurhaliza@fikom.ac.id</p>
                        <p>📞 (021) 1234-5679</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Menggunakan Grid Layout dan Card dari Tailwind -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Dosen dan Tenaga Kependidikan</h2>
        
        <!-- Sistem Informasi -->
        <div class="mb-12">
            <h3 class="text-2xl font-bold text-gray-900 mb-6">📘 Program Studi Sistem Informasi</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-blue-600 font-bold">DR</span>
                    </div>
                    <h4 class="text-lg font-semibold text-center text-gray-900">Dr. Budi Santoso, M.Kom</h4>
                    <p class="text-center text-blue-600 mb-2">Ketua Prodi</p>
                    <p class="text-sm text-gray-600 text-center">Spesialisasi: Database & Sistem Informasi</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-blue-600 font-bold">MS</span>
                    </div>
                    <h4 class="text-lg font-semibold text-center text-gray-900">Maya Sari, M.Kom</h4>
                    <p class="text-center text-blue-600 mb-2">Dosen</p>
                    <p class="text-sm text-gray-600 text-center">Spesialisasi: Analisis Sistem</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-blue-600 font-bold">AR</span>
                    </div>
                    <h4 class="text-lg font-semibold text-center text-gray-900">Ahmad Rizki, M.T</h4>
                    <p class="text-center text-blue-600 mb-2">Dosen</p>
                    <p class="text-sm text-gray-600 text-center">Spesialisasi: E-Commerce</p>
                </div>
            </div>
        </div>
        
        <!-- Teknik Informatika -->
        <div>
            <h3 class="text-2xl font-bold text-gray-900 mb-6">💻 Program Studi Teknik Informatika</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-green-600 font-bold">DR</span>
                    </div>
                    <h4 class="text-lg font-semibold text-center text-gray-900">Dr. Rina Wijaya, M.T</h4>
                    <p class="text-center text-green-600 mb-2">Ketua Prodi</p>
                    <p class="text-sm text-gray-600 text-center">Spesialisasi: Machine Learning</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-green-600 font-bold">MS</span>
                    </div>
                    <h4 class="text-lg font-semibold text-center text-gray-900">Eko Prasetyo, M.Kom</h4>
                    <p class="text-center text-green-600 mb-2">Dosen</p>
                    <p class="text-sm text-gray-600 text-center">Spesialisasi: Web Development</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-green-600 font-bold">AR</span>
                    </div>
                    <h4 class="text-lg font-semibold text-center text-gray-900">Dewi Kartika, M.T</h4>
                    <p class="text-center text-green-600 mb-2">Dosen</p>
                    <p class="text-sm text-gray-600 text-center">Spesialisasi: Mobile Development</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Menggunakan Grid Layout dan Card dari Tailwind -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Fasilitas</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset('images/lab.jpg') }}" alt="Laboratorium Komputer FIKOM USTJ" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Laboratorium Komputer</h3>
                    <p class="text-gray-600">Fasilitas laboratorium komputer modern dengan 50 unit komputer terbaru untuk mendukung pembelajaran praktik.</p>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset('images/ruang_kuliah.jpg') }}" alt="Ruang Kuliah FIKOM USTJ" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Ruang Kuliah Ber-AC</h3>
                    <p class="text-gray-600">Ruang kuliah yang nyaman dengan fasilitas AC, proyektor, dan sound system untuk mendukung proses pembelajaran.</p>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset('images/perpustakaan.jpg') }}" alt="Perpustakaan FIKOM USTJ" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Perpustakaan Digital</h3>
                    <p class="text-gray-600">Perpustakaan dengan koleksi buku dan jurnal digital untuk mendukung penelitian dan pembelajaran.</p>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset('images/lapangan.jpg') }}" alt="Area WiFi FIKOM USTJ" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Internet WiFi</h3>
                    <p class="text-gray-600">Akses internet WiFi berkecepatan tinggi di seluruh area fakultas untuk mendukung pembelajaran online.</p>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset('images/seminar.jpg') }}" alt="Auditorium FIKOM USTJ" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Auditorium</h3>
                    <p class="text-gray-600">Auditorium berkapasitas 200 orang untuk seminar, presentasi, dan kegiatan akademik lainnya.</p>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset('images/ruang_ujian.jpg') }}" alt="Ruang Diskusi FIKOM USTJ" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Ruang Diskusi</h3>
                    <p class="text-gray-600">Ruang diskusi kelompok untuk mahasiswa melakukan diskusi dan kerja kelompok.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
