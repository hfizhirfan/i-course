@php
    $currentRouteName = Route::currentRouteName();
@endphp
<div class="modal fade" id="ratingModal" tabindex="-1" aria-labelledby="ratingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="width: 760px !important;  height: 460px;">
            <div class="modal-header border-0">
                <h5 class="modal-title text-center w-100 custom-modal-title" id="ratingModalLabel">Beri peringkat</h5>
            </div>
            <div class="modal-body">
                <h6 class="mb-3 text-center" id="ratingText" style="display: none;">Bagus sekali</h6>
                <!-- Rating Bintang -->
                <div class="star-rating d-flex justify-content-center">
                    <i class="bi bi-star-fill" data-rating="1"></i>
                    <i class="bi bi-star-fill" data-rating="2"></i>
                    <i class="bi bi-star-fill" data-rating="3"></i>
                    <i class="bi bi-star-fill" data-rating="4"></i>
                    <i class="bi bi-star-fill" data-rating="5"></i>
                </div>
                <!-- Text Area -->
                <textarea
                    class="form-control"
                    rows="3"
                    placeholder="Ketik ulasan"
                ></textarea>
                <!-- Button -->
                <button type="button" class=" custom-btn" >Kirim</button>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-md navbar-custom">
    <div class="container">

        <!-- Logo and Title -->
        <div class="navbar-brand d-flex align-items-center" >
            <a href="{{ route('category.detail.java') }}" class="d-flex align-items-center text-decoration-none me-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="27" viewBox="0 0 28 27" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.375 22.5L8.375 13.5L17.375 4.5L19.625 6.75L12.875 13.5L19.625 20.25L17.375 22.5Z" fill="#0056D2"/>
                </svg>
                <span class="ms-1 custom-font" style="font-size: 14px; font-weight: 600; color: #0056D2;">Kembali</span>
            </a>
            <div class="border-end pe-3" style="height: 40px; margin-right: 20px;"></div>
            <a href="{{ route('home') }}" class="d-flex justify-content-center">
                <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Unocos Logo" style="width: 140px; height: auto;" class="me-2" >
            </a>
            <div class="d-flex align-items-center">
                <div class="border-end pe-3" style="height: 40px;"></div>
                <span class="navbar-title ms-3">Pemrograman Java Untuk Pemula</span>
            </div>
        </div>

        <!-- Right Content -->
        <div class="d-flex align-items-center">
            <div class="progress-circle-container">
                <svg class="progress-circle" width="40" height="40" style="margin: 0;">
                    <!-- Lingkaran latar belakang -->
                    <circle cx="20" cy="20" r="15" class="progress-bg" />
                    <!-- Lingkaran progres -->
                    <circle cx="20" cy="20" r="15" class="progress-fill" />
                </svg>

            </div>

            <div class="progress-bar-container">
                <!-- Progress Lingkaran -->
                <span>Proses Anda</span>
            </div>
            <button  id="dropdownButton" class="btn btn-link text-dark" disabled>
                <i class="bi bi-three-dots-vertical"></i>
            </button>

            <div class="dropdown-menu d-none" id="dropdownMenu">
                <div class="container isi">
                    <h3>Rating</h3>
                    <hr>
                    <a href="#" class="dropdown-link" id="openRating" onclick="event.preventDefault();" style="display: flex; align-items: center; gap: 8px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                            <g clip-path="url(#clip0_1569_2611)">
                                <path d="M2.96181 15.5772L4.22797 10.1034L-0.0185547 6.4218L5.59154 5.93481L7.77324 0.772751L9.95494 5.93481L15.565 6.4218L11.3185 10.1034L12.5847 15.5772L7.77324 12.6747L2.96181 15.5772Z" fill="#2D3748"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_1569_2611">
                                    <rect width="17" height="17" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                        Beri rating
                    </a>

                </div>
                <div class="container isi">
                    <h3>Sertifikat</h3>
                    <hr>
                    <a href="{{ asset('images/sertifikat baru.pdf') }}" class="dropdown-link" style="display: flex; align-items: center; gap: 8px;" download>
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                            <g clip-path="url(#clip0_1569_2617)">
                                <path d="M8.5 9.03125C8.5 9.17215 8.44403 9.30727 8.3444 9.4069C8.24477 9.50653 8.10965 9.5625 7.96875 9.5625H4.78125C4.64035 9.5625 4.50523 9.50653 4.4056 9.4069C4.30597 9.30727 4.25 9.17215 4.25 9.03125C4.25 8.89035 4.30597 8.75523 4.4056 8.6556C4.50523 8.55597 4.64035 8.5 4.78125 8.5H7.96875C8.10965 8.5 8.24477 8.55597 8.3444 8.6556C8.44403 8.75523 8.5 8.89035 8.5 9.03125ZM7.96875 6.375H4.78125C4.64035 6.375 4.50523 6.43097 4.4056 6.5306C4.30597 6.63023 4.25 6.76535 4.25 6.90625C4.25 7.04715 4.30597 7.18227 4.4056 7.2819C4.50523 7.38153 4.64035 7.4375 4.78125 7.4375H7.96875C8.10965 7.4375 8.24477 7.38153 8.3444 7.2819C8.44403 7.18227 8.5 7.04715 8.5 6.90625C8.5 6.76535 8.44403 6.63023 8.3444 6.5306C8.24477 6.43097 8.10965 6.375 7.96875 6.375ZM15.4062 10.7226V14.875C15.4071 14.9687 15.3832 15.0609 15.3369 15.1423C15.2906 15.2237 15.2236 15.2915 15.1427 15.3387C15.0618 15.3859 14.9699 15.4108 14.8762 15.411C14.7825 15.4112 14.6905 15.3867 14.6094 15.3398L13.0156 14.4274L11.4219 15.3398C11.3408 15.3867 11.2487 15.4112 11.1551 15.411C11.0614 15.4108 10.9694 15.3859 10.8885 15.3387C10.8076 15.2915 10.7407 15.2237 10.6944 15.1423C10.6481 15.0609 10.6242 14.9687 10.625 14.875V13.2812H2.65625C2.37446 13.2812 2.10421 13.1693 1.90495 12.97C1.70569 12.7708 1.59375 12.5005 1.59375 12.2187V3.71875C1.59375 3.43696 1.70569 3.16671 1.90495 2.96745C2.10421 2.76819 2.37446 2.65625 2.65625 2.65625H14.3437C14.6255 2.65625 14.8958 2.76819 15.095 2.96745C15.2943 3.16671 15.4062 3.43696 15.4062 3.71875V5.74613C15.7421 6.06773 16.0093 6.45397 16.1919 6.88161C16.3745 7.30924 16.4686 7.7694 16.4686 8.23437C16.4686 8.69935 16.3745 9.15951 16.1919 9.58714C16.0093 10.0148 15.7421 10.401 15.4062 10.7226ZM10.625 12.2187V10.7226C10.0461 10.1643 9.6802 9.4214 9.59052 8.62213C9.50083 7.82286 9.69295 7.01735 10.1337 6.34461C10.5745 5.67186 11.2363 5.17408 12.0049 4.93716C12.7735 4.70024 13.6007 4.73904 14.3437 5.04687V3.71875H2.65625V12.2187H10.625ZM14.3437 11.4219C13.923 11.5977 13.4716 11.6882 13.0156 11.6882C12.5597 11.6882 12.1082 11.5977 11.6875 11.4219V13.9599L12.75 13.3516C12.8303 13.3057 12.9212 13.2816 13.0136 13.2816C13.1061 13.2816 13.197 13.3057 13.2773 13.3516L14.3398 13.9599L14.3437 11.4219ZM15.4062 8.23437C15.4062 7.76155 15.266 7.29935 15.0034 6.90621C14.7407 6.51308 14.3673 6.20667 13.9305 6.02572C13.4936 5.84478 13.013 5.79744 12.5492 5.88968C12.0855 5.98193 11.6595 6.20961 11.3252 6.54395C10.9909 6.87828 10.7632 7.30425 10.6709 7.76799C10.5787 8.23172 10.626 8.7124 10.807 9.14923C10.9879 9.58606 11.2943 9.95942 11.6875 10.2221C12.0806 10.4848 12.5428 10.625 13.0156 10.625C13.3296 10.625 13.6404 10.5632 13.9305 10.443C14.2205 10.3229 14.4841 10.1468 14.7061 9.9248C14.928 9.70281 15.1041 9.43927 15.2243 9.14923C15.3444 8.85918 15.4062 8.54832 15.4062 8.23437Z" fill="#2D3748"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_1569_2617">
                                    <rect width="17" height="17" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                        Download sertifikat
                    </a>

                </div>
            </div>
        </div>
    </div>
</nav>

<style>
.navbar-title {
    font-size: 16px;
    font-weight: 600;
}
.progress-circle-container {
    position: relative;
    width: 40px; /* Ukuran baru */
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: visible; /* Pastikan elemen terlihat */
}

.progress-circle {
    width: 40px; /* Ukuran baru */
    height: 40px;
    transform: rotate(-90deg); /* Memulai progres dari atas */
    overflow: visible;
}



.progress-bg {
    fill: none;
    stroke: #e6e6e6;
    stroke-width: 5;
}

.progress-fill {
    fill: none;
    stroke: #007bff;
    stroke-width: 5;
    stroke-dasharray: 126; /* 2 * Math.PI * r (r = 20) */
    stroke-dashoffset: 126; /* Sama dengan stroke-dasharray */
    transition: stroke-dashoffset 0.3s ease;
}

.progress-bar-container {
    margin-right: 10px; /* Jarak antara "Proses Anda" dan tombol */
}

button.btn {
    margin-left: 10px; /* Jarak tambahan di sisi kiri tombol */
}

/* dropdown */
.dropdown-container {
    position: relative;
}

.dropdown-menu {
    position: absolute;
    padding: 10px;
    top: 120%;
    right: 80px;
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 14px;
    width: 248px; /* Atur lebar */
    height: 242px; /* Atur tinggi */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    z-index: 1050; /* Tambahkan nilai z-index yang lebih tinggi */
}
.isi h3 {
    font-size: 14px; /* Ukuran font */
    font-weight: 600; /* Ketebalan font */
}
.dropdown-link svg {
    margin-right: 10px; /* Jarak antara ikon SVG dan teks */
    vertical-align: middle; /* Menjaga posisi vertikal ikon */
}


.isi .dropdown-link {
    font-size: 14px;
    font-weight: 400;
}

.isi {
    padding: 10px;
    margin-bottom: 40px;
}

.dropdown-link {
    display: flex;
    align-items: center;
    margin-top: 5px;
    color: #000;
    text-decoration: none;
}

.dropdown-link i {
    margin-right: 8px;
}


.modal-content {
    border-radius: 20px;
    padding: 20px;
    text-align: center;
}
.modal-header {
    border-bottom: none;
}
.star-rating {
    margin-bottom: 70px !important; /* Menambahkan margin bawah */
    direction: ltr; /* Dari kiri ke kanan */
}

.star-rating .bi {
    font-size: 2rem; /* Ukuran bintang */
    color: #A1ACBF; /* Warna default (abu-abu) */
    cursor: pointer;
    margin: 0 10px; /* Memberikan jarak horizontal 20px (10px di kiri dan kanan) */
    transition: color 0.2s ease; /* Transisi warna */
}


.star-rating .bi.hover {
    color: #FF8000; /* Warna saat hover */
}

.star-rating .bi.selected {
    color: #FF8000; /* Warna saat dipilih */
}
.custom-modal-title {
    font-size: 24px;
    font-weight: 600;
}
#ratingText {
    font-size: 20px; /* Atur ukuran font */
    font-weight: 600; /* Atur ketebalan font */
    text-align: center; /* Pastikan teks tetap di tengah */
    margin-bottom: 1rem; /* Sesuaikan jarak bawah (opsional) */
}

.modal-dialog-centered {
    display: flex;
    align-items: center;
    justify-content: center;
}
.modal-dialog {
    max-width: calc(100% - 30px); /* Membatasi ukuran modal agar tidak melebihi viewport */
    margin: 1.75rem auto; /* Memberikan margin otomatis secara horizontal */
}
.modal-body {
    display: flex;
    flex-direction: column; /* Elemen tetap tersusun vertikal */
    align-items: center; /* Konten utama tetap di tengah */
    position: relative; /* Menjadikan modal-body sebagai referensi posisi */
}

.custom-btn {
    background-color: #0056D2; /* Warna biru */
    color: #fff; /* Warna teks putih */
    border: none; /* Hilangkan border */
    border-radius: 20px; /* Membuat sudut melengkung */
    padding: 10px 20px; /* Atur padding */
    font-size: 16px; /* Ukuran font */
    font-weight: bold; /* Teks tebal */
    cursor: pointer; /* Pointer saat hover */
    position: absolute; /* Posisi absolut */
    right: 0; /* Geser tombol ke kanan */
    bottom: 20px; /* Beri jarak dari bawah */
}

.custom-btn:hover {
    background-color: #0045b3; /* Biru lebih gelap saat hover */
}


.custom-btn:hover {
    background-color: #0056D2; /* Warna biru lebih gelap saat di-hover */
}

.custom-btn-container {
    text-align: right; /* Letakkan tombol di ujung kiri */
}
.border-divider {
    width: 1px; /* Lebar garis */
    height: 40px; /* Tinggi garis, sesuaikan dengan tinggi konten */
    background-color: #ccc; /* Warna garis */
}


</style>
<script>
document.addEventListener("DOMContentLoaded", function () {
    // Inisialisasi elemen-elemen
    const checkboxes = document.querySelectorAll(".form-check-input");
    const progressFill = document.querySelector(".progress-fill");
    const dropdownMenu = document.getElementById("dropdownMenu");
    const dropdownButton = document.getElementById("dropdownButton");
    const openRatingButton = document.getElementById("openRating");
    const submitButton = document.querySelector(".custom-btn");
    const ratingModal = new bootstrap.Modal(document.getElementById("ratingModal"));
    const ratingText = document.getElementById("ratingText"); // Elemen <h6> untuk teks
    const stars = document.querySelectorAll(".star-rating i"); // Elemen bintang

    const radius = 15; // Radius lingkaran
    const circumference = 2 * Math.PI * radius; // Keliling lingkaran

    // Inisialisasi progres lingkaran
    progressFill.style.strokeDasharray = circumference;
    progressFill.style.strokeDashoffset = circumference;

    function updateProgress() {
        const totalCheckboxes = checkboxes.length;
        const completedCheckboxes = Array.from(checkboxes).filter(
            checkbox => checkbox.checked
        ).length;

        // Hitung persentase progres
        const progressPercentage = (completedCheckboxes / totalCheckboxes) * 100;

        // Update lingkaran progres
        const offset = circumference - (progressPercentage / 100) * circumference;
        progressFill.style.strokeDashoffset = offset;

        // Periksa jika progres penuh
        if (progressPercentage === 100) {
            dropdownButton.disabled = false; // Aktifkan tombol dropdown
        } else {
            dropdownButton.disabled = true; // Nonaktifkan tombol dropdown
            dropdownMenu.classList.add("d-none"); // Sembunyikan dropdown
            dropdownMenu.classList.remove("d-block"); // Hapus tampilan dropdown
        }
    }

    // Event listener untuk checkbox
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener("change", updateProgress);
    });

    // Event listener untuk tombol dropdown
    dropdownButton.addEventListener("click", function () {
        // Tampilkan atau sembunyikan dropdown menu
        dropdownMenu.classList.toggle("d-none");
        dropdownMenu.classList.toggle("d-block");
    });

    // Inisialisasi progres awal
    updateProgress();

    // Event listener untuk membuka modal
    openRatingButton.addEventListener("click", function () {
        ratingModal.show();
    });

    // Event listener untuk tombol submit di modal
    submitButton.addEventListener("click", () => {
        console.log("Modal akan ditutup.");
        ratingModal.hide();
    });

    // Tambahkan event listener untuk elemen bintang
    stars.forEach(star => {
        star.addEventListener("click", () => {
            ratingText.style.display = "block"; // Tampilkan elemen <h6>
        });
    });
});




document.addEventListener("DOMContentLoaded", function () {
    const stars = document.querySelectorAll(".star-rating .bi");
    const ratingText = document.getElementById("ratingText");

    const ratingTexts = [
        "Sangat buruk",
        "Buruk",
        "Cukup",
        "Bagus",
        "Bagus sekali",
    ];

    let selectedRating = -1; // Menyimpan rating yang dipilih

    // Fungsi untuk mengatur hover
    function setHover(rating) {
        stars.forEach((star, index) => {
            star.classList.toggle("hover", index < rating); // Aktifkan hover hingga rating tertentu
        });
    }

    // Fungsi untuk mengatur selected
    function setSelected(rating) {
        stars.forEach((star, index) => {
            star.classList.toggle("selected", index < rating); // Aktifkan selected hingga rating tertentu
        });
        selectedRating = rating; // Update rating yang dipilih
        ratingText.innerText = ratingTexts[rating - 1]; // Tampilkan teks sesuai rating
    }

    stars.forEach((star) => {
        const rating = parseInt(star.getAttribute("data-rating"), 10);

        // Saat mouse hover
        star.addEventListener("mouseover", () => {
            setHover(rating);
        });

        // Saat mouse keluar
        star.addEventListener("mouseout", () => {
            setHover(selectedRating); // Tampilkan kembali rating yang dipilih
        });

        // Saat bintang diklik
        star.addEventListener("click", () => {
            setSelected(rating);
        });
    });
});


</script>

