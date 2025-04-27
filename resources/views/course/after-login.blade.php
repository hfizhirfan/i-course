@extends('layout-pagelogin.app')

@section('content')

<div class="pembelajaran-container">
    <div class="container">
        <h2 class="text-semibold custom-margin">Pembelajaran Saya</h2>
        <div class="pengingat-belajar">
            <h3>Pengingat belajar</h3>
            <p>Atur pemberitahuan belajar anda agar dapat membantu menyelesaikan pembelajaran</p>
            <div class="actions">
                <button class="btn-primary" data-bs-toggle="modal" data-bs-target="#pengingatModal">Aktifkan</button>
                <button class="btn-secondary" id="btnAbaikan">Abaikan</button>
            </div>
        </div>

        <div class="container">
            <div class="modal fade" id="pengingatModal" tabindex="-1" aria-labelledby="pengingatModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="pengingatModalLabel">Pengingat belajar</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div id="step1">
                                <div class="mb-3">
                                    <label for="nameInput" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nameInput" placeholder="Masukkan nama">
                                </div>
                                <div class="mb-3">
                                    <label for="courseSelect" class="form-label">Pilih kursus</label>
                                    <select class="form-select" id="courseSelect">
                                        <option selected>Pilih kursus</option>
                                        <option value="1">Kursus 1</option>
                                        <option value="2">Kursus 2</option>
                                        <option value="3">Kursus 3</option>
                                    </select>
                                </div>
                                <div class="d-flex justify-content-end ">
                                    <button type="button"  id="nextButton1" class="btn btn-primary">Berikutnya</button>
                                </div>
                            </div>
                            <div id="step2" style="display: none; ">
                                <div class="mb-3">
                                    <label class="form-label">Pilih Frekuensi</label>
                                    <div class="frequency-buttons">
                                        <button type="button" class="btn btn-outline-primary rounded-btn" id="daily">Setiap hari</button>
                                        <button type="button" class="btn btn-outline-primary rounded-btn" id="weekly">Setiap minggu</button>
                                        <button type="button" class="btn btn-outline-primary rounded-btn" id="once">Sekali</button>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="timeInput" class="form-label">Waktu</label>
                                    <input type="time" class="form-control" id="timeInput" value="13:00">
                                </div>

                                <div id="dayOptions" class="mb-3" style="display: none;">
                                    <label class="form-label">Pilih Hari</label>
                                    <div>
                                        <button type="button" class="btn btn-outline-primary day-btn">Senin</button>
                                        <button type="button" class="btn btn-outline-primary day-btn">Selasa</button>
                                        <button type="button" class="btn btn-outline-primary day-btn">Rabu</button>
                                        <button type="button" class="btn btn-outline-primary day-btn">Kamis</button>
                                        <button type="button" class="btn btn-outline-primary day-btn">Jumat</button>
                                        <button type="button" class="btn btn-outline-primary day-btn">Sabtu</button>
                                        <button type="button" class="btn btn-outline-primary day-btn">Minggu</button>
                                    </div>
                                </div>
                                <div class="button-container">
                                    <button type="button" id="prevButton2" class="btn btn-outline-primary btn-prev-custom">Sebelumnya</button>
                                    <button type="submit" id="nextButton2" class="btn btn-primary btn-next-custom">Berikutnya</button>
                                </div>
                            </div>
                            <div id="step3" style="display: none; text-align: center;">
                                <img src="{{ Vite::asset('resources/images/checklist.png') }}"
                                alt="Pemrograman Python untuk Menengah"
                                style="width: 400px; height: auto; margin-bottom: 20px;">

                                <p class="semibold-text">Pengingat belajar berhasil ditambahkan</p>

                                <p>Informasi akan dikirimkan melalui email yang terhubung dengan akun</p>
                                <div class="button-container d-flex justify-content-center">
                                    <button type="button" id="finishButton" class="btn btn-primary" data-bs-dismiss="modal">Selesai</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="course-list">
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
            <div class="tab-content" id="kursusTabContent">
                <!-- Tab Sedang Berlangsung -->
                <div class="tab-pane fade show active" id="berlangsung" role="tabpanel">
                    <div class="row">
                        <!-- Kursus 1 -->
                        <div class="container mt-4">
                            <div class="course-item">
                                <!-- Gambar -->
                                <div class="course-image">
                                    <img src="{{ Vite::asset('resources/images/Pemrograman java untuk pemula.png') }}" alt="Pemrograman Java untuk Pemula">
                                </div>

                                <!-- Informasi Kursus -->
                                <div class="course-info">
                                    <h5 class="course-title">Pemrograman Java untuk Pemula</h5>
                                    <div class="progress-container mb-2">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 50%;"></div>
                                        </div>
                                        <span class="progress-text">50%</span>
                                    </div>

                                    <p class="text-mutedd small-text">Kemajuan keseluruhan
                                </div>

                                <!-- Selanjutnya -->
                                <div class="course-next d-flex flex-column align-items-start">
                                    <p class="text-atas">Selanjutnya</p>
                                    <div class="d-flex align-items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-2" style="width: 21px; height: 21px; transform: translateY(-10px);" viewBox="0 0 21 21" fill="none">
                                        <path d="M0 4.15625C0 3.311 0.686 2.625 1.53125 2.625H19.4688C20.314 2.625 21 3.311 21 4.15625V16.8438C21 17.2499 20.8387 17.6393 20.5515 17.9265C20.2643 18.2137 19.8749 18.375 19.4688 18.375H1.53125C1.12514 18.375 0.735658 18.2137 0.448493 17.9265C0.161328 17.6393 0 17.2499 0 16.8438L0 4.15625ZM1.53125 3.9375C1.47323 3.9375 1.41759 3.96055 1.37657 4.00157C1.33555 4.04259 1.3125 4.09823 1.3125 4.15625V16.8438C1.3125 16.9645 1.4105 17.0625 1.53125 17.0625H19.4688C19.5268 17.0625 19.5824 17.0395 19.6234 16.9984C19.6645 16.9574 19.6875 16.9018 19.6875 16.8438V4.15625C19.6875 4.09823 19.6645 4.04259 19.6234 4.00157C19.5824 3.96055 19.5268 3.9375 19.4688 3.9375H1.53125Z" fill="#4A5568"/>
                                        <path d="M7.875 13.636V7.36402C7.87513 7.28554 7.89637 7.20855 7.93648 7.14111C7.97659 7.07366 8.03411 7.01824 8.103 6.98067C8.17189 6.94309 8.24962 6.92473 8.32805 6.92752C8.40647 6.93031 8.4827 6.95414 8.54875 6.99652L13.4278 10.1316C13.4895 10.1712 13.5404 10.2257 13.5756 10.2901C13.6108 10.3545 13.6292 10.4266 13.6292 10.5C13.6292 10.5734 13.6108 10.6456 13.5756 10.71C13.5404 10.7743 13.4895 10.8288 13.4278 10.8684L8.54875 14.0044C8.4827 14.0468 8.40647 14.0706 8.32805 14.0734C8.24962 14.0762 8.17189 14.0578 8.103 14.0202C8.03411 13.9827 7.97659 13.9273 7.93648 13.8598C7.89637 13.7924 7.87513 13.7154 7.875 13.6369V13.636Z" fill="#4A5568"/>
                                        </svg>
                                        <a href="{{ route('kursus.java-pemula', ['show' => 'content-materippt3']) }}" class="text-primary">Studi kasus sederhana menggunakan kontrol alur</a>
                                    </div>
                                    <div class="text-muted small">
                                        <span>Modul 2</span>
                                        <span class="border-separator"></span>
                                        <span>PDF</span>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Kursus 2 -->
                        <div class="container mt-4">
                            <div class="course-item">
                                <!-- Gambar -->
                                <div class="course-image">
                                    <img src="{{ Vite::asset('resources/images/rest api dengan golang.png') }}" alt="Pemrograman Java untuk Pemula">
                                </div>

                                <!-- Informasi Kursus -->
                                <div class="course-info">
                                    <h5 class="course-title">REST API dengan Golang</h5>
                                    <div class="progress-container mb-2">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 10%;"></div>
                                        </div>
                                        <span class="progress-text">10%</span>
                                    </div>

                                    <p class="text-mutedd small-text">Kemajuan keseluruhan
                                </div>

                                <!-- Selanjutnya -->
                                <div class="course-next d-flex flex-column align-items-start">
                                    <p class="text-atas">Selanjutnya</p>
                                    <div class="d-flex align-items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-2" style="width: 21px; height: 21px; transform: translateY(-10px);" viewBox="0 0 21 21" fill="none">
                                        <path d="M0 4.15625C0 3.311 0.686 2.625 1.53125 2.625H19.4688C20.314 2.625 21 3.311 21 4.15625V16.8438C21 17.2499 20.8387 17.6393 20.5515 17.9265C20.2643 18.2137 19.8749 18.375 19.4688 18.375H1.53125C1.12514 18.375 0.735658 18.2137 0.448493 17.9265C0.161328 17.6393 0 17.2499 0 16.8438L0 4.15625ZM1.53125 3.9375C1.47323 3.9375 1.41759 3.96055 1.37657 4.00157C1.33555 4.04259 1.3125 4.09823 1.3125 4.15625V16.8438C1.3125 16.9645 1.4105 17.0625 1.53125 17.0625H19.4688C19.5268 17.0625 19.5824 17.0395 19.6234 16.9984C19.6645 16.9574 19.6875 16.9018 19.6875 16.8438V4.15625C19.6875 4.09823 19.6645 4.04259 19.6234 4.00157C19.5824 3.96055 19.5268 3.9375 19.4688 3.9375H1.53125Z" fill="#4A5568"/>
                                        <path d="M7.875 13.636V7.36402C7.87513 7.28554 7.89637 7.20855 7.93648 7.14111C7.97659 7.07366 8.03411 7.01824 8.103 6.98067C8.17189 6.94309 8.24962 6.92473 8.32805 6.92752C8.40647 6.93031 8.4827 6.95414 8.54875 6.99652L13.4278 10.1316C13.4895 10.1712 13.5404 10.2257 13.5756 10.2901C13.6108 10.3545 13.6292 10.4266 13.6292 10.5C13.6292 10.5734 13.6108 10.6456 13.5756 10.71C13.5404 10.7743 13.4895 10.8288 13.4278 10.8684L8.54875 14.0044C8.4827 14.0468 8.40647 14.0706 8.32805 14.0734C8.24962 14.0762 8.17189 14.0578 8.103 14.0202C8.03411 13.9827 7.97659 13.9273 7.93648 13.8598C7.89637 13.7924 7.87513 13.7154 7.875 13.6369V13.636Z" fill="#4A5568"/>
                                        </svg>
                                        <a href="#" class="text-primary">Struktur kontrol (if, switch, loop)</a>
                                    </div>
                                    <div class="text-muted small">
                                        <span>Modul 1</span>
                                        <span class="border-separator"></span>
                                        <span>Video</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        {{-- Kursus 3 --}}
                        <div class="container mt-4">
                            <div class="course-item">
                                <!-- Gambar -->
                                <div class="course-image">
                                    <img src="{{ Vite::asset('resources/images/bahasa jepang n3.png') }}" alt="Pemrograman Java untuk Pemula">
                                </div>

                                <!-- Informasi Kursus -->
                                <div class="course-info">
                                    <h5 class="course-title">Bahasa Jepang N3</h5>
                                    <div class="progress-container mb-2">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 10%;"></div>
                                        </div>
                                        <span class="progress-text">10%</span>
                                    </div>

                                    <p class="text-mutedd small-text">Kemajuan keseluruhan
                                </div>

                                <!-- Selanjutnya -->
                                <div class="course-next d-flex flex-column align-items-start">
                                    <p class="text-atas">Selanjutnya</p>
                                    <div class="d-flex align-items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-2" style="width: 21px; height: 21px; transform: translateY(-10px);" viewBox="0 0 21 21" fill="none">
                                        <path d="M0 4.15625C0 3.311 0.686 2.625 1.53125 2.625H19.4688C20.314 2.625 21 3.311 21 4.15625V16.8438C21 17.2499 20.8387 17.6393 20.5515 17.9265C20.2643 18.2137 19.8749 18.375 19.4688 18.375H1.53125C1.12514 18.375 0.735658 18.2137 0.448493 17.9265C0.161328 17.6393 0 17.2499 0 16.8438L0 4.15625ZM1.53125 3.9375C1.47323 3.9375 1.41759 3.96055 1.37657 4.00157C1.33555 4.04259 1.3125 4.09823 1.3125 4.15625V16.8438C1.3125 16.9645 1.4105 17.0625 1.53125 17.0625H19.4688C19.5268 17.0625 19.5824 17.0395 19.6234 16.9984C19.6645 16.9574 19.6875 16.9018 19.6875 16.8438V4.15625C19.6875 4.09823 19.6645 4.04259 19.6234 4.00157C19.5824 3.96055 19.5268 3.9375 19.4688 3.9375H1.53125Z" fill="#4A5568"/>
                                        <path d="M7.875 13.636V7.36402C7.87513 7.28554 7.89637 7.20855 7.93648 7.14111C7.97659 7.07366 8.03411 7.01824 8.103 6.98067C8.17189 6.94309 8.24962 6.92473 8.32805 6.92752C8.40647 6.93031 8.4827 6.95414 8.54875 6.99652L13.4278 10.1316C13.4895 10.1712 13.5404 10.2257 13.5756 10.2901C13.6108 10.3545 13.6292 10.4266 13.6292 10.5C13.6292 10.5734 13.6108 10.6456 13.5756 10.71C13.5404 10.7743 13.4895 10.8288 13.4278 10.8684L8.54875 14.0044C8.4827 14.0468 8.40647 14.0706 8.32805 14.0734C8.24962 14.0762 8.17189 14.0578 8.103 14.0202C8.03411 13.9827 7.97659 13.9273 7.93648 13.8598C7.89637 13.7924 7.87513 13.7154 7.875 13.6369V13.636Z" fill="#4A5568"/>
                                        </svg>
                                        <a href="#" class="text-primary">Latihan berbicara dan mendengarkan dasar</a>
                                    </div>
                                    <div class="text-muted small">
                                        <span>Modul 1</span>
                                        <span class="border-separator"></span>
                                        <span>Video</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tab Selesai -->
                <div class="tab-pane fade" id="selesai" role="tabpanel">
                    <div class="row">
                        <!-- Kursus 1 -->
                        <div class="container mt-4">
                            <div class="course-item">
                                <!-- Gambar -->
                                <div class="course-image">
                                    <img src="{{ Vite::asset('resources/images/HTML CSS JS pemula.png') }}" alt="Pemrograman Java untuk Pemula">
                                </div>

                                <!-- Informasi Kursus -->
                                <div class="course-info">
                                    <h5 class="course-title">HTML, CSS, dan JavaScript untuk Pemula</h5>
                                    <div class="progress-container mb-2">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 100%;"></div>
                                        </div>
                                        <span class="progress-text">100%</span>
                                    </div>

                                    <p class="text-mutedd small-text">Kemajuan keseluruhan
                                </div>

                                <!-- Selanjutnya -->
                                <div class="course-next d-flex flex-column align-items-start">
                                    <p class="text-atas">Selesai</p>
                                     <!-- Ikon Sertifikat -->
                                        <div class="icon-text-container d-flex flex-column align-items-end">
                                            <!-- Ikon Sertifikat -->
                                            <div class="icon-container">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 58 58" fill="none">
                                                    <path d="M29 30.8125C29 31.2932 28.809 31.7542 28.4691 32.0941C28.1292 32.434 27.6682 32.625 27.1875 32.625H16.3125C15.8318 32.625 15.3708 32.434 15.0309 32.0941C14.691 31.7542 14.5 31.2932 14.5 30.8125C14.5 30.3318 14.691 29.8708 15.0309 29.5309C15.3708 29.191 15.8318 29 16.3125 29H27.1875C27.6682 29 28.1292 29.191 28.4691 29.5309C28.809 29.8708 29 30.3318 29 30.8125ZM27.1875 21.75H16.3125C15.8318 21.75 15.3708 21.941 15.0309 22.2809C14.691 22.6208 14.5 23.0818 14.5 23.5625C14.5 24.0432 14.691 24.5042 15.0309 24.8441C15.3708 25.184 15.8318 25.375 16.3125 25.375H27.1875C27.6682 25.375 28.1292 25.184 28.4691 24.8441C28.809 24.5042 29 24.0432 29 23.5625C29 23.0818 28.809 22.6208 28.4691 22.2809C28.1292 21.941 27.6682 21.75 27.1875 21.75ZM52.5625 36.583V50.75C52.5654 51.0695 52.4837 51.3842 52.3258 51.662C52.1679 51.9398 51.9394 52.1709 51.6633 52.3319C51.3873 52.4929 51.0736 52.5781 50.7541 52.5788C50.4345 52.5795 50.1205 52.4957 49.8438 52.3359L44.4062 49.223L38.9688 52.3359C38.692 52.4957 38.378 52.5795 38.0584 52.5788C37.7389 52.5781 37.4252 52.4929 37.1492 52.3319C36.8731 52.1709 36.6446 51.9398 36.4867 51.662C36.3288 51.3842 36.2471 51.0695 36.25 50.75V45.3125H9.0625C8.10109 45.3125 7.17906 44.9306 6.49924 44.2508C5.81942 43.5709 5.4375 42.6489 5.4375 41.6875V12.6875C5.4375 11.7261 5.81942 10.8041 6.49924 10.1242C7.17906 9.44442 8.10109 9.0625 9.0625 9.0625H48.9375C49.8989 9.0625 50.8209 9.44442 51.5008 10.1242C52.1806 10.8041 52.5625 11.7261 52.5625 12.6875V19.6045C53.7083 20.7017 54.6201 22.0194 55.243 23.4784C55.8659 24.9374 56.187 26.5074 56.187 28.0937C56.187 29.6801 55.8659 31.2501 55.243 32.7091C54.6201 34.1681 53.7083 35.4858 52.5625 36.583ZM36.25 41.6875V36.583C34.2749 34.6782 33.0266 32.1436 32.7206 29.4167C32.4146 26.6898 33.0701 23.9416 34.5739 21.6463C36.0778 19.3511 38.3357 17.6527 40.9579 16.8444C43.5802 16.0361 46.4024 16.1685 48.9375 17.2187V12.6875H9.0625V41.6875H36.25ZM48.9375 38.9687C47.5021 39.5685 45.9619 39.8773 44.4062 39.8773C42.8506 39.8773 41.3104 39.5685 39.875 38.9687V47.628L43.5 45.5527C43.7739 45.3961 44.084 45.3137 44.3995 45.3137C44.715 45.3137 45.025 45.3961 45.2989 45.5527L48.9239 47.628L48.9375 38.9687ZM52.5625 28.0937C52.5625 26.4806 52.0841 24.9037 51.1879 23.5624C50.2917 22.2211 49.0179 21.1757 47.5275 20.5584C46.0372 19.941 44.3972 19.7795 42.815 20.0942C41.2329 20.4089 39.7796 21.1857 38.6389 22.3264C37.4982 23.4671 36.7214 24.9204 36.4067 26.5025C36.092 28.0847 36.2535 29.7246 36.8709 31.215C37.4882 32.7054 38.5336 33.9792 39.8749 34.8754C41.2162 35.7716 42.7931 36.25 44.4062 36.25C45.4773 36.25 46.5379 36.039 47.5275 35.6291C48.5171 35.2192 49.4162 34.6185 50.1736 33.8611C50.931 33.1037 51.5317 32.2046 51.9416 31.215C52.3515 30.2254 52.5625 29.1648 52.5625 28.0937Z" fill="#0056D2"/>
                                                </svg>
                                            </div>

                                            <!-- Teks Deskripsi -->
                                            <p class="text-primary mt-2" style="font-size: 14px;">Sertifikat dapat di download</p>

                                            <div class="button-container">
                                                <button class="custom-button" id="showPopup">Lihat sertifikat</button>
                                            </div>

                                        </div>
                                </div>
                                <!-- Popup -->
                                <div id="certificatePopup" class="popup-overlay">
                                    <div class="popup-content">
                                        <span id="closePopup" class="close-button">&times;</span>
                                        <div class="certificate-container">
                                            <!-- Gambar sertifikat -->
                                            <img src="{{ Vite::asset('resources/images/sertifikat baru.png') }}" alt="Certificate Preview" class="certificate-image" />
                                        </div>
                                        <a href="{{ asset('images/sertifikat baru.pdf') }}" download class="download-button">Download sertifikat</a>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>

    /* Gaya untuk kontainer utama */
.pembelajaran-container {
    margin-top: 40px;
    margin-bottom: 120px;
}

.custom-text-style {
    font-size: 28px; /* Mengatur ukuran font */
    font-weight: 600; /* Menyamakan gaya dengan h3 */
    color: #0056D2; /* Warna biru */
    margin-bottom: 16px; /* Sesuaikan jarak bawah jika perlu */
}
.custom-margin {
    margin-bottom: 34px; /* Atur jarak sesuai kebutuhan */
}
.pengingat-belajar {
    background: #f9fafc;
    border-radius: 24px;
    padding: 20px;
    margin-top: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.pengingat-belajar h3 {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 13px;
}

.pengingat-belajar p {
    font-size: 14px;
    color: #6c757d;
    margin-bottom: 32px;
}

.actions {
    display: flex;
    gap: 10px;
}

.btn-primary {
    background: #0066cc;
    color: #fff;
    border: none;
    border-radius: 30px;
    width: 100px;
    height: 37px;
    text-align: center;
    cursor: pointer;
}

.btn-secondary {
    background: none;
    color: #0066cc;
    border: 2px solid #0066cc;
    border-radius: 30px;
    width: 100px;
    height: 37px;
    text-align: center;
    cursor: pointer;
}
.nav-tabs .nav-link.active {
    background-color: transparent !important;
}
.btn-primary, .btn-secondary {
    font-size: 14px; /* Sesuaikan sesuai kebutuhan */
}


.btn-primary:hover, .btn-secondary:hover {
    opacity: 0.8;
}

.course-list {
    margin-top: 30px;
}

.pengingat-belajar h3 {
    font-size: 18px;
    font-weight: bold;
}


.course-item {
    background-color: #f9fafb;
    border-radius: 20px;
    padding: 20px;
    display: flex;align-items: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}
.course-image img {
    width: 306px;
    border-radius: 8px;
}
.course-info {
    flex: 1;
    margin-left: 20px;
}
.progress {
    background-color: #e9ecef;
    height: 8px;
    border-radius: 5px;
}
.progress-bar {
    background-color: #003D94;
}
.course-next {
    text-align: right;
    font-size: 0.9rem;
    width: 320px; /* Ubah lebar menjadi 300px */
    height: 150px; /* Ubah tinggi menjadi 150px */
    margin-bottom: 30px;
    padding-left: 20px !important;
    border-left: 3px solid #dee2e6; /* Garis vertikal */

}
.course-next a {
    color: #007bff;
    font-weight: 600;
    text-decoration: none;
    font-size: 16px; /* Ukuran teks untuk link */
    text-align: left;
    display: block; /* Pastikan ini block agar tidak terpengaruh Flexbox */
}
.course-next a:hover {
    text-decoration: underline;
}
.course-title {
    margin-bottom: 32px;
    font-size: 20px; /* Sesuaikan sesuai kebutuhan */
    font-weight: 600;
    color: #0056D2;
}
.small-text {
    font-size: 12px;
}
.progress-custom {
    width: 517px;
}
.progress-container {
    display: flex;
    align-items: center;
    width: 517px;
}
.progress-container .progress {
    flex-grow: 1;
}
.progress-container .progress-text {
    margin-left: 8px;
    color: #6c757d; /* Warna teks muted */
    font-size: 14px;
}
.icon-play {
    color: #6c757d; /* Warna muted */
}
.course-next .text-muted {
    font-size: 14px; /* Ukuran teks muted */
}
.text-primary {
  width: 231px;
  display: inline-block;
  font-size: 16px;
  font-weight: 600;
  margin-left: 16px; /* Geser ke kanan */

}
.text-muted {
    margin-top: 10px; /* Geser ke bawah */
    margin-left: 50px; /* Geser ke kanan */
}
a.text-primary {
    text-decoration: none; /* Hilangkan garis bawah secara default */
}

a.text-primary:hover {
    text-decoration: none; /* Hilangkan garis bawah saat hover */
}
.border-separator {
    display: inline-block;
    width: 2px;
    height: 16px; /* Sesuaikan tinggi */
    background-color: #ccc; /* Warna garis */
    margin: 0 8px; /* Memberi jarak ke kiri dan kanan */
    vertical-align: middle; /* Untuk meratakan dengan teks */
}

.text-mutedd {
    margin-top: 10px; /* Geser ke bawah */
    margin-left: 5px; /* Geser ke kanan */
}
.course-tabs {
    border-bottom: 1px solid #e0e0e0; /* Garis pemisah */
    padding-bottom: 10px;
}

.btn-tab {
    background: none;
    background-color: transparent; /* Hilangkan background */
    border: none;
    font-size: 16px;
    font-weight: bold;
    color: #4A5568; /* Warna abu-abu */
    cursor: pointer;
    padding: 5px 10px;
    transition: color 0.3s, border-bottom 0.3s;
}

.btn-tab.active {
    background-color: transparent; /* Hilangkan background */
    color: #2563eb; /* Warna biru untuk tab aktif */
    border-bottom: 2px solid #2563eb; /* Garis bawah biru */
}

.btn-tab:hover {
    color: #2563eb;
}
/* Kontainer untuk SVG dan teks */
.icon-text-container {
    width: 100%; /* Mengambil lebar penuh */
    display: flex;
    flex-direction: column; /* Menumpuk SVG dan teks secara vertikal */
    align-items: flex-end; /* Menempatkan kedua elemen di kanan */
}

/* Kontainer SVG */
.icon-container {
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Teks deskripsi */
.text-primary {
    font-size: 14px;
    margin-top: 10px; /* Memberikan jarak antara SVG dan teks */
}
.custom-button {
    background-color: #0056D2; /* Warna biru */
    color: white; /* Warna teks */
    font-size: 14px; /* Ukuran teks */
    font-weight: 600; /* Ketebalan teks */
    border: none; /* Hilangkan border */
    border-radius: 25px; /* Membuat bentuk oval */
    padding: 10px 20px; /* Padding tombol */
    cursor: pointer; /* Ubah kursor saat hover */
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Tambahkan bayangan */
    transition: background-color 0.3s ease; /* Animasi perubahan warna */
}

.custom-button:hover {
    background-color: #003D94; /* Warna saat hover */
}
/* Overlay */

.certificate-image {
    display: block;
    max-width: 100%;
    margin-bottom: 70px; /* Tambahkan jarak antara gambar dan tombol */
}

.popup-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

/* Konten Popup */
.popup-content {
    position: relative; /* untuk memastikan elemen di dalamnya bisa diposisikan */
    padding: 20px;
    text-align: center;
    width: 80%;
    max-width: 500px;
    border-radius: 10px;
    background: white;
}

/* Tombol Tutup */
.close-button {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 24px;
    color: #333;
    cursor: pointer;
}

/* Gambar Sertifikat */
.certificate-image {
    max-width: 100%;
    border-radius: 8px;
}

/* Tombol Download */
.download-button {
    background-color: #0056d2;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 10px;
    cursor: pointer;
    text-decoration: none; /* Menghilangkan garis bawah */
    font-size: 16px;
    position: absolute; /* Posisi absolut untuk memindahkannya */
    right: 20px; /* Jarak dari sisi kanan */
    bottom: 20px; /* Jarak dari sisi bawah */
}

#certificatePopup .download-button {
    border-radius: 18px !important; /* Tambahkan !important jika perlu */
}

.download-button:hover {
    background-color: #0041a8;
}

.modal-dialog {
    position: fixed; /* Agar posisi modal tetap pada layar */
        margin-top: 8%; /* Sesuaikan nilai ini untuk mengatur posisi */
        padding: 20px;
        justify-content: center; /* Memusatkan secara horizontal */
        align-items: center; /* Memusatkan secara vertikal */
        left: 28%; /* Setel posisi horizontal ke 50% dari lebar layar */
}
.modal-header {
        border-bottom: none; /* Menghapus border bawah */
        box-shadow: none;   /* Menghapus bayangan jika ada */
        padding: 20px;
}
.modal-footer {
        border-top : none; /* Menghapus border bawah */
        box-shadow: none;   /* Menghapus bayangan jika ada */
}
.modal-content {
            width: 700px;
            height: auto;
            padding: 20px;
}
.d-flex .btn-primary {
    margin-top: 30px;
}
.form-label {
            font-size: 14px;
}
/* Gaya umum untuk tombol */
.button-container {
    display: flex;
    gap: 20px; /* Memberikan jarak antar tombol */
    justify-content: flex-end; /* Menempatkan tombol di ujung kanan */
    margin-top: 10px;
}

.btn-prev-custom {
    border-radius: 50px; /* Membuat sudut menjadi bulat */
    border: 2px solid #007bff; /* Garis border biru */
    font-size: 14px; /* Mengatur ukuran font menjadi 14px */
}
.btn-prev-custom {
    border-radius: 50px; /* Membuat sudut menjadi bulat */
    border: 2px solid #007bff; /* Garis border biru */
    font-size: 14px; /* Mengatur ukuran font menjadi 14px */
}


/* Membuat tombol rounded */
.rounded-btn {
    border-radius: 50px;
    padding: 7px 10px;
    font-size: 14px;
    position: relative; /* Untuk meletakkan ikon checklist */
    transition: all 0.3s ease;
    border: 2px solid #007bff; /* Garis border biru */
    gap: 5px; /* Memberikan jarak antara checklist dan teks */
}

/* Warna solid jika tombol dipilih */
.rounded-btn.selected {
    background-color: #0056D2;
    color: white;
    border-color: #0056D2;
}

/* Menambahkan ikon checklist */
.rounded-btn.selected::before {
    content: '✔'; /* Simbol checklist */
    color: white;
    font-size: 16px;
    margin-right: 8px; /* Memberikan jarak antara checklist dan teks */
}

/* Gaya untuk tombol hari */
.day-btn {
    font-size: 12px; /* Ukuran font */
    border-radius: 50px; /* Membuat tombol rounded */
    padding: 7px 14px; /* Mengatur padding */
    margin: 5px; /* Memberikan jarak antar tombol */
    transition: all 0.3s ease; /* Animasi untuk efek hover */
}

.day-btn.selected {
    background-color: #007bff; /* Warna solid saat dipilih */
    color: white;
    border-color: #007bff;
}
.semibold-text {
    font-size: 20px;
    font-weight: 600;
}




</style>
<script>
    document.getElementById("showPopup").addEventListener("click", function () {
    document.getElementById("certificatePopup").style.display = "flex";
});

document.getElementById("closePopup").addEventListener("click", function () {
    document.getElementById("certificatePopup").style.display = "none";
});

// Close popup on clicking outside
document.getElementById("certificatePopup").addEventListener("click", function (event) {
    if (event.target === this) {
        this.style.display = "none";
    }
});

document.addEventListener("DOMContentLoaded", () => {
    // Ambil elemen langkah
    const step1 = document.getElementById("step1");
    const step2 = document.getElementById("step2");
    const step3 = document.getElementById("step3");

    // Ambil tombol
    const nextButton1 = document.getElementById("nextButton1");
    const prevButton2 = document.getElementById("prevButton2");
    const nextButton2 = document.getElementById("nextButton2");
    const prevButton3 = document.getElementById("prevButton3");
    const finishButton = document.getElementById("finishButton");

    // Event untuk tombol "Berikutnya" di step1
    nextButton1.addEventListener("click", () => {
        step1.style.display = "none"; // Sembunyikan step1
        step2.style.display = "block"; // Tampilkan step2
    });

    // Event untuk tombol "Sebelumnya" di step2
    prevButton2.addEventListener("click", () => {
        step2.style.display = "none"; // Sembunyikan step2
        step1.style.display = "block"; // Tampilkan step1
    });

    // Event untuk tombol "Berikutnya" di step2
    nextButton2.addEventListener("click", () => {
        step2.style.display = "none"; // Sembunyikan step2
        step3.style.display = "block"; // Tampilkan step3
    });

    // Event untuk tombol "Sebelumnya" di step3
    prevButton3.addEventListener("click", () => {
        step3.style.display = "none"; // Sembunyikan step3
        step2.style.display = "block"; // Tampilkan step2
    });

    // Event untuk tombol "Selesai" di step3
    finishButton.addEventListener("click", () => {
        alert("Proses selesai. Terima kasih!");
        // Tambahkan logika tambahan seperti menutup modal atau mereset form
    });
});



// Pilih tombol
const frequencyButtons = document.querySelectorAll('.rounded-btn');
const dayOptions = document.getElementById('dayOptions');

// Tambahkan event listener untuk tombol frekuensi
frequencyButtons.forEach(button => {
    button.addEventListener('click', () => {
        // Hapus kelas 'selected' dari semua tombol
        frequencyButtons.forEach(btn => btn.classList.remove('selected'));
        // Tambahkan kelas 'selected' ke tombol yang dipilih
        button.classList.add('selected');

        // Tampilkan atau sembunyikan opsi hari berdasarkan tombol yang dipilih
        if (button.id === 'weekly' || button.id === 'once') {
            dayOptions.style.display = 'block';
        } else {
            dayOptions.style.display = 'none';
        }
    });
});

// Tambahkan event listener untuk tombol hari
const dayButtons = document.querySelectorAll('.day-btn');
dayButtons.forEach(button => {
    button.addEventListener('click', () => {
        // Toggle kelas 'selected' pada tombol hari
        button.classList.toggle('selected');
    });
});

const btnAbaikan = document.getElementById("btnAbaikan");
const pengingatBelajar = document.querySelector(".pengingat-belajar");

// Tambahkan event listener untuk menghilangkan elemen
btnAbaikan.addEventListener("click", function () {
    pengingatBelajar.style.display = "none";
});


function resetSteps() {
    document.getElementById('step1').style.display = 'block';
    document.getElementById('step2').style.display = 'none';
    document.getElementById('step3').style.display = 'none';
}

pengingatModal.addEventListener('show.bs.modal', function (event) {
    resetSteps();
});





</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


@endsection
