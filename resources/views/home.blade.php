@extends('layouts.app')

@section('title', 'Beranda - FIKOM USTJ')
@section('description', 'Fakultas Ilmu Komputer USTJ Jayapura - Universitas Sains dan Teknologi Jayapura')

@section('content')
<!-- Menggunakan Hero Section dari Tailwind -->
<section class="relative h-96 md:h-[500px] overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="{{ asset('images/fakultas.jpg') }}" alt="Gedung FIKOM USTJ" class="w-full h-full object-cover">
    </div>
    <div class="relative z-10 h-full flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="text-center text-white">
                <div class="bg-black bg-opacity-30 rounded-lg p-8">
                    <h1 class="text-4xl md:text-6xl font-bold mb-4">Selamat Datang di FIKOM</h1>
                    <p class="text-xl md:text-2xl mb-8">Fakultas Ilmu Komputer Dan Manajemen</p>
                    <p class="text-lg mb-8 max-w-3xl mx-auto">Mengembangkan generasi programmer dan teknisi komputer yang kompeten untuk masa depan digital Papua</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('programs') }}" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">Program Studi</a>
                        <a href="{{ route('about') }}" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition">Tentang Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Menggunakan Container dan Button dari Tailwind -->
<section class="py-12 bg-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-2xl font-semibold text-gray-900 mb-3">FIKOM USTJ</h2>
        <p class="text-gray-600 mb-6">Program Studi S1 Teknik Informatika dan S1 Sistem Informasi.</p>
        <div class="flex flex-col sm:flex-row gap-3 justify-center">
            <a href="{{ route('programs') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">Lihat Program Studi</a>
            <a href="{{ route('contact') }}" class="border border-gray-300 text-gray-700 px-6 py-3 rounded-lg font-semibold hover:bg-gray-50 transition">Kontak</a>
        </div>
    </div>
</section>

@endsection
