<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data dokumen penting untuk bagian akademik
        $documents = [
            [
                'title' => 'Panduan Penulisan Skripsi',
                'description' => 'Format dan struktur penulisan skripsi sesuai dengan pedoman akademik FIKOM USTJ',
                'type' => 'panduan',
                'file_url' => '#',
                'is_active' => true,
            ],
            [
                'title' => 'Template Skripsi',
                'description' => 'Template Microsoft Word untuk skripsi dengan format yang sudah disesuaikan',
                'type' => 'template',
                'file_url' => '#',
                'is_active' => true,
            ],
            [
                'title' => 'Form Pengajuan Judul',
                'description' => 'Formulir untuk pengajuan judul skripsi kepada dosen pembimbing',
                'type' => 'form',
                'file_url' => '#',
                'is_active' => true,
            ],
            [
                'title' => 'Jadwal Sidang Skripsi',
                'description' => 'Jadwal sidang skripsi semester ini untuk mahasiswa yang akan menyelesaikan studi',
                'type' => 'jadwal',
                'file_url' => '#',
                'is_active' => true,
            ],
            [
                'title' => 'Panduan Seminar Proposal',
                'description' => 'Panduan lengkap untuk mengikuti seminar proposal skripsi termasuk persiapan dan prosedur',
                'type' => 'panduan',
                'file_url' => '#',
                'is_active' => true,
            ],
            [
                'title' => 'Template Proposal Skripsi',
                'description' => 'Template Microsoft Word untuk proposal skripsi dengan format standar',
                'type' => 'template',
                'file_url' => '#',
                'is_active' => true,
            ],
            [
                'title' => 'Form Bimbingan Skripsi',
                'description' => 'Formulir untuk mencatat progress bimbingan skripsi dengan dosen pembimbing',
                'type' => 'form',
                'file_url' => '#',
                'is_active' => true,
            ],
            [
                'title' => 'Peraturan Akademik FIKOM',
                'description' => 'Peraturan dan tata tertib akademik Fakultas Ilmu Komputer USTJ',
                'type' => 'peraturan',
                'file_url' => '#',
                'is_active' => true,
            ],
            [
                'title' => 'Panduan KRS dan KHS',
                'description' => 'Panduan cara mengisi Kartu Rencana Studi (KRS) dan melihat Kartu Hasil Studi (KHS)',
                'type' => 'panduan',
                'file_url' => '#',
                'is_active' => true,
            ],
            [
                'title' => 'Jadwal Perkuliahan Semester Ganjil 2024/2025',
                'description' => 'Jadwal lengkap perkuliahan untuk semester ganjil tahun akademik 2024/2025',
                'type' => 'jadwal',
                'file_url' => '#',
                'is_active' => true,
            ],
            [
                'title' => 'Form Pengajuan Cuti Akademik',
                'description' => 'Formulir untuk mengajukan cuti akademik kepada bagian akademik',
                'type' => 'form',
                'file_url' => '#',
                'is_active' => true,
            ],
            [
                'title' => 'Peraturan Sistem Penilaian',
                'description' => 'Peraturan dan ketentuan sistem penilaian mata kuliah di FIKOM USTJ',
                'type' => 'peraturan',
                'file_url' => '#',
                'is_active' => true,
            ],
        ];

        foreach ($documents as $document) {
            Service::create($document);
        }

        $this->command->info('Berhasil membuat ' . count($documents) . ' dokumen penting!');
    }
}
