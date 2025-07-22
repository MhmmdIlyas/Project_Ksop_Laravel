<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Layanan;

class LayananSeeder extends Seeder {
    public function run(): void {
        Layanan::create([
            'judul' => 'Pengurusan Buku Pelaut Merah',
            'konten' => '
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
            '
        ]);
    }
}

