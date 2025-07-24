  <section class="w-full px-8 py-8" id="pelayanan">
      <div class="text-center mb-8">
          <h3 class="text-2xl font-bold text-blue-800">Jenis Pelayanan Tersedia</h3>
          <p class="text-gray-600"> Pilih salah satu jenis pelayanan untuk melihat panduan lengkap </p>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-12">
          @foreach ($layanans as $layanan)
              <div class="service-card bg-white rounded-lg shadow-md p-6 cursor-pointer transition-transform duration-300 hover:border-blue-500 border-2 border-transparent"
                  onclick="showServiceInfo('{{ $layanan->slug }}')">
                  <div class="text-center">
                      <i class="{{ $layanan->icon }} service-icon"></i>
                      <h4 class="font-bold text-lg mb-2 text-blue-800">{{ $layanan->name }}</h4>
                      <p class="text-gray-600 text-sm">{{ $layanan->short_description }}</p>
                  </div>
              </div>
          @endforeach
      </div>
  </section>
  <div id="service-modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
      <div class="bg-white rounded-lg shadow-lg p-6 max-w-lg mx-auto w-full relative">
          <button onclick="closeModal()"
              class="absolute top-3 right-3 text-gray-500 hover:text-gray-700 text-2xl font-bold">&times;</button>
          <h2 class="text-2xl font-bold mb-4" id="modal-title"></h2>
          <div id="modal-content" class="mb-4 overflow-y-auto max-h-[60vh]"></div>
          <button onclick="closeModal()" class="mt-4 bg-blue-600 text-white px-4 py-2 rounded"> Tutup </button>
      </div>
  </div>
