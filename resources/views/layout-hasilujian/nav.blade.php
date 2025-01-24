@php
    $currentRouteName = Route::currentRouteName();
@endphp

<nav class="navbar navbar-expand-md navbar-custom">
    <div class="container d-flex justify-content-start align-items-center">
        <!-- Tombol Kembali -->
        <a href="{{ route('kursus.java-pemula', ['show' => 'content-kuis']) }}" class="d-flex align-items-center text-decoration-none me-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="27" viewBox="0 0 28 27" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.375 22.5L8.375 13.5L17.375 4.5L19.625 6.75L12.875 13.5L19.625 20.25L17.375 22.5Z" fill="#0056D2"/>
            </svg>
            <span class="ms-1 custom-font">Kembali</span>
        </a>

        <!-- Garis Pembatas -->
        <div class="border-divider mx-3"></div>

        <!-- Konten lainnya -->
        <div class="d-flex flex-column">
            <h5 class="mb-0">Kuis 1</h5>
            <p class="mb-0">Pemrograman Java untuk Pemula</p>
        </div>
    </div>
</nav>


<style>
 .navbar-custom {
    background-color: #ffffff; /* Warna putih untuk background navbar */
    padding: 10px 20px; /* Padding atas-bawah dan kiri-kanan */
    border-bottom: 2px solid #f0f4f8; /* Garis bawah dengan warna abu-abu muda */
    height: 100px;
}

.navbar-custom h5 {
    color: #0056D2; /* Warna biru untuk judul */
    font-weight: 600;
    font-size: 16px;
}

.navbar-custom p {
    color: #000; /* Warna teks abu tua */
    margin: 0; /* Hilangkan margin bawah */
    font-size: 14px;
    font-weight: 400;
}
.border-divider {
    width: 1px; /* Lebar garis */
    height: 40px; /* Tinggi garis, sesuaikan dengan tinggi konten */
    background-color: #ccc; /* Warna garis */
}
.custom-font {
    font-size: 14px;
    font-weight: 600;
    color: #0056D2;
}


</style>
