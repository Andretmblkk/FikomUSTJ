@extends('layouts.app')

@section('title', 'Berita & Pengumuman - FIKOM')
@section('description', 'Berita, Event, dan Pengumuman Terbaru dari FIKOM')

@section('content')
<!-- Menggunakan Hero Section dari Tailwind -->
<section class="relative h-96 md:h-[500px] overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="{{ asset('images/4.jpg') }}" alt="Berita & Pengumuman FIKOM USTJ" class="w-full h-full object-cover">
    </div>
    <div class="relative z-10 h-full flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="text-center text-white">
                <div class="bg-black bg-opacity-30 rounded-lg p-8">
                    <h1 class="text-4xl md:text-6xl font-bold mb-4">Berita & Pengumuman</h1>
                    <p class="text-xl md:text-2xl">Informasi Terbaru dari FIKOM</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Menggunakan Tabs/Button dari Tailwind -->
<section class="py-8 bg-white border-b">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap gap-4">
            <button class="px-6 py-2 bg-blue-600 text-white rounded-lg font-medium">Semua</button>
            <button class="px-6 py-2 bg-gray-200 text-gray-700 rounded-lg font-medium hover:bg-gray-300">Berita</button>
            <button class="px-6 py-2 bg-gray-200 text-gray-700 rounded-lg font-medium hover:bg-gray-300">Event</button>
            <button class="px-6 py-2 bg-gray-200 text-gray-700 rounded-lg font-medium hover:bg-gray-300">Pengumuman</button>
        </div>
    </div>
</section>

<!-- Menggunakan Grid Layout dan Card dari Tailwind -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-8">Berita Kampus</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <article class="bg-white border rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset('images/ujian.jpg') }}" alt="Pendaftaran Mahasiswa Baru FIKOM USTJ" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-2">
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Berita</span>
                        <span class="text-sm text-gray-500 ml-2">15 Januari 2024</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Pendaftaran Mahasiswa Baru 2024 Dibuka</h3>
                    <p class="text-gray-600 mb-4">Pendaftaran mahasiswa baru untuk tahun akademik 2024/2025 telah dibuka. Segera daftarkan diri Anda untuk bergabung dengan FIKOM!</p>
                    <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Baca Selengkapnya →</a>
                </div>
            </article>
            
            <article class="bg-white border rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset('images/wisuda.jpg') }}" alt="Mahasiswa FIKOM Raih Juara Programming" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-2">
                        <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">Berita</span>
                        <span class="text-sm text-gray-500 ml-2">12 Januari 2024</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Mahasiswa FIKOM Raih Juara 1 Lomba Programming</h3>
                    <p class="text-gray-600 mb-4">Tim mahasiswa FIKOM berhasil meraih juara 1 dalam kompetisi programming nasional yang diselenggarakan di Jakarta.</p>
                    <a href="#" class="text-green-600 hover:text-green-800 font-medium">Baca Selengkapnya →</a>
                </div>
            </article>
            
            <article class="bg-white border rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset('images/seminar.jpg') }}" alt="Seminar Teknologi Informasi FIKOM USTJ" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-2">
                        <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded">Berita</span>
                        <span class="text-sm text-gray-500 ml-2">10 Januari 2024</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">FIKOM Terima Akreditasi A</h3>
                    <p class="text-gray-600 mb-4">Fakultas Ilmu Komunikasi berhasil mendapatkan akreditasi A dari BAN-PT untuk kedua program studinya.</p>
                    <a href="#" class="text-purple-600 hover:text-purple-800 font-medium">Baca Selengkapnya →</a>
                </div>
            </article>
        </div>
        
        <div class="mt-8 text-center">
            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Lihat Semua Berita →</a>
        </div>
    </div>
</section>

<!-- Menggunakan Grid Layout dan Card dari Tailwind -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-8">Event & Seminar</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white border rounded-lg shadow-md overflow-hidden">
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset('images/seminar.jpg') }}" alt="Seminar Nasional Teknologi Informasi FIKOM USTJ" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-2">
                        <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded">Event</span>
                        <span class="text-sm text-gray-500 ml-2">20 Februari 2024</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Seminar Nasional Teknologi Informasi 2024</h3>
                    <p class="text-gray-600 mb-4">Seminar nasional tentang perkembangan teknologi informasi terkini dengan pembicara dari berbagai universitas dan industri.</p>
                    <div class="flex items-center justify-between">
                        <div class="text-sm text-gray-500">
                            <p>📍 Auditorium FIKOM</p>
                            <p>🕐 08:00 - 17:00 WIB</p>
                        </div>
                        <a href="#" class="text-yellow-600 hover:text-yellow-800 font-medium">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
            
            <div class="bg-white border rounded-lg shadow-md overflow-hidden">
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset('images/yudisium.jpeg') }}" alt="Workshop Programming FIKOM USTJ" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-2">
                        <span class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded">Event</span>
                        <span class="text-sm text-gray-500 ml-2">25 Februari 2024</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Workshop Machine Learning</h3>
                    <p class="text-gray-600 mb-4">Workshop hands-on tentang machine learning untuk pemula dengan praktik langsung menggunakan Python dan TensorFlow.</p>
                    <div class="flex items-center justify-between">
                        <div class="text-sm text-gray-500">
                            <p>📍 Lab Komputer FIKOM</p>
                            <p>🕐 09:00 - 16:00 WIB</p>
                        </div>
                        <a href="#" class="text-red-600 hover:text-red-800 font-medium">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-8 text-center">
            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Lihat Semua Event →</a>
        </div>
    </div>
</section>

<!-- Menggunakan Card dengan Border dari Tailwind -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-8">Pengumuman Resmi</h2>
        <div class="space-y-6">
            <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 rounded-lg">
                <div class="flex items-center mb-2">
                    <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded">Penting</span>
                    <span class="text-sm text-gray-500 ml-2">18 Januari 2024</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Perubahan Jadwal Ujian Tengah Semester</h3>
                <p class="text-gray-700">Diberitahukan kepada seluruh mahasiswa bahwa jadwal ujian tengah semester akan diubah dari tanggal 21-25 Oktober menjadi 28 Oktober - 1 November 2024.</p>
            </div>
            
            <div class="bg-blue-50 border-l-4 border-blue-400 p-6 rounded-lg">
                <div class="flex items-center mb-2">
                    <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Informasi</span>
                    <span class="text-sm text-gray-500 ml-2">16 Januari 2024</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Pembukaan Pendaftaran Beasiswa 2024</h3>
                <p class="text-gray-700">Pendaftaran beasiswa untuk mahasiswa berprestasi dan kurang mampu telah dibuka. Silakan ajukan aplikasi melalui portal akademik.</p>
            </div>
            
            <div class="bg-green-50 border-l-4 border-green-400 p-6 rounded-lg">
                <div class="flex items-center mb-2">
                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">Update</span>
                    <span class="text-sm text-gray-500 ml-2">14 Januari 2024</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Update Sistem Informasi Akademik</h3>
                <p class="text-gray-700">Sistem informasi akademik telah diperbarui dengan fitur-fitur baru. Silakan login untuk melihat perubahan yang tersedia.</p>
            </div>
            
            <div class="bg-red-50 border-l-4 border-red-400 p-6 rounded-lg">
                <div class="flex items-center mb-2">
                    <span class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded">Penting</span>
                    <span class="text-sm text-gray-500 ml-2">12 Januari 2024</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Pembatasan Akses WiFi Kampus</h3>
                <p class="text-gray-700">Mulai tanggal 15 Januari 2024, akses WiFi kampus akan dibatasi hanya untuk mahasiswa aktif. Pastikan status keaktifan Anda terupdate.</p>
            </div>
        </div>
        
        <div class="mt-8 text-center">
            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Lihat Semua Pengumuman →</a>
        </div>
    </div>
</section>

<!-- Menggunakan Form Input dan Button dari Tailwind -->
<section class="py-16 bg-blue-600 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold mb-4">Berlangganan Newsletter</h2>
        <p class="text-xl mb-8">Dapatkan informasi terbaru dari FIKOM langsung di email Anda</p>
        <div class="max-w-md mx-auto">
            <div class="flex gap-4">
                <input type="email" placeholder="Masukkan email Anda" class="flex-1 px-4 py-3 rounded-lg text-gray-900 focus:outline-none focus:ring-2 focus:ring-white">
                <button class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">Berlangganan</button>
            </div>
            <p class="text-sm text-blue-200 mt-2">Kami akan mengirimkan informasi terbaru setiap minggu</p>
        </div>
    </div>
</section>
@endsection
