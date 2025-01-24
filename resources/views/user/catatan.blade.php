@extends('layout-pagelogin.app')

@section('content')
<div class="breadcrumb-container">
    <div class="container breadcrumb-content">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('home') }}">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('user.catatan') }}">Catatan</a></li>
            </ol>
        </nav>
    </div>
</div>
<div class="container py-5">
    <h1 class="h4">Catatan</h1>
    <!-- Dropdown for course selection -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <select class="custom-dropdown" id="courseFilter" onchange="filterCourses()">
            <option selected value="all">Semua kursus</option>
            <option value="java">Pemrograman Java untuk Pemula</option>
            <option value="golang">REST API dengan Golang</option>
        </select>
    </div>

    <div id="card-container">
        <!-- Note Cards -->
        <div class="card mb-4 shadow-sm" data-category="java">
            <div class="card-body">
                <h5 class="card-title">Pemrograman Java untuk Pemula</h5>
                <div class="d-flex align-items-center mb-2">
                    <span class="custom-badge">6:03</span>
                    <div>
                        <strong>Modul 1: Pengantar dan Dasar-dasar Pemrograman Java</strong>
                        <p class="text-muted m-0" style="font-size: 0.875rem;">Instalasi JDK dan pengaturan IDE (NetBeans, Eclipse, IntelliJ)</p>
                    </div>
                    <div class="ms-auto d-flex align-items-center action-buttons">
                        <a href="#" class="action-link custom-margin edit-button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="custom-icon" viewBox="0 0 16 16" fill="none">
                                <path d="M14.1997 1.80025C13.9912 1.59145 13.7435 1.42581 13.4709 1.31279C13.1982 1.19977 12.906 1.1416 12.6109 1.1416C12.3158 1.1416 12.0235 1.19977 11.7509 1.31279C11.4783 1.42581 11.2306 1.59145 11.022 1.80025L2.57288 10.25C2.32145 10.5014 2.1386 10.8134 2.0426 11.1563L1.1586 14.3134C1.13817 14.3866 1.13757 14.4639 1.15686 14.5374C1.17614 14.6109 1.21462 14.6779 1.26835 14.7316C1.32208 14.7854 1.38912 14.8238 1.46262 14.8431C1.53611 14.8624 1.61341 14.8618 1.6866 14.8414L4.84317 13.9574C5.18625 13.8621 5.49873 13.6794 5.75002 13.4271L14.1997 4.9774C14.4085 4.76884 14.574 4.5212 14.687 4.24862C14.8 3.97605 14.8581 3.68388 14.8581 3.38883C14.8581 3.09377 14.8 2.8016 14.687 2.52903C14.574 2.25645 14.4085 2.00881 14.1997 1.80025ZM11.6283 2.40597C11.889 2.14537 12.2425 1.999 12.6111 1.99906C12.9797 1.99911 13.3331 2.14558 13.5937 2.40625C13.8543 2.66692 14.0007 3.02044 14.0006 3.38903C14.0006 3.75762 13.8541 4.11109 13.5935 4.37168L12.7135 5.25111L10.7483 3.2854L11.6283 2.40597ZM10.1426 3.89168L12.1083 5.8574L5.14374 12.8214C4.99664 12.9695 4.81347 13.0766 4.61231 13.1323L2.18888 13.8105L2.86717 11.3877C2.92353 11.1868 3.03058 11.0038 3.17802 10.8563L10.1426 3.89168Z" fill="black"/>
                            </svg>
                            Edit
                        </a>
                        <a href="#" class="action-link custom-margin delete-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M5.62512 2.875H5.50012C5.56887 2.875 5.62512 2.81875 5.62512 2.75V2.875ZM5.62512 2.875H10.3751V2.75C10.3751 2.81875 10.4314 2.875 10.5001 2.875H10.3751V4H11.5001V2.75C11.5001 2.19844 11.0517 1.75 10.5001 1.75H5.50012C4.94856 1.75 4.50012 2.19844 4.50012 2.75V4H5.62512V2.875ZM13.5001 4H2.50012C2.22356 4 2.00012 4.22344 2.00012 4.5V5C2.00012 5.06875 2.05637 5.125 2.12512 5.125H3.06887L3.45481 13.2969C3.47981 13.8297 3.92043 14.25 4.45325 14.25H11.547C12.0814 14.25 12.5204 13.8312 12.5454 13.2969L12.9314 5.125H13.8751C13.9439 5.125 14.0001 5.06875 14.0001 5V4.5C14.0001 4.22344 13.7767 4 13.5001 4ZM11.4267 13.125H4.57356L4.19543 5.125H11.8048L11.4267 13.125Z" fill="black"/>
                            </svg>
                            Hapus
                        </a>
                    </div>
                </div>
                <div class="container" id="editable-container">
                    <p class="text-shift-right">Penjelasan tentang struktur dasar program Java.</p>
                </div>
            </div>
        </div>


        <div class="card mb-4 shadow-sm" data-category="java">
            <div class="card-body">
                <h5 class="card-title">Pemrograman Java untuk Pemula</h5>
                <div class="d-flex align-items-center mb-2">
                    <span class="custom-badge">4:30</span>
                    <div>
                        <strong>Modul 1: Pengantar dan Dasar-dasar Pemrograman Java</strong>
                        <p class="text-muted m-0" style="font-size: 0.875rem;">Variabel dan konvensi penamaan</p>
                    </div>
                    <div class="ms-auto d-flex align-items-center action-buttons">
                        <a href="#" class="action-link custom-margin edit-button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="custom-icon" viewBox="0 0 16 16" fill="none">
                                <path d="M14.1997 1.80025C13.9912 1.59145 13.7435 1.42581 13.4709 1.31279C13.1982 1.19977 12.906 1.1416 12.6109 1.1416C12.3158 1.1416 12.0235 1.19977 11.7509 1.31279C11.4783 1.42581 11.2306 1.59145 11.022 1.80025L2.57288 10.25C2.32145 10.5014 2.1386 10.8134 2.0426 11.1563L1.1586 14.3134C1.13817 14.3866 1.13757 14.4639 1.15686 14.5374C1.17614 14.6109 1.21462 14.6779 1.26835 14.7316C1.32208 14.7854 1.38912 14.8238 1.46262 14.8431C1.53611 14.8624 1.61341 14.8618 1.6866 14.8414L4.84317 13.9574C5.18625 13.8621 5.49873 13.6794 5.75002 13.4271L14.1997 4.9774C14.4085 4.76884 14.574 4.5212 14.687 4.24862C14.8 3.97605 14.8581 3.68388 14.8581 3.38883C14.8581 3.09377 14.8 2.8016 14.687 2.52903C14.574 2.25645 14.4085 2.00881 14.1997 1.80025ZM11.6283 2.40597C11.889 2.14537 12.2425 1.999 12.6111 1.99906C12.9797 1.99911 13.3331 2.14558 13.5937 2.40625C13.8543 2.66692 14.0007 3.02044 14.0006 3.38903C14.0006 3.75762 13.8541 4.11109 13.5935 4.37168L12.7135 5.25111L10.7483 3.2854L11.6283 2.40597ZM10.1426 3.89168L12.1083 5.8574L5.14374 12.8214C4.99664 12.9695 4.81347 13.0766 4.61231 13.1323L2.18888 13.8105L2.86717 11.3877C2.92353 11.1868 3.03058 11.0038 3.17802 10.8563L10.1426 3.89168Z" fill="black"/>
                            </svg>
                            Edit
                        </a>
                        <a href="#" class="action-link custom-margin delete-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M5.62512 2.875H5.50012C5.56887 2.875 5.62512 2.81875 5.62512 2.75V2.875ZM5.62512 2.875H10.3751V2.75C10.3751 2.81875 10.4314 2.875 10.5001 2.875H10.3751V4H11.5001V2.75C11.5001 2.19844 11.0517 1.75 10.5001 1.75H5.50012C4.94856 1.75 4.50012 2.19844 4.50012 2.75V4H5.62512V2.875ZM13.5001 4H2.50012C2.22356 4 2.00012 4.22344 2.00012 4.5V5C2.00012 5.06875 2.05637 5.125 2.12512 5.125H3.06887L3.45481 13.2969C3.47981 13.8297 3.92043 14.25 4.45325 14.25H11.547C12.0814 14.25 12.5204 13.8312 12.5454 13.2969L12.9314 5.125H13.8751C13.9439 5.125 14.0001 5.06875 14.0001 5V4.5C14.0001 4.22344 13.7767 4 13.5001 4ZM11.4267 13.125H4.57356L4.19543 5.125H11.8048L11.4267 13.125Z" fill="black"/>
                            </svg>
                            Hapus
                        </a>
                    </div>
                </div>
                <div class="container editable-container">
                    <p class="text-shift-right">Contoh sederhana penggunaan variabel dan tipe data.</p>
                </div>
            </div>
        </div>

        <div class="card mb-4 shadow-sm" data-category="golang">
            <div class="card-body">
                <h5 class="card-title">REST API dengan Golang</h5>
                <div class="d-flex align-items-center mb-2">
                    <span class="custom-badge">4:30</span>
                    <div>
                        <strong>Modul 2: Dasar-Dasar HTTP dan Routing</strong>
                        <p class="text-muted m-0" style="font-size: 0.875rem;">Pengenalan Package net/http di Golang</p>
                    </div>
                    <div class="ms-auto d-flex align-items-center action-buttons">
                        <a href="#" class="action-link custom-margin edit-button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="custom-icon" viewBox="0 0 16 16" fill="none">
                                <path d="M14.1997 1.80025C13.9912 1.59145 13.7435 1.42581 13.4709 1.31279C13.1982 1.19977 12.906 1.1416 12.6109 1.1416C12.3158 1.1416 12.0235 1.19977 11.7509 1.31279C11.4783 1.42581 11.2306 1.59145 11.022 1.80025L2.57288 10.25C2.32145 10.5014 2.1386 10.8134 2.0426 11.1563L1.1586 14.3134C1.13817 14.3866 1.13757 14.4639 1.15686 14.5374C1.17614 14.6109 1.21462 14.6779 1.26835 14.7316C1.32208 14.7854 1.38912 14.8238 1.46262 14.8431C1.53611 14.8624 1.61341 14.8618 1.6866 14.8414L4.84317 13.9574C5.18625 13.8621 5.49873 13.6794 5.75002 13.4271L14.1997 4.9774C14.4085 4.76884 14.574 4.5212 14.687 4.24862C14.8 3.97605 14.8581 3.68388 14.8581 3.38883C14.8581 3.09377 14.8 2.8016 14.687 2.52903C14.574 2.25645 14.4085 2.00881 14.1997 1.80025ZM11.6283 2.40597C11.889 2.14537 12.2425 1.999 12.6111 1.99906C12.9797 1.99911 13.3331 2.14558 13.5937 2.40625C13.8543 2.66692 14.0007 3.02044 14.0006 3.38903C14.0006 3.75762 13.8541 4.11109 13.5935 4.37168L12.7135 5.25111L10.7483 3.2854L11.6283 2.40597ZM10.1426 3.89168L12.1083 5.8574L5.14374 12.8214C4.99664 12.9695 4.81347 13.0766 4.61231 13.1323L2.18888 13.8105L2.86717 11.3877C2.92353 11.1868 3.03058 11.0038 3.17802 10.8563L10.1426 3.89168Z" fill="black"/>
                            </svg>
                            Edit
                        </a>
                        <a href="#" class="action-link custom-margin delete-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M5.62512 2.875H5.50012C5.56887 2.875 5.62512 2.81875 5.62512 2.75V2.875ZM5.62512 2.875H10.3751V2.75C10.3751 2.81875 10.4314 2.875 10.5001 2.875H10.3751V4H11.5001V2.75C11.5001 2.19844 11.0517 1.75 10.5001 1.75H5.50012C4.94856 1.75 4.50012 2.19844 4.50012 2.75V4H5.62512V2.875ZM13.5001 4H2.50012C2.22356 4 2.00012 4.22344 2.00012 4.5V5C2.00012 5.06875 2.05637 5.125 2.12512 5.125H3.06887L3.45481 13.2969C3.47981 13.8297 3.92043 14.25 4.45325 14.25H11.547C12.0814 14.25 12.5204 13.8312 12.5454 13.2969L12.9314 5.125H13.8751C13.9439 5.125 14.0001 5.06875 14.0001 5V4.5C14.0001 4.22344 13.7767 4 13.5001 4ZM11.4267 13.125H4.57356L4.19543 5.125H11.8048L11.4267 13.125Z" fill="black"/>
                            </svg>
                            Hapus
                        </a>
                    </div>
                </div>
                <div class="container editable-container">
                    <p class="text-shift-right">Cara mendefinisikan route dasar untuk endpoint API.</p>
                </div>
            </div>
        </div>
    </div>


</div>

<style>
.custom-dropdown {
    border: 1px solid #0d6efd;
    color: #0d6efd;
    font-weight: 500;
    border-radius: 8px;
    padding: 4px 12px;
    background-color: transparent;
    width: auto;
}
.custom-dropdown:focus {
    outline: none;
    box-shadow: 0 0 0 2px rgba(13, 110, 253, 0.25);
}
.card {
    border-radius: 12px;
    border: none;
    margin-bottom: 28px !important;
}

.card-body {
    padding: 20px;
}

.card-title {
    font-size: 1.25rem;
    font-weight: 600;
    color: #333;
}
h1.h4 {
    margin-bottom: 40px; /* Sesuaikan nilai dengan kebutuhan */
    font-weight: 600;
    font-size: 28px;
}


.badge {
    font-size: 0.875rem;
}
.text-muted {
    font-size: 0.875rem;
}

.btn-link {
    font-size: 0.875rem;
    padding: 0;
}

.btn-link.text-danger {
    color: #dc3545;
}
.custom-badge {
    background-color: #2D3748; /* Warna sesuai permintaan */
    border-radius: 10px; /* Membuat sudut melengkung */
    padding: 10px; /* Menambah ruang di dalam badge */
    color: #fff; /* Warna teks agar kontras */
    font-size: 14px; /* Ukuran teks */
    display: inline-flex;
    height: 23px;
    justify-content: center;
    align-items: center;
    margin-right: 40px; /* Jarak antara badge dan teks */

}
.custom-icon {
    width: 16px;
    height: 16px;
    margin-right: 6px; /* Jarak antara ikon dan teks */
}

.action-link {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: #6c757d; /* Warna teks muted */
    font-size: 0.875rem; /* Ukuran teks */
}

.action-link:hover {
    color: #495057; /* Warna teks saat hover */
}
.custom-margin {
    margin-right: 14px;
}
.action-link svg {
    margin-right: 6px; /* Beri jarak antar ikon dan teks */
}

.text-shift-right {
    margin-left: 80px; /* atau padding-left sesuai kebutuhan */
    margin-top: 30px; /* atau padding-left sesuai kebutuhan */
}
.card .card-title {
    color: #0056D2;
}
.hidden {
    display: none;
}
</style>
<script>
function filterCourses() {
    const filter = document.getElementById('courseFilter').value; // Mendapatkan nilai dari dropdown
    const cards = document.querySelectorAll('#card-container .card'); // Semua card

    cards.forEach(card => {
        const category = card.getAttribute('data-category'); // Kategori card
        if (filter === 'all' || category === filter) {
            card.classList.remove('hidden'); // Tampilkan card
        } else {
            card.classList.add('hidden'); // Sembunyikan card
        }
    });
}

// Tangkap tombol edit
document.querySelectorAll(".edit-button").forEach((editButton) => {
    editButton.addEventListener("click", function (event) {
        event.preventDefault();

        const actionButtons = this.closest(".action-buttons");
        const container = actionButtons.parentElement.nextElementSibling;

        // Ganti <p> menjadi <input>
        const paragraph = container.querySelector("p");
        if (paragraph) {
            const input = document.createElement("input");
            input.type = "text";
            input.className = "form-control w-50 text-shift-right";
            input.value = paragraph.textContent;
            container.innerHTML = "";
            container.appendChild(input);
        }

        // Ubah tombol Edit menjadi Simpan
        actionButtons.innerHTML = `
            <a href="#" class="action-link custom-margin save-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 54 39" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M52.4943 2.12522C53.2374 2.8685 53.6548 3.87647 53.6548 4.92746C53.6548 5.97846 53.2374 6.98643 52.4943 7.72971L22.786 37.438C22.3934 37.8307 21.9273 38.1422 21.4143 38.3547C20.9013 38.5672 20.3514 38.6766 19.7962 38.6766C19.2409 38.6766 18.691 38.5672 18.178 38.3547C17.665 38.1422 17.1989 37.8307 16.8063 37.438L2.04597 22.6803C1.66741 22.3147 1.36545 21.8773 1.15773 21.3937C0.950001 20.9102 0.84066 20.3901 0.836087 19.8638C0.831514 19.3375 0.931799 18.8156 1.13109 18.3285C1.33038 17.8414 1.62469 17.3988 1.99684 17.0267C2.36899 16.6545 2.81153 16.3602 3.29864 16.1609C3.78575 15.9616 4.30767 15.8614 4.83395 15.8659C5.36023 15.8705 5.88033 15.9798 6.3639 16.1876C6.84747 16.3953 7.28483 16.6972 7.65046 17.0758L19.7948 29.2202L46.8872 2.12522C47.2553 1.7569 47.6923 1.46472 48.1734 1.26537C48.6544 1.06602 49.17 0.963417 49.6907 0.963417C50.2115 0.963417 50.7271 1.06602 51.2081 1.26537C51.6892 1.46472 52.1262 1.7569 52.4943 2.12522Z" fill="black"/>
                </svg>
                Simpan
            </a>
        `;

        // Tambahkan event listener ke tombol Simpan
        actionButtons.querySelector(".save-button").addEventListener("click", function (event) {
            event.preventDefault();

            // Ganti <input> kembali ke <p>
            const input = container.querySelector("input");
            if (input) {
                const paragraph = document.createElement("p");
                paragraph.className = "text-shift-right";
                paragraph.textContent = input.value;
                container.innerHTML = "";
                container.appendChild(paragraph);
            }

            // Kembalikan tombol menjadi Edit dan Hapus
            actionButtons.innerHTML = `
                <a href="#" class="action-link custom-margin edit-button">
                    <svg xmlns="http://www.w3.org/2000/svg" class="custom-icon" viewBox="0 0 16 16" fill="none">
                        <path d="M14.1997 1.80025C13.9912 1.59145 13.7435 1.42581 13.4709 1.31279C13.1982 1.19977 12.906 1.1416 12.6109 1.1416C12.3158 1.1416 12.0235 1.19977 11.7509 1.31279C11.4783 1.42581 11.2306 1.59145 11.022 1.80025L2.57288 10.25C2.32145 10.5014 2.1386 10.8134 2.0426 11.1563L1.1586 14.3134C1.13817 14.3866 1.13757 14.4639 1.15686 14.5374C1.17614 14.6109 1.21462 14.6779 1.26835 14.7316C1.32208 14.7854 1.38912 14.8238 1.46262 14.8431C1.53611 14.8624 1.61341 14.8618 1.6866 14.8414L4.84317 13.9574C5.18625 13.8621 5.49873 13.6794 5.75002 13.4271L14.1997 4.9774C14.4085 4.76884 14.574 4.5212 14.687 4.24862C14.8 3.97605 14.8581 3.68388 14.8581 3.38883C14.8581 3.09377 14.8 2.8016 14.687 2.52903C14.574 2.25645 14.4085 2.00881 14.1997 1.80025ZM11.6283 2.40597C11.889 2.14537 12.2425 1.999 12.6111 1.99906C12.9797 1.99911 13.3331 2.14558 13.5937 2.40625C13.8543 2.66692 14.0007 3.02044 14.0006 3.38903C14.0006 3.75762 13.8541 4.11109 13.5935 4.37168L12.7135 5.25111L10.7483 3.2854L11.6283 2.40597ZM10.1426 3.89168L12.1083 5.8574L5.14374 12.8214C4.99664 12.9695 4.81347 13.0766 4.61231 13.1323L2.18888 13.8105L2.86717 11.3877C2.92353 11.1868 3.03058 11.0038 3.17802 10.8563L10.1426 3.89168Z" fill="black"/>
                    </svg>
                    Edit
                </a>
                <a href="#" class="action-link custom-margin">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M5.62512 2.875H5.50012C5.56887 2.875 5.62512 2.81875 5.62512 2.75V2.875ZM5.62512 2.875H10.3751V2.75C10.3751 2.81875 10.4314 2.875 10.5001 2.875H10.3751V4H11.5001V2.75C11.5001 2.19844 11.0517 1.75 10.5001 1.75H5.50012C4.94856 1.75 4.50012 2.19844 4.50012 2.75V4H5.62512V2.875ZM13.5001 4H2.50012C2.22356 4 2.00012 4.22344 2.00012 4.5V5C2.00012 5.06875 2.05637 5.125 2.12512 5.125H3.06887L3.45481 13.2969C3.47981 13.8297 3.92043 14.25 4.45325 14.25H11.547C12.0814 14.25 12.5204 13.8312 12.5454 13.2969L12.9314 5.125H13.8751C13.9439 5.125 14.0001 5.06875 14.0001 5V4.5C14.0001 4.22344 13.7767 4 13.5001 4ZM11.4267 13.125H4.57356L4.19543 5.125H11.8048L11.4267 13.125Z" fill="black"/>
                    </svg>
                    Hapus
                </a>
            `;

            // Pasang kembali event listener untuk tombol Edit
            actionButtons.querySelector(".edit-button").addEventListener("click", arguments.callee);
        });
    });
});
document.querySelectorAll(".delete-button").forEach((deleteButton) => {
    deleteButton.addEventListener("click", function (event) {
        event.preventDefault();

        // Cari elemen card terdekat dari tombol Hapus
        const card = this.closest(".card");

        // Hapus elemen card dari DOM
        if (card) {
            card.remove();
        }
    });
});




</script>

@endsection
