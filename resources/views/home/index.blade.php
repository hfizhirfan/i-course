@extends('layout.app')

@section('content')

<div class="jumbotron-container">
    <img src="{{ Vite::asset('resources/images/jumbotron.png') }}"
         alt="Jumbotron"
         class="jumbotron-image">

    <div class="jumbotron-overlay">
        <a href="#" class="btn-explore">
            Jelajahi Kursus
        </a>
    </div>
</div>

<div class="container1">
    <div class="content">
      <img src="{{ Vite::asset('resources/images/whatunocos.png') }}" alt="Gambar pengguna" class="image" />
      <div class="text">
        <h2>Apa itu UNOCOS?</h2>
        <p>
          UNOCOS adalah platform pembelajaran daring yang dirancang untuk
          memberikan pengalaman belajar yang interaktif dan menyenangkan.
          Mengakses pengetahuan baru dan tingkatkan keterampilan anda dengan mudah
          dan fleksibel.
        </p>
      </div>
    </div>
    <img src="/images/backgroundimg2.png" class="dekorasi dekorasi-kiri">
    <img src="/images/backgroundimg1.png" class="dekorasi dekorasi-kanan">
</div>



<div class="categories-container">
    <div class="category-item">
        <div class="icon">
          <img src="{{ Vite::asset('resources/images/svg/bahasa pemrograman.svg') }}" alt="Bahasa Pemrograman" />
        </div>
        <p>Bahasa Pemrograman</p>
    </div>
    <div class="category-item">
        <div class="icon">
            <img src="{{ Vite::asset('resources/images/svg/keuangan dan akuntansi.svg') }}" alt="Bahasa Pemrograman" />
        </div>
      <p>Keuangan dan Akuntansi</p>
    </div>
    <div class="category-item">
        <div class="icon">
            <img src="{{ Vite::asset('resources/images/svg/sains dan matematika.svg') }}" alt="Bahasa Pemrograman" />
        </div>
      <p>Sains dan Matematika</p>
    </div>
    <div class="category-item">
        <div class="icon">
            <img src="{{ Vite::asset('resources/images/svg/desain.svg') }}" alt="Bahasa Pemrograman" />
        </div>
      <p>Desain</p>
    </div>
    <div class="category-item">
        <div class="icon">
            <img src="{{ Vite::asset('resources/images/svg/pengembangan sosial.svg') }}" alt="Bahasa Pemrograman" />
        </div>
      <p>Pengembangan Personal</p>
    </div>
    <div class="category-item">
        <div class="icon">
            <img src="{{ Vite::asset('resources/images/svg/jaringan dan keamanan.svg') }}" alt="Bahasa Pemrograman" />
        </div>
      <p>Jaringan dan Keamanan</p>
    </div>
    <div class="category-item">
        <div class="icon">
            <img src="{{ Vite::asset('resources/images/svg/pemasaran.svg') }}" alt="Bahasa Pemrograman" />
        </div>
      <p>Pemasaran</p>
    </div>
    <div class="category-item">
        <div class="icon">
            <img src="{{ Vite::asset('resources/images/svg/bahasa.svg') }}" alt="Bahasa Pemrograman" />
        </div>
      <p>Bahasa</p>
    </div>
</div>
<div class="container mt-5 mb-80">
    <h2 class="text-semibold custom-margin">Kursus Terbaru</h2>
    <div class="container mt-5 mb-80">
        <div id="populerSlider" class="carousel slide" data-bs-ride="carousel">
          <!-- Wrapper Carousel -->
          <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-3">
                    <div class="card shadow-sm custom-card" >
                        <img src="{{ Vite::asset('resources/images/laravel pemula.png') }}" class="card-img-top" alt="Flutter dan Dart">
                        <div class="card-body">
                          <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Laravel untuk Pemula</h5>
                          <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                          <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                            4.8 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                            <span style="color: #333; font-weight: normal;">(315 ulasan)</span>
                          </p>
                        </div>
                      </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm custom-card" >
                        <img src="{{ Vite::asset('resources/images/pemrograman swift menengah.png') }}" class="card-img-top" alt="Flutter dan Dart">
                        <div class="card-body">
                          <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Pemrograman Swift untuk Menengah</h5>
                          <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                          <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                            4.8 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                            <span style="color: #333; font-weight: normal;">(285 ulasan)</span>
                          </p>
                        </div>
                      </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm custom-card" >
                        <img src="{{ Vite::asset('resources/images/Machine learning dengan python.png') }}" class="card-img-top" alt="Flutter dan Dart">
                        <div class="card-body">
                          <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Machine Learning dengan Python</h5>
                          <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                          <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                            4.8 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                            <span style="color: #333; font-weight: normal;">(285 ulasan)</span>
                          </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm custom-card" >
                        <img src="{{ Vite::asset('resources/images/reactjs pemula.png') }}" class="card-img-top" alt="Flutter dan Dart">
                        <div class="card-body">
                          <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">React.js untuk Pemula</h5>
                          <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                          <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                            4.7 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                            <span style="color: #333; font-weight: normal;">(321 ulasan)</span>
                          </p>
                        </div>
                    </div>
                </div>
              </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-3">
                    <div class="card shadow-sm custom-card" >
                        <img src="{{ Vite::asset('resources/images/pemrograman python untuk menengah.png') }}" class="card-img-top" alt="Flutter dan Dart">
                        <div class="card-body">
                          <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Pemrograman Python untuk Menengah</h5>
                          <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                          <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                            4.7 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                            <span style="color: #333; font-weight: normal;">(331 ulasan)</span>
                          </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm custom-card" >
                        <img src="{{ Vite::asset('resources/images/rest api php.png') }}" class="card-img-top" alt="Flutter dan Dart">
                        <div class="card-body">
                          <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">RESTFUL API dengan PHP dan Codeigniter</h5>
                          <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                          <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                            4.8 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                            <span style="color: #333; font-weight: normal;">(285 ulasan)</span>
                          </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm custom-card" >
                        <img src="{{ Vite::asset('resources/images/Flutter dan dart untuk pemula.png') }}" class="card-img-top" alt="Flutter dan Dart">
                        <div class="card-body">
                          <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Flutter dan Dart untuk Pemula</h5>
                          <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                          <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                            4.8 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                            <span style="color: #333; font-weight: normal;">(285 ulasan)</span>
                          </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm custom-card" >
                        <img src="{{ Vite::asset('resources/images/Vuejs pemula.png') }}" class="card-img-top" alt="Flutter dan Dart">
                        <div class="card-body">
                          <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Vue.js Pemula</h5>
                          <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                          <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                            4.8 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                            <span style="color: #333; font-weight: normal;">(325 ulasan)</span>
                          </p>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Navigation -->
          <!-- Tombol Previous -->
            <span
                class="carousel-control-prev position-absolute start-0 top-50 translate-middle-y custom-prev-icon"
                data-bs-target="#populerSlider"
                data-bs-slide="prev"
                role="button"
                aria-hidden="true"
                >
                <i class="bi bi-chevron-left text-white"></i>
            </span>

      <!-- Tombol Next -->
            <span
                class="carousel-control-next position-absolute end-0 top-50 translate-middle-y custom-next-icon"
                data-bs-target="#populerSlider"
                data-bs-slide="next"
                role="button"
                aria-hidden="true"
                >
                <i class="bi bi-chevron-right text-white"></i>
            </span>
        </div>
    </div>
</div>

<div class="container mt-5 mb-80">
    <h2 class="text-semibold custom-margin">Kursus Populer</h2>
    <div class="container mt-5 mb-80">
        <div id="terbaruSlider" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-3">
                  <div class="card shadow-sm custom-card" >
                    <img src="{{ Vite::asset('resources/images/kimia dasar.png') }}" class="card-img-top" alt="Flutter dan Dart">
                    <div class="card-body">
                      <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Kimia Dasar</h5>
                      <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Sains dan Matematika</p>
                      <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                        4.8 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                        <span style="color: #333; font-weight: normal;">(241 ulasan)</span>
                      </p>
                    </div>
                  </div>
                </div>
                <!-- Duplicate the card for 3 more times -->
                <div class="col-md-3">
                    <div class="card shadow-sm custom-card" >
                        <img src="{{ Vite::asset('resources/images/HTML CSS JS menengah.png') }}" class="card-img-top" alt="Bahasa Jerman">
                        <div class="card-body">
                          <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">HTML, CSS dan JavaScript untuk Menengah</h5>
                          <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                          <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                            4.7 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                            <span style="color: #333; font-weight: normal;">(310 ulasan)</span>
                          </p>
                        </div>
                      </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm custom-card" >
                        <img src="{{ Vite::asset('resources/images/Vuejs menengah.png') }}" class="card-img-top" alt="Pengantar Statistika">
                        <div class="card-body">
                          <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Vue.js untuk Menengah</h5>
                          <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                          <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                            4.7 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                            <span style="color: #333; font-weight: normal;">(313 ulasan)</span>
                          </p>
                        </div>
                      </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm custom-card" >
                        <img src="{{ Vite::asset('resources/images/pemrograman python untuk menengah.png') }}" class="card-img-top" alt="Pemrograman c#">
                        <div class="card-body">
                          <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Pemrograman Python untuk Menengah</h5>
                          <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                          <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                            4.7 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                            <span style="color: #333; font-weight: normal;">(390 ulasan)</span>
                          </p>
                        </div>
                      </div>
                </div>
              </div>
            </div>

            <!-- Duplicate the Slide Structure for Slide 2 -->
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-3">
                    <div class="card shadow-sm custom-card" >
                        <img src="{{ Vite::asset('resources/images/belajar corel.png') }}" class="card-img-top" alt="Bahasa Inggris">
                        <div class="card-body">
                          <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Belajar CorelDraw</h5>
                          <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Desain</p>
                          <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                            4.9 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                            <span style="color: #333; font-weight: normal;">(524 ulasan)</span>
                          </p>
                        </div>
                      </div>
                  </div>
                  <!-- Duplicate the card for 3 more times -->
                  <div class="col-md-3">
                    <div class="card shadow-sm custom-card" >
                        <img src="{{ Vite::asset('resources/images/belajar skrchup.png') }}" class="card-img-top" alt="AutoCAD">
                        <div class="card-body">
                          <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Belajar Dasar SketchUp</h5>
                          <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Desain</p>
                          <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                            4.8 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                            <span style="color: #333; font-weight: normal;">(320 ulasan)</span>
                          </p>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card shadow-sm custom-card" >
                        <img src="{{ Vite::asset('resources/images/Pemrograman java untuk pemula.png') }}" class="card-img-top" alt="Java">
                        <div class="card-body">
                          <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Pemrograman Java untuk Pemula</h5>
                          <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                          <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                            4.8 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                            <span style="color: #333; font-weight: normal;">(565 ulasan)</span>
                          </p>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card shadow-sm custom-card" >
                        <img src="{{ Vite::asset('resources/images/laravel menengah.png') }}" class="card-img-top" alt="Bahasa Jepang">
                        <div class="card-body">
                          <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Laravel untuk Menengah</h5>
                          <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                          <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                            4.7 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                            <span style="color: #333; font-weight: normal;">(291 ulasan)</span>
                          </p>
                        </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>

          <!-- Navigation Buttons -->
          <!-- Tombol Previous -->
            <span
                class="carousel-control-prev position-absolute start-0 top-50 translate-middle-y custom-prev-icon"
                data-bs-target="#terbaruSlider"
                data-bs-slide="prev"
                role="button"
                aria-hidden="true"
                >
                <i class="bi bi-chevron-left text-white"></i>
            </span>

            <!-- Tombol Next -->
            <span
                class="carousel-control-next position-absolute end-0 top-50 translate-middle-y custom-next-icon"
                data-bs-target="#terbaruSlider"
                data-bs-slide="next"
                role="button"
                aria-hidden="true"
                >
                <i class="bi bi-chevron-right text-white"></i>
            </span>
        </div>
    </div>
</div>


<style>

    .fw-semibold {
    font-weight: 600;
}
.card:hover, .card:focus {
    transform: none !important;
}
.text-semibold {
    text-align: left;
    font-weight: 600;
}
.custom-margin {
    margin-bottom: 60px;
}


.card-title {
  font-size: 16px;
  font-weight: 600; /* Semibold */
  color: #333;
  margin-bottom: 20px;
  height: 38.4px; /* Line-height konstan */
  width: 247px;
}
.card-text {
  font-size: 14px;
  color: #333;
}

.card-text span {
  font-size: 14px;
  font-weight: 400; /* Normal */
}
.custom-card {
    width: 306px;
    height: 319px;
    border-radius: 24px;
    overflow: hidden;
  }

  .mb-80 {
    margin-bottom: 200px;
}

.jumbotron-container {
  text-align: center;
  margin-top: 26px;
}

.jumbotron-image {
  width: 80%;
  height: auto;
}

.jumbotron-overlay {
  position: absolute;
  top: 50%;
  left: 34%;
  transform: translate(-50%, -50%);
  text-align: center;
  z-index: 10;
}

.btn-explore {
  padding: 12px 24px;
  background-color: transparent; /* Background transparan */
  color: #007bff; /* Warna teks */
  border: 2px solid #007bff; /* Border dengan warna biru */
  border-radius: 20px;
  text-decoration: none;
  transition: all 0.3s ease;
}

/* Hover effect */
.btn-explore:hover {
  background-color: #007bff; /* Background berubah menjadi biru saat hover */
  color: white; /* Warna teks putih saat hover */
  transform: scale(1.05); /* Memberikan efek zoom saat hover */
}

.custom-prev-icon,
.custom-next-icon {
  background-color: #2c3e50; /* Warna lingkaran */
  width: 48px; /* Diameter lingkaran */
  height: 48px;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Bayangan */
  cursor: pointer;
  z-index: 1; /* Pastikan tombol di atas slider */
}

.custom-prev-icon:hover,
.custom-next-icon:hover {
  background-color: #34495e; /* Warna saat hover */
}

.carousel-control-prev {
  left: -20px; /* Sedikit keluar dari container */
}

.carousel-control-next {
  right: -20px; /* Sedikit keluar dari container */
}
.dekorasi {
  position: absolute;
  width: 300px;
  height: 300px;
  object-fit: contain;
  pointer-events: none; /* supaya tidak mengganggu klik konten utama */
}
.dekorasi-kiri {
  top: -40px;
  left: -10px;
}

/* Dekorasi kanan bawah */
.dekorasi-kanan {
  bottom: -55px;
  right: -10px;
}

</style>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const tabs = document.querySelectorAll(".nav-link");
    const sliders = document.querySelectorAll(".carousel");

        tabs.forEach(tab => {
            tab.addEventListener("click", function () {
                // Hapus kelas aktif dari semua slider
                sliders.forEach(slider => slider.classList.add("d-none"));

                // Tampilkan slider sesuai dengan tab yang diklik
                const target = document.querySelector(this.getAttribute("data-bs-target"));
                if (target) {
                    target.classList.remove("d-none");
                }
            });
        });
    });
</script>

@endsection
