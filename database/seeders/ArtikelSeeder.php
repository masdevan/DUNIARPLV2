<?php

namespace Database\Seeders;

use App\Models\Artikel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArtikelSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            Artikel::create([
                'gambar' => 'https://i.imgur.com/aosMt37.jpeg',
                'judul' => 'Judul Artikel ' . $i,
                'deskripsi' => 'Deskripsi untuk Artikel ' . $i,
                'kategori' => 'Kategori ' . $i,
            ]);
        }
    }
}
