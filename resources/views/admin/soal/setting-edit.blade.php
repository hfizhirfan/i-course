@extends('layout-admin.app')

@section('content')

<nav class="navbar navbar-expand-lg custom-navbar">
    <div class="container-fluid px-4">
        <!-- Title -->
        <h4 class="mb-0">Manajemen Soal</h4>

        <!-- Right-side icons -->
        <div class="d-flex align-items-center">
            <!-- Notification icon -->
            <button class="btn position-relative me-3 border-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                    <path d="M4.39999 7.6253C4.60195 5.80319 5.46883 4.11958 6.83468 2.89676C8.20053 1.67393 9.9694 0.997803 11.8027 0.997803C13.6359 0.997803 15.4048 1.67393 16.7706 2.89676C18.1365 4.11958 19.0034 5.80319 19.2053 7.6253L19.5413 10.6466L19.5493 10.7226C19.7215 12.2213 20.2095 13.6665 20.9813 14.9626L21.0213 15.0293L21.7907 16.3133C22.4907 17.4786 22.84 18.0613 22.764 18.54C22.7138 18.8577 22.5504 19.1465 22.304 19.3533C21.932 19.6653 21.252 19.6653 19.8933 19.6653H3.71199C2.35199 19.6653 1.67199 19.6653 1.30132 19.3546C1.05413 19.1478 0.890241 18.8584 0.839991 18.54C0.765325 18.0613 1.11466 17.4786 1.81332 16.3133L2.58532 15.028L2.62532 14.9613C3.39647 13.6654 3.88408 12.2208 4.05599 10.7226L4.06399 10.6466L4.39999 7.6253Z" stroke="#002661" stroke-width="1.50943"/>
                    <path d="M7.93945 20.2068C8.16745 21.1988 8.67012 22.0761 9.36879 22.7001C10.0675 23.3268 10.9235 23.6655 11.8035 23.6655C12.6835 23.6655 13.5395 23.3268 14.2381 22.7015C14.9368 22.0748 15.4381 21.1988 15.6675 20.2068" stroke="#002661" stroke-width="1.50943" stroke-linecap="round"/>
                  </svg>

            </button>

            <!-- Profile Picture -->
            <img src="{{Vite::asset('resources/images/profile4.png') }}" alt="Profile Picture" class="rounded-circle" style="width: 53px; height: 53px;">
        </div>
    </div>
</nav>
<div class="search-container">
    <div class="container search d-flex align-items-center justify-content-between">
        <!-- Input judul kursus -->
        <h4 class="mb-0 header-settings">Soal Kuis 1</h4>

        <!-- Tombol dalam flex container -->
        <div class="d-flex align-items-center">
            <!-- Tombol Simpan -->
            <a href="{{ route('admin.soal.edit') }}" class="btn btn-primary me-2" id="saveButton">
                Simpan
            </a>

            <!-- Tombol Cancel -->
            <a href="{{ route('admin.soal.edit') }}" class="btn btn-outline-primary">
                Cancel
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
    <h2 class="header-title mb-4">Pengaturan</h2>
    <div class="card">
        <form>
            <div class="row align-items-center custom-label-spacing untuk-spacing-margin">
                <div class="col-md-3">
                    <label for="kuotaPeserta" class="form-label">Waktu pengerjaan</label>
                </div>
                <div class="col-md-2 d-flex align-items-center">
                    <label for="durasi" class="form-text me-2">Durasi</label>
                    <input type="text" id="durasi" class="form-control" value="01 : 10 : 10" readonly>
                </div>
                <div class="col-md-5 d-flex align-items-center">
                    <label for="hari" class="form-text me-2">Hari</label>
                    <div class="d-flex align-items-center">
                        <div class="input-group input-group-custom me-3">
                            <span class="input-group-text custom-input-group-text">
                                <i class="bi bi-calendar"></i>
                            </span>
                            <input type="date" class="form-control custom-input-date" id="startDate" value="2024-02-19">
                        </div>
                        <span class="mx-2 align-items-center d-flex custom-separator">-</span>
                        <div class="input-group input-group-custom">
                            <span class="input-group-text custom-input-group-text">
                                <i class="bi bi-calendar"></i>
                            </span>
                            <input type="date" class="form-control custom-input-date" id="endDate" value="2024-02-19">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row  align-items-center custom-label-spacing untuk-spacing-margin">
                <div class="col-md-3">
                    <label for="tingkatKesulitan" class="form-label">Nilai Minimal</label>
                </div>
                <div class="col-md-3">
                    <input type="number" class="form-control" id="tingkatKesulitan" value="70">
                </div>
            </div>
            <div class="row align-items-center custom-label-spacing untuk-spacing-margin">
                <div class="col-md-3">
                    <label for="forum" class="form-label">Kategori</label>
                </div>
                <div class="col-md-3">
                    <select class="form-select custom-input " id="forum">
                        <option value="bahasa">Bahasa</option>
                        <option value="sains-matematika">Sains dan Matematika</option>
                        <option value="pengembangan-personal">Pengembangan Personal</option>
                        <option value="desain">Desain</option>
                        <option value="bahasa-pemrograman">Bahasa Pemrograman</option>
                        <option value="jaringan-keamanan">Jaringan dan Keamanan</option>
                        <option value="pemasaran">Pemasaran</option>
                        <option value="keuangan-akutansi">Keuangan dan Akuntansi</option>
                    </select>
                </div>
            </div>
            <div class="row  align-items-center custom-label-spacing untuk-spacing-margin">
                <div class="col-md-3">
                    <label for="tingkatKesulitan" class="form-label">Acak Soal</label>
                </div>
                <div class="col-md-3">
                    <select class="form-select custom-input" id="tingkatKesulitan">
                        <option value="Ya" selected>Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                </div>
            </div>
            <div class="row  align-items-center custom-label-spacing untuk-spacing-margin">
                <div class="col-md-3">
                    <label for="tingkatKesulitan" class="form-label">Jumlah percobaan</label>
                </div>
                <div class="col-md-3">
                    <input type="number" class="form-control" id="tingkatKesulitan" value="1">
                </div>
            </div>
            <div class="row  align-items-center custom-label-spacing untuk-spacing-margin">
                <div class="col-md-3">
                    <label for="tingkatKesulitan" class="form-label">Format file</label>
                </div>
                <div class="col-md-9 d-flex gap-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="pdf" name="formatFile" value="PDF" checked>
                        <label class="form-check-label custom-label" for="pdf">PDF</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="docs" name="formatFile" value="DOCS">
                        <label class="form-check-label custom-label" for="docs">DOCS</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="xlsx" name="formatFile" value="XLSX">
                        <label class="form-check-label custom-label" for="xlsx">XLSX</label>
                    </div>
                </div>
            </div>
            <div class="row  align-items-center custom-label-spacing untuk-spacing-margin">
                <div class="col-md-3">
                    <label for="tingkatKesulitan" class="form-label">Nonaktifkan soal</label>
                </div>
                <div class="col-md-3">
                    <select class="form-select custom-input" id="tingkatKesulitan">
                        <option value="Ya" selected>Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                </div>
            </div>
        </form>
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
    height: 34px;
}


.form-control {
    width: 117px;
    height: 34px;
    border-radius: 8.733px;
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
  display: grid;
}
.search-container {
    background-color: #f8f9fa; /* Warna latar belakang */
    padding: 20px 20px;
    border-bottom: 1px solid #ddd;

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
/* Untuk memperpanjang ukuran input date */
/* Atur ukuran input date */
.custom-input-date {
    width: 200px; /* Panjang input */
    font-size: 12px;
    font-weight: 400;
    height: 38px; /* Tinggi input sama dengan tinggi default Bootstrap */
    line-height: normal; /* Pastikan teks tidak terpotong */
}

/* Atur tinggi elemen span agar sejajar */
.custom-input-group-text {
    height: 38px; /* Sama dengan tinggi input */
    display: flex;
    align-items: center; /* Pusatkan secara vertikal */
    padding: 0 10px; /* Sesuaikan padding */
    font-size: 10px;
}


/* Styling untuk separator */
.custom-separator {
    font-size: 12px;
    font-weight: 400;
}
/* Atur ukuran dan berat font label */
.custom-label {
    font-size: 12px;
    font-weight: 400;
}


.course-title {
    flex: 1;
    max-width: 400px;
    margin-right: 15px;
    font-size: 16px;
    font-weight: 600;
    border: 1px solid #ddd;
    border-radius: 10px;
    padding: 5px 10px;
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
.form-label {
    font-weight: 600;
    font-size: 14px;
    color: #003D94;

}
input.form-control {
    font-size: 12px;
    font-weight: 400;
}
span.input-group-text {
    font-size: 12px;
    font-weight: 400;
}
span.mx-2 {
    font-size: 12px;
    font-weight: 400;
}

.custom-btn {
    border: 1px solid #4a5568;
    color: #4a5568;
    border-radius: 8px;
}
.custom-btn:hover {
    background-color: #4a5568;
    color: white;
}
.header-settings {
    font-size: 20px;
    font-weight: 600;
    color: #002661;
    margin-left: 25px;
}
.header-title {
    font-size: 16px;
    font-weight: 600;
    color: #003D94;
}

.form-text {
    font-size: 12px;
    color: #000000;
    font-weight: 500;
}
.custom-input {
    max-width: 150px;
}

.custom-card-style {
  width: 840px; /* Lebar tetap */
  height: auto; /* Tinggi tetap */
  border-radius:  24px; /* Sudut melengkung */
  overflow: hidden; /* Opsional, untuk memastikan isi tidak keluar dari batas */
  margin-bottom: 23px;
}
.module-input-style {
  font-size: 12.226px;
  font-weight: 400;
  width: 597px;
  border-radius: 8.733px;
}
.label-new-style1 {
  font-size: 14px;
  font-weight: 500;
  margin-right: 43px;
  color: #2D3748;
}
.label-new-style2 {
  font-size: 14px;
  font-weight: 500;
  margin-right: 39px;
  color: #2D3748;
}
.label-new-style3 {
  font-size: 14px;
  font-weight: 500;
  margin-right: 60px;
  color: #2D3748;
}
.custom-link-masukkan {
    border: 1px solid #ced4da;
    border-radius: 8.733px;
    padding: 8px 12px;
    width: 245px;
    height: 34px;
    font-size: 8.733px;
    font-weight: 400;
    margin-left: 39px;
    transition: border-color 0.3s ease; /* Animasi perubahan warna border */
}
.custom-link-masukkan:focus {
    border-color: #0056D2; /* Ubah warna border menjadi biru */
}
.label-aligned {
  width: 150px; /* Lebar tetap untuk label agar konsisten */
  font-weight: 600; /* Ketebalan teks */
  font-size: 14px; /* Ukuran font */
  margin-right: 50px; /* Jarak antar label dan elemen input */
  color: #003D94;
}

.input-container {
  display: flex; /* Membuat layout horizontal */
  margin-bottom: 1rem; /* Memberikan jarak antar baris */
}
.custom-margin-top {
  margin-top: -18px; /* Ganti nilai sesuai kebutuhan */
  margin-left: 9px;
}

.rating-card {
    border-radius: 12px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 20px;
    background-color: #fff;
}
.btn-rating {
    border-radius: 16px;
    padding: 5px 15px;
    border-color: #0056D2;
    color: #0056D2;
    border-width: 2px; /* Sesuaikan nilai ini untuk menambah ketebalan */
    align-items: center; /* Menyelaraskan secara vertikal */
    justify-content: center; /* Menyelaraskan secara horizontal */
    margin-right: 19px;
}
.btn-rating.active {
        background-color: #0056D2;
        color: #fff;
    }
.btn-rating:hover {
  background-color: #0056D2;
  color: #fff;
}
.rating-bar {
    height: 6px;
    width: 60px; /* Tentukan panjang yang seragam */
    border-radius: 3px;
    background-color: #e9ecef;
    flex-grow: 1; /* Bar menyesuaikan panjang */
}
.rating-bar-filled {
    height: 6px;
    border-radius: 3px;
    background-color: #f7941d;
}
.rating-text {
    width: 83.74px;
    height: 24px;
    margin: 0; /* Menghindari margin bawaan */
    display: flex;
    font-size: 16px; /* Menjaga ukuran font */
    color: #212529; /* Sesuai dengan contoh */
}

.rating-header {
    display: flex;
    align-items: center;
    gap: 10px;
}
.rating-header h1 {
    margin: 0;
    font-size: 3rem;
}
.custom-list {
  list-style: none; /* Hilangkan bullet default */
  padding: 0; /* Hilangkan padding default */
}

.custom-list li {
  display: flex; /* Jadikan elemen di dalam li dalam satu baris */
  align-items: center; /* Pusatkan elemen secara vertikal */
  margin-bottom: 10px; /* Jarak antar item */
}

.custom-list li svg {
  margin-right: 10px; /* Jarak antara SVG dan teks */
}

.rating-header span {
    font-size: 3rem;
    color: #f7941d;
}
.rating-header p {
    margin: 0;
    font-size: 1rem;
    color: #6c757d;
}
.custom-size {
    flex-shrink: 0;
    width: 33.13px;
    height: 24px;
    display: inline-block;
}
.custom-h5 {
    font-size: 14px;
    font-weight: 600;
  }
  .ulasan {
    font-weight: 600;
    font-size: 24px;
    margin-bottom : 41px;
}
.review-text {
    font-size: 14px;
    font-weight: 400;
}
.small-text {
    font-size: 10px;
    font-weight: 400;
}
.custom-label-spacing .col-md-3:first-child {
    margin-right: -80px;
}

#kuotaPeserta {
    font-size: 12px;
}
#tingkatKesulitan {
    font-size: 12px;
}
#forum {
    font-size: 12px;
}
.untuk-spacing-margin {
    margin-bottom: 50px; /* Atur sesuai kebutuhan */
}
.text-small-muted {
    font-size: 10px;
    font-weight: 400;
    color: #6c757d; /* Sesuaikan dengan warna muted (opsional) */
    margin-left: 20px;
}
.text-paragraph {
    font-size: 14px;
    font-weight: 400;
    line-height: 1.6; /* Opsional, untuk memperbaiki jarak antar baris */
    color: #333; /* Opsional, untuk warna teks */
}
.review-header {
    display: flex;
    align-items: center; /* Untuk menyelaraskan elemen secara vertikal */
    justify-content: space-between; /* Opsional: Mengatur jarak antar elemen */
    gap: 8px; /* Memberi jarak antar elemen */
    padding: 0; /* atau atur nilai spesifik */
    margin: 0; /* atau atur nilai spesifik */
}

.stars-container {
    display: flex;
    align-items: center;
    gap: 4px; /* Memberi jarak antar ikon bintang */
    margin-left: 33px;
}
.review-rate {
    padding: 15px;
    margin-bottom: 15px;
}
.review-rate .d-flex.align-items-center.ms-auto {
    margin-left: auto;
}
.container-buttons {
    display: flex;
    align-items: center; /* Pastikan tombol sejajar secara vertikal */
    justify-content: flex-end; /* Atur agar tombol berada di ujung kanan */
    gap: 0.5rem; /* Beri jarak antar tombol */
}
.d-flex.align-items-center.ms-auto {
    margin-left: auto;
}
.icon-text, .delete-text {
    font-size: 12px;
    font-weight: 400;
}

.delete-text {
    color: #FF1C1C;
}


</style>

<script>


</script>

@endsection
