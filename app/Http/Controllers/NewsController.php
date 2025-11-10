<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->get('category');
        
        // Query untuk berita utama (filter berdasarkan kategori jika dipilih)
        $query = News::where('is_published', true);
        
        if ($category && $category !== 'semua' && $category !== 'all') {
            $query->where('category', $category);
        }
        
        $news = $query->orderBy('published_at', 'desc')->get();
        
        // Event untuk section terpisah (selalu tampilkan 2 terbaru)
        $events = News::where('is_published', true)
            ->where('category', 'event')
            ->orderBy('published_at', 'desc')
            ->limit(2)
            ->get();
        
        // Pengumuman untuk section terpisah
        $announcements = News::where('is_published', true)
            ->where('category', 'pengumuman')
            ->orderBy('published_at', 'desc')
            ->get();
        
        return view('news', compact('news', 'events', 'announcements', 'category'));
    }
}
