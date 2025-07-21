function showServiceInfo(serviceName) {
    const modal = document.getElementById("service-modal");
    const modalTitle = document.getElementById("modal-title");
    const modalContent = document.getElementById("modal-content");
    modalTitle.innerText = serviceName;
    let content = "";

    switch (serviceName) {
        case "Pengurusan Buku Pelaut Baru":
            content = `      		
			<h3 class="font-semibold">Tujuan</h3>
			<p>Penerbitan buku pelaut untuk pelaut yang belum pernah memiliki buku pelaut sebelumnya.</p>
			<h3 class="font-semibold mt-3">Persyaratan</h3>
			<ul class="list-rapi">
				<li>Surat Pernyataan Belum Pernah Memiliki BUKU PELAUT</li>
				<li>Fotocopy Sertifikat Keahlian Pelaut dan atau Sertifikat Keterampilan Pelaut</li>
				<li>Surat keterangan PRALA bagi TARUNA/I yang akan melaksanakan praktek kerja laut</li>
				<li>Dokumen asli sertifikat keahlian pelaut atau sertifikat keterampilan pelaut</li>
				<li>Surat keterangan sehat</li>
				<li>Surat keterangan catatan kepolisian (SKCK)</li>
				<li>Fotocopy AKTE KELAHIRAN/Surat kenal lahir/Kartu tanda pendudu (KTP)</li>
				<li>Pas Foto ukuran 5x5 dan 3x4 masing masing sebanyak 3 lembar memakai baju putih polos lengan panjang berdasi hitam dengan latar belakang biru atau bagian NAUTIKA (dek) dan merah untuk TEKNIKA (mesin)</li>
			</ul>
			<h3 class="font-semibold mt-3">Link Terkait :</h3>
			<ul class="list-rapi">
				<li>
					<a href="https://dokumenpelaut.dephub.go.id/" class="text-blue-600">Pendaftaran Buku Pelaut</a>
				</li>
				<li>
					<a href="https://vt.tiktok.com/ZSB2vuE5V/" class="text-blue-600"</a>Tutorial
				
				</li>
			</ul>
        `;
            break;
        case "Pengurusan Buku Pelaut Merah":
            content = `
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
        `;
            break;
        default:
            content = " < p > Informasi layanan belum tersedia. < /p>";
            break;
    }
    modalContent.innerHTML = content;
    modalContent.classList.add("max-h-[60vh]", "overflow-y-auto");
    document.body.style.overflow = "hidden";
    modal.classList.remove("hidden");
}

function closeModal() {
    document.getElementById("service-modal").classList.add("hidden");
    document.body.style.overflow = "auto";
}

const swiper = new Swiper(".mySwiper", {
    loop: true,
    speed: 600,
    effect: "slide",
    autoplay: false,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

function toggleMenu() {
    const menu = document.getElementById("mobile-menu");
    menu.classList.toggle("hidden");
}

function toggleMenu() {
    const menu = document.getElementById("mobile-menu");
    menu.classList.toggle("hidden");
}

function toggleLoginModal() {
    const modal = document.getElementById("loginModal");
    modal.classList.toggle("hidden");
    modal.classList.toggle("flex");
}
