<div class="container my-4">
    <div class="video-container">
        <video id="custom-video" width="100%">
            <source src="{{ Vite::asset('resources/images/video6.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="video-controls">
            <button id="play-pause-btn">
                <i class="bi bi-play-fill"></i>
            </button>
            <span id="current-time">0:00</span> / <span id="duration">0:00</span>
            <input id="progress-bar" type="range" value="0" min="0" max="100">
            <button id="speed-btn">1x</button>
            <button id="fullscreen-btn">⛶</button>
        </div>
    </div>


    <!-- Tabs -->
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-umum-tab" data-bs-toggle="tab" data-bs-target="#nav-umum" type="button" role="tab">Umum</button>
            <button class="nav-link" id="nav-catatan-tab" data-bs-toggle="tab" data-bs-target="#nav-catatan" type="button" role="tab">Catatan</button>
            <button class="nav-link" id="nav-forum-tab" data-bs-toggle="tab" data-bs-target="#nav-forum" type="button" role="tab">Forum</button>
            <button class="nav-link" id="nav-konten-tab" data-bs-toggle="tab" data-bs-target="#nav-konten" type="button" role="tab">Konten</button>
        </div>
    </nav>

    <!-- Isi Konten Tabs -->
    <div class="tab-content mt-4" id="nav-tabContent">
        <!-- Tab Umum -->
        <div class="tab-pane fade show active" id="nav-umum" role="tabpanel">
            <h4 class="heading-custom">Pengenalan Java untuk Pemula</h4>

            <p>
                <span class="rating-custom">4,8
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="22" viewBox="0 0 21 22" fill="none">
                        <path d="M3.77586 19.7424L5.33995 12.9807L0.0942383 8.43283L7.02435 7.83125L9.71939 1.45459L12.4144 7.83125L19.3445 8.43283L14.0988 12.9807L15.6629 19.7424L9.71939 16.157L3.77586 19.7424Z" fill="#FF8000"/>
                      </svg>
                </span>
                <span class="peserta-custom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27" fill="none">
                        <path d="M9.56299 13.5C11.7382 13.5 13.5005 11.7377 13.5005 9.5625C13.5005 7.38731 11.7382 5.625 9.56299 5.625C7.3878 5.625 5.62549 7.38731 5.62549 9.5625C5.62549 11.7377 7.3878 13.5 9.56299 13.5ZM21.938 11.5312C21.938 13.2407 20.5537 14.625 18.8442 14.625C18.0237 14.625 17.2368 14.2991 16.6566 13.7189C16.0764 13.1387 15.7505 12.3518 15.7505 11.5312C15.7505 9.82181 17.1348 8.4375 18.8442 8.4375C20.5537 8.4375 21.938 9.82181 21.938 11.5312ZM9.56299 14.625C11.1009 14.625 13.6034 15.1037 15.2448 16.0566C15.9153 16.7389 16.313 17.4831 16.313 18.225V21.375H2.25049V18.225C2.25049 15.831 7.1223 14.625 9.56299 14.625ZM24.7505 21.375H17.438V18.225C17.438 17.4285 17.1505 16.695 16.6932 16.0408C17.56 15.8473 18.4134 15.75 19.0653 15.75C21.1617 15.75 24.7505 16.7552 24.7505 18.7498V21.375Z" fill="#0056D2"/>
                      </svg>
                    <span class="participant-number">1.201 peserta</span>
                </span>
            </p>
            <p class="info"> <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                <path d="M9.875 7.125H11.625V5.375H9.875M10.75 16.75C6.89125 16.75 3.75 13.6087 3.75 9.75C3.75 5.89125 6.89125 2.75 10.75 2.75C14.6087 2.75 17.75 5.89125 17.75 9.75C17.75 13.6087 14.6087 16.75 10.75 16.75ZM10.75 1C9.60093 1 8.46312 1.22633 7.40152 1.66605C6.33992 2.10578 5.37533 2.7503 4.56282 3.56282C2.92187 5.20376 2 7.42935 2 9.75C2 12.0706 2.92187 14.2962 4.56282 15.9372C5.37533 16.7497 6.33992 17.3942 7.40152 17.8339C8.46312 18.2737 9.60093 18.5 10.75 18.5C13.0706 18.5 15.2962 17.5781 16.9372 15.9372C18.5781 14.2962 19.5 12.0706 19.5 9.75C19.5 8.60093 19.2737 7.46312 18.8339 6.40152C18.3942 5.33992 17.7497 4.37533 16.9372 3.56282C16.1247 2.7503 15.1601 2.10578 14.0985 1.66605C13.0369 1.22633 11.8991 1 10.75 1ZM9.875 14.125H11.625V8.875H9.875V14.125Z" fill="#4A5568"/>
              </svg>Terakhir diperbarui Desember 2023
            </p>
            <div class="deskripsi-section">
                <h5>Deskripsi</h5>
                <p>
                    Selamat datang di kursus Pemrograman Java untuk Pemula! Kursus ini dirancang untuk memberikan Anda pemahaman yang mendalam tentang bahasa pemrograman Java, yang merupakan salah satu bahasa yang paling banyak digunakan di dunia. Dengan pendekatan yang sistematis dan praktis, kursus ini akan membekali Anda dengan keterampilan yang diperlukan untuk memulai karir di bidang pengembangan perangkat lunak.
                    <br><br>
                    Kursus ini cocok untuk siapa saja yang ingin memulai karir di bidang pemrograman, baik Anda seorang pemula yang sama sekali baru dalam dunia pemrograman atau seseorang yang ingin memperdalam pengetahuan tentang Java. Tidak diperlukan pengalaman sebelumnya, hanya semangat untuk belajar dan berkomitmen untuk berlatih.
                    <br><br>
                    Dengan mengikuti kursus Pemrograman Java untuk Pemula, Anda akan mendapatkan pemahaman yang kuat tentang dasar-dasar pemrograman yang dapat diterapkan di berbagai bidang. Java adalah bahasa yang banyak digunakan di industri, dan keterampilan ini akan membuka banyak peluang karir di bidang pengembangan perangkat lunak, pengembangan aplikasi mobile, dan banyak lagi.
                </p>
            </div>

            <!-- Tambahan Pengajar -->
            <div class="pengajar-section">
                <h5>Pengajar</h5>
                <div class="pengajar">
                    <img src="{{ Vite::asset('resources/images/profile2.png') }}" alt="Alexander" class="pengajar-img">
                    <div class="pengajar-text">
                        <h6>Alexander</h6>
                        <p>Seorang pengembang perangkat lunak berpengalaman dengan lebih dari 5 tahun <br>pengalaman dalam pengembangan aplikasi menggunakan Java.</p>
                    </div>
                </div>
                <div class="pengajar">
                    <img src="{{ Vite::asset('resources/images/profile6.png') }}" alt="Richardo" class="pengajar-img">
                    <div class="pengajar-text">
                        <h6>Richardo</h6>
                        <p>Richardo adalah seorang ahli teknologi informasi dengan gelar Magister Teknik dengan <br>lebih dari 7 tahun pengalaman di industri perangkat lunak.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tab Catatan -->
        <div class="tab-pane fade" id="nav-catatan" role="tabpanel">
            <div class="container mt-3" style="margin-bottom: 40px;">
                <!-- Input Catatan -->
                <div class="position-relative mb-3">
                    <!-- Input Field -->
                    <input  id="note-input" type="text" class="form-control rounded custom-height" placeholder="Tambah catatan baru" aria-label="Tambah catatan">

                    <!-- SVG Button di dalam Input -->
                    <button id="add-note-btn" class="btn position-absolute top-50 translate-middle-y p-0" style="right: 10px; background: none; border: none;" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 1.625C9.99449 1.66147 7.12235 2.87161 4.99698 4.99698C2.87161 7.12235 1.66147 9.99449 1.625 13C1.66147 16.0055 2.87161 18.8776 4.99698 21.003C7.12235 23.1284 9.99449 24.3385 13 24.375C16.0055 24.3385 18.8776 23.1284 21.003 21.003C23.1284 18.8776 24.3385 16.0055 24.375 13C24.3385 9.99449 23.1284 7.12235 21.003 4.99698C18.8776 2.87161 16.0055 1.66147 13 1.625ZM19.5 13.8125H13.8125V19.5H12.1875V13.8125H6.5V12.1875H12.1875V6.5H13.8125V12.1875H19.5V13.8125Z" fill="black"/>
                        </svg>
                    </button>
                </div>


                <!-- Dropdown Section -->
                <div class="d-flex justify-content-start gap-2 mb-2">
                    <!-- Dropdown "Semua materi" -->
                    <select id="materiFilter" class="form-select filter w-auto" name="materi">
                        <option value="semua">Semua materi</option>
                        <option value="modul1">Modul 1</option>
                        <option value="modul2">Modul 2</option>
                        <option value="modul3">Modul 3</option>
                        <option value="modul4">Modul 4</option>
                        <option value="modul5">Modul 5</option>
                    </select>

                    <!-- Dropdown "Terbaru" -->
                    <select id="waktuFilter" class="form-select filter w-auto" name="waktu">
                        <option value="terbaru">Terbaru</option>
                        <option value="1hari">1 hari yang lalu</option>
                        <option value="1minggu">1 minggu yang lalu</option>
                        <option value="1bulan">1 bulan yang lalu</option>
                    </select>
                </div>

            </div>

            <!-- Notes List -->
            <div id="card-container">
                <!-- Note Cards -->
                <div id="notes-container" class="card mb-4 shadow-sm" data-materi="modul1" data-waktu="1hari">
                    <!-- Catatan baru akan ditambahkan di sini -->
                </div>
                <div class="card mb-4 shadow-sm" data-materi="modul1" data-waktu="1hari">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <span class="custom-badge">6:03</span>
                            <div>
                                <strong>Modul 1: Pengantar dan Dasar-dasar Pemrograman Java</strong>
                                <p class="text-muted m-0" style="font-size: 0.875rem;">Instalasi JDK dan pengaturan IDE (NetBeans, Eclipse, IntelliJ)</p>
                            </div>
                            <div class="ms-auto d-flex align-items-center">
                                <a href="#" class="action-link custom-margin">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="custom-icon" viewBox="0 0 16 16" fill="none">
                                        <path d="M14.1997 1.80025C13.9912 1.59145 13.7435 1.42581 13.4709 1.31279C13.1982 1.19977 12.906 1.1416 12.6109 1.1416C12.3158 1.1416 12.0235 1.19977 11.7509 1.31279C11.4783 1.42581 11.2306 1.59145 11.022 1.80025L2.57288 10.25C2.32145 10.5014 2.1386 10.8134 2.0426 11.1563L1.1586 14.3134C1.13817 14.3866 1.13757 14.4639 1.15686 14.5374C1.17614 14.6109 1.21462 14.6779 1.26835 14.7316C1.32208 14.7854 1.38912 14.8238 1.46262 14.8431C1.53611 14.8624 1.61341 14.8618 1.6866 14.8414L4.84317 13.9574C5.18625 13.8621 5.49873 13.6794 5.75002 13.4271L14.1997 4.9774C14.4085 4.76884 14.574 4.5212 14.687 4.24862C14.8 3.97605 14.8581 3.68388 14.8581 3.38883C14.8581 3.09377 14.8 2.8016 14.687 2.52903C14.574 2.25645 14.4085 2.00881 14.1997 1.80025ZM11.6283 2.40597C11.889 2.14537 12.2425 1.999 12.6111 1.99906C12.9797 1.99911 13.3331 2.14558 13.5937 2.40625C13.8543 2.66692 14.0007 3.02044 14.0006 3.38903C14.0006 3.75762 13.8541 4.11109 13.5935 4.37168L12.7135 5.25111L10.7483 3.2854L11.6283 2.40597ZM10.1426 3.89168L12.1083 5.8574L5.14374 12.8214C4.99664 12.9695 4.81347 13.0766 4.61231 13.1323L2.18888 13.8105L2.86717 11.3877C2.92353 11.1868 3.03058 11.0038 3.17802 10.8563L10.1426 3.89168Z" fill="black"/>
                                    </svg>
                                    Edit
                                </a>
                                <a href="#" class="action-link custom-margin btn-delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M5.62512 2.875H5.50012C5.56887 2.875 5.62512 2.81875 5.62512 2.75V2.875ZM5.62512 2.875H10.3751V2.75C10.3751 2.81875 10.4314 2.875 10.5001 2.875H10.3751V4H11.5001V2.75C11.5001 2.19844 11.0517 1.75 10.5001 1.75H5.50012C4.94856 1.75 4.50012 2.19844 4.50012 2.75V4H5.62512V2.875ZM13.5001 4H2.50012C2.22356 4 2.00012 4.22344 2.00012 4.5V5C2.00012 5.06875 2.05637 5.125 2.12512 5.125H3.06887L3.45481 13.2969C3.47981 13.8297 3.92043 14.25 4.45325 14.25H11.547C12.0814 14.25 12.5204 13.8312 12.5454 13.2969L12.9314 5.125H13.8751C13.9439 5.125 14.0001 5.06875 14.0001 5V4.5C14.0001 4.22344 13.7767 4 13.5001 4ZM11.4267 13.125H4.57356L4.19543 5.125H11.8048L11.4267 13.125Z" fill="black"/>
                                    </svg>
                                    Hapus
                                </a>
                            </div>
                        </div>
                        <div class="container">
                            <p class="text-shift-right">Penjelasan tentang struktur dasar program Java.</p>
                        </div>
                    </div>
                </div>


                <div class="card mb-4 shadow-sm" data-materi="modul1" data-waktu="1hari">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <span class="custom-badge">4:30</span>
                            <div>
                                <strong>Modul 2 : Ekspresi dan Kontrol Alur Program
                                </strong>
                                <p class="text-muted m-0" style="font-size: 0.875rem;">Struktur kontrol if-else dan switch-case
                                </p>
                            </div>
                            <div class="ms-auto d-flex align-items-center">
                                <a href="#" class="action-link custom-margin">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="custom-icon" viewBox="0 0 16 16" fill="none">
                                        <path d="M14.1997 1.80025C13.9912 1.59145 13.7435 1.42581 13.4709 1.31279C13.1982 1.19977 12.906 1.1416 12.6109 1.1416C12.3158 1.1416 12.0235 1.19977 11.7509 1.31279C11.4783 1.42581 11.2306 1.59145 11.022 1.80025L2.57288 10.25C2.32145 10.5014 2.1386 10.8134 2.0426 11.1563L1.1586 14.3134C1.13817 14.3866 1.13757 14.4639 1.15686 14.5374C1.17614 14.6109 1.21462 14.6779 1.26835 14.7316C1.32208 14.7854 1.38912 14.8238 1.46262 14.8431C1.53611 14.8624 1.61341 14.8618 1.6866 14.8414L4.84317 13.9574C5.18625 13.8621 5.49873 13.6794 5.75002 13.4271L14.1997 4.9774C14.4085 4.76884 14.574 4.5212 14.687 4.24862C14.8 3.97605 14.8581 3.68388 14.8581 3.38883C14.8581 3.09377 14.8 2.8016 14.687 2.52903C14.574 2.25645 14.4085 2.00881 14.1997 1.80025ZM11.6283 2.40597C11.889 2.14537 12.2425 1.999 12.6111 1.99906C12.9797 1.99911 13.3331 2.14558 13.5937 2.40625C13.8543 2.66692 14.0007 3.02044 14.0006 3.38903C14.0006 3.75762 13.8541 4.11109 13.5935 4.37168L12.7135 5.25111L10.7483 3.2854L11.6283 2.40597ZM10.1426 3.89168L12.1083 5.8574L5.14374 12.8214C4.99664 12.9695 4.81347 13.0766 4.61231 13.1323L2.18888 13.8105L2.86717 11.3877C2.92353 11.1868 3.03058 11.0038 3.17802 10.8563L10.1426 3.89168Z" fill="black"/>
                                    </svg>
                                    Edit
                                </a>
                                <a href="#" class="action-link custom-margin btn-delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M5.62512 2.875H5.50012C5.56887 2.875 5.62512 2.81875 5.62512 2.75V2.875ZM5.62512 2.875H10.3751V2.75C10.3751 2.81875 10.4314 2.875 10.5001 2.875H10.3751V4H11.5001V2.75C11.5001 2.19844 11.0517 1.75 10.5001 1.75H5.50012C4.94856 1.75 4.50012 2.19844 4.50012 2.75V4H5.62512V2.875ZM13.5001 4H2.50012C2.22356 4 2.00012 4.22344 2.00012 4.5V5C2.00012 5.06875 2.05637 5.125 2.12512 5.125H3.06887L3.45481 13.2969C3.47981 13.8297 3.92043 14.25 4.45325 14.25H11.547C12.0814 14.25 12.5204 13.8312 12.5454 13.2969L12.9314 5.125H13.8751C13.9439 5.125 14.0001 5.06875 14.0001 5V4.5C14.0001 4.22344 13.7767 4 13.5001 4ZM11.4267 13.125H4.57356L4.19543 5.125H11.8048L11.4267 13.125Z" fill="black"/>
                                    </svg>
                                    Hapus
                                </a>
                            </div>
                        </div>
                        <div class="container">
                            <p class="text-shift-right">Contoh sederhana penggunaan variabel dan tipe data.</p>
                        </div>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm" data-materi="modul2" data-waktu="1minggu">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <span class="custom-badge">4:30</span>
                            <div>
                                <strong>Modul 2: Dasar-Dasar HTTP dan Routing</strong>
                                <p class="text-muted m-0" style="font-size: 0.875rem;">Pengenalan Package net/http di Golang</p>
                            </div>
                            <div class="ms-auto d-flex align-items-center ">
                                <a href="#" class="action-link custom-margin">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="custom-icon" viewBox="0 0 16 16" fill="none">
                                        <path d="M14.1997 1.80025C13.9912 1.59145 13.7435 1.42581 13.4709 1.31279C13.1982 1.19977 12.906 1.1416 12.6109 1.1416C12.3158 1.1416 12.0235 1.19977 11.7509 1.31279C11.4783 1.42581 11.2306 1.59145 11.022 1.80025L2.57288 10.25C2.32145 10.5014 2.1386 10.8134 2.0426 11.1563L1.1586 14.3134C1.13817 14.3866 1.13757 14.4639 1.15686 14.5374C1.17614 14.6109 1.21462 14.6779 1.26835 14.7316C1.32208 14.7854 1.38912 14.8238 1.46262 14.8431C1.53611 14.8624 1.61341 14.8618 1.6866 14.8414L4.84317 13.9574C5.18625 13.8621 5.49873 13.6794 5.75002 13.4271L14.1997 4.9774C14.4085 4.76884 14.574 4.5212 14.687 4.24862C14.8 3.97605 14.8581 3.68388 14.8581 3.38883C14.8581 3.09377 14.8 2.8016 14.687 2.52903C14.574 2.25645 14.4085 2.00881 14.1997 1.80025ZM11.6283 2.40597C11.889 2.14537 12.2425 1.999 12.6111 1.99906C12.9797 1.99911 13.3331 2.14558 13.5937 2.40625C13.8543 2.66692 14.0007 3.02044 14.0006 3.38903C14.0006 3.75762 13.8541 4.11109 13.5935 4.37168L12.7135 5.25111L10.7483 3.2854L11.6283 2.40597ZM10.1426 3.89168L12.1083 5.8574L5.14374 12.8214C4.99664 12.9695 4.81347 13.0766 4.61231 13.1323L2.18888 13.8105L2.86717 11.3877C2.92353 11.1868 3.03058 11.0038 3.17802 10.8563L10.1426 3.89168Z" fill="black"/>
                                    </svg>
                                    Edit
                                </a>
                                <a href="#" class="action-link custom-margin btn-delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M5.62512 2.875H5.50012C5.56887 2.875 5.62512 2.81875 5.62512 2.75V2.875ZM5.62512 2.875H10.3751V2.75C10.3751 2.81875 10.4314 2.875 10.5001 2.875H10.3751V4H11.5001V2.75C11.5001 2.19844 11.0517 1.75 10.5001 1.75H5.50012C4.94856 1.75 4.50012 2.19844 4.50012 2.75V4H5.62512V2.875ZM13.5001 4H2.50012C2.22356 4 2.00012 4.22344 2.00012 4.5V5C2.00012 5.06875 2.05637 5.125 2.12512 5.125H3.06887L3.45481 13.2969C3.47981 13.8297 3.92043 14.25 4.45325 14.25H11.547C12.0814 14.25 12.5204 13.8312 12.5454 13.2969L12.9314 5.125H13.8751C13.9439 5.125 14.0001 5.06875 14.0001 5V4.5C14.0001 4.22344 13.7767 4 13.5001 4ZM11.4267 13.125H4.57356L4.19543 5.125H11.8048L11.4267 13.125Z" fill="black"/>
                                    </svg>
                                    Hapus
                                </a>
                            </div>
                        </div>
                        <div class="container">
                            <p class="text-shift-right">Cara mendefinisikan route dasar untuk endpoint API.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tab Forum -->
        <div class="tab-pane fade" id="nav-forum" role="tabpanel">
            <div class="container mt-5 custom-container">
                <!-- Profil -->
                <div class="profile-info d-flex align-items-center mb-4">
                    <img
                        src="{{ Vite::asset('resources/images/profile.png') }}"
                        alt="Foto Profil"
                        class="profile-img me-3"
                    >
                    <div>
                        <span class="profile-name">Anda</span>
                        <span>(Budiono Siregar)</span>
                    </div>
                </div>
                <div class="message-input position-relative">
                    <input
                        id="message-input1"
                        type="text"
                        class="form-control custom-input"
                        placeholder="Ketik pesan">
                    <button class="rounded-post-btn" id="post-btn1">Post</button>
                </div>
            </div>
            <div id="discussion-container1" class="container mt-5" style="display: none;">

            </div>

            <div class="container mt-5">
                <!-- Kartu Diskusi -->
                <div class="discussion-card">
                  <div class="d-flex justify-content-between">
                    <!-- Informasi Profil -->
                    <div class="d-flex align-items-center">
                      <img
                        src="{{ Vite::asset('resources/images/profile3.png') }}"
                        alt="Foto Profil"
                        class="profile-img me-2"
                      >
                      <div>
                        <p class="user-name">Martha</p>
                      </div>
                    </div>
                    <!-- Waktu Post -->
                    <div class="post-time">1 hari yang lalu</div>
                  </div>

                  <!-- Isi Komentar -->
                  <p class="discussion-text">
                    Saya berhasil membuat program Java sederhana! Bagaimana cara membuat program yang lebih kompleks?
                  </p>

                  <!-- Ikon Interaksi -->
                  <div class="d-flex interaction-icons">
                    <div class="me-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                            <path d="M4.58366 8.24996V19.25H0.916992V8.24996H4.58366ZM8.25033 19.25C7.7641 19.25 7.29778 19.0568 6.95396 18.713C6.61015 18.3692 6.41699 17.9029 6.41699 17.4166V8.24996C6.41699 7.74579 6.61866 7.28746 6.95783 6.95746L12.9895 0.916626L13.9612 1.88829C14.2087 2.13579 14.3645 2.47496 14.3645 2.85079L14.337 3.14413L13.4662 7.33329H19.2503C19.7366 7.33329 20.2029 7.52645 20.5467 7.87026C20.8905 8.21408 21.0837 8.6804 21.0837 9.16663V11C21.0837 11.2383 21.0378 11.4583 20.9553 11.6691L18.187 18.1316C17.912 18.7916 17.2612 19.25 16.5003 19.25H8.25033ZM8.25033 17.4166H16.5278L19.2503 11V9.16663H11.1928L12.2287 4.28996L8.25033 8.27746V17.4166Z" fill="black"/>
                          </svg> 100 menyukai
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                            <path d="M17.4167 3.66663H4.58333C4.0971 3.66663 3.63079 3.85978 3.28697 4.2036C2.94315 4.54741 2.75 5.01373 2.75 5.49996V19.25L5.92808 16.8666C6.24543 16.6286 6.6314 16.5 7.02808 16.5H17.4167C17.9029 16.5 18.3692 16.3068 18.713 15.963C19.0568 15.6192 19.25 15.1529 19.25 14.6666V5.49996C19.25 5.01373 19.0568 4.54741 18.713 4.2036C18.3692 3.85978 17.9029 3.66663 17.4167 3.66663Z" stroke="black" stroke-width="1.83333" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg> 20 membalas
                    </div>
                  </div>
                </div>
            </div>
            <div class="container mt-5">
                <!-- Kartu Diskusi -->
                <div class="discussion-card">
                  <div class="d-flex justify-content-between">
                    <!-- Informasi Profil -->
                    <div class="d-flex align-items-center">
                      <img
                        src="{{ Vite::asset('resources/images/profile5.png') }}"
                        alt="Foto Profil"
                        class="profile-img me-2"
                      >
                      <div>
                        <p class="user-name">Tejo</p>
                      </div>
                    </div>
                    <!-- Waktu Post -->
                    <div class="post-time">3 hari yang lalu</div>
                  </div>

                  <!-- Isi Komentar -->
                  <p class="discussion-text">
                    Saya ingin membuat aplikasi mobile dengan Java. Bagaimana cara memulai?
                  </p>

                  <!-- Ikon Interaksi -->
                  <div class="d-flex interaction-icons">
                    <div class="me-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                            <path d="M4.58366 8.24996V19.25H0.916992V8.24996H4.58366ZM8.25033 19.25C7.7641 19.25 7.29778 19.0568 6.95396 18.713C6.61015 18.3692 6.41699 17.9029 6.41699 17.4166V8.24996C6.41699 7.74579 6.61866 7.28746 6.95783 6.95746L12.9895 0.916626L13.9612 1.88829C14.2087 2.13579 14.3645 2.47496 14.3645 2.85079L14.337 3.14413L13.4662 7.33329H19.2503C19.7366 7.33329 20.2029 7.52645 20.5467 7.87026C20.8905 8.21408 21.0837 8.6804 21.0837 9.16663V11C21.0837 11.2383 21.0378 11.4583 20.9553 11.6691L18.187 18.1316C17.912 18.7916 17.2612 19.25 16.5003 19.25H8.25033ZM8.25033 17.4166H16.5278L19.2503 11V9.16663H11.1928L12.2287 4.28996L8.25033 8.27746V17.4166Z" fill="black"/>
                          </svg> 30 menyukai
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                            <path d="M17.4167 3.66663H4.58333C4.0971 3.66663 3.63079 3.85978 3.28697 4.2036C2.94315 4.54741 2.75 5.01373 2.75 5.49996V19.25L5.92808 16.8666C6.24543 16.6286 6.6314 16.5 7.02808 16.5H17.4167C17.9029 16.5 18.3692 16.3068 18.713 15.963C19.0568 15.6192 19.25 15.1529 19.25 14.6666V5.49996C19.25 5.01373 19.0568 4.54741 18.713 4.2036C18.3692 3.85978 17.9029 3.66663 17.4167 3.66663Z" stroke="black" stroke-width="1.83333" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg> 9 membalas
                    </div>
                  </div>
                </div>
            </div>
            <div class="container mt-5">
                <!-- Kartu Diskusi -->
                <div class="discussion-card">
                  <div class="d-flex justify-content-between">
                    <!-- Informasi Profil -->
                    <div class="d-flex align-items-center">
                      <img
                        src="{{ Vite::asset('resources/images/profile4.png') }}"
                        alt="Foto Profil"
                        class="profile-img me-2"
                      >
                      <div>
                        <p class="user-name">Albert</p>
                      </div>
                    </div>
                    <!-- Waktu Post -->
                    <div class="post-time">6 hari yang lalu</div>
                  </div>

                  <!-- Isi Komentar -->
                  <p class="discussion-text">
                    Apa itu peran Java dalam industri teknologi? Bagaimana cara membuat karir di bidang Java? 
                  </p>

                  <!-- Ikon Interaksi -->
                  <div class="d-flex interaction-icons">
                    <div class="me-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                            <path d="M4.58366 8.24996V19.25H0.916992V8.24996H4.58366ZM8.25033 19.25C7.7641 19.25 7.29778 19.0568 6.95396 18.713C6.61015 18.3692 6.41699 17.9029 6.41699 17.4166V8.24996C6.41699 7.74579 6.61866 7.28746 6.95783 6.95746L12.9895 0.916626L13.9612 1.88829C14.2087 2.13579 14.3645 2.47496 14.3645 2.85079L14.337 3.14413L13.4662 7.33329H19.2503C19.7366 7.33329 20.2029 7.52645 20.5467 7.87026C20.8905 8.21408 21.0837 8.6804 21.0837 9.16663V11C21.0837 11.2383 21.0378 11.4583 20.9553 11.6691L18.187 18.1316C17.912 18.7916 17.2612 19.25 16.5003 19.25H8.25033ZM8.25033 17.4166H16.5278L19.2503 11V9.16663H11.1928L12.2287 4.28996L8.25033 8.27746V17.4166Z" fill="black"/>
                          </svg> 42 menyukai
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                            <path d="M17.4167 3.66663H4.58333C4.0971 3.66663 3.63079 3.85978 3.28697 4.2036C2.94315 4.54741 2.75 5.01373 2.75 5.49996V19.25L5.92808 16.8666C6.24543 16.6286 6.6314 16.5 7.02808 16.5H17.4167C17.9029 16.5 18.3692 16.3068 18.713 15.963C19.0568 15.6192 19.25 15.1529 19.25 14.6666V5.49996C19.25 5.01373 19.0568 4.54741 18.713 4.2036C18.3692 3.85978 17.9029 3.66663 17.4167 3.66663Z" stroke="black" stroke-width="1.83333" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg> 23 membalas
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <!-- Tab Konten -->
        <div class="tab-pane fade" id="nav-konten" role="tabpanel">
            <div class="container mt-5">
                <!-- Card Material -->
                <div class="material-card">
                    <!-- Gambar Modul -->
                    <div class="material-image">
                        <img src="{{ Vite::asset('resources/images/Pemrograman java untuk pemula.png') }}" alt="Thumbnail Materi">
                    </div>
                    <!-- Konten Materi -->
                    <div class="material-content">
                        <h5>Pengenalan Java</h5>
                        <p class="mb-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                                <path d="M0 3.76042C0 2.99567 0.620667 2.375 1.38542 2.375H17.6146C18.3793 2.375 19 2.99567 19 3.76042V15.2396C19 15.607 18.854 15.9594 18.5942 16.2192C18.3344 16.479 17.982 16.625 17.6146 16.625H1.38542C1.01798 16.625 0.665595 16.479 0.405779 16.2192C0.145963 15.9594 0 15.607 0 15.2396L0 3.76042ZM1.38542 3.5625C1.33293 3.5625 1.28259 3.58335 1.24547 3.62047C1.20835 3.65758 1.1875 3.70793 1.1875 3.76042V15.2396C1.1875 15.3488 1.27617 15.4375 1.38542 15.4375H17.6146C17.6671 15.4375 17.7174 15.4166 17.7545 15.3795C17.7916 15.3424 17.8125 15.2921 17.8125 15.2396V3.76042C17.8125 3.70793 17.7916 3.65758 17.7545 3.62047C17.7174 3.58335 17.6671 3.5625 17.6146 3.5625H1.38542Z" fill="#4A5568"/>
                                <path d="M7.125 12.3373V6.66263C7.12512 6.59163 7.14433 6.52197 7.18062 6.46095C7.21692 6.39993 7.26896 6.34979 7.33129 6.31579C7.39362 6.28179 7.46395 6.26518 7.5349 6.26771C7.60586 6.27023 7.67483 6.29179 7.73458 6.33013L12.1489 9.16667C12.2048 9.20249 12.2508 9.25178 12.2827 9.31002C12.3145 9.36826 12.3312 9.43358 12.3312 9.49996C12.3312 9.56635 12.3145 9.63166 12.2827 9.68991C12.2508 9.74815 12.2048 9.79744 12.1489 9.83326L7.73458 12.6706C7.67483 12.7089 7.60586 12.7305 7.5349 12.733C7.46395 12.7355 7.39362 12.7189 7.33129 12.6849C7.26896 12.6509 7.21692 12.6008 7.18062 12.5398C7.14433 12.4788 7.12512 12.4091 7.125 12.3381V12.3373Z" fill="#4A5568"/>
                              </svg>
                            Video
                        </p>
                    </div>
                    <!-- Tombol Download -->
                    <div class="download-section">
                        <a href="{{ asset('images/video6.mp4') }}" class="text-decoration-none text-dark fw-semibold" download class="download-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M8.00033 10.6666L4.66699 7.33329L5.60033 6.36663L7.33366 8.09996V2.66663H8.66699V8.09996L10.4003 6.36663L11.3337 7.33329L8.00033 10.6666ZM4.00033 13.3333C3.63366 13.3333 3.31988 13.2028 3.05899 12.942C2.7981 12.6811 2.66744 12.3671 2.66699 12V9.99996H4.00033V12H12.0003V9.99996H13.3337V12C13.3337 12.3666 13.2032 12.6806 12.9423 12.942C12.6814 13.2033 12.3674 13.3337 12.0003 13.3333H4.00033Z" fill="black"/>
                              </svg>
                            Download
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<style>
    /* isi konten tabs */
.heading-custom {
    font-size: 24px;
    font-weight: 600;
    color: #2D3748;
    margin-top: 50px;
    margin-bottom:34px;

}
.rating-custom {
    font-size: 16px;
    font-weight: 600;
    color: #000;
    margin-right: 30px;
    align-items: center;
}
.rating-custom svg {
    margin-left: 8px;
}
.participant-number {
    font-size: 16px;
    font-weight: 600;
    color: #000;
    align-items: center;
}
.info{
    font-size: 14px;
    font-weight: 400;
    color: #4A5568;
    margin-top: 48px;
    margin-bottom: 96px;
}
.info svg {
    margin-right: 4px;
}

.deskripsi-section h5 {
    font-size: 16px;
    font-weight: 600;
    color: #2D3748;
}
.deskripsi-section p {
    font-size: 14px;
    font-weight: 400;
    color: #4A5568;
}
.pengajar-section{
    margin-top: 120px;
    margin-bottom: 210px;
}
.pengajar-section h5 {
    font-size: 16px;
    font-weight: 600;
    color: #2D3748;
    margin-bottom: 38px;
}
.pengajar-text h6 {
    font-size: 16px;
    font-weight: 600;
    color: #0056D2;
}
.pengajar-text p {
    font-size: 10px;
    font-weight: 400;
    color: #2D3748;
}
.pengajar-img {
    width: 80px; /* Atur ukuran gambar */
    height: 80px;
    border-radius: 50%; /* Membuat gambar menjadi lingkaran */
    object-fit: cover; /* Menjaga proporsi gambar */
    margin-right: 15px; /* Jarak antara gambar dan teks */
}
.pengajar {
    display: flex; /* Mengaktifkan flexbox */
    align-items: center; /* Vertikal: Tengah */
    margin-bottom: 50px; /* Jarak antar pengajar */
}

/* catatan */
.card {
    border-radius: 12px;
    border: none;
    margin-bottom: 28px !important;
}

.card-body {
    padding: 20px;
}

.card-title {
    font-size: 1.25rem;
    font-weight: 600;
    color: #333;
}
h1.h4 {
    margin-bottom: 40px; /* Sesuaikan nilai dengan kebutuhan */
    font-weight: 600;
    font-size: 28px;
}


.badge {
    font-size: 0.875rem;
}
.text-muted {
    font-size: 0.875rem;
}

.btn-link {
    font-size: 0.875rem;
    padding: 0;
}

.btn-link.text-danger {
    color: #dc3545;
}
.custom-badge {
    background-color: #2D3748; /* Warna sesuai permintaan */
    border-radius: 10px; /* Membuat sudut melengkung */
    padding: 10px; /* Menambah ruang di dalam badge */
    color: #fff; /* Warna teks agar kontras */
    font-size: 14px; /* Ukuran teks */
    display: inline-flex;
    height: 23px;
    justify-content: center;
    align-items: center;
    margin-right: 40px; /* Jarak antara badge dan teks */

}
.custom-icon {
    width: 16px;
    height: 16px;
    margin-right: 6px; /* Jarak antara ikon dan teks */
}

.action-link {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: #6c757d; /* Warna teks muted */
    font-size: 0.875rem; /* Ukuran teks */
}

.action-link:hover {
    color: #495057; /* Warna teks saat hover */
}
.custom-margin {
    margin-right: 14px;
}
.action-link svg {
    margin-right: 6px; /* Beri jarak antar ikon dan teks */
}

.text-shift-right {
    margin-left: 80px; /* atau padding-left sesuai kebutuhan */
    margin-top: 30px; /* atau padding-left sesuai kebutuhan */
}
.card .card-title {
    color: #0056D2;
}
.hidden {
    display: none;
}
.custom-height {
    height: 56px;
}

.custom-input {
    background-color: #f8fafd; /* Warna latar seperti gambar */
    border: 1px solid #80ABFF; /* Warna border biru lembut */
    border-radius: 15px; /* Lengkungan sudut */
    padding: 10px 15px;
    color: #A1ACBF; /* Warna teks placeholder */
}
.custom-input::placeholder {
    color: #c4cdd5; /* Warna placeholder lebih pucat */
}
.custom-input:focus {
    outline: none;
    box-shadow: 0 0 0 2px rgba(13, 110, 253, 0.25); /* Efek fokus biru */
}
.custom-btn {
    background-color: #0056D2;
    border-color: #0056D2;
    color: #ffffff;
    border-radius: 18px;
    font-size: 12px;
    font-weight: 500;
}
.custom-btn:hover {
    background-color: #004bb5;
    color: #ffffff;
    border-color: #004bb5;
}
.discussion-card {
    margin-bottom:40px;
}
/* Foto Profil */
.profile-img {
    width: 60px;
    height: 60px;
    border-radius: 50%; /* Membuat gambar menjadi lingkaran */
    object-fit: cover; /* Menjaga proporsi gambar */
}
.profile-info {
    display: flex;
    align-items: center;
    gap: 10px; /* Memberi jarak antara foto dan teks */
    margin-bottom: 15px;
}
.profile-name {
    font-weight: 600;
    color: #333;
    font-size: 16px;
}

.profile-img {
    width: 45px;
    height: 45px;
    border-radius: 50%; /* Membuat gambar bulat */
    object-fit: cover;
}
.user-name {
    font-weight: 600;
    color: #4C4C4C;
    margin-bottom: 0;
    margin-left: 10px;
    font-size: 16px;
}
.post-time {
    font-size: 12px;
    color: #888;
}
.discussion-text {
    color: #555;
    margin-top: 25px;
    margin-left: 57px;
    font-size: 14px;
}
.interaction-icons {
    color: #555;
    margin-left: 57px;
    margin-top:70px;
    font-size: 14px;
}
.interaction-icons i {
    margin-right: 5px;


}

/* download content */
/* Custom Style */
.material-card {
    padding: 20px;
    display: flex;
}
.material-image img {
    width: 100%;
    max-width: 200px;
    border-radius: 10px;
}
.material-content {
    flex-grow: 1;
    margin-left: 20px;
}
.material-content h5{
    font-size: 16px;
    color: var(--Neutral-400, #2D3748);
    font-weight: 400;
    margin-bottom: 40px;
}
.material-content p{
    font-size: 12px;
    color: var(--Neutral-400, #2D3748);
    font-weight: 400;
    margin-top: 60px;
}
.download-section {
    display: flex;
    align-items: center;
    color: #333;
    margin-top: 60px;
    font-size: 12px;
    font-weight: 400;
}
.download-section svg {
    margin-right: 5px;
}

.video-container {
    position: relative;
    width: 100%;
    max-width: 1000px;
    margin: auto;
    background: #000;
    margin-top: -20px;
    margin-bottom: 10px;
}

video {
    display: block;
    width: 100%;
    height: auto;
}

.video-controls {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: rgba(0, 0, 0, 0.8);
    padding: 10px;
    color: white;
}

.video-controls button {
    background: none;
    border: none;
    color: white;
    font-size: 16px;
    cursor: pointer;
}

#progress-bar {
    flex: 1;
    margin: 0 10px;
    cursor: pointer;
}

#current-time, #duration {
    font-size: 14px;
}
</style>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const video = document.getElementById('custom-video');
    const playPauseButton = document.getElementById('play-pause-btn');
    const progressBar = document.getElementById('progress-bar');
    const currentTimeDisplay = document.getElementById('current-time');
    const durationDisplay = document.getElementById('duration');
    const speedButton = document.getElementById('speed-btn');
    const fullscreenButton = document.getElementById('fullscreen-btn');
    const playIcon = '<i class="bi bi-play-fill"></i>';
    const pauseIcon = '<i class="bi bi-pause"></i>';

    // Play and Pause
    playPauseButton.addEventListener('click', () => {
        if (video.paused) {
            video.play();
            playPauseButton.innerHTML = pauseIcon; // Ganti dengan ikon Pause
        } else {
            video.pause();
            playPauseButton.innerHTML = playIcon; // Ganti dengan ikon Play
        }
    });

    // Update Progress Bar
    video.addEventListener('timeupdate', () => {
        const progress = (video.currentTime / video.duration) * 100;
        progressBar.value = progress;

        currentTimeDisplay.textContent = formatTime(video.currentTime);
        durationDisplay.textContent = formatTime(video.duration);
    });

    // Seek Video
    progressBar.addEventListener('input', () => {
        const newTime = (progressBar.value / 100) * video.duration;
        video.currentTime = newTime;
    });

    // Change Playback Speed
    speedButton.addEventListener('click', () => {
        const speeds = [1, 1.5, 2];
        let currentSpeed = speeds.indexOf(video.playbackRate);
        video.playbackRate = speeds[(currentSpeed + 1) % speeds.length];
        speedButton.textContent = `${video.playbackRate}x`;
    });

    // Fullscreen Mode
    fullscreenButton.addEventListener('click', () => {
        if (video.requestFullscreen) {
            video.requestFullscreen();
        }
    });

    // Format Time
    function formatTime(seconds) {
        const minutes = Math.floor(seconds / 60);
        seconds = Math.floor(seconds % 60);
        return `${minutes}:${seconds.toString().padStart(2, '0')}`;
    }
});
// Tangkap elemen-elemen yang dibutuhkan
document.addEventListener('DOMContentLoaded', () => {
    const pageId = '1';
    const postBtn = document.getElementById(`post-btn${pageId}`);
    const messageInput = document.getElementById(`message-input${pageId}`);
    const discussionContainer = document.getElementById(`discussion-container${pageId}`);

    // Tambahkan event listener untuk tombol "Post"
    postBtn.addEventListener('click', function () {
        const messageText = messageInput.value.trim(); // Ambil nilai input dan hapus spasi
        if (messageText === '') {
            alert('Pesan tidak boleh kosong!');
            return;
        }

        // Tampilkan container diskusi jika masih disembunyikan
        discussionContainer.style.display = 'block';

        // Buat elemen diskusi baru
        const discussionCard = document.createElement('div');
        discussionCard.classList.add('discussion-card');

        discussionCard.innerHTML = `
            <div class="d-flex justify-content-between">
                <!-- Informasi Profil -->
                <div class="d-flex align-items-center">
                    <img
                        src="{{ Vite::asset('resources/images/profile.png') }}"
                        alt="Foto Profil"
                        class="profile-img me-2"
                    >
                    <div>
                        <p class="user-name">Budiono Siregar</p>
                    </div>
                </div>
                <!-- Waktu Post -->
                <div class="post-time">1 detik yang lalu</div>
            </div>

            <!-- Isi Komentar -->
            <p class="discussion-text">${messageText}</p>

            <!-- Ikon Interaksi -->
            <div class="d-flex interaction-icons">
                <div class="me-4">
                     0 menyukai
                </div>
                <div>
                     0 membalas
                </div>
            </div>
        `;

        // Tambahkan elemen baru ke dalam container diskusi
        discussionContainer.appendChild(discussionCard);

        // Bersihkan input setelah posting
        messageInput.value = '';
    });
});
document.addEventListener('DOMContentLoaded', () => {
    const addNoteBtn = document.getElementById('add-note-btn'); // Tombol tambah catatan
    const noteInput = document.getElementById('note-input'); // Input field untuk isi catatan
    const notesContainer = document.getElementById('notes-container'); // Tempat menampung catatan

    // Fungsi untuk format waktu (misalnya menit:detik dari video)
    function getFormattedTime(currentTime) {
        const minutes = Math.floor(currentTime / 60); // Konversi ke menit
        const seconds = Math.floor(currentTime % 60).toString().padStart(2, '0'); // Sisa sebagai detik
        return `${minutes}:${seconds}`; // Format menit:detik
    }

    // Event listener untuk tombol tambah catatan
    addNoteBtn.addEventListener('click', () => {
        const noteText = noteInput.value.trim(); // Ambil teks dari input

        if (!noteText) {
            alert('Isi catatan tidak boleh kosong!');
            return;
        }

        const formattedTime = getFormattedTime(); // Ambil waktu catatan

        // Buat elemen catatan baru
        const newNote = document.createElement('div');
        newNote.classList.add('card', 'mb-4', 'shadow-sm');
        newNote.setAttribute('data-materi', 'modul1'); // Contoh data atribut
        newNote.setAttribute('data-waktu', '1hari'); // Contoh data atribut

        // Isi elemen card dengan konten HTML
        newNote.innerHTML = `
            <div class="card-body">
                <div class="d-flex align-items-center mb-2">
                    <span class="custom-badge">0:08</span>
                    <div>
                        <strong>Modul 1: Pengantar dan Dasar-dasar Pemrograman Java</strong>
                        <p class="text-muted m-0" style="font-size: 0.875rem;">Instalasi JDK dan pengaturan IDE (NetBeans, Eclipse, IntelliJ)</p>
                    </div>
                    <div class="ms-auto d-flex align-items-center">
                        <a href="#" class="action-link custom-margin">
                            <svg xmlns="http://www.w3.org/2000/svg" class="custom-icon" viewBox="0 0 16 16" fill="none">
                                        <path d="M14.1997 1.80025C13.9912 1.59145 13.7435 1.42581 13.4709 1.31279C13.1982 1.19977 12.906 1.1416 12.6109 1.1416C12.3158 1.1416 12.0235 1.19977 11.7509 1.31279C11.4783 1.42581 11.2306 1.59145 11.022 1.80025L2.57288 10.25C2.32145 10.5014 2.1386 10.8134 2.0426 11.1563L1.1586 14.3134C1.13817 14.3866 1.13757 14.4639 1.15686 14.5374C1.17614 14.6109 1.21462 14.6779 1.26835 14.7316C1.32208 14.7854 1.38912 14.8238 1.46262 14.8431C1.53611 14.8624 1.61341 14.8618 1.6866 14.8414L4.84317 13.9574C5.18625 13.8621 5.49873 13.6794 5.75002 13.4271L14.1997 4.9774C14.4085 4.76884 14.574 4.5212 14.687 4.24862C14.8 3.97605 14.8581 3.68388 14.8581 3.38883C14.8581 3.09377 14.8 2.8016 14.687 2.52903C14.574 2.25645 14.4085 2.00881 14.1997 1.80025ZM11.6283 2.40597C11.889 2.14537 12.2425 1.999 12.6111 1.99906C12.9797 1.99911 13.3331 2.14558 13.5937 2.40625C13.8543 2.66692 14.0007 3.02044 14.0006 3.38903C14.0006 3.75762 13.8541 4.11109 13.5935 4.37168L12.7135 5.25111L10.7483 3.2854L11.6283 2.40597ZM10.1426 3.89168L12.1083 5.8574L5.14374 12.8214C4.99664 12.9695 4.81347 13.0766 4.61231 13.1323L2.18888 13.8105L2.86717 11.3877C2.92353 11.1868 3.03058 11.0038 3.17802 10.8563L10.1426 3.89168Z" fill="black"/>
                                    </svg>
                        Edit</a>
                        <a href="#" class="action-link custom-margin btn-delete">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M5.62512 2.875H5.50012C5.56887 2.875 5.62512 2.81875 5.62512 2.75V2.875ZM5.62512 2.875H10.3751V2.75C10.3751 2.81875 10.4314 2.875 10.5001 2.875H10.3751V4H11.5001V2.75C11.5001 2.19844 11.0517 1.75 10.5001 1.75H5.50012C4.94856 1.75 4.50012 2.19844 4.50012 2.75V4H5.62512V2.875ZM13.5001 4H2.50012C2.22356 4 2.00012 4.22344 2.00012 4.5V5C2.00012 5.06875 2.05637 5.125 2.12512 5.125H3.06887L3.45481 13.2969C3.47981 13.8297 3.92043 14.25 4.45325 14.25H11.547C12.0814 14.25 12.5204 13.8312 12.5454 13.2969L12.9314 5.125H13.8751C13.9439 5.125 14.0001 5.06875 14.0001 5V4.5C14.0001 4.22344 13.7767 4 13.5001 4ZM11.4267 13.125H4.57356L4.19543 5.125H11.8048L11.4267 13.125Z" fill="black"/>
                                    </svg>
                        Hapus</a>
                    </div>
                </div>
                <div class="container">
                    <p class="text-shift-right">${noteText}</p>
                </div>
            </div>
        `;

        // Tambahkan elemen baru ke dalam notes container
        notesContainer.appendChild(newNote);

        // Kosongkan input setelah menambahkan catatan
        noteInput.value = '';
        const deleteButtons = document.querySelectorAll('.btn-delete');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function (event) {
                event.preventDefault(); // Mencegah aksi default link
                const card = button.closest('.card'); // Cari elemen induk terdekat dengan kelas 'card'
                if (card) {
                    card.remove(); // Hapus elemen card
                }
            });
        });

    });
});
const deleteButtons = document.querySelectorAll('.btn-delete');

deleteButtons.forEach(button => {
    button.addEventListener('click', function (event) {
        event.preventDefault(); // Mencegah aksi default link
        const card = button.closest('.card'); // Cari elemen induk terdekat dengan kelas 'card'
        if (card) {
            card.remove(); // Hapus elemen card
        }
    });
});

</script>
