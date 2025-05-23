@extends('layout-pagelogin.app')

@section('content')

<div class="breadcrumb-container">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Kategori</li>
                <li class="breadcrumb-item active" aria-current="page"><a href="#">Bahasa Pemrograman</a></li>
            </ol>
        </nav>
    </div>
</div>

<!-- Title -->
<div class="custom-jumbotron"style="background-image: url('{{ Vite::asset('resources/images/kategori.png') }}');">
    <div class="container">
        <h2 class="display-4 text-centered-left">Kursus Bahasa Pemrograman</h2>
    </div>
 </div>

<div class="container my-5">
    <!-- Tabs -->
    <ul class="nav nav-tabs mb-3" id="kursusTab" role="tablist">
        <li class="nav-item">
            <button class="nav-link active" id="terbaru-tab" data-bs-toggle="tab" data-bs-target="#terbaruSlider" type="button" role="tab">
                Terbaru
            </button>
        </li>
        <li class="nav-item">
            <button class="nav-link" id="populer-tab" data-bs-toggle="tab" data-bs-target="#populerSlider" type="button" role="tab">
                Populer
            </button>
        </li>
    </ul>

    <!-- Kursus Cards -->
    {{-- Kursus terbaru --}}
    <div class="container mt-5 mb-80">
        <div id="terbaruSlider" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-3">
                    <a href="{{ route('category.detail.vuejs') }}" style="text-decoration: none; color: inherit;">
                        <div class="card shadow-sm custom-card" >
                            <img src="{{ Vite::asset('resources/images/Flutter dan dart untuk menengah.png') }}" class="card-img-top" alt="Flutter dan Dart">
                            <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Flutter dan Dart untuk Menengah</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.8 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(285 ulasan)</span>
                            </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{ route('category.detail.java') }}" style="text-decoration: none; color: inherit;">
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
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{ route('category.detail.vuejs') }}" style="text-decoration: none; color: inherit;">
                        <div class="card shadow-sm custom-card" >
                            <img src="{{ Vite::asset('resources/images/menguasai postgre SQL.png') }}" class="card-img-top" alt="Pengantar Statistika">
                            <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Menguasai Portege SQL</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.8 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(505 ulasan)</span>
                            </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{ route('category.detail.java') }}" style="text-decoration: none; color: inherit;">
                        <div class="card shadow-sm custom-card" >
                            <img src="{{ Vite::asset('resources/images/pemrograman visual c pemula.png') }}" class="card-img-top" alt="Pemrograman c#">
                            <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Pemrograman Visual C# untuk Pemula</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.8 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(565 ulasan)</span>
                            </p>
                            </div>
                        </div>
                    </a>
                </div>
              </div>
            </div>

            <!-- Duplicate the Slide Structure for Slide 2 -->
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-3">
                    <a href="{{ route('category.detail.java') }}" style="text-decoration: none; color: inherit;">
                        <div class="card shadow-sm custom-card" >
                            <img src="{{ Vite::asset('resources/images/react native pemula.png') }}" class="card-img-top" alt="Bahasa Inggris">
                            <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">React Native untuk Pemula</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.7 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(300 ulasan)</span>
                            </p>
                            </div>
                        </div>
                    </a>
                </div>
                  <!-- Duplicate the card for 3 more times -->
                <div class="col-md-3">
                    <a href="{{ route('category.detail.vuejs') }}" style="text-decoration: none; color: inherit;">
                        <div class="card shadow-sm custom-card" >
                            <img src="{{ Vite::asset('resources/images/Vuejs mahir.png') }}" class="card-img-top" alt="AutoCAD">
                            <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Vue.js untuk Mahir</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.7 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(107 ulasan)</span>
                            </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{ route('category.detail.java') }}" style="text-decoration: none; color: inherit;">
                        <div class="card shadow-sm custom-card" >
                            <img src="{{ Vite::asset('resources/images/rest api dengan golang.png') }}" class="card-img-top" alt="Java">
                            <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Rest API dengan Golang</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.5 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(245 ulasan)</span>
                            </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{ route('category.detail.java') }}" style="text-decoration: none; color: inherit;">
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
                    </a>
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
    {{-- kusrsus populer --}}
    <div class="container mt-5 mb-80">
        <div id="populerSlider" class="carousel slide d-none" data-bs-ride="carousel">
          <!-- Wrapper Carousel -->
          <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-3">
                    <a href="{{ route('category.detail.vuejs') }}" style="text-decoration: none; color: inherit;">
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
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{ route('category.detail.java') }}" style="text-decoration: none; color: inherit;">
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
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{ route('category.detail.java') }}" style="text-decoration: none; color: inherit;">
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
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{ route('category.detail.vuejs') }}" style="text-decoration: none; color: inherit;">
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
                    </a>
                </div>
              </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-3">
                    <a href="{{ route('category.detail.java') }}" style="text-decoration: none; color: inherit;">
                        <div class="card shadow-sm custom-card">
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
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{ route('category.detail.vuejs') }}" style="text-decoration: none; color: inherit;">
                        <div class="card shadow-sm custom-card">
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
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{ route('category.detail.java') }}" style="text-decoration: none; color: inherit;">
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
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{ route('category.detail.vuejs') }}" style="text-decoration: none; color: inherit;">
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
                    </a>
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

<div class="container course" style="margin-bottom: 100px;">
    <h4>Semua Kursus</h4>
    <div class="d-flex justify-content-start mb-3">
        <button class="btn btn-outline-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#filterCollapse" aria-expanded="false" aria-controls="filterCollapse">
            <i class="bi bi-filter"></i> Filter
        </button>
    </div>

    <!-- Bagian Filter (Collapse) -->
    <div class="collapse" id="filterCollapse">
        <div class="filter-section d-flex flex-wrap gap-2">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownRating" data-bs-toggle="dropdown" aria-expanded="false">
                    Rating
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownRating">
                    <li><a class="dropdown-item" data-value="" href="#">Semua</a></li>
                    <li><a class="dropdown-item" data-value="4.5" href="#">4.5 Keatas</a></li>
                    <li><a class="dropdown-item" data-value="4.0" href="#">4 Keatas</a></li>
                    <li><a class="dropdown-item" data-value="3.5" href="#">3.5 Keatas</a></li>
                </ul>
            </div>

            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownTingkat" data-bs-toggle="dropdown" aria-expanded="false">
                    Tingkat
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownTingkat">
                    <li><a class="dropdown-item" data-value="" href="#">Semua Tingkat</a></li>
                    <li><a class="dropdown-item" data-value="pemula" href="#">Pemula</a></li>
                    <li><a class="dropdown-item" data-value="menengah" href="#">Menengah</a></li>
                    <li><a class="dropdown-item" data-value="ahli" href="#">Ahli</a></li>
                </ul>
            </div>

            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownFitur" data-bs-toggle="dropdown" aria-expanded="false">
                    Fitur
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownFitur">
                    <li><a class="dropdown-item" data-value="" href="#">Semua Fitur</a></li>
                    <li><a class="dropdown-item" data-value="gratis" href="#">Gratis</a></li>
                    <li><a class="dropdown-item" data-value="bersertifikat" href="#">Bersertifikat</a></li>
                </ul>
            </div>
        </div>
    </div>

    <br><br>

    <div class="container">
            <div class="row" id="card-container">
                <div class="col-md-3 mb-4 course-card" data-rating="4.5" data-tingkat="pemula" data-fitur="gratis">
                    <a href="{{ route('category.detail.java') }}" style="text-decoration: none;">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/Pemrograman java untuk pemula.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Pemrograman Java untuk Pemula</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.8 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(565 ulasan)</span>
                            </p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 mb-4 course-card" data-rating="4.0" data-tingkat="menengah" data-fitur="bersertifikat">
                    <a href="{{ route('category.detail.java') }}" style="text-decoration: none;">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/pemrograman kotlin menengah.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Pemrograman Kotlin untuk Menengah</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.4 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(435 ulasan)</span>
                            </p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 mb-4 course-card" data-rating="4.0" data-tingkat="menengah" data-fitur="bersertifikat">
                    <a href="{{ route('category.detail.java') }}" style="text-decoration: none;">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/pemrograman swift menengah.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Pemrograman Swift untuk Menengah</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.8 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(480 ulasan)</span>
                            </p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 mb-4 course-card" data-rating="4.6" data-tingkat="ahli" data-fitur="gratis">
                    <a href="{{ route('category.detail.java') }}" style="text-decoration: none;">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/pemrograman visual c pemula.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Pemrograman Visual C# untuk Pemula</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.8 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(514 ulasan)</span>
                            </p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 mb-4 course-card" data-rating="4.6" data-tingkat="ahli" data-fitur="gratis">
                    <a href="{{ route('category.detail.vuejs') }}" style="text-decoration: none;">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/reactjs menengah.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">React.js untuk Menengah</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.8 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(418 ulasan)</span>
                            </p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 mb-4 course-card" data-rating="4.6" data-tingkat="ahli" data-fitur="gratis">
                    <a href="{{ route('category.detail.java') }}" style="text-decoration: none;">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/react native menengah.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">React Native untuk Menengah</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.6 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(524 ulasan)</span>
                            </p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 mb-4 course-card" data-rating="4.5" data-tingkat="pemula" data-fitur="gratis">
                    <a href="{{ route('category.detail.vuejs') }}" style="text-decoration: none;">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/Machine learning dengan python.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Machine Learning dengan Python</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.7 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(353 ulasan)</span>
                            </p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 mb-4 course-card" data-rating="4.5" data-tingkat="pemula" data-fitur="gratis">
                    <a href="{{ route('category.detail.java') }}" style="text-decoration: none;">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/mengenal big data.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Mengenal Big Data</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.6 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(328 ulasan)</span>
                            </p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 mb-4 course-card" data-rating="4.5" data-tingkat="pemula" data-fitur="gratis">
                    <a href="{{ route('category.detail.vuejs') }}" style="text-decoration: none;">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/pemrograman python untuk pemula.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Pemrograman Python untuk Menengah</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.7 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(591 ulasan)</span>
                            </p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 mb-4 course-card" data-rating="4.0" data-tingkat="menengah" data-fitur="bersertifikat">
                    <a href="{{ route('category.detail.java') }}" style="text-decoration: none;">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/HTML CSS JS pemula.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">HTML, CSS, dan JavaScript untuk Pemula</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.9 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(603 ulasan)</span>
                            </p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 mb-4 course-card" data-rating="4.0" data-tingkat="menengah" data-fitur="bersertifikat">
                    <a href="{{ route('category.detail.vuejs') }}" style="text-decoration: none;">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/laravel menengah.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Laravel untuk Menengah</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.8 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(594 ulasan)</span>
                            </p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 mb-4 course-card" data-rating="4.0" data-tingkat="menengah" data-fitur="bersertifikat">
                    <a href="{{ route('category.detail.vuejs') }}" style="text-decoration: none;">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/Vuejs pemula.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Vue.js untuk Pemula</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.7 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(415 ulasan)</span>
                            </p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 mb-4 course-card" data-rating="4.0" data-tingkat="menengah" data-fitur="bersertifikat">
                    <a href="{{ route('category.detail.java') }}" style="text-decoration: none;">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/codeigniter menengah.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Codeigniter untuk Menengah</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.7 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(435 ulasan)</span>
                            </p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 mb-4 course-card" data-rating="4.0" data-tingkat="menengah" data-fitur="bersertifikat">
                    <a href="{{ route('category.detail.vuejs') }}" style="text-decoration: none;">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/HTML CSS JS menengah.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">HTML, CSS, dan JavaScript untuk Menengah</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.7 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(482 ulasan)</span>
                            </p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 mb-4 course-card" data-rating="4.0" data-tingkat="menengah" data-fitur="bersertifikat">
                    <a href="{{ route('category.detail.java') }}" style="text-decoration: none;">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/ruby pemula.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Pemrograman Ruby untuk Pemula</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.7 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(341 ulasan)</span>
                            </p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 mb-4 course-card" data-rating="4.0" data-tingkat="menengah" data-fitur="bersertifikat">
                    <a href="{{ route('category.detail.vuejs') }}" style="text-decoration: none;">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/pemrograman visual c mahir.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Pemrograman Visual C untuk Mahir</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.8 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(565 ulasan)</span>
                            </p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 mb-4 course-card" data-rating="4.0" data-tingkat="menengah" data-fitur="bersertifikat">
                    <a href="{{ route('category.detail.java') }}" style="text-decoration: none;">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/Pemrograman java untuk pemula.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Pemrograman Java untuk Pemula</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.8 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(565 ulasan)</span>
                            </p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 mb-4 course-card" data-rating="4.0" data-tingkat="menengah" data-fitur="bersertifikat">
                    <a href="{{ route('category.detail.java') }}" style="text-decoration: none;">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/pemrograman python untuk menengah.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Pemrograman Python untuk Menengah</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.6 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(413 ulasan)</span>
                            </p>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="pagination-container"  class="d-flex align-items-center">
            <button id="prev-page" class="btn-circle">
                <span>&lt;</span>
            </button>
            <div class="page-numbers">
                <span class="page-number active">1</span>
                <span class="page-number">2</span>
            </div>
            <button id="next-page" class="btn-circle">
                <span>&gt;</span>
            </button>
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
.card-title {
    height: 38.4px; /* Line-height konstan */
    width: 247px;
}
.custom-card {
    width: 306px;
    height: 319px;
    border-radius: 24px;
    overflow: hidden;
  }

.filter-section {
            gap: 1rem;
        }
        .filter {
            width: 150px;
        }
.btn-outline-secondary:hover {
    background-color: #0056D2;
    border-color: #0056D2;
    color: #fff; /* Agar teks tetap terlihat */
}
.card-title {
  font-size: 16px;
  font-weight: 600; /* Semibold */
  color: #333;
  margin-bottom: 20px;
}
.nav-link.active {
    background-color: transparent !important; /* Menghilangkan background */
    color: #0056D2; /* Warna teks tetap terlihat */
    border: none; /* Hapus border jika ada */
    box-shadow: none; /* Hilangkan bayangan */
}


.card-text {
  font-size: 14px;
  color: #333;
}


.card-text span {
  font-size: 14px;
  font-weight: 400; /* Normal */
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
#pagination {
    display: flex;
    justify-content: flex-end; /* Ubah dari center ke flex-end */
    align-items: center;
    gap: 12px;
    margin-top: 20px;
}

.pagination-button {
    background-color: #0056D2;
    border: none;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    transition: background-color 0.3s;
}

.pagination-button:hover {
    background-color: #003D94;
}

.pagination-button:disabled {
    background-color: #e0e0e0;
    cursor: not-allowed;
}

.page-number {
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    color: black;
    padding: 0 5px;
}

.page-number.active {
    color: #007BFF;
    text-decoration: underline;
}

.tab-content {
    display: none;
}

.tab-content.active {
    display: block;
}
.d-flex {
    flex-wrap: nowrap; /* Cegah elemen turun ke bawah */
}
select {
    font-size: 16px;
    font-weight: 600;
    color: #2D3748;
}
.pagination-container {
    display: flex;
    justify-content: flex-end; /* Geser pagination ke kanan */
    align-items: center;
    gap: 20px;
    margin-top: 20px;
    padding-right: 20px; /* Opsional: untuk jarak dari ujung kanan */
}

.btn-circle {
    width: 25px;
    height: 25px;
    background-color: #0056D2;
    border: none;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    color: #fff;
    font-size: 20px;
}

.btn-circle:disabled {
    background-color: #ccc;
    cursor: not-allowed;
}

.dropdown-menu.show {
  display: block !important;
}

.page-numbers {
    display: flex;
    gap: 10px;
    align-items: center;
}

.page-number {
    font-size: 20px;
    color: black;
    cursor: pointer;
}

.page-number.active {
    color: #0056D2;
    text-decoration: underline;
}

.dropdown-toggle {
    font-size: 14px;
    font-weight: 500 !important; /* Normal untuk teks dropdown */
    background-color: white !important; /* Ubah warna background */
    color: #0d6efd !important; /* Warna teks sesuai keinginan */
    box-shadow: none !important; /* Hilangkan shadow jika ada */
    border-color: #0d6efd !important; /* Warna border */
}
.dropdown-menu {
    border: 1px solid transparent; /* Sama dengan tombol */
    border-radius: 8.341px;
    padding: 10px; /* Ruang dalam menu */
    background-color: white; /* Latar belakang menu */
}

.dropdown-menu .dropdown-item {
    border-radius: 8.341px; /* Opsi untuk item individu */
    padding: 8px 12px; /* Padding setiap item */
    color: #002661;
    transition: background-color 0.2s ease-in-out;
    font-weight: 400;
    font-size: 12px;
}

/* Hilangkan hover */
.dropdown-menu .dropdown-item:hover {
    background-color: transparent !important;
    color: inherit !important;
}

.dropdown .btn:focus,
.dropdown .btn:active,
.dropdown .btn:focus:active {
    background-color: #0d6efd !important; /* Ubah warna background */
    color: white !important; /* Warna teks sesuai keinginan */
    box-shadow: none !important; /* Hilangkan shadow jika ada */
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

document.addEventListener("DOMContentLoaded", () => {
    const cards = document.querySelectorAll(".course-card");
    const container = document.getElementById("card-container");
    const prevPageBtn = document.getElementById("prev-page");
    const nextPageBtn = document.getElementById("next-page");
    const pageNumbers = document.querySelectorAll(".page-number");


    const cardsPerPage = 12;
    let currentPage = 1;

    const totalCards = cards.length;
    const totalPages = Math.ceil(totalCards / cardsPerPage);

    function renderPage(page) {
        container.innerHTML = ""; // Kosongkan container
        const start = (page - 1) * cardsPerPage;
        const end = start + cardsPerPage;

        const cardsToShow = Array.from(cards).slice(start, end);
        cardsToShow.forEach(card => container.appendChild(card));

        // Atur status tombol navigasi
        prevPageBtn.disabled = page === 1;
        nextPageBtn.disabled = page === totalPages;

         // Perbarui nomor halaman aktif
         updatePageNumbers(page);
    }

    function updatePageNumbers(page) {
        pageNumbers.forEach((pageNumber, index) => {
            if (index + 1 === page) {
                pageNumber.classList.add("active");
            } else {
                pageNumber.classList.remove("active");
            }
        });
    }

    // Event listener untuk navigasi
    prevPageBtn.addEventListener("click", () => {
        if (currentPage > 1) {
            currentPage--;
            renderPage(currentPage);
        }
    });

    nextPageBtn.addEventListener("click", () => {
        if (currentPage < totalPages) {
            currentPage++;
            renderPage(currentPage);
        }
    });

    // Render halaman pertama saat pertama kali dimuat
    renderPage(currentPage);
});



document.addEventListener("DOMContentLoaded", () => {
    const cards = document.querySelectorAll(".course-card");

    function filterCards() {
        const selectedRating = document.getElementById("dropdownRating").getAttribute("data-selected") || "";
        const selectedTingkat = document.getElementById("dropdownTingkat").getAttribute("data-selected") || "";
        const selectedFitur = document.getElementById("dropdownFitur").getAttribute("data-selected") || "";

        // Reset semua kartu terlebih dahulu
        cards.forEach(card => {
            card.style.display = "block";
        });

        // Terapkan filter jika ada yang dipilih
        if (selectedRating || selectedTingkat || selectedFitur) {
            cards.forEach(card => {
                const cardRating = parseFloat(card.getAttribute("data-rating"));
                const cardTingkat = card.getAttribute("data-tingkat");
                const cardFitur = card.getAttribute("data-fitur");

                const matchesRating = !selectedRating || cardRating >= parseFloat(selectedRating);
                const matchesTingkat = !selectedTingkat || cardTingkat === selectedTingkat;
                const matchesFitur = !selectedFitur || cardFitur === selectedFitur;

                if (!(matchesRating && matchesTingkat && matchesFitur)) {
                    card.style.display = "none";
                }
            });
        }
    }

    // Event Listener untuk Dropdown Rating
    document.querySelectorAll('#dropdownRating + .dropdown-menu .dropdown-item').forEach(item => {
        item.addEventListener("click", function (e) {
            e.preventDefault();
            const dropdownButton = document.getElementById("dropdownRating");
            dropdownButton.textContent = this.textContent; // Perbarui teks tombol
            dropdownButton.setAttribute("data-selected", this.getAttribute("data-value")); // Simpan nilai terpilih
            filterCards(); // Jalankan filter
        });
    });

    // Event Listener untuk Dropdown Tingkat
    document.querySelectorAll('#dropdownTingkat + .dropdown-menu .dropdown-item').forEach(item => {
        item.addEventListener("click", function (e) {
            e.preventDefault();
            const dropdownButton = document.getElementById("dropdownTingkat");
            dropdownButton.textContent = this.textContent; // Perbarui teks tombol
            dropdownButton.setAttribute("data-selected", this.getAttribute("data-value")); // Simpan nilai terpilih
            filterCards(); // Jalankan filter
        });
    });

    // Event Listener untuk Dropdown Fitur
    document.querySelectorAll('#dropdownFitur + .dropdown-menu .dropdown-item').forEach(item => {
        item.addEventListener("click", function (e) {
            e.preventDefault();
            const dropdownButton = document.getElementById("dropdownFitur");
            dropdownButton.textContent = this.textContent; // Perbarui teks tombol
            dropdownButton.setAttribute("data-selected", this.getAttribute("data-value")); // Simpan nilai terpilih
            filterCards(); // Jalankan filter
        });
    });
});

</script>

@endsection
