<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pastikan direktori storage/app/public/news ada
        $newsDir = storage_path('app/public/news');
        if (!File::exists($newsDir)) {
            File::makeDirectory($newsDir, 0755, true);
        }

        // Data berita contoh
        $newsData = [
            [
                'title' => 'Seminar Teknologi Informasi 2024',
                'content' => '<p>Fakultas Ilmu Komputer USTJ mengadakan Seminar Teknologi Informasi 2024 dengan tema "Digital Transformation in Modern Era". Seminar ini akan menghadirkan pembicara dari berbagai industri teknologi terkemuka.</p><p>Acara akan dilaksanakan pada tanggal 15 Desember 2024 di Auditorium FIKOM USTJ. Daftar segera untuk mendapatkan tempat terbatas!</p>',
                'image' => 'seminar.jpg',
                'category' => 'event',
                'published_at' => now()->subDays(5),
                'is_published' => true,
            ],
            [
                'title' => 'Pembukaan Pendaftaran Mahasiswa Baru 2025',
                'content' => '<p>Fakultas Ilmu Komputer USTJ membuka pendaftaran mahasiswa baru untuk tahun akademik 2025/2026. Program studi yang tersedia meliputi Teknik Informatika, Sistem Informasi, dan Teknologi Informasi.</p><p>Pendaftaran dibuka mulai tanggal 1 Januari 2025. Informasi lebih lanjut dapat dilihat di website resmi atau hubungi bagian akademik.</p>',
                'image' => 'fakultas.jpg',
                'category' => 'pengumuman',
                'published_at' => now()->subDays(3),
                'is_published' => true,
            ],
            [
                'title' => 'Fasilitas Laboratorium Komputer Terbaru',
                'content' => '<p>FIKOM USTJ telah melengkapi fasilitas laboratorium komputer dengan peralatan terbaru. Laboratorium ini dilengkapi dengan komputer high-end, server, dan peralatan jaringan modern untuk mendukung kegiatan praktikum mahasiswa.</p><p>Dengan fasilitas ini, mahasiswa dapat melakukan praktikum dengan lebih optimal dan mengikuti perkembangan teknologi terkini.</p>',
                'image' => 'lab.jpg',
                'category' => 'berita',
                'published_at' => now()->subDays(7),
                'is_published' => true,
            ],
            [
                'title' => 'Perpustakaan Digital FIKOM USTJ',
                'content' => '<p>Perpustakaan FIKOM USTJ kini telah dilengkapi dengan sistem perpustakaan digital yang memudahkan mahasiswa dalam mengakses berbagai referensi dan jurnal ilmiah.</p><p>Mahasiswa dapat mengakses koleksi digital melalui website perpustakaan dengan menggunakan akun kampus mereka.</p>',
                'image' => 'perpustakaan.jpg',
                'category' => 'berita',
                'published_at' => now()->subDays(10),
                'is_published' => true,
            ],
            [
                'title' => 'Workshop Pengembangan Web Modern',
                'content' => '<p>FIKOM USTJ mengadakan workshop pengembangan web modern yang akan membahas teknologi terkini seperti React, Vue.js, dan Laravel. Workshop ini terbuka untuk semua mahasiswa FIKOM.</p><p>Pendaftaran dibuka mulai tanggal 10 Desember 2024. Kuota terbatas untuk 30 peserta.</p>',
                'image' => 'web.jpeg',
                'category' => 'event',
                'published_at' => now()->subDays(2),
                'is_published' => true,
            ],
            [
                'title' => 'Wisuda Mahasiswa FIKOM Angkatan 2024',
                'content' => '<p>Fakultas Ilmu Komputer USTJ mengucapkan selamat kepada seluruh mahasiswa yang telah menyelesaikan studi dan akan diwisuda pada tanggal 20 Desember 2024.</p><p>Acara wisuda akan dilaksanakan di Auditorium Utama USTJ. Para wisudawan diharapkan hadir tepat waktu dengan mengenakan toga sesuai ketentuan.</p>',
                'image' => 'wisuda.jpg',
                'category' => 'pengumuman',
                'published_at' => now()->subDays(1),
                'is_published' => true,
            ],
            [
                'title' => 'Ruang Kuliah Ber-AC untuk Kenyamanan Belajar',
                'content' => '<p>Seluruh ruang kuliah di FIKOM USTJ telah dilengkapi dengan AC untuk memberikan kenyamanan dalam proses belajar mengajar. Dengan fasilitas ini, diharapkan mahasiswa dapat lebih fokus dalam mengikuti perkuliahan.</p>',
                'image' => 'ruang_kuliah.jpg',
                'category' => 'berita',
                'published_at' => now()->subDays(15),
                'is_published' => true,
            ],
            [
                'title' => 'Pengumuman Ujian Akhir Semester',
                'content' => '<p>Diberitahukan kepada seluruh mahasiswa FIKOM USTJ bahwa Ujian Akhir Semester (UAS) akan dilaksanakan mulai tanggal 15 Januari 2025. Jadwal lengkap dapat dilihat di portal akademik.</p><p>Mahasiswa diharapkan mempersiapkan diri dengan baik dan mengikuti ujian sesuai jadwal yang telah ditentukan.</p>',
                'image' => 'ujian.jpg',
                'category' => 'pengumuman',
                'published_at' => now()->subDays(4),
                'is_published' => true,
            ],
        ];

        foreach ($newsData as $data) {
            $imageName = $data['image'];
            $sourcePath = public_path('images/' . $imageName);
            $destinationPath = 'news/' . $imageName;

            // Copy gambar dari public/images ke storage/app/public/news
            if (File::exists($sourcePath)) {
                // Pastikan direktori tujuan ada
                $destinationDir = storage_path('app/public/news');
                if (!File::exists($destinationDir)) {
                    File::makeDirectory($destinationDir, 0755, true);
                }

                // Copy file
                File::copy($sourcePath, storage_path('app/public/' . $destinationPath));

                // Simpan path relatif di database
                $data['image'] = $destinationPath;
            } else {
                // Jika gambar tidak ada, set null
                $data['image'] = null;
                $this->command->warn("Gambar {$imageName} tidak ditemukan, skip gambar untuk berita: {$data['title']}");
            }

            // Buat berita
            News::create($data);
        }

        $this->command->info('Berhasil membuat ' . count($newsData) . ' berita contoh!');
    }
}

