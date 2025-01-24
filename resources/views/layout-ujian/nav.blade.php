@php
    $currentRouteName = Route::currentRouteName();
@endphp

<nav class="navbar navbar-expand-md navbar-custom">
    <div class="container d-flex flex-column align-items-start">
        <h5>Kuis 1</h5>
        <p>Pemrograman Java untuk Pemula</p>
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

</style>
