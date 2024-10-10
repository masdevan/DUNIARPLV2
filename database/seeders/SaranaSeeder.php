<?php

namespace Database\Seeders;

use App\Models\Sarana;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SaranaSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            Sarana::create([
                'gambar' => 'https://i.imgur.com/aosMt37.jpeg',
                'judul' => 'Judul Sarana ' . $i,
                'deskripsi' => 'Deskripsi untuk Sarana ' . $i,
            ]);
        }
    }
}
