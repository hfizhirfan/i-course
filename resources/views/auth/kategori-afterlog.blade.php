@extends('layout.app')

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
                </div>
                <!-- Duplicate the card for 3 more times -->
                <div class="col-md-3">
                    <div class="card shadow-sm custom-card" >
                        <img src="{{ Vite::asset('resources/images/bahasa jerman c2.png') }}" class="card-img-top" alt="Bahasa Jerman">
                        <div class="card-body">
                          <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Bahasa Jerman C2</h5>
                          <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa</p>
                          <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                            4.4 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                            <span style="color: #333; font-weight: normal;">(430 ulasan)</span>
                          </p>
                        </div>
                      </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm custom-card" >
                        <img src="{{ Vite::asset('resources/images/pengantar statistika.png') }}" class="card-img-top" alt="Pengantar Statistika">
                        <div class="card-body">
                          <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Pengantar Statistika dan Probabilitas</h5>
                          <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Sains dan Matematika</p>
                          <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                            4.8 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                            <span style="color: #333; font-weight: normal;">(505 ulasan)</span>
                          </p>
                        </div>
                      </div>
                </div>
                <div class="col-md-3">
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
                </div>
              </div>
            </div>

            <!-- Duplicate the Slide Structure for Slide 2 -->
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-3">
                    <div class="card shadow-sm custom-card" >
                        <img src="{{ Vite::asset('resources/images/bahasa inggris c2.png') }}" class="card-img-top" alt="Bahasa Inggris">
                        <div class="card-body">
                          <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Bahasa Inggris C2</h5>
                          <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa</p>
                          <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                            4.7 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                            <span style="color: #333; font-weight: normal;">(300 ulasan)</span>
                          </p>
                        </div>
                      </div>
                  </div>
                  <!-- Duplicate the card for 3 more times -->
                  <div class="col-md-3">
                    <div class="card shadow-sm custom-card" >
                        <img src="{{ Vite::asset('resources/images/belajar dasar autocad.png') }}" class="card-img-top" alt="AutoCAD">
                        <div class="card-body">
                          <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Belajar Dasar AutoCAD</h5>
                          <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Desain</p>
                          <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                            4.7 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                            <span style="color: #333; font-weight: normal;">(107 ulasan)</span>
                          </p>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-3">
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
                  </div>
                  <div class="col-md-3">
                    <div class="card shadow-sm custom-card" >
                        <img src="{{ Vite::asset('resources/images/bahasa jepang n3.png') }}" class="card-img-top" alt="Bahasa Jepang">
                        <div class="card-body">
                          <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Bahasa Jepang N3</h5>
                          <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa</p>
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
    {{-- kusrsus populer --}}
    <div class="container mt-5 mb-80">
        <div id="populerSlider" class="carousel slide d-none" data-bs-ride="carousel">
          <!-- Wrapper Carousel -->
          <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-3">
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
                </div>
                <div class="col-md-3">
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
                </div>
                <div class="col-md-3">
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
                </div>
                <div class="col-md-3">
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
                </div>
              </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-3">
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
                </div>
                <div class="col-md-3">
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
                </div>
                <div class="col-md-3">
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
                </div>
                <div class="col-md-3">
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
            <select class="form-select filter" name="tingkat">
                <li><a class="dropdown-item" href="#"><i class="bi bi-star-fill text-warning"></i> 4.5 Keatas</a></li>
                <option value="pemula"><a class="dropdown-item" href="#"><i class="bi bi-star-fill text-warning"></i> 4.5 Keatas</a></option>
                <option value="menengah">Menengah</option>
                <option value="menengah">Ahli</option>
            </select>
            <select class="form-select filter" name="tingkat">
                <option value="">Tingkat</option>
                <option value="pemula">Pemula</option>
                <option value="menengah">Menengah</option>
                <option value="menengah">Ahli</option>
            </select>
            <select class="form-select filter" name="fitur">
                <option value="">Fitur</option>
                <option value="gratis">Gratis</option>
                <option value="bersertifikat">Bersertifikat</option>
            </select>
        </div>
    </div>
    <br><br>

    <div class="container">
        <div id="page1" class="tab-content" role="tabpanel">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
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
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
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
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/pemrograman swift menengah.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Pemrograman Swift untuk Menengah</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.8 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(565 ulasan)</span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/pemrograman visual c pemula.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Pemrograman Visual C# untuk Pemula</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.8 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(505 ulasan)</span>
                            </p>
                        </div>
                    </div>
                </div>
                {{-- pembatas --}}
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/reactjs menengah.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">React.js untuk Menengah</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.8 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(505 ulasan)</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/react native menengah.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">React Native untuk Menengah</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.8 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(505 ulasan)</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/Machine learning dengan python.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Machine Learning dengan Python</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.8 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(505 ulasan)</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/mengenal big data.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Mengenal Big Data</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.8 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(505 ulasan)</span>
                            </p>
                        </div>
                    </div>
                </div>
                {{-- pembatas --}}
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/bahasa jepang n1.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Bahasa Jepang N1</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.6 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(381 ulasan)</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/pengantar statistika.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Pengantar Statistika dan Probabilitas</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Sains dan Matematika</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.8 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(505 ulasan)</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/matematika diskrit.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Matematika Diskrit</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Sains dan Matematika</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.6 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-size: 14px font-weight: normal;">(381 ulasan)</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/belajar dasar autocad.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Belajar Dasar AutoCAD</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Desain</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.7 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(472 ulasan)</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="page2" class="tab-content" role="tabpanel">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/pemrograman visual c pemula.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Pemrograman Visual C# untuk Pemula</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.8 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(505 ulasan)</span>
                            </p>
                        </div>
                    </div>
                </div>
                {{-- pembatas --}}
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/reactjs menengah.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">React.js untuk Menengah</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.8 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(505 ulasan)</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/react native menengah.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">React Native untuk Menengah</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.8 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(505 ulasan)</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/Machine learning dengan python.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Machine Learning dengan Python</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.8 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(505 ulasan)</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/mengenal big data.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Mengenal Big Data</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.8 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(505 ulasan)</span>
                            </p>
                        </div>
                    </div>
                </div>
                {{-- pembatas --}}
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/bahasa jepang n1.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Bahasa Jepang N1</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.6 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(381 ulasan)</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/pengantar statistika.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Pengantar Statistika dan Probabilitas</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Sains dan Matematika</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.8 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(505 ulasan)</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/matematika diskrit.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Matematika Diskrit</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Sains dan Matematika</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.6 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-size: 14px font-weight: normal;">(381 ulasan)</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card shadow-sm custom-card">
                        <img src="{{ Vite::asset('resources/images/belajar dasar autocad.png') }}" class="card-img-top" alt="Vue.js untuk Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Belajar Dasar AutoCAD</h5>
                            <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Desain</p>
                            <p class="card-text d-flex align-items-center mb-0" style="font-weight: bold; color: #333;">
                                4.7 <i class="bi bi-star-fill ms-1 me-2" style="color: #f39c12;"></i>
                                <span style="color: #333; font-weight: normal;">(472 ulasan)</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center mb-4">
            <button class="btn btn-primary me-2" onclick="showPage('page1')">1</button>
            <button class="btn btn-primary" onclick="showPage('page2')">2</button>
        </div>
        <div class="d-flex justify-content-center align-items-center mt-4">
            <nav>
                <ul class="pagination">
                    <!-- Tombol Sebelumnya -->
                    <li class="page-item" id="prev-btn">
                        <button class="page-link" aria-label="Previous" onclick="prevPage()">
                            <span aria-hidden="true">&laquo;</span>
                        </button>
                    </li>
                    <!-- Halaman 1 -->
                    <li class="page-item active" id="page1-btn">
                        <button class="page-link" onclick="showPage(1)">1</button>
                    </li>
                    <!-- Halaman 2 -->
                    <li class="page-item" id="page2-btn">
                        <button class="page-link" onclick="showPage(2)">2</button>
                    </li>
                    <!-- Tombol Berikutnya -->
                    <li class="page-item" id="next-btn">
                        <button class="page-link" aria-label="Next" onclick="nextPage()">
                            <span aria-hidden="true">&raquo;</span>
                        </button>
                    </li>
                </ul>
            </nav>
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
.pagination .page-item .page-link {
    color: #0d6efd; /* Warna tombol */
    border: 1px solid #ddd; /* Border lebih halus */
}

.pagination .page-item.active .page-link {
    background-color: #0d6efd; /* Warna background aktif */
    color: #fff; /* Warna teks tombol aktif */
    border: 1px solid #0d6efd; /* Warna border aktif */
}


</style>
<script>
    document.querySelectorAll('.dropdown-item').forEach(function (item) {
        item.addEventListener('click', function (e) {
            const value = e.target.dataset.value;
            console.log('Selected Value:', value); // Tampilkan value yang dipilih
        });
    });

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
    function showPage(pageId) {
        // Sembunyikan semua tab-content
        const pages = document.querySelectorAll('.tab-content');
        pages.forEach(page => page.classList.add('d-none'));

        // Tampilkan halaman yang sesuai
        const selectedPage = document.getElementById(pageId);
        if (selectedPage) {
            selectedPage.classList.remove('d-none');
        }
    }


</script>

@endsection
