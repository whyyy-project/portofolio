<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PortofolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('portofolio')->insert([
            [
                'slug' => Str::slug('sistem-absensi-iot'),
                'title' => 'Aplikasi Absensi Siswa Berbasis IoT & Web',
                'sort_desc' => 'Aplikasi absensi berbasis IoT web untuk sekolah.',
                'category' => 'Web Development',
                'instansi' => 'MA Al-Abror Sukosewu',
                'client' => 'MA Al-Abror Sukosewu',
                'date' => '2023-06-15',
                'url' => 'https://absensi.sirese.biz.id',
                'head_desc' => 'Sistem ini dibuat untuk memudahkan proses absensi siswa di sekolah secara real-time.',
                'desc' => 'Menggunakan PHP Basic dan MySQL, sistem ini menyediakan fitur absensi, rekap kehadiran, dan laporan. Siswa dapat melakukan absensi menggunakan RFID ID Card yang telah di buat menjadi Kartu Tanda Pelajar. Sistem ini juga dilengkapi dengan fitur rekap kehadiran dan laporan yang dapat diakses oleh guru dan admin. Admin dan Guru dapat mengelola data siswa, data absensi, perubahan status siswa izin ataupun sakit dan data laporan dengan mudah.',
                'img' => 'absensi1.jpg<break>absensi2.jpg<break>absensi3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => Str::slug('Website Profil Desa Berbasis Laravel'),
                'title' => 'Website Profil Desa Berbasis Laravel',
                'sort_desc' => 'Website resmi profil desa dengan konten dinamis.',
                'category' => 'Web Development',
                'instansi' => 'Desa Sumberwangi',
                'client' => 'Pemdes Sumberwangi',
                'date' => '2024-01-10',
                'url' => 'https://desasumberwangi.id',
                'head_desc' => 'Website ini menyajikan informasi profil desa, perangkat desa, dan berita terkini.',
                'desc' => 'Dibangun menggunakan Laravel dan TailwindCSS, serta terintegrasi dengan CMS sederhana untuk admin.',
                'img' => 'desa1.jpg<break>desa2.jpg<break>desa3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
