@extends('layout-admin.app')

@section('content')

<nav class="navbar navbar-expand-lg custom-navbar">
    <div class="container-fluid px-4">
        <!-- Title -->
        <h4 class="mb-0">Manajemen Pengajar</h4>

        <!-- Right-side icons -->
        <div class="d-flex align-items-center">
            <!-- Notification icon -->
            <button class="btn position-relative me-3 border-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                    <path d="M4.39999 7.6253C4.60195 5.80319 5.46883 4.11958 6.83468 2.89676C8.20053 1.67393 9.9694 0.997803 11.8027 0.997803C13.6359 0.997803 15.4048 1.67393 16.7706 2.89676C18.1365 4.11958 19.0034 5.80319 19.2053 7.6253L19.5413 10.6466L19.5493 10.7226C19.7215 12.2213 20.2095 13.6665 20.9813 14.9626L21.0213 15.0293L21.7907 16.3133C22.4907 17.4786 22.84 18.0613 22.764 18.54C22.7138 18.8577 22.5504 19.1465 22.304 19.3533C21.932 19.6653 21.252 19.6653 19.8933 19.6653H3.71199C2.35199 19.6653 1.67199 19.6653 1.30132 19.3546C1.05413 19.1478 0.890241 18.8584 0.839991 18.54C0.765325 18.0613 1.11466 17.4786 1.81332 16.3133L2.58532 15.028L2.62532 14.9613C3.39647 13.6654 3.88408 12.2208 4.05599 10.7226L4.06399 10.6466L4.39999 7.6253Z" stroke="#002661" stroke-width="1.50943"/>
                    <path d="M7.93945 20.2068C8.16745 21.1988 8.67012 22.0761 9.36879 22.7001C10.0675 23.3268 10.9235 23.6655 11.8035 23.6655C12.6835 23.6655 13.5395 23.3268 14.2381 22.7015C14.9368 22.0748 15.4381 21.1988 15.6675 20.2068" stroke="#002661" stroke-width="1.50943" stroke-linecap="round"/>
                  </svg>

            </button>
            <div class="notification-popup d-none">
                <div class="isi-popup">
                    Tidak ada notifikasi
                </div>
            </div>


            <div style="position: relative; display: inline-block;">
                <img src="{{ Vite::asset('resources/images/profile4.png') }}"
                     alt="Profile Picture"
                     class="rounded-circle"
                     style="width: 53px; height: 53px; cursor: pointer;"
                     onclick="togglePopup()">

                <!-- Popup -->
                <div id="popup" style="
                    display: none;
                    position: absolute;
                    top: 60px;
                    width: 170px;
                    right: 0;
                    margin-right: 10px;
                    background-color: white;
                    padding: 16px;
                    border-radius: 16px;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                    z-index: 100;
                    display: flex;
                    align-items: center;
                    gap: 10px; /* Jarak antara ikon dan teks */
                ">
                    <a href="{{ route('home.guest') }}" style="display: flex; align-items: center; text-decoration: none; color: inherit;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                            <path d="M3.97865 14.1666C3.65235 14.1666 3.38011 14.0575 3.16194 13.8393C2.94378 13.6212 2.83446 13.3487 2.83398 13.0219V3.97792C2.83398 3.65161 2.9433 3.37938 3.16194 3.16121C3.38058 2.94304 3.65282 2.83372 3.97865 2.83325H8.51411V3.54159H3.97865C3.86957 3.54159 3.76946 3.58692 3.67832 3.67759C3.58718 3.76825 3.54185 3.86836 3.54232 3.97792V13.0226C3.54232 13.1312 3.58765 13.2311 3.67832 13.3223C3.76898 13.4134 3.86886 13.4587 3.97794 13.4583H8.51411V14.1666H3.97865ZM11.6612 11.0067L11.164 10.4967L12.8066 8.85408H6.51165V8.14575H12.8066L11.1633 6.50242L11.6605 5.99383L14.1673 8.49992L11.6612 11.0067Z" fill="#4A5568"/>
                        </svg>
                        Keluar
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="search-container">
    <div class="container search d-flex align-items-center justify-content-between">

        <!-- Tombol dalam flex container -->
        <div class="d-flex align-items-center ms-auto">

            <!-- Tombol Cancel -->
            <a href="{{ route('admin.pengajar.index') }}" class="btn btn-outline-primary">
                Close
            </a>
        </div>
    </div>
    <!-- Notifikasi -->
    <div id="notification" style="
    display: none;
    position: fixed;
    top: 180px;
    right: 20px;
    background-color: #4caf50;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    z-index: 1000;
    ">
    Berhasil disimpan!
    </div>
</div>
<div class="container my-3">
    <h2 class="header-title mb-4">Edit Pengajar</h2>
    <div class="card">
        <div class="row g-3">
            <div class="col-md-6 d-flex align-items-center">
                <label for="userId" class="form-label me-3">Nama Lengkap</label>
                <input type="text" class="form-control" id="userId" placeholder="Masukkan nama" value="Rina Wijaya, S.Pd." readonly>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <label for="userId" class="form-label me-3">Nomor Telepon</label>
                <input type="text" class="form-control" id="userId" placeholder="Masukkan nomor telepon" value="0812 3456 7890" readonly>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <label for="userId" class="form-label me-3">Keahlian</label>
                <input type="text" class="form-control" id="phone" placeholder="Masukkan keahlian" value="Spesialis Linguistik Bahasa Indonesia" readonly>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <label for="userId" class="form-label me-3">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan email" value="rinawijaya@email.com" readonly>
            </div>
            <div class="col-12 d-flex align-items-center">
                <label for="deskripsi" class="form-label me-3" readonly>Deskripsi</label>
                <textarea class="form-text" id="deskripsi" rows="4" placeholder="Masukkan deskripsi">Seorang spesialis Linguistik Bahasa Indonesia dengan pengalaman luas dalam pengajaran dan penelitian di bidang kebahasaan. Memiliki keahlian mendalam dalam menganalisis struktur bahasa, fonologi, morfologi, sintaksis, dan semantik, serta kemampuan untuk mengaplikasikan teori linguistik dalam berbagai konteks.</textarea>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <label for="fotoProfile" class="form-label me-3">Foto Profile</label>
                <button class="btn-view-photo" onclick="showPhoto()">
                    <i class="bi bi-eye"></i> Lihat foto
                </button>
                <div id="photoPopup" class="popup">
                    <div class="popup-content">
                        <span class="close" onclick="closePhoto()">&times;</span>
                        <img src="{{ Vite::asset('resources/images/rina.png') }}" alt="Foto Budiono Siregar">
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <label for="status" class="form-label me-3">Status</label>
                <select class="form-select no-border" id="status" disabled>
                    <option selected>Aktif</option>
                    <option>Tidak Aktif</option>
                </select>
            </div>
        </div>
    </div>
</div>
<style>
    .navbar h4 {
    font-size: 28px;
    font-weight: 600;
    color: #002B5B; /* Ganti dengan warna dari desain */
}

.navbar {
    padding: 20px;
}
.isi {
    margin: auto;
    text-align: center; /* Jika ingin kontennya juga rata tengah */
}
.search-container .search{
    padding: 0;
}

.input-group-text {
    border-radius: 0.5rem 0 0 0.5rem; /* Rounded corner untuk ikon */
}

.input-group .form-control {
    border-radius: 0 0.5rem 0.5rem 0; /* Rounded corner untuk input */
}
.custom-navbar {
    height: 90px !important;
    display: flex;
    align-items: center;
    background-color: #E6F0FF;
    box-shadow: 2px 2px 10px 0px rgba(0, 0, 0, 0.25);
}
.input-group {
    margin-right: 130px; /* Pastikan margin kiri diatur ke nol */
}
.container {
    max-width: 1200px;
    padding: 20px;
    align-items: center;
}
.search-container {
    background-color: #f8f9fa; /* Warna latar belakang */
    padding: 20px 20px;
    border-bottom: 1px solid #ddd;

}

#popup {
    display: none;
}

.notification-popup {
    position: absolute;
    top: 70px;
    right: 90px;
    background: white;
    border-radius: 20px;
    padding: 0px;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.15);
    z-index: 1000;
    transition: opacity 0.3s ease;
    height: 129px;
    width: 250px; /* opsional, biar popup lebar bagus */
    display: flex;
    justify-content: center;
    align-items: center;
}

.notification-popup .isi-popup{
    font-size: 14px;
    font-weight: 600;
    color: #464F60;
    text-align: center;
    padding: 20px 30px; /* pindahkan padding ke sini */
}

/* Untuk animasi muncul */
.notification-popup.show {
    display: block;
    opacity: 1;
}

.notification-popup.d-none {
    display: none;
    opacity: 0;
}

.file-input-wrapper {
    position: relative;
    display: flex;
    align-items: center;
    border: 1px solid #ced4da;
    border-radius: 8.733px;
    padding: 5px 8px;
}

.file-input-wrapper input[type="file"] {
    position: absolute;
    left: 0;
    top: 0;
    opacity: 0;
    cursor: pointer;
    z-index: 2;
}

.file-input-wrapper .btn {
    position: relative;
    z-index: 1;
    border-radius: 5.24px;
    background-color: #4A5568;
    border: none;
    font-size: 10.479px;
    font-weight: 400;
}

.file-input-wrapper span {
    flex-grow: 1;
    padding-left: 10px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-size: 10.479px;
}

.file-input-style {
    display: none;
}

.file-input-wrapper span {
    font-size: 14px;
    color: #666;
}
.margin-top-30 {
  margin-top: 10px;
}
.question-textarea {
    width: 100%;
    height: 160px;
    resize: none;
    padding-right: 40px; /* Space untuk tombol gambar */
    border-radius: 10px;
}
.question-options {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    margin-top: 10px; /* Mengurangi jarak agar elemen lebih dekat */
}


.question-type-select {
    width: 150px;
}

.btn-link {
    color: #6c757d;
    font-size: 16px;
    text-decoration: none;
}

.btn-link:hover {
    text-decoration: none;
    color: #2D3748;
}

.btn-primary {
    background-color: #0056D2;
    border-color: #0056D2;
    color: #fff;
    border-radius: 18px;
    font-size: 14px;
}

.btn-outline-primary {
    color: #0056D2;
    border-color: #0056D2;
    border-radius: 18px;
    font-size: 14px;
}

.btn-outline-primary:hover {
    background-color: #0056D2;
    border-color: #0056D2;
    color: #fff;
}
.btn {
    margin-right: 5px; /* Atur jarak antar tombol */
    margin-left: 0; /* Pastikan tidak ada jarak ke kiri */
}

.card {
    border-radius: 20px;
    padding: 24px;
    border: none;
    box-shadow: 2px 2px 10px 0px rgba(0, 0, 0, 0.25);
}
.header-title {
    font-size: 16px;
    font-weight: 600;
    color: #003D94;
}

.form-label {
    font-size: 14px;
    color: #003D94;
    font-weight: 600;
    width: 150px; /* Atur lebar sesuai kebutuhan */
    display: inline-block; /* Memastikan lebar diterapkan */
}

/* Menyesuaikan input */
.form-control {
    border: 1px solid #dee2e6;
    border-radius: 8px;
    padding: 8px 12px;
    background-color: #f8fafc;
    font-size: 14px;
    color: #333;
    width: 230px;
}
.form-select {
    width: 230px;
    font-size: 14px;
}
.form-text {
    border: 1px solid #dee2e6;
    border-radius: 8px;
    padding: 8px 12px;
    background-color: #f8fafc;
    font-size: 14px;
    color: #333;
    width: 800px;
    outline: none;
}
.form-text:focus {
    border: 1px solid #dee2e6; /* Tetap menggunakan warna yang sama saat fokus */
    background-color: #f8fafc; /* Opsional: Tetap mempertahankan warna background */
    outline: none; /* Menghapus outline tambahan */
}

/* Input dalam keadaan readonly */
.form-control[readonly] {
    background-color: #f8fafc; /* Pastikan background sesuai desain */
    opacity: 1;               /* Mengatasi pengurangan opacity default Bootstrap */
}

/* Hover efek untuk readonly input (opsional) */
.form-control[readonly]:hover {
    cursor: not-allowed; /* Menampilkan kursor tanda larangan */
}
.status-text {
    font-size: 14px;
    font-weight: 500;
}
.btn-view-photo {
    display: flex;
    align-items: center;
    gap: 5px; /* Jarak antara ikon dan teks */
    border: 1px solid #0056D2; /* Warna biru */
    border-radius: 10px;
    padding: 5px 10px;
    background-color: white;
    color: #0056D2;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.btn-view-photo:hover {
    background-color: #0056D2;
    color: white;
}

.popup {
    display: none; /* Popup hanya tampil saat dipicu */
    position: fixed;
    z-index: 100;
    left: 0;
    top: 0;
    width: 100%; /* Pastikan mengambil seluruh layar */
    height: 100%; /* Pastikan mengambil seluruh layar */
    background-color: rgba(0, 0, 0, 0.7); /* Hitam transparan */
    justify-content: center; /* Pusatkan horizontal */
    align-items: center; /* Pusatkan vertikal */
}

.popup-content {
    background: white;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    position: relative;
    width: 500px; /* Set lebar tetap */
    height: 500px; /* Set tinggi tetap agar berbentuk kotak */
    max-width: 90%; /* Batas maksimal lebar agar responsif */
    max-height: 90%; /* Batas maksimal tinggi agar responsif */
    overflow: hidden; /* Hilangkan elemen yang melampaui batas */
    display: flex; /* Untuk menyusun konten */
    justify-content: center; /* Pusatkan gambar secara horizontal */
    align-items: center; /* Pusatkan gambar secara vertikal */
}

.popup-content img {
    max-width: 100%; /* Sesuaikan dengan lebar kontainer */
    max-height: 100%; /* Sesuaikan dengan tinggi kontainer */
    object-fit: contain; /* Gambar tetap proporsional */
    border-radius: 8px; /* Opsional, tambahkan sudut melengkung */
}
.btn-view-photo {
    display: flex;
    align-items: center;
    gap: 5px; /* Jarak antara ikon dan teks */
    border: 1px solid #0056D2; /* Warna biru */
    border-radius: 10px;
    padding: 5px 10px;
    background-color: white;
    color: #0056D2;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.btn-view-photo:hover {
    background-color: #0056D2;
    color: white;
}


.close {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 20px;
    cursor: pointer;
    color: black;
    font-weight: bold;
}


</style>
<script>
    function showPhoto() {
    const popup = document.getElementById('photoPopup');
    popup.style.display = 'flex'; // Pastikan popup menggunakan flex untuk pusatkan
}

function closePhoto() {
    const popup = document.getElementById('photoPopup');
    popup.style.display = 'none'; // Sembunyikan popup
}
document.addEventListener("DOMContentLoaded", function() {
    const btnNotif = document.querySelector(".btn");
    const notifPopup = document.querySelector(".notification-popup");
    const profileImage = document.querySelector("img[onclick='togglePopup()']");
    const profilePopup = document.getElementById("popup");

    // Awalnya semua popup tertutup
    notifPopup.classList.add("d-none");
    profilePopup.style.display = "none";

    btnNotif.addEventListener("click", function(e) {
        e.stopPropagation(); // biar klik tombol gak kena event document
        notifPopup.classList.toggle("d-none");
        notifPopup.classList.toggle("show");

        // Kalau notif dibuka, pastikan popup profile ketutup
        profilePopup.style.display = "none";
    });

    profileImage.addEventListener("click", function(e) {
        e.stopPropagation(); // biar klik image gak kena event document
        if (profilePopup.style.display === "none" || profilePopup.style.display === "") {
            profilePopup.style.display = "block";
        } else {
            profilePopup.style.display = "none";
        }

        // Kalau profile dibuka, pastikan notif popup ketutup
        notifPopup.classList.add("d-none");
        notifPopup.classList.remove("show");
    });

    // Klik di luar semua elemen = semua popup tertutup
    document.addEventListener("click", function(e) {
        notifPopup.classList.add("d-none");
        notifPopup.classList.remove("show");
        profilePopup.style.display = "none";
    });
});
</script>
@endsection
