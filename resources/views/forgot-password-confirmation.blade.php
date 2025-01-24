@extends('layout-password.app')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100 forgot-password-background">
    <div class="form-container bg-white p-4 rounded shadow">
        <div class="text-center">
            <img src="{{ Vite::asset('resources/images/checklist email.png') }}" alt="Checklist Icon" class="checklist-image">
            <p class="message-text">Silahkan cek email anda</p>
        </div>
        <div class="custom-margin-button text-center">
            <form method="GET" action="{{ route('reset-password') }}">
                <button type="submit" class="btn btn-primary custom-register-button">Lihat</button>
            </form>
        </div>
    </div>
</div>

<style>
/* Form Container */
.forgot-password-background {
    background-size: cover; /* Menutup seluruh area */
    background-position: center; /* Posisikan di tengah */
    background-repeat: no-repeat; /* Tidak mengulang gambar */
}
.form-container {
    width: 606px; /* Lebar */
    height: 630px; /* Tinggi */
    display: flex; /* Memastikan elemen tetap responsif */
    flex-direction: column; /* Atur elemen di dalamnya secara vertikal */
    align-items: center; /* Pusatkan elemen */
    margin-top: 75px; /* Tambahkan margin untuk menurunkan posisi */
    transform: translateX(18px); /* Geser 50px ke kanan */
    border-radius: 24px !important;

}


.checklist-image {
    margin-top: 90px; /* Jarak 57px dengan elemen di bawahnya */
    width: 171px; /* Lebar gambar */
    height: auto; /* Sesuaikan tinggi dengan proporsi */
    margin-bottom: 20px; /* Jarak ke teks */
}
.message-text {
    font-size: 18px; /* Ukuran font */
    font-weight: 600; /* Tebal teks */
    color: #000; /* Warna hitam */
    margin-bottom: 30px; /* Jarak ke tombol */
}

/* Tombol */
.custom-register-button {
    width: 100px; /* Lebar tombol */
    height: 40px; /* Tinggi tombol */
    background-color: #0056D2; /* Warna biru */
    color: white; /* Teks putih */
    border: none; /* Hilangkan border */
    border-radius: 18px; /* Sudut membulat */
    font-size: 16px; /* Ukuran font */
    font-weight: 600; /* Teks tebal */
    transition: background-color 0.3s ease; /* Animasi hover */
}

/* Hover tombol */
.custom-register-button:hover {
    background-color: #004bb7; /* Warna biru lebih gelap */
}

/* Wrapper untuk tombol */
.custom-margin-button {
    margin-top: 100px; /* Jarak ke elemen atas */
    text-align: center; /* Posisikan tombol di tengah */
}


</style>

@endsection
