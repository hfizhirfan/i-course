@extends('layout-admin.app')

@section('content')

<nav class="navbar navbar-expand-lg custom-navbar">
    <div class="container-fluid px-4">
        <!-- Title -->
        <h4 class="mb-0">Manajemen User</h4>

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
        <div class="d-flex align-items-center">
            <a href="{{ route('admin.user.index') }}" class="back-arrow">
                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                    <path d="M5.00024 15.528C4.74246 15.7859 4.59766 16.1355 4.59766 16.5001C4.59766 16.8647 4.74246 17.2144 5.00024 17.4723L12.7786 25.2506C12.9055 25.382 13.0572 25.4867 13.2249 25.5588C13.3927 25.6308 13.5731 25.6688 13.7557 25.6704C13.9383 25.6719 14.1193 25.6372 14.2883 25.568C14.4573 25.4989 14.6108 25.3968 14.7399 25.2677C14.869 25.1386 14.9711 24.9851 15.0402 24.8161C15.1094 24.6471 15.1442 24.466 15.1426 24.2835C15.141 24.1009 15.1031 23.9205 15.031 23.7527C14.9589 23.585 14.8542 23.4332 14.7229 23.3064L9.29161 17.8751L27.5007 17.8751C27.8654 17.8751 28.2151 17.7303 28.473 17.4724C28.7309 17.2145 28.8757 16.8648 28.8757 16.5001C28.8757 16.1355 28.7309 15.7857 28.473 15.5279C28.2151 15.27 27.8654 15.1251 27.5007 15.1251L9.29161 15.1251L14.7229 9.69389C14.9733 9.43456 15.1119 9.08723 15.1088 8.72671C15.1057 8.36619 14.961 8.02133 14.7061 7.76639C14.4512 7.51145 14.1063 7.36685 13.7458 7.36371C13.3853 7.36058 13.0379 7.49917 12.7786 7.74964L5.00024 15.528Z" fill="#0056D2"/>
                </svg>
            </a>

            <span class="user-name">Siti Aisyah</span> <!-- Nama pengguna -->
        </div>
    </div>

</div>
<div class="container my-3">
    <h2 class="header-title mb-4">Profil</h2>
    <div class="card">
        <div class="row g-3">
            <div class="col-md-6 d-flex align-items-center">
                <label for="userId" class="form-label me-3">ID User</label>
                <input type="text" class="form-control" id="userId" value="US100401" readonly>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <label for="userId" class="form-label me-3">Nama Lengkap</label>
                <input type="text" class="form-control" id="userId" name="nama_lengkap" value="Siti Aisyah" readonly>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <label for="userId" class="form-label me-3">Nomor Telepon</label>
                <input type="text" class="form-control" id="phone" name="nomor_telepon" value="0857 8901 2345" readonly>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <label for="userId" class="form-label me-3">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="sitiaisyah@email.com" readonly >
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <label for="userId" class="form-label me-3">Status</label>
                <span class="status-text">User</span>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <label for="userId" class="form-label me-3">Foto Profile</label>
                <button class="btn-view-photo" onclick="showPhoto()">
                    <i class="bi bi-eye"></i> Lihat foto
                </button>
                <div id="photoPopup" class="popup">
                    <div class="popup-content">
                        <span class="close" onclick="closePhoto()">&times;</span>
                        <img src="{{ Vite::asset('resources/images/siti.png') }}" alt="Foto Budiono Siregar">
                    </div>
                </div>
            </div>
            <div class="row g-3">
                <!-- Bio -->
                <div class="col-md-12 d-flex align-items-center spacing-bio">
                    <label for="bio" class="form-label me-3">Bio</label>
                    <input type="text" class="form-control" id="bio" name="bio" placeholder="Tulis bio Anda" value="Beginner" readonly>
                </div>

                <!-- Twitter dan Facebook -->
                <div class="col-md-6 d-flex align-items-center">
                    <label for="twitter" class="form-label me-3">Twitter</label>
                    <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Tulis akun Twitter" value="@sitiaisyah" readonly>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <label for="facebook" class="form-label me-3">Facebook</label>
                    <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Tulis akun Facebook" value="Siti Aisyah" readonly>
                </div>

                <!-- Instagram dan LinkedIn -->
                <div class="col-md-6 d-flex align-items-center">
                    <label for="instagram" class="form-label me-3">Instagram</label>
                    <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Tulis akun Instagram" value="@sitiaisyah" readonly>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <label for="linkedin" class="form-label me-3">LinkedIn</label>
                    <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="Tulis akun LinkedIn" value="Siti Aisyah" readonly>
                </div>
            </div>


        </div>
    </div>
</div>

<div class="container my-3">
    <h2 class="header-title mb-4">Pembelajaran</h2>
    <div class="card">
            <!-- Tabs -->
            <ul class="nav nav-tabs mb-3" id="kursusTab" role="tablist">
                <li class="nav-item">
                    <button class="nav-link active" id="terbaru-tab" data-bs-toggle="tab" data-bs-target="#berlangsung" type="button" role="tab">
                        Sedang berlangsung
                    </button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" id="populer-tab" data-bs-toggle="tab" data-bs-target="#selesai" type="button" role="tab">
                        Selesai
                    </button>
                </li>
            </ul>

            <!-- Konten Tab -->
        <div class="tab-content">
            <!-- Sedang Berlangsung -->
            <div class="tab-pane fade show active" id="berlangsung" role="tabpanel">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <h6 class="course-name">Bahasa Jepang N3</h6>
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="progress" style="flex-grow: 1; margin-right: 10px;">
                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="progress-text">60%</span>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <h6 class="course-name">Laravel untuk Menengah</h6>
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="progress" style="flex-grow: 1; margin-right: 10px;">
                            <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="progress-text">20%</span>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <h6 class="course-name">Pengantar Statistika dan Probabilitas</h6>
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="progress" style="flex-grow: 1; margin-right: 10px;">
                            <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="progress-text">40%</span>
                    </div>
                </div>
            </div>

            <!-- Selesai -->
            <div class="tab-pane fade" id="selesai" role="tabpanel">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <h6 class="course-name">Menguasai Postgre SQL</h6>
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="progress" style="flex-grow: 1; margin-right: 10px;">
                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="progress-text">100%</span>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <h6 class="course-name">Bahasa Jerman C2</h6>
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="progress" style="flex-grow: 1; margin-right: 10px;">
                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="progress-text">100%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container my-3">
    <h2 class="header-title mb-4">Ulasan</h2>
    <div class="card">
        <div class="review-card" data-rating="4" data-photo="false">
            <div class="d-flex align-items-center mb-3">
                <div class="me-3">
                    <img src="{{ Vite::asset('resources/images/orang 6.png') }}" alt="Profile Picture" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;">
                </div>
                <div class="d-flex align-items-center mb-3 review-header">
                    <h5 class="mb-0 custom-h5">Siti Aisyah</h5>
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
                        <small class="text-small-muted">24 Oktober 2023</small>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2 ms-auto">
                    <button class="btn btn-sm me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                            <path d="M5.2089 9.37484V21.8748H1.04224V9.37484H5.2089ZM9.37557 21.8748C8.82304 21.8748 8.29313 21.6553 7.90243 21.2646C7.51173 20.8739 7.29224 20.344 7.29224 19.7915V9.37484C7.29224 8.80192 7.5214 8.28109 7.90682 7.90609L14.761 1.0415L15.8652 2.14567C16.1464 2.42692 16.3235 2.81234 16.3235 3.23942L16.2922 3.57275L15.3027 8.33317H21.8756C22.4281 8.33317 22.958 8.55266 23.3487 8.94337C23.7394 9.33407 23.9589 9.86397 23.9589 10.4165V12.4998C23.9589 12.7707 23.9068 13.0207 23.8131 13.2603L20.6672 20.604C20.3547 21.354 19.6152 21.8748 18.7506 21.8748H9.37557ZM9.37557 19.7915H18.7818L21.8756 12.4998V10.4165H12.7193L13.8964 4.87484L9.37557 9.40609V19.7915Z" fill="#4A5568"/>
                        </svg>
                        <span class="icon-text">93</span>
                    </button>
                    <button class="btn btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                            <path d="M19.7911 15.6252L19.7911 3.12516L23.9578 3.12516L23.9578 15.6252L19.7911 15.6252ZM15.6244 3.12516C16.177 3.12516 16.7069 3.34465 17.0976 3.73535C17.4883 4.12606 17.7078 4.65596 17.7078 5.20849L17.7078 15.6252C17.7078 16.1981 17.4786 16.7189 17.0932 17.0939L10.239 23.9585L9.13484 22.8543C8.85359 22.5731 8.67651 22.1877 8.67651 21.7606L8.70776 21.4272L9.69735 16.6668L3.12443 16.6668C2.57189 16.6668 2.04199 16.4473 1.65129 16.0566C1.26059 15.6659 1.04109 15.136 1.04109 14.5835L1.04109 12.5002C1.04109 12.2293 1.09318 11.9793 1.18693 11.7397L4.33276 4.39599C4.64526 3.64599 5.38485 3.12516 6.24943 3.12516L15.6244 3.12516ZM15.6244 5.20849L6.21818 5.20849L3.12443 12.5002L3.12443 14.5835L12.2807 14.5835L11.1036 20.1252L15.6244 15.5939L15.6244 5.20849Z" fill="#4A5568"/>
                        </svg>
                        <span class="icon-text">12</span>
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
                <p class="text-paragraph">Sangat membantu bagi pemula maupun profesional yang ingin mendalami basis data. Materinya jelas dan mencakup topik penting seperti query SQL, manajemen data, optimasi performa, dan fitur-fitur lanjutan PostgreSQL. Pengajarnya sangat kompeten, dengan penjelasan yang mudah dipahami dan contoh-contoh praktis. </p>
                <p class="text-course-title">Menguasai Postgre SQL</p>
            </div>
        </div>
        <div class="review-cardd" data-rating="4" data-photo="false">
            <div class="d-flex align-items-center mb-3">
                <div class="me-3">
                    <img src="{{ Vite::asset('resources/images/orang 6.png') }}" alt="Profile Picture" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;">
                </div>
                <div class="d-flex align-items-center mb-3 review-header">
                    <h5 class="mb-0 custom-h5">Siti Aisyah</h5>
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
                        <small class="text-small-muted">13 Agustus 2023</small>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2 ms-auto">
                    <button class="btn btn-sm me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                            <path d="M5.2089 9.37484V21.8748H1.04224V9.37484H5.2089ZM9.37557 21.8748C8.82304 21.8748 8.29313 21.6553 7.90243 21.2646C7.51173 20.8739 7.29224 20.344 7.29224 19.7915V9.37484C7.29224 8.80192 7.5214 8.28109 7.90682 7.90609L14.761 1.0415L15.8652 2.14567C16.1464 2.42692 16.3235 2.81234 16.3235 3.23942L16.2922 3.57275L15.3027 8.33317H21.8756C22.4281 8.33317 22.958 8.55266 23.3487 8.94337C23.7394 9.33407 23.9589 9.86397 23.9589 10.4165V12.4998C23.9589 12.7707 23.9068 13.0207 23.8131 13.2603L20.6672 20.604C20.3547 21.354 19.6152 21.8748 18.7506 21.8748H9.37557ZM9.37557 19.7915H18.7818L21.8756 12.4998V10.4165H12.7193L13.8964 4.87484L9.37557 9.40609V19.7915Z" fill="#4A5568"/>
                        </svg>
                        <span class="icon-text">139</span>
                    </button>
                    <button class="btn btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                            <path d="M19.7911 15.6252L19.7911 3.12516L23.9578 3.12516L23.9578 15.6252L19.7911 15.6252ZM15.6244 3.12516C16.177 3.12516 16.7069 3.34465 17.0976 3.73535C17.4883 4.12606 17.7078 4.65596 17.7078 5.20849L17.7078 15.6252C17.7078 16.1981 17.4786 16.7189 17.0932 17.0939L10.239 23.9585L9.13484 22.8543C8.85359 22.5731 8.67651 22.1877 8.67651 21.7606L8.70776 21.4272L9.69735 16.6668L3.12443 16.6668C2.57189 16.6668 2.04199 16.4473 1.65129 16.0566C1.26059 15.6659 1.04109 15.136 1.04109 14.5835L1.04109 12.5002C1.04109 12.2293 1.09318 11.9793 1.18693 11.7397L4.33276 4.39599C4.64526 3.64599 5.38485 3.12516 6.24943 3.12516L15.6244 3.12516ZM15.6244 5.20849L6.21818 5.20849L3.12443 12.5002L3.12443 14.5835L12.2807 14.5835L11.1036 20.1252L15.6244 15.5939L15.6244 5.20849Z" fill="#4A5568"/>
                        </svg>
                        <span class="icon-text">28</span>
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
                <p class="text-paragraph">Kursus online Bahasa Jerman tingkat C2 ini sangat mengesankan! Materinya mendalam dan mencakup keterampilan lanjutan seperti menulis esai formal, memahami literatur klasik, dan diskusi isu global. Pengajarnya profesional dan metode pengajarannya interaktif. Latihan serta evaluasi kursus dirancang untuk mengasah kemampuan secara menyeluruh. </p>
                <p class="text-course-title">Bahasa Jerman C2</p>
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
.margin-top-30 {
  margin-top: 10px;
}
.question-textarea {
    width: 100%;
    height: 160px;
    resize: none;
    padding-right: 40px; /* Space untuk tombol gambar */
    border-radius: 10px;
}
.question-options {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    margin-top: 10px; /* Mengurangi jarak agar elemen lebih dekat */
}


.question-type-select {
    width: 150px;
}

.points-container {
    display: flex;
    gap: 20px;
    align-items: center;
    margin-top: 20px;
}

.points-input {
    width: 80px;
    margin-left: 10px;
}

.label-text {
    font-size: 14px;
    margin-bottom: 5px;
    display: block;
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
.header-title {
    font-size: 16px;
    font-weight: 600;
    color: #003D94;
}

/* Menyesuaikan label */
.form-label {
    font-size: 14px;
    color: #003D94;
    font-weight: 600;
    width: 150px; /* Atur lebar sesuai kebutuhan */
    display: inline-block; /* Memastikan lebar diterapkan */
}

/* Menyesuaikan input */
.form-control {
    border: 1px solid #dee2e6;
    border-radius: 8px;
    padding: 8px 12px;
    background-color: #f8fafc;
    font-size: 14px;
    color: #333;
    width: 230px;
}

/* Input dalam keadaan readonly */
.form-control[readonly] {
    background-color: #f8fafc; /* Pastikan background sesuai desain */
    opacity: 1;               /* Mengatasi pengurangan opacity default Bootstrap */
}

/* Hover efek untuk readonly input (opsional) */
.form-control[readonly]:hover {
    cursor: not-allowed; /* Menampilkan kursor tanda larangan */
}
.status-text {
    font-size: 14px;
    font-weight: 500;
}

.btn-view-photo {
    display: flex;
    align-items: center;
    gap: 5px; /* Jarak antara ikon dan teks */
    border: 1px solid #0056D2; /* Warna biru */
    border-radius: 10px;
    padding: 5px 10px;
    background-color: white;
    color: #0056D2;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.btn-view-photo:hover {
    background-color: #0056D2;
    color: white;
}

.col-md-6 {
    margin-bottom: 50px;
}
.spacing-bio {
    margin-bottom: 50px;
}


.nav-tabs {
    border-bottom: none;
}

.nav-tabs .nav-link {
    border: none;
}

.nav-link:focus {
    outline: none;
    box-shadow: none;
}

.btn-tab {
    background: none;
    background-color: transparent;
    border: none;
    font-size: 16px;
    font-weight: 600;
    color: #4A5568;
    cursor: pointer;
    padding: 5px 10px;
    transition: color 0.3s, border-bottom 0.3s;
}

.btn-tab.active {
    color: #0056D2;
    border-bottom: 2px solid #0056D2;
}

.btn-tab:hover {
    color: #0056D2;
}



.progress-bar {
    background-color: #003D94;
}
.progress {
    height: 8px; /* Atur sesuai kebutuhan */
}


.course-name {
    font-size: 14px;
    font-weight: 600;
    color: #003D94;
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
.rating-header span {
    font-size: 3rem;
    color: #f7941d;
}
.rating-header p {
    margin: 0;
    font-size: 1rem;
    color: #6c757d;
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
.text-paragraph {
    font-size: 14px;
    font-weight: 400;
    line-height: 1.6; /* Opsional, untuk memperbaiki jarak antar baris */
    color: #333; /* Opsional, untuk warna teks */
}

.text-course-title {
    font-size: 14px;
    font-weight: 600;
    color: #003D94;
    margin-top: 30px; /* Opsional: untuk memberikan jarak dari paragraf sebelumnya */
}
.user-name {
    font-size: 20px;
    color: #002661; /* Warna teks sesuai gambar */
    font-weight: 600; /* Membuat nama tebal */
    margin-left: 30px;
}

.popup {
    display: none; /* Popup hanya tampil saat dipicu */
    position: fixed;
    z-index: 100;
    left: 0;
    top: 0;
    width: 100%; /* Pastikan mengambil seluruh layar */
    height: 100%; /* Pastikan mengambil seluruh layar */
    background-color: rgba(0, 0, 0, 0.7); /* Hitam transparan */
    justify-content: center; /* Pusatkan horizontal */
    align-items: center; /* Pusatkan vertikal */
}

.popup-content {
    background: white;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    position: relative;
    width: 500px; /* Set lebar tetap */
    height: 500px; /* Set tinggi tetap agar berbentuk kotak */
    max-width: 90%; /* Batas maksimal lebar agar responsif */
    max-height: 90%; /* Batas maksimal tinggi agar responsif */
    overflow: hidden; /* Hilangkan elemen yang melampaui batas */
    display: flex; /* Untuk menyusun konten */
    justify-content: center; /* Pusatkan gambar secara horizontal */
    align-items: center; /* Pusatkan gambar secara vertikal */
}

.popup-content img {
    max-width: 100%; /* Sesuaikan dengan lebar kontainer */
    max-height: 100%; /* Sesuaikan dengan tinggi kontainer */
    object-fit: contain; /* Gambar tetap proporsional */
    border-radius: 8px; /* Opsional, tambahkan sudut melengkung */
}

.close {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 20px;
    cursor: pointer;
    color: black;
    font-weight: bold;
}
.review-cardd {
    margin-top: 80px; /* Atur jarak vertikal */
}


</style>
<script>
function showPhoto() {
    const popup = document.getElementById('photoPopup');
    popup.style.display = 'flex'; // Pastikan popup menggunakan flex untuk pusatkan
}

function closePhoto() {
    const popup = document.getElementById('photoPopup');
    popup.style.display = 'none'; // Sembunyikan popup
}

</script>

@endsection
