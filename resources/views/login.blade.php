@extends('layout-login.app')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="form-container bg-white p-4 rounded shadow">
        <h3 class="text-center heading-text">Selamat Datang di Unocos</h3>
        <form id="loginForm">
            <div class="custom-margin">
                <label for="email" class="input-label">Email</label>
                <input type="email" id="email" name="email" class="form-control custom-input" placeholder="Masukkan email" required>
            </div>
            <div class="custom-margin">
                <label for="password" class="input-label">Password</label>
                <input type="password" id="password" name="password" class="form-control custom-input" placeholder="Masukkan password" required>
            </div>
            <div class="d-flex justify-content-between align-items-center custom-spacing">
                <a href="{{ route('forgot-password') }}" class="forgot-password">Lupa password?</a>
                <a href="#" id="loginBtn" class="btn btn-primary w-50 rounded-pill">Login</a>
            </div>

            <hr class="my-4">
            <p class="text-center">
                Belum memiliki akun? <a href="{{ route('register') }}" class="register-link">Register</a>
            </p>
        </form>
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
    .form-container {
    width: 606px; /* Lebar */
    height: 630px; /* Tinggi */
    display: flex; /* Memastikan elemen tetap responsif */
    flex-direction: column; /* Atur elemen di dalamnya secara vertikal */
    justify-content: flex-start;
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

.register-link {
    text-decoration: none; /* Menghilangkan garis bawah */
    font-size: 16px; /* Ukuran font */
    font-weight: 600; /* Ketebalan font */
    color: #0056D2; /* Warna teks */
}

.register-link:hover {
    text-decoration: none; /* Menghilangkan garis bawah pada hover */
    color: #003A9D; /* Warna teks saat hover (opsional) */
}
.forgot-password {
    text-decoration: none; /* Menghilangkan garis bawah */
    font-size: 14px; /* Ukuran font */
    font-weight: 400; /* Ketebalan font */
    color: #0056D2; /* Warna teks */
}

.forgot-password:hover {
    text-decoration: none; /* Menghilangkan garis bawah saat hover */
    color: #003A9D; /* Warna teks saat hover (opsional) */
}
.input-label {
    font-size: 16px; /* Ukuran font */
    font-weight: 400; /* Ketebalan font */
    display: block; /* Agar label berada di atas input */
    margin-bottom: 5px; /* Jarak antara label dan input */
    color: #333; /* Warna teks (opsional, bisa disesuaikan) */
}
.custom-spacing {
    margin-bottom: 120px; /* Ubah nilai sesuai dengan kebutuhan */
}



</style>
<script>
document.getElementById('loginBtn').addEventListener('click', function (event) {
        event.preventDefault(); // Mencegah aksi default tombol
        const email = document.getElementById('email').value;

        if (email === 'user@email.com') {
            window.location.href = '{{ route('home') }}';
        } else if (email === 'admin@email.com') {
            window.location.href = '{{ route('admin.dashboard') }}';
        } else if (email === 'saya@email.com') {
            window.location.href = '{{ route('category.detail.java') }}';
        } else {
            alert('Email tidak dikenali.');
        }
    });
</script>

@endsection
