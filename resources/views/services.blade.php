@extends('layouts.app')

@section('title', 'Layanan - FIKOM')
@section('description', 'Layanan Akademik FIKOM - Surat Online, Kartu Akademik, dan Formulir')

@section('content')
<!-- Menggunakan Hero Section dari Tailwind -->
<section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Layanan Akademik</h1>
        <p class="text-xl">Layanan Online untuk Mahasiswa dan Alumni FIKOM</p>
    </div>
</section>

<!-- Menggunakan Grid Layout dan Card dari Tailwind -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-8">📌 Surat Online</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white border rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                    <span class="text-blue-600 text-xl">📄</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Surat Keterangan Aktif Kuliah</h3>
                <p class="text-gray-600 mb-4">Surat keterangan bahwa mahasiswa sedang aktif mengikuti perkuliahan</p>
                <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Ajukan Sekarang →</a>
            </div>
            
            <div class="bg-white border rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                    <span class="text-green-600 text-xl">📄</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Surat Keterangan Cuti Akademik</h3>
                <p class="text-gray-600 mb-4">Surat keterangan cuti akademik untuk mahasiswa yang mengajukan cuti</p>
                <a href="#" class="text-green-600 hover:text-green-800 font-medium">Ajukan Sekarang →</a>
            </div>
            
            <div class="bg-white border rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                    <span class="text-purple-600 text-xl">📄</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Surat Pengantar Penelitian</h3>
                <p class="text-gray-600 mb-4">Surat pengantar untuk penelitian, PKL, atau magang</p>
                <a href="#" class="text-purple-600 hover:text-purple-800 font-medium">Ajukan Sekarang →</a>
            </div>
            
            <div class="bg-white border rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mb-4">
                    <span class="text-yellow-600 text-xl">📄</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Surat Keterangan Lulus</h3>
                <p class="text-gray-600 mb-4">Surat keterangan lulus untuk mahasiswa yang telah menyelesaikan studi</p>
                <a href="#" class="text-yellow-600 hover:text-yellow-800 font-medium">Ajukan Sekarang →</a>
            </div>
        </div>
    </div>
</section>

<!-- Menggunakan Grid Layout dan Card dari Tailwind -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-8">📌 Kartu & Transkrip Akademik</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white border rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                    <span class="text-blue-600 text-xl">🎫</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Kartu Rencana Studi (KRS)</h3>
                <p class="text-gray-600 mb-4">Kartu rencana studi untuk semester berjalan</p>
                <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Download →</a>
            </div>
            
            <div class="bg-white border rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                    <span class="text-green-600 text-xl">📊</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Kartu Hasil Studi (KHS)</h3>
                <p class="text-gray-600 mb-4">Kartu hasil studi untuk semester yang telah selesai</p>
                <a href="#" class="text-green-600 hover:text-green-800 font-medium">Download →</a>
            </div>
            
            <div class="bg-white border rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                    <span class="text-purple-600 text-xl">📋</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Transkrip Nilai Sementara</h3>
                <p class="text-gray-600 mb-4">Transkrip nilai sementara untuk keperluan akademik</p>
                <a href="#" class="text-purple-600 hover:text-purple-800 font-medium">Download →</a>
            </div>
            
            <div class="bg-white border rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mb-4">
                    <span class="text-yellow-600 text-xl">✅</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Legalisasi Ijazah & Transkrip</h3>
                <p class="text-gray-600 mb-4">Legalisasi ijazah dan transkrip untuk keperluan resmi</p>
                <a href="#" class="text-yellow-600 hover:text-yellow-800 font-medium">Ajukan Sekarang →</a>
            </div>
        </div>
    </div>
</section>

<!-- Menggunakan Grid Layout dan Card dari Tailwind -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-8">📌 Formulir Akademik (Download)</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white border rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                    <span class="text-blue-600 text-xl">📝</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Formulir Pengajuan Cuti Kuliah</h3>
                <p class="text-gray-600 mb-4">Formulir untuk mengajukan cuti kuliah</p>
                <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Download PDF →</a>
            </div>
            
            <div class="bg-white border rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                    <span class="text-green-600 text-xl">📝</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Formulir Perpanjangan Studi</h3>
                <p class="text-gray-600 mb-4">Formulir untuk mengajukan perpanjangan masa studi</p>
                <a href="#" class="text-green-600 hover:text-green-800 font-medium">Download PDF →</a>
            </div>
            
            <div class="bg-white border rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                    <span class="text-purple-600 text-xl">📝</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Formulir Perubahan Data Mahasiswa</h3>
                <p class="text-gray-600 mb-4">Formulir untuk mengubah data pribadi mahasiswa</p>
                <a href="#" class="text-purple-600 hover:text-purple-800 font-medium">Download PDF →</a>
            </div>
            
            <div class="bg-white border rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mb-4">
                    <span class="text-yellow-600 text-xl">📝</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Formulir Pindah Prodi/Kelas</h3>
                <p class="text-gray-600 mb-4">Formulir untuk pindah program studi atau kelas</p>
                <a href="#" class="text-yellow-600 hover:text-yellow-800 font-medium">Download PDF →</a>
            </div>
        </div>
    </div>
</section>

<!-- Menggunakan Grid Layout dan Card dari Tailwind -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-8">Panduan Layanan</h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div>
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Cara Mengajukan Surat Online</h3>
                <div class="space-y-4">
                    <div class="bg-white rounded-lg p-6 shadow-md">
                        <h4 class="font-semibold text-gray-900 mb-2">1. Login ke Portal Mahasiswa</h4>
                        <p class="text-gray-600">Masuk ke portal mahasiswa menggunakan NIM dan password yang telah diberikan.</p>
                    </div>
                    <div class="bg-white rounded-lg p-6 shadow-md">
                        <h4 class="font-semibold text-gray-900 mb-2">2. Pilih Jenis Surat</h4>
                        <p class="text-gray-600">Pilih jenis surat yang ingin diajukan sesuai dengan kebutuhan Anda.</p>
                    </div>
                    <div class="bg-white rounded-lg p-6 shadow-md">
                        <h4 class="font-semibold text-gray-900 mb-2">3. Isi Formulir</h4>
                        <p class="text-gray-600">Lengkapi formulir dengan data yang benar dan lengkap sesuai dengan persyaratan.</p>
                    </div>
                    <div class="bg-white rounded-lg p-6 shadow-md">
                        <h4 class="font-semibold text-gray-900 mb-2">4. Upload Dokumen Pendukung</h4>
                        <p class="text-gray-600">Upload dokumen pendukung yang diperlukan sesuai dengan jenis surat yang diajukan.</p>
                    </div>
                    <div class="bg-white rounded-lg p-6 shadow-md">
                        <h4 class="font-semibold text-gray-900 mb-2">5. Submit dan Tunggu Verifikasi</h4>
                        <p class="text-gray-600">Submit pengajuan dan tunggu proses verifikasi dari admin. Status akan diupdate melalui email.</p>
                    </div>
                </div>
            </div>
            
            <div>
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Persyaratan Umum</h3>
                <div class="space-y-4">
                    <div class="bg-white rounded-lg p-6 shadow-md">
                        <h4 class="font-semibold text-gray-900 mb-2">📋 Dokumen Wajib</h4>
                        <ul class="text-gray-600 space-y-1">
                            <li>• KTP atau identitas resmi</li>
                            <li>• Kartu mahasiswa aktif</li>
                            <li>• Pas foto terbaru</li>
                            <li>• Dokumen pendukung sesuai jenis surat</li>
                        </ul>
                    </div>
                    <div class="bg-white rounded-lg p-6 shadow-md">
                        <h4 class="font-semibold text-gray-900 mb-2">⏰ Waktu Proses</h4>
                        <ul class="text-gray-600 space-y-1">
                            <li>• Surat Keterangan: 1-2 hari kerja</li>
                            <li>• Legalisasi: 3-5 hari kerja</li>
                            <li>• Transkrip: 1 hari kerja</li>
                            <li>• Formulir: Langsung download</li>
                        </ul>
                    </div>
                    <div class="bg-white rounded-lg p-6 shadow-md">
                        <h4 class="font-semibold text-gray-900 mb-2">💰 Biaya Layanan</h4>
                        <ul class="text-gray-600 space-y-1">
                            <li>• Surat Keterangan: Gratis</li>
                            <li>• Legalisasi: Rp 25.000</li>
                            <li>• Transkrip: Rp 15.000</li>
                            <li>• Formulir: Gratis</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Menggunakan Grid Layout dan Card dari Tailwind -->
<section class="py-16 bg-blue-600 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center mb-8">Butuh Bantuan?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div>
                <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">📞</span>
                </div>
                <h3 class="text-xl font-bold mb-2">Telepon</h3>
                <p class="text-blue-200">(021) 1234-5678</p>
                <p class="text-blue-200">Senin - Jumat, 08:00 - 16:00</p>
            </div>
            <div>
                <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">📧</span>
                </div>
                <h3 class="text-xl font-bold mb-2">Email</h3>
                <p class="text-blue-200">layanan@fikom.ac.id</p>
                <p class="text-blue-200">Respon dalam 24 jam</p>
            </div>
            <div>
                <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">💬</span>
                </div>
                <h3 class="text-xl font-bold mb-2">Live Chat</h3>
                <p class="text-blue-200">Chat langsung dengan admin</p>
                <p class="text-blue-200">Senin - Jumat, 08:00 - 16:00</p>
            </div>
        </div>
    </div>
</section>
@endsection
