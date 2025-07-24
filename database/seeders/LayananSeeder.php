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

        Layanan::create([
            'name' => 'Pengurusan Buku Pelaut Baru',
            'slug' => 'pengurusan-buku-pelaut-baru',
            'icon' => 'fas fa-book-medical', // Contoh ikon, pilih yang sesuai
            'short_description' => 'Penerbitan buku pelaut untuk pelaut yang belum pernah memiliki buku pelaut sebelumnya.',
            'content' => '
                <h3 class="font-semibold">Tujuan</h3>
                <p>Penerbitan buku pelaut untuk pelaut yang belum pernah memiliki buku pelaut sebelumnya.</p>
                <h3 class="font-semibold mt-3">Persyaratan</h3>
                <ul class="list-rapi">
                    <li>Surat Pernyataan Belum Pernah Memiliki BUKU PELAUT</li>
                    <li>Fotokopi Sertifikat Keahlian Pelaut dan atau Sertifikat Keterampilan Pelaut</li>
                    <li>Surat keterangan PRALA bagi TARUNA/I yang akan melaksanakan praktek kerja laut</li>
                    <li>Dokumen asli sertifikat keahlian pelaut atau sertifikat keterampilan pelaut</li>
                    <li>Surat keterangan sehat</li>
                    <li>Surat keterangan catatan kepolisian (SKCK)</li>
                    <li>Fotokopi AKTE KELAHIRAN/Surat kenal lahir/Kartu tanda pendudu (KTP)</li>
                    <li>Pas Foto ukuran 5x5 dan 3x4 masing masing sebanyak 3 lembar memakai baju putih polos lengan panjang berdasi hitam dengan latar belakang biru atau bagian NAUTIKA (dek) dan merah untuk TEKNIKA (mesin)</li>
                </ul>
                <h3 class="font-semibold mt-3">Link Terkait :</h3>
                <ul class="list-rapi">
                    <li>
                        <a href="https://dokumenpelaut.dephub.go.id/" class="text-blue-600">Pendaftaran Buku Pelaut</a>
                    </li>
                    <li>
                        <a href="https://vt.tiktok.com/ZSB2vuE5V/" class="text-blue-600">Tutorial</a>
                    </li>
                </ul>
            ',
        ]);

        Layanan::create([
            'name' => 'Perpanjangan Buku Pelaut',
            'slug' => 'perpanjangan-buku-pelaut',
            'icon' => 'fas fa-sync-alt', // Contoh ikon
            'short_description' => 'Memperpanjang masa berlaku buku pelaut yang sudah habis (Biaya dikenakan 10.000).',
            'content' => '
                <h3 class="font-semibold">Tujuan</h3>
                <p>Memperpanjang masa berlaku buku pelaut yang sudah habis (Biaya dikenakan 10.000).</p>
                <h3 class="font-semibold mt-3">Persyaratan</h3>
                <ul class="list-rapi">
                    <li>Fotokopi sertifikat keahlian pelaut yang sudah disahkan oleh Syahbandar</li>
                    <li>Fotokopi sertifikat keterampilan pelaut yang sudah disahkan oleh Syahbandar</li>
                    <li>Sertifikat keterampilan pelaut asli yang sudah disahkan oleh Syahbandar</li>
                    <li>Fotokopi AKTE KELAHIRAN / Surat Kenal Lahir / Kartu Tanda Penduduk (KTP)</li>
                    <li>Buku Pelaut Asli</li>
                </ul>
                <h3 class="font-semibold mt-3">Prosedur</h3>
                <ul class="list-rapi">
                    <li>Mengajukan permohonan yang sudah di lampirkan persyaratan</li>
                    <li>Proses verifikasi</li>
                    <li>Penerbitan buku pelaut yang diperpanjang</li>
                </ul>
            ',
        ]);

        Layanan::create([
            'name' => 'Penggantian Buku Pelaut',
            'slug' => 'penggantian-buku-pelaut',
            'icon' => 'fas fa-exchange-alt', // Contoh ikon
            'short_description' => 'Penggantian buku pelaut yang hilang, rusak, atau penuh.',
            'content' => '
                <h3 class="font-semibold">Tujuan</h3>
                <p>Penggantian buku pelaut yang hilang, rusak, atau penuh.</p>
                <h3 class="font-semibold mt-3">Persyaratan</h3>
                <ul class="list-rapi">
                    <li>Fotokopi Sertifikat Keahlian Pelaut dan atau Sertifikat Keterampilan Pelaut</li>
                    <li>Surat keterangan PRALA bagi TARUNA/I yang akan melaksanakan praktek kerja laut</li>
                    <li>Dokumen asli sertifikat keahlian pelaut atau sertifikat keterampilan pelaut</li>
                    <li>Surat keterangan masa berlayar yang diketahuii syahbandar atau KBRI setempat bagi pelaut yang pernah berlayar</li>
                    <li>Surat keterangan sehat</li>
                    <li>Fotokopi AKTE KELAHIRAN/Surat kenal lahir/Kartu tanda penduduk (KTP)</li>
                    <li>Buku pelaut lama (Asli)</li>
                    <li>Surat kehilangan dari kepolisian apabila buku hilang</li>
                </ul>
                <h3 class="font-semibold mt-3">Prosedur</h3>
                <ul class="list-rapi">
                    <li>Isi formulir penggantian</li>
                    <li>Verifikasi petugas</li>
                    <li>Penerbitan buku pengganti</li>
                </ul>
            ',
        ]);

        Layanan::create([
            'name' => 'Pengurusan Masalayar',
            'slug' => 'pengurusan-masalayar',
            'icon' => 'fas fa-ship', // Contoh ikon
            'short_description' => 'Persiapan dan pengesahan dokumen untuk pelaut yang akan berlayar.',
            'content' => '
                <h3 class="font-semibold">Tujuan</h3>
                <p>Persiapan dan pengesahan dokumen untuk pelaut yang akan berlayar.</p>
                <h3 class="font-semibold mt-3">Persyaratan :</h3>
                <h3 class="font-semibold mt-3">Untuk Umum</h3>
                <ul class="list-rapi">
                    <li>Surat Permohonan kepada Kantor KSOP Utama Makassar</li>
                    <li>Buku Pelaut Asli yang sudah di Sijil</li>
                    <li>Fotokopi Buku Pelaut</li>
                    <li>Fotokopi Sertifikat Keahlian Pelaut</li>
                    <li>Print Out Sertifikat (Sertifikat Online 
                        <a href="https://www.pelaut.dephub.go.id/">www.pelaut.dephub.go.id</a>)
                    </li>
                    <li>Pas Foto 3x4 (2 Lembar) sesuai jurusan Nautika (Biru) / Teknika (Merah)</li>
                </ul>
                <h3 class="font-semibold mt-3">Untuk Taruna</h3>
                <ul class="list-rapi">
                    <li>Surat Permohonan kepada Kantor KSOP Utama Makassar</li>
                    <li>Buku Pelaut Asli</li>
                    <li>Buku Saku Asli dan Fotokopi</li>
                    <li>Surat Mutasi Naik & Turun Asli dan Fotokopi (Mutasi Sekolah dan Perusahaan Pelayaran)</li>
                    <li>Pas Foto 3x4 (2 Lembar) sesuai jurusan Nautika (Biru) / Teknika (Merah)</li>
                </ul>
                <h3 class="font-semibold mt-3">Untuk Taruna</h3>
                <ul class="list-rapi">
                    <li>Surat Permohonan kepada Kesyahbandaran dan Otoritas Pelabuhan Utama Makassar</li>
                    <li>Buku Pelaut Asli</li>
                    <li>Record Book Asli dan Foto Copy</li>
                    <li>Surat Mutasi Naik & Turun Asli dan Foto Copy (Mutasi Perusahaan)</li>
                    <li>Foto 3 x 4 (2 Lembar) Sesuai Jurus</li>
                </ul>
            ',
        ]);

        Layanan::create([
            'name' => 'Pengurusan SKK 60 Mil',
            'slug' => 'pengurusan-skk-60-mil',
            'icon' => 'fas fa-chart-line', // Contoh ikon
            'short_description' => 'Pengajuan Surat Keterangan Kecakapan untuk pelayaran sampai 60 mil laut.',
            'content' => '
                <h3 class="font-semibold">Tujuan</h3>
                <p>Pengajuan Surat Keterangan Kecakapan untuk pelayaran sampai 60 mil laut.</p>
                <h3 class="font-semibold mt-3">Persyaratan</h3>
                <ul class="list-rapi">
                    <li>Fotokopi KTP/Akte Lahir</li>
                    <li>SKCK</li>
                    <li>Surat Keterangan Sehat dari Rumah Sakit atau Puskesmas</li>
                    <li>Surat pernyataan bermaterai</li>
                    <li>Pembayaran PNBP</li>
                    <li>Pas foto ukuran 3x4 3 lembar Latarbelakang biru untuk deck Latarbelakang merah untuk mesin</li>
                </ul>
            ',
        ]);

        Layanan::create([
            'name' => 'Pengurusan JMPR/MPR',
            'slug' => 'pengurusan-jmpr-mpr',
            'icon' => 'fas fa-file-contract', // Contoh ikon
            'short_description' => 'Pengajuan jaminan mutasi pelaut resmi.',
            'content' => '
                <h3 class="font-semibold">Tujuan</h3>
                <p>Pengajuan jaminan mutasi pelaut resmi.</p>
                <h3 class="font-semibold text-xl mt-5">Persyaratan</h3>
                <h4 class="font-semibold mt-3">A. MPR Tk.I dan Tk.II</h4>
                <ul class="list-rapi">
                    <li>Surat Permohonan;</li>
                    <li>Sehat Jasmani dan Rohani;</li>
                    <li>Berusia Sekurangnya 18 Tahun (JMPR Tk.II);</li>
                    <li>Berusia Sekurangnya 20 Tahun (JMPR Tk.I);</li>
                    <li>Memiliki Masa Layar Sekurangnya 2 Tahun pada Kamar Mesin dengan Mesin Penggerak Bantu (JMPR Tk.II);</li>
                    <li>Memiliki Surat Kecakapan JMPR Tk.II dengan berlayar sekurangnya 2 Tahun (JMPR Tk.I);</li>
                    <li>Dokumen Pendukung Lainnya.</li>
                </ul>
                <h4 class="font-semibold mt-3">B. JMPR Tk.I dan Tk.II</h4>
                <ul class="list-rapi">
                    <li>Surat Permohonan;</li>
                    <li>Sehat Jasmani dan Rohani;</li>
                    <li>Berusia Sekurangnya 18 Tahun (MPR Tk.II);</li>
                    <li>Berusia Sekurangnya 20 Tahun (MPR Tk.I);</li>
                    <li>Memiliki Masa Layar Sekurangnya 2 Tahun pada Ukuran Kapal GT &gt;100 (MPR Tk.II);</li>
                    <li>Memiliki Surat Kecakapan MPR Tk.II dengan berlayar sekurangnya 2 Tahun (MPR Tk.I);</li>
                    <li>Dokumen Pendukung Lainnya.</li>
                </ul>
            ',
        ]);

        Layanan::create([
            'name' => 'Pengurusan Safe Manning',
            'slug' => 'pengurusan-safe-manning',
            'icon' => 'fas fa-users-cog', // Contoh ikon
            'short_description' => 'Menentukan jumlah minimal awak kapal sesuai regulasi.',
            'content' => '
                <h3 class="font-semibold">Tujuan</h3>
                <p>Menentukan jumlah minimal awak kapal sesuai regulasi.</p>
                <h3 class="font-semibold mt-3">Persyaratan</h3>
                <ul class="list-rapi">
                    <li>Surat permohonan dari pemilik, Nahkoda, dan atau keagenan kapal</li>
                    <li>Melampirkan dokumen 
                        <i>safe manning</i> terakhir
                    </li>
                    <li>Menunjukkan ijasah asli dan endorsement serta sertifikat pendukung lainnya</li>
                    <li>Fotokopi sertifikat konstruksi kapal</li>
                </ul>
                <h3 class="font-semibold mt-3">Prosedur</h3>
                <ul class="list-rapi">
                    <li>Pengajuan permohonan safe manning</li>
                    <li>Melampirkan persyaratan permohonan safe manning ke loket pelayanan</li>
                    <li>Penerbitan Safe Manning Certificate</li>
                </ul>
            ',
        ]);

        Layanan::create([
            'name' => 'SID',
            'slug' => 'sid',
            'icon' => 'fas fa-id-card', // Contoh ikon
            'short_description' => "Penerbitan Seafarer's Identity Document bagi pelaut.",
            'content' => '
                <h3 class="font-semibold">Tujuan</h3>
                <p>Penerbitan Seafarer\'s Identity Document bagi pelaut.</p>
                <h3 class="font-semibold mt-3">Persyaratan</h3>
                <ul class="list-disc list-inside">
                    <li>Sertifikat Pelaut</li>
                    <li>Paspor</li>
                    <li>SKCK</li>
                    <li>KTP</li>
                    <li>Surat Pengantar Perusahaan</li>
                    <li>Asuransi Ketenagakerjaan</li>
                    <li>Buku Pelaut</li>
                    <li>NPWP (Optional)</li>
                </ul>
                <h3 class="font-semibold mt-3">Prosedur</h3>
                <ol class="list-decimal list-inside">
                    <li>
                        <a href="https://e-sid.dephub.go.id/login" class="text-blue-600">Link Pendaftaran</a>
                    </li>
                    <li>
                        <a href="https://vt.tiktok.com/ZSBhPWXLP/" class="text-blue-600">Panduan</a>
                    </li>
                </ol>
            ',
        ]);

        Layanan::create([
            'name' => 'PKL (Perjanjian Kerja Laut)',
            'slug' => 'pkl-perjanjian-kerja-laut',
            'icon' => 'fas fa-handshake', // Contoh ikon
            'short_description' => 'Pembuatan kontrak kerja antara pelaut dan perusahaan pemilik kapal.',
            'content' => '
                <h3 class="font-semibold">Tujuan</h3>
                <p>Pembuatan kontrak kerja antara pelaut dan perusahaan pemilik kapal.</p>
                <h3 class="font-semibold mt-3">Persyaratan</h3>
                <ul class="list-rapi">
                    <li>Surat permohonan dari pemilik dan keagenan kapal</li>
                    <li>Surat kuasa penunjukan perekrutan awak kapal</li>
                    <li>Fotokopi Kartu Tanda Penduduk(KTP)</li>
                    <li>Fotokopi Safe Manning</li>
                    <li>Fotokopi Ijasah Pelaut</li>
                    <li>Surat Pernyataan Kebenaran Dokumen</li>
                </ul>
                <h3 class="font-semibold mt-3">Prosedur</h3>
                <ul class="list-rapi">
                    <li>Mengajukan surat Permohonan Verifikasi Perjanjian Kerja Laut (PKL)</li>
                    <li>Pengesahan oleh Syahbandar</li>
                    <li>Penyerahan salinan PKL</li>
                </ul>
            ',
        ]);

        Layanan::create([
            'name' => 'Penyijilan',
            'slug' => 'penyijilan',
            'icon' => 'fas fa-clipboard-check', // Contoh ikon
            'short_description' => 'Pengesahan atau legalisasi dokumen pelaut atau kapal.',
            'content' => '
                <h3 class="font-semibold">Tujuan</h3>
                <p>Pengesahan atau legalisasi dokumen pelaut atau kapal.</p>
                <h3 class="font-semibold mt-3">Persyaratan</h3>
                <h3 class="font-semibold mt-3">Sijil Naik</h3>
                <ul class="list-rapi">
                    <li>Buku Pelaut Asli yang sudah disahkan oleh Syahbandar</li>
                    <li>Surat Pengantar Perusahaan</li>
                    <li>Daftar Crew List yang sudah disahkan oleh Syahbandar</li>
                    <li>Surat keterangan kesehatan (Bila ada) dari dokter rumah sakit yang direkomendasi</li>
                    <li>Dokumen Fotocopy Perjanjian Kerja Laut yang berlaku</li>
                </ul>
                <h3 class="font-semibold mt-3">Untuk Taruna</h3>
                <ul class="list-rapi">
                    <li>Surat Permohonan kepada Kesyahbandaran dan Otoritas Pelabuhan Utama Makassar</li>
                    <li>Foto Copy Perjanjian Kerja Laut (PKL) yang sudah di Sah kan oleh Syahbandar</li>
                    <li>Daftar Crew List yang sudah di Sah kan oleh Syahbandar</li>
                    <li>Buku Pelaut Asli yang sudah di Sah kan oleh Syahbandar</li>
                    <li>Surat Kesehatan Pelaut</li>
                    <li>Surat Pengantar Perusahaan / Mutasi</li>
                </ul>
                <h3 class="font-semibold mt-3">Prosedur</h3>
                <ol class="list-decimal list-inside">
                    <li>Serahkan dokumen ke loket penyijilan</li>
                    <li>Petugas melakukan pengecekan</li>
                    <li>Dokumen disijil dan dikembalikan</li>
                </ol>
            ',
        ]);
    }
}