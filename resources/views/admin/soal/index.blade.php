@extends('layout-admin.app')

@section('content')

<nav class="navbar navbar-expand-lg custom-navbar">
    <div class="container-fluid px-4">
        <!-- Title -->
        <h4 class="mb-0">Bank Soal</h4>

        <!-- Right-side icons -->
        <div class="d-flex align-items-center">
            <!-- Notification icon -->
            <button class="btn position-relative me-3 border-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                    <path d="M4.39999 7.6253C4.60195 5.80319 5.46883 4.11958 6.83468 2.89676C8.20053 1.67393 9.9694 0.997803 11.8027 0.997803C13.6359 0.997803 15.4048 1.67393 16.7706 2.89676C18.1365 4.11958 19.0034 5.80319 19.2053 7.6253L19.5413 10.6466L19.5493 10.7226C19.7215 12.2213 20.2095 13.6665 20.9813 14.9626L21.0213 15.0293L21.7907 16.3133C22.4907 17.4786 22.84 18.0613 22.764 18.54C22.7138 18.8577 22.5504 19.1465 22.304 19.3533C21.932 19.6653 21.252 19.6653 19.8933 19.6653H3.71199C2.35199 19.6653 1.67199 19.6653 1.30132 19.3546C1.05413 19.1478 0.890241 18.8584 0.839991 18.54C0.765325 18.0613 1.11466 17.4786 1.81332 16.3133L2.58532 15.028L2.62532 14.9613C3.39647 13.6654 3.88408 12.2208 4.05599 10.7226L4.06399 10.6466L4.39999 7.6253Z" stroke="#002661" stroke-width="1.50943"/>
                    <path d="M7.93945 20.2068C8.16745 21.1988 8.67012 22.0761 9.36879 22.7001C10.0675 23.3268 10.9235 23.6655 11.8035 23.6655C12.6835 23.6655 13.5395 23.3268 14.2381 22.7015C14.9368 22.0748 15.4381 21.1988 15.6675 20.2068" stroke="#002661" stroke-width="1.50943" stroke-linecap="round"/>
                  </svg>

            </button>
            <div class="notification-popup d-none">
                <div class="popup-content">
                    Tidak ada notifikasi
                </div>
            </div>

            <!-- Profile Picture -->
            <div style="position: relative; display: inline-block;">
                <img src="{{ Vite::asset('resources/images/profile4.png') }}"
                     alt="Profile Picture"
                     class="rounded-circle"
                     style="width: 53px; height: 53px; cursor: pointer;"
                     onclick="togglePopup()">

                <!-- Popup -->
                <div id="popup" style="
                    display: none;
                    position: absolute;
                    top: 60px;
                    width: 170px;
                    right: 0;
                    margin-right: 10px;
                    background-color: white;
                    padding: 16px;
                    border-radius: 16px;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                    z-index: 100;
                    display: flex;
                    align-items: center;
                    gap: 10px; /* Jarak antara ikon dan teks */
                ">
                    <a href="{{ route('home.guest') }}" style="display: flex; align-items: center; text-decoration: none; color: inherit;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                            <path d="M3.97865 14.1666C3.65235 14.1666 3.38011 14.0575 3.16194 13.8393C2.94378 13.6212 2.83446 13.3487 2.83398 13.0219V3.97792C2.83398 3.65161 2.9433 3.37938 3.16194 3.16121C3.38058 2.94304 3.65282 2.83372 3.97865 2.83325H8.51411V3.54159H3.97865C3.86957 3.54159 3.76946 3.58692 3.67832 3.67759C3.58718 3.76825 3.54185 3.86836 3.54232 3.97792V13.0226C3.54232 13.1312 3.58765 13.2311 3.67832 13.3223C3.76898 13.4134 3.86886 13.4587 3.97794 13.4583H8.51411V14.1666H3.97865ZM11.6612 11.0067L11.164 10.4967L12.8066 8.85408H6.51165V8.14575H12.8066L11.1633 6.50242L11.6605 5.99383L14.1673 8.49992L11.6612 11.0067Z" fill="#4A5568"/>
                        </svg>
                        Keluar
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="search-container">
    <div class="container search d-flex align-items-center justify-content-between">
        <!-- Dropdown filters -->
        <div class="dropdown-group d-flex gap-3">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownKategori" data-bs-toggle="dropdown" aria-expanded="false">
                    Kategori Soal
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownKategori">
                    <li><a class="dropdown-item" href="#">Semua</a></li>
                    <li><a class="dropdown-item" href="#">Ujian</a></li>
                    <li><a class="dropdown-item" href="#">Kuis</a></li>
                </ul>
            </div>

            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMateri" data-bs-toggle="dropdown" aria-expanded="false">
                    Kategori Kursus
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMateri">
                    <li><a class="dropdown-item" href="#">Semua Kategori</a></li>
                    <li><a class="dropdown-item" href="#">Bahasa</a></li>
                    <li><a class="dropdown-item" href="#">Sains dan Matematika</a></li>
                    <li><a class="dropdown-item" href="#">Pengembangan Personal</a></li>
                    <li><a class="dropdown-item" href="#">Desain</a></li>
                    <li><a class="dropdown-item" href="#">Bahasa Pemrograman</a></li>
                    <li><a class="dropdown-item" href="#">Jaringan dan Keamanan</a></li>
                    <li><a class="dropdown-item" href="#">Pemasaran</a></li>
                    <li><a class="dropdown-item" href="#">Keuangan dan Akuntansi</a></li>
                </ul>
            </div>

            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownTahun" data-bs-toggle="dropdown" aria-expanded="false">
                    Tahun
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownTahun">
                    <li><a class="dropdown-item" href="#" data-year="2024">Semua Tahun</a></li>
                    <li><a class="dropdown-item" href="#" data-year="2024">2024</a></li>
                    <li><a class="dropdown-item" href="#" data-year="2023">2023</a></li>
                    <li><a class="dropdown-item" href="#" data-year="2022">2022</a></li>
                </ul>
            </div>

            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownTipe" data-bs-toggle="dropdown" aria-expanded="false">
                    Tipe Jawaban
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownJawaban">
                    <li><a class="dropdown-item" href="#">Semua Tipe</a></li>
                    <li><a class="dropdown-item" href="#">Pilihan ganda</a></li>
                    <li><a class="dropdown-item" href="#">Esai</a></li>
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
                onclick="window.location.href='{{ route('admin.soal.create') }}'">
            <svg class="icon-spacing" xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                <path d="M9.28125 7.46875V0.25H7.21875V7.46875H0V9.53125H7.21875V16.75H9.28125V9.53125H16.5V7.46875H9.28125Z" fill="white"/>
            </svg>
            Tambah Baru
        </button>

    </div>
</div>
<div class="container my-5">
    <div class="row g-4">
        <!-- Card Start -->
        <div class="col-md-4">
            <div class="card" data-category="Kuis" data-course="Bahasa Pemrograman" data-year="2023" data-type="Pilihan ganda">
                <div class="card-body">
                    <span class="icon-placeholder" onclick="toggleActions(this)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                            <path d="M11.084 3.95833C11.084 3.0875 10.3715 2.375 9.50065 2.375C8.62982 2.375 7.91732 3.0875 7.91732 3.95833C7.91732 4.82917 8.62982 5.54167 9.50065 5.54167C10.3715 5.54167 11.084 4.82917 11.084 3.95833ZM11.084 15.0417C11.084 14.1708 10.3715 13.4583 9.50065 13.4583C8.62982 13.4583 7.91732 14.1708 7.91732 15.0417C7.91732 15.9125 8.62982 16.625 9.50065 16.625C10.3715 16.625 11.084 15.9125 11.084 15.0417ZM11.084 9.5C11.084 8.62917 10.3715 7.91667 9.50065 7.91667C8.62982 7.91667 7.91732 8.62917 7.91732 9.5C7.91732 10.3708 8.62982 11.0833 9.50065 11.0833C10.3715 11.0833 11.084 10.3708 11.084 9.5Z" fill="black"/>
                        </svg>
                    </span>
                    <div class="popup-menu">
                        <p class="popup-menu-item" onclick="window.location.href='{{ route('admin.soal.edit') }}'">Edit</p>
                        <p class="popup-menu-item">Hapus</p>
                    </div>
                    <div class="question-container">
                        <div class="title-container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="25" viewBox="0 0 19 25" fill="none">
                                <path d="M4.4375 6.59375H7.8125M4.4375 12.5H14.5625M4.4375 15.875H14.5625M4.4375 19.25H7.8125M2.75 23.4687H16.25C16.6976 23.4687 17.1268 23.291 17.4432 22.9745C17.7597 22.658 17.9375 22.2288 17.9375 21.7812V3.21875C17.9375 2.7712 17.7597 2.34197 17.4432 2.02551C17.1268 1.70904 16.6976 1.53125 16.25 1.53125H2.75C2.30245 1.53125 1.87322 1.70904 1.55676 2.02551C1.24029 2.34197 1.0625 2.7712 1.0625 3.21875V21.7812C1.0625 22.2288 1.24029 22.658 1.55676 22.9745C1.87322 23.291 2.30245 23.4687 2.75 23.4687Z" stroke="#0056D2" stroke-width="1.32453" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14.5625 7.01562C14.7955 7.01562 14.9844 6.82675 14.9844 6.59375C14.9844 6.36075 14.7955 6.17188 14.5625 6.17188C14.3295 6.17188 14.1406 6.36075 14.1406 6.59375C14.1406 6.82675 14.3295 7.01562 14.5625 7.01562Z" fill="black" stroke="#0056D2" stroke-width="0.413915"/>
                            </svg>
                            <h6 class="question-title">Soal Kuis 1</h6>
                        </div>
                        <p class="question-info">8 soal</p>
                    </div>
                    <div class="info-container">
                        <p class="question-category">Pemrograman Java untuk Pemula</p>
                        <p class="question-type">Pilihan ganda</p>
                    </div>
                    <svg  class="icon-background" xmlns="http://www.w3.org/2000/svg" width="115" height="106" viewBox="0 0 115 106" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M106.086 91.4077L100.833 55.66C100.55 52.8339 103.716 52.0029 105.463 53.2689L124.324 67.2937C125.4 68.1307 126.397 68.0712 127.303 66.9973L135.042 56.5664C135.823 55.447 135.614 54.446 134.405 53.5642L109.907 35.6353C95.5155 25.8045 80.6374 32.5392 85.4939 68.2064L86.2209 74.0435L89.1649 94.0585C89.4705 95.3921 90.2677 96.0919 91.7915 95.8624L104.502 93.9926C105.704 93.7899 106.271 92.5765 106.093 91.4107L106.086 91.4077Z" fill="#414141" fill-opacity="0.08"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22.294 10.2367L55.8806 23.5615C58.4723 24.7285 57.6065 27.8863 55.6358 28.7676L34.0601 38.0869C32.7995 38.5991 32.3526 39.4888 32.8305 40.8135L37.9942 52.7311C38.5727 53.9663 39.5453 54.282 40.914 53.6833L68.6898 41.4331C84.3997 33.8848 86.0062 17.6336 52.6897 4.00151L47.2721 1.71222L28.4667 -5.74905C27.1592 -6.14682 26.1508 -5.81059 25.5941 -4.37641L20.8572 7.56767C20.4311 8.70801 21.2022 9.80833 22.2977 10.2381L22.294 10.2367Z" fill="#414141" fill-opacity="0.08"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M132.521 -25.9461L103.729 -4.11774C101.388 -2.50636 99.1373 -4.8823 99.4009 -7.02212L102.606 -30.3043C102.818 -31.6469 102.292 -32.4935 100.91 -32.7697L88.042 -34.5278C86.6853 -34.6727 85.908 -34.006 85.716 -32.5211L81.8098 -2.41592C80.1284 14.9302 93.1994 24.7212 122.116 3.28446L126.88 -0.164992L143.002 -12.3853C144.02 -13.2973 144.253 -14.3332 143.315 -15.5566L135.555 -25.7964C134.799 -26.752 133.462 -26.6642 132.525 -25.9446L132.521 -25.9461Z" fill="#414141" fill-opacity="0.08"/>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Duplicate card for other questions -->
        <div class="col-md-4">
            <div class="card" data-category="Ujian" data-course="Bahasa Pemrograman" data-year="2023" data-type="Pilihan ganda">
                <div class="card-body">
                    <span class="icon-placeholder" onclick="toggleActions(this)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                            <path d="M11.084 3.95833C11.084 3.0875 10.3715 2.375 9.50065 2.375C8.62982 2.375 7.91732 3.0875 7.91732 3.95833C7.91732 4.82917 8.62982 5.54167 9.50065 5.54167C10.3715 5.54167 11.084 4.82917 11.084 3.95833ZM11.084 15.0417C11.084 14.1708 10.3715 13.4583 9.50065 13.4583C8.62982 13.4583 7.91732 14.1708 7.91732 15.0417C7.91732 15.9125 8.62982 16.625 9.50065 16.625C10.3715 16.625 11.084 15.9125 11.084 15.0417ZM11.084 9.5C11.084 8.62917 10.3715 7.91667 9.50065 7.91667C8.62982 7.91667 7.91732 8.62917 7.91732 9.5C7.91732 10.3708 8.62982 11.0833 9.50065 11.0833C10.3715 11.0833 11.084 10.3708 11.084 9.5Z" fill="black"/>
                        </svg>
                    </span>
                    <div class="popup-menu">
                        <p class="popup-menu-item" onclick="window.location.href='{{ route('admin.soal.edit') }}'">Edit</p>
                        <p class="popup-menu-item">Hapus</p>
                    </div>
                    <div class="question-container">
                        <div class="title-container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="25" viewBox="0 0 19 25" fill="none">
                                <path d="M4.4375 6.59375H7.8125M4.4375 12.5H14.5625M4.4375 15.875H14.5625M4.4375 19.25H7.8125M2.75 23.4687H16.25C16.6976 23.4687 17.1268 23.291 17.4432 22.9745C17.7597 22.658 17.9375 22.2288 17.9375 21.7812V3.21875C17.9375 2.7712 17.7597 2.34197 17.4432 2.02551C17.1268 1.70904 16.6976 1.53125 16.25 1.53125H2.75C2.30245 1.53125 1.87322 1.70904 1.55676 2.02551C1.24029 2.34197 1.0625 2.7712 1.0625 3.21875V21.7812C1.0625 22.2288 1.24029 22.658 1.55676 22.9745C1.87322 23.291 2.30245 23.4687 2.75 23.4687Z" stroke="#0056D2" stroke-width="1.32453" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14.5625 7.01562C14.7955 7.01562 14.9844 6.82675 14.9844 6.59375C14.9844 6.36075 14.7955 6.17188 14.5625 6.17188C14.3295 6.17188 14.1406 6.36075 14.1406 6.59375C14.1406 6.82675 14.3295 7.01562 14.5625 7.01562Z" fill="black" stroke="#0056D2" stroke-width="0.413915"/>
                            </svg>
                            <h6 class="question-title">Soal Ujian</h6>
                        </div>
                        <p class="question-info">20 soal</p>
                    </div>
                    <div class="info-container">
                        <p class="question-category searchable">Pemrograman Java untuk Pemula</p>
                        <p class="question-type ">Pilihan ganda</p>
                    </div>
                    <svg  class="icon-background" xmlns="http://www.w3.org/2000/svg" width="115" height="106" viewBox="0 0 115 106" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M106.086 91.4077L100.833 55.66C100.55 52.8339 103.716 52.0029 105.463 53.2689L124.324 67.2937C125.4 68.1307 126.397 68.0712 127.303 66.9973L135.042 56.5664C135.823 55.447 135.614 54.446 134.405 53.5642L109.907 35.6353C95.5155 25.8045 80.6374 32.5392 85.4939 68.2064L86.2209 74.0435L89.1649 94.0585C89.4705 95.3921 90.2677 96.0919 91.7915 95.8624L104.502 93.9926C105.704 93.7899 106.271 92.5765 106.093 91.4107L106.086 91.4077Z" fill="#414141" fill-opacity="0.08"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22.294 10.2367L55.8806 23.5615C58.4723 24.7285 57.6065 27.8863 55.6358 28.7676L34.0601 38.0869C32.7995 38.5991 32.3526 39.4888 32.8305 40.8135L37.9942 52.7311C38.5727 53.9663 39.5453 54.282 40.914 53.6833L68.6898 41.4331C84.3997 33.8848 86.0062 17.6336 52.6897 4.00151L47.2721 1.71222L28.4667 -5.74905C27.1592 -6.14682 26.1508 -5.81059 25.5941 -4.37641L20.8572 7.56767C20.4311 8.70801 21.2022 9.80833 22.2977 10.2381L22.294 10.2367Z" fill="#414141" fill-opacity="0.08"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M132.521 -25.9461L103.729 -4.11774C101.388 -2.50636 99.1373 -4.8823 99.4009 -7.02212L102.606 -30.3043C102.818 -31.6469 102.292 -32.4935 100.91 -32.7697L88.042 -34.5278C86.6853 -34.6727 85.908 -34.006 85.716 -32.5211L81.8098 -2.41592C80.1284 14.9302 93.1994 24.7212 122.116 3.28446L126.88 -0.164992L143.002 -12.3853C144.02 -13.2973 144.253 -14.3332 143.315 -15.5566L135.555 -25.7964C134.799 -26.752 133.462 -26.6642 132.525 -25.9446L132.521 -25.9461Z" fill="#414141" fill-opacity="0.08"/>
                    </svg>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" data-category="Ujian" data-course="Bahasa Pemrograman" data-year="2022" data-type="Pilihan ganda">
                <div class="card-body">
                    <span class="icon-placeholder" onclick="toggleActions(this)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                            <path d="M11.084 3.95833C11.084 3.0875 10.3715 2.375 9.50065 2.375C8.62982 2.375 7.91732 3.0875 7.91732 3.95833C7.91732 4.82917 8.62982 5.54167 9.50065 5.54167C10.3715 5.54167 11.084 4.82917 11.084 3.95833ZM11.084 15.0417C11.084 14.1708 10.3715 13.4583 9.50065 13.4583C8.62982 13.4583 7.91732 14.1708 7.91732 15.0417C7.91732 15.9125 8.62982 16.625 9.50065 16.625C10.3715 16.625 11.084 15.9125 11.084 15.0417ZM11.084 9.5C11.084 8.62917 10.3715 7.91667 9.50065 7.91667C8.62982 7.91667 7.91732 8.62917 7.91732 9.5C7.91732 10.3708 8.62982 11.0833 9.50065 11.0833C10.3715 11.0833 11.084 10.3708 11.084 9.5Z" fill="black"/>
                        </svg>
                    </span>
                    <div class="popup-menu">
                        <p class="popup-menu-item" onclick="window.location.href='{{ route('admin.soal.edit') }}'">Edit</p>
                        <p class="popup-menu-item">Hapus</p>
                    </div>
                    <div class="question-container">
                        <div class="title-container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="25" viewBox="0 0 19 25" fill="none">
                                <path d="M4.4375 6.59375H7.8125M4.4375 12.5H14.5625M4.4375 15.875H14.5625M4.4375 19.25H7.8125M2.75 23.4687H16.25C16.6976 23.4687 17.1268 23.291 17.4432 22.9745C17.7597 22.658 17.9375 22.2288 17.9375 21.7812V3.21875C17.9375 2.7712 17.7597 2.34197 17.4432 2.02551C17.1268 1.70904 16.6976 1.53125 16.25 1.53125H2.75C2.30245 1.53125 1.87322 1.70904 1.55676 2.02551C1.24029 2.34197 1.0625 2.7712 1.0625 3.21875V21.7812C1.0625 22.2288 1.24029 22.658 1.55676 22.9745C1.87322 23.291 2.30245 23.4687 2.75 23.4687Z" stroke="#0056D2" stroke-width="1.32453" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14.5625 7.01562C14.7955 7.01562 14.9844 6.82675 14.9844 6.59375C14.9844 6.36075 14.7955 6.17188 14.5625 6.17188C14.3295 6.17188 14.1406 6.36075 14.1406 6.59375C14.1406 6.82675 14.3295 7.01562 14.5625 7.01562Z" fill="black" stroke="#0056D2" stroke-width="0.413915"/>
                            </svg>
                            <h6 class="question-title">Soal Ujian</h6>
                        </div>
                        <p class="question-info">20 soal</p>
                    </div>
                    <div class="info-container">
                        <p class="question-category">Pemrograman Kotlin untuk Menengah</p>
                        <p class="question-type">Pilihan ganda</p>
                    </div>
                    <svg  class="icon-background" xmlns="http://www.w3.org/2000/svg" width="115" height="106" viewBox="0 0 115 106" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M106.086 91.4077L100.833 55.66C100.55 52.8339 103.716 52.0029 105.463 53.2689L124.324 67.2937C125.4 68.1307 126.397 68.0712 127.303 66.9973L135.042 56.5664C135.823 55.447 135.614 54.446 134.405 53.5642L109.907 35.6353C95.5155 25.8045 80.6374 32.5392 85.4939 68.2064L86.2209 74.0435L89.1649 94.0585C89.4705 95.3921 90.2677 96.0919 91.7915 95.8624L104.502 93.9926C105.704 93.7899 106.271 92.5765 106.093 91.4107L106.086 91.4077Z" fill="#414141" fill-opacity="0.08"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22.294 10.2367L55.8806 23.5615C58.4723 24.7285 57.6065 27.8863 55.6358 28.7676L34.0601 38.0869C32.7995 38.5991 32.3526 39.4888 32.8305 40.8135L37.9942 52.7311C38.5727 53.9663 39.5453 54.282 40.914 53.6833L68.6898 41.4331C84.3997 33.8848 86.0062 17.6336 52.6897 4.00151L47.2721 1.71222L28.4667 -5.74905C27.1592 -6.14682 26.1508 -5.81059 25.5941 -4.37641L20.8572 7.56767C20.4311 8.70801 21.2022 9.80833 22.2977 10.2381L22.294 10.2367Z" fill="#414141" fill-opacity="0.08"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M132.521 -25.9461L103.729 -4.11774C101.388 -2.50636 99.1373 -4.8823 99.4009 -7.02212L102.606 -30.3043C102.818 -31.6469 102.292 -32.4935 100.91 -32.7697L88.042 -34.5278C86.6853 -34.6727 85.908 -34.006 85.716 -32.5211L81.8098 -2.41592C80.1284 14.9302 93.1994 24.7212 122.116 3.28446L126.88 -0.164992L143.002 -12.3853C144.02 -13.2973 144.253 -14.3332 143.315 -15.5566L135.555 -25.7964C134.799 -26.752 133.462 -26.6642 132.525 -25.9446L132.521 -25.9461Z" fill="#414141" fill-opacity="0.08"/>
                    </svg>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" data-category="Kuis" data-course="Bahasa Pemrograman" data-year="2024" data-type="Pilihan ganda">
                <div class="card-body">
                    <span class="icon-placeholder" onclick="toggleActions(this)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                            <path d="M11.084 3.95833C11.084 3.0875 10.3715 2.375 9.50065 2.375C8.62982 2.375 7.91732 3.0875 7.91732 3.95833C7.91732 4.82917 8.62982 5.54167 9.50065 5.54167C10.3715 5.54167 11.084 4.82917 11.084 3.95833ZM11.084 15.0417C11.084 14.1708 10.3715 13.4583 9.50065 13.4583C8.62982 13.4583 7.91732 14.1708 7.91732 15.0417C7.91732 15.9125 8.62982 16.625 9.50065 16.625C10.3715 16.625 11.084 15.9125 11.084 15.0417ZM11.084 9.5C11.084 8.62917 10.3715 7.91667 9.50065 7.91667C8.62982 7.91667 7.91732 8.62917 7.91732 9.5C7.91732 10.3708 8.62982 11.0833 9.50065 11.0833C10.3715 11.0833 11.084 10.3708 11.084 9.5Z" fill="black"/>
                        </svg>
                    </span>
                    <div class="popup-menu">
                        <p class="popup-menu-item" onclick="window.location.href='{{ route('admin.soal.edit') }}'">Edit</p>
                        <p class="popup-menu-item">Hapus</p>
                    </div>
                    <div class="question-container">
                        <div class="title-container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="25" viewBox="0 0 19 25" fill="none">
                                <path d="M4.4375 6.59375H7.8125M4.4375 12.5H14.5625M4.4375 15.875H14.5625M4.4375 19.25H7.8125M2.75 23.4687H16.25C16.6976 23.4687 17.1268 23.291 17.4432 22.9745C17.7597 22.658 17.9375 22.2288 17.9375 21.7812V3.21875C17.9375 2.7712 17.7597 2.34197 17.4432 2.02551C17.1268 1.70904 16.6976 1.53125 16.25 1.53125H2.75C2.30245 1.53125 1.87322 1.70904 1.55676 2.02551C1.24029 2.34197 1.0625 2.7712 1.0625 3.21875V21.7812C1.0625 22.2288 1.24029 22.658 1.55676 22.9745C1.87322 23.291 2.30245 23.4687 2.75 23.4687Z" stroke="#0056D2" stroke-width="1.32453" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14.5625 7.01562C14.7955 7.01562 14.9844 6.82675 14.9844 6.59375C14.9844 6.36075 14.7955 6.17188 14.5625 6.17188C14.3295 6.17188 14.1406 6.36075 14.1406 6.59375C14.1406 6.82675 14.3295 7.01562 14.5625 7.01562Z" fill="black" stroke="#0056D2" stroke-width="0.413915"/>
                            </svg>
                            <h6 class="question-title">Soal Kuis 2</h6>
                        </div>
                        <p class="question-info">10 soal</p>
                    </div>
                    <div class="info-container">
                        <p class="question-category">Pemrograman Kotlin untuk Menengah</p>
                        <p class="question-type">Pilihan ganda</p>
                    </div>
                    <svg  class="icon-background" xmlns="http://www.w3.org/2000/svg" width="115" height="106" viewBox="0 0 115 106" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M106.086 91.4077L100.833 55.66C100.55 52.8339 103.716 52.0029 105.463 53.2689L124.324 67.2937C125.4 68.1307 126.397 68.0712 127.303 66.9973L135.042 56.5664C135.823 55.447 135.614 54.446 134.405 53.5642L109.907 35.6353C95.5155 25.8045 80.6374 32.5392 85.4939 68.2064L86.2209 74.0435L89.1649 94.0585C89.4705 95.3921 90.2677 96.0919 91.7915 95.8624L104.502 93.9926C105.704 93.7899 106.271 92.5765 106.093 91.4107L106.086 91.4077Z" fill="#414141" fill-opacity="0.08"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22.294 10.2367L55.8806 23.5615C58.4723 24.7285 57.6065 27.8863 55.6358 28.7676L34.0601 38.0869C32.7995 38.5991 32.3526 39.4888 32.8305 40.8135L37.9942 52.7311C38.5727 53.9663 39.5453 54.282 40.914 53.6833L68.6898 41.4331C84.3997 33.8848 86.0062 17.6336 52.6897 4.00151L47.2721 1.71222L28.4667 -5.74905C27.1592 -6.14682 26.1508 -5.81059 25.5941 -4.37641L20.8572 7.56767C20.4311 8.70801 21.2022 9.80833 22.2977 10.2381L22.294 10.2367Z" fill="#414141" fill-opacity="0.08"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M132.521 -25.9461L103.729 -4.11774C101.388 -2.50636 99.1373 -4.8823 99.4009 -7.02212L102.606 -30.3043C102.818 -31.6469 102.292 -32.4935 100.91 -32.7697L88.042 -34.5278C86.6853 -34.6727 85.908 -34.006 85.716 -32.5211L81.8098 -2.41592C80.1284 14.9302 93.1994 24.7212 122.116 3.28446L126.88 -0.164992L143.002 -12.3853C144.02 -13.2973 144.253 -14.3332 143.315 -15.5566L135.555 -25.7964C134.799 -26.752 133.462 -26.6642 132.525 -25.9446L132.521 -25.9461Z" fill="#414141" fill-opacity="0.08"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" data-category="Ujian" data-course="Bahasa Pemrograman" data-year="2024" data-type="Esai">
                <div class="card-body">
                    <span class="icon-placeholder" onclick="toggleActions(this)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                            <path d="M11.084 3.95833C11.084 3.0875 10.3715 2.375 9.50065 2.375C8.62982 2.375 7.91732 3.0875 7.91732 3.95833C7.91732 4.82917 8.62982 5.54167 9.50065 5.54167C10.3715 5.54167 11.084 4.82917 11.084 3.95833ZM11.084 15.0417C11.084 14.1708 10.3715 13.4583 9.50065 13.4583C8.62982 13.4583 7.91732 14.1708 7.91732 15.0417C7.91732 15.9125 8.62982 16.625 9.50065 16.625C10.3715 16.625 11.084 15.9125 11.084 15.0417ZM11.084 9.5C11.084 8.62917 10.3715 7.91667 9.50065 7.91667C8.62982 7.91667 7.91732 8.62917 7.91732 9.5C7.91732 10.3708 8.62982 11.0833 9.50065 11.0833C10.3715 11.0833 11.084 10.3708 11.084 9.5Z" fill="black"/>
                        </svg>
                    </span>
                    <div class="popup-menu">
                        <p class="popup-menu-item" onclick="window.location.href='{{ route('admin.soal.edit') }}'">Edit</p>
                        <p class="popup-menu-item">Hapus</p>
                    </div>
                    <div class="question-container">
                        <div class="title-container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="25" viewBox="0 0 19 25" fill="none">
                                <path d="M4.4375 6.59375H7.8125M4.4375 12.5H14.5625M4.4375 15.875H14.5625M4.4375 19.25H7.8125M2.75 23.4687H16.25C16.6976 23.4687 17.1268 23.291 17.4432 22.9745C17.7597 22.658 17.9375 22.2288 17.9375 21.7812V3.21875C17.9375 2.7712 17.7597 2.34197 17.4432 2.02551C17.1268 1.70904 16.6976 1.53125 16.25 1.53125H2.75C2.30245 1.53125 1.87322 1.70904 1.55676 2.02551C1.24029 2.34197 1.0625 2.7712 1.0625 3.21875V21.7812C1.0625 22.2288 1.24029 22.658 1.55676 22.9745C1.87322 23.291 2.30245 23.4687 2.75 23.4687Z" stroke="#0056D2" stroke-width="1.32453" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14.5625 7.01562C14.7955 7.01562 14.9844 6.82675 14.9844 6.59375C14.9844 6.36075 14.7955 6.17188 14.5625 6.17188C14.3295 6.17188 14.1406 6.36075 14.1406 6.59375C14.1406 6.82675 14.3295 7.01562 14.5625 7.01562Z" fill="black" stroke="#0056D2" stroke-width="0.413915"/>
                            </svg>
                            <h6 class="question-title">Soal Ujian</h6>
                        </div>
                        <p class="question-info">20 soal</p>
                    </div>
                    <div class="info-container">
                        <p class="question-category">Pemrograman Visual C# untuk Menengah</p>
                        <p class="question-type">Esai</p>
                    </div>
                    <svg  class="icon-background" xmlns="http://www.w3.org/2000/svg" width="115" height="106" viewBox="0 0 115 106" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M106.086 91.4077L100.833 55.66C100.55 52.8339 103.716 52.0029 105.463 53.2689L124.324 67.2937C125.4 68.1307 126.397 68.0712 127.303 66.9973L135.042 56.5664C135.823 55.447 135.614 54.446 134.405 53.5642L109.907 35.6353C95.5155 25.8045 80.6374 32.5392 85.4939 68.2064L86.2209 74.0435L89.1649 94.0585C89.4705 95.3921 90.2677 96.0919 91.7915 95.8624L104.502 93.9926C105.704 93.7899 106.271 92.5765 106.093 91.4107L106.086 91.4077Z" fill="#414141" fill-opacity="0.08"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22.294 10.2367L55.8806 23.5615C58.4723 24.7285 57.6065 27.8863 55.6358 28.7676L34.0601 38.0869C32.7995 38.5991 32.3526 39.4888 32.8305 40.8135L37.9942 52.7311C38.5727 53.9663 39.5453 54.282 40.914 53.6833L68.6898 41.4331C84.3997 33.8848 86.0062 17.6336 52.6897 4.00151L47.2721 1.71222L28.4667 -5.74905C27.1592 -6.14682 26.1508 -5.81059 25.5941 -4.37641L20.8572 7.56767C20.4311 8.70801 21.2022 9.80833 22.2977 10.2381L22.294 10.2367Z" fill="#414141" fill-opacity="0.08"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M132.521 -25.9461L103.729 -4.11774C101.388 -2.50636 99.1373 -4.8823 99.4009 -7.02212L102.606 -30.3043C102.818 -31.6469 102.292 -32.4935 100.91 -32.7697L88.042 -34.5278C86.6853 -34.6727 85.908 -34.006 85.716 -32.5211L81.8098 -2.41592C80.1284 14.9302 93.1994 24.7212 122.116 3.28446L126.88 -0.164992L143.002 -12.3853C144.02 -13.2973 144.253 -14.3332 143.315 -15.5566L135.555 -25.7964C134.799 -26.752 133.462 -26.6642 132.525 -25.9446L132.521 -25.9461Z" fill="#414141" fill-opacity="0.08"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" data-category="Ujian" data-course="Bahasa Pemrograman" data-year="2023" data-type="Pilihan ganda">
                <div class="card-body">
                    <span class="icon-placeholder" onclick="toggleActions(this)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                            <path d="M11.084 3.95833C11.084 3.0875 10.3715 2.375 9.50065 2.375C8.62982 2.375 7.91732 3.0875 7.91732 3.95833C7.91732 4.82917 8.62982 5.54167 9.50065 5.54167C10.3715 5.54167 11.084 4.82917 11.084 3.95833ZM11.084 15.0417C11.084 14.1708 10.3715 13.4583 9.50065 13.4583C8.62982 13.4583 7.91732 14.1708 7.91732 15.0417C7.91732 15.9125 8.62982 16.625 9.50065 16.625C10.3715 16.625 11.084 15.9125 11.084 15.0417ZM11.084 9.5C11.084 8.62917 10.3715 7.91667 9.50065 7.91667C8.62982 7.91667 7.91732 8.62917 7.91732 9.5C7.91732 10.3708 8.62982 11.0833 9.50065 11.0833C10.3715 11.0833 11.084 10.3708 11.084 9.5Z" fill="black"/>
                        </svg>
                    </span>
                    <div class="popup-menu">
                        <p class="popup-menu-item" onclick="window.location.href='{{ route('admin.soal.edit') }}'">Edit</p>
                        <p class="popup-menu-item">Hapus</p>
                    </div>
                    <div class="question-container">
                        <div class="title-container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="25" viewBox="0 0 19 25" fill="none">
                                <path d="M4.4375 6.59375H7.8125M4.4375 12.5H14.5625M4.4375 15.875H14.5625M4.4375 19.25H7.8125M2.75 23.4687H16.25C16.6976 23.4687 17.1268 23.291 17.4432 22.9745C17.7597 22.658 17.9375 22.2288 17.9375 21.7812V3.21875C17.9375 2.7712 17.7597 2.34197 17.4432 2.02551C17.1268 1.70904 16.6976 1.53125 16.25 1.53125H2.75C2.30245 1.53125 1.87322 1.70904 1.55676 2.02551C1.24029 2.34197 1.0625 2.7712 1.0625 3.21875V21.7812C1.0625 22.2288 1.24029 22.658 1.55676 22.9745C1.87322 23.291 2.30245 23.4687 2.75 23.4687Z" stroke="#0056D2" stroke-width="1.32453" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14.5625 7.01562C14.7955 7.01562 14.9844 6.82675 14.9844 6.59375C14.9844 6.36075 14.7955 6.17188 14.5625 6.17188C14.3295 6.17188 14.1406 6.36075 14.1406 6.59375C14.1406 6.82675 14.3295 7.01562 14.5625 7.01562Z" fill="black" stroke="#0056D2" stroke-width="0.413915"/>
                            </svg>
                            <h6 class="question-title">Soal Ujian</h6>
                        </div>
                        <p class="question-info">10 soal</p>
                    </div>
                    <div class="info-container">
                        <p class="question-category">Flutter dan Dart untuk Pemula</p>
                        <p class="question-type">Pilihan ganda</p>
                    </div>
                    <svg  class="icon-background" xmlns="http://www.w3.org/2000/svg" width="115" height="106" viewBox="0 0 115 106" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M106.086 91.4077L100.833 55.66C100.55 52.8339 103.716 52.0029 105.463 53.2689L124.324 67.2937C125.4 68.1307 126.397 68.0712 127.303 66.9973L135.042 56.5664C135.823 55.447 135.614 54.446 134.405 53.5642L109.907 35.6353C95.5155 25.8045 80.6374 32.5392 85.4939 68.2064L86.2209 74.0435L89.1649 94.0585C89.4705 95.3921 90.2677 96.0919 91.7915 95.8624L104.502 93.9926C105.704 93.7899 106.271 92.5765 106.093 91.4107L106.086 91.4077Z" fill="#414141" fill-opacity="0.08"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22.294 10.2367L55.8806 23.5615C58.4723 24.7285 57.6065 27.8863 55.6358 28.7676L34.0601 38.0869C32.7995 38.5991 32.3526 39.4888 32.8305 40.8135L37.9942 52.7311C38.5727 53.9663 39.5453 54.282 40.914 53.6833L68.6898 41.4331C84.3997 33.8848 86.0062 17.6336 52.6897 4.00151L47.2721 1.71222L28.4667 -5.74905C27.1592 -6.14682 26.1508 -5.81059 25.5941 -4.37641L20.8572 7.56767C20.4311 8.70801 21.2022 9.80833 22.2977 10.2381L22.294 10.2367Z" fill="#414141" fill-opacity="0.08"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M132.521 -25.9461L103.729 -4.11774C101.388 -2.50636 99.1373 -4.8823 99.4009 -7.02212L102.606 -30.3043C102.818 -31.6469 102.292 -32.4935 100.91 -32.7697L88.042 -34.5278C86.6853 -34.6727 85.908 -34.006 85.716 -32.5211L81.8098 -2.41592C80.1284 14.9302 93.1994 24.7212 122.116 3.28446L126.88 -0.164992L143.002 -12.3853C144.02 -13.2973 144.253 -14.3332 143.315 -15.5566L135.555 -25.7964C134.799 -26.752 133.462 -26.6642 132.525 -25.9446L132.521 -25.9461Z" fill="#414141" fill-opacity="0.08"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" data-category="Kuis" data-course="Bahasa Pemrograman" data-year="2022" data-type="Pilihan ganda">
                <div class="card-body">
                    <span class="icon-placeholder" onclick="toggleActions(this)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                            <path d="M11.084 3.95833C11.084 3.0875 10.3715 2.375 9.50065 2.375C8.62982 2.375 7.91732 3.0875 7.91732 3.95833C7.91732 4.82917 8.62982 5.54167 9.50065 5.54167C10.3715 5.54167 11.084 4.82917 11.084 3.95833ZM11.084 15.0417C11.084 14.1708 10.3715 13.4583 9.50065 13.4583C8.62982 13.4583 7.91732 14.1708 7.91732 15.0417C7.91732 15.9125 8.62982 16.625 9.50065 16.625C10.3715 16.625 11.084 15.9125 11.084 15.0417ZM11.084 9.5C11.084 8.62917 10.3715 7.91667 9.50065 7.91667C8.62982 7.91667 7.91732 8.62917 7.91732 9.5C7.91732 10.3708 8.62982 11.0833 9.50065 11.0833C10.3715 11.0833 11.084 10.3708 11.084 9.5Z" fill="black"/>
                        </svg>
                    </span>
                    <div class="popup-menu">
                        <p class="popup-menu-item" onclick="window.location.href='{{ route('admin.soal.edit') }}'">Edit</p>
                        <p class="popup-menu-item">Hapus</p>
                    </div>
                    <div class="question-container">
                        <div class="title-container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="25" viewBox="0 0 19 25" fill="none">
                                <path d="M4.4375 6.59375H7.8125M4.4375 12.5H14.5625M4.4375 15.875H14.5625M4.4375 19.25H7.8125M2.75 23.4687H16.25C16.6976 23.4687 17.1268 23.291 17.4432 22.9745C17.7597 22.658 17.9375 22.2288 17.9375 21.7812V3.21875C17.9375 2.7712 17.7597 2.34197 17.4432 2.02551C17.1268 1.70904 16.6976 1.53125 16.25 1.53125H2.75C2.30245 1.53125 1.87322 1.70904 1.55676 2.02551C1.24029 2.34197 1.0625 2.7712 1.0625 3.21875V21.7812C1.0625 22.2288 1.24029 22.658 1.55676 22.9745C1.87322 23.291 2.30245 23.4687 2.75 23.4687Z" stroke="#0056D2" stroke-width="1.32453" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14.5625 7.01562C14.7955 7.01562 14.9844 6.82675 14.9844 6.59375C14.9844 6.36075 14.7955 6.17188 14.5625 6.17188C14.3295 6.17188 14.1406 6.36075 14.1406 6.59375C14.1406 6.82675 14.3295 7.01562 14.5625 7.01562Z" fill="black" stroke="#0056D2" stroke-width="0.413915"/>
                            </svg>
                            <h6 class="question-title">Soal Kuis 1</h6>
                        </div>
                        <p class="question-info">15 soal</p>
                    </div>
                    <div class="info-container">
                        <p class="question-category">Laravel untuk Menengah</p>
                        <p class="question-type">Pilihan ganda</p>
                    </div>
                    <svg  class="icon-background" xmlns="http://www.w3.org/2000/svg" width="115" height="106" viewBox="0 0 115 106" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M106.086 91.4077L100.833 55.66C100.55 52.8339 103.716 52.0029 105.463 53.2689L124.324 67.2937C125.4 68.1307 126.397 68.0712 127.303 66.9973L135.042 56.5664C135.823 55.447 135.614 54.446 134.405 53.5642L109.907 35.6353C95.5155 25.8045 80.6374 32.5392 85.4939 68.2064L86.2209 74.0435L89.1649 94.0585C89.4705 95.3921 90.2677 96.0919 91.7915 95.8624L104.502 93.9926C105.704 93.7899 106.271 92.5765 106.093 91.4107L106.086 91.4077Z" fill="#414141" fill-opacity="0.08"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22.294 10.2367L55.8806 23.5615C58.4723 24.7285 57.6065 27.8863 55.6358 28.7676L34.0601 38.0869C32.7995 38.5991 32.3526 39.4888 32.8305 40.8135L37.9942 52.7311C38.5727 53.9663 39.5453 54.282 40.914 53.6833L68.6898 41.4331C84.3997 33.8848 86.0062 17.6336 52.6897 4.00151L47.2721 1.71222L28.4667 -5.74905C27.1592 -6.14682 26.1508 -5.81059 25.5941 -4.37641L20.8572 7.56767C20.4311 8.70801 21.2022 9.80833 22.2977 10.2381L22.294 10.2367Z" fill="#414141" fill-opacity="0.08"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M132.521 -25.9461L103.729 -4.11774C101.388 -2.50636 99.1373 -4.8823 99.4009 -7.02212L102.606 -30.3043C102.818 -31.6469 102.292 -32.4935 100.91 -32.7697L88.042 -34.5278C86.6853 -34.6727 85.908 -34.006 85.716 -32.5211L81.8098 -2.41592C80.1284 14.9302 93.1994 24.7212 122.116 3.28446L126.88 -0.164992L143.002 -12.3853C144.02 -13.2973 144.253 -14.3332 143.315 -15.5566L135.555 -25.7964C134.799 -26.752 133.462 -26.6642 132.525 -25.9446L132.521 -25.9461Z" fill="#414141" fill-opacity="0.08"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" data-category="Ujian" data-course="Bahasa Pemrograman" data-year="2024" data-type="Esai">
                <div class="card-body">
                    <span class="icon-placeholder" onclick="toggleActions(this)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                            <path d="M11.084 3.95833C11.084 3.0875 10.3715 2.375 9.50065 2.375C8.62982 2.375 7.91732 3.0875 7.91732 3.95833C7.91732 4.82917 8.62982 5.54167 9.50065 5.54167C10.3715 5.54167 11.084 4.82917 11.084 3.95833ZM11.084 15.0417C11.084 14.1708 10.3715 13.4583 9.50065 13.4583C8.62982 13.4583 7.91732 14.1708 7.91732 15.0417C7.91732 15.9125 8.62982 16.625 9.50065 16.625C10.3715 16.625 11.084 15.9125 11.084 15.0417ZM11.084 9.5C11.084 8.62917 10.3715 7.91667 9.50065 7.91667C8.62982 7.91667 7.91732 8.62917 7.91732 9.5C7.91732 10.3708 8.62982 11.0833 9.50065 11.0833C10.3715 11.0833 11.084 10.3708 11.084 9.5Z" fill="black"/>
                        </svg>
                    </span>
                    <div class="popup-menu">
                        <p class="popup-menu-item" onclick="window.location.href='{{ route('admin.soal.edit') }}'">Edit</p>
                        <p class="popup-menu-item">Hapus</p>
                    </div>
                    <div class="question-container">
                        <div class="title-container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="25" viewBox="0 0 19 25" fill="none">
                                <path d="M4.4375 6.59375H7.8125M4.4375 12.5H14.5625M4.4375 15.875H14.5625M4.4375 19.25H7.8125M2.75 23.4687H16.25C16.6976 23.4687 17.1268 23.291 17.4432 22.9745C17.7597 22.658 17.9375 22.2288 17.9375 21.7812V3.21875C17.9375 2.7712 17.7597 2.34197 17.4432 2.02551C17.1268 1.70904 16.6976 1.53125 16.25 1.53125H2.75C2.30245 1.53125 1.87322 1.70904 1.55676 2.02551C1.24029 2.34197 1.0625 2.7712 1.0625 3.21875V21.7812C1.0625 22.2288 1.24029 22.658 1.55676 22.9745C1.87322 23.291 2.30245 23.4687 2.75 23.4687Z" stroke="#0056D2" stroke-width="1.32453" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14.5625 7.01562C14.7955 7.01562 14.9844 6.82675 14.9844 6.59375C14.9844 6.36075 14.7955 6.17188 14.5625 6.17188C14.3295 6.17188 14.1406 6.36075 14.1406 6.59375C14.1406 6.82675 14.3295 7.01562 14.5625 7.01562Z" fill="black" stroke="#0056D2" stroke-width="0.413915"/>
                            </svg>
                            <h6 class="question-title">Soal Ujian</h6>
                        </div>
                        <p class="question-info">20 soal</p>
                    </div>
                    <div class="info-container">
                        <p class="question-category">Vue JS untuk Menengah</p>
                        <p class="question-type">Esai</p>
                    </div>
                    <svg  class="icon-background" xmlns="http://www.w3.org/2000/svg" width="115" height="106" viewBox="0 0 115 106" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M106.086 91.4077L100.833 55.66C100.55 52.8339 103.716 52.0029 105.463 53.2689L124.324 67.2937C125.4 68.1307 126.397 68.0712 127.303 66.9973L135.042 56.5664C135.823 55.447 135.614 54.446 134.405 53.5642L109.907 35.6353C95.5155 25.8045 80.6374 32.5392 85.4939 68.2064L86.2209 74.0435L89.1649 94.0585C89.4705 95.3921 90.2677 96.0919 91.7915 95.8624L104.502 93.9926C105.704 93.7899 106.271 92.5765 106.093 91.4107L106.086 91.4077Z" fill="#414141" fill-opacity="0.08"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22.294 10.2367L55.8806 23.5615C58.4723 24.7285 57.6065 27.8863 55.6358 28.7676L34.0601 38.0869C32.7995 38.5991 32.3526 39.4888 32.8305 40.8135L37.9942 52.7311C38.5727 53.9663 39.5453 54.282 40.914 53.6833L68.6898 41.4331C84.3997 33.8848 86.0062 17.6336 52.6897 4.00151L47.2721 1.71222L28.4667 -5.74905C27.1592 -6.14682 26.1508 -5.81059 25.5941 -4.37641L20.8572 7.56767C20.4311 8.70801 21.2022 9.80833 22.2977 10.2381L22.294 10.2367Z" fill="#414141" fill-opacity="0.08"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M132.521 -25.9461L103.729 -4.11774C101.388 -2.50636 99.1373 -4.8823 99.4009 -7.02212L102.606 -30.3043C102.818 -31.6469 102.292 -32.4935 100.91 -32.7697L88.042 -34.5278C86.6853 -34.6727 85.908 -34.006 85.716 -32.5211L81.8098 -2.41592C80.1284 14.9302 93.1994 24.7212 122.116 3.28446L126.88 -0.164992L143.002 -12.3853C144.02 -13.2973 144.253 -14.3332 143.315 -15.5566L135.555 -25.7964C134.799 -26.752 133.462 -26.6642 132.525 -25.9446L132.521 -25.9461Z" fill="#414141" fill-opacity="0.08"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" data-category="Ujian" data-course="Bahasa Pemrograman" data-year="2023" data-type="Esai"   >
                <div class="card-body">
                    <span class="icon-placeholder" onclick="toggleActions(this)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                            <path d="M11.084 3.95833C11.084 3.0875 10.3715 2.375 9.50065 2.375C8.62982 2.375 7.91732 3.0875 7.91732 3.95833C7.91732 4.82917 8.62982 5.54167 9.50065 5.54167C10.3715 5.54167 11.084 4.82917 11.084 3.95833ZM11.084 15.0417C11.084 14.1708 10.3715 13.4583 9.50065 13.4583C8.62982 13.4583 7.91732 14.1708 7.91732 15.0417C7.91732 15.9125 8.62982 16.625 9.50065 16.625C10.3715 16.625 11.084 15.9125 11.084 15.0417ZM11.084 9.5C11.084 8.62917 10.3715 7.91667 9.50065 7.91667C8.62982 7.91667 7.91732 8.62917 7.91732 9.5C7.91732 10.3708 8.62982 11.0833 9.50065 11.0833C10.3715 11.0833 11.084 10.3708 11.084 9.5Z" fill="black"/>
                        </svg>
                    </span>
                    <div class="popup-menu">
                        <p class="popup-menu-item" onclick="window.location.href='{{ route('admin.soal.edit') }}'">Edit</p>
                        <p class="popup-menu-item">Hapus</p>
                    </div>
                    <div class="question-container">
                        <div class="title-container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="25" viewBox="0 0 19 25" fill="none">
                                <path d="M4.4375 6.59375H7.8125M4.4375 12.5H14.5625M4.4375 15.875H14.5625M4.4375 19.25H7.8125M2.75 23.4687H16.25C16.6976 23.4687 17.1268 23.291 17.4432 22.9745C17.7597 22.658 17.9375 22.2288 17.9375 21.7812V3.21875C17.9375 2.7712 17.7597 2.34197 17.4432 2.02551C17.1268 1.70904 16.6976 1.53125 16.25 1.53125H2.75C2.30245 1.53125 1.87322 1.70904 1.55676 2.02551C1.24029 2.34197 1.0625 2.7712 1.0625 3.21875V21.7812C1.0625 22.2288 1.24029 22.658 1.55676 22.9745C1.87322 23.291 2.30245 23.4687 2.75 23.4687Z" stroke="#0056D2" stroke-width="1.32453" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14.5625 7.01562C14.7955 7.01562 14.9844 6.82675 14.9844 6.59375C14.9844 6.36075 14.7955 6.17188 14.5625 6.17188C14.3295 6.17188 14.1406 6.36075 14.1406 6.59375C14.1406 6.82675 14.3295 7.01562 14.5625 7.01562Z" fill="black" stroke="#0056D2" stroke-width="0.413915"/>
                            </svg>
                            <h6 class="question-title">Soal Ujian</h6>
                        </div>
                        <p class="question-info">25 soal</p>
                    </div>
                    <div class="info-container">
                        <p class="question-category">Pemrograman Swift untuk Menengah</p>
                        <p class="question-type">Esai</p>
                    </div>
                    <svg  class="icon-background" xmlns="http://www.w3.org/2000/svg" width="115" height="106" viewBox="0 0 115 106" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M106.086 91.4077L100.833 55.66C100.55 52.8339 103.716 52.0029 105.463 53.2689L124.324 67.2937C125.4 68.1307 126.397 68.0712 127.303 66.9973L135.042 56.5664C135.823 55.447 135.614 54.446 134.405 53.5642L109.907 35.6353C95.5155 25.8045 80.6374 32.5392 85.4939 68.2064L86.2209 74.0435L89.1649 94.0585C89.4705 95.3921 90.2677 96.0919 91.7915 95.8624L104.502 93.9926C105.704 93.7899 106.271 92.5765 106.093 91.4107L106.086 91.4077Z" fill="#414141" fill-opacity="0.08"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22.294 10.2367L55.8806 23.5615C58.4723 24.7285 57.6065 27.8863 55.6358 28.7676L34.0601 38.0869C32.7995 38.5991 32.3526 39.4888 32.8305 40.8135L37.9942 52.7311C38.5727 53.9663 39.5453 54.282 40.914 53.6833L68.6898 41.4331C84.3997 33.8848 86.0062 17.6336 52.6897 4.00151L47.2721 1.71222L28.4667 -5.74905C27.1592 -6.14682 26.1508 -5.81059 25.5941 -4.37641L20.8572 7.56767C20.4311 8.70801 21.2022 9.80833 22.2977 10.2381L22.294 10.2367Z" fill="#414141" fill-opacity="0.08"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M132.521 -25.9461L103.729 -4.11774C101.388 -2.50636 99.1373 -4.8823 99.4009 -7.02212L102.606 -30.3043C102.818 -31.6469 102.292 -32.4935 100.91 -32.7697L88.042 -34.5278C86.6853 -34.6727 85.908 -34.006 85.716 -32.5211L81.8098 -2.41592C80.1284 14.9302 93.1994 24.7212 122.116 3.28446L126.88 -0.164992L143.002 -12.3853C144.02 -13.2973 144.253 -14.3332 143.315 -15.5566L135.555 -25.7964C134.799 -26.752 133.462 -26.6642 132.525 -25.9446L132.521 -25.9461Z" fill="#414141" fill-opacity="0.08"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" data-category="Ujian" data-course="Bahasa" data-year="2022" data-type="Esai"   >
                <div class="card-body">
                    <span class="icon-placeholder" onclick="toggleActions(this)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                            <path d="M11.084 3.95833C11.084 3.0875 10.3715 2.375 9.50065 2.375C8.62982 2.375 7.91732 3.0875 7.91732 3.95833C7.91732 4.82917 8.62982 5.54167 9.50065 5.54167C10.3715 5.54167 11.084 4.82917 11.084 3.95833ZM11.084 15.0417C11.084 14.1708 10.3715 13.4583 9.50065 13.4583C8.62982 13.4583 7.91732 14.1708 7.91732 15.0417C7.91732 15.9125 8.62982 16.625 9.50065 16.625C10.3715 16.625 11.084 15.9125 11.084 15.0417ZM11.084 9.5C11.084 8.62917 10.3715 7.91667 9.50065 7.91667C8.62982 7.91667 7.91732 8.62917 7.91732 9.5C7.91732 10.3708 8.62982 11.0833 9.50065 11.0833C10.3715 11.0833 11.084 10.3708 11.084 9.5Z" fill="black"/>
                        </svg>
                    </span>
                    <div class="popup-menu">
                        <p class="popup-menu-item" onclick="window.location.href='{{ route('admin.soal.edit') }}'">Edit</p>
                        <p class="popup-menu-item">Hapus</p>
                    </div>
                    <div class="question-container">
                        <div class="title-container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="25" viewBox="0 0 19 25" fill="none">
                                <path d="M4.4375 6.59375H7.8125M4.4375 12.5H14.5625M4.4375 15.875H14.5625M4.4375 19.25H7.8125M2.75 23.4687H16.25C16.6976 23.4687 17.1268 23.291 17.4432 22.9745C17.7597 22.658 17.9375 22.2288 17.9375 21.7812V3.21875C17.9375 2.7712 17.7597 2.34197 17.4432 2.02551C17.1268 1.70904 16.6976 1.53125 16.25 1.53125H2.75C2.30245 1.53125 1.87322 1.70904 1.55676 2.02551C1.24029 2.34197 1.0625 2.7712 1.0625 3.21875V21.7812C1.0625 22.2288 1.24029 22.658 1.55676 22.9745C1.87322 23.291 2.30245 23.4687 2.75 23.4687Z" stroke="#0056D2" stroke-width="1.32453" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14.5625 7.01562C14.7955 7.01562 14.9844 6.82675 14.9844 6.59375C14.9844 6.36075 14.7955 6.17188 14.5625 6.17188C14.3295 6.17188 14.1406 6.36075 14.1406 6.59375C14.1406 6.82675 14.3295 7.01562 14.5625 7.01562Z" fill="black" stroke="#0056D2" stroke-width="0.413915"/>
                            </svg>
                            <h6 class="question-title">Soal Ujian</h6>
                        </div>
                        <p class="question-info">25 soal</p>
                    </div>
                    <div class="info-container">
                        <p class="question-category">Bahasa Jepang N3</p>
                        <p class="question-type">Esai</p>
                    </div>
                    <svg  class="icon-background" xmlns="http://www.w3.org/2000/svg" width="115" height="106" viewBox="0 0 115 106" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M106.086 91.4077L100.833 55.66C100.55 52.8339 103.716 52.0029 105.463 53.2689L124.324 67.2937C125.4 68.1307 126.397 68.0712 127.303 66.9973L135.042 56.5664C135.823 55.447 135.614 54.446 134.405 53.5642L109.907 35.6353C95.5155 25.8045 80.6374 32.5392 85.4939 68.2064L86.2209 74.0435L89.1649 94.0585C89.4705 95.3921 90.2677 96.0919 91.7915 95.8624L104.502 93.9926C105.704 93.7899 106.271 92.5765 106.093 91.4107L106.086 91.4077Z" fill="#414141" fill-opacity="0.08"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22.294 10.2367L55.8806 23.5615C58.4723 24.7285 57.6065 27.8863 55.6358 28.7676L34.0601 38.0869C32.7995 38.5991 32.3526 39.4888 32.8305 40.8135L37.9942 52.7311C38.5727 53.9663 39.5453 54.282 40.914 53.6833L68.6898 41.4331C84.3997 33.8848 86.0062 17.6336 52.6897 4.00151L47.2721 1.71222L28.4667 -5.74905C27.1592 -6.14682 26.1508 -5.81059 25.5941 -4.37641L20.8572 7.56767C20.4311 8.70801 21.2022 9.80833 22.2977 10.2381L22.294 10.2367Z" fill="#414141" fill-opacity="0.08"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M132.521 -25.9461L103.729 -4.11774C101.388 -2.50636 99.1373 -4.8823 99.4009 -7.02212L102.606 -30.3043C102.818 -31.6469 102.292 -32.4935 100.91 -32.7697L88.042 -34.5278C86.6853 -34.6727 85.908 -34.006 85.716 -32.5211L81.8098 -2.41592C80.1284 14.9302 93.1994 24.7212 122.116 3.28446L126.88 -0.164992L143.002 -12.3853C144.02 -13.2973 144.253 -14.3332 143.315 -15.5566L135.555 -25.7964C134.799 -26.752 133.462 -26.6642 132.525 -25.9446L132.521 -25.9461Z" fill="#414141" fill-opacity="0.08"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" data-category="Ujian" data-course="Desain" data-year="2023" data-type="Pilihan ganda"   >
                <div class="card-body">
                    <span class="icon-placeholder" onclick="toggleActions(this)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                            <path d="M11.084 3.95833C11.084 3.0875 10.3715 2.375 9.50065 2.375C8.62982 2.375 7.91732 3.0875 7.91732 3.95833C7.91732 4.82917 8.62982 5.54167 9.50065 5.54167C10.3715 5.54167 11.084 4.82917 11.084 3.95833ZM11.084 15.0417C11.084 14.1708 10.3715 13.4583 9.50065 13.4583C8.62982 13.4583 7.91732 14.1708 7.91732 15.0417C7.91732 15.9125 8.62982 16.625 9.50065 16.625C10.3715 16.625 11.084 15.9125 11.084 15.0417ZM11.084 9.5C11.084 8.62917 10.3715 7.91667 9.50065 7.91667C8.62982 7.91667 7.91732 8.62917 7.91732 9.5C7.91732 10.3708 8.62982 11.0833 9.50065 11.0833C10.3715 11.0833 11.084 10.3708 11.084 9.5Z" fill="black"/>
                        </svg>
                    </span>
                    <div class="popup-menu">
                        <p class="popup-menu-item" onclick="window.location.href='{{ route('admin.soal.edit') }}'">Edit</p>
                        <p class="popup-menu-item">Hapus</p>
                    </div>
                    <div class="question-container">
                        <div class="title-container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="25" viewBox="0 0 19 25" fill="none">
                                <path d="M4.4375 6.59375H7.8125M4.4375 12.5H14.5625M4.4375 15.875H14.5625M4.4375 19.25H7.8125M2.75 23.4687H16.25C16.6976 23.4687 17.1268 23.291 17.4432 22.9745C17.7597 22.658 17.9375 22.2288 17.9375 21.7812V3.21875C17.9375 2.7712 17.7597 2.34197 17.4432 2.02551C17.1268 1.70904 16.6976 1.53125 16.25 1.53125H2.75C2.30245 1.53125 1.87322 1.70904 1.55676 2.02551C1.24029 2.34197 1.0625 2.7712 1.0625 3.21875V21.7812C1.0625 22.2288 1.24029 22.658 1.55676 22.9745C1.87322 23.291 2.30245 23.4687 2.75 23.4687Z" stroke="#0056D2" stroke-width="1.32453" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14.5625 7.01562C14.7955 7.01562 14.9844 6.82675 14.9844 6.59375C14.9844 6.36075 14.7955 6.17188 14.5625 6.17188C14.3295 6.17188 14.1406 6.36075 14.1406 6.59375C14.1406 6.82675 14.3295 7.01562 14.5625 7.01562Z" fill="black" stroke="#0056D2" stroke-width="0.413915"/>
                            </svg>
                            <h6 class="question-title">Soal Kuis 1</h6>
                        </div>
                        <p class="question-info">10 soal</p>
                    </div>
                    <div class="info-container">
                        <p class="question-category">Belajar CorelDraw</p>
                        <p class="question-type">Pilihan ganda</p>
                    </div>
                    <svg  class="icon-background" xmlns="http://www.w3.org/2000/svg" width="115" height="106" viewBox="0 0 115 106" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M106.086 91.4077L100.833 55.66C100.55 52.8339 103.716 52.0029 105.463 53.2689L124.324 67.2937C125.4 68.1307 126.397 68.0712 127.303 66.9973L135.042 56.5664C135.823 55.447 135.614 54.446 134.405 53.5642L109.907 35.6353C95.5155 25.8045 80.6374 32.5392 85.4939 68.2064L86.2209 74.0435L89.1649 94.0585C89.4705 95.3921 90.2677 96.0919 91.7915 95.8624L104.502 93.9926C105.704 93.7899 106.271 92.5765 106.093 91.4107L106.086 91.4077Z" fill="#414141" fill-opacity="0.08"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22.294 10.2367L55.8806 23.5615C58.4723 24.7285 57.6065 27.8863 55.6358 28.7676L34.0601 38.0869C32.7995 38.5991 32.3526 39.4888 32.8305 40.8135L37.9942 52.7311C38.5727 53.9663 39.5453 54.282 40.914 53.6833L68.6898 41.4331C84.3997 33.8848 86.0062 17.6336 52.6897 4.00151L47.2721 1.71222L28.4667 -5.74905C27.1592 -6.14682 26.1508 -5.81059 25.5941 -4.37641L20.8572 7.56767C20.4311 8.70801 21.2022 9.80833 22.2977 10.2381L22.294 10.2367Z" fill="#414141" fill-opacity="0.08"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M132.521 -25.9461L103.729 -4.11774C101.388 -2.50636 99.1373 -4.8823 99.4009 -7.02212L102.606 -30.3043C102.818 -31.6469 102.292 -32.4935 100.91 -32.7697L88.042 -34.5278C86.6853 -34.6727 85.908 -34.006 85.716 -32.5211L81.8098 -2.41592C80.1284 14.9302 93.1994 24.7212 122.116 3.28446L126.88 -0.164992L143.002 -12.3853C144.02 -13.2973 144.253 -14.3332 143.315 -15.5566L135.555 -25.7964C134.799 -26.752 133.462 -26.6642 132.525 -25.9446L132.521 -25.9461Z" fill="#414141" fill-opacity="0.08"/>
                    </svg>
                </div>
            </div>
        </div>
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
#popup {
    display: none;
}

.notification-popup {
    position: absolute;
    top: 70px;
    right: 90px;
    background: white;
    border-radius: 20px;
    padding: 0px;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.15);
    z-index: 1000;
    transition: opacity 0.3s ease;
    height: 129px;
    width: 250px; /* opsional, biar popup lebar bagus */
    display: flex;
    justify-content: center;
    align-items: center;
}

.notification-popup .popup-content {
    font-size: 14px;
    font-weight: 600;
    color: #464F60;
    text-align: center;
    padding: 20px 30px; /* pindahkan padding ke sini */
}

/* Untuk animasi muncul */
.notification-popup.show {
    display: block;
    opacity: 1;
}

.notification-popup.d-none {
    display: none;
    opacity: 0;
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
    width: ;
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
.dropdown-toggle {
    font-weight: normal !important; /* Normal untuk teks dropdown */
}

.dropdown-menu .dropdown-item {

    font-weight: normal !important; /* Normal untuk teks item dalam dropdown */
}

.icon-spacing {
    margin-right: 8px; /* Sesuaikan nilai jarak sesuai kebutuhan */
}
.btn.dropdown-toggle {
    font-size: 12px; /* Mengatur ukuran font */
    font-weight: 500; /* Mengatur ketebalan font */
}
.dropdown-item {
    font-size: 12px; /* Mengatur ukuran font */
    font-weight: 500; /* Mengatur ketebalan font */
}

.card {
    border: none;
    box-shadow: 2px 2px 10px 0px rgba(0, 0, 0, 0.25);
    border-radius: 15px;
    width: 330px;
    height: 143px;
    margin-bottom: 30px; /* Sesuaikan jarak dengan kebutuhan */
}
.card-body {
    position: relative;
}
.col {
    padding-right: 10px; /* Jarak horizontal antar kolom */
    padding-left: 10px; /* Jarak horizontal antar kolom */
}
.svg-clip {
  position: absolute;
  top: 40;
  left: 20;
  width: 100%; /* Sesuaikan dengan ukuran card */
  height: 100%;
  z-index: -1; /* SVG berada di belakang konten */
}
.icon-placeholder {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 24px;
    color: #d3d3d3;
    z-index: 10;
}
.question-info {
    font-size: 12px;
    font-weight: 400;
    color: #4A5568;
    margin-left: 28px;
}
.question-title {
    font-size: 16px;
    font-weight: 600;
    color: #0056D2;
    margin: 0; /* Menghapus margin default */
}
.question-type {
    font-size: 10px;
    font-weight: 400;
    color: #4A5568;
    margin: 0;
}
.question-category {
    font-size: 12px;
    font-weight: 400;
    color: #0056D2;
    margin: 0;
    width: 138px;
}
.question-container {
    display: flex;
    flex-direction: column; /* Menyusun konten vertikal */
    gap: 4px; /* Jarak antar elemen */
}

.title-container {
    display: flex;
    align-items: center; /* Menjaga ikon dan teks sejajar secara vertikal */
    gap: 8px; /* Jarak antara ikon dan teks */
}
.info-container {
    display: flex; /* Mengatur elemen di dalam kontainer agar sejajar horizontal */
    justify-content: space-between; /* Memberikan jarak maksimal antara elemen */
    align-items: center; /* Menjaga elemen sejajar secara vertikal */
    margin-top: 18px;
    row-gap: 8px;
}
.icon-background {
    position: absolute;
    top: 0px; /* Menempatkan SVG di bagian bawah */
    right: 0px; /* Menempatkan SVG di sisi kanan */
    width: 124px;
    height: 124px;
    z-index: 1; /* Menempatkan di belakang teks */
    border-radius: 0 15px 0 0;
    overflow: hidden; /* Membatasi isi di dalam elemen */
}

.popup-menu {
    display: none;
    position: absolute;
    right: 0;
    margin-right: 15px;
    bottom: 25px;
    background-color: #fff;
    box-shadow: 2px 2px 10px 0px rgba(0, 0, 0, 0.25);
    border-radius: 20px 0px 20px 20px;
    z-index: 1000;
    padding: 10px 15px;
    color: #333;
    width: 100px; /* Atur lebar menjadi 80px */
}

.popup-menu p {
    margin: 0;
    padding: 5px 0;
    cursor: pointer;
    font-size: 12px;
    font-weight: 400;
}


</style>
<script>
    // Objek untuk menyimpan nilai filter
    const filters = {
    kategori: 'Semua',
    materi: 'Semua Kategori',
    tahun: 'Semua Tahun',
    tipe: 'Semua Tipe'
};

// Ambil semua kartu dan input search
const cards = document.querySelectorAll('.card');
const searchInput = document.getElementById("searchInput");

// Fungsi untuk memfilter kartu
function applyFilters() {
    const searchValue = searchInput.value.toLowerCase();

    cards.forEach(card => {
        const category = card.getAttribute('data-category').toLowerCase();
        const course = card.getAttribute('data-course').toLowerCase();
        const year = card.getAttribute('data-year').toLowerCase();
        const type = card.getAttribute('data-type').toLowerCase();

        const matchesCategory = filters.kategori === 'Semua' || filters.kategori.toLowerCase() === category;
        const matchesCourse = filters.materi === 'Semua Kategori' || filters.materi.toLowerCase() === course;
        const matchesYear = filters.tahun === 'Semua Tahun' || filters.tahun.toLowerCase() === year;
        const matchesType = filters.tipe === 'Semua Tipe' || filters.tipe.toLowerCase() === type;

        // Pencarian teks
        const matchesSearch = !searchValue ||
            card.querySelector(".question-title").textContent.toLowerCase().includes(searchValue) ||
            card.querySelector(".question-category").textContent.toLowerCase().includes(searchValue);

        // Tampilkan/hide kartu
        if (matchesCategory && matchesCourse && matchesYear && matchesType && matchesSearch) {
            card.parentElement.style.display = 'block';
        } else {
            card.parentElement.style.display = 'none';
        }
    });
}

// Tambahkan event listener pada input search
searchInput.addEventListener("input", applyFilters);

// Ambil semua dropdown di dalam grup
const dropdowns = document.querySelectorAll('.dropdown');

// Tambahkan event listener untuk setiap item dropdown
dropdowns.forEach(dropdown => {
    const button = dropdown.querySelector('button');
    const menuItems = dropdown.querySelectorAll('.dropdown-item');

    menuItems.forEach(item => {
        item.addEventListener('click', (e) => {
            e.preventDefault(); // Mencegah reload halaman jika <a href="#"> digunakan
            button.textContent = item.textContent; // Ubah teks pada tombol dropdown

            // Update nilai filter berdasarkan dropdown yang diubah
            const filterType = button.id.replace('dropdown', '').toLowerCase();
            filters[filterType] = item.textContent.trim();

            // Terapkan filter ke kartu
            applyFilters();
        });
    });
});


function toggleActions(element) {
    const popupMenu = element.nextElementSibling; // Mengambil elemen popup-menu
    if (popupMenu) {
        popupMenu.style.display = popupMenu.style.display === 'block' ? 'none' : 'block';
    }
}

document.addEventListener("DOMContentLoaded", () => {
    const deleteButtons = document.querySelectorAll(".popup-menu-item");

    deleteButtons.forEach(button => {
        if (button.textContent.trim() === "Hapus") {
            button.addEventListener("click", function () {
                const card = this.closest(".col-md-4");
                if (card) {
                    card.remove(); // Menghapus elemen secara langsung
                }
            });
        }
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const btnNotif = document.querySelector(".btn");
    const notifPopup = document.querySelector(".notification-popup");
    const profileImage = document.querySelector("img[onclick='togglePopup()']");
    const profilePopup = document.getElementById("popup");

    // Awalnya semua popup tertutup
    notifPopup.classList.add("d-none");
    profilePopup.style.display = "none";

    btnNotif.addEventListener("click", function(e) {
        e.stopPropagation(); // biar klik tombol gak kena event document
        notifPopup.classList.toggle("d-none");
        notifPopup.classList.toggle("show");

        // Kalau notif dibuka, pastikan popup profile ketutup
        profilePopup.style.display = "none";
    });

    profileImage.addEventListener("click", function(e) {
        e.stopPropagation(); // biar klik image gak kena event document
        if (profilePopup.style.display === "none" || profilePopup.style.display === "") {
            profilePopup.style.display = "block";
        } else {
            profilePopup.style.display = "none";
        }

        // Kalau profile dibuka, pastikan notif popup ketutup
        notifPopup.classList.add("d-none");
        notifPopup.classList.remove("show");
    });

    // Klik di luar semua elemen = semua popup tertutup
    document.addEventListener("click", function(e) {
        notifPopup.classList.add("d-none");
        notifPopup.classList.remove("show");
        profilePopup.style.display = "none";
    });
});


</script>
@endsection
