@extends('layout-pagelogin.app')

@section('content')
<div class="breadcrumb-container">
    <div class="container breadcrumb-content">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('home') }}">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('user.pencapaian') }}">Pencapaian</a></li>
            </ol>
        </nav>
    </div>
</div>
<div class="container mt-5" style="margin-bottom: 50px">
    <h5 class="achievement-title">Pencapaian</h5>
    <div class="achievement-section">
        <div class="achievement-body">
            <!-- Left side -->
            <div class="certificate-left">
                <!-- Avatar -->
                <div class="avatar">
                    <img src="{{ Vite::asset('resources/images/profile.png') }}" alt="Avatar">
                </div>
                <!-- Konten Sertifikat Kursus -->
                <div>
                    <div class="title">Sertifikat Kursus</div>
                    <div class="description1">di selesaikan oleh <strong>Budiono Siregar</strong></div>
                    <div class="description2">Pencapaian: <strong>100%</strong></div>
                    <div class="description3">
                        <p>05 Oktober 2024</p>
                        <p>30 jam belajar</p>
                    </div>
                </div>
            </div>

            <!-- Right side -->
            <div class="certificate-right">
                <div class="logo-2">
                    <img src="{{ Vite::asset('resources/images/logo tanpa text.png') }}" alt="Avatar">
                </div>
                <div>
                    <div class="course-name">HTML, CSS, dan JavaScript untuk Pemula</div>
                    <div class="details">4,8 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                        <path d="M4.07235 18.8261L5.56195 12.3864L0.56604 8.05512L7.16615 7.48219L9.73285 1.40918L12.2996 7.48219L18.8997 8.05512L13.9038 12.3864L15.3934 18.8261L9.73285 15.4115L4.07235 18.8261Z" fill="#FF8000"/>
                      </svg> (505 ulasan)</div>
                </div>
            </div>
        </div>
        <div class="image-container">
            <!-- Tambahkan gambar atau konten di sini -->
            <img src="{{ Vite::asset('resources/images/sertifikat baru.png') }}" alt="Placeholder">
        </div>
    </div>
</div>
<style>
.achievement-section {
    background-color: #E6F0FF; /* Warna biru muda sesuai desain */
    border-radius: 10px; /* Membuat sudut kotak membulat */
    padding: 20px;
    min-height: 150px; /* Menyesuaikan tinggi minimum */
    display: flex;
    align-items: flex-start;
    gap: 20px; /* Tambahkan jarak antar elemen */
}
.certificate-container {
    flex: 1; /* Kontainer ini memenuhi ruang di sebelah kiri */
    display: flex;
    flex-direction: column; /* Semua elemen diatur ke bawah */
    gap: 10px;
}
.achievement-title {
        font-size: 34px; /* Ukuran font 34px */
        font-weight: 600; /* Berat font 600 */
        margin-bottom: 40px;
}
.achievement-header {
    font-size: 24px;
    font-weight: 600;
}
.achievement-body {
    flex: 1; /* Kontainer ini memenuhi ruang di sebelah kiri */
    display: flex;
    flex-direction: column; /* Semua elemen diatur ke bawah */
    gap: 10px;
}
.certificate-left {
    display: flex;
    align-items: center;
    gap: 20px; /* Memberi jarak antara avatar dan teks */
    padding: 20px;
    background-color: white;
    border-radius: 24px;
    width: 557px;
    box-shadow: 2px 2px 10px 0px rgba(0, 0, 0, 0.25);
}
.avatar {
    width: 140px;
    height: auto;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.avatar img {
    border-radius: 50%;
    width: 100%;
    height: 100%;
}
.certificate-left .title {
    font-size: 20px;
    font-weight: 600;
    color: #0056D2; /* Warna biru lebih gelap */
    margin-bottom: 12px;
}
.certificate-left .description {
    font-size: 14px;
    color: #4E6C92; /* Warna teks abu-abu */
}
.certificate-left .description1 {
    font-size: 14px;
    color: #000000; /* Warna teks abu-abu */
    font-weight: 400;
    margin-bottom: 18px;
}
.certificate-left .description2 {
    font-size: 16px;
    color: #000000; /* Warna teks abu-abu */
    font-weight: 400;
    margin-bottom: 24px;
}
.certificate-left .description3 {
    font-size: 12px;
    color: #000000; /* Warna teks abu-abu */
    font-weight: 400;
}
.description3 p {
    margin: 0; /* Menghilangkan margin atas dan bawah */
    padding: 0; /* Menghilangkan padding jika ada */
}
.certificate-left .description1 strong {
    color: #0056D2;
    font-size: 14px;
    font-weight: 600;
}
.certificate-left .description2 strong {
    color: #0056D2;
    font-size: 16px;
    font-weight: 600;
}
.blue-line {
    border-top: 1px solid #ADD8E6;
    margin: 10px 0;
}
.certificate-right {
    margin-top: 10px; /* Tambahkan jarak atas jika diperlukan */
    background-color: white;
    padding: 20px;
    display: flex;
    align-items: center;
    border-radius: 24px;
    width: 557px;
    box-shadow: 2px 2px 10px 0px rgba(0, 0, 0, 0.25);
}
.logo-2 {
    width: 140px;
    height: auto;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 20px;
}
.logo-2 img {
    width: 50%;
    height: auto;
}
.certificate-right .course-name{
    font-weight: 600;
    font-size: 20px;
    color: #0056D2;
}
.certificate-right .details{
    font-weight: 500;
    font-size: 14px;
}
.image-container {
    flex: 1; /* Kontainer ini memenuhi ruang di sebelah kanan */
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 10px;
    height: auto; /* Sesuaikan tinggi agar proporsional */
}
.image-container img {
    width: 514px; /* Gambar akan responsif */
    height: auto;
    border-radius: 20px;
}
</style>
@endsection
