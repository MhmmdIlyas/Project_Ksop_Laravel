<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Layanan;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Layanan::create([
            'nama' => 'Pengurusan Buku Pelaut Baru',
            'deskripsi' => '<p>Isi awal deskripsi untuk pelaut baru...</p>'
        ]);

        Layanan::create([
            'nama' => 'Pengurusan Buku Pelaut Merah',
            'deskripsi' => '<p>Isi awal deskripsi untuk pelaut merah...</p>'
        ]);
    }
}
