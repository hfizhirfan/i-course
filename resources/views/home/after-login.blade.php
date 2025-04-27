@extends('layout-pagelogin.app')

@section('content')

<div class="jumbotron-container2">
    <img src="{{ Vite::asset('resources/images/jumbotron2.png') }}"
         alt="Jumbotron"
         class="jumbotron-image2">

    <div class="jumbotron-overlay2">
        <a href="#" class="btn-explore2">
            Jelajahi Kursus
        </a>
    </div>
</div>
<div class="background">
    <div class="container learning-section">
        <div class="title-section">
            <h2 class="text-semibold">Lanjut Belajar</h2>
            <button class="btn btn-learning" onclick="window.location.href='{{ route('course.after-login') }}'">Pembelajaran saya</button>
        </div>
        <div class="row">
            <!-- Course 1 -->
            <div class="col-md-3">
                <div class="card shadow-sm custom-card" >
                    <img src="{{ Vite::asset('resources/images/Pemrograman java untuk pemula.png') }}" class="card-img-top" alt="Flutter dan Dart">
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
            <!-- Course 2 -->
            <div class="col-md-3">
                <div class="card shadow-sm custom-card" >
                    <img src="{{ Vite::asset('resources/images/rest api dengan golang.png') }}" class="card-img-top" alt="Flutter dan Dart">
                    <div class="card-body">
                      <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">REST API dengan Golang</h5>
                      <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                      <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                        4.8 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                        <span style="color: #333; font-weight: normal;">( 505 ulasan)</span>
                      </p>
                    </div>
                </div>
            </div>
            <!-- Course 3 -->
            <div class="col-md-3">
                <div class="card shadow-sm custom-card" >
                    <img src="{{ Vite::asset('resources/images/bahasa jepang n3.png') }}" class="card-img-top" alt="Flutter dan Dart">
                    <div class="card-body">
                      <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Bahasa Jepang N3</h5>
                      <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa</p>
                      <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                        4.6 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                        <span style="color: #333; font-weight: normal;">(630 ulasan)</span>
                      </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="/images/backgroundimg2.png" class="dekorasi dekorasi-kiri">
    <img src="/images/backgroundimg1.png" class="dekorasi dekorasi-kanan">

</div>


<div class="container rekomendasi">
    <h2>Rekomendasi</h2>
</div>

<div class="container mt-5 mb-80">
    <h2 class="text-semibold custom-margin">Baru dilihat</h2>
    <div class="container mt-5 mb-80">
        <div id="NewSlider" class="carousel slide" data-bs-ride="carousel">
          <!-- Wrapper Carousel -->
          <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-3">
                    <div class="card shadow-sm custom-card" >
                        <img src="{{ Vite::asset('resources/images/belajar dasar autocad.png') }}" class="card-img-top" alt="Flutter dan Dart">
                        <div class="card-body">
                          <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Belajar Dasar AutoCAD</h5>
                          <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Desain</p>
                          <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                            4.8 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                            <span style="color: #333; font-weight: normal;">(315 ulasan)</span>
                          </p>
                        </div>
                      </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm custom-card" >
                        <img src="{{ Vite::asset('resources/images/codeigniter pemula.png') }}" class="card-img-top" alt="Flutter dan Dart">
                        <div class="card-body">
                          <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">CodeIgniter untuk Pemula</h5>
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
                        <img src="{{ Vite::asset('resources/images/belajar corel.png') }}" class="card-img-top" alt="Flutter dan Dart">
                        <div class="card-body">
                          <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Belajar CorelDraw</h5>
                          <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Desain</p>
                          <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                            4.8 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                            <span style="color: #333; font-weight: normal;">(285 ulasan)</span>
                          </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm custom-card" >
                        <img src="{{ Vite::asset('resources/images/pengantar statistika.png') }}" class="card-img-top" alt="Flutter dan Dart">
                        <div class="card-body">
                          <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Pengantar Statistika dan Probabilitas</h5>
                          <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Sains dan Matematika</p>
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
                        <img src="{{ Vite::asset('resources/images/bahasa jepang n1.png') }}" class="card-img-top" alt="Flutter dan Dart">
                        <div class="card-body">
                          <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Bahasa Jepang N1</h5>
                          <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa</p>
                          <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                            4.7 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                            <span style="color: #333; font-weight: normal;">(331 ulasan)</span>
                          </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm custom-card" >
                        <img src="{{ Vite::asset('resources/images/ruby menengah.png') }}" class="card-img-top" alt="Flutter dan Dart">
                        <div class="card-body">
                          <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Pemrograman Ruby untuk Menengah</h5>
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
                        <img src="{{ Vite::asset('resources/images/pemrograman swift menengah.png') }}" class="card-img-top" alt="Flutter dan Dart">
                        <div class="card-body">
                          <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Pemrgraman Swift untuk Menengah</h5>
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
                data-bs-target="#NewSlider"
                data-bs-slide="prev"
                role="button"
                aria-hidden="true"
                >
                <i class="bi bi-chevron-left text-white"></i>
            </span>

      <!-- Tombol Next -->
            <span
                class="carousel-control-next position-absolute end-0 top-50 translate-middle-y custom-next-icon"
                data-bs-target="#NewSlider"
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
    <h2 class="text-semibold custom-margin">Kategori serupa</h2>
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
    <h2 class="text-semibold custom-margin">Kursus unggulan</h2>
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

/* Jumbotron */
.jumbotron-container2 {
  text-align: center;
  margin-top: 26px;
}

.jumbotron-image2 {
  width: 80%;
  height: auto;
}


.jumbotron-overlay2 {
  position: absolute;
  top: 53%;
  left: 76%;
  transform: translate(-50%, -50%);
  text-align: center;
  z-index: 10;
}

.background {
margin-top: 100px;
  position: relative;
  width: 100%;
  height: 600px;
  background-color: #ffffff;
  overflow: hidden;
}

/* Style semua dekorasi */
.dekorasi {
  position: absolute;
  width: 300px;
  height: 300px;
  object-fit: contain;
  pointer-events: none; /* supaya tidak mengganggu klik konten utama */
}

/* Dekorasi kiri atas */
.dekorasi-kiri {
  top: -50px;
  left: -10px;
}

/* Dekorasi kanan bawah */
.dekorasi-kanan {
  bottom: -55px;
  right: -10px;
}
.learning-section {
  position: relative;
  z-index: 10; /* Konten di depan */
}


.btn-explore2 {
  padding: 12px 24px;
  background-color: transparent; /* Background transparan */
  color: #007bff; /* Warna teks biru */
  border: 2px solid #007bff; /* Border biru */
  background-color: #ffffff;
  border-radius: 20px;
  text-decoration: none;
  transition: all 0.3s ease; /* Transisi halus saat hover */
}

.title-section {
    display: flex;
    margin-bottom: 80px;
    justify-content: space-between;
    align-items: center;

}
.btn-learning {
    border-radius: 14.718px;
    border: 1.635px solid #0056D2;
    color: #0056D2; /* Warna teks biru */
    font-size: 12px;
}
.btn-learning:hover {
    background-color: #0056D2;
    color: white;
}

/* Hover effect */
.btn-explore2:hover {
  background-color: #007bff; /* Warna latar belakang biru saat hover */
  color: white; /* Warna teks putih saat hover */
  transform: scale(1.05); /* Efek zoom saat hover */
}
.text-semibold.custom-margin {
    font-size: 24px;
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
    margin-bottom: 120px;
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
.container.rekomendasi h2 {
  font-size: 34px;
  font-weight: 600;
  margin-top: 160px;
}

.container.learning-section {
    margin-top: 60px;
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
