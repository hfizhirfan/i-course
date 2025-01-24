@extends('layout-pagelogin.app')

@section('content')
<div class="breadcrumb-container">
    <div class="container breadcrumb-content">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('home') }}">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('user.profile') }}">Profil</a></li>
            </ol>
        </nav>
    </div>
</div>
<div class="container-isi">
  <div class="d-flex align-items-center">
    <div class="row">
      <!-- Sidebar -->
        <div class="col-md-3 sidebar p-3">
            <a href="#" class="menu-item active" data-target="profil">Profil</a>
            <a href="#" class="menu-item" data-target="keamanan-akun">Keamanan Akun</a>
            <a href="#" class="menu-item" data-target="pemberitahuan">Pemberitahuan</a>
        </div>

        <div class="content">
          <div id="profil" class="content-section active">
            <div class="col-md-9 profile-container">
              <h5 class="profile-title">Profile</h5>
              <div class="profile-header d-flex align-items-center">
                  <img src="{{ Vite::asset('resources/images/profile.png') }}" alt="Foto Profil" class="profile-img">
                  <div class="profile-text ms-3">
                    <h5 class="profile-name mb-1">Budiono Siregar</h5>
                    <p class="profile-role text-muted mb-0">DevOps</p>
                  </div>
              </div>

              <form>
                <h6 class="mt-4 custom-title">Informasi Personal</h6>
                <div class="row g-3 row-custom-margin">
                  <div class="col-md-6">
                    <label for="firstName" class="form-label">Nama Depan</label>
                    <input type="text" class="form-control" id="firstName" placeholder="Masukkan nama depan">
                  </div>
                  <div class="col-md-6">
                    <label for="lastName" class="form-label">Nama Belakang</label>
                    <input type="text" class="form-control" id="lastName" placeholder="Masukkan nama belakang">
                  </div>
                  <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Masukkan email">
                  </div>
                  <div class="col-md-6">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="tel" class="form-control" id="phone" placeholder="Masukkan nomor telepon">
                  </div>
                  <div class="col-md-6">
                    <label for="bio" class="form-label">Bio</label>
                    <input type="text" class="form-control" id="bio" placeholder="Masukkan bio">
                  </div>
                  <div class="col-md-6">
                    <label for="photo" class="form-label">Foto Profil</label>
                    <input type="file" class="form-control" id="photo">
                  </div>
                </div>

                <h6 class="mt-4 custom-title">Sosial Media</h6>
                <div class="row g-3 row-custom-margin">
                  <div class="col-md-6">
                    <label for="twitter" class="form-label">Twitter</label>
                    <input type="url" class="form-control" id="twitter" placeholder="Masukkan link profile twitter">
                  </div>
                  <div class="col-md-6">
                    <label for="facebook" class="form-label">Facebook</label>
                    <input type="url" class="form-control" id="facebook" placeholder="Masukkan link profile facebook">
                  </div>
                  <div class="col-md-6">
                    <label for="linkedin" class="form-label">Linkedin</label>
                    <input type="url" class="form-control" id="linkedin" placeholder="Masukkan link profile linkedin">
                  </div>
                  <div class="col-md-6">
                    <label for="instagram" class="form-label">Instagram</label>
                    <input type="url" class="form-control" id="instagram" placeholder="Masukkan link profile instagram">
                  </div>
                </div>

                <div class="mt-4 text-end">
                  <button type="submit" class="btn btn-primary btn-save">Simpan</button>
                </div>
              </form>
            </div>
          </div>
          <div id="keamanan-akun" class="content-section">
            <div class="col-md-9 profile-container">
              <h5 class="profile-title">Keamanan Akun</h5>

              <form>
                <h6 class="mt-4 custom-title">Ganti password</h6>
                <div class="mb-3">
                  <label for="newPassword" class="form-label" style="margin-bottom: 25px;">Masukkan password baru</label>
                  <input type="text" class="form-control" id="newPassword" placeholder="Masukkan password baru">
                </div>
                <div class="mb-3">
                  <label for="confirmPassword" class="form-label" style="margin-bottom: 25px;">Ketik ulang password baru</label>
                  <input type="text" class="form-control" id="confirmPassword" placeholder="Masukkan password baru">
                </div>

                  <div class="mt-4 text-start">
                    <button type="submit" class="btn btn-primary btn-save">Simpan</button>
                  </div>
              </form>

              <div class="container verificate">
                <h6 class="mt-4 custom-title">Verifikasi email</h6>
                <p>Silahkan buka email anda untuk verifikasi akun</p>
                <button class="verify-button">Kirim</button>
              </div>
            </div>
          </div>
          <div id="pemberitahuan" class="content-section">
            <div class="col-md-9 profile-container">
              <h5 class="profile-title">Pemberitahuan</h5>
              <div class="notification-options mt-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="option1">
                    <label class="form-check-label" for="option1">
                        Pengumuman dari kursus yang saya ikuti
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="option2">
                    <label class="form-check-label" for="option2">
                        Rekomendasi kursus lain
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="option3">
                    <label class="form-check-label" for="option3">
                        Tampilkan angka jumlah notifikasi masuk
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="option4">
                    <label class="form-check-label" for="option4">
                        Tampilkan 10 menit sebelum pengingat belajar aktif
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="option5">
                    <label class="form-check-label" for="option5">
                        Pemberitahuan dikirim melalui email
                    </label>
                </div>
            </div>

          </div>
        </div>
    </div>
  </div>
</div>


<style>
.container-isi {
    display: flex;
  justify-content: center; /* Pusatkan secara horizontal */
  align-items: center; /* Pusatkan secara vertikal */
  margin-top: -20px;
  margin-bottom: 30px;
}

#profil {
  padding-top: 0;
  margin-top: 0;
}
.content-section.active {
  display: block; /* Tampilkan hanya elemen dengan class active */
}
.content-section {
  height: 988px;
  display: none; /* Sembunyikan secara default */
}

    .profile-container {
      width: 900px;  /* Atur lebar maksimal */     /* Responsif */
      padding: 30px;     /* Tambahkan padding */
      background: white;
      border-radius: 24px;
      box-shadow: 2px 2px 10px 0px rgba(0, 0, 0, 0.25);
    }

    .sidebar {
        width: 215px;
        height: 400px;
        background-color: #ffffff; /* Tetap sesuai desain */
        border-radius: 24px;
        padding: 20px; /* Opsional untuk mengatur padding */
        box-shadow: 2px 2px 10px 0px rgba(0, 0, 0, 0.25);
        margin-top: 75px;
    }

    .sidebar a {
        display: flex;
        align-items: center;
        padding: 10px 15px;
        margin-bottom: 10px;
        text-decoration: none;
        color: #4a4a4a;
        font-size: 16px;
        transition: background-color 0.3s, color 0.3s;
    }

    .sidebar a.active {
      color: #007bff;
      font-weight: bold;
      border-left: 4px solid #007bff; /* Garis biru di tepi kiri */
    }
    .sidebar a i {
      margin-right: 10px;
      font-size: 18px;
      color: #007bff;
    }

    .sidebar a:hover {
        color: #0056b3;
    }

    .profile-header {
        display: flex;
        align-items: center; /* Agar gambar dan teks sejajar secara vertikal */
        margin-bottom: 42px;

    }
    .profile-img {
        width: 100px; /* Sesuaikan ukuran gambar */
        height: 100px;
        border-radius: 50%; /* Membuat gambar berbentuk lingkaran */
        object-fit: cover; /* Menjaga proporsi gambar */
        }
    .profile-text {
      margin-left: 15px; /* Jarak antara gambar dan teks */
    }
    .profile-name {
      font-size: 20px;
      font-weight: 600; /* Membuat nama lebih menonjol */
    }
    .profile-role {
      font-size: 14px;
      color: #6c757d; /* Warna teks abu-abu */
    }

    .profile-header h5 {
      margin-top: 10px;
    }

    .profile-header p {
      color: #6c757d;
    }
    .profile-title {
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 42px;
    }


    .form-control {
      border-radius: 8px;
    }

    .btn-save {
        border-radius: 18px;
  border: 3px solid #0056D2;
  background-color: transparent; /* Menghilangkan latar belakang */
  color: #0056D2; /* Mengatur warna teks sesuai border */
    }
    h6.custom-title {
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 25px;
}
.form-label {
  font-size: 16px;
}

/* Memberikan margin 25px pada setiap div dengan col-md-12 */
.col-md-12 {
  margin-bottom: 25px;
}
.form-control[type="file"] {
  height: 38px; /* Sesuaikan dengan tinggi input text jika perlu */
}
.row-custom-margin {
  margin-bottom: 90px;
}
::placeholder {
  font-size: 12px;
}
.content-section {
  display: none;
}
.content-section.active {
  display: block;
}
.verify-button {
    background-color: #0056D2;
    color: #fff;
    padding: 8px 20px;
    border: none;
    border-radius: 18px;
    cursor: pointer;
    font-size: 14px;
    font-weight: 600;
    text-align: center;
}

.verify-button:hover {
    background-color: #0041a8; /* Warna saat tombol dihover */
}
.container.verificate {
    margin-top: 104px; /* Sesuaikan nilai margin-top sesuai kebutuhan */
}
.notification-options .form-check-label {
    font-size: 16px;
    color: #333;
}

.notification-options .form-check-input {
    border: 2px solid #0056D2;
    border-radius: 4px;
    width: 20px;
    height: 20px;
    margin-right: 10px;
}
.notification-options .form-check {
    margin-bottom: 21px; /* Menambahkan jarak antar elemen */
}

  </style>
<script>
// Ambil semua menu item
const menuItems = document.querySelectorAll('.menu-item');

// Tambahkan event listener untuk setiap menu item
menuItems.forEach(item => {
  item.addEventListener('click', function(event) {
    event.preventDefault();

    // Hapus class active dari semua content-section
    document.querySelectorAll('.content-section').forEach(section => {
      section.classList.remove('active');
    });

    // Hapus class active dari semua menu item
    menuItems.forEach(menu => menu.classList.remove('active'));

    // Tambahkan class active pada menu yang diklik
    this.classList.add('active');

    // Ambil target ID dari atribut data-target
    const targetId = this.getAttribute('data-target');

    // Tambahkan class active pada content-section yang sesuai
    const targetSection = document.getElementById(targetId);
    if (targetSection) {
      targetSection.classList.add('active');
    }
  });
});

</script>

@endsection
