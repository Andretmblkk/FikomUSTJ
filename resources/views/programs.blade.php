@extends('layouts.app')

@section('title', 'Program Studi - FIKOM USTJ')
@section('description', 'Program Studi S1 Teknik Informatika dan S1 Sistem Informasi di FIKOM USTJ')

@section('content')
<!-- Menggunakan Hero Section dari Tailwind -->
<section class="relative h-96 md:h-[500px] overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="{{ asset('images/2.jpg') }}" alt="Program Studi FIKOM USTJ" class="w-full h-full object-cover">
    </div>
    <div class="relative z-10 h-full flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="text-center text-white">
                <div class="bg-black bg-opacity-30 rounded-lg p-8">
                    <h1 class="text-4xl md:text-6xl font-bold mb-4">Program Studi</h1>
                    <p class="text-xl md:text-2xl">Dua Program Studi S1 Unggulan dalam Bidang Teknologi Informasi</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Menggunakan Grid Layout dan Card dari Tailwind -->
<section id="sistem-informasi" class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center mb-8">
            <div class="w-16 h-16 bg-blue-600 rounded-lg flex items-center justify-center mr-4">
                <span class="text-white text-2xl">📘</span>
            </div>
            <div>
                <h2 class="text-3xl font-bold text-gray-900">Sistem Informasi</h2>
                <p class="text-gray-600">Program Studi S1 - Gelar S.Kom</p>
            </div>
        </div>
        
        <!-- Profil Prodi -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-12">
            <div>
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Profil Program Studi</h3>
                <div class="space-y-4 text-gray-700">
                    <p>Program Studi Sistem Informasi mempelajari pengembangan sistem informasi untuk mendukung proses bisnis dan pengambilan keputusan dalam organisasi.</p>
                    <p>Mahasiswa akan mempelajari analisis sistem, desain database, pemrograman, manajemen proyek, dan implementasi sistem informasi.</p>
                    <p>Program ini dirancang untuk menghasilkan lulusan yang mampu menganalisis kebutuhan sistem informasi, merancang solusi teknologi, dan mengimplementasikan sistem yang efektif.</p>
                    <p><strong>Kerjasama Praktik:</strong> Program Studi Sistem Informasi memiliki kerjasama praktik/magang dengan instansi lokal seperti Dinas Komunikasi dan Informatika Kabupaten Jayapura untuk memberikan pengalaman nyata kepada mahasiswa.</p>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="w-full h-80 bg-blue-100 rounded-lg flex items-center justify-center">
                    <span class="text-blue-600 text-lg">Foto Program Studi Sistem Informasi</span>
                </div>
            </div>
        </div>
        
        <!-- Visi dan Misi -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-blue-50 rounded-lg p-6">
                <h4 class="text-xl font-bold text-gray-900 mb-4">Visi</h4>
                <p class="text-gray-700">Menjadi program studi unggulan dalam bidang sistem informasi yang menghasilkan lulusan kompeten dan berkarakter di era digital.</p>
            </div>
            <div class="bg-green-50 rounded-lg p-6">
                <h4 class="text-xl font-bold text-gray-900 mb-4">Misi</h4>
                <ul class="text-gray-700 space-y-2">
                    <li>• Menyelenggarakan pendidikan sistem informasi berkualitas</li>
                    <li>• Melakukan penelitian dan pengabdian masyarakat</li>
                    <li>• Mengembangkan kurikulum yang relevan dengan industri</li>
                    <li>• Membangun kemitraan dengan dunia usaha</li>
                </ul>
            </div>
        </div>
        
        <!-- Kurikulum -->
        <div class="mb-12">
            <h3 class="text-2xl font-bold text-gray-900 mb-6">Kurikulum dan Mata Kuliah</h3>
            <div class="bg-white border rounded-lg overflow-hidden">
                <div class="grid grid-cols-1 md:grid-cols-4 bg-gray-50">
                    <div class="p-4 font-semibold text-gray-900">Semester</div>
                    <div class="p-4 font-semibold text-gray-900">Mata Kuliah</div>
                    <div class="p-4 font-semibold text-gray-900">SKS</div>
                    <div class="p-4 font-semibold text-gray-900">Kategori</div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 border-t">
                    <div class="p-4 font-medium">Semester 1</div>
                    <div class="p-4">Pemrograman Dasar</div>
                    <div class="p-4">3</div>
                    <div class="p-4">Wajib</div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 border-t bg-gray-50">
                    <div class="p-4 font-medium">Semester 1</div>
                    <div class="p-4">Matematika Diskrit</div>
                    <div class="p-4">3</div>
                    <div class="p-4">Wajib</div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 border-t">
                    <div class="p-4 font-medium">Semester 2</div>
                    <div class="p-4">Struktur Data</div>
                    <div class="p-4">3</div>
                    <div class="p-4">Wajib</div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 border-t bg-gray-50">
                    <div class="p-4 font-medium">Semester 3</div>
                    <div class="p-4">Analisis Sistem Informasi</div>
                    <div class="p-4">3</div>
                    <div class="p-4">Wajib</div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 border-t">
                    <div class="p-4 font-medium">Semester 4</div>
                    <div class="p-4">Basis Data</div>
                    <div class="p-4">3</div>
                    <div class="p-4">Wajib</div>
                </div>
            </div>
            <div class="mt-4">
                <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Lihat Kurikulum Lengkap →</a>
            </div>
        </div>
        
        <!-- Dosen Prodi -->
        <div class="mb-12">
            <h3 class="text-2xl font-bold text-gray-900 mb-6">Dosen Program Studi</h3>
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
        
        <!-- Kegiatan dan Prestasi -->
        <div>
            <h3 class="text-2xl font-bold text-gray-900 mb-6">Kegiatan dan Prestasi Mahasiswa</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h4 class="text-lg font-semibold text-gray-900 mb-4">Kegiatan Mahasiswa</h4>
                    <ul class="space-y-2 text-gray-700">
                        <li>• Workshop Pengembangan Aplikasi Web</li>
                        <li>• Seminar Nasional Sistem Informasi</li>
                        <li>• Kompetisi Programming</li>
                        <li>• Magang di Perusahaan IT</li>
                        <li>• Proyek Pengabdian Masyarakat</li>
                    </ul>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h4 class="text-lg font-semibold text-gray-900 mb-4">Prestasi Terbaru</h4>
                    <ul class="space-y-2 text-gray-700">
                        <li>• Juara 1 Lomba Aplikasi Mobile Nasional</li>
                        <li>• Juara 2 Hackathon Jakarta 2023</li>
                        <li>• Publikasi di Jurnal Internasional</li>
                        <li>• Startup Berhasil Didanai Investor</li>
                        <li>• Lulusan Terbaik dengan IPK 3.95</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Menggunakan Divider dari Tailwind -->
<div class="h-1 bg-gradient-to-r from-blue-600 to-green-600"></div>

<!-- Menggunakan Grid Layout dan Card dari Tailwind -->
<section id="teknik-informatika" class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center mb-8">
            <div class="w-16 h-16 bg-green-600 rounded-lg flex items-center justify-center mr-4">
                <span class="text-white text-2xl">💻</span>
            </div>
            <div>
                <h2 class="text-3xl font-bold text-gray-900">Teknik Informatika</h2>
                <p class="text-gray-600">Program Studi S1 - Gelar S.T</p>
            </div>
        </div>
        
        <!-- Profil Prodi -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-12">
            <div>
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Profil Program Studi</h3>
                <div class="space-y-4 text-gray-700">
                    <p>Program Studi Teknik Informatika fokus pada pengembangan perangkat lunak, algoritma, dan teknologi komputer untuk memecahkan masalah kompleks.</p>
                    <p>Mahasiswa akan mempelajari pemrograman, algoritma, struktur data, kecerdasan buatan, machine learning, dan pengembangan aplikasi.</p>
                    <p>Program ini dirancang untuk menghasilkan lulusan yang mampu mengembangkan solusi teknologi inovatif dan berkarir di industri teknologi.</p>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="w-full h-80 bg-green-100 rounded-lg flex items-center justify-center">
                    <span class="text-green-600 text-lg">Foto Program Studi Teknik Informatika</span>
                </div>
            </div>
        </div>
        
        <!-- Visi dan Misi -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-green-50 rounded-lg p-6">
                <h4 class="text-xl font-bold text-gray-900 mb-4">Visi</h4>
                <p class="text-gray-700">Menjadi program studi unggulan dalam bidang teknik informatika yang menghasilkan lulusan berkompetensi tinggi di era digital.</p>
            </div>
            <div class="bg-blue-50 rounded-lg p-6">
                <h4 class="text-xl font-bold text-gray-900 mb-4">Misi</h4>
                <ul class="text-gray-700 space-y-2">
                    <li>• Menyelenggarakan pendidikan teknik informatika berkualitas</li>
                    <li>• Melakukan penelitian dan pengabdian masyarakat</li>
                    <li>• Mengembangkan kurikulum yang relevan dengan industri</li>
                    <li>• Membangun kemitraan dengan dunia usaha</li>
                </ul>
            </div>
        </div>
        
        <!-- Kurikulum -->
        <div class="mb-12">
            <h3 class="text-2xl font-bold text-gray-900 mb-6">Kurikulum dan Mata Kuliah</h3>
            <div class="bg-white border rounded-lg overflow-hidden">
                <div class="grid grid-cols-1 md:grid-cols-4 bg-gray-50">
                    <div class="p-4 font-semibold text-gray-900">Semester</div>
                    <div class="p-4 font-semibold text-gray-900">Mata Kuliah</div>
                    <div class="p-4 font-semibold text-gray-900">SKS</div>
                    <div class="p-4 font-semibold text-gray-900">Kategori</div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 border-t">
                    <div class="p-4 font-medium">Semester 1</div>
                    <div class="p-4">Pemrograman Dasar</div>
                    <div class="p-4">3</div>
                    <div class="p-4">Wajib</div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 border-t bg-gray-50">
                    <div class="p-4 font-medium">Semester 1</div>
                    <div class="p-4">Matematika Diskrit</div>
                    <div class="p-4">3</div>
                    <div class="p-4">Wajib</div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 border-t">
                    <div class="p-4 font-medium">Semester 2</div>
                    <div class="p-4">Struktur Data</div>
                    <div class="p-4">3</div>
                    <div class="p-4">Wajib</div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 border-t bg-gray-50">
                    <div class="p-4 font-medium">Semester 3</div>
                    <div class="p-4">Algoritma dan Pemrograman</div>
                    <div class="p-4">3</div>
                    <div class="p-4">Wajib</div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 border-t">
                    <div class="p-4 font-medium">Semester 4</div>
                    <div class="p-4">Machine Learning</div>
                    <div class="p-4">3</div>
                    <div class="p-4">Wajib</div>
                </div>
            </div>
            <div class="mt-4">
                <a href="#" class="text-green-600 hover:text-green-800 font-medium">Lihat Kurikulum Lengkap →</a>
            </div>
        </div>
        
        <!-- Dosen Prodi -->
        <div class="mb-12">
            <h3 class="text-2xl font-bold text-gray-900 mb-6">Dosen Program Studi</h3>
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
        
        <!-- Kegiatan dan Prestasi -->
        <div>
            <h3 class="text-2xl font-bold text-gray-900 mb-6">Kegiatan dan Prestasi Mahasiswa</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h4 class="text-lg font-semibold text-gray-900 mb-4">Kegiatan Mahasiswa</h4>
                    <ul class="space-y-2 text-gray-700">
                        <li>• Workshop Machine Learning</li>
                        <li>• Seminar Nasional Teknologi</li>
                        <li>• Kompetisi Programming</li>
                        <li>• Magang di Startup Teknologi</li>
                        <li>• Proyek Pengabdian Masyarakat</li>
                    </ul>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h4 class="text-lg font-semibold text-gray-900 mb-4">Prestasi Terbaru</h4>
                    <ul class="space-y-2 text-gray-700">
                        <li>• Juara 1 Lomba AI/ML Nasional</li>
                        <li>• Juara 2 Hackathon Jakarta 2023</li>
                        <li>• Publikasi di Jurnal Internasional</li>
                        <li>• Startup Berhasil Didanai Investor</li>
                        <li>• Lulusan Terbaik dengan IPK 3.95</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Menggunakan Call to Action Section dan Button dari Tailwind -->
<section class="py-16 bg-blue-600 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold mb-4">Tertarik Bergabung dengan Kami?</h2>
        <p class="text-xl mb-8">Daftarkan diri Anda sekarang dan wujudkan impian menjadi ahli teknologi informasi!</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">Hubungi Kami</a>
            <a href="#" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition">Pendaftaran Online</a>
        </div>
    </div>
</section>
@endsection
