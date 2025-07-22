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
            'name' => 'Pengurusan Buku Pelaut Merah',
            'slug' => 'pengurusan-buku-pelaut-merah',
            'icon' => 'fas fa-book',
            'short_description' => 'Buku pelaut untuk pelaut asing atau khusus',
            'content' => '
                <h3 class="font-semibold">Tujuan</h3>
                <p>Penerbitan buku pelaut khusus atau pelaut asing (buku pelaut merah).</p>
                <h3 class="font-semibold mt-3">Persyaratan</h3>
                <ul class="list-rapi">
                    <li>Surat pernyataan belum pernah memiliki buku pelaut merah</li>
                    <li>Fotocopy KTP</li>
                    <li>Surat keterangan sehat dari Rumah Sakit/Puskesmas</li>
                    <li>Sertifikat Pelaut (BST-KLM/SKK/MPR/JMPR)</li>
                    <li>Pas foto berwarna terbaru berlatar belakang warna biru, ukuran 3x4 dan 2x3 masing masing 2 lembar</li>
                </ul>
            ',
        ]);

        // Tambahkan layanan lain di sini jika diperlukan
        Layanan::create([
            'name' => 'Layanan Contoh Lain',
            'slug' => 'layanan-contoh-lain',
            'icon' => 'fas fa-cogs',
            'short_description' => 'Ini adalah deskripsi singkat untuk layanan contoh.',
            'content' => '
                <h3 class="font-semibold">Tujuan Layanan Contoh</h3>
                <p>Ini adalah konten lengkap untuk layanan contoh. Anda bisa menambahkan lebih banyak detail di sini.</p>
                <h3 class="font-semibold mt-3">Proses</h3>
                <ol>
                    <li>Langkah pertama</li>
                    <li>Langkah kedua</li>
                    <li>Langkah ketiga</li>
                </ol>
            ',
        ]);
    }
}