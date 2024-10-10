<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Galeri;

class GaleriSeeder extends Seeder
{
    public function run()
    {
        // Membuat 10 data galeri dummy
        for ($i = 1; $i <= 10; $i++) {
            Galeri::create([
                'gambar' => 'https://i.imgur.com/aosMt37.jpeg',
                'judul' => 'Judul Galeri ' . $i,
            ]);
        }
    }
}

