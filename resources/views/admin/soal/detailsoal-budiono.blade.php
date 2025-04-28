@extends('layout-admin.app')

@section('content')
<nav class="navbar navbar-expand-lg custom-navbar">
    <div class="container-fluid px-4">
        <!-- Title -->
        <h4 class="mb-0">Bank Soal</h4>

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
                <div class="popup-content">
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
        <div class="d-flex align-items-center">
            <a href="{{ route('admin.soal.index') }}" class="back-arrow">
                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                    <path d="M5.00024 15.528C4.74246 15.7859 4.59766 16.1355 4.59766 16.5001C4.59766 16.8647 4.74246 17.2144 5.00024 17.4723L12.7786 25.2506C12.9055 25.382 13.0572 25.4867 13.2249 25.5588C13.3927 25.6308 13.5731 25.6688 13.7557 25.6704C13.9383 25.6719 14.1193 25.6372 14.2883 25.568C14.4573 25.4989 14.6108 25.3968 14.7399 25.2677C14.869 25.1386 14.9711 24.9851 15.0402 24.8161C15.1094 24.6471 15.1442 24.466 15.1426 24.2835C15.141 24.1009 15.1031 23.9205 15.031 23.7527C14.9589 23.585 14.8542 23.4332 14.7229 23.3064L9.29161 17.8751L27.5007 17.8751C27.8654 17.8751 28.2151 17.7303 28.473 17.4724C28.7309 17.2145 28.8757 16.8648 28.8757 16.5001C28.8757 16.1355 28.7309 15.7857 28.473 15.5279C28.2151 15.27 27.8654 15.1251 27.5007 15.1251L9.29161 15.1251L14.7229 9.69389C14.9733 9.43456 15.1119 9.08723 15.1088 8.72671C15.1057 8.36619 14.961 8.02133 14.7061 7.76639C14.4512 7.51145 14.1063 7.36685 13.7458 7.36371C13.3853 7.36058 13.0379 7.49917 12.7786 7.74964L5.00024 15.528Z" fill="#0056D2"/>
                </svg>
            </a>

            <span class="user-name">Soal Kuis 1</span>
        </div>
        <div class="course-title text-primary">
            Pemrograman Java untuk Pemula
        </div>
    </div>

</div>
<div class="score-container mt-5 mb-5">
    <div class="d-flex justify-content-between align-items-center flex-wrap">
        <div class="d-flex flex-column">
            <div class="nama-user">Budiono Siregar</div>
            <div class="d-flex align-items-center text-muted" style="font-size: 0.9rem;">
                <div class="fw-semibold me-2">Selesai</div>
                <div>27 September 2024</div>
                <div class="ms-3">16:06</div>
            </div>
        </div>
        <div class="d-flex flex-column text-end mt-2 mt-md-0">
            <div class="nilai-wrapper d-flex align-items-center justify-content-end">
                <span class="label-nilai">Nilai</span>
                <span class="angka-nilai">75 / 100</span>
            </div>
            <div class="fw-bold" style="color: #090; font-size: 1.2rem;">LULUS</div>
        </div>
    </div>

    <div class="card p-4  soal-card">
        <!-- Soal 1 -->
        <div class="question mb-5 d-flex">
            <div class="number me-2 fw-bold">1.</div>
            <div class="content">
                <h6 class="soal-text mb-3">
                    Manakah dari tipe data berikut yang merupakan tipe data primitif di Java?
                </h6>

              <p class="pilih-jawaban">Pilih Jawaban :</p>
              <div class="option">
                <input type="radio" disabled>
                <label class="label-checked">
                  A. Char <i class="bi bi-check-circle-fill check-icon"></i>
                </label>
              </div>
              <div class="option">
                <input type="radio" disabled>
                <label>B. String</label>
              </div>
              <div class="option">
                <input type="radio" disabled checked>
                <label>C. Array</label>
              </div>
              <div class="option">
                <input type="radio" disabled>
                <label>D. Integer</label>
              </div>
            </div>
        </div>

        <div class="question mb-5 d-flex">
            <div class="number me-2 fw-bold">2.</div>
            <div class="content">
                <h6 class="soal-text mb-3">
                    Apa fungsi dari System.out.println("Hello, World!"); di Java?
                </h6>

              <p class="pilih-jawaban">Pilih Jawaban :</p>
              <div class="option">
                <input type="radio" disabled>
                <label>
                  A. Menghentikan program
                </label>
              </div>
              <div class="option">
                <input type="radio" disabled>
                <label>B. Menjalankan program</label>
              </div>
              <div class="option">
                <input type="radio" disabled >
                <label>C. Membaca data dari pengguna</label>
              </div>
              <div class="option">
                <input type="radio" disabled checked>
                <label class="label-checked">D. Menampilkan teks "Hello, World!" ke layar <i class="bi bi-check-circle-fill check-icon"></i>
                </label>
              </div>
            </div>
        </div>
    </div>
</div>


<!-- Ulangi div student-score-card ini untuk siswa lain -->

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

.notification-popup .popup-content {
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
.search-container {
    background-color: #f8f9fa; /* Warna latar belakang */
    padding: 20px 20px;
    border-bottom: 1px solid #ddd;

}
.user-name {
    font-size: 20px;
    color: #0056D2; /* Warna teks sesuai gambar */
    font-weight: 600; /* Membuat nama tebal */
    margin-left: 30px;
}
.course-title {
    font-size: 14px;
    font-weight: 500;
    color: #0056d2; /* warna biru */
    margin-right: 40px;
}


.score-container {
    max-width: 1140px;
    margin: 0 auto;
    padding: 20px;
}
.check-icon {
    color: green;
    margin-left: 5px;
}



.answer-checked {
    font-weight: bold;
    color: #0d6efd;
}

.nilai-wrapper {
    font-size: 0.9rem;
    color: #6c757d; /* Bootstrap text-muted color */
}

.label-nilai {
    font-weight: normal;
    margin-right: 20px;
}

.angka-nilai {
    font-weight: 600;
    font-size: 20px;
    color: #003D94; /* Bootstrap primary color */
}
.nama-user {
    color: #0056D2;
    font-size: 16px;
    font-weight: 600;
}

.soal-card {
    background-color: transparent; /* transparan */
    border: none; /* hilangkan stroke/border */
}

.question {
  align-items: flex-start;
}

.option {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.option input[type="radio"] {
    margin-right: 10px;
    width: 18px;
    height: 18px;
}

.option label {
    font-size: 15px;
    color: #333;
}

.label-checked {
    font-weight: 600;
    color: #212529;
}

.check-icon {
    color: green;
    font-size: 1rem;
    margin-left: 8px;
}

.number {
  min-width: 20px; /* Supaya angka punya lebar tetap */
}
.content {
  flex: 1;
}
.pilih-jawaban {
  font-size: 12px;
  font-weight: 400;
}
.soal-text {
  font-size: 16px;
  font-weight: 400;
}


</style>
<script>
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
