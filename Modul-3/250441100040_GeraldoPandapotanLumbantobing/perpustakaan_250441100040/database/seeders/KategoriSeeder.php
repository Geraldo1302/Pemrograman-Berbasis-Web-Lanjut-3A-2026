<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $kategoris = ['Fiksi', 'Sejarah', 'Pengembangan Diri'];

        foreach ($kategoris as $nama) {
            Kategori::create(['nama' => $nama]);
        }
    }
}