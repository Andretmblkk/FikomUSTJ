@extends('layouts.app')

@section('title', 'Penelitian & Pengabdian - FIKOM')
@section('description', 'Penelitian dan Pengabdian Masyarakat FIKOM - Publikasi, Jurnal, dan Hasil Penelitian')

@section('content')
<!-- Menggunakan Hero Section dari Tailwind -->
<section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Penelitian & Pengabdian</h1>
        <p class="text-xl">Publikasi, Jurnal, dan Hasil Penelitian FIKOM</p>
    </div>
</section>

<!-- Menggunakan Grid Layout dan Card dari Tailwind -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-8">Publikasi Dosen dan Mahasiswa</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white border rounded-lg shadow-md p-6">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                        <span class="text-blue-600 text-xl">📄</span>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900">Machine Learning untuk Prediksi</h3>
                        <p class="text-sm text-gray-600">Dr. Rina Wijaya, M.T</p>
                    </div>
                </div>
                <p class="text-gray-700 mb-4">Penelitian tentang implementasi machine learning untuk prediksi cuaca menggunakan algoritma neural network.</p>
                <div class="flex items-center justify-between">
                    <span class="text-sm text-gray-500">2024</span>
                    <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Lihat Detail</a>
                </div>
            </div>
            
            <div class="bg-white border rounded-lg shadow-md p-6">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-3">
                        <span class="text-green-600 text-xl">📄</span>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900">Sistem Informasi Manajemen</h3>
                        <p class="text-sm text-gray-600">Dr. Budi Santoso, M.Kom</p>
                    </div>
                </div>
                <p class="text-gray-700 mb-4">Pengembangan sistem informasi manajemen untuk meningkatkan efisiensi operasional perusahaan.</p>
                <div class="flex items-center justify-between">
                    <span class="text-sm text-gray-500">2024</span>
                    <a href="#" class="text-green-600 hover:text-green-800 font-medium">Lihat Detail</a>
                </div>
            </div>
            
            <div class="bg-white border rounded-lg shadow-md p-6">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mr-3">
                        <span class="text-purple-600 text-xl">📄</span>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900">Aplikasi Mobile E-Commerce</h3>
                        <p class="text-sm text-gray-600">Ahmad Rizki, M.T</p>
                    </div>
                </div>
                <p class="text-gray-700 mb-4">Pengembangan aplikasi mobile untuk platform e-commerce dengan fitur real-time chat dan payment gateway.</p>
                <div class="flex items-center justify-between">
                    <span class="text-sm text-gray-500">2024</span>
                    <a href="#" class="text-purple-600 hover:text-purple-800 font-medium">Lihat Detail</a>
                </div>
            </div>
        </div>
        
        <div class="mt-8 text-center">
            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Lihat Semua Publikasi →</a>
        </div>
    </div>
</section>

<!-- Menggunakan Grid Layout dan Card dari Tailwind -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-8">Jurnal FIKOM</h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div>
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Jurnal Teknologi Informasi</h3>
                <div class="space-y-4">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h4 class="font-bold text-gray-900 mb-2">Volume 1, Nomor 1 - 2024</h4>
                        <p class="text-gray-600 mb-4">Jurnal ini memuat artikel-artikel penelitian terbaru dalam bidang teknologi informasi dan komunikasi.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">ISSN: 1234-5678</span>
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Download PDF</a>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h4 class="font-bold text-gray-900 mb-2">Volume 1, Nomor 2 - 2024</h4>
                        <p class="text-gray-600 mb-4">Edisi khusus tentang machine learning dan artificial intelligence dalam sistem informasi.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">ISSN: 1234-5678</span>
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Download PDF</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div>
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Panduan Publikasi</h3>
                <div class="space-y-4">
                    <div class="bg-white border rounded-lg p-4 flex items-center justify-between">
                        <div>
                            <h4 class="font-semibold text-gray-900">Template Jurnal</h4>
                            <p class="text-sm text-gray-600">Template Microsoft Word untuk penulisan artikel jurnal</p>
                        </div>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Download</a>
                    </div>
                    <div class="bg-white border rounded-lg p-4 flex items-center justify-between">
                        <div>
                            <h4 class="font-semibold text-gray-900">Panduan Penulisan</h4>
                            <p class="text-sm text-gray-600">Panduan lengkap penulisan artikel untuk jurnal FIKOM</p>
                        </div>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Download</a>
                    </div>
                    <div class="bg-white border rounded-lg p-4 flex items-center justify-between">
                        <div>
                            <h4 class="font-semibold text-gray-900">Form Pengajuan</h4>
                            <p class="text-sm text-gray-600">Formulir pengajuan artikel untuk publikasi jurnal</p>
                        </div>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Download</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Menggunakan Grid Layout dan Card dari Tailwind -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-8">Kegiatan Pengabdian Masyarakat</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white border rounded-lg shadow-md overflow-hidden">
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset('images/pengabdian.jpeg') }}" alt="Pelatihan Digital Marketing FIKOM USTJ" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Pelatihan Digital Marketing</h3>
                    <p class="text-gray-600 mb-4">Pelatihan digital marketing untuk UMKM di wilayah Jakarta Selatan dalam rangka meningkatkan penjualan online.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">15 Januari 2024</span>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Lihat Detail</a>
                    </div>
                </div>
            </div>
            
            <div class="bg-white border rounded-lg shadow-md overflow-hidden">
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset('images/seminar.jpg') }}" alt="Workshop Aplikasi Mobile FIKOM USTJ" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Workshop Aplikasi Mobile</h3>
                    <p class="text-gray-600 mb-4">Workshop pengembangan aplikasi mobile untuk komunitas developer di Jakarta dalam rangka meningkatkan skill programming.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">22 Januari 2024</span>
                        <a href="#" class="text-green-600 hover:text-green-800 font-medium">Lihat Detail</a>
                    </div>
                </div>
            </div>
            
            <div class="bg-white border rounded-lg shadow-md overflow-hidden">
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset('images/seminar.jpg') }}" alt="Sosialisasi Keamanan Cyber FIKOM USTJ" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Sosialisasi Keamanan Cyber</h3>
                    <p class="text-gray-600 mb-4">Sosialisasi keamanan cyber untuk masyarakat umum dalam rangka meningkatkan awareness tentang keamanan digital.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">29 Januari 2024</span>
                        <a href="#" class="text-purple-600 hover:text-purple-800 font-medium">Lihat Detail</a>
                    </div>
                </div>
            </div>
            
            <div class="bg-white border rounded-lg shadow-md overflow-hidden">
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset('images/basis data.jpeg') }}" alt="Pelatihan Database Management FIKOM USTJ" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Pelatihan Database Management</h3>
                    <p class="text-gray-600 mb-4">Pelatihan manajemen database untuk staf IT di berbagai perusahaan dalam rangka meningkatkan efisiensi sistem informasi.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">5 Februari 2024</span>
                        <a href="#" class="text-yellow-600 hover:text-yellow-800 font-medium">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Menggunakan Grid Layout dan Card dari Tailwind -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-8">Hasil Penelitian</h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div>
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Penelitian Unggulan</h3>
                <div class="space-y-6">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h4 class="text-lg font-bold text-gray-900 mb-2">Sistem Deteksi Dini Bencana Alam</h4>
                        <p class="text-gray-600 mb-4">Penelitian tentang pengembangan sistem deteksi dini bencana alam menggunakan IoT dan machine learning untuk meningkatkan kesiapsiagaan masyarakat.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">Tim Peneliti: Dr. Rina Wijaya, M.T</span>
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Lihat Detail</a>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h4 class="text-lg font-bold text-gray-900 mb-2">Aplikasi Telemedicine</h4>
                        <p class="text-gray-600 mb-4">Pengembangan aplikasi telemedicine untuk konsultasi kesehatan jarak jauh dengan fitur video call dan rekam medis digital.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">Tim Peneliti: Dr. Budi Santoso, M.Kom</span>
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div>
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Kolaborasi Penelitian</h3>
                <div class="space-y-4">
                    <div class="bg-white border rounded-lg p-4">
                        <h4 class="font-semibold text-gray-900">Kerjasama dengan Universitas MIT</h4>
                        <p class="text-sm text-gray-600">Penelitian bersama tentang artificial intelligence dalam sistem informasi</p>
                        <span class="text-xs text-gray-500">2024 - 2026</span>
                    </div>
                    <div class="bg-white border rounded-lg p-4">
                        <h4 class="font-semibold text-gray-900">Kerjasama dengan Google Indonesia</h4>
                        <p class="text-sm text-gray-600">Pengembangan aplikasi mobile untuk pendidikan</p>
                        <span class="text-xs text-gray-500">2024 - 2025</span>
                    </div>
                    <div class="bg-white border rounded-lg p-4">
                        <h4 class="font-semibold text-gray-900">Kerjasama dengan Kementerian Kominfo</h4>
                        <p class="text-sm text-gray-600">Penelitian tentang keamanan siber dan perlindungan data</p>
                        <span class="text-xs text-gray-500">2024 - 2027</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Menggunakan Grid Layout dan Statistik Card dari Tailwind -->
<section class="py-16 bg-blue-600 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center mb-12">Statistik Penelitian & Pengabdian</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-4xl font-bold mb-2">50+</div>
                <div class="text-blue-200">Publikasi Jurnal</div>
            </div>
            <div>
                <div class="text-4xl font-bold mb-2">25+</div>
                <div class="text-blue-200">Penelitian Aktif</div>
            </div>
            <div>
                <div class="text-4xl font-bold mb-2">15+</div>
                <div class="text-blue-200">Pengabdian Masyarakat</div>
            </div>
            <div>
                <div class="text-4xl font-bold mb-2">10+</div>
                <div class="text-blue-200">Kerjasama Internasional</div>
            </div>
        </div>
    </div>
</section>
@endsection
