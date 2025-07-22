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

<body class="bg-gray-100">
    <div class="max-w-4xl mx-auto p-6">
        <h1 class="text-3xl font-bold text-blue-800 mb-6">Edit Konten Layanan</h1>

        @foreach ($layanans as $layanan)
            <div class="bg-white p-4 shadow rounded mb-6">
                <h2 class="text-lg font-semibold text-blue-700">{{ $layanan->judul }}</h2>
                <form method="POST" action="{{ route('layanan.update', $layanan->id) }}">
                    @csrf
                    <textarea name="konten" rows="10" class="w-full mt-2 border p-2 rounded">{{ $layanan->konten }}</textarea>
                    <button type="submit"
                        class="mt-2 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Simpan</button>
                </form>
            </div>
        @endforeach
    </div>
</body>

</html>
