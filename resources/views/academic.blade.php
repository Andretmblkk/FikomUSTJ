@extends('layouts.app')

@section('title', 'Akademik - FIKOM')
@section('description', 'Informasi Akademik FIKOM - Kalender, Jadwal, Peraturan, dan Panduan')

@section('content')
<!-- Menggunakan Hero Section dari Tailwind -->
<section class="relative h-96 md:h-[500px] overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="{{ asset('images/3.jpg') }}" alt="Informasi Akademik FIKOM USTJ" class="w-full h-full object-cover">
    </div>
    <div class="relative z-10 h-full flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="text-center text-white">
                <div class="bg-black bg-opacity-30 rounded-lg p-8">
                    <h1 class="text-4xl md:text-6xl font-bold mb-4">Informasi Akademik</h1>
                    <p class="text-xl md:text-2xl">Kalender, Jadwal, Peraturan, dan Panduan Akademik</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Menggunakan Grid Layout dan Card dari Tailwind -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-8">Kalender Akademik 2024/2025</h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div>
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Jadwal Penting</h3>
                <div class="space-y-4">
                    <div class="bg-blue-50 border-l-4 border-blue-600 p-4">
                        <h4 class="font-semibold text-gray-900">Pendaftaran Mahasiswa Baru</h4>
                        <p class="text-gray-600">1 Maret - 30 April 2024</p>
                    </div>
                    <div class="bg-green-50 border-l-4 border-green-600 p-4">
                        <h4 class="font-semibold text-gray-900">Perkuliahan Semester Ganjil</h4>
                        <p class="text-gray-600">2 September - 20 Desember 2024</p>
                    </div>
                    <div class="bg-yellow-50 border-l-4 border-yellow-600 p-4">
                        <h4 class="font-semibold text-gray-900">Ujian Tengah Semester</h4>
                        <p class="text-gray-600">21 - 25 Oktober 2024</p>
                    </div>
                    <div class="bg-red-50 border-l-4 border-red-600 p-4">
                        <h4 class="font-semibold text-gray-900">Ujian Akhir Semester</h4>
                        <p class="text-gray-600">16 - 20 Desember 2024</p>
                    </div>
                    <div class="bg-purple-50 border-l-4 border-purple-600 p-4">
                        <h4 class="font-semibold text-gray-900">Libur Semester</h4>
                        <p class="text-gray-600">21 Desember 2024 - 5 Januari 2025</p>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="w-full h-96 bg-gray-200 rounded-lg flex items-center justify-center">
                    <span class="text-gray-500 text-lg">Kalender Akademik 2024/2025</span>
                </div>
            </div>
        </div>
        <div class="mt-8">
            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Download Kalender Akademik Lengkap →</a>
        </div>
    </div>
</section>

<!-- Menggunakan Grid Layout dan Card dari Tailwind -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-8">Jadwal Kuliah dan Ujian</h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Jadwal Kuliah -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Jadwal Kuliah</h3>
                <div class="space-y-4">
                    <div class="border rounded-lg p-4">
                        <h4 class="font-semibold text-gray-900">Sistem Informasi - Semester 1</h4>
                        <div class="mt-2 space-y-2 text-sm text-gray-600">
                            <p>📅 Senin, Rabu, Jumat</p>
                            <p>🕐 08:00 - 10:00 | Pemrograman Dasar</p>
                            <p>🕐 10:00 - 12:00 | Matematika Diskrit</p>
                            <p>📍 Ruang A101</p>
                        </div>
                    </div>
                    <div class="border rounded-lg p-4">
                        <h4 class="font-semibold text-gray-900">Teknik Informatika - Semester 1</h4>
                        <div class="mt-2 space-y-2 text-sm text-gray-600">
                            <p>📅 Selasa, Kamis</p>
                            <p>🕐 08:00 - 10:00 | Pemrograman Dasar</p>
                            <p>🕐 10:00 - 12:00 | Algoritma</p>
                            <p>📍 Ruang A102</p>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Lihat Jadwal Lengkap →</a>
                </div>
            </div>
            
            <!-- Jadwal Ujian -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Jadwal Ujian</h3>
                <div class="space-y-4">
                    <div class="border rounded-lg p-4">
                        <h4 class="font-semibold text-gray-900">Ujian Tengah Semester</h4>
                        <div class="mt-2 space-y-2 text-sm text-gray-600">
                            <p>📅 21 - 25 Oktober 2024</p>
                            <p>🕐 08:00 - 10:00 | Sistem Informasi</p>
                            <p>🕐 10:00 - 12:00 | Teknik Informatika</p>
                            <p>📍 Ruang Ujian A</p>
                        </div>
                    </div>
                    <div class="border rounded-lg p-4">
                        <h4 class="font-semibold text-gray-900">Ujian Akhir Semester</h4>
                        <div class="mt-2 space-y-2 text-sm text-gray-600">
                            <p>📅 16 - 20 Desember 2024</p>
                            <p>🕐 08:00 - 10:00 | Sistem Informasi</p>
                            <p>🕐 10:00 - 12:00 | Teknik Informatika</p>
                            <p>📍 Ruang Ujian A</p>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Lihat Jadwal Ujian Lengkap →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Menggunakan Grid Layout dan Card dari Tailwind -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-8">Peraturan Akademik</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white border rounded-lg p-6 shadow-md">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                    <span class="text-blue-600 text-xl">📋</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Peraturan Umum</h3>
                <ul class="space-y-2 text-gray-700">
                    <li>• Kehadiran minimal 80%</li>
                    <li>• IPK minimal 2.0 untuk kelulusan</li>
                    <li>• Masa studi maksimal 7 tahun</li>
                    <li>• Tata tertib perkuliahan</li>
                </ul>
                <div class="mt-4">
                    <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Download PDF →</a>
                </div>
            </div>
            
            <div class="bg-white border rounded-lg p-6 shadow-md">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                    <span class="text-green-600 text-xl">📊</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Sistem Penilaian</h3>
                <ul class="space-y-2 text-gray-700">
                    <li>• UTS: 30%</li>
                    <li>• UAS: 40%</li>
                    <li>• Tugas: 20%</li>
                    <li>• Kehadiran: 10%</li>
                </ul>
                <div class="mt-4">
                    <a href="#" class="text-green-600 hover:text-green-800 font-medium">Download PDF →</a>
                </div>
            </div>
            
            <div class="bg-white border rounded-lg p-6 shadow-md">
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                    <span class="text-purple-600 text-xl">🎓</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Persyaratan Kelulusan</h3>
                <ul class="space-y-2 text-gray-700">
                    <li>• Menyelesaikan 144 SKS</li>
                    <li>• IPK minimal 2.0</li>
                    <li>• Menyelesaikan skripsi</li>
                    <li>• Lulus ujian komprehensif</li>
                </ul>
                <div class="mt-4">
                    <a href="#" class="text-purple-600 hover:text-purple-800 font-medium">Download PDF →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Menggunakan Grid Layout dan Card dari Tailwind -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-8">Panduan Skripsi dan Tugas Akhir</h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div>
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Proses Skripsi</h3>
                <div class="space-y-4">
                    <div class="bg-white rounded-lg p-6 shadow-md">
                        <h4 class="font-semibold text-gray-900 mb-2">1. Pengajuan Judul</h4>
                        <p class="text-gray-600">Mahasiswa mengajukan judul skripsi kepada dosen pembimbing yang telah ditentukan.</p>
                    </div>
                    <div class="bg-white rounded-lg p-6 shadow-md">
                        <h4 class="font-semibold text-gray-900 mb-2">2. Seminar Proposal</h4>
                        <p class="text-gray-600">Presentasi proposal skripsi di hadapan dosen penguji untuk mendapatkan persetujuan.</p>
                    </div>
                    <div class="bg-white rounded-lg p-6 shadow-md">
                        <h4 class="font-semibold text-gray-900 mb-2">3. Penelitian dan Penulisan</h4>
                        <p class="text-gray-600">Melakukan penelitian sesuai proposal dan menulis skripsi dengan bimbingan dosen.</p>
                    </div>
                    <div class="bg-white rounded-lg p-6 shadow-md">
                        <h4 class="font-semibold text-gray-900 mb-2">4. Sidang Skripsi</h4>
                        <p class="text-gray-600">Presentasi hasil penelitian di hadapan tim penguji untuk penilaian akhir.</p>
                    </div>
                </div>
            </div>
            <div>
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Dokumen Penting</h3>
                <div class="space-y-4">
                    <div class="bg-white border rounded-lg p-4 flex items-center justify-between">
                        <div>
                            <h4 class="font-semibold text-gray-900">Panduan Penulisan Skripsi</h4>
                            <p class="text-sm text-gray-600">Format dan struktur penulisan skripsi</p>
                        </div>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Download</a>
                    </div>
                    <div class="bg-white border rounded-lg p-4 flex items-center justify-between">
                        <div>
                            <h4 class="font-semibold text-gray-900">Template Skripsi</h4>
                            <p class="text-sm text-gray-600">Template Microsoft Word untuk skripsi</p>
                        </div>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Download</a>
                    </div>
                    <div class="bg-white border rounded-lg p-4 flex items-center justify-between">
                        <div>
                            <h4 class="font-semibold text-gray-900">Form Pengajuan Judul</h4>
                            <p class="text-sm text-gray-600">Formulir untuk pengajuan judul skripsi</p>
                        </div>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Download</a>
                    </div>
                    <div class="bg-white border rounded-lg p-4 flex items-center justify-between">
                        <div>
                            <h4 class="font-semibold text-gray-900">Jadwal Sidang Skripsi</h4>
                            <p class="text-sm text-gray-600">Jadwal sidang skripsi semester ini</p>
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
        <h2 class="text-3xl font-bold text-gray-900 mb-8">Informasi Tambahan</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-blue-50 rounded-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Konsultasi Akademik</h3>
                <p class="text-gray-700 mb-4">Mahasiswa dapat berkonsultasi dengan dosen pembimbing akademik untuk masalah akademik dan karir.</p>
                <ul class="space-y-2 text-gray-700">
                    <li>• Jadwal konsultasi: Senin - Jumat</li>
                    <li>• Waktu: 08:00 - 16:00</li>
                    <li>• Lokasi: Ruang Dosen</li>
                    <li>• Kontak: konsultasi@fikom.ac.id</li>
                </ul>
            </div>
            
            <div class="bg-green-50 rounded-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Bantuan Akademik</h3>
                <p class="text-gray-700 mb-4">Layanan bantuan akademik untuk mahasiswa yang mengalami kesulitan dalam pembelajaran.</p>
                <ul class="space-y-2 text-gray-700">
                    <li>• Tutorial tambahan</li>
                    <li>• Konsultasi mata kuliah</li>
                    <li>• Bantuan penulisan skripsi</li>
                    <li>• Mentoring akademik</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
