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

<body class="bg-gray-100 font-sans">
    <section class="w-full px-8 py-8">
        <div class="text-center mb-8">
            <h3 class="text-2xl font-bold text-blue-800">Jenis Pelayanan Tersedia</h3>
            <p class="text-gray-600">Pilih jenis pelayanan untuk melihat panduan</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach ($layanans as $layanan)
                <div class="service-card bg-white p-6 rounded shadow cursor-pointer border hover:border-blue-600 transition"
                    onclick="showServiceInfo(`{{ $layanan->judul }}`, `{!! addslashes($layanan->konten) !!}`)">
                    <h4 class="font-bold text-blue-700">{{ $layanan->judul }}</h4>
                </div>
            @endforeach
        </div>
    </section>

    <div id="service-modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-xl">
            <h2 class="text-xl font-bold mb-4" id="modal-title"></h2>
            <div id="modal-content" class="mb-4 max-h-[60vh] overflow-y-auto"></div>
            <button onclick="closeModal()" class="bg-blue-600 text-white px-4 py-2 rounded">Tutup</button>
        </div>
    </div>

    <script>
        function showServiceInfo(title, content) {
            document.getElementById('modal-title').innerText = title;
            document.getElementById('modal-content').innerHTML = content;
            document.getElementById('service-modal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            document.getElementById('service-modal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }
    </script>
</body>

</html>
