<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Panduan Pelayanan - Kantor kesyahbandaran dan Otoritas Pelabuhan Utama Makassar </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

</head>

<body>
    <header class="bg-blue-900 text-white shadow-lg">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <!-- Logo & Title -->
            <div class="flex items-center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/1/15/Logo_Kementerian_Perhubungan_Indonesia_%28Kemenhub%29.png"
                    alt="Logo" class="h-10 md:h-14 mr-3" />
                <div>
                    <h1 class="text-md md:text-xl font-bold leading-tight">Kantor Kesyahbandaran dan Otoritas Pelabuhan
                        Utama Makassar</h1>
                    <p class="text-sm text-blue-200">Pelayanan</p>
                </div>
            </div>
        </div>

        <!-- Menu Mobile -->
        <div id="mobile-menu" class="md:hidden hidden bg-blue-800 px-4 pb-4">
            <nav class="flex flex-col space-y-2 text-white font-medium">
                <a href="#pelayanan" class="hover:text-blue-300">Pelayanan</a>
                <a href="#kontak" class="hover:text-blue-300">Kontak</a>
            </nav>
        </div>
    </header>
    <section class="w-full px-8 py-8" id="pelayanan">
        <div class="text-center mb-8">
            <h3 class="text-2xl font-bold text-blue-800">Jenis Pelayanan Tersedia</h3>
            <p class="text-gray-600"> Pilih salah satu jenis pelayanan untuk melihat panduan lengkap </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-12">
            <div class="service-card bg-white rounded-lg shadow-md p-6 cursor-pointer transition-transform duration-300 hover:border-blue-500 border-2 border-transparent"
                onclick="showServiceInfo('Pengurusan Buku Pelaut Baru')">
                <div class="text-center">
                    <i class="fas fa-id-badge service-icon"></i>
                    <h4 class="font-bold text-lg mb-2 text-blue-800">Pengurusan Buku Pelaut Baru</h4>
                    <p class="text-gray-600 text-sm">Pengajuan buku pelaut baru</p>
                </div>
            </div>
            <div class="service-card bg-white rounded-lg shadow-md p-6 cursor-pointer transition-transform duration-300 hover:border-blue-500 border-2 border-transparent"
                onclick="showServiceInfo('Pengurusan Buku Pelaut Merah')">
                <div class="text-center">
                    <i class="fas fa-book service-icon"></i>
                    <h4 class="font-bold text-lg mb-2 text-blue-800">Pengurusan Buku Pelaut Merah</h4>
                    <p class="text-gray-600 text-sm">Buku pelaut untuk pelaut asing atau khusus</p>
                </div>
            </div>
            <div class="service-card bg-white rounded-lg shadow-md p-6 cursor-pointer transition-transform duration-300 hover:border-blue-500 border-2 border-transparent"
                onclick="showServiceInfo('Perpanjangan Buku Pelaut')">
                <div class="text-center">
                    <i class="fas fa-redo service-icon"></i>
                    <h4 class="font-bold text-lg mb-2 text-blue-800">Perpanjangan Buku Pelaut</h4>
                    <p class="text-gray-600 text-sm">Memperpanjang masa berlaku buku pelaut</p>
                </div>
            </div>
            <div class="service-card bg-white rounded-lg shadow-md p-6 cursor-pointer transition-transform duration-300 hover:border-blue-500 border-2 border-transparent"
                onclick="showServiceInfo('Penggantian Buku Pelaut')">
                <div class="text-center">
                    <i class="fas fa-sync-alt service-icon"></i>
                    <h4 class="font-bold text-lg mb-2 text-blue-800">Penggantian Buku Pelaut</h4>
                    <p class="text-gray-600 text-sm">Untuk buku pelaut yang rusak atau hilang</p>
                </div>
            </div>
            <div class="service-card bg-white rounded-lg shadow-md p-6 cursor-pointer transition-transform duration-300 hover:border-blue-500 border-2 border-transparent"
                onclick="showServiceInfo('Pengurusan Masalayar')">
                <div class="text-center">
                    <i class="fas fa-water service-icon"></i>
                    <h4 class="font-bold text-lg mb-2 text-blue-800">Pengurusan Masalayar</h4>
                    <p class="text-gray-600 text-sm">Persiapan dokumen pelaut untuk berlayar</p>
                </div>
            </div>
            <div class="service-card bg-white rounded-lg shadow-md p-6 cursor-pointer transition-transform duration-300 hover:border-blue-500 border-2 border-transparent"
                onclick="showServiceInfo('Pengurusan SKK 60 Mil')">
                <div class="text-center">
                    <i class="fas fa-certificate service-icon"></i>
                    <h4 class="font-bold text-lg mb-2 text-blue-800">Pengurusan SKK 60 Mil</h4>
                    <p class="text-gray-600 text-sm">Surat Keterangan Kecakapan pelaut 60 mil</p>
                </div>
            </div>
            <div class="service-card bg-white rounded-lg shadow-md p-6 cursor-pointer transition-transform duration-300 hover:border-blue-500 border-2 border-transparent"
                onclick="showServiceInfo('Pengurusan JMPR/MPR')">
                <div class="text-center">
                    <i class="fas fa-user-check service-icon"></i>
                    <h4 class="font-bold text-lg mb-2 text-blue-800">Pengurusan JMPR/MPR</h4>
                    <p class="text-gray-600 text-sm">Jaminan atau Mutasi Pelaut</p>
                </div>
            </div>
            <div class="service-card bg-white rounded-lg shadow-md p-6 cursor-pointer transition-transform duration-300 hover:border-blue-500 border-2 border-transparent"
                onclick="showServiceInfo('Pengurusan Safe Manning')">
                <div class="text-center">
                    <i class="fas fa-users-cog service-icon"></i>
                    <h4 class="font-bold text-lg mb-2 text-blue-800">Pengurusan Safe Manning</h4>
                    <p class="text-gray-600 text-sm">Minimal awak kapal sesuai regulasi</p>
                </div>
            </div>
            <div class="service-card bg-white rounded-lg shadow-md p-6 cursor-pointer transition-transform duration-300 hover:border-blue-500 border-2 border-transparent"
                onclick="showServiceInfo('SID')">
                <div class="text-center">
                    <i class="fas fa-id-card service-icon"></i>
                    <h4 class="font-bold text-lg mb-2 text-blue-800">SID</h4>
                    <p class="text-gray-600 text-sm">Seafarer's Identity Document</p>
                </div>
            </div>
            <div class="service-card bg-white rounded-lg shadow-md p-6 cursor-pointer transition-transform duration-300 hover:border-blue-500 border-2 border-transparent"
                onclick="showServiceInfo('PKL (Perjanjian Kerja Laut)')">
                <div class="text-center">
                    <i class="fas fa-handshake service-icon"></i>
                    <h4 class="font-bold text-lg mb-2 text-blue-800">PKL</h4>
                    <p class="text-gray-600 text-sm">Perjanjian kerja laut antara pelaut dan pemilik kapal</p>
                </div>
            </div>
            <div class="service-card bg-white rounded-lg shadow-md p-6 cursor-pointer transition-transform duration-300 hover:border-blue-500 border-2 border-transparent"
                onclick="showServiceInfo('Penyijilan')">
                <div class="text-center">
                    <i class="fas fa-stamp service-icon"></i>
                    <h4 class="font-bold text-lg mb-2 text-blue-800">Penyijilan</h4>
                    <p class="text-gray-600 text-sm">Proses legalisasi dokumen pelaut</p>
                </div>
            </div>
        </div>
    </section>
    <div id="service-modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded-lg shadow-lg p-6 max-w-lg mx-auto">
            <h2 class="text-2xl font-bold mb-4" id="modal-title"></h2>
            <div id="modal-content" class="mb-4"></div>
            <button onclick="closeModal()" class="mt-4 bg-blue-600 text-white px-4 py-2 rounded"> Tutup </button>
        </div>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
