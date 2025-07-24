<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Admin - Kantor Kesyahbandaran dan Otoritas Pelabuhan Utama Makassar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
</head>

<body>
    <header class="bg-blue-900 text-white shadow-lg">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/1/15/Logo_Kementerian_Perhubungan_Indonesia_%28Kemenhub%29.png"
                    alt="Logo" class="h-10 md:h-14 mr-3" />
                <div>
                    <h1 class="text-md md:text-xl font-bold leading-tight">Kantor Kesyahbandaran dan Otoritas Pelabuhan
                        Utama Makassar</h1>
                    <p class="text-sm text-blue-200">Admin Panel Pelayanan</p>
                </div>
            </div>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded">
                    Logout
                </button>
            </form>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8">
        <h2 class="text-3xl font-bold text-center text-blue-800 mb-8">Manajemen Pelayanan</h2>

        {{-- notifikasi sukses --}}
        <div id="success-notification"
            class="fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg hidden z-50 transition-opacity duration-300 ease-in-out opacity-0">
            <strong class="font-bold">Sukses!</strong> <span id="notification-message"></span>
            <button class="ml-4 text-white text-lg font-bold"
                onclick="this.parentNode.classList.add('hidden'); this.parentNode.classList.remove('opacity-100');">&times;</button>
        </div>

        <div class="overflow-x-auto bg-white shadow-md rounded-lg p-6">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/3 md:w-auto">
                            Nama Layanan
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-2/3 md:w-auto">
                            Deskripsi Singkat
                        </th>
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only font-bold">Aksi</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($layanans as $layanan)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">
                                    {{ $layanan->name }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    {{ $layanan->short_description }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <button
                                    onclick="openEditModal('{{ $layanan->name }}', '{{ $layanan->slug }}', `{{ addslashes($layanan->content) }}`)"
                                    class="text-indigo-600 hover:text-indigo-900 block text-center w-full py-2 px-4 border border-indigo-600 rounded-md">Edit
                                    Layanan</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

    <div id="edit-service-modal"
        class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
        <div class="bg-white rounded-lg shadow-lg p-6 max-w-3xl mx-auto w-full relative">
            <button onclick="closeEditModal()"
                class="absolute top-3 right-3 text-gray-500 hover:text-gray-700 text-2xl font-bold">&times;</button>
            <h2 class="text-2xl font-bold mb-4" id="edit-modal-title">Edit Layanan: <span
                    id="current-service-name"></span></h2>
            <form id="edit-form" method="POST" action="">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="modal-edit-content" class="block text-gray-700 text-sm font-bold mb-2">Konten
                        Modal:</label>
                    <textarea id="modal-edit-content" name="content"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        rows="10"></textarea>
                </div>
                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Simpan Perubahan
                    </button>
                    <button type="button" onclick="closeEditModal()"
                        class="ml-4 bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Batal
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Inisialisasi Summernote
            $('#modal-edit-content').summernote({
                placeholder: 'Tulis konten layanan di sini...',
                tabsize: 2,
                height: 300, // Tinggi editor
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link', 'hr']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });

            // Periksa apakah ada pesan sukses dari sesi
            @if (session('success'))
                const notification = $('#success-notification');
                const message = '{{ session('success') }}';
                $('#notification-message').text(message);
                notification.removeClass('hidden').addClass('opacity-100');

                setTimeout(function() {
                    notification.removeClass('opacity-100').addClass('hidden');
                }, 5000); // Notifikasi akan hilang setelah 5 detik
            @endif
        });

        function openEditModal(serviceName, serviceSlug, serviceContent) {
            const modal = document.getElementById("edit-service-modal");
            document.getElementById("current-service-name").innerText = serviceName;

            // Mengatur konten Summernote
            $('#modal-edit-content').summernote('code', serviceContent);

            const form = document.getElementById("edit-form");
            form.action = `/admin/layanan/${serviceSlug}`;

            modal.classList.remove("hidden");
            document.body.style.overflow = "hidden";
        }

        function closeEditModal() {
            document.getElementById("edit-service-modal").classList.add("hidden");
            document.body.style.overflow = "auto";
            // Opsional: Kosongkan editor Summernote saat modal ditutup
            // $('#modal-edit-content').summernote('code', '');
        }
    </script>
</body>

</html>
