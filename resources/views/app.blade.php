<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Panduan Pelayanan - Kantor Kesyahbandaran dan Otoritas Pelabuhan Utama Makassar </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body class="bg-gray-50 font-sans">
    @include('components.header')
    @include('components.konten')
    @include('components.pelayanan')
    @include('components.footer')
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
