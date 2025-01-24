@extends('layout-login.app')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="form-container bg-white p-4 rounded shadow">
        <h3 class="text-center heading-text">Daftar dan mulai belajar</h3>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="custom-margin">
                <label for="name" class="input-label">Nama Lengkap</label>
                <input type="text" id="name" name="name" class="form-control custom-input" placeholder="Masukkan nama lengkap" required>
            </div>
            <div class="custom-margin">
                <label for="email" class="input-label">Email</label>
                <input type="email" id="email" name="email" class="form-control custom-input" placeholder="Masukkan email" required>
            </div>
            <div class="custom-margin">
                <label for="password" class="input-label">Password</label>
                <input type="password" id="password" name="password" class="form-control custom-input" placeholder="Masukkan password" required>
            </div>

            <button type="submit" class="btn btn-primary custom-register-button">Register</button>
        </form>
        <hr class="custom-divider">
        <p class="text-center mt-3 custom-login-text">
            Sudah memiliki akun? <a href="{{ route('login') }}" class="custom-login-link">Login</a>
        </p>
    </div>
</div>

<style>
body {
            margin: 0;
            padding: 0;
            background-image: url('/images/login.png'); /* Ganti dengan path gambar background Anda */
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
/* Form Container */
.form-container {
    width: 606px; /* Lebar */
    height: 630px; /* Tinggi */
    display: flex; /* Memastikan elemen tetap responsif */
    flex-direction: column; /* Atur elemen di dalamnya secara vertikal */
    align-items: center; /* Pusatkan elemen */
    margin-top: 75px; /* Tambahkan margin untuk menurunkan posisi */
    transform: translateX(300px); /* Geser 50px ke kanan */
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
    margin-bottom: 40px; /* Jarak 57px dengan elemen di bawahnya */
    margin-top: 50px; /* Jarak 57px dengan elemen di bawahnya */
    font-size: 34px; /* Opsional: Ukuran teks */
    font-weight: 600; /* Opsional: Tebal font */
}
.custom-margin {
    margin-bottom: 24px; /* Jarak antar elemen form */
}

.custom-register-button {
    width: 400px; /* Mengatur lebar tombol */
    height: 35px;
    background-color: #0066FF; /* Warna biru */
    color: white; /* Teks putih */
    border: none; /* Hilangkan border */
    border-radius: 18px; /* Sudut membulat */
    margin-top: 30px !important; /* Hilangkan margin */
    margin-bottom: 30px !important; /* Hilangkan margin */
    font-size: 18px; /* Ukuran font */
    font-weight: 600; /* Semibold */
    transition: background-color 0.3s ease; /* Animasi hover */
    display: flex; /* Menggunakan flexbox untuk penataan */
    justify-content: center; /* Menyusun teks ke tengah secara horizontal */
    align-items: center; /* Menyusun teks ke tengah secara vertikal */
    text-align: center; /* Memastikan teks berada di tengah */
}

.custom-register-button:hover {
    background-color: #004bb7; /* Warna saat hover */
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
.input-label {
    font-size: 16px; /* Ukuran font */
    font-weight: 400; /* Ketebalan font */
    display: block; /* Agar label berada di atas input */
    margin-bottom: 5px; /* Jarak antara label dan input */
    color: #333; /* Warna teks (opsional, bisa disesuaikan) */
}

.custom-login-link {
    text-decoration: none; /* Menghilangkan garis bawah */
    font-size: 16px; /* Mengatur ukuran font */
    font-weight: 600; /* Mengatur ketebalan font */
    color: #0056D2; /* Mengubah warna teks */
}

.custom-login-link:hover {
    text-decoration: none; /* Pastikan tidak ada garis bawah saat hover */
    color: #0043A4; /* Mengubah warna saat hover (opsional) */
}


</style>

@endsection
