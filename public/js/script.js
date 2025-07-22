function showServiceInfo(serviceSlug) {
    const modal = document.getElementById("service-modal");
    const modalTitle = document.getElementById("modal-title");
    const modalContent = document.getElementById("modal-content");

    // Mengambil data layanan dari API
    fetch(`/layanan/${serviceSlug}`)
        .then((response) => {
            if (!response.ok) {
                throw new Error("Network response was not ok");
            }
            return response.json();
        })
        .then((data) => {
            modalTitle.innerText = data.name;
            modalContent.innerHTML = data.content;
            modal.classList.remove("hidden");
            document.body.style.overflow = "hidden";
        })
        .catch((error) => {
            console.error("Error fetching service info:", error);
            modalTitle.innerText = "Error";
            modalContent.innerHTML =
                "<p>Gagal memuat informasi layanan. Silakan coba lagi nanti.</p>";
            modal.classList.remove("hidden");
            document.body.style.overflow = "hidden";
        });
}

function closeModal() {
    document.getElementById("service-modal").classList.add("hidden");
    document.body.style.overflow = "auto";
}

// Fungsi Swiper dan toggleMenu tetap sama jika ada
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

function toggleLoginModal() {
    const modal = document.getElementById("loginModal");
    modal.classList.toggle("hidden");
    modal.classList.toggle("flex");
}
