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

<body class="bg-gray-50 font-sans">
    <!-- Header Section -->
    <header class="bg-blue-900 text-white shadow-lg">
        <div class="container mx-auto px-0 py-1">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="flex items-center mb-0 md:mb-0">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/1/15/Logo_Kementerian_Perhubungan_Indonesia_%28Kemenhub%29.png"
                        alt="Logo" class="mr-3 h-auto max-h-[50px] md:max-h-[70px] w-auto" />
                    <div>
                        <h1 class="text-xl md:text-2xl font-bold max-w-[500px]"> Kantor Kesyahbandaran dan Otoritas
                            Pelabuhan Utama Makassar </h1>
                        <p class="text-sm text-blue-200">Pelayanan</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="w-full px-8 py-8">
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
        </div>
    </section>
    <!-- Modal for Service Guide -->
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
