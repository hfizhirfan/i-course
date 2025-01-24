@extends('layout-admin.app')

@section('content')

<nav class="navbar navbar-expand-lg custom-navbar">
    <div class="container-fluid px-4">
        <!-- Title -->
        <h4 class="mb-0">Manajemen Kursus</h4>

        <!-- Right-side icons -->
        <div class="d-flex align-items-center">
            <!-- Notification icon -->
            <button class="btn position-relative me-3 border-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                    <path d="M4.39999 7.6253C4.60195 5.80319 5.46883 4.11958 6.83468 2.89676C8.20053 1.67393 9.9694 0.997803 11.8027 0.997803C13.6359 0.997803 15.4048 1.67393 16.7706 2.89676C18.1365 4.11958 19.0034 5.80319 19.2053 7.6253L19.5413 10.6466L19.5493 10.7226C19.7215 12.2213 20.2095 13.6665 20.9813 14.9626L21.0213 15.0293L21.7907 16.3133C22.4907 17.4786 22.84 18.0613 22.764 18.54C22.7138 18.8577 22.5504 19.1465 22.304 19.3533C21.932 19.6653 21.252 19.6653 19.8933 19.6653H3.71199C2.35199 19.6653 1.67199 19.6653 1.30132 19.3546C1.05413 19.1478 0.890241 18.8584 0.839991 18.54C0.765325 18.0613 1.11466 17.4786 1.81332 16.3133L2.58532 15.028L2.62532 14.9613C3.39647 13.6654 3.88408 12.2208 4.05599 10.7226L4.06399 10.6466L4.39999 7.6253Z" stroke="#002661" stroke-width="1.50943"/>
                    <path d="M7.93945 20.2068C8.16745 21.1988 8.67012 22.0761 9.36879 22.7001C10.0675 23.3268 10.9235 23.6655 11.8035 23.6655C12.6835 23.6655 13.5395 23.3268 14.2381 22.7015C14.9368 22.0748 15.4381 21.1988 15.6675 20.2068" stroke="#002661" stroke-width="1.50943" stroke-linecap="round"/>
                  </svg>

            </button>

            <!-- Profile Picture -->
            <img src="{{Vite::asset('resources/images/profile4.png') }}" alt="Profile Picture" class="rounded-circle" style="width: 53px; height: 53px;">
        </div>
    </div>
</nav>
<div class="search-container">
    <div class="container search d-flex align-items-center justify-content-between">
        <!-- Dropdown filters -->
        <div class="dropdown-group d-flex gap-3">
            <!-- Semua Materi -->
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMateri" data-bs-toggle="dropdown" aria-expanded="false">
                    Semua Kursus
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMateri">
                    <li><a class="dropdown-item" href="#" data-category="Semua Kategori">Semua Kategori</a></li>
                    <li><a class="dropdown-item" href="#" data-category="Bahasa">Bahasa</a></li>
                    <li><a class="dropdown-item" href="#" data-category="Sains dan Matematika">Sains dan Matematika</a></li>
                    <li><a class="dropdown-item" href="#" data-category="Pengembangan Personal">Pengembangan Personal</a></li>
                    <li><a class="dropdown-item" href="#" data-category="Desain">Desain</a></li>
                    <li><a class="dropdown-item" href="#" data-category="Bahasa Pemrograman">Bahasa Pemrograman</a></li>
                    <li><a class="dropdown-item" href="#" data-category="Jaringan dan Keamanan">Jaringan dan Keamanan</a></li>
                    <li><a class="dropdown-item" href="#" data-category="Pemasaran">Pemasaran</a></li>
                    <li><a class="dropdown-item" href="#" data-category="Keuangan dan Akuntansi">Keuangan dan Akuntansi</a></li>
                </ul>
            </div>


            <!-- Tahun -->
            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownTahun" data-bs-toggle="dropdown" aria-expanded="false">
                    Tahun
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownTahun">
                    <li><a class="dropdown-item" href="#" data-year="2024">2024</a></li>
                    <li><a class="dropdown-item" href="#" data-year="2023">2023</a></li>
                    <li><a class="dropdown-item" href="#" data-year="2022">2022</a></li>
                </ul>

            </div>

            <!-- Urutkan Berdasarkan -->
            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownUrutkan" data-bs-toggle="dropdown" aria-expanded="false">
                    Urutkan Berdasarkan
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownUrutkan">
                    <li><a class="dropdown-item" href="#">Semua</a></li>
                    <li><a class="dropdown-item" href="#">Terbaru</a></li>
                    <li><a class="dropdown-item" href="#">Populer</a></li>
                    <li><a class="dropdown-item" href="#">Ajbad</a></li>
                </ul>
            </div>
        </div>

        <!-- Search input -->
        <div class="input-group" style="max-width: 260px;">
            <span class="input-group-text bg-white border-end-0">
                <i class="bi bi-search text-primary"></i>
            </span>
            <input type="text" id="searchInput" class="form-control border-start-0" placeholder="Search" aria-label="Search">
        </div>

        <!-- Tambah Baru Button -->
        <button class="btn btn-primary d-flex align-items-center"
                onclick="window.location.href='{{ route('admin.kursus.create') }}'">
            <svg class="icon-spacing" xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                <path d="M9.28125 7.46875V0.25H7.21875V7.46875H0V9.53125H7.21875V16.75H9.28125V9.53125H16.5V7.46875H9.28125Z" fill="white"/>
            </svg>
            Tambah Baru
        </button>

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-3 mb-4" data-category="Bahasa Pemrograman" data-year="2024" data-popular="150">
            <div class="card custom-card">
                <img src="{{ Vite::asset('resources/images/Pemrograman java untuk pemula.png') }}" class="card-img-top" alt="Pemrograman Java untuk Pemula">
                <div class="card-body">
                    <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Pemrograman Java untuk Pemula</h5>
                    <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                    <p class="card-text text-muted" style="font-size: 10px; font-weight: 400; display: flex; align-items: center;">
                        <i class="bi bi-clock" style="margin-right: 5px;"></i> 5 hari yang lalu
                    </p>
                    <div class="rating-and-more">
                        <p class="card-text rating-container">
                            4.8 <i class="bi bi-star-fill rating-star"></i>
                            <span class="rating-view-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="13" viewBox="0 0 19 13" fill="none" class="rating-view-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.21875 6.5C6.21875 5.62976 6.56445 4.79516 7.17981 4.17981C7.79516 3.56445 8.62976 3.21875 9.5 3.21875C10.3702 3.21875 11.2048 3.56445 11.8202 4.17981C12.4355 4.79516 12.7813 5.62976 12.7813 6.5C12.7813 7.37024 12.4355 8.20484 11.8202 8.82019C11.2048 9.43555 10.3702 9.78125 9.5 9.78125C8.62976 9.78125 7.79516 9.43555 7.17981 8.82019C6.56445 8.20484 6.21875 7.37024 6.21875 6.5ZM9.5 4.53125C8.97786 4.53125 8.4771 4.73867 8.10788 5.10788C7.73867 5.4771 7.53125 5.97786 7.53125 6.5C7.53125 7.02215 7.73867 7.5229 8.10788 7.89212C8.4771 8.26133 8.97786 8.46875 9.5 8.46875C10.0221 8.46875 10.5229 8.26133 10.8921 7.89212C11.2613 7.5229 11.4688 7.02215 11.4688 6.5C11.4688 5.97786 11.2613 5.4771 10.8921 5.10788C10.5229 4.73867 10.0221 4.53125 9.5 4.53125Z" fill="#4A5568"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.78263 5.31525C2.416 5.84375 2.28125 6.25763 2.28125 6.5C2.28125 6.74238 2.416 7.15625 2.78263 7.68475C3.13788 8.19488 3.66463 8.74875 4.33138 9.26063C5.6675 10.2861 7.49888 11.0938 9.5 11.0938C11.5011 11.0938 13.3325 10.2861 14.6686 9.26063C15.3354 8.74875 15.8621 8.19488 16.2174 7.68475C16.584 7.15625 16.7188 6.74238 16.7188 6.5C16.7188 6.25763 16.584 5.84375 16.2174 5.31525C15.8621 4.80513 15.3354 4.25125 14.6686 3.73938C13.3325 2.71388 11.5011 1.90625 9.5 1.90625C7.49888 1.90625 5.6675 2.71388 4.33138 3.73938C3.66463 4.25125 3.13788 4.80513 2.78263 5.31525ZM3.53163 2.69813C5.04625 1.53613 7.1515 0.59375 9.5 0.59375C11.8485 0.59375 13.9538 1.53613 15.4675 2.69813C16.2261 3.28 16.8526 3.92925 17.2954 4.56713C17.7259 5.1875 18.0313 5.86738 18.0313 6.5C18.0313 7.13263 17.725 7.8125 17.2954 8.43288C16.8526 9.07075 16.2261 9.71913 15.4684 10.3019C13.9546 11.4639 11.8485 12.4063 9.5 12.4063C7.1515 12.4063 5.04625 11.4639 3.5325 10.3019C2.77388 9.72 2.14738 9.07075 1.70463 8.43288C1.275 7.8125 0.96875 7.13263 0.96875 6.5C0.96875 5.86738 1.275 5.1875 1.70463 4.56713C2.14738 3.92925 2.77388 3.28088 3.53163 2.69813Z" fill="#4A5568"/>
                                </svg>
                                720 view
                            </span>
                        </p>
                        <span class="more-icon" onclick="togglePopup(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M14 5C14 3.9 13.1 3 12 3C10.9 3 10 3.9 10 5C10 6.1 10.9 7 12 7C13.1 7 14 6.1 14 5ZM14 19C14 17.9 13.1 17 12 17C10.9 17 10 17.9 10 19C10 20.1 10.9 21 12 21C13.1 21 14 20.1 14 19ZM14 12C14 10.9 13.1 10 12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12Z" fill="#4A5568"/>
                            </svg>
                        </span>
                        <div class="popup-menu">
                            <p class="popup-menu-item" onclick="window.location.href='{{ route('admin.kursus.edit') }}'">Edit</p>
                            <p class="popup-menu-item">Hapus</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4" data-category="Bahasa Pemrograman" data-year="2024" data-popular="170">
            <div class="card custom-card">
                <img src="{{ Vite::asset('resources/images/pemrograman kotlin menengah.png') }}" class="card-img-top" alt="Pemrograman Java untuk Pemula">
                <div class="card-body">
                    <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Pemrograman Kotlin untuk Menengah</h5>
                    <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                    <p class="card-text text-muted" style="font-size: 10px; font-weight: 400; display: flex; align-items: center;">
                        <i class="bi bi-clock" style="margin-right: 5px;"></i> 5 bulan yang lalu
                    </p>
                    <div class="rating-and-more">
                        <p class="card-text rating-container">
                            4.4 <i class="bi bi-star-fill rating-star"></i>
                            <span class="rating-view-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="13" viewBox="0 0 19 13" fill="none" class="rating-view-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.21875 6.5C6.21875 5.62976 6.56445 4.79516 7.17981 4.17981C7.79516 3.56445 8.62976 3.21875 9.5 3.21875C10.3702 3.21875 11.2048 3.56445 11.8202 4.17981C12.4355 4.79516 12.7813 5.62976 12.7813 6.5C12.7813 7.37024 12.4355 8.20484 11.8202 8.82019C11.2048 9.43555 10.3702 9.78125 9.5 9.78125C8.62976 9.78125 7.79516 9.43555 7.17981 8.82019C6.56445 8.20484 6.21875 7.37024 6.21875 6.5ZM9.5 4.53125C8.97786 4.53125 8.4771 4.73867 8.10788 5.10788C7.73867 5.4771 7.53125 5.97786 7.53125 6.5C7.53125 7.02215 7.73867 7.5229 8.10788 7.89212C8.4771 8.26133 8.97786 8.46875 9.5 8.46875C10.0221 8.46875 10.5229 8.26133 10.8921 7.89212C11.2613 7.5229 11.4688 7.02215 11.4688 6.5C11.4688 5.97786 11.2613 5.4771 10.8921 5.10788C10.5229 4.73867 10.0221 4.53125 9.5 4.53125Z" fill="#4A5568"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.78263 5.31525C2.416 5.84375 2.28125 6.25763 2.28125 6.5C2.28125 6.74238 2.416 7.15625 2.78263 7.68475C3.13788 8.19488 3.66463 8.74875 4.33138 9.26063C5.6675 10.2861 7.49888 11.0938 9.5 11.0938C11.5011 11.0938 13.3325 10.2861 14.6686 9.26063C15.3354 8.74875 15.8621 8.19488 16.2174 7.68475C16.584 7.15625 16.7188 6.74238 16.7188 6.5C16.7188 6.25763 16.584 5.84375 16.2174 5.31525C15.8621 4.80513 15.3354 4.25125 14.6686 3.73938C13.3325 2.71388 11.5011 1.90625 9.5 1.90625C7.49888 1.90625 5.6675 2.71388 4.33138 3.73938C3.66463 4.25125 3.13788 4.80513 2.78263 5.31525ZM3.53163 2.69813C5.04625 1.53613 7.1515 0.59375 9.5 0.59375C11.8485 0.59375 13.9538 1.53613 15.4675 2.69813C16.2261 3.28 16.8526 3.92925 17.2954 4.56713C17.7259 5.1875 18.0313 5.86738 18.0313 6.5C18.0313 7.13263 17.725 7.8125 17.2954 8.43288C16.8526 9.07075 16.2261 9.71913 15.4684 10.3019C13.9546 11.4639 11.8485 12.4063 9.5 12.4063C7.1515 12.4063 5.04625 11.4639 3.5325 10.3019C2.77388 9.72 2.14738 9.07075 1.70463 8.43288C1.275 7.8125 0.96875 7.13263 0.96875 6.5C0.96875 5.86738 1.275 5.1875 1.70463 4.56713C2.14738 3.92925 2.77388 3.28088 3.53163 2.69813Z" fill="#4A5568"/>
                                </svg>
                                531 view
                            </span>
                        </p>
                        <span class="more-icon" onclick="togglePopup(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M14 5C14 3.9 13.1 3 12 3C10.9 3 10 3.9 10 5C10 6.1 10.9 7 12 7C13.1 7 14 6.1 14 5ZM14 19C14 17.9 13.1 17 12 17C10.9 17 10 17.9 10 19C10 20.1 10.9 21 12 21C13.1 21 14 20.1 14 19ZM14 12C14 10.9 13.1 10 12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12Z" fill="#4A5568"/>
                            </svg>
                        </span>
                        <div class="popup-menu">
                            <p class="popup-menu-item" onclick="window.location.href='{{ route('admin.kursus.edit') }}'">Edit</p>
                            <p class="popup-menu-item">Hapus</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4" data-category="Desain" data-year="2024" data-popular="140">
            <div class="card custom-card">
                <img src="{{ Vite::asset('resources/images/belajar dasar autocad.png') }}" class="card-img-top" alt="Pemrograman Java untuk Pemula">
                <div class="card-body">
                    <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Belajar Dasar AutoCAD</h5>
                    <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Desain</p>
                    <p class="card-text text-muted" style="font-size: 10px; font-weight: 400; display: flex; align-items: center;">
                        <i class="bi bi-clock" style="margin-right: 5px;"></i> 1 bulan yang lalu
                    </p>
                    <div class="rating-and-more">
                        <p class="card-text rating-container">
                            4.7 <i class="bi bi-star-fill rating-star"></i>
                            <span class="rating-view-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="13" viewBox="0 0 19 13" fill="none" class="rating-view-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.21875 6.5C6.21875 5.62976 6.56445 4.79516 7.17981 4.17981C7.79516 3.56445 8.62976 3.21875 9.5 3.21875C10.3702 3.21875 11.2048 3.56445 11.8202 4.17981C12.4355 4.79516 12.7813 5.62976 12.7813 6.5C12.7813 7.37024 12.4355 8.20484 11.8202 8.82019C11.2048 9.43555 10.3702 9.78125 9.5 9.78125C8.62976 9.78125 7.79516 9.43555 7.17981 8.82019C6.56445 8.20484 6.21875 7.37024 6.21875 6.5ZM9.5 4.53125C8.97786 4.53125 8.4771 4.73867 8.10788 5.10788C7.73867 5.4771 7.53125 5.97786 7.53125 6.5C7.53125 7.02215 7.73867 7.5229 8.10788 7.89212C8.4771 8.26133 8.97786 8.46875 9.5 8.46875C10.0221 8.46875 10.5229 8.26133 10.8921 7.89212C11.2613 7.5229 11.4688 7.02215 11.4688 6.5C11.4688 5.97786 11.2613 5.4771 10.8921 5.10788C10.5229 4.73867 10.0221 4.53125 9.5 4.53125Z" fill="#4A5568"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.78263 5.31525C2.416 5.84375 2.28125 6.25763 2.28125 6.5C2.28125 6.74238 2.416 7.15625 2.78263 7.68475C3.13788 8.19488 3.66463 8.74875 4.33138 9.26063C5.6675 10.2861 7.49888 11.0938 9.5 11.0938C11.5011 11.0938 13.3325 10.2861 14.6686 9.26063C15.3354 8.74875 15.8621 8.19488 16.2174 7.68475C16.584 7.15625 16.7188 6.74238 16.7188 6.5C16.7188 6.25763 16.584 5.84375 16.2174 5.31525C15.8621 4.80513 15.3354 4.25125 14.6686 3.73938C13.3325 2.71388 11.5011 1.90625 9.5 1.90625C7.49888 1.90625 5.6675 2.71388 4.33138 3.73938C3.66463 4.25125 3.13788 4.80513 2.78263 5.31525ZM3.53163 2.69813C5.04625 1.53613 7.1515 0.59375 9.5 0.59375C11.8485 0.59375 13.9538 1.53613 15.4675 2.69813C16.2261 3.28 16.8526 3.92925 17.2954 4.56713C17.7259 5.1875 18.0313 5.86738 18.0313 6.5C18.0313 7.13263 17.725 7.8125 17.2954 8.43288C16.8526 9.07075 16.2261 9.71913 15.4684 10.3019C13.9546 11.4639 11.8485 12.4063 9.5 12.4063C7.1515 12.4063 5.04625 11.4639 3.5325 10.3019C2.77388 9.72 2.14738 9.07075 1.70463 8.43288C1.275 7.8125 0.96875 7.13263 0.96875 6.5C0.96875 5.86738 1.275 5.1875 1.70463 4.56713C2.14738 3.92925 2.77388 3.28088 3.53163 2.69813Z" fill="#4A5568"/>
                                </svg>
                                439 view
                            </span>
                        </p>
                        <span class="more-icon" onclick="togglePopup(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M14 5C14 3.9 13.1 3 12 3C10.9 3 10 3.9 10 5C10 6.1 10.9 7 12 7C13.1 7 14 6.1 14 5ZM14 19C14 17.9 13.1 17 12 17C10.9 17 10 17.9 10 19C10 20.1 10.9 21 12 21C13.1 21 14 20.1 14 19ZM14 12C14 10.9 13.1 10 12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12Z" fill="#4A5568"/>
                            </svg>
                        </span>
                        <div class="popup-menu">
                            <p class="popup-menu-item" onclick="window.location.href='{{ route('admin.kursus.edit') }}'">Edit</p>
                            <p class="popup-menu-item">Hapus</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4" data-category="Desain" data-year="2024" data-popular="130">
            <div class="card custom-card">
                <img src="{{ Vite::asset('resources/images/belajar corel.png') }}" class="card-img-top" alt="Pemrograman Java untuk Pemula">
                <div class="card-body">
                    <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Belajar CorelDraw</h5>
                    <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Desain</p>
                    <p class="card-text text-muted" style="font-size: 10px; font-weight: 400; display: flex; align-items: center;">
                        <i class="bi bi-clock" style="margin-right: 5px;"></i> 26 hari yang lalu
                    </p>
                    <div class="rating-and-more">
                        <p class="card-text rating-container">
                            4.8 <i class="bi bi-star-fill rating-star"></i>
                            <span class="rating-view-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="13" viewBox="0 0 19 13" fill="none" class="rating-view-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.21875 6.5C6.21875 5.62976 6.56445 4.79516 7.17981 4.17981C7.79516 3.56445 8.62976 3.21875 9.5 3.21875C10.3702 3.21875 11.2048 3.56445 11.8202 4.17981C12.4355 4.79516 12.7813 5.62976 12.7813 6.5C12.7813 7.37024 12.4355 8.20484 11.8202 8.82019C11.2048 9.43555 10.3702 9.78125 9.5 9.78125C8.62976 9.78125 7.79516 9.43555 7.17981 8.82019C6.56445 8.20484 6.21875 7.37024 6.21875 6.5ZM9.5 4.53125C8.97786 4.53125 8.4771 4.73867 8.10788 5.10788C7.73867 5.4771 7.53125 5.97786 7.53125 6.5C7.53125 7.02215 7.73867 7.5229 8.10788 7.89212C8.4771 8.26133 8.97786 8.46875 9.5 8.46875C10.0221 8.46875 10.5229 8.26133 10.8921 7.89212C11.2613 7.5229 11.4688 7.02215 11.4688 6.5C11.4688 5.97786 11.2613 5.4771 10.8921 5.10788C10.5229 4.73867 10.0221 4.53125 9.5 4.53125Z" fill="#4A5568"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.78263 5.31525C2.416 5.84375 2.28125 6.25763 2.28125 6.5C2.28125 6.74238 2.416 7.15625 2.78263 7.68475C3.13788 8.19488 3.66463 8.74875 4.33138 9.26063C5.6675 10.2861 7.49888 11.0938 9.5 11.0938C11.5011 11.0938 13.3325 10.2861 14.6686 9.26063C15.3354 8.74875 15.8621 8.19488 16.2174 7.68475C16.584 7.15625 16.7188 6.74238 16.7188 6.5C16.7188 6.25763 16.584 5.84375 16.2174 5.31525C15.8621 4.80513 15.3354 4.25125 14.6686 3.73938C13.3325 2.71388 11.5011 1.90625 9.5 1.90625C7.49888 1.90625 5.6675 2.71388 4.33138 3.73938C3.66463 4.25125 3.13788 4.80513 2.78263 5.31525ZM3.53163 2.69813C5.04625 1.53613 7.1515 0.59375 9.5 0.59375C11.8485 0.59375 13.9538 1.53613 15.4675 2.69813C16.2261 3.28 16.8526 3.92925 17.2954 4.56713C17.7259 5.1875 18.0313 5.86738 18.0313 6.5C18.0313 7.13263 17.725 7.8125 17.2954 8.43288C16.8526 9.07075 16.2261 9.71913 15.4684 10.3019C13.9546 11.4639 11.8485 12.4063 9.5 12.4063C7.1515 12.4063 5.04625 11.4639 3.5325 10.3019C2.77388 9.72 2.14738 9.07075 1.70463 8.43288C1.275 7.8125 0.96875 7.13263 0.96875 6.5C0.96875 5.86738 1.275 5.1875 1.70463 4.56713C2.14738 3.92925 2.77388 3.28088 3.53163 2.69813Z" fill="#4A5568"/>
                                </svg>
                                672 view
                            </span>
                        </p>
                        <span class="more-icon" onclick="togglePopup(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M14 5C14 3.9 13.1 3 12 3C10.9 3 10 3.9 10 5C10 6.1 10.9 7 12 7C13.1 7 14 6.1 14 5ZM14 19C14 17.9 13.1 17 12 17C10.9 17 10 17.9 10 19C10 20.1 10.9 21 12 21C13.1 21 14 20.1 14 19ZM14 12C14 10.9 13.1 10 12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12Z" fill="#4A5568"/>
                            </svg>
                        </span>
                        <div class="popup-menu">
                            <p class="popup-menu-item" onclick="window.location.href='{{ route('admin.kursus.edit') }}'">Edit</p>
                            <p class="popup-menu-item">Hapus</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4" data-category="Bahasa Pemrograman" data-year="2024" data-popular="150">
            <div class="card custom-card">
                <img src="{{ Vite::asset('resources/images/Flutter dan dart untuk pemula.png') }}" class="card-img-top" alt="Pemrograman Java untuk Pemula">
                <div class="card-body">
                    <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Flutter dan Dart untuk Pemula</h5>
                    <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                    <p class="card-text text-muted" style="font-size: 10px; font-weight: 400; display: flex; align-items: center;">
                        <i class="bi bi-clock" style="margin-right: 5px;"></i> 1 bulan yang lalu
                    </p>
                    <div class="rating-and-more">
                        <p class="card-text rating-container">
                            4.8 <i class="bi bi-star-fill rating-star"></i>
                            <span class="rating-view-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="13" viewBox="0 0 19 13" fill="none" class="rating-view-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.21875 6.5C6.21875 5.62976 6.56445 4.79516 7.17981 4.17981C7.79516 3.56445 8.62976 3.21875 9.5 3.21875C10.3702 3.21875 11.2048 3.56445 11.8202 4.17981C12.4355 4.79516 12.7813 5.62976 12.7813 6.5C12.7813 7.37024 12.4355 8.20484 11.8202 8.82019C11.2048 9.43555 10.3702 9.78125 9.5 9.78125C8.62976 9.78125 7.79516 9.43555 7.17981 8.82019C6.56445 8.20484 6.21875 7.37024 6.21875 6.5ZM9.5 4.53125C8.97786 4.53125 8.4771 4.73867 8.10788 5.10788C7.73867 5.4771 7.53125 5.97786 7.53125 6.5C7.53125 7.02215 7.73867 7.5229 8.10788 7.89212C8.4771 8.26133 8.97786 8.46875 9.5 8.46875C10.0221 8.46875 10.5229 8.26133 10.8921 7.89212C11.2613 7.5229 11.4688 7.02215 11.4688 6.5C11.4688 5.97786 11.2613 5.4771 10.8921 5.10788C10.5229 4.73867 10.0221 4.53125 9.5 4.53125Z" fill="#4A5568"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.78263 5.31525C2.416 5.84375 2.28125 6.25763 2.28125 6.5C2.28125 6.74238 2.416 7.15625 2.78263 7.68475C3.13788 8.19488 3.66463 8.74875 4.33138 9.26063C5.6675 10.2861 7.49888 11.0938 9.5 11.0938C11.5011 11.0938 13.3325 10.2861 14.6686 9.26063C15.3354 8.74875 15.8621 8.19488 16.2174 7.68475C16.584 7.15625 16.7188 6.74238 16.7188 6.5C16.7188 6.25763 16.584 5.84375 16.2174 5.31525C15.8621 4.80513 15.3354 4.25125 14.6686 3.73938C13.3325 2.71388 11.5011 1.90625 9.5 1.90625C7.49888 1.90625 5.6675 2.71388 4.33138 3.73938C3.66463 4.25125 3.13788 4.80513 2.78263 5.31525ZM3.53163 2.69813C5.04625 1.53613 7.1515 0.59375 9.5 0.59375C11.8485 0.59375 13.9538 1.53613 15.4675 2.69813C16.2261 3.28 16.8526 3.92925 17.2954 4.56713C17.7259 5.1875 18.0313 5.86738 18.0313 6.5C18.0313 7.13263 17.725 7.8125 17.2954 8.43288C16.8526 9.07075 16.2261 9.71913 15.4684 10.3019C13.9546 11.4639 11.8485 12.4063 9.5 12.4063C7.1515 12.4063 5.04625 11.4639 3.5325 10.3019C2.77388 9.72 2.14738 9.07075 1.70463 8.43288C1.275 7.8125 0.96875 7.13263 0.96875 6.5C0.96875 5.86738 1.275 5.1875 1.70463 4.56713C2.14738 3.92925 2.77388 3.28088 3.53163 2.69813Z" fill="#4A5568"/>
                                </svg>
                                478 view
                            </span>
                        </p>
                        <span class="more-icon" onclick="togglePopup(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M14 5C14 3.9 13.1 3 12 3C10.9 3 10 3.9 10 5C10 6.1 10.9 7 12 7C13.1 7 14 6.1 14 5ZM14 19C14 17.9 13.1 17 12 17C10.9 17 10 17.9 10 19C10 20.1 10.9 21 12 21C13.1 21 14 20.1 14 19ZM14 12C14 10.9 13.1 10 12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12Z" fill="#4A5568"/>
                            </svg>
                        </span>
                        <div class="popup-menu">
                            <p class="popup-menu-item" onclick="window.location.href='{{ route('admin.kursus.edit') }}'">Edit</p>
                            <p class="popup-menu-item">Hapus</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4" data-category="Bahasa" data-year="2024" data-popular="140">
            <div class="card custom-card">
                <img src="{{ Vite::asset('resources/images/bahasa jepang n3.png') }}" class="card-img-top" alt="Pemrograman Java untuk Pemula">
                <div class="card-body">
                    <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Bahasa Jepang N3</h5>
                    <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa</p>
                    <p class="card-text text-muted" style="font-size: 10px; font-weight: 400; display: flex; align-items: center;">
                        <i class="bi bi-clock" style="margin-right: 5px;"></i> 3 bulan yang lalu
                    </p>
                    <div class="rating-and-more">
                        <p class="card-text rating-container">
                            4.8 <i class="bi bi-star-fill rating-star"></i>
                            <span class="rating-view-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="13" viewBox="0 0 19 13" fill="none" class="rating-view-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.21875 6.5C6.21875 5.62976 6.56445 4.79516 7.17981 4.17981C7.79516 3.56445 8.62976 3.21875 9.5 3.21875C10.3702 3.21875 11.2048 3.56445 11.8202 4.17981C12.4355 4.79516 12.7813 5.62976 12.7813 6.5C12.7813 7.37024 12.4355 8.20484 11.8202 8.82019C11.2048 9.43555 10.3702 9.78125 9.5 9.78125C8.62976 9.78125 7.79516 9.43555 7.17981 8.82019C6.56445 8.20484 6.21875 7.37024 6.21875 6.5ZM9.5 4.53125C8.97786 4.53125 8.4771 4.73867 8.10788 5.10788C7.73867 5.4771 7.53125 5.97786 7.53125 6.5C7.53125 7.02215 7.73867 7.5229 8.10788 7.89212C8.4771 8.26133 8.97786 8.46875 9.5 8.46875C10.0221 8.46875 10.5229 8.26133 10.8921 7.89212C11.2613 7.5229 11.4688 7.02215 11.4688 6.5C11.4688 5.97786 11.2613 5.4771 10.8921 5.10788C10.5229 4.73867 10.0221 4.53125 9.5 4.53125Z" fill="#4A5568"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.78263 5.31525C2.416 5.84375 2.28125 6.25763 2.28125 6.5C2.28125 6.74238 2.416 7.15625 2.78263 7.68475C3.13788 8.19488 3.66463 8.74875 4.33138 9.26063C5.6675 10.2861 7.49888 11.0938 9.5 11.0938C11.5011 11.0938 13.3325 10.2861 14.6686 9.26063C15.3354 8.74875 15.8621 8.19488 16.2174 7.68475C16.584 7.15625 16.7188 6.74238 16.7188 6.5C16.7188 6.25763 16.584 5.84375 16.2174 5.31525C15.8621 4.80513 15.3354 4.25125 14.6686 3.73938C13.3325 2.71388 11.5011 1.90625 9.5 1.90625C7.49888 1.90625 5.6675 2.71388 4.33138 3.73938C3.66463 4.25125 3.13788 4.80513 2.78263 5.31525ZM3.53163 2.69813C5.04625 1.53613 7.1515 0.59375 9.5 0.59375C11.8485 0.59375 13.9538 1.53613 15.4675 2.69813C16.2261 3.28 16.8526 3.92925 17.2954 4.56713C17.7259 5.1875 18.0313 5.86738 18.0313 6.5C18.0313 7.13263 17.725 7.8125 17.2954 8.43288C16.8526 9.07075 16.2261 9.71913 15.4684 10.3019C13.9546 11.4639 11.8485 12.4063 9.5 12.4063C7.1515 12.4063 5.04625 11.4639 3.5325 10.3019C2.77388 9.72 2.14738 9.07075 1.70463 8.43288C1.275 7.8125 0.96875 7.13263 0.96875 6.5C0.96875 5.86738 1.275 5.1875 1.70463 4.56713C2.14738 3.92925 2.77388 3.28088 3.53163 2.69813Z" fill="#4A5568"/>
                                </svg>
                                569 view
                            </span>
                        </p>
                        <span class="more-icon" onclick="togglePopup(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M14 5C14 3.9 13.1 3 12 3C10.9 3 10 3.9 10 5C10 6.1 10.9 7 12 7C13.1 7 14 6.1 14 5ZM14 19C14 17.9 13.1 17 12 17C10.9 17 10 17.9 10 19C10 20.1 10.9 21 12 21C13.1 21 14 20.1 14 19ZM14 12C14 10.9 13.1 10 12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12Z" fill="#4A5568"/>
                            </svg>
                        </span>
                        <div class="popup-menu">
                            <p class="popup-menu-item" onclick="window.location.href='{{ route('admin.kursus.edit') }}'">Edit</p>
                            <p class="popup-menu-item">Hapus</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4" data-category="Bahasa Pemrograman" data-year="2024" data-popular="130">
            <div class="card custom-card">
                <img src="{{ Vite::asset('resources/images/rest api dengan golang.png') }}" class="card-img-top" alt="Pemrograman Java untuk Pemula">
                <div class="card-body">
                    <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Rest API dengan Golang</h5>
                    <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                    <p class="card-text text-muted" style="font-size: 10px; font-weight: 400; display: flex; align-items: center;">
                        <i class="bi bi-clock" style="margin-right: 5px;"></i> 2 bulan yang lalu
                    </p>
                    <div class="rating-and-more">
                        <p class="card-text rating-container">
                            4.7 <i class="bi bi-star-fill rating-star"></i>
                            <span class="rating-view-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="13" viewBox="0 0 19 13" fill="none" class="rating-view-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.21875 6.5C6.21875 5.62976 6.56445 4.79516 7.17981 4.17981C7.79516 3.56445 8.62976 3.21875 9.5 3.21875C10.3702 3.21875 11.2048 3.56445 11.8202 4.17981C12.4355 4.79516 12.7813 5.62976 12.7813 6.5C12.7813 7.37024 12.4355 8.20484 11.8202 8.82019C11.2048 9.43555 10.3702 9.78125 9.5 9.78125C8.62976 9.78125 7.79516 9.43555 7.17981 8.82019C6.56445 8.20484 6.21875 7.37024 6.21875 6.5ZM9.5 4.53125C8.97786 4.53125 8.4771 4.73867 8.10788 5.10788C7.73867 5.4771 7.53125 5.97786 7.53125 6.5C7.53125 7.02215 7.73867 7.5229 8.10788 7.89212C8.4771 8.26133 8.97786 8.46875 9.5 8.46875C10.0221 8.46875 10.5229 8.26133 10.8921 7.89212C11.2613 7.5229 11.4688 7.02215 11.4688 6.5C11.4688 5.97786 11.2613 5.4771 10.8921 5.10788C10.5229 4.73867 10.0221 4.53125 9.5 4.53125Z" fill="#4A5568"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.78263 5.31525C2.416 5.84375 2.28125 6.25763 2.28125 6.5C2.28125 6.74238 2.416 7.15625 2.78263 7.68475C3.13788 8.19488 3.66463 8.74875 4.33138 9.26063C5.6675 10.2861 7.49888 11.0938 9.5 11.0938C11.5011 11.0938 13.3325 10.2861 14.6686 9.26063C15.3354 8.74875 15.8621 8.19488 16.2174 7.68475C16.584 7.15625 16.7188 6.74238 16.7188 6.5C16.7188 6.25763 16.584 5.84375 16.2174 5.31525C15.8621 4.80513 15.3354 4.25125 14.6686 3.73938C13.3325 2.71388 11.5011 1.90625 9.5 1.90625C7.49888 1.90625 5.6675 2.71388 4.33138 3.73938C3.66463 4.25125 3.13788 4.80513 2.78263 5.31525ZM3.53163 2.69813C5.04625 1.53613 7.1515 0.59375 9.5 0.59375C11.8485 0.59375 13.9538 1.53613 15.4675 2.69813C16.2261 3.28 16.8526 3.92925 17.2954 4.56713C17.7259 5.1875 18.0313 5.86738 18.0313 6.5C18.0313 7.13263 17.725 7.8125 17.2954 8.43288C16.8526 9.07075 16.2261 9.71913 15.4684 10.3019C13.9546 11.4639 11.8485 12.4063 9.5 12.4063C7.1515 12.4063 5.04625 11.4639 3.5325 10.3019C2.77388 9.72 2.14738 9.07075 1.70463 8.43288C1.275 7.8125 0.96875 7.13263 0.96875 6.5C0.96875 5.86738 1.275 5.1875 1.70463 4.56713C2.14738 3.92925 2.77388 3.28088 3.53163 2.69813Z" fill="#4A5568"/>
                                </svg>
                                414 view
                            </span>
                        </p>
                        <span class="more-icon" onclick="togglePopup(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M14 5C14 3.9 13.1 3 12 3C10.9 3 10 3.9 10 5C10 6.1 10.9 7 12 7C13.1 7 14 6.1 14 5ZM14 19C14 17.9 13.1 17 12 17C10.9 17 10 17.9 10 19C10 20.1 10.9 21 12 21C13.1 21 14 20.1 14 19ZM14 12C14 10.9 13.1 10 12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12Z" fill="#4A5568"/>
                            </svg>
                        </span>
                        <div class="popup-menu">
                            <p class="popup-menu-item" onclick="window.location.href='{{ route('admin.kursus.edit') }}'">Edit</p>
                            <p class="popup-menu-item">Hapus</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4" data-category="Sains dan Matematika" data-year="2024" data-popular="160">
            <div class="card custom-card">
                <img src="{{ Vite::asset('resources/images/pengantar statistika.png') }}" class="card-img-top" alt="Pemrograman Java untuk Pemula">
                <div class="card-body">
                    <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Pengantar Statistika dan Probabilitas</h5>
                    <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Sains dan Matematika</p>
                    <p class="card-text text-muted" style="font-size: 10px; font-weight: 400; display: flex; align-items: center;">
                        <i class="bi bi-clock" style="margin-right: 5px;"></i> 2 bulan yang lalu
                    </p>
                    <div class="rating-and-more">
                        <p class="card-text rating-container">
                            4.6 <i class="bi bi-star-fill rating-star"></i>
                            <span class="rating-view-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="13" viewBox="0 0 19 13" fill="none" class="rating-view-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.21875 6.5C6.21875 5.62976 6.56445 4.79516 7.17981 4.17981C7.79516 3.56445 8.62976 3.21875 9.5 3.21875C10.3702 3.21875 11.2048 3.56445 11.8202 4.17981C12.4355 4.79516 12.7813 5.62976 12.7813 6.5C12.7813 7.37024 12.4355 8.20484 11.8202 8.82019C11.2048 9.43555 10.3702 9.78125 9.5 9.78125C8.62976 9.78125 7.79516 9.43555 7.17981 8.82019C6.56445 8.20484 6.21875 7.37024 6.21875 6.5ZM9.5 4.53125C8.97786 4.53125 8.4771 4.73867 8.10788 5.10788C7.73867 5.4771 7.53125 5.97786 7.53125 6.5C7.53125 7.02215 7.73867 7.5229 8.10788 7.89212C8.4771 8.26133 8.97786 8.46875 9.5 8.46875C10.0221 8.46875 10.5229 8.26133 10.8921 7.89212C11.2613 7.5229 11.4688 7.02215 11.4688 6.5C11.4688 5.97786 11.2613 5.4771 10.8921 5.10788C10.5229 4.73867 10.0221 4.53125 9.5 4.53125Z" fill="#4A5568"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.78263 5.31525C2.416 5.84375 2.28125 6.25763 2.28125 6.5C2.28125 6.74238 2.416 7.15625 2.78263 7.68475C3.13788 8.19488 3.66463 8.74875 4.33138 9.26063C5.6675 10.2861 7.49888 11.0938 9.5 11.0938C11.5011 11.0938 13.3325 10.2861 14.6686 9.26063C15.3354 8.74875 15.8621 8.19488 16.2174 7.68475C16.584 7.15625 16.7188 6.74238 16.7188 6.5C16.7188 6.25763 16.584 5.84375 16.2174 5.31525C15.8621 4.80513 15.3354 4.25125 14.6686 3.73938C13.3325 2.71388 11.5011 1.90625 9.5 1.90625C7.49888 1.90625 5.6675 2.71388 4.33138 3.73938C3.66463 4.25125 3.13788 4.80513 2.78263 5.31525ZM3.53163 2.69813C5.04625 1.53613 7.1515 0.59375 9.5 0.59375C11.8485 0.59375 13.9538 1.53613 15.4675 2.69813C16.2261 3.28 16.8526 3.92925 17.2954 4.56713C17.7259 5.1875 18.0313 5.86738 18.0313 6.5C18.0313 7.13263 17.725 7.8125 17.2954 8.43288C16.8526 9.07075 16.2261 9.71913 15.4684 10.3019C13.9546 11.4639 11.8485 12.4063 9.5 12.4063C7.1515 12.4063 5.04625 11.4639 3.5325 10.3019C2.77388 9.72 2.14738 9.07075 1.70463 8.43288C1.275 7.8125 0.96875 7.13263 0.96875 6.5C0.96875 5.86738 1.275 5.1875 1.70463 4.56713C2.14738 3.92925 2.77388 3.28088 3.53163 2.69813Z" fill="#4A5568"/>
                                </svg>
                                529 view
                            </span>
                        </p>
                        <span class="more-icon" onclick="togglePopup(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M14 5C14 3.9 13.1 3 12 3C10.9 3 10 3.9 10 5C10 6.1 10.9 7 12 7C13.1 7 14 6.1 14 5ZM14 19C14 17.9 13.1 17 12 17C10.9 17 10 17.9 10 19C10 20.1 10.9 21 12 21C13.1 21 14 20.1 14 19ZM14 12C14 10.9 13.1 10 12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12Z" fill="#4A5568"/>
                            </svg>
                        </span>
                        <div class="popup-menu">
                            <p class="popup-menu-item" onclick="window.location.href='{{ route('admin.kursus.edit') }}'">Edit</p>
                            <p class="popup-menu-item">Hapus</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4" data-category="Bahasa Pemrograman" data-year="2024" data-popular="180">
            <div class="card custom-card">
                <img src="{{ Vite::asset('resources/images/reactjs pemula.png') }}" class="card-img-top" alt="Pemrograman Java untuk Pemula">
                <div class="card-body">
                    <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Pemrograman React.js untuk Pemula</h5>
                    <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                    <p class="card-text text-muted" style="font-size: 10px; font-weight: 400; display: flex; align-items: center;">
                        <i class="bi bi-clock" style="margin-right: 5px;"></i> 28 hari yang lalu
                    </p>
                    <div class="rating-and-more">
                        <p class="card-text rating-container">
                            4.7 <i class="bi bi-star-fill rating-star"></i>
                            <span class="rating-view-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="13" viewBox="0 0 19 13" fill="none" class="rating-view-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.21875 6.5C6.21875 5.62976 6.56445 4.79516 7.17981 4.17981C7.79516 3.56445 8.62976 3.21875 9.5 3.21875C10.3702 3.21875 11.2048 3.56445 11.8202 4.17981C12.4355 4.79516 12.7813 5.62976 12.7813 6.5C12.7813 7.37024 12.4355 8.20484 11.8202 8.82019C11.2048 9.43555 10.3702 9.78125 9.5 9.78125C8.62976 9.78125 7.79516 9.43555 7.17981 8.82019C6.56445 8.20484 6.21875 7.37024 6.21875 6.5ZM9.5 4.53125C8.97786 4.53125 8.4771 4.73867 8.10788 5.10788C7.73867 5.4771 7.53125 5.97786 7.53125 6.5C7.53125 7.02215 7.73867 7.5229 8.10788 7.89212C8.4771 8.26133 8.97786 8.46875 9.5 8.46875C10.0221 8.46875 10.5229 8.26133 10.8921 7.89212C11.2613 7.5229 11.4688 7.02215 11.4688 6.5C11.4688 5.97786 11.2613 5.4771 10.8921 5.10788C10.5229 4.73867 10.0221 4.53125 9.5 4.53125Z" fill="#4A5568"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.78263 5.31525C2.416 5.84375 2.28125 6.25763 2.28125 6.5C2.28125 6.74238 2.416 7.15625 2.78263 7.68475C3.13788 8.19488 3.66463 8.74875 4.33138 9.26063C5.6675 10.2861 7.49888 11.0938 9.5 11.0938C11.5011 11.0938 13.3325 10.2861 14.6686 9.26063C15.3354 8.74875 15.8621 8.19488 16.2174 7.68475C16.584 7.15625 16.7188 6.74238 16.7188 6.5C16.7188 6.25763 16.584 5.84375 16.2174 5.31525C15.8621 4.80513 15.3354 4.25125 14.6686 3.73938C13.3325 2.71388 11.5011 1.90625 9.5 1.90625C7.49888 1.90625 5.6675 2.71388 4.33138 3.73938C3.66463 4.25125 3.13788 4.80513 2.78263 5.31525ZM3.53163 2.69813C5.04625 1.53613 7.1515 0.59375 9.5 0.59375C11.8485 0.59375 13.9538 1.53613 15.4675 2.69813C16.2261 3.28 16.8526 3.92925 17.2954 4.56713C17.7259 5.1875 18.0313 5.86738 18.0313 6.5C18.0313 7.13263 17.725 7.8125 17.2954 8.43288C16.8526 9.07075 16.2261 9.71913 15.4684 10.3019C13.9546 11.4639 11.8485 12.4063 9.5 12.4063C7.1515 12.4063 5.04625 11.4639 3.5325 10.3019C2.77388 9.72 2.14738 9.07075 1.70463 8.43288C1.275 7.8125 0.96875 7.13263 0.96875 6.5C0.96875 5.86738 1.275 5.1875 1.70463 4.56713C2.14738 3.92925 2.77388 3.28088 3.53163 2.69813Z" fill="#4A5568"/>
                                </svg>
                                721 view
                            </span>
                        </p>
                        <span class="more-icon" onclick="togglePopup(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M14 5C14 3.9 13.1 3 12 3C10.9 3 10 3.9 10 5C10 6.1 10.9 7 12 7C13.1 7 14 6.1 14 5ZM14 19C14 17.9 13.1 17 12 17C10.9 17 10 17.9 10 19C10 20.1 10.9 21 12 21C13.1 21 14 20.1 14 19ZM14 12C14 10.9 13.1 10 12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12Z" fill="#4A5568"/>
                            </svg>
                        </span>
                        <div class="popup-menu">
                            <p class="popup-menu-item" onclick="window.location.href='{{ route('admin.kursus.edit') }}'">Edit</p>
                            <p class="popup-menu-item">Hapus</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4" data-category="Sains dan Matematika" data-year="2022" data-popular="140">
            <div class="card custom-card">
                <img src="{{ Vite::asset('resources/images/matematika diskrit.png') }}" class="card-img-top" alt="Pemrograman Java untuk Pemula">
                <div class="card-body">
                    <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Matematika Diskrit</h5>
                    <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Sains dan Matematika</p>
                    <p class="card-text text-muted" style="font-size: 10px; font-weight: 400; display: flex; align-items: center;">
                        <i class="bi bi-clock" style="margin-right: 5px;"></i> 2 tahun yang lalu
                    </p>
                    <div class="rating-and-more">
                        <p class="card-text rating-container">
                            4.7 <i class="bi bi-star-fill rating-star"></i>
                            <span class="rating-view-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="13" viewBox="0 0 19 13" fill="none" class="rating-view-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.21875 6.5C6.21875 5.62976 6.56445 4.79516 7.17981 4.17981C7.79516 3.56445 8.62976 3.21875 9.5 3.21875C10.3702 3.21875 11.2048 3.56445 11.8202 4.17981C12.4355 4.79516 12.7813 5.62976 12.7813 6.5C12.7813 7.37024 12.4355 8.20484 11.8202 8.82019C11.2048 9.43555 10.3702 9.78125 9.5 9.78125C8.62976 9.78125 7.79516 9.43555 7.17981 8.82019C6.56445 8.20484 6.21875 7.37024 6.21875 6.5ZM9.5 4.53125C8.97786 4.53125 8.4771 4.73867 8.10788 5.10788C7.73867 5.4771 7.53125 5.97786 7.53125 6.5C7.53125 7.02215 7.73867 7.5229 8.10788 7.89212C8.4771 8.26133 8.97786 8.46875 9.5 8.46875C10.0221 8.46875 10.5229 8.26133 10.8921 7.89212C11.2613 7.5229 11.4688 7.02215 11.4688 6.5C11.4688 5.97786 11.2613 5.4771 10.8921 5.10788C10.5229 4.73867 10.0221 4.53125 9.5 4.53125Z" fill="#4A5568"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.78263 5.31525C2.416 5.84375 2.28125 6.25763 2.28125 6.5C2.28125 6.74238 2.416 7.15625 2.78263 7.68475C3.13788 8.19488 3.66463 8.74875 4.33138 9.26063C5.6675 10.2861 7.49888 11.0938 9.5 11.0938C11.5011 11.0938 13.3325 10.2861 14.6686 9.26063C15.3354 8.74875 15.8621 8.19488 16.2174 7.68475C16.584 7.15625 16.7188 6.74238 16.7188 6.5C16.7188 6.25763 16.584 5.84375 16.2174 5.31525C15.8621 4.80513 15.3354 4.25125 14.6686 3.73938C13.3325 2.71388 11.5011 1.90625 9.5 1.90625C7.49888 1.90625 5.6675 2.71388 4.33138 3.73938C3.66463 4.25125 3.13788 4.80513 2.78263 5.31525ZM3.53163 2.69813C5.04625 1.53613 7.1515 0.59375 9.5 0.59375C11.8485 0.59375 13.9538 1.53613 15.4675 2.69813C16.2261 3.28 16.8526 3.92925 17.2954 4.56713C17.7259 5.1875 18.0313 5.86738 18.0313 6.5C18.0313 7.13263 17.725 7.8125 17.2954 8.43288C16.8526 9.07075 16.2261 9.71913 15.4684 10.3019C13.9546 11.4639 11.8485 12.4063 9.5 12.4063C7.1515 12.4063 5.04625 11.4639 3.5325 10.3019C2.77388 9.72 2.14738 9.07075 1.70463 8.43288C1.275 7.8125 0.96875 7.13263 0.96875 6.5C0.96875 5.86738 1.275 5.1875 1.70463 4.56713C2.14738 3.92925 2.77388 3.28088 3.53163 2.69813Z" fill="#4A5568"/>
                                </svg>
                                383 view
                            </span>
                        </p>
                        <span class="more-icon" onclick="togglePopup(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M14 5C14 3.9 13.1 3 12 3C10.9 3 10 3.9 10 5C10 6.1 10.9 7 12 7C13.1 7 14 6.1 14 5ZM14 19C14 17.9 13.1 17 12 17C10.9 17 10 17.9 10 19C10 20.1 10.9 21 12 21C13.1 21 14 20.1 14 19ZM14 12C14 10.9 13.1 10 12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12Z" fill="#4A5568"/>
                            </svg>
                        </span>
                        <div class="popup-menu">
                            <p class="popup-menu-item" onclick="window.location.href='{{ route('admin.kursus.edit') }}'">Edit</p>
                            <p class="popup-menu-item">Hapus</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4" data-category="Bahasa Pemrograman" data-year="2022" data-popular="120">
            <div class="card custom-card">
                <img src="{{ Vite::asset('resources/images/pemrograman swift menengah.png') }}" class="card-img-top" alt="Pemrograman Java untuk Pemula">
                <div class="card-body">
                    <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Pemrograman Swift untuk Menengah</h5>
                    <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                    <p class="card-text text-muted" style="font-size: 10px; font-weight: 400; display: flex; align-items: center;">
                        <i class="bi bi-clock" style="margin-right: 5px;"></i> 2 tahun yang lalu
                    </p>
                    <div class="rating-and-more">
                        <p class="card-text rating-container">
                            4.8 <i class="bi bi-star-fill rating-star"></i>
                            <span class="rating-view-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="13" viewBox="0 0 19 13" fill="none" class="rating-view-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.21875 6.5C6.21875 5.62976 6.56445 4.79516 7.17981 4.17981C7.79516 3.56445 8.62976 3.21875 9.5 3.21875C10.3702 3.21875 11.2048 3.56445 11.8202 4.17981C12.4355 4.79516 12.7813 5.62976 12.7813 6.5C12.7813 7.37024 12.4355 8.20484 11.8202 8.82019C11.2048 9.43555 10.3702 9.78125 9.5 9.78125C8.62976 9.78125 7.79516 9.43555 7.17981 8.82019C6.56445 8.20484 6.21875 7.37024 6.21875 6.5ZM9.5 4.53125C8.97786 4.53125 8.4771 4.73867 8.10788 5.10788C7.73867 5.4771 7.53125 5.97786 7.53125 6.5C7.53125 7.02215 7.73867 7.5229 8.10788 7.89212C8.4771 8.26133 8.97786 8.46875 9.5 8.46875C10.0221 8.46875 10.5229 8.26133 10.8921 7.89212C11.2613 7.5229 11.4688 7.02215 11.4688 6.5C11.4688 5.97786 11.2613 5.4771 10.8921 5.10788C10.5229 4.73867 10.0221 4.53125 9.5 4.53125Z" fill="#4A5568"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.78263 5.31525C2.416 5.84375 2.28125 6.25763 2.28125 6.5C2.28125 6.74238 2.416 7.15625 2.78263 7.68475C3.13788 8.19488 3.66463 8.74875 4.33138 9.26063C5.6675 10.2861 7.49888 11.0938 9.5 11.0938C11.5011 11.0938 13.3325 10.2861 14.6686 9.26063C15.3354 8.74875 15.8621 8.19488 16.2174 7.68475C16.584 7.15625 16.7188 6.74238 16.7188 6.5C16.7188 6.25763 16.584 5.84375 16.2174 5.31525C15.8621 4.80513 15.3354 4.25125 14.6686 3.73938C13.3325 2.71388 11.5011 1.90625 9.5 1.90625C7.49888 1.90625 5.6675 2.71388 4.33138 3.73938C3.66463 4.25125 3.13788 4.80513 2.78263 5.31525ZM3.53163 2.69813C5.04625 1.53613 7.1515 0.59375 9.5 0.59375C11.8485 0.59375 13.9538 1.53613 15.4675 2.69813C16.2261 3.28 16.8526 3.92925 17.2954 4.56713C17.7259 5.1875 18.0313 5.86738 18.0313 6.5C18.0313 7.13263 17.725 7.8125 17.2954 8.43288C16.8526 9.07075 16.2261 9.71913 15.4684 10.3019C13.9546 11.4639 11.8485 12.4063 9.5 12.4063C7.1515 12.4063 5.04625 11.4639 3.5325 10.3019C2.77388 9.72 2.14738 9.07075 1.70463 8.43288C1.275 7.8125 0.96875 7.13263 0.96875 6.5C0.96875 5.86738 1.275 5.1875 1.70463 4.56713C2.14738 3.92925 2.77388 3.28088 3.53163 2.69813Z" fill="#4A5568"/>
                                </svg>
                                503 view
                            </span>
                        </p>
                        <span class="more-icon" onclick="togglePopup(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M14 5C14 3.9 13.1 3 12 3C10.9 3 10 3.9 10 5C10 6.1 10.9 7 12 7C13.1 7 14 6.1 14 5ZM14 19C14 17.9 13.1 17 12 17C10.9 17 10 17.9 10 19C10 20.1 10.9 21 12 21C13.1 21 14 20.1 14 19ZM14 12C14 10.9 13.1 10 12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12Z" fill="#4A5568"/>
                            </svg>
                        </span>
                        <div class="popup-menu">
                            <p class="popup-menu-item" onclick="window.location.href='{{ route('admin.kursus.edit') }}'">Edit</p>
                            <p class="popup-menu-item">Hapus</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4" data-category="Bahasa" data-year="2024" data-popular="140">
            <div class="card custom-card">
                <img src="{{ Vite::asset('resources/images/bahasa jepang n1.png') }}" class="card-img-top" alt="Pemrograman Java untuk Pemula">
                <div class="card-body">
                    <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Bahasa Jepang N1</h5>
                    <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa</p>
                    <p class="card-text text-muted" style="font-size: 10px; font-weight: 400; display: flex; align-items: center;">
                        <i class="bi bi-clock" style="margin-right: 5px;"></i> 6 bulan yang lalu
                    </p>
                    <div class="rating-and-more">
                        <p class="card-text rating-container">
                            4.7 <i class="bi bi-star-fill rating-star"></i>
                            <span class="rating-view-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="13" viewBox="0 0 19 13" fill="none" class="rating-view-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.21875 6.5C6.21875 5.62976 6.56445 4.79516 7.17981 4.17981C7.79516 3.56445 8.62976 3.21875 9.5 3.21875C10.3702 3.21875 11.2048 3.56445 11.8202 4.17981C12.4355 4.79516 12.7813 5.62976 12.7813 6.5C12.7813 7.37024 12.4355 8.20484 11.8202 8.82019C11.2048 9.43555 10.3702 9.78125 9.5 9.78125C8.62976 9.78125 7.79516 9.43555 7.17981 8.82019C6.56445 8.20484 6.21875 7.37024 6.21875 6.5ZM9.5 4.53125C8.97786 4.53125 8.4771 4.73867 8.10788 5.10788C7.73867 5.4771 7.53125 5.97786 7.53125 6.5C7.53125 7.02215 7.73867 7.5229 8.10788 7.89212C8.4771 8.26133 8.97786 8.46875 9.5 8.46875C10.0221 8.46875 10.5229 8.26133 10.8921 7.89212C11.2613 7.5229 11.4688 7.02215 11.4688 6.5C11.4688 5.97786 11.2613 5.4771 10.8921 5.10788C10.5229 4.73867 10.0221 4.53125 9.5 4.53125Z" fill="#4A5568"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.78263 5.31525C2.416 5.84375 2.28125 6.25763 2.28125 6.5C2.28125 6.74238 2.416 7.15625 2.78263 7.68475C3.13788 8.19488 3.66463 8.74875 4.33138 9.26063C5.6675 10.2861 7.49888 11.0938 9.5 11.0938C11.5011 11.0938 13.3325 10.2861 14.6686 9.26063C15.3354 8.74875 15.8621 8.19488 16.2174 7.68475C16.584 7.15625 16.7188 6.74238 16.7188 6.5C16.7188 6.25763 16.584 5.84375 16.2174 5.31525C15.8621 4.80513 15.3354 4.25125 14.6686 3.73938C13.3325 2.71388 11.5011 1.90625 9.5 1.90625C7.49888 1.90625 5.6675 2.71388 4.33138 3.73938C3.66463 4.25125 3.13788 4.80513 2.78263 5.31525ZM3.53163 2.69813C5.04625 1.53613 7.1515 0.59375 9.5 0.59375C11.8485 0.59375 13.9538 1.53613 15.4675 2.69813C16.2261 3.28 16.8526 3.92925 17.2954 4.56713C17.7259 5.1875 18.0313 5.86738 18.0313 6.5C18.0313 7.13263 17.725 7.8125 17.2954 8.43288C16.8526 9.07075 16.2261 9.71913 15.4684 10.3019C13.9546 11.4639 11.8485 12.4063 9.5 12.4063C7.1515 12.4063 5.04625 11.4639 3.5325 10.3019C2.77388 9.72 2.14738 9.07075 1.70463 8.43288C1.275 7.8125 0.96875 7.13263 0.96875 6.5C0.96875 5.86738 1.275 5.1875 1.70463 4.56713C2.14738 3.92925 2.77388 3.28088 3.53163 2.69813Z" fill="#4A5568"/>
                                </svg>
                                401 view
                            </span>
                        </p>
                        <span class="more-icon" onclick="togglePopup(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M14 5C14 3.9 13.1 3 12 3C10.9 3 10 3.9 10 5C10 6.1 10.9 7 12 7C13.1 7 14 6.1 14 5ZM14 19C14 17.9 13.1 17 12 17C10.9 17 10 17.9 10 19C10 20.1 10.9 21 12 21C13.1 21 14 20.1 14 19ZM14 12C14 10.9 13.1 10 12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12Z" fill="#4A5568"/>
                            </svg>
                        </span>
                        <div class="popup-menu">
                            <p class="popup-menu-item" onclick="window.location.href='{{ route('admin.kursus.edit') }}'">Edit</p>
                            <p class="popup-menu-item">Hapus</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4" data-category="Desain" data-year="2023" data-popular="180">
            <div class="card custom-card">
                <img src="{{ Vite::asset('resources/images/belajar adobe illustrator.png') }}" class="card-img-top" alt="Pemrograman Java untuk Pemula">
                <div class="card-body">
                    <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Belajar Adobe Illustrator</h5>
                    <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Desain</p>
                    <p class="card-text text-muted" style="font-size: 10px; font-weight: 400; display: flex; align-items: center;">
                        <i class="bi bi-clock" style="margin-right: 5px;"></i> 1 tahun yang lalu
                    </p>
                    <div class="rating-and-more">
                        <p class="card-text rating-container">
                            4.7 <i class="bi bi-star-fill rating-star"></i>
                            <span class="rating-view-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="13" viewBox="0 0 19 13" fill="none" class="rating-view-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.21875 6.5C6.21875 5.62976 6.56445 4.79516 7.17981 4.17981C7.79516 3.56445 8.62976 3.21875 9.5 3.21875C10.3702 3.21875 11.2048 3.56445 11.8202 4.17981C12.4355 4.79516 12.7813 5.62976 12.7813 6.5C12.7813 7.37024 12.4355 8.20484 11.8202 8.82019C11.2048 9.43555 10.3702 9.78125 9.5 9.78125C8.62976 9.78125 7.79516 9.43555 7.17981 8.82019C6.56445 8.20484 6.21875 7.37024 6.21875 6.5ZM9.5 4.53125C8.97786 4.53125 8.4771 4.73867 8.10788 5.10788C7.73867 5.4771 7.53125 5.97786 7.53125 6.5C7.53125 7.02215 7.73867 7.5229 8.10788 7.89212C8.4771 8.26133 8.97786 8.46875 9.5 8.46875C10.0221 8.46875 10.5229 8.26133 10.8921 7.89212C11.2613 7.5229 11.4688 7.02215 11.4688 6.5C11.4688 5.97786 11.2613 5.4771 10.8921 5.10788C10.5229 4.73867 10.0221 4.53125 9.5 4.53125Z" fill="#4A5568"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.78263 5.31525C2.416 5.84375 2.28125 6.25763 2.28125 6.5C2.28125 6.74238 2.416 7.15625 2.78263 7.68475C3.13788 8.19488 3.66463 8.74875 4.33138 9.26063C5.6675 10.2861 7.49888 11.0938 9.5 11.0938C11.5011 11.0938 13.3325 10.2861 14.6686 9.26063C15.3354 8.74875 15.8621 8.19488 16.2174 7.68475C16.584 7.15625 16.7188 6.74238 16.7188 6.5C16.7188 6.25763 16.584 5.84375 16.2174 5.31525C15.8621 4.80513 15.3354 4.25125 14.6686 3.73938C13.3325 2.71388 11.5011 1.90625 9.5 1.90625C7.49888 1.90625 5.6675 2.71388 4.33138 3.73938C3.66463 4.25125 3.13788 4.80513 2.78263 5.31525ZM3.53163 2.69813C5.04625 1.53613 7.1515 0.59375 9.5 0.59375C11.8485 0.59375 13.9538 1.53613 15.4675 2.69813C16.2261 3.28 16.8526 3.92925 17.2954 4.56713C17.7259 5.1875 18.0313 5.86738 18.0313 6.5C18.0313 7.13263 17.725 7.8125 17.2954 8.43288C16.8526 9.07075 16.2261 9.71913 15.4684 10.3019C13.9546 11.4639 11.8485 12.4063 9.5 12.4063C7.1515 12.4063 5.04625 11.4639 3.5325 10.3019C2.77388 9.72 2.14738 9.07075 1.70463 8.43288C1.275 7.8125 0.96875 7.13263 0.96875 6.5C0.96875 5.86738 1.275 5.1875 1.70463 4.56713C2.14738 3.92925 2.77388 3.28088 3.53163 2.69813Z" fill="#4A5568"/>
                                </svg>
                                528 view
                            </span>
                        </p>
                        <span class="more-icon" onclick="togglePopup(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M14 5C14 3.9 13.1 3 12 3C10.9 3 10 3.9 10 5C10 6.1 10.9 7 12 7C13.1 7 14 6.1 14 5ZM14 19C14 17.9 13.1 17 12 17C10.9 17 10 17.9 10 19C10 20.1 10.9 21 12 21C13.1 21 14 20.1 14 19ZM14 12C14 10.9 13.1 10 12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12Z" fill="#4A5568"/>
                            </svg>
                        </span>
                        <div class="popup-menu">
                            <p class="popup-menu-item" onclick="window.location.href='{{ route('admin.kursus.edit') }}'">Edit</p>
                            <p class="popup-menu-item">Hapus</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4" data-category="Bahasa Pemrograman" data-year="2022" data-popular="130">
            <div class="card custom-card">
                <img src="{{ Vite::asset('resources/images/codeigniter menengah.png') }}" class="card-img-top" alt="Pemrograman Java untuk Pemula">
                <div class="card-body">
                    <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Codeigniter untuk Menengah</h5>
                    <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Bahasa Pemrograman</p>
                    <p class="card-text text-muted" style="font-size: 10px; font-weight: 400; display: flex; align-items: center;">
                        <i class="bi bi-clock" style="margin-right: 5px;"></i> 2 tahun yang lalu
                    </p>
                    <div class="rating-and-more">
                        <p class="card-text rating-container">
                            4.8 <i class="bi bi-star-fill rating-star"></i>
                            <span class="rating-view-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="13" viewBox="0 0 19 13" fill="none" class="rating-view-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.21875 6.5C6.21875 5.62976 6.56445 4.79516 7.17981 4.17981C7.79516 3.56445 8.62976 3.21875 9.5 3.21875C10.3702 3.21875 11.2048 3.56445 11.8202 4.17981C12.4355 4.79516 12.7813 5.62976 12.7813 6.5C12.7813 7.37024 12.4355 8.20484 11.8202 8.82019C11.2048 9.43555 10.3702 9.78125 9.5 9.78125C8.62976 9.78125 7.79516 9.43555 7.17981 8.82019C6.56445 8.20484 6.21875 7.37024 6.21875 6.5ZM9.5 4.53125C8.97786 4.53125 8.4771 4.73867 8.10788 5.10788C7.73867 5.4771 7.53125 5.97786 7.53125 6.5C7.53125 7.02215 7.73867 7.5229 8.10788 7.89212C8.4771 8.26133 8.97786 8.46875 9.5 8.46875C10.0221 8.46875 10.5229 8.26133 10.8921 7.89212C11.2613 7.5229 11.4688 7.02215 11.4688 6.5C11.4688 5.97786 11.2613 5.4771 10.8921 5.10788C10.5229 4.73867 10.0221 4.53125 9.5 4.53125Z" fill="#4A5568"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.78263 5.31525C2.416 5.84375 2.28125 6.25763 2.28125 6.5C2.28125 6.74238 2.416 7.15625 2.78263 7.68475C3.13788 8.19488 3.66463 8.74875 4.33138 9.26063C5.6675 10.2861 7.49888 11.0938 9.5 11.0938C11.5011 11.0938 13.3325 10.2861 14.6686 9.26063C15.3354 8.74875 15.8621 8.19488 16.2174 7.68475C16.584 7.15625 16.7188 6.74238 16.7188 6.5C16.7188 6.25763 16.584 5.84375 16.2174 5.31525C15.8621 4.80513 15.3354 4.25125 14.6686 3.73938C13.3325 2.71388 11.5011 1.90625 9.5 1.90625C7.49888 1.90625 5.6675 2.71388 4.33138 3.73938C3.66463 4.25125 3.13788 4.80513 2.78263 5.31525ZM3.53163 2.69813C5.04625 1.53613 7.1515 0.59375 9.5 0.59375C11.8485 0.59375 13.9538 1.53613 15.4675 2.69813C16.2261 3.28 16.8526 3.92925 17.2954 4.56713C17.7259 5.1875 18.0313 5.86738 18.0313 6.5C18.0313 7.13263 17.725 7.8125 17.2954 8.43288C16.8526 9.07075 16.2261 9.71913 15.4684 10.3019C13.9546 11.4639 11.8485 12.4063 9.5 12.4063C7.1515 12.4063 5.04625 11.4639 3.5325 10.3019C2.77388 9.72 2.14738 9.07075 1.70463 8.43288C1.275 7.8125 0.96875 7.13263 0.96875 6.5C0.96875 5.86738 1.275 5.1875 1.70463 4.56713C2.14738 3.92925 2.77388 3.28088 3.53163 2.69813Z" fill="#4A5568"/>
                                </svg>
                                379 view
                            </span>
                        </p>
                        <span class="more-icon" onclick="togglePopup(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M14 5C14 3.9 13.1 3 12 3C10.9 3 10 3.9 10 5C10 6.1 10.9 7 12 7C13.1 7 14 6.1 14 5ZM14 19C14 17.9 13.1 17 12 17C10.9 17 10 17.9 10 19C10 20.1 10.9 21 12 21C13.1 21 14 20.1 14 19ZM14 12C14 10.9 13.1 10 12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12Z" fill="#4A5568"/>
                            </svg>
                        </span>
                        <div class="popup-menu">
                            <p class="popup-menu-item" onclick="window.location.href='{{ route('admin.kursus.edit') }}'">Edit</p>
                            <p class="popup-menu-item">Hapus</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4" data-category="Sains dan Matematika" data-year="2023" data-popular="150">
            <div class="card custom-card">
                <img src="{{ Vite::asset('resources/images/kimia dasar.png') }}" class="card-img-top" alt="Pemrograman Java untuk Pemula">
                <div class="card-body">
                    <h5 class="card-title fw-semibold" style="color: #333; margin-bottom: 15px;">Kimia Dasar</h5>
                    <p class="card-text text-muted" style="font-size: 10px; margin-bottom: 20px;">Sains dan Matematika</p>
                    <p class="card-text text-muted" style="font-size: 10px; font-weight: 400; display: flex; align-items: center;">
                        <i class="bi bi-clock" style="margin-right: 5px;"></i> 1 tahun yang lalu
                    </p>
                    <div class="rating-and-more">
                        <p class="card-text rating-container">
                            4.6 <i class="bi bi-star-fill rating-star"></i>
                            <span class="rating-view-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="13" viewBox="0 0 19 13" fill="none" class="rating-view-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.21875 6.5C6.21875 5.62976 6.56445 4.79516 7.17981 4.17981C7.79516 3.56445 8.62976 3.21875 9.5 3.21875C10.3702 3.21875 11.2048 3.56445 11.8202 4.17981C12.4355 4.79516 12.7813 5.62976 12.7813 6.5C12.7813 7.37024 12.4355 8.20484 11.8202 8.82019C11.2048 9.43555 10.3702 9.78125 9.5 9.78125C8.62976 9.78125 7.79516 9.43555 7.17981 8.82019C6.56445 8.20484 6.21875 7.37024 6.21875 6.5ZM9.5 4.53125C8.97786 4.53125 8.4771 4.73867 8.10788 5.10788C7.73867 5.4771 7.53125 5.97786 7.53125 6.5C7.53125 7.02215 7.73867 7.5229 8.10788 7.89212C8.4771 8.26133 8.97786 8.46875 9.5 8.46875C10.0221 8.46875 10.5229 8.26133 10.8921 7.89212C11.2613 7.5229 11.4688 7.02215 11.4688 6.5C11.4688 5.97786 11.2613 5.4771 10.8921 5.10788C10.5229 4.73867 10.0221 4.53125 9.5 4.53125Z" fill="#4A5568"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.78263 5.31525C2.416 5.84375 2.28125 6.25763 2.28125 6.5C2.28125 6.74238 2.416 7.15625 2.78263 7.68475C3.13788 8.19488 3.66463 8.74875 4.33138 9.26063C5.6675 10.2861 7.49888 11.0938 9.5 11.0938C11.5011 11.0938 13.3325 10.2861 14.6686 9.26063C15.3354 8.74875 15.8621 8.19488 16.2174 7.68475C16.584 7.15625 16.7188 6.74238 16.7188 6.5C16.7188 6.25763 16.584 5.84375 16.2174 5.31525C15.8621 4.80513 15.3354 4.25125 14.6686 3.73938C13.3325 2.71388 11.5011 1.90625 9.5 1.90625C7.49888 1.90625 5.6675 2.71388 4.33138 3.73938C3.66463 4.25125 3.13788 4.80513 2.78263 5.31525ZM3.53163 2.69813C5.04625 1.53613 7.1515 0.59375 9.5 0.59375C11.8485 0.59375 13.9538 1.53613 15.4675 2.69813C16.2261 3.28 16.8526 3.92925 17.2954 4.56713C17.7259 5.1875 18.0313 5.86738 18.0313 6.5C18.0313 7.13263 17.725 7.8125 17.2954 8.43288C16.8526 9.07075 16.2261 9.71913 15.4684 10.3019C13.9546 11.4639 11.8485 12.4063 9.5 12.4063C7.1515 12.4063 5.04625 11.4639 3.5325 10.3019C2.77388 9.72 2.14738 9.07075 1.70463 8.43288C1.275 7.8125 0.96875 7.13263 0.96875 6.5C0.96875 5.86738 1.275 5.1875 1.70463 4.56713C2.14738 3.92925 2.77388 3.28088 3.53163 2.69813Z" fill="#4A5568"/>
                                </svg>
                                304 view
                            </span>
                        </p>
                        <span class="more-icon" onclick="togglePopup(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M14 5C14 3.9 13.1 3 12 3C10.9 3 10 3.9 10 5C10 6.1 10.9 7 12 7C13.1 7 14 6.1 14 5ZM14 19C14 17.9 13.1 17 12 17C10.9 17 10 17.9 10 19C10 20.1 10.9 21 12 21C13.1 21 14 20.1 14 19ZM14 12C14 10.9 13.1 10 12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12Z" fill="#4A5568"/>
                            </svg>
                        </span>
                        <div class="popup-menu">
                            <p class="popup-menu-item" onclick="window.location.href='{{ route('admin.kursus.edit') }}'">Edit</p>
                            <p class="popup-menu-item">Hapus</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="pagination" class="d-flex align-items-center">
        <button id="prevBtn" class="btn-circle">
            <span>&lt;</span>
        </button>
        <div class="page-numbers">
            <span class="page-number active">1</span>
            <span class="page-number">2</span>
        </div>
        <button id="nextBtn" class="btn-circle">
            <span>&gt;</span>
        </button>
    </div>



</div>

<style>
.navbar h4 {
    font-size: 28px;
    font-weight: 600;
    color: #002B5B; /* Ganti dengan warna dari desain */
}

.navbar {
    padding: 20px;
}
.isi {
  margin: auto;
  text-align: center; /* Jika ingin kontennya juga rata tengah */
}
.search-container .search{
    padding: 0;
}

.input-group-text {
    border-radius: 0.5rem 0 0 0.5rem; /* Rounded corner untuk ikon */
}

.input-group .form-control {
    border-radius: 0 0.5rem 0.5rem 0; /* Rounded corner untuk input */
}
.custom-navbar {
    height: 90px !important;
    display: flex;
    align-items: center;
    background-color: #E6F0FF;
    box-shadow: 2px 2px 10px 0px rgba(0, 0, 0, 0.25);
}
.input-group {
    margin-right: 130px; /* Pastikan margin kiri diatur ke nol */
}
.container {
  max-width: 1200px;
  padding: 20px;
  align-items: center;
}

.stats {
  display: flex;
  flex-direction: column;
  gap: 10px;
}
.dropdown-group {
    margin-right: auto; /* Membuat dropdown tetap di sisi kiri */
}

.btn-primary {
    padding: 8px 16px;
    font-size: 14px;
    font-weight: bold;
    border-radius: 18px;
    background-color: #0056D2
}

/* Gaya untuk tombol dropdown */
.dropdown .btn {
    border: 1px solid #0056D2; /* Atur warna border sesuai kebutuhan */
    border-radius: 8.341px;
    background-color: white; /* Latar belakang tombol */
    color: #0056D2; /* Warna teks */
}

/* Gaya untuk menu dropdown */
.dropdown-menu {
    border: 1px solid transparent; /* Sama dengan tombol */
    border-radius: 8.341px;
    padding: 10px; /* Ruang dalam menu */
    background-color: white; /* Latar belakang menu */
}

/* Item dalam dropdown */
.dropdown-menu .dropdown-item {
    border-radius: 8.341px; /* Opsi untuk item individu */
    padding: 8px 12px; /* Padding setiap item */
    color: #002661;
    transition: background-color 0.2s ease-in-out;
}

/* Hilangkan hover */
.dropdown-menu .dropdown-item:hover {
    background-color: transparent !important;
    color: inherit !important;
}

.dropdown .btn:focus,
.dropdown .btn:active,
.dropdown .btn:focus:active {
    background-color: white !important; /* Ubah warna background */
    color: #0d6efd !important; /* Warna teks sesuai keinginan */
    box-shadow: none !important; /* Hilangkan shadow jika ada */
    border-color: #0d6efd !important; /* Warna border */
}

.icon-spacing {
    margin-right: 8px; /* Sesuaikan nilai jarak sesuai kebutuhan */
}
.card:hover, .card:focus {
    transform: none !important;
}
.card-title {
    height: 38.4px; /* Line-height konstan */
    width: 220px;
    font-size: 14px;
    font-weight: 600;
}
.custom-card {
    width: 260px;
    height: auto;
    border-radius: 24px;
    overflow: hidden;
    font-size: 16px;
    font-weight: 600; /* Semibold */
    color: #333;
    margin-bottom: 20px;
    box-shadow: 2px 2px 10px 0px rgba(0, 0, 0, 0.25);
}

.rating-container {
    display: flex;
    align-items: center;
    margin-bottom: 0;
    font-weight: 500;
    color: #333;
    font-size: 14px;
}
.rating-view-icon {
  margin-right: 5px; /* Jarak antara ikon dan teks */
  vertical-align: middle; /* Untuk menyelaraskan secara vertikal */
}

.rating-view-text {
  font-size: 10px;
  color: #4A5568;
  margin-left: 30px;
  display: flex;
  align-items: center;
}

.rating-star {
    margin-left: 4px; /* Sesuaikan dengan jarak sebelum ikon */
    margin-right: 8px; /* Sesuaikan dengan jarak setelah ikon */
    color: #f39c12;
}

.rating-details {
    color: #333;
    font-weight: normal;
}

.rating-and-more {
    display: flex;
    justify-content: space-between; /* Mengatur jarak antara rating dan tombol More */
    align-items: center; /* Menjaga elemen tetap sejajar secara vertikal */
}

.more-icon {
    cursor: pointer; /* Tambahkan pointer untuk menunjukkan bahwa ini bisa di-klik */
    display: flex;
    align-items: center; /* Menjaga ikon tetap vertikal sejajar */
    justify-content: center;
}

.more-icon svg {
    width: 17px; /* Ukuran ikon */
    height: 17px;
    fill: #4A5568; /* Warna ikon */
    transition: fill 0.3s; /* Efek transisi warna saat hover */
}

.more-icon:hover svg {
    fill: #007bff; /* Warna saat di-hover */
}
.popup-menu {
    display: none;
    position: absolute;
    right: 0;
    margin-right: 10px;
    bottom: 40px;
    background-color: #fff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 20px 20px 0px 20px;
    z-index: 1000;
    padding: 10px 15px;
    color: #333;
    width: 100px;
}

.popup-menu p {
    margin: 0;
    padding: 5px 0;
    cursor: pointer;
    font-size: 12px;
    font-weight: 400;
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
.dropdown-toggle {
    font-size: 14px;
    font-weight: 500 !important; /* Normal untuk teks dropdown */
}

.dropdown-menu .dropdown-item {
    font-weight: 400;
    font-size: 12px;
}

#pagination {
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



</style>

<script>
function togglePopup(element) {
    const popup = element.nextElementSibling; // Popup menu di bawah tombol more
    if (popup.style.display === 'block') {
        popup.style.display = 'none';
    } else {
        popup.style.display = 'block';
    }

    // Klik di luar untuk menutup popup
    document.addEventListener('click', function (event) {
        if (!element.contains(event.target) && !popup.contains(event.target)) {
            popup.style.display = 'none';
        }
    }, { once: true });
}


// Jalankan kode setelah DOM selesai dimuat
document.addEventListener('DOMContentLoaded', () => {
    // Elemen penting
    const cards = Array.from(document.querySelectorAll('.col-md-3[data-category][data-year]'));
    const itemsPerPage = 12;
    let currentPage = 1;
    let filteredCards = cards;

    // Elemen navigasi pagination
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const pageButtons = Array.from(document.querySelectorAll('.page-btn'));

    // Inisialisasi nilai default untuk dropdown
    document.getElementById('dropdownMateri').setAttribute('data-selected', 'Semua Kategori');
    document.getElementById('dropdownTahun').setAttribute('data-selected', 'Semua Tahun');

    // Filter kartu berdasarkan kategori dan tahun
    document.querySelectorAll('.dropdown-menu a').forEach(item => {
        item.addEventListener('click', function (e) {
            e.preventDefault();
            const dropdownToggle = this.closest('.dropdown').querySelector('.dropdown-toggle');
            dropdownToggle.textContent = this.textContent.trim();

            const category = document.querySelector('#dropdownMateri .dropdown-toggle').textContent.trim();
            const year = document.querySelector('#dropdownTahun .dropdown-toggle').textContent.trim();
            filterCards(category, year);
        });
    });

    // Filter kartu
    function filterCards(category = 'Semua Kategori', year = 'Semua Tahun') {
        // Konversi NodeList ke array
        const filteredCards = Array.from(cards).filter(card => {
            const cardCategory = card.getAttribute('data-category');
            const cardYear = card.getAttribute('data-year');
            return (
                (category === 'Semua Kategori' || cardCategory === category) &&
                (year === 'Semua Tahun' || cardYear === year)
            );
        });

        cards.forEach(card => {
            card.style.display = filteredCards.includes(card) ? 'block' : 'none';
        });

        currentPage = 1;
        showPage(currentPage);
        updatePagination();
    }

    // Tampilkan kartu berdasarkan halaman
    function showPage(page) {
        console.log(`Menampilkan halaman ${page}`);
        const startIndex = (page - 1) * itemsPerPage;
        const endIndex = page * itemsPerPage;

        // Sembunyikan semua kartu
        cards.forEach(card => (card.style.display = 'none'));

        // Tampilkan kartu yang sesuai dengan halaman
        filteredCards.slice(startIndex, endIndex).forEach(card => (card.style.display = 'block'));

        // Perbarui tombol pagination
        prevBtn.disabled = page === 1;
        nextBtn.disabled = page === Math.ceil(filteredCards.length / itemsPerPage);
        pageButtons.forEach((btn, index) => {
            btn.classList.toggle('active', index + 1 === page);
        });
    }

    // Perbarui jumlah dan tampilan tombol pagination
    function updatePagination() {
        const totalPages = Math.ceil(filteredCards.length / itemsPerPage);
        console.log(`Total halaman: ${totalPages}`);

        // Sembunyikan tombol halaman yang tidak diperlukan
        pageButtons.forEach((btn, index) => {
            if (index < totalPages) {
                btn.style.display = 'inline-block';
            } else {
                btn.style.display = 'none';
            }
        });
    }

    // Event Listener untuk tombol pagination
    pageButtons.forEach((btn, index) => {
        btn.addEventListener('click', function () {
            currentPage = index + 1;
            showPage(currentPage);
        });
    });

    // Event Listener untuk tombol Previous
    prevBtn.addEventListener('click', function () {
        if (currentPage > 1) {
            currentPage--;
            showPage(currentPage);
        }
    });

    // Event Listener untuk tombol Next
    nextBtn.addEventListener('click', function () {
        if (currentPage < Math.ceil(filteredCards.length / itemsPerPage)) {
            currentPage++;
            showPage(currentPage);
        }
    });

    // Inisialisasi filter dan pagination
    filterCards();
});

document.getElementById('searchInput').addEventListener('input', function () {
    const searchTerm = this.value.toLowerCase();
    const cards = document.querySelectorAll('#cardContainer .col-md-3');

    cards.forEach(card => {
        const title = card.querySelector('.card-title').textContent.toLowerCase();
        if (title.includes(searchTerm)) {
            card.style.display = 'block'; // Tampilkan jika sesuai
        } else {
            card.style.display = 'none'; // Sembunyikan jika tidak sesuai
        }
    });
});
const filters = {
    materi: 'Semua Kategori',
    tahun: 'Semua Tahun',
    urutkan: 'Semua', // Default sorting
    search: '', // Filter pencarian
};

// Ambil semua elemen kartu
const cards = document.querySelectorAll('.col-md-3');

function applyFilters() {
    const cardContainer = document.querySelector('.row'); // Container kartu
    const pagination = document.getElementById('pagination'); // Elemen pagination
    const filteredCards = [...cards]; // Salin kartu untuk pengurutan
    let visibleCardCount = 0; // Hitung kartu yang terlihat

    // Tampilkan atau sembunyikan kartu berdasarkan filter
    filteredCards.forEach(card => {
        const category = card.getAttribute('data-category');
        const year = card.getAttribute('data-year');
        const title = card.querySelector('.card-title').textContent.trim().toLowerCase();

        const matchesCategory = filters.materi === 'Semua Kategori' || filters.materi === category;
        const matchesYear = filters.tahun === 'Semua Tahun' || filters.tahun === year;
        const matchesSearch = filters.search === '' || title.includes(filters.search);

        if (matchesCategory && matchesYear && matchesSearch) {
            card.style.display = 'block';
            visibleCardCount++;
        } else {
            card.style.display = 'none';
        }
    });

    // Sembunyikan pagination jika filter diaktifkan
    if (pagination) {
        const isFilterActive = filters.materi !== 'Semua Kategori' || filters.tahun !== 'Semua Tahun' || filters.search !== '';
        pagination.style.display = isFilterActive ? 'none' : (visibleCardCount > 0 ? 'flex' : 'none');
    }

    // Urutkan elemen berdasarkan filter "urutkan berdasarkan"
    if (filters.urutkan !== 'Semua') {
        filteredCards.sort((a, b) => {
            if (filters.urutkan === 'Terbaru') {
                return b.getAttribute('data-year') - a.getAttribute('data-year');
            } else if (filters.urutkan === 'Populer') {
                return b.getAttribute('data-popular') - a.getAttribute('data-popular');
            } else if (filters.urutkan === 'Ajbad') {
                const titleA = a.querySelector('.card-title').textContent.trim().toLowerCase();
                const titleB = b.querySelector('.card-title').textContent.trim().toLowerCase();
                return titleA.localeCompare(titleB); // Urutkan berdasarkan abjad
            }
            return 0; // Tidak ada urutan tambahan
        });

        // Hapus elemen lama dan tambahkan elemen yang diurutkan
        cardContainer.innerHTML = '';
        filteredCards.forEach(card => {
            cardContainer.appendChild(card);
        });
    }
}

// Tambahkan event listener ke dropdown
document.querySelectorAll('.dropdown').forEach(dropdown => {
    const button = dropdown.querySelector('button');
    const menuItems = dropdown.querySelectorAll('.dropdown-item');

    menuItems.forEach(item => {
        item.addEventListener('click', (e) => {
            e.preventDefault(); // Hindari reload halaman
            button.textContent = item.textContent; // Perbarui teks tombol dropdown

            // Perbarui filter
            const filterType = button.id.replace('dropdown', '').toLowerCase();
            const filterKey = filterType === 'urutkan' ? 'urutkan' : filterType === 'tahun' ? 'tahun' : 'materi';
            filters[filterKey] = item.getAttribute('data-category') || item.getAttribute('data-year') || item.textContent.trim();

            // Terapkan filter ke kartu
            applyFilters();
        });
    });
});

// Tambahkan event listener untuk search bar
const searchInput = document.getElementById('searchInput');
searchInput.addEventListener('input', (e) => {
    filters.search = e.target.value.toLowerCase(); // Simpan teks pencarian ke filter
    applyFilters();
});

// Terapkan filter awal saat halaman dimuat
applyFilters();
document.addEventListener("DOMContentLoaded", () => {
    const deleteButtons = document.querySelectorAll(".popup-menu-item");

    deleteButtons.forEach(button => {
        if (button.textContent.trim() === "Hapus") {
            button.addEventListener("click", function () {
                const card = this.closest(".col-md-3.mb-4");
                if (card) {
                    card.remove(); // Menghapus elemen
                }
            });
        }
    });
});


</script>

@endsection
