@extends('layout-password.app')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100 forgot-password-background">
    <div class="form-container bg-white p-4 rounded shadow">
        <div class="container">
            <div class="text-center heading-text">
                <img src="{{ Vite::asset('resources/images/logo2.png') }}" alt="Logo" class="logo-image">
            </div>
            <form method="GET" action="{{ route('forgot-password-confirmation') }}">
                <div class="form-group">
                    <label for="email" class="form-label">Masukkan email</label>
                    <input type="email" id="email" name="email" class="form-control custom-input" placeholder="Masukkan email" required>
                </div>
                <div class="custom-margin-button">
                    <button type="submit" class="btn btn-primary custom-register-button">Kirim</button>
                </div>
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
    justify-content: center; /* Menjadikan elemen anak di tengah vertikal */
    margin-top: 75px; /* Tambahkan margin untuk menurunkan posisi */
    transform: translateX(18px); /* Geser 50px ke kanan */
    border-radius: 24px !important;

}

.custom-input {
    width: 400px; /* Mengatur lebar penuh */
    height: 45px;
    padding: 10px 15px; /* Memberikan ruang di dalam input */
    font-size: 16px; /* Ukuran font */
    border: 1px solid #c4c4c4; /* Warna border */
    border-radius: 12px; /* Membuat sudut membulat */
    outline: none; /* Hilangkan outline default */
    transition: all 0.3s ease; /* Efek transisi saat fokus */
    color: #4a4a4a; /* Warna teks */
    background-color: #ffffff; /* Latar belakang putih */


}

.custom-input::placeholder {
    color: #9a9a9a; /* Warna placeholder */
}

.custom-input:focus {
    border-color: #5a9; /* Border berwarna hijau saat fokus */
    box-shadow: 0 0 5px rgba(90, 153, 90, 0.3); /* Efek shadow saat fokus */
}
.heading-text {
    margin-bottom: 120px; /* Jarak 57px dengan elemen di bawahnya */
    margin-top: 20px; /* Jarak 57px dengan elemen di bawahnya */
    font-size: 34px; /* Opsional: Ukuran teks */
    font-weight: 600; /* Opsional: Tebal font */
}
.form-label {
    font-size: 18px;
    font-weight: 600; /* Teks tebal */
    color: #000; /* Warna hitam */
    margin-bottom: 10px; /* Jarak ke input */
    display: block; /* Supaya label ada di atas input */
}
.custom-margin {
    margin-bottom: 24px; /* Jarak antar elemen form */
}

.custom-register-button {
    width: 120px; /* Lebar tombol */
    height: 40px; /* Tinggi tombol */
    background-color: #0056D2; /* Warna biru */
    color: white; /* Teks putih */
    border: none; /* Hilangkan border */
    border-radius: 18px; /* Sudut membulat */
    font-size: 16px; /* Ukuran font */
    font-weight: 600; /* Teks tebal */
    transition: background-color 0.3s ease; /* Animasi hover */
}

.custom-register-button:hover {
    background-color: #004bb7; /* Warna saat hover */
}
.custom-margin-button {
    position: relative;
    margin-top: 20px; /* Jarak ke elemen atas */
    text-align: right;
    margin-right: 60px;
}

/* Teks "Sudah memiliki akun?" */
.custom-login-text {
    font-size: 16px; /* Ukuran teks */
    color: #000; /* Warna teks hitam */
    margin-top: 0px; /* Atur jarak atas */
    margin-bottom: 0; /* Hapus jarak bawah */
    padding-top: 0 !important; /* Tambahkan padding 0 */
}

.custom-login-link {
    color: #0056D2; /* Warna biru */
    font-weight: normal; /* Font tebal */
    text-decoration: none; /* Hilangkan garis bawah */
}

.custom-login-link:hover {
    text-decoration: underline; /* Garis bawah saat hover */
}
.custom-divider {
    border: none; /* Hilangkan border default */
    border-top: 2px solid #989898; /* Warna garis */
    margin: 0px 0; /* Jarak atas dan bawah */
    width: 70%; /* Lebar penuh */
    padding: 0 !important; /* Tambahkan padding 0 */
}
.logo-image {
    width: 280px; /* Atur lebar logo */
    height: auto; /* Biarkan tinggi menyesuaikan proporsi */
    margin-bottom: 20px; /* Tambahkan jarak bawah */
}
.form-group {
    position: relative;
    left: 65px; /* Geser elemen sejauh yang diinginkan ke kanan */
    margin-bottom: 60px;
}


</style>

@endsection
