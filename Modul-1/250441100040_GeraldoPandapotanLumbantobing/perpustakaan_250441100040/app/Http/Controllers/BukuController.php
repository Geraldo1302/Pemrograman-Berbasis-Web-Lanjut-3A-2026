<?php

namespace App\Http\Controllers;

class BukuController extends Controller
{

    private function dataBuku()
    {
        return [
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
    }


    public function index()
    {
        $buku = $this->dataBuku();

        return view('buku.index', compact('buku'));
    }



    public function show($id)
    {
        $buku = $this->dataBuku();

        $detailBuku = null;

        foreach ($buku as $item) {
            if ($item['id'] == $id) {
                $detailBuku = $item;
                break;
            }
        }

        return view('buku.show', compact('detailBuku'));
    }
}