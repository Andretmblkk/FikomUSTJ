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
            <a href="{{ route('news', ['category' => 'semua']) }}" class="px-6 py-2 {{ (!$category || $category == 'semua') ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }} rounded-lg font-medium">Semua</a>
            <a href="{{ route('news', ['category' => 'berita']) }}" class="px-6 py-2 {{ $category == 'berita' ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }} rounded-lg font-medium">Berita</a>
            <a href="{{ route('news', ['category' => 'event']) }}" class="px-6 py-2 {{ $category == 'event' ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }} rounded-lg font-medium">Event</a>
            <a href="{{ route('news', ['category' => 'pengumuman']) }}" class="px-6 py-2 {{ $category == 'pengumuman' ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }} rounded-lg font-medium">Pengumuman</a>
        </div>
    </div>
</section>

<!-- Menggunakan Grid Layout dan Card dari Tailwind -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-8">Berita Kampus</h2>
        @if($news->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($news as $item)
            <article class="bg-white border rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                <div class="h-48 overflow-hidden">
                    @if($item->image)
                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-full h-full object-cover" onerror="this.onerror=null; this.src='{{ asset('images/seminar.jpg') }}';">
                    @else
                        <img src="{{ asset('images/seminar.jpg') }}" alt="{{ $item->title }}" class="w-full h-full object-cover">
                    @endif
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-2">
                        @if($item->category == 'berita')
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded capitalize">Berita</span>
                        @elseif($item->category == 'event')
                            <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded capitalize">Event</span>
                        @else
                            <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded capitalize">Pengumuman</span>
                        @endif
                        <span class="text-sm text-gray-500 ml-2">{{ $item->published_at ? $item->published_at->format('d F Y') : $item->created_at->format('d F Y') }}</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $item->title }}</h3>
                    <p class="text-gray-600 mb-4">{{ Str::limit(strip_tags($item->content), 120) }}</p>
                    <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Baca Selengkapnya →</a>
                </div>
            </article>
            @endforeach
        </div>
        @else
        <div class="text-center py-12">
            <p class="text-gray-500 text-lg">Belum ada berita yang dipublikasikan.</p>
        </div>
        @endif
    </div>
</section>

<!-- Menggunakan Grid Layout dan Card dari Tailwind -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-8">Event & Seminar</h2>
        @if($events->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach($events as $event)
            <div class="bg-white border rounded-lg shadow-md overflow-hidden">
                <div class="h-48 overflow-hidden">
                    @if($event->image)
                        <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}" class="w-full h-full object-cover" onerror="this.onerror=null; this.src='{{ asset('images/seminar.jpg') }}';">
                    @else
                        <img src="{{ asset('images/seminar.jpg') }}" alt="{{ $event->title }}" class="w-full h-full object-cover">
                    @endif
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-2">
                        <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded">Event</span>
                        <span class="text-sm text-gray-500 ml-2">{{ $event->published_at ? $event->published_at->format('d F Y') : $event->created_at->format('d F Y') }}</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $event->title }}</h3>
                    <p class="text-gray-600 mb-4">{{ Str::limit(strip_tags($event->content), 120) }}</p>
                    <div class="flex items-center justify-between">
                        <div class="text-sm text-gray-500">
                            <p>📍 FIKOM USTJ</p>
                            <p>🕐 {{ $event->published_at ? $event->published_at->format('H:i') : 'TBA' }} WIB</p>
                        </div>
                        <a href="#" class="text-yellow-600 hover:text-yellow-800 font-medium">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="text-center py-12">
            <p class="text-gray-500 text-lg">Belum ada event yang dipublikasikan.</p>
        </div>
        @endif
    </div>
</section>

<!-- Menggunakan Card dengan Border dari Tailwind -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-8">Pengumuman Resmi</h2>
        @if($announcements->count() > 0)
        <div class="space-y-6">
            @foreach($announcements as $announcement)
            @php
                $mod = $loop->iteration % 4;
            @endphp
            @if($mod == 1)
            <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 rounded-lg">
                <div class="flex items-center mb-2">
                    <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded">Pengumuman</span>
                    <span class="text-sm text-gray-500 ml-2">{{ $announcement->published_at ? $announcement->published_at->format('d F Y') : $announcement->created_at->format('d F Y') }}</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $announcement->title }}</h3>
                <p class="text-gray-700">{{ Str::limit(strip_tags($announcement->content), 200) }}</p>
            </div>
            @elseif($mod == 2)
            <div class="bg-blue-50 border-l-4 border-blue-400 p-6 rounded-lg">
                <div class="flex items-center mb-2">
                    <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Pengumuman</span>
                    <span class="text-sm text-gray-500 ml-2">{{ $announcement->published_at ? $announcement->published_at->format('d F Y') : $announcement->created_at->format('d F Y') }}</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $announcement->title }}</h3>
                <p class="text-gray-700">{{ Str::limit(strip_tags($announcement->content), 200) }}</p>
            </div>
            @elseif($mod == 3)
            <div class="bg-green-50 border-l-4 border-green-400 p-6 rounded-lg">
                <div class="flex items-center mb-2">
                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">Pengumuman</span>
                    <span class="text-sm text-gray-500 ml-2">{{ $announcement->published_at ? $announcement->published_at->format('d F Y') : $announcement->created_at->format('d F Y') }}</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $announcement->title }}</h3>
                <p class="text-gray-700">{{ Str::limit(strip_tags($announcement->content), 200) }}</p>
            </div>
            @else
            <div class="bg-red-50 border-l-4 border-red-400 p-6 rounded-lg">
                <div class="flex items-center mb-2">
                    <span class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded">Pengumuman</span>
                    <span class="text-sm text-gray-500 ml-2">{{ $announcement->published_at ? $announcement->published_at->format('d F Y') : $announcement->created_at->format('d F Y') }}</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $announcement->title }}</h3>
                <p class="text-gray-700">{{ Str::limit(strip_tags($announcement->content), 200) }}</p>
            </div>
            @endif
            @endforeach
        </div>
        @else
        <div class="text-center py-12">
            <p class="text-gray-500 text-lg">Belum ada pengumuman yang dipublikasikan.</p>
        </div>
        @endif
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
