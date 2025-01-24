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
        <!-- Input judul kursus -->
        <h4 class="mb-0 header-settings">Pengaturan</h4>

        <!-- Tombol dalam flex container -->
        <div class="d-flex align-items-center">
            <!-- Tombol Simpan -->
            <a href="{{ route('admin.kursus.create') }}" class="btn btn-primary me-2" id="saveButton">
                Simpan
            </a>

            <!-- Tombol Cancel -->
            <a href="{{ route('admin.kursus.create') }}" class="btn btn-outline-primary">
                Cancel
            </a>
        </div>
    </div>
    <!-- Notifikasi -->
    <div id="notification" style="
    display: none;
    position: fixed;
    top: 180px;
    right: 20px;
    background-color: #4caf50;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    z-index: 1000;
    ">
    Berhasil disimpan!
    </div>
</div>
<div class="container my-3">
    <h2 class="header-title mb-4">Pengaturan</h2>
    <div class="card">
        <form>
            <div class="row align-items-center custom-label-spacing untuk-spacing-margin">
                <div class="col-md-3">
                    <label for="kuotaPeserta" class="form-label">Kuota Peserta</label>
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control custom-input" id="kuotaPeserta" placeholder="Masukkan kuota" value="9.000">
                </div>
                <div class="col-md-3" style="margin-left: -100px;">
                    <small class="form-text">Peserta</small>
                </div>
            </div>
            <div class="row  align-items-center custom-label-spacing untuk-spacing-margin">
                <div class="col-md-3">
                    <label for="tingkatKesulitan" class="form-label">Tingkat Kesulitan</label>
                </div>
                <div class="col-md-3">
                    <select class="form-select custom-input" id="tingkatKesulitan">
                        <option value="Mudah" selected>Mudah</option>
                        <option value="Sedang">Sedang</option>
                        <option value="Sulit">Sulit</option>
                    </select>
                </div>
            </div>
            <div class="row align-items-center custom-label-spacing untuk-spacing-margin">
                <div class="col-md-3">
                    <label for="forum" class="form-label">Forum</label>
                </div>
                <div class="col-md-3">
                    <select class="form-select custom-input" id="forum">
                        <option value="Aktif" selected>Aktif</option>
                        <option value="Nonaktif">Nonaktif</option>
                    </select>
                </div>
            </div>
            <div>
                <div class="input-container">
                    <label for="kontenModul" class="label-aligned">Ulasan</label>
                    <div class="container custom-margin-top">
                        <div class="card custom-card-style p-3">
                            <div class="review-card" data-rating="5" data-photo="true">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="me-3">
                                        <img src="{{ Vite::asset('resources/images/orang 3.png') }}" alt="Profile Picture" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;">
                                    </div>
                                    <div class="d-flex align-items-center mb-3 review-header">
                                        <h5 class="mb-0 custom-h5">Niko</h5>
                                        <div class="stars-container">
                                            <!-- SVG Star Icon repeated 5 times -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none" class="me-1">
                                                <path d="M3.25793 15.1609L4.44961 10.0091L0.452881 6.54405L5.73297 6.08571L7.78633 1.22729L9.8397 6.08571L15.1198 6.54405L11.1231 10.0091L12.3147 15.1609L7.78633 12.4291L3.25793 15.1609Z" fill="#FF8000"/>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none" class="me-1">
                                                <path d="M3.25793 15.1609L4.44961 10.0091L0.452881 6.54405L5.73297 6.08571L7.78633 1.22729L9.8397 6.08571L15.1198 6.54405L11.1231 10.0091L12.3147 15.1609L7.78633 12.4291L3.25793 15.1609Z" fill="#FF8000"/>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none" class="me-1">
                                                <path d="M3.25793 15.1609L4.44961 10.0091L0.452881 6.54405L5.73297 6.08571L7.78633 1.22729L9.8397 6.08571L15.1198 6.54405L11.1231 10.0091L12.3147 15.1609L7.78633 12.4291L3.25793 15.1609Z" fill="#FF8000"/>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none" class="me-1">
                                                <path d="M3.25793 15.1609L4.44961 10.0091L0.452881 6.54405L5.73297 6.08571L7.78633 1.22729L9.8397 6.08571L15.1198 6.54405L11.1231 10.0091L12.3147 15.1609L7.78633 12.4291L3.25793 15.1609Z" fill="#FF8000"/>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none" class="me-1">
                                                <path d="M3.25793 15.1609L4.44961 10.0091L0.452881 6.54405L5.73297 6.08571L7.78633 1.22729L9.8397 6.08571L15.1198 6.54405L11.1231 10.0091L12.3147 15.1609L7.78633 12.4291L3.25793 15.1609Z" fill="#FF8000"/>
                                            </svg>
                                            <small class="text-small-muted">10 Oktober 2023</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2 ms-auto">
                                        <button class="btn btn-sm me-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                <path d="M5.2089 9.37484V21.8748H1.04224V9.37484H5.2089ZM9.37557 21.8748C8.82304 21.8748 8.29313 21.6553 7.90243 21.2646C7.51173 20.8739 7.29224 20.344 7.29224 19.7915V9.37484C7.29224 8.80192 7.5214 8.28109 7.90682 7.90609L14.761 1.0415L15.8652 2.14567C16.1464 2.42692 16.3235 2.81234 16.3235 3.23942L16.2922 3.57275L15.3027 8.33317H21.8756C22.4281 8.33317 22.958 8.55266 23.3487 8.94337C23.7394 9.33407 23.9589 9.86397 23.9589 10.4165V12.4998C23.9589 12.7707 23.9068 13.0207 23.8131 13.2603L20.6672 20.604C20.3547 21.354 19.6152 21.8748 18.7506 21.8748H9.37557ZM9.37557 19.7915H18.7818L21.8756 12.4998V10.4165H12.7193L13.8964 4.87484L9.37557 9.40609V19.7915Z" fill="#4A5568"/>
                                            </svg>
                                            <span class="icon-text">109</span>
                                        </button>
                                        <button class="btn btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                <path d="M19.7911 15.6252L19.7911 3.12516L23.9578 3.12516L23.9578 15.6252L19.7911 15.6252ZM15.6244 3.12516C16.177 3.12516 16.7069 3.34465 17.0976 3.73535C17.4883 4.12606 17.7078 4.65596 17.7078 5.20849L17.7078 15.6252C17.7078 16.1981 17.4786 16.7189 17.0932 17.0939L10.239 23.9585L9.13484 22.8543C8.85359 22.5731 8.67651 22.1877 8.67651 21.7606L8.70776 21.4272L9.69735 16.6668L3.12443 16.6668C2.57189 16.6668 2.04199 16.4473 1.65129 16.0566C1.26059 15.6659 1.04109 15.136 1.04109 14.5835L1.04109 12.5002C1.04109 12.2293 1.09318 11.9793 1.18693 11.7397L4.33276 4.39599C4.64526 3.64599 5.38485 3.12516 6.24943 3.12516L15.6244 3.12516ZM15.6244 5.20849L6.21818 5.20849L3.12443 12.5002L3.12443 14.5835L12.2807 14.5835L11.1036 20.1252L15.6244 15.5939L15.6244 5.20849Z" fill="#4A5568"/>
                                            </svg>
                                            <span class="icon-text">30</span>
                                        </button>
                                        <button class="btn btn-delete">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 19 19" fill="none">
                                                <path d="M6.67969 3.41406H6.53125C6.61289 3.41406 6.67969 3.34727 6.67969 3.26562V3.41406ZM6.67969 3.41406H12.3203V3.26562C12.3203 3.34727 12.3871 3.41406 12.4688 3.41406H12.3203V4.75H13.6562V3.26562C13.6562 2.61064 13.1237 2.07812 12.4688 2.07812H6.53125C5.87627 2.07812 5.34375 2.61064 5.34375 3.26562V4.75H6.67969V3.41406ZM16.0312 4.75H2.96875C2.64033 4.75 2.375 5.01533 2.375 5.34375V5.9375C2.375 6.01914 2.4418 6.08594 2.52344 6.08594H3.64414L4.10244 15.79C4.13213 16.4228 4.65537 16.9219 5.28809 16.9219H13.7119C14.3465 16.9219 14.8679 16.4246 14.8976 15.79L15.3559 6.08594H16.4766C16.5582 6.08594 16.625 6.01914 16.625 5.9375V5.34375C16.625 5.01533 16.3597 4.75 16.0312 4.75ZM13.569 15.5859H5.43096L4.98193 6.08594H14.0181L13.569 15.5859Z" fill="#FF1C1C"/>
                                              </svg>
                                             <span class="delete-text">Delete</span>
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <img src="{{ Vite::asset('resources/images/testimoni1.png') }}" alt="Deskripsi Gambar" class="mb-2" style="width: 100%; max-width: 200px; height: auto;">
                                    <p class="text-paragraph">Kursus ini luar biasa! Saya tidak memiliki latar belakang pemrograman sebelumnya, tetapi instruktur menjelaskan
                                        semua konsep dengan sangat jelas. Proyek praktisnya membantu saya memahami bagaimana menerapkan apa yang saya pelajari. Sangat merekomendasikan bagi siapa saja yang ingin belajar Java!</p>
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card-style p-3">
                            <div class="review-card" data-rating="4" data-photo="false">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="me-3">
                                        <img src="{{ Vite::asset('resources/images/orang 5.png') }}" alt="Profile Picture" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;">
                                    </div>
                                    <div class="d-flex align-items-center mb-3 review-header">
                                        <h5 class="mb-0 custom-h5">Rina</h5>
                                        <div class="stars-container">
                                            <!-- SVG Star Icon repeated 5 times -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none" class="me-1">
                                                <path d="M3.25793 15.1609L4.44961 10.0091L0.452881 6.54405L5.73297 6.08571L7.78633 1.22729L9.8397 6.08571L15.1198 6.54405L11.1231 10.0091L12.3147 15.1609L7.78633 12.4291L3.25793 15.1609Z" fill="#FF8000"/>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none" class="me-1">
                                                <path d="M3.25793 15.1609L4.44961 10.0091L0.452881 6.54405L5.73297 6.08571L7.78633 1.22729L9.8397 6.08571L15.1198 6.54405L11.1231 10.0091L12.3147 15.1609L7.78633 12.4291L3.25793 15.1609Z" fill="#FF8000"/>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none" class="me-1">
                                                <path d="M3.25793 15.1609L4.44961 10.0091L0.452881 6.54405L5.73297 6.08571L7.78633 1.22729L9.8397 6.08571L15.1198 6.54405L11.1231 10.0091L12.3147 15.1609L7.78633 12.4291L3.25793 15.1609Z" fill="#FF8000"/>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none" class="me-1">
                                                <path d="M3.25793 15.1609L4.44961 10.0091L0.452881 6.54405L5.73297 6.08571L7.78633 1.22729L9.8397 6.08571L15.1198 6.54405L11.1231 10.0091L12.3147 15.1609L7.78633 12.4291L3.25793 15.1609Z" fill="#FF8000"/>
                                            </svg>
                                            <small class="text-small-muted">27 Oktober 2023</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2 ms-auto">
                                        <button class="btn btn-sm me-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                <path d="M5.2089 9.37484V21.8748H1.04224V9.37484H5.2089ZM9.37557 21.8748C8.82304 21.8748 8.29313 21.6553 7.90243 21.2646C7.51173 20.8739 7.29224 20.344 7.29224 19.7915V9.37484C7.29224 8.80192 7.5214 8.28109 7.90682 7.90609L14.761 1.0415L15.8652 2.14567C16.1464 2.42692 16.3235 2.81234 16.3235 3.23942L16.2922 3.57275L15.3027 8.33317H21.8756C22.4281 8.33317 22.958 8.55266 23.3487 8.94337C23.7394 9.33407 23.9589 9.86397 23.9589 10.4165V12.4998C23.9589 12.7707 23.9068 13.0207 23.8131 13.2603L20.6672 20.604C20.3547 21.354 19.6152 21.8748 18.7506 21.8748H9.37557ZM9.37557 19.7915H18.7818L21.8756 12.4998V10.4165H12.7193L13.8964 4.87484L9.37557 9.40609V19.7915Z" fill="#4A5568"/>
                                            </svg>
                                            <span class="icon-text">109</span>
                                        </button>
                                        <button class="btn btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                <path d="M19.7911 15.6252L19.7911 3.12516L23.9578 3.12516L23.9578 15.6252L19.7911 15.6252ZM15.6244 3.12516C16.177 3.12516 16.7069 3.34465 17.0976 3.73535C17.4883 4.12606 17.7078 4.65596 17.7078 5.20849L17.7078 15.6252C17.7078 16.1981 17.4786 16.7189 17.0932 17.0939L10.239 23.9585L9.13484 22.8543C8.85359 22.5731 8.67651 22.1877 8.67651 21.7606L8.70776 21.4272L9.69735 16.6668L3.12443 16.6668C2.57189 16.6668 2.04199 16.4473 1.65129 16.0566C1.26059 15.6659 1.04109 15.136 1.04109 14.5835L1.04109 12.5002C1.04109 12.2293 1.09318 11.9793 1.18693 11.7397L4.33276 4.39599C4.64526 3.64599 5.38485 3.12516 6.24943 3.12516L15.6244 3.12516ZM15.6244 5.20849L6.21818 5.20849L3.12443 12.5002L3.12443 14.5835L12.2807 14.5835L11.1036 20.1252L15.6244 15.5939L15.6244 5.20849Z" fill="#4A5568"/>
                                            </svg>
                                            <span class="icon-text">30</span>
                                        </button>
                                        <button class="btn btn-delete">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 19 19" fill="none">
                                                <path d="M6.67969 3.41406H6.53125C6.61289 3.41406 6.67969 3.34727 6.67969 3.26562V3.41406ZM6.67969 3.41406H12.3203V3.26562C12.3203 3.34727 12.3871 3.41406 12.4688 3.41406H12.3203V4.75H13.6562V3.26562C13.6562 2.61064 13.1237 2.07812 12.4688 2.07812H6.53125C5.87627 2.07812 5.34375 2.61064 5.34375 3.26562V4.75H6.67969V3.41406ZM16.0312 4.75H2.96875C2.64033 4.75 2.375 5.01533 2.375 5.34375V5.9375C2.375 6.01914 2.4418 6.08594 2.52344 6.08594H3.64414L4.10244 15.79C4.13213 16.4228 4.65537 16.9219 5.28809 16.9219H13.7119C14.3465 16.9219 14.8679 16.4246 14.8976 15.79L15.3559 6.08594H16.4766C16.5582 6.08594 16.625 6.01914 16.625 5.9375V5.34375C16.625 5.01533 16.3597 4.75 16.0312 4.75ZM13.569 15.5859H5.43096L4.98193 6.08594H14.0181L13.569 15.5859Z" fill="#FF1C1C"/>
                                              </svg>
                                             <span class="delete-text">Delete</span>
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-paragraph">Saya sangat puas dengan kursus ini. Materi yang disampaikan sangat terstruktur dan mudah diikuti. Instruktur sangat responsif dan selalu siap membantu jika ada pertanyaan. Saya merasa lebih percaya diri untuk memulai karir di bidang pemrograman setelah mengikuti kursus ini.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card-style p-3">
                            <div class="review-card" data-rating="5" data-photo="true">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="me-3">
                                        <img src="{{ Vite::asset('resources/images/profile5.png') }}" alt="Profile Picture" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;">
                                    </div>
                                    <div class="d-flex align-items-center mb-3 review-header">
                                        <h5 class="mb-0 custom-h5">Wahyu</h5>
                                        <div class="stars-container">
                                            <!-- SVG Star Icon repeated 5 times -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none" class="me-1">
                                                <path d="M3.25793 15.1609L4.44961 10.0091L0.452881 6.54405L5.73297 6.08571L7.78633 1.22729L9.8397 6.08571L15.1198 6.54405L11.1231 10.0091L12.3147 15.1609L7.78633 12.4291L3.25793 15.1609Z" fill="#FF8000"/>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none" class="me-1">
                                                <path d="M3.25793 15.1609L4.44961 10.0091L0.452881 6.54405L5.73297 6.08571L7.78633 1.22729L9.8397 6.08571L15.1198 6.54405L11.1231 10.0091L12.3147 15.1609L7.78633 12.4291L3.25793 15.1609Z" fill="#FF8000"/>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none" class="me-1">
                                                <path d="M3.25793 15.1609L4.44961 10.0091L0.452881 6.54405L5.73297 6.08571L7.78633 1.22729L9.8397 6.08571L15.1198 6.54405L11.1231 10.0091L12.3147 15.1609L7.78633 12.4291L3.25793 15.1609Z" fill="#FF8000"/>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none" class="me-1">
                                                <path d="M3.25793 15.1609L4.44961 10.0091L0.452881 6.54405L5.73297 6.08571L7.78633 1.22729L9.8397 6.08571L15.1198 6.54405L11.1231 10.0091L12.3147 15.1609L7.78633 12.4291L3.25793 15.1609Z" fill="#FF8000"/>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none" class="me-1">
                                                <path d="M3.25793 15.1609L4.44961 10.0091L0.452881 6.54405L5.73297 6.08571L7.78633 1.22729L9.8397 6.08571L15.1198 6.54405L11.1231 10.0091L12.3147 15.1609L7.78633 12.4291L3.25793 15.1609Z" fill="#FF8000"/>
                                            </svg>
                                            <small class="text-small-muted">29 Oktober 2023</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2 ms-auto">
                                        <button class="btn btn-sm me-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                <path d="M5.2089 9.37484V21.8748H1.04224V9.37484H5.2089ZM9.37557 21.8748C8.82304 21.8748 8.29313 21.6553 7.90243 21.2646C7.51173 20.8739 7.29224 20.344 7.29224 19.7915V9.37484C7.29224 8.80192 7.5214 8.28109 7.90682 7.90609L14.761 1.0415L15.8652 2.14567C16.1464 2.42692 16.3235 2.81234 16.3235 3.23942L16.2922 3.57275L15.3027 8.33317H21.8756C22.4281 8.33317 22.958 8.55266 23.3487 8.94337C23.7394 9.33407 23.9589 9.86397 23.9589 10.4165V12.4998C23.9589 12.7707 23.9068 13.0207 23.8131 13.2603L20.6672 20.604C20.3547 21.354 19.6152 21.8748 18.7506 21.8748H9.37557ZM9.37557 19.7915H18.7818L21.8756 12.4998V10.4165H12.7193L13.8964 4.87484L9.37557 9.40609V19.7915Z" fill="#4A5568"/>
                                            </svg>
                                            <span class="icon-text">109</span>
                                        </button>
                                        <button class="btn btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                <path d="M19.7911 15.6252L19.7911 3.12516L23.9578 3.12516L23.9578 15.6252L19.7911 15.6252ZM15.6244 3.12516C16.177 3.12516 16.7069 3.34465 17.0976 3.73535C17.4883 4.12606 17.7078 4.65596 17.7078 5.20849L17.7078 15.6252C17.7078 16.1981 17.4786 16.7189 17.0932 17.0939L10.239 23.9585L9.13484 22.8543C8.85359 22.5731 8.67651 22.1877 8.67651 21.7606L8.70776 21.4272L9.69735 16.6668L3.12443 16.6668C2.57189 16.6668 2.04199 16.4473 1.65129 16.0566C1.26059 15.6659 1.04109 15.136 1.04109 14.5835L1.04109 12.5002C1.04109 12.2293 1.09318 11.9793 1.18693 11.7397L4.33276 4.39599C4.64526 3.64599 5.38485 3.12516 6.24943 3.12516L15.6244 3.12516ZM15.6244 5.20849L6.21818 5.20849L3.12443 12.5002L3.12443 14.5835L12.2807 14.5835L11.1036 20.1252L15.6244 15.5939L15.6244 5.20849Z" fill="#4A5568"/>
                                            </svg>
                                            <span class="icon-text">30</span>
                                        </button>
                                        <button class="btn btn-delete">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 19 19" fill="none">
                                                <path d="M6.67969 3.41406H6.53125C6.61289 3.41406 6.67969 3.34727 6.67969 3.26562V3.41406ZM6.67969 3.41406H12.3203V3.26562C12.3203 3.34727 12.3871 3.41406 12.4688 3.41406H12.3203V4.75H13.6562V3.26562C13.6562 2.61064 13.1237 2.07812 12.4688 2.07812H6.53125C5.87627 2.07812 5.34375 2.61064 5.34375 3.26562V4.75H6.67969V3.41406ZM16.0312 4.75H2.96875C2.64033 4.75 2.375 5.01533 2.375 5.34375V5.9375C2.375 6.01914 2.4418 6.08594 2.52344 6.08594H3.64414L4.10244 15.79C4.13213 16.4228 4.65537 16.9219 5.28809 16.9219H13.7119C14.3465 16.9219 14.8679 16.4246 14.8976 15.79L15.3559 6.08594H16.4766C16.5582 6.08594 16.625 6.01914 16.625 5.9375V5.34375C16.625 5.01533 16.3597 4.75 16.0312 4.75ZM13.569 15.5859H5.43096L4.98193 6.08594H14.0181L13.569 15.5859Z" fill="#FF1C1C"/>
                                              </svg>
                                             <span class="delete-text">Delete</span>
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <img src="{{ Vite::asset('resources/images/testimoni2.png') }}" alt="Deskripsi Gambar" class="mb-2" style="width: 100%; max-width: 200px; height: auto;">
                                    <p class="text-paragraph">Sebagai seseorang yang baru memulai perjalanan di dunia pemrograman, saya merasa kursus ini sangat membantu. Instruktur menjelaskan dengan cara yang mudah dipahami dan memberikan banyak tips berguna. Saya sudah mulai membuat proyek kecil sendiri setelah menyelesaikan kursus ini!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
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
  display: grid;
}
.search-container {
    background-color: #f8f9fa; /* Warna latar belakang */
    padding: 20px 20px;
    border-bottom: 1px solid #ddd;

}
.file-input-wrapper {
    position: relative;
    display: flex;
    align-items: center;
    border: 1px solid #ced4da;
    border-radius: 8.733px;
    padding: 5px 8px;
}

.file-input-wrapper input[type="file"] {
    position: absolute;
    left: 0;
    top: 0;
    opacity: 0;
    cursor: pointer;
    z-index: 2;
}

.file-input-wrapper .btn {
    position: relative;
    z-index: 1;
    border-radius: 5.24px;
    background-color: #4A5568;
    border: none;
    font-size: 10.479px;
    font-weight: 400;
}

.file-input-wrapper span {
    flex-grow: 1;
    padding-left: 10px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-size: 10.479px;
}

.file-input-style {
    display: none;
}

.file-input-wrapper span {
    font-size: 14px;
    color: #666;
}

.course-title {
    flex: 1;
    max-width: 400px;
    margin-right: 15px;
    font-size: 16px;
    font-weight: 600;
    border: 1px solid #ddd;
    border-radius: 10px;
    padding: 5px 10px;
}
.btn-link {
    color: #6c757d;
    font-size: 16px;
    text-decoration: none;
}

.btn-link:hover {
    text-decoration: none;
    color: #2D3748;
}

.btn-primary {
    background-color: #0056D2;
    border-color: #0056D2;
    color: #fff;
    border-radius: 18px;
    font-size: 14px;
}

.btn-outline-primary {
    color: #0056D2;
    border-color: #0056D2;
    border-radius: 18px;
    font-size: 14px;
}

.btn-outline-primary:hover {
    background-color: #0056D2;
    border-color: #0056D2;
    color: #fff;
}
.btn {
    margin-right: 5px; /* Atur jarak antar tombol */
    margin-left: 0; /* Pastikan tidak ada jarak ke kiri */
}
.card {
    border-radius: 20px;
    padding: 24px;
    border: none;
    box-shadow: 2px 2px 10px 0px rgba(0, 0, 0, 0.25);

}
.form-label {
    font-weight: 600;
    font-size: 14px;
    color: #003D94;

}
.custom-btn {
    border: 1px solid #4a5568;
    color: #4a5568;
    border-radius: 8px;
}
.custom-btn:hover {
    background-color: #4a5568;
    color: white;
}
.header-settings {
    font-size: 20px;
    font-weight: 600;
    color: #002661;
    margin-left: 25px;
}
.header-title {
    font-size: 16px;
    font-weight: 600;
    color: #003D94;
}

.form-text {
    font-size: 14px;
    color: #6c757d;
}
.custom-input {
    max-width: 150px;
}

.custom-card-style {
  width: 840px; /* Lebar tetap */
  height: auto; /* Tinggi tetap */
  border-radius:  24px; /* Sudut melengkung */
  overflow: hidden; /* Opsional, untuk memastikan isi tidak keluar dari batas */
  margin-bottom: 23px;
}
.module-input-style {
  font-size: 12.226px;
  font-weight: 400;
  width: 597px;
  border-radius: 8.733px;
}
.label-new-style1 {
  font-size: 14px;
  font-weight: 500;
  margin-right: 43px;
  color: #2D3748;
}
.label-new-style2 {
  font-size: 14px;
  font-weight: 500;
  margin-right: 39px;
  color: #2D3748;
}
.label-new-style3 {
  font-size: 14px;
  font-weight: 500;
  margin-right: 60px;
  color: #2D3748;
}
.custom-link-masukkan {
    border: 1px solid #ced4da;
    border-radius: 8.733px;
    padding: 8px 12px;
    width: 245px;
    height: 34px;
    font-size: 8.733px;
    font-weight: 400;
    margin-left: 39px;
    transition: border-color 0.3s ease; /* Animasi perubahan warna border */
}
.custom-link-masukkan:focus {
    border-color: #0056D2; /* Ubah warna border menjadi biru */
}
.label-aligned {
  width: 150px; /* Lebar tetap untuk label agar konsisten */
  font-weight: 600; /* Ketebalan teks */
  font-size: 14px; /* Ukuran font */
  margin-right: 50px; /* Jarak antar label dan elemen input */
  color: #003D94;
}

.input-container {
  display: flex; /* Membuat layout horizontal */
  margin-bottom: 1rem; /* Memberikan jarak antar baris */
}
.custom-margin-top {
  margin-top: -18px; /* Ganti nilai sesuai kebutuhan */
  margin-left: 9px;
}

.rating-card {
    border-radius: 12px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 20px;
    background-color: #fff;
}
.btn-rating {
    border-radius: 16px;
    padding: 5px 15px;
    border-color: #0056D2;
    color: #0056D2;
    border-width: 2px; /* Sesuaikan nilai ini untuk menambah ketebalan */
    align-items: center; /* Menyelaraskan secara vertikal */
    justify-content: center; /* Menyelaraskan secara horizontal */
    margin-right: 19px;
}
.btn-rating.active {
        background-color: #0056D2;
        color: #fff;
    }
.btn-rating:hover {
  background-color: #0056D2;
  color: #fff;
}
.rating-bar {
    height: 6px;
    width: 60px; /* Tentukan panjang yang seragam */
    border-radius: 3px;
    background-color: #e9ecef;
    flex-grow: 1; /* Bar menyesuaikan panjang */
}
.rating-bar-filled {
    height: 6px;
    border-radius: 3px;
    background-color: #f7941d;
}
.rating-text {
    width: 83.74px;
    height: 24px;
    margin: 0; /* Menghindari margin bawaan */
    display: flex;
    font-size: 16px; /* Menjaga ukuran font */
    color: #212529; /* Sesuai dengan contoh */
}

.rating-header {
    display: flex;
    align-items: center;
    gap: 10px;
}
.rating-header h1 {
    margin: 0;
    font-size: 3rem;
}
.custom-list {
  list-style: none; /* Hilangkan bullet default */
  padding: 0; /* Hilangkan padding default */
}

.custom-list li {
  display: flex; /* Jadikan elemen di dalam li dalam satu baris */
  align-items: center; /* Pusatkan elemen secara vertikal */
  margin-bottom: 10px; /* Jarak antar item */
}

.custom-list li svg {
  margin-right: 10px; /* Jarak antara SVG dan teks */
}

.rating-header span {
    font-size: 3rem;
    color: #f7941d;
}
.rating-header p {
    margin: 0;
    font-size: 1rem;
    color: #6c757d;
}
.custom-size {
    flex-shrink: 0;
    width: 33.13px;
    height: 24px;
    display: inline-block;
}
.custom-h5 {
    font-size: 14px;
    font-weight: 600;
  }
  .ulasan {
    font-weight: 600;
    font-size: 24px;
    margin-bottom : 41px;
}
.review-text {
    font-size: 14px;
    font-weight: 400;
}
.small-text {
    font-size: 10px;
    font-weight: 400;
}
.custom-label-spacing .col-md-3:first-child {
    margin-right: -80px;
}

#kuotaPeserta {
    font-size: 12px;
}
#tingkatKesulitan {
    font-size: 12px;
}
#forum {
    font-size: 12px;
}
.untuk-spacing-margin {
    margin-bottom: 50px; /* Atur sesuai kebutuhan */
}
.text-small-muted {
    font-size: 10px;
    font-weight: 400;
    color: #6c757d; /* Sesuaikan dengan warna muted (opsional) */
    margin-left: 20px;
}
.text-paragraph {
    font-size: 14px;
    font-weight: 400;
    line-height: 1.6; /* Opsional, untuk memperbaiki jarak antar baris */
    color: #333; /* Opsional, untuk warna teks */
}
.review-header {
    display: flex;
    align-items: center; /* Untuk menyelaraskan elemen secara vertikal */
    justify-content: space-between; /* Opsional: Mengatur jarak antar elemen */
    gap: 8px; /* Memberi jarak antar elemen */
    padding: 0; /* atau atur nilai spesifik */
    margin: 0; /* atau atur nilai spesifik */
}

.stars-container {
    display: flex;
    align-items: center;
    gap: 4px; /* Memberi jarak antar ikon bintang */
    margin-left: 33px;
}
.review-rate {
    padding: 15px;
    margin-bottom: 15px;
}
.review-rate .d-flex.align-items-center.ms-auto {
    margin-left: auto;
}
.container-buttons {
    display: flex;
    align-items: center; /* Pastikan tombol sejajar secara vertikal */
    justify-content: flex-end; /* Atur agar tombol berada di ujung kanan */
    gap: 0.5rem; /* Beri jarak antar tombol */
}
.d-flex.align-items-center.ms-auto {
    margin-left: auto;
}
.icon-text, .delete-text {
    font-size: 12px;
    font-weight: 400;
}

.delete-text {
    color: #FF1C1C;
}


</style>

<script>


</script>

@endsection
