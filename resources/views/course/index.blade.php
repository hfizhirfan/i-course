@extends('layout.app')

@section('content')

<div class="pembelajaran-container">
    <div class="container">
        <h2 class="text-semibold custom-margin">Pembelajaran Saya</h2>
        <div class="text-center">
            <!-- Gambar ilustrasi -->
            <img src="{{ Vite::asset('resources/images/pembelajaran saya.png') }}"
                alt="Illustration"
                class="pembelajaran-image">
            <!-- Pesan -->
            <p class="custom-text-style">Anda belum mengikuti kursus</p>

            <a href="#" class="btn btn-outline-primary rounded-pill px-4 py-2 fw-medium">Jelajahi kursus</a>

        </div>
    </div>
</div>

<style>

    /* Gaya untuk kontainer utama */
.pembelajaran-container {
    margin-top: 40px;
    margin-bottom: 120px;
}

/* Gaya untuk gambar */
.pembelajaran-image {
  width: 387px;
  height: auto;
  display: block;
  margin: 0 auto 20px; /* Tengahkan gambar dan beri jarak bawah */
}
.custom-text-style {
    font-size: 28px; /* Mengatur ukuran font */
    font-weight: 600; /* Menyamakan gaya dengan h3 */
    color: #0056D2; /* Warna biru */
    margin-bottom: 16px; /* Sesuaikan jarak bawah jika perlu */
}
.custom-margin {
    margin-bottom: 100px; /* Atur jarak sesuai kebutuhan */
}

</style>

@endsection
