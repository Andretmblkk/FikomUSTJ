@extends('layouts.app')

@section('title', 'Kontak - FIKOM USTJ')
@section('description', 'Kontak FIKOM USTJ Jayapura - Alamat, Telepon, Email, dan Peta Lokasi')

@section('content')
<!-- Menggunakan Hero Section dari Tailwind -->
<section class="relative h-96 md:h-[500px] overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="{{ asset('images/1.jpg') }}" alt="Kontak FIKOM USTJ" class="w-full h-full object-cover">
    </div>
    <div class="relative z-10 h-full flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="text-center text-white">
                <div class="bg-black bg-opacity-30 rounded-lg p-8">
                    <h1 class="text-4xl md:text-6xl font-bold mb-4">Kontak Kami</h1>
                    <p class="text-xl md:text-2xl">Hubungi FIKOM untuk Informasi Lebih Lanjut</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Menggunakan Grid Layout dan Card dari Tailwind -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Informasi Kontak -->
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-8">Informasi Kontak</h2>
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                            <span class="text-blue-600 text-xl">📍</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Alamat</h3>
                            <p class="text-gray-600">
                                Jl. Sosial Padang Bulan, Hedam<br>
                                Kec. Abepura, Kota Jayapura<br>
                                Papua 99352, Indonesia
                            </p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4">
                            <span class="text-green-600 text-xl">📞</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Telepon</h3>
                            <p class="text-gray-600">
                                (0967) 123-4567<br>
                                (0967) 123-4568<br>
                                Fax: (0967) 123-4569
                            </p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                            <span class="text-purple-600 text-xl">📧</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Email</h3>
                            <p class="text-gray-600">
                                info@fikom.ustj.ac.id<br>
                                akademik@fikom.ustj.ac.id<br>
                                layanan@fikom.ustj.ac.id
                            </p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mr-4">
                            <span class="text-yellow-600 text-xl">🕐</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Jam Operasional</h3>
                            <p class="text-gray-600">
                                Senin - Jumat: 08:00 - 16:00<br>
                                Sabtu: 08:00 - 12:00<br>
                                Minggu: Tutup
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Peta Lokasi -->
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-8">Peta Lokasi</h2>
                <div class="bg-gray-200 rounded-lg h-96 flex items-center justify-center">
                    <div class="text-center">
                        <span class="text-gray-500 text-lg">Google Maps Embed</span>
                        <p class="text-gray-400 text-sm mt-2">Peta interaktif akan ditampilkan di sini</p>
                    </div>
                </div>
                <div class="mt-4">
                    <a href="https://maps.google.com" target="_blank" class="text-blue-600 hover:text-blue-800 font-medium">Buka di Google Maps →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Menggunakan Form dan Input dari Tailwind -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-8">Kirim Pesan</h2>
        <div class="max-w-2xl mx-auto">
            <form class="bg-white rounded-lg shadow-md p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="nama" class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                </div>
                
                <div class="mb-6">
                    <label for="telepon" class="block text-sm font-medium text-gray-700 mb-2">Telepon</label>
                    <input type="tel" id="telepon" name="telepon" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <div class="mb-6">
                    <label for="subjek" class="block text-sm font-medium text-gray-700 mb-2">Subjek</label>
                    <select id="subjek" name="subjek" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        <option value="">Pilih Subjek</option>
                        <option value="informasi">Informasi Umum</option>
                        <option value="pendaftaran">Pendaftaran Mahasiswa Baru</option>
                        <option value="akademik">Informasi Akademik</option>
                        <option value="layanan">Layanan Akademik</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </div>
                
                <div class="mb-6">
                    <label for="pesan" class="block text-sm font-medium text-gray-700 mb-2">Pesan</label>
                    <textarea id="pesan" name="pesan" rows="5" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Tuliskan pesan Anda di sini..." required></textarea>
                </div>
                
                <div class="text-center">
                    <button type="submit" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                        Kirim Pesan
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Menggunakan Grid Layout dan Card dari Tailwind -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Kontak Spesifik</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white border rounded-lg shadow-md p-6 text-center">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-blue-600 text-2xl">👨‍💼</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Dekan</h3>
                <p class="text-gray-600 mb-2">Prof. Dr. Ahmad Rahman, M.Kom</p>
                <p class="text-sm text-gray-500">dekan@fikom.ac.id</p>
                <p class="text-sm text-gray-500">(021) 1234-5678</p>
            </div>
            
            <div class="bg-white border rounded-lg shadow-md p-6 text-center">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-green-600 text-2xl">👩‍💼</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Wakil Dekan</h3>
                <p class="text-gray-600 mb-2">Dr. Siti Nurhaliza, M.T</p>
                <p class="text-sm text-gray-500">wakildekan@fikom.ac.id</p>
                <p class="text-sm text-gray-500">(021) 1234-5679</p>
            </div>
            
            <div class="bg-white border rounded-lg shadow-md p-6 text-center">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-purple-600 text-2xl">📚</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Akademik</h3>
                <p class="text-gray-600 mb-2">Bagian Akademik</p>
                <p class="text-sm text-gray-500">akademik@fikom.ac.id</p>
                <p class="text-sm text-gray-500">(021) 1234-5680</p>
            </div>
            
            <div class="bg-white border rounded-lg shadow-md p-6 text-center">
                <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-yellow-600 text-2xl">📘</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Sistem Informasi</h3>
                <p class="text-gray-600 mb-2">Dr. Budi Santoso, M.Kom</p>
                <p class="text-sm text-gray-500">si@fikom.ac.id</p>
                <p class="text-sm text-gray-500">(021) 1234-5681</p>
            </div>
            
            <div class="bg-white border rounded-lg shadow-md p-6 text-center">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-red-600 text-2xl">💻</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Teknik Informatika</h3>
                <p class="text-gray-600 mb-2">Dr. Rina Wijaya, M.T</p>
                <p class="text-sm text-gray-500">ti@fikom.ac.id</p>
                <p class="text-sm text-gray-500">(021) 1234-5682</p>
            </div>
            
            <div class="bg-white border rounded-lg shadow-md p-6 text-center">
                <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-indigo-600 text-2xl">🛠️</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Layanan</h3>
                <p class="text-gray-600 mb-2">Bagian Layanan</p>
                <p class="text-sm text-gray-500">layanan@fikom.ac.id</p>
                <p class="text-sm text-gray-500">(021) 1234-5683</p>
            </div>
        </div>
    </div>
</section>

<!-- Menggunakan Flexbox dan Icon Button dari Tailwind -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-8">Ikuti Kami</h2>
        <div class="flex justify-center space-x-8">
            <a href="#" class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white hover:bg-blue-700 transition">
                <span class="text-xl">📘</span>
            </a>
            <a href="#" class="w-12 h-12 bg-blue-400 rounded-full flex items-center justify-center text-white hover:bg-blue-500 transition">
                <span class="text-xl">🐦</span>
            </a>
            <a href="#" class="w-12 h-12 bg-pink-600 rounded-full flex items-center justify-center text-white hover:bg-pink-700 transition">
                <span class="text-xl">📷</span>
            </a>
            <a href="#" class="w-12 h-12 bg-blue-700 rounded-full flex items-center justify-center text-white hover:bg-blue-800 transition">
                <span class="text-xl">💼</span>
            </a>
            <a href="#" class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center text-white hover:bg-red-700 transition">
                <span class="text-xl">📺</span>
            </a>
        </div>
    </div>
</section>
@endsection
