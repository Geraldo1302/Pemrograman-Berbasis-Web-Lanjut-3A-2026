<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataBuku = [
            [
                'id' => 1,
                'judul' => 'Laskar Pelangi',
                'penulis' => 'Andrea Hirata',
                'tahun' => 2005,
                'kategori' => 'Novel',
                'deskripsi' => 'Novel yang menceritakan perjuangan dan persahabatan anak-anak Belitung dalam mengejar pendidikan.'
            ],
            [
                'id' => 2,
                'judul' => 'Bumi Manusia',
                'penulis' => 'Pramoedya Ananta Toer',
                'tahun' => 1980,
                'kategori' => 'Sejarah',
                'deskripsi' => 'Novel yang menggambarkan kehidupan Minke dan kondisi sosial masyarakat pada masa kolonial.'
            ],
            [
                'id' => 3,
                'judul' => 'Negeri 5 Menara',
                'penulis' => 'Ahmad Fuadi',
                'tahun' => 2009,
                'kategori' => 'Inspirasi',
                'deskripsi' => 'Kisah perjuangan seorang anak dalam menuntut ilmu dan mengejar cita-cita melalui pendidikan.'
            ],
            [
                'id' => 4,
                'judul' => 'Filosofi Teras',
                'penulis' => 'Henry Manampiring',
                'tahun' => 2018,
                'kategori' => 'Pengembangan Diri',
                'deskripsi' => 'Buku yang memperkenalkan filosofi Stoisisme dan penerapannya dalam kehidupan sehari-hari.'
            ],
            [
                'id' => 5,
                'judul' => 'Atomic Habits',
                'penulis' => 'James Clear',
                'tahun' => 2018,
                'kategori' => 'Produktivitas',
                'deskripsi' => 'Buku mengenai bagaimana kebiasaan kecil dapat memberikan perubahan besar dalam kehidupan.'
            ],
        ];

        foreach ($dataBuku as $buku) {
            Buku::updateOrCreate(['id' => $buku['id']], $buku);
        }
    }
}