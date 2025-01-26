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
        <input
            type="text"
            class="form-control course-title"
            value="Pemrograman Java untuk Pemula"
            placeholder="Masukkan judul kursus"
        />

        <!-- Tombol dalam flex container -->
        <div class="d-flex align-items-center">
            <!-- Tombol Pengaturan -->
            <a href="{{ route('admin.kursus.setting-edit') }}" class="btn btn-link d-flex align-items-center me-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none" style="margin-right: 8px;">
                    <path d="M15.2519 1.625C15.4239 1.62501 15.5915 1.67961 15.7305 1.78094C15.8695 1.88227 15.9727 2.02511 16.0254 2.18888L16.9191 4.966C17.2945 5.14963 17.6536 5.356 17.9965 5.58837L20.85 4.97413C21.0182 4.9382 21.1935 4.95661 21.3507 5.0267C21.5078 5.09679 21.6386 5.21494 21.7243 5.36413L23.9765 9.2625C24.0625 9.4116 24.0989 9.58417 24.0805 9.75531C24.0621 9.92646 23.9899 10.0873 23.8741 10.2147L21.916 12.376C21.9445 12.7904 21.9445 13.2063 21.916 13.6208L23.8741 15.7852C23.9899 15.9127 24.0621 16.0735 24.0805 16.2447C24.0989 16.4158 24.0625 16.5884 23.9765 16.7375L21.7243 20.6375C21.6383 20.7864 21.5074 20.9042 21.3503 20.974C21.1933 21.0438 21.0181 21.0619 20.85 21.0259L17.9965 20.4116C17.6553 20.6424 17.2945 20.8504 16.9208 21.034L16.0254 23.8111C15.9727 23.9749 15.8695 24.1177 15.7305 24.2191C15.5915 24.3204 15.4239 24.375 15.2519 24.375H10.7474C10.5754 24.375 10.4078 24.3204 10.2688 24.2191C10.1298 24.1177 10.0265 23.9749 9.97388 23.8111L9.08175 21.0356C8.7074 20.8525 8.34631 20.6435 8.00113 20.41L5.14925 21.0259C4.98101 21.0618 4.8057 21.0434 4.64859 20.9733C4.49148 20.9032 4.36067 20.7851 4.275 20.6359L2.02275 16.7375C1.93675 16.5884 1.90032 16.4158 1.91872 16.2447C1.93712 16.0735 2.00939 15.9127 2.12513 15.7852L4.08325 13.6208C4.05488 13.2074 4.05488 12.7926 4.08325 12.3792L2.12513 10.2147C2.00939 10.0873 1.93712 9.92646 1.91872 9.75531C1.90032 9.58417 1.93675 9.4116 2.02275 9.2625L4.275 5.3625C4.3609 5.21361 4.49182 5.0958 4.64891 5.02601C4.806 4.95622 4.98118 4.93806 5.14925 4.97413L8.00113 5.59C8.34563 5.35763 8.70638 5.148 9.08175 4.96438L9.9755 2.18888C10.028 2.02563 10.1307 1.88318 10.2691 1.78189C10.4074 1.68061 10.5743 1.62569 10.7458 1.625H15.2503H15.2519ZM14.6571 3.25H11.3421L10.4191 6.12138L9.79675 6.42525C9.49079 6.57497 9.19543 6.74545 8.91275 6.9355L8.3375 7.3255L5.3865 6.6885L3.729 9.5615L5.75213 11.8007L5.70338 12.4897C5.68002 12.8295 5.68002 13.1705 5.70338 13.5103L5.75213 14.1993L3.72575 16.4385L5.38488 19.3115L8.33588 18.6761L8.91113 19.0645C9.19381 19.2546 9.48916 19.425 9.79513 19.5747L10.4175 19.8786L11.3421 22.75H14.6604L15.5866 19.877L16.2074 19.5747C16.513 19.4254 16.8079 19.2549 17.0898 19.0645L17.6634 18.6761L20.616 19.3115L22.2735 16.4385L20.2488 14.1993L20.2975 13.5103C20.3209 13.1699 20.3209 12.8284 20.2975 12.4881L20.2488 11.7991L22.2751 9.5615L20.616 6.6885L17.6634 7.32225L17.0898 6.9355C16.8079 6.7451 16.513 6.5746 16.2074 6.42525L15.5866 6.123L14.6588 3.25H14.6571ZM12.9996 8.125C14.2926 8.125 15.5325 8.63861 16.4468 9.55285C17.361 10.4671 17.8746 11.7071 17.8746 13C17.8746 14.2929 17.361 15.5329 16.4468 16.4471C15.5325 17.3614 14.2926 17.875 12.9996 17.875C11.7067 17.875 10.4667 17.3614 9.55248 16.4471C8.63824 15.5329 8.12463 14.2929 8.12463 13C8.12463 11.7071 8.63824 10.4671 9.55248 9.55285C10.4667 8.63861 11.7067 8.125 12.9996 8.125ZM12.9996 9.75C12.1377 9.75 11.311 10.0924 10.7015 10.7019C10.092 11.3114 9.74963 12.138 9.74963 13C9.74963 13.862 10.092 14.6886 10.7015 15.2981C11.311 15.9076 12.1377 16.25 12.9996 16.25C13.8616 16.25 14.6882 15.9076 15.2977 15.2981C15.9072 14.6886 16.2496 13.862 16.2496 13C16.2496 12.138 15.9072 11.3114 15.2977 10.7019C14.6882 10.0924 13.8616 9.75 12.9996 9.75Z" fill="#4A5568"/>
                </svg> Pengaturan
            </a>
            <!-- Tombol Simpan -->
            <!-- Tombol Simpan -->
            <a href="{{ route('admin.kursus.index') }}" class="btn btn-primary me-2">
                Simpan
            </a>

            <!-- Tombol Cancel -->
            <a href="{{ route('admin.kursus.index') }}" class="btn btn-outline-primary">
                Cancel
            </a>
        </div>
    </div>
</div>
<div class="container my-3">
    <h2 class="header-title mb-4">Edit Kursus</h2>
    <div class="card">
        <form>
            <div class="d-flex align-items-center mb-4">
                <label for="category" class="form-label label-category me-3">Kategori</label>
                <select class="form-select adjust-select" id="category">
                    <option selected>Bahasa Pemrograman</option>
                    <option>Data Science</option>
                    <option>Desain</option>
                </select>
            </div>
            <div class="d-flex align-items-center mb-4 custom-cover">
                <label for="thumbnail" class="form-label label-thumbnail me-3">Cover Thumbnail</label>
                <div class="file-input-wrapper">
                    <input type="file" id="fileInput" class="file-input-style" onchange="updateFileName()" />
                    <button class="btn btn-primary">Choose file</button>
                    <span id="fileName">no file chosen</span>
                </div>
            </div>
            <div class="d-flex align-items-start mb-4 custom-div">
                <label for="shortDesc" class="form-label form-label-custom">Penjelasan Singkat</label>
                <textarea class="form-control custom-textarea" id="shortDesc" rows="3">Pemrograman Java adalah bahasa pemrograman yang kuat dan serbaguna, banyak digunakan dalam pengembangan aplikasi desktop, web, dan mobile. Kursus ini memberikan pemahaman dasar yang solid tentang Java, sehingga Anda dapat mulai membangun aplikasi yang efisien dan handal.
                </textarea>
            </div>
            <div class="d-flex align-items-start mb-4">
                <!-- Label -->
                <label for="description" class="form-label description-label">
                    Deskripsi
                </label>

                <!-- Textarea -->
                <textarea class="form-control description-textarea" id="description" rows="4">Selamat datang di kursus Pemrograman Java untuk Pemula! Kursus ini dirancang untuk memberikan Anda pemahaman yang mendalam tentang bahasa pemrograman Java, yang merupakan salah satu bahasa yang paling banyak digunakan di dunia. Dengan pendekatan yang sistematis dan praktis, kursus ini akan membekali Anda dengan keterampilan yang diperlukan untuk memulai karir di bidang pengembangan perangkat lunak.
                </textarea>
            </div>
            <div class="d-flex align-items-start mb-4">
                <!-- Label -->
                <label for="teaching-points" class="form-label teaching-points-label">
                    Poin - poin yang akan diajarkan
                </label>

                <!-- Input Fields -->
                <div class="w-100">
                    <input type="text" class="form-control mb-2 teaching-point-input" value="Konsep Dasar Pemrograman" />
                    <input type="text" class="form-control mb-2 teaching-point-input" value="Bahasa Pemrograman" />
                    <input type="text" class="form-control mb-2 teaching-point-input" value="Logika Berpikir dalam Pemrograman" />

                    <!-- Add Button -->
                    <button type="button" class="btn btn-link d-flex align-items-center mt-2 text-secondary teaching-point-add">
                        <span class="me-2"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                            <path d="M9.28125 7.46875V0.25H7.21875V7.46875H0V9.53125H7.21875V16.75H9.28125V9.53125H16.5V7.46875H9.28125Z" fill="#4A5568"/>
                          </svg></span> Tambah
                    </button>
                </div>
            </div>
            <div class="d-flex align-items-center additional-margin-top">
                <label class="custom-talent-label">Talent</label>
                <div class="d-flex gap-3">
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle custom-dropdown-button" type="button" id="dropdownTalent1" data-bs-toggle="dropdown" aria-expanded="false">
                            Alexander
                        </button>
                        <ul class="dropdown-menu custom-dropdown-menu" aria-labelledby="dropdownTalent1">
                            <li><a class="dropdown-item custom-dropdown-item" href="#">Agnes</a></li>
                            <li><a class="dropdown-item custom-dropdown-item" href="#">Vincent</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle custom-dropdown-button" type="button" id="dropdownTalent2" data-bs-toggle="dropdown" aria-expanded="false">
                            Richardo
                        </button>
                        <ul class="dropdown-menu custom-dropdown-menu" aria-labelledby="dropdownTalent2">
                            <li><a class="dropdown-item custom-dropdown-item" href="#">Robert</a></li>
                            <li><a class="dropdown-item custom-dropdown-item" href="#">Yuru</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Hasil yang Didapat Section -->
            <div class="d-flex align-items-center margin-top-added">
                <label class="custom-label-hasil">Hasil yang didapat</label>
                <div class="d-flex gap-3">
                    <button type="button" class="btn btn-outline-primary toggle-btn">Sertifikat</button>
                    <button type="button" class="btn btn-outline-primary toggle-btn">Materi dapat didownload</button>
                    <button type="button" class="btn btn-outline-primary toggle-btn">Forum diskusi</button>
                </div>
            </div>
            <div class="d-flex align-items-center duration-container">
                <span for="startDate" class="label-styled me-3">Durasi</span>
                <div class="d-flex align-items-center duration-labels">
                    <span class="me-2">Dari</span>
                    <div class="input-group me-3">
                      <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                      <input type="date" class="form-control" id="startDate" value="2024-02-19">
                    </div>
                    <span class="me-2">-</span>
                    <span class="me-2">Sampai</span>
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                      <input type="date" class="form-control" id="endDate" value="2024-02-19">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="container mt-6">
    <div class="card-custom">
      <div class="card-atas-custom">Modul 1</div>
      <form>
        <div class="mb-4 horizontal-form">
            <label for="namaModul" class="label-nama-modul">Nama modul</label>
            <input type="text" class="form-control input-custom" id="namaModul" placeholder="Pengantar dan Dasar-dasar Pemrograman Java" value="Pengantar dan Dasar-dasar Pemrograman Java">
        </div>

        <!-- Deskripsi -->
        <div class="mb-4 d-flex align-items-start">
            <label for="deskripsiModul" class="label-horizontal">Deskripsi</label>
            <textarea class="form-control form-horizontal" id="deskripsiModul" rows="4" placeholder="Masukkan deskripsi modul">Selamat datang di kursus Pemrograman Java untuk Pemula! Kursus ini dirancang untuk memberikan Anda pemahaman yang mendalam tentang bahasa pemrograman Java, yang merupakan salah satu bahasa yang paling banyak digunakan di dunia...</textarea>
        </div>


        <!-- Konten -->
        <div>
            <div class="input-container">
                <label for="kontenModul" class="label-aligned">Konten</label>
                    <div class="container custom-margin-top">
                            <div class="card custom-card-style p-3">
                                <button class="more-button toggle-dropdown" title="More" type="button" data-dropdown-id="dropdown1">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>

                                <div class="mb-3">
                                    <input type="text" class="form-control module-input-style" id="materi1" value="Pengertian Java">
                                </div>
                                <div class="mb-3 d-flex align-items-center">
                                    <label for="videoFile" class="label-new-style1">Video</label>
                                    <div class="custom-file-input">
                                        <input type="file" id="fileInput" onchange="updateFileName()" />
                                        <button class="btn btn-primary">Choose file</button>
                                        <span id="fileName">Pengertian Java.mp4</span>
                                    </div>
                                    <input type="text" class="custom-link-masukkan" placeholder="Link URL">
                                </div>
                                <div class="d-flex align-items-center">
                                    <label for="forumStatus" class="label-new-style2">Forum</label>
                                    <select class="form-select" id="forumStatus">
                                    <option value="aktif" selected>Aktif</option>
                                    <option value="nonaktif">Nonaktif</option>
                                    </select>
                                </div>
                            </div>
                            <div class="custom-dropdown" id="dropdown1">
                                <a href="#">Hapus</a>
                                <a href="#">Pindah ke atas</a>
                                <a href="#">Pindah ke bawah</a>
                            </div>

                            <div class="card custom-card-style p-3">
                                <button class="more-button toggle-dropdown" title="More" type="button" data-dropdown-id="dropdown2">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>

                                <div class="mb-3">
                                    <input type="text" class="form-control module-input-style" id="materi1" value="Instalasi JDK dan pengaturan IDE (NetBeans, Eclipse, IntelliJ)">
                                </div>
                                <div class="mb-3 d-flex align-items-center">
                                    <label for="videoFile" class="label-new-style1">Video</label>
                                    <div class="custom-file-input">
                                        <input type="file" id="fileInput" onchange="updateFileName()" />
                                        <button class="btn btn-primary">Choose file</button>
                                        <span id="fileName">Instalasi JDK.mp4</span>
                                    </div>
                                    <input type="text" class="custom-link-masukkan" placeholder="Link URL">
                                </div>
                                <div class="d-flex align-items-center">
                                    <label for="forumStatus" class="label-new-style2">Forum</label>
                                    <select class="form-select" id="forumStatus">
                                    <option value="aktif" selected>Aktif</option>
                                    <option value="nonaktif">Nonaktif</option>
                                    </select>
                                </div>
                            </div>
                            <div class="custom-dropdown" id="dropdown2">
                                <a href="#">Hapus</a>
                                <a href="#">Pindah ke atas</a>
                                <a href="#">Pindah ke bawah</a>
                            </div>

                            <div class="card custom-card-style p-3">
                                <button class="more-button toggle-dropdown" title="More" type="button" data-dropdown-id="dropdown3">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>

                                <div class="mb-3">
                                    <input type="text" class="form-control module-input-style" id="materi1" value="Menjalankan program pertama: “Hello, World!”">
                                </div>
                                <div class="mb-3 d-flex align-items-center">
                                    <label for="videoFile" class="label-new-style3">File</label>
                                    <div class="custom-file-input">
                                        <input type="file" id="fileInput" onchange="updateFileName()" />
                                        <button class="btn btn-primary">Choose file</button>
                                        <span id="fileName">Menjalankan “Hello, World!.pdf”</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <label for="forumStatus" class="label-new-style2">Forum</label>
                                    <select class="form-select" id="forumStatus">
                                    <option value="aktif" selected>Aktif</option>
                                    <option value="nonaktif">Nonaktif</option>
                                    </select>
                                </div>
                            </div>
                            <div class="custom-dropdown" id="dropdown3">
                                <a href="#">Hapus</a>
                                <a href="#">Pindah ke atas</a>
                                <a href="#">Pindah ke bawah</a>
                            </div>

                            <div class="card custom-card-style p-3">
                                <button class="more-button toggle-dropdown" title="More" type="button" data-dropdown-id="dropdown4">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>

                                <div class="mb-3">
                                    <input type="text" class="form-control module-input-style" id="materi1" value="Variabel dan konvensi penamaan">
                                </div>
                                <div class="mb-3 d-flex align-items-center">
                                    <label for="videoFile" class="label-new-style3">File</label>
                                    <div class="custom-file-input">
                                        <input type="file" id="fileInput" onchange="updateFileName()" />
                                        <button class="btn btn-primary">Choose file</button>
                                        <span id="fileName">Variabel dan konvensi penamaan.pdf</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <label for="forumStatus" class="label-new-style2">Forum</label>
                                    <select class="form-select" id="forumStatus">
                                    <option value="aktif" selected>Aktif</option>
                                    <option value="nonaktif">Nonaktif</option>
                                    </select>
                                </div>
                            </div>
                            <div class="custom-dropdown" id="dropdown4">
                                <a href="#">Hapus</a>
                                <a href="#">Pindah ke atas</a>
                                <a href="#">Pindah ke bawah</a>
                            </div>
                            <div class="card custom-card-style p-3">
                                <button class="more-button toggle-dropdown" title="More" type="button" data-dropdown-id="dropdown5">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>

                                <div class="mb-3">
                                    <input type="text" class="form-control module-input-style" id="materi1" value="Tipe data primitif (int, double, char, boolean)">
                                </div>
                                <div class="mb-3 d-flex align-items-center">
                                    <label for="videoFile" class="label-new-style3">File</label>
                                    <div class="custom-file-input">
                                        <input type="file" id="fileInput" onchange="updateFileName()" />
                                        <button class="btn btn-primary">Choose file</button>
                                        <span id="fileName">Tipe data primitif.pdf</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <label for="forumStatus" class="label-new-style2">Forum</label>
                                    <select class="form-select" id="forumStatus">
                                    <option value="aktif" selected>Aktif</option>
                                    <option value="nonaktif">Nonaktif</option>
                                    </select>
                                </div>
                            </div>
                            <div class="custom-dropdown" id="dropdown5">
                                <a href="#">Hapus</a>
                                <a href="#">Pindah ke atas</a>
                                <a href="#">Pindah ke bawah</a>
                            </div>
                            <div class="card custom-card-style p-3">
                                <button class="more-button toggle-dropdown" title="More" type="button" data-dropdown-id="dropdown6">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>

                                <div class="mb-3">
                                    <select class="form-select quiz-select-style" id="quizSelect">
                                        <option value="soal1" selected>Soal Kuis 1</option>
                                        <option value="soal2">Soal Kuis 2</option>
                                        <option value="soal3">Soal Kuis 3</option>
                                        <option value="soal3">Soal Ujian 1</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary d-flex align-items-center quiz-btn-style">
                                    <i class="bi bi-plus-lg me-2"></i>
                                    Buat Soal
                                </button>

                            </div>
                            <div class="custom-dropdown" id="dropdown6">
                                <a href="#">Hapus</a>
                                <a href="#">Pindah ke atas</a>
                                <a href="#">Pindah ke bawah</a>
                            </div>

                            <div class="cards-container" data-modul="modul1"></div>

                            <div class="d-flex mt-3">
                                <button class="tambah-modul-btn" data-modul="modul1" type="button">
                                    <i class="bi bi-plus-lg me-2"></i>
                                    Tambah
                                </button>
                            </div>
                            <!-- Popup Modal -->
                            <div class="modal-overlay" id="modalOverlay" style="display: none;">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content popup-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="popupModalLabel">Pilih Konten</h5>
                                            <button type="button" class="btn-close"  id="closeButton"  aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row g-3 content-grid">
                                                <div class="col-4 content-item">
                                                    <div class="content-card" data-content="soal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="44" viewBox="0 0 33 44" fill="none">
                                                            <path d="M7.52609 11.1105H13.3373M7.52609 22.0854H24.9598M7.52609 28.3567H24.9598M7.52609 34.628H13.3373M4.62047 42.4672H27.8655C28.6361 42.4672 29.3751 42.1368 29.9201 41.5488C30.465 40.9607 30.7711 40.1632 30.7711 39.3315V4.83922C30.7711 4.00759 30.465 3.21002 29.9201 2.62197C29.3751 2.03392 28.6361 1.70355 27.8655 1.70355H4.62047C3.84985 1.70355 3.11079 2.03392 2.56588 2.62197C2.02097 3.21002 1.71484 4.00759 1.71484 4.83922V39.3315C1.71484 40.1632 2.02097 40.9607 2.56588 41.5488C3.11079 42.1368 3.84985 42.4672 4.62047 42.4672Z" stroke="white" stroke-width="2.71659" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M24.9608 11.8944C25.362 11.8944 25.6872 11.5435 25.6872 11.1105C25.6872 10.6776 25.362 10.3266 24.9608 10.3266C24.5596 10.3266 24.2344 10.6776 24.2344 11.1105C24.2344 11.5435 24.5596 11.8944 24.9608 11.8944Z" fill="white" stroke="white" stroke-width="0.848934"/>
                                                        </svg>
                                                        <div class="text-label" style="margin-top: 10px;">Soal</div>
                                                    </div>
                                                </div>
                                                <div class="col-4 content-item">
                                                    <div class="content-card" data-content="video">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="47" height="51" viewBox="0 0 47 51" fill="none">
                                                            <g clip-path="url(#clip0_1392_2271)">
                                                            <path d="M0.871382 10.7232C0.871382 8.87879 2.25228 7.4301 3.89608 7.4301H43.6101C45.2539 7.4301 46.6348 8.87879 46.6348 10.7232V41.0375C46.6348 41.9195 46.3099 42.7603 45.7392 43.3761C45.1695 43.991 44.4029 44.3306 43.6101 44.3306H3.89608C3.10326 44.3306 2.33671 43.991 1.76694 43.3761C1.19631 42.7603 0.871382 41.9195 0.871382 41.0375V10.7232ZM44.2207 10.1052L43.9526 10.3536L44.2207 10.1052C44.0638 9.93592 43.8449 9.83502 43.6101 9.83502H3.89608C3.66131 9.83502 3.44236 9.93592 3.28551 10.1052C3.12953 10.2735 3.04624 10.4962 3.04624 10.7232V41.0375C3.04624 41.5012 3.40114 41.9257 3.89608 41.9257H43.6101C43.8449 41.9257 44.0638 41.8248 44.2207 41.6556C44.3767 41.4872 44.4599 41.2645 44.4599 41.0375V10.7232C44.4599 10.4962 44.3767 10.2735 44.2207 10.1052Z" fill="white" stroke="white" stroke-width="0.731045"/>
                                                            <path d="M30.0274 25.301L30.027 25.3007L19.225 17.8101C19.225 17.8101 19.225 17.8101 19.225 17.81C19.1345 17.7474 19.0328 17.7139 18.9304 17.71C18.8281 17.706 18.725 17.7317 18.6316 17.7867C18.5379 17.8419 18.4561 17.9254 18.3976 18.0315C18.3391 18.1376 18.3072 18.2608 18.3069 18.3879V33.3734V33.3752C18.3072 33.5023 18.3391 33.6255 18.3976 33.7316L18.0775 33.9081L18.3976 33.7316C18.4561 33.8377 18.5379 33.9212 18.6316 33.9764C18.725 34.0314 18.8281 34.0571 18.9304 34.0531C19.0327 34.0492 19.1344 34.0157 19.2248 33.9532L30.0274 25.301ZM30.0274 25.301C30.1123 25.3597 30.185 25.4425 30.2366 25.5441C30.2881 25.6459 30.3159 25.7616 30.3159 25.8805C30.3159 25.9994 30.2881 26.1152 30.2366 26.2169C30.185 26.3185 30.1123 26.4013 30.0274 26.46L30.027 26.4603L19.225 33.953L30.0274 25.301Z" fill="white" stroke="white" stroke-width="0.731045"/>
                                                            </g>
                                                            <defs>
                                                            <clipPath id="clip0_1392_2271">
                                                                <rect width="46.4945" height="50.1755" fill="white" transform="translate(0.505859 0.792725)"/>
                                                            </clipPath>
                                                            </defs>
                                                        </svg>
                                                        <div class="text-label" style="margin-top: 10px;">Video</div>
                                                    </div>
                                                </div>
                                                <div class="col-4 content-item">
                                                    <div class="content-card" data-content="file">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53" fill="none">
                                                            <path d="M18.5168 27.1802H34.4831V24.9718H18.5168V27.1802ZM18.5168 33.295H34.4831V31.0867H18.5168V33.295ZM18.5168 39.4121H27.8581V37.2038H18.5168V39.4121ZM14.6081 46.375C13.5923 46.375 12.7443 46.0349 12.0641 45.3547C11.3839 44.6746 11.0431 43.8258 11.0416 42.8085V10.1915C11.0416 9.17562 11.3824 8.32763 12.0641 7.64746C12.7457 6.96729 13.5945 6.62647 14.6103 6.625H32.0208L41.9583 16.5625V42.8085C41.9583 43.8244 41.6182 44.6731 40.938 45.3547C40.2579 46.0364 39.4084 46.3765 38.3896 46.375H14.6081ZM30.9166 17.6667V8.83333H14.6103C14.2702 8.83333 13.9581 8.97467 13.674 9.25733C13.3898 9.54 13.2485 9.85137 13.25 10.1915V42.8085C13.25 43.1472 13.3913 43.4585 13.674 43.7427C13.9566 44.0268 14.268 44.1681 14.6081 44.1667H38.3918C38.7304 44.1667 39.0418 44.0253 39.326 43.7427C39.6101 43.46 39.7514 43.1479 39.75 42.8063V17.6667H30.9166Z" fill="white"/>
                                                        </svg>
                                                        <div class="text-label" style="margin-top: 10px;">File</div>
                                                    </div>
                                                </div>
                                                <div class="col-4 content-item">
                                                    <div class="content-card" data-content="link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 47 51" fill="none">
                                                            <path d="M14.0653 18.9608C10.4794 18.9608 7.62109 22.0953 7.62109 25.8805C7.62109 29.6656 10.4794 32.8001 14.0653 32.8001H21.3757V35.8951H14.0653C8.99151 35.8951 4.81753 31.4405 4.81753 25.8805C4.81753 20.3205 8.99151 15.8659 14.0653 15.8659H21.3757V18.9608H14.0653ZM31.0621 24.2284V27.5325H16.4412V24.2284H31.0621ZM33.438 35.8951H26.1275V32.8001H33.438C37.0238 32.8001 39.8821 29.6656 39.8821 25.8805C39.8821 22.0953 37.0238 18.9608 33.438 18.9608H26.1275V15.8659H33.438C38.5117 15.8659 42.6857 20.3205 42.6857 25.8805C42.6857 31.4405 38.5117 35.8951 33.438 35.8951Z" fill="white" stroke="white"/>
                                                        </svg>
                                                        <div class="text-label" style="margin-top: 10px;">Link</div>
                                                    </div>
                                                </div>
                                                <div class="col-4 content-item">
                                                    <div class="content-card" data-content="catatan">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53" fill="none">
                                                            <path d="M12.402 41.9583H30.9167V30.9167H41.9584V12.402C41.9584 12.0045 41.831 11.6784 41.5763 11.4237C41.3216 11.169 40.9963 11.0417 40.6002 11.0417H12.3998C12.0038 11.0417 11.6784 11.169 11.4237 11.4237C11.1691 11.6784 11.0417 12.0045 11.0417 12.402V40.6002C11.0417 40.9962 11.1691 41.3216 11.4237 41.5763C11.6784 41.831 12.0045 41.9583 12.402 41.9583ZM12.402 44.1667C11.4127 44.1667 10.5706 43.8192 9.87571 43.1243C9.18082 42.4295 8.83337 41.5881 8.83337 40.6002V12.3998C8.83337 11.4134 9.18082 10.572 9.87571 9.87568C10.5706 9.18079 11.4127 8.83334 12.402 8.83334H40.6002C41.5866 8.83334 42.428 9.18079 43.1244 9.87568C43.8193 10.5706 44.1667 11.4127 44.1667 12.402V31.5549L31.5527 44.1667H12.402ZM17.4127 29.7264V27.5181H26.5V29.7264H17.4127ZM17.4127 20.9792V18.7708H35.5873V20.9792H17.4127Z" fill="white"/>
                                                        </svg>
                                                        <div class="text-label" style="margin-top: 10px;">Catatan</div>
                                                    </div>
                                                </div>
                                                <div class="col-4 content-item">
                                                    <div class="content-card" data-content="tugas">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53" fill="none">
                                                            <path d="M25.3958 39.2421H27.6041V28.874L32.2416 33.5115L33.8051 31.9369L26.5 24.6318L19.1948 31.9369L20.7715 33.4982L25.3958 28.874V39.2421ZM14.6103 46.375C13.593 46.375 12.7443 46.0349 12.0641 45.3547C11.3839 44.6746 11.0431 43.8258 11.0416 42.8085V10.1915C11.0416 9.17562 11.3824 8.32763 12.0641 7.64746C12.7457 6.96729 13.5945 6.62647 14.6103 6.625H32.0208L41.9583 16.5625V42.8085C41.9583 43.8244 41.6182 44.6731 40.938 45.3547C40.2579 46.0364 39.4084 46.3765 38.3896 46.375H14.6103ZM30.9166 17.6667V8.83333H14.6103C14.2702 8.83333 13.9581 8.97467 13.674 9.25733C13.3898 9.54 13.2485 9.85137 13.25 10.1915V42.8085C13.25 43.1472 13.3913 43.4585 13.674 43.7427C13.9566 44.0268 14.268 44.1681 14.6081 44.1667H38.3918C38.7304 44.1667 39.0418 44.0253 39.326 43.7427C39.6101 43.46 39.7514 43.1479 39.75 42.8063V17.6667H30.9166Z" fill="white"/>
                                                        </svg>
                                                        <div class="text-label" style="margin-top: 10px;">Tugas</div>
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
    </form>
    </div>
</div>

<div class="container mt-6"  id="cardContainer">
    <div class="card-custom">
      <div class="card-atas-custom">Modul 2</div>
      <form>
        <div class="mb-4 horizontal-form">
            <label for="namaModul" class="label-nama-modul">Nama modul</label>
            <input type="text" class="form-control input-custom" id="namaModul" placeholder="Masukkan nama modul">
        </div>

        <!-- Deskripsi -->
        <div class="mb-4 d-flex align-items-start">
            <label for="deskripsiModul" class="label-horizontal">Deskripsi</label>
            <textarea class="form-control form-horizontal" id="deskripsiModul" rows="4" placeholder="Masukkan deskripsi modul"></textarea>
        </div>


        <!-- Konten -->
        <div>
            <div class="input-container">
            <label for="kontenModul" class="label-aligned">Konten</label>
                <div class="container custom-margin-top">
                    <div class="card custom-card-style p-3">
                        <button class="more-button toggle-dropdown" title="More" type="button" data-dropdown-id="dropdown1">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>

                        <div class="mb-3">
                            <input
                                type="text"
                                class="form-control module-input-style"
                                id="materi1"
                                placeholder="Masukkan judul materi">
                        </div>
                        <div class="mb-3 d-flex align-items-center">
                            <label for="videoFile" class="label-new-style1">Video</label>
                            <div class="custom-file-input">
                                <input type="file" id="fileInput" class="custom-file-input-style" onchange="updateFileName()" />
                                <button class="btn btn-primary">Choose file</button>
                                <span id="fileName">No file chosen</span>
                            </div>
                            <input type="text" class="custom-link-masukkan" placeholder="Link URL">
                        </div>

                        <div class="d-flex align-items-center">
                            <label for="forumStatus" class="label-new-style2">Forum</label>
                            <select class="form-select" id="forumStatus">
                            <option value="aktif" selected>Aktif</option>
                            <option value="nonaktif">Nonaktif</option>
                            </select>
                        </div>
                    </div>

                    <div class="cards-container" data-modul="modul2"></div>

                    <div class="d-flex mt-3">
                        <button class="tambah-modul-btn" data-modul="modul2" type="button">
                            <i class="bi bi-plus-lg me-2"></i>
                            Tambah
                        </button>
                    </div>
                    <!-- Popup Modal -->
                    <div class="modal-overlay" id="modalOverlay" style="display: none;">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content popup-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="popupModalLabel">Pilih Konten</h5>
                                    <button type="button" class="btn-close"  id="closeButton"  aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row g-3 content-grid">
                                        <div class="col-4 content-item">
                                            <div class="content-card" data-content="soal">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="44" viewBox="0 0 33 44" fill="none">
                                                    <path d="M7.52609 11.1105H13.3373M7.52609 22.0854H24.9598M7.52609 28.3567H24.9598M7.52609 34.628H13.3373M4.62047 42.4672H27.8655C28.6361 42.4672 29.3751 42.1368 29.9201 41.5488C30.465 40.9607 30.7711 40.1632 30.7711 39.3315V4.83922C30.7711 4.00759 30.465 3.21002 29.9201 2.62197C29.3751 2.03392 28.6361 1.70355 27.8655 1.70355H4.62047C3.84985 1.70355 3.11079 2.03392 2.56588 2.62197C2.02097 3.21002 1.71484 4.00759 1.71484 4.83922V39.3315C1.71484 40.1632 2.02097 40.9607 2.56588 41.5488C3.11079 42.1368 3.84985 42.4672 4.62047 42.4672Z" stroke="white" stroke-width="2.71659" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M24.9608 11.8944C25.362 11.8944 25.6872 11.5435 25.6872 11.1105C25.6872 10.6776 25.362 10.3266 24.9608 10.3266C24.5596 10.3266 24.2344 10.6776 24.2344 11.1105C24.2344 11.5435 24.5596 11.8944 24.9608 11.8944Z" fill="white" stroke="white" stroke-width="0.848934"/>
                                                </svg>
                                                <div class="text-label" style="margin-top: 10px;">Soal</div>
                                            </div>
                                        </div>
                                        <div class="col-4 content-item">
                                            <div class="content-card" data-content="video">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="47" height="51" viewBox="0 0 47 51" fill="none">
                                                    <g clip-path="url(#clip0_1392_2271)">
                                                    <path d="M0.871382 10.7232C0.871382 8.87879 2.25228 7.4301 3.89608 7.4301H43.6101C45.2539 7.4301 46.6348 8.87879 46.6348 10.7232V41.0375C46.6348 41.9195 46.3099 42.7603 45.7392 43.3761C45.1695 43.991 44.4029 44.3306 43.6101 44.3306H3.89608C3.10326 44.3306 2.33671 43.991 1.76694 43.3761C1.19631 42.7603 0.871382 41.9195 0.871382 41.0375V10.7232ZM44.2207 10.1052L43.9526 10.3536L44.2207 10.1052C44.0638 9.93592 43.8449 9.83502 43.6101 9.83502H3.89608C3.66131 9.83502 3.44236 9.93592 3.28551 10.1052C3.12953 10.2735 3.04624 10.4962 3.04624 10.7232V41.0375C3.04624 41.5012 3.40114 41.9257 3.89608 41.9257H43.6101C43.8449 41.9257 44.0638 41.8248 44.2207 41.6556C44.3767 41.4872 44.4599 41.2645 44.4599 41.0375V10.7232C44.4599 10.4962 44.3767 10.2735 44.2207 10.1052Z" fill="white" stroke="white" stroke-width="0.731045"/>
                                                    <path d="M30.0274 25.301L30.027 25.3007L19.225 17.8101C19.225 17.8101 19.225 17.8101 19.225 17.81C19.1345 17.7474 19.0328 17.7139 18.9304 17.71C18.8281 17.706 18.725 17.7317 18.6316 17.7867C18.5379 17.8419 18.4561 17.9254 18.3976 18.0315C18.3391 18.1376 18.3072 18.2608 18.3069 18.3879V33.3734V33.3752C18.3072 33.5023 18.3391 33.6255 18.3976 33.7316L18.0775 33.9081L18.3976 33.7316C18.4561 33.8377 18.5379 33.9212 18.6316 33.9764C18.725 34.0314 18.8281 34.0571 18.9304 34.0531C19.0327 34.0492 19.1344 34.0157 19.2248 33.9532L30.0274 25.301ZM30.0274 25.301C30.1123 25.3597 30.185 25.4425 30.2366 25.5441C30.2881 25.6459 30.3159 25.7616 30.3159 25.8805C30.3159 25.9994 30.2881 26.1152 30.2366 26.2169C30.185 26.3185 30.1123 26.4013 30.0274 26.46L30.027 26.4603L19.225 33.953L30.0274 25.301Z" fill="white" stroke="white" stroke-width="0.731045"/>
                                                    </g>
                                                    <defs>
                                                    <clipPath id="clip0_1392_2271">
                                                        <rect width="46.4945" height="50.1755" fill="white" transform="translate(0.505859 0.792725)"/>
                                                    </clipPath>
                                                    </defs>
                                                </svg>
                                                <div class="text-label" style="margin-top: 10px;">Video</div>
                                            </div>
                                        </div>
                                        <div class="col-4 content-item">
                                            <div class="content-card" data-content="file">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53" fill="none">
                                                    <path d="M18.5168 27.1802H34.4831V24.9718H18.5168V27.1802ZM18.5168 33.295H34.4831V31.0867H18.5168V33.295ZM18.5168 39.4121H27.8581V37.2038H18.5168V39.4121ZM14.6081 46.375C13.5923 46.375 12.7443 46.0349 12.0641 45.3547C11.3839 44.6746 11.0431 43.8258 11.0416 42.8085V10.1915C11.0416 9.17562 11.3824 8.32763 12.0641 7.64746C12.7457 6.96729 13.5945 6.62647 14.6103 6.625H32.0208L41.9583 16.5625V42.8085C41.9583 43.8244 41.6182 44.6731 40.938 45.3547C40.2579 46.0364 39.4084 46.3765 38.3896 46.375H14.6081ZM30.9166 17.6667V8.83333H14.6103C14.2702 8.83333 13.9581 8.97467 13.674 9.25733C13.3898 9.54 13.2485 9.85137 13.25 10.1915V42.8085C13.25 43.1472 13.3913 43.4585 13.674 43.7427C13.9566 44.0268 14.268 44.1681 14.6081 44.1667H38.3918C38.7304 44.1667 39.0418 44.0253 39.326 43.7427C39.6101 43.46 39.7514 43.1479 39.75 42.8063V17.6667H30.9166Z" fill="white"/>
                                                </svg>
                                                <div class="text-label" style="margin-top: 10px;">File</div>
                                            </div>
                                        </div>
                                        <div class="col-4 content-item">
                                            <div class="content-card" data-content="link">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 47 51" fill="none">
                                                    <path d="M14.0653 18.9608C10.4794 18.9608 7.62109 22.0953 7.62109 25.8805C7.62109 29.6656 10.4794 32.8001 14.0653 32.8001H21.3757V35.8951H14.0653C8.99151 35.8951 4.81753 31.4405 4.81753 25.8805C4.81753 20.3205 8.99151 15.8659 14.0653 15.8659H21.3757V18.9608H14.0653ZM31.0621 24.2284V27.5325H16.4412V24.2284H31.0621ZM33.438 35.8951H26.1275V32.8001H33.438C37.0238 32.8001 39.8821 29.6656 39.8821 25.8805C39.8821 22.0953 37.0238 18.9608 33.438 18.9608H26.1275V15.8659H33.438C38.5117 15.8659 42.6857 20.3205 42.6857 25.8805C42.6857 31.4405 38.5117 35.8951 33.438 35.8951Z" fill="white" stroke="white"/>
                                                </svg>
                                                <div class="text-label" style="margin-top: 10px;">Link</div>
                                            </div>
                                        </div>
                                        <div class="col-4 content-item">
                                            <div class="content-card" data-content="catatan">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53" fill="none">
                                                    <path d="M12.402 41.9583H30.9167V30.9167H41.9584V12.402C41.9584 12.0045 41.831 11.6784 41.5763 11.4237C41.3216 11.169 40.9963 11.0417 40.6002 11.0417H12.3998C12.0038 11.0417 11.6784 11.169 11.4237 11.4237C11.1691 11.6784 11.0417 12.0045 11.0417 12.402V40.6002C11.0417 40.9962 11.1691 41.3216 11.4237 41.5763C11.6784 41.831 12.0045 41.9583 12.402 41.9583ZM12.402 44.1667C11.4127 44.1667 10.5706 43.8192 9.87571 43.1243C9.18082 42.4295 8.83337 41.5881 8.83337 40.6002V12.3998C8.83337 11.4134 9.18082 10.572 9.87571 9.87568C10.5706 9.18079 11.4127 8.83334 12.402 8.83334H40.6002C41.5866 8.83334 42.428 9.18079 43.1244 9.87568C43.8193 10.5706 44.1667 11.4127 44.1667 12.402V31.5549L31.5527 44.1667H12.402ZM17.4127 29.7264V27.5181H26.5V29.7264H17.4127ZM17.4127 20.9792V18.7708H35.5873V20.9792H17.4127Z" fill="white"/>
                                                </svg>
                                                <div class="text-label" style="margin-top: 10px;">Catatan</div>
                                            </div>
                                        </div>
                                        <div class="col-4 content-item">
                                            <div class="content-card" data-content="tugas">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53" fill="none">
                                                    <path d="M25.3958 39.2421H27.6041V28.874L32.2416 33.5115L33.8051 31.9369L26.5 24.6318L19.1948 31.9369L20.7715 33.4982L25.3958 28.874V39.2421ZM14.6103 46.375C13.593 46.375 12.7443 46.0349 12.0641 45.3547C11.3839 44.6746 11.0431 43.8258 11.0416 42.8085V10.1915C11.0416 9.17562 11.3824 8.32763 12.0641 7.64746C12.7457 6.96729 13.5945 6.62647 14.6103 6.625H32.0208L41.9583 16.5625V42.8085C41.9583 43.8244 41.6182 44.6731 40.938 45.3547C40.2579 46.0364 39.4084 46.3765 38.3896 46.375H14.6103ZM30.9166 17.6667V8.83333H14.6103C14.2702 8.83333 13.9581 8.97467 13.674 9.25733C13.3898 9.54 13.2485 9.85137 13.25 10.1915V42.8085C13.25 43.1472 13.3913 43.4585 13.674 43.7427C13.9566 44.0268 14.268 44.1681 14.6081 44.1667H38.3918C38.7304 44.1667 39.0418 44.0253 39.326 43.7427C39.6101 43.46 39.7514 43.1479 39.75 42.8063V17.6667H30.9166Z" fill="white"/>
                                                </svg>
                                                <div class="text-label" style="margin-top: 10px;">Tugas</div>
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
    </form>
    </div>
</div>


<div class="container mt-6">
    <div class="card-custom d-flex align-items-center">
        <div class="d-flex">
            <button class="btn tambah-modul-btn-blue d-flex align-items-center" id="addModuleButton" type="button">
                <i class="bi bi-plus-lg me-2"></i>
                Tambah Modul
            </button>
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
    border-color: #007bff;
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
    font-weight: 500;
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
.header-title {
    font-size: 16px;
    font-weight: 600;
    color: #003D94;
}
.label-category {
    min-width: 200px;
    font-size: 14px;
    font-weight: 600;
    color: #003D94;
}

.adjust-select {
    margin-top: 5px;
    width: 214px;
    border-radius: 8.341px;
    font-weight: 500;
    font-size: 12px;
}
select.adjust-select option {
    font-weight: 500;
    font-size: 12px;
}

.label-thumbnail {
    min-width: 200px;
    font-size: 14px;
    font-weight: 600;
    color: #003D94;
}
#thumbnail {
    width: 255px;
    margin-top: 10px;
}

.form-label-custom {
    min-width: 200px;
    font-size: 14px;
    font-weight: 600;
    color: #003D94;
}
.custom-cover {
    margin-top: 50px; /* Adjust the value to move it upwards */
}
.custom-div {
    margin-top: 50px;
    display: flex;
    align-items: flex-start; /* Pastikan elemen tetap sejajar di awal */
}

.custom-textarea {
    margin-left: 10px; /* Jarak antara label dan textarea */
    font-size: 12px;
    font-weight: 400;
    resize: horizontal; /* Hanya memungkinkan perubahan ukuran horizontal */
}

.form-label-custom {
    min-width: 205px; /* Lebar minimum label */
    font-size: 14px;
    font-weight: 600;
    color: #003D94;
    text-align: left; /* Pastikan teks label sejajar kiri */
    align-self: flex-start; /* Pastikan label tetap di atas */
    margin-top: 0; /* Hindari perpindahan vertikal */
}
.custom-textarea {
    width: 670.685px; /* Lebar textarea */
    height: 110px;
    font-size: 11px;
    line-height: 1.5;
    padding: 10px;
    border-radius: 8px;
    border: 1px solid #ddd;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    resize: none; /* Nonaktifkan resize */
}
.custom-label {
    min-width: 250px; /* Lebar minimum label */
    font-size: 14px; /* Ukuran font */
    font-weight: bold; /* Membuat teks tebal */
    color: #003D94; /* Warna teks (primary) */
    margin-right: 1rem; /* Jarak ke elemen sebelah kanan */
}
.description-textarea {
    width: 670.685px; /* Lebar textarea */
    height: 150px;
    font-size: 11px; /* Ukuran font */
    line-height: 1.5; /* Tinggi garis untuk kenyamanan membaca */
    padding: 10px; /* Jarak dalam textarea */
    border-radius: 8px; /* Sudut melengkung */
    border: 1px solid #ddd; /* Warna border */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Tambahkan bayangan */
    resize: none; /* Nonaktifkan fitur resize */
}
.description-label {
    min-width: 200px; /* Lebar minimum */
    font-size: 14px; /* Ukuran font */
    font-weight: 600; /* Ketebalan font */
    color: #003D94; /* Warna teks */
    margin-right: 1rem; /* Jarak dengan elemen sebelah kanan */
}
.teaching-points-label {
    width: 170px; /* Lebar label */
    font-size: 14px;
    font-weight: 600;
    color: #003D94;
    margin-right: 77px; /* Jarak antara label dan input */
}

.teaching-point-input {
    width: 670.685px; /* Lebar textarea */
    font-size: 11px;
    padding: 10px;
    border-radius: 8px;
    border: 1px solid #ddd;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.teaching-point-add {
    font-size: 14px;
    font-weight: 400;
    color: #6c757d;
    text-decoration: none;
}

.teaching-point-add span {
    font-size: 20px; /* Ukuran simbol '+' */
    font-weight: bold;
    color: #6c757d;
}
.custom-talent-label {
    min-width: 100px;       /* Minimum width */
    padding-right: 168px;   /* Right padding */
    font-size: 14px;        /* Font size */
    font-weight: 600;       /* Font weight */
    color: #003D94;         /* Text color */
}

/* Custom Button Style */
.custom-dropdown-button {
    border-radius: 8.341px !important; /* Rounded corners */
    font-size: 12px;
    font-weight: 500;
    color: #2D3748; /* Change text color to white */
}
.custom-dropdown-button:focus,
.custom-dropdown-button:active {
    color: #ffffff; /* Text color when active/focused */
    background-color: #0056D2 !important; /* Desired active background color */
    border-color: #0056D2; /* Border color when active */
    box-shadow: none !important; /* Remove focus shadow */
}
.custom-dropdown-button:hover {
    background-color: #0056D2; /* Hover background color */
    color: #ffffff; /* Change text color to white */
    border-color: #0056D2;
}

/* Custom Dropdown Menu Style */
.custom-dropdown-menu {
    border-radius: 8.341px; /* Rounded corners for the menu */
    font-size: 12px;       /* Font size for items */
    font-weight: 500;      /* Font weight for items */
}

/* Custom Dropdown Item Style */
.custom-dropdown-item {
    font-size: 12px;       /* Font size for items */
    font-weight: 500;      /* Font weight for items */
}
.custom-label-hasil {
    font-size: 14px;
    font-weight: 600;
    color: #003D94;
    min-width: 210px;
}
.btn-solid-blue {
    background-color: #0056D2; /* Solid blue */
    color: #fff; /* White text */
    border-color: #0056D2; /* Match the solid blue */
}
.btn-outline-blue {
    color: #fff; /* Blue text for outline */
    border-color: #0056D2; /* Outline blue */
    background-color: #0056D2; /* Solid blue */
}
.label-styled {
  font-size: 14px;
  font-weight: 600;
  color: #003D94;
    min-width: 200px;
}
.duration-labels span,
.duration-labels input {
    font-size: 12px;
    font-weight: 300;
}
.duration-container {
    margin-top: 50px; /* Atur margin atas sesuai kebutuhan */
}
.margin-top-added {
    margin-top: 50px; /* Atur margin atas sesuai kebutuhan */
}
.additional-margin-top {
    margin-top: 50px;
}


.card-custom {
      border: 1px solid #e3e6f0;
      border-radius: 20px;
      padding: 20px;
      background-color: #ffffff;
      box-shadow: 2px 2px 10px 0px rgba(0, 0, 0, 0.25);
}

.card-atas-custom {
    font-size: 1.25rem;
    font-weight: 600;
    color: #343a40;
    margin-bottom: 1rem;
}

.label-modul {
    font-size: 14px;
    font-weight: 600;
    color: #003D94;
}

.horizontal-form {
    display: flex;
    align-items: center;
    gap: 10px;
}

.horizontal-form label {
    width: 150px; /* Atur sesuai kebutuhan */
}
.label-horizontal {
  width: 140px; /* Lebar tetap untuk label agar sejajar dengan elemen lainnya */
  font-size: 14px;
    font-weight: 600;
    color: #003D94;
    margin-right: 63px;
}

.form-horizontal {
  resize: none; /* Mencegah ukuran textarea dapat diubah */
  font-size: 10.479px;
  font-weight: 400;
  width: 670.685px;
}
.label-nama-modul {
    font-size: 14px;
    font-weight: 600;
    color: #003D94;
    width: 140px;
    margin-right: 43px;
}

.input-custom {
  font-weight: 400; /* Mengatur ketebalan teks */
  font-size: 12.226px; /* Ukuran font */
  width: 671px;
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

.custom-card-style {
  width: 769px; /* Lebar tetap */
  height: auto; /* Tinggi tetap */
  border-radius: 10px; /* Sudut melengkung */
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
.custom-file-input {
    position: relative;
    display: flex;
    align-items: center;
    border: 1px solid #ced4da;
    border-radius: 8.733px;
    padding: 5px 8px;
}

.custom-file-input input[type="file"] {
    position: absolute;
    left: 0;
    top: 0;
    opacity: 0;
    cursor: pointer;
    z-index: 2;
}

.custom-file-input .btn {
    position: relative;
    z-index: 1;
    border-radius: 5.24px;
    background-color: #4A5568;
    border: none;
    font-size: 10.479px;
    font-weight: 400;
}

.custom-file-input span {
    flex-grow: 1;
    padding-left: 10px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-size: 10.479px;
}
#forumStatus {
    width: 120px;
    border-radius: 10px;
    font-size: 12px;
    font-weight: 500;
}
.more-button {
    position: absolute;
    top: 10px;
    right: 10px;
    border: none;
    background: none;
    cursor: pointer;
    font-size: 1.2rem;
    color: #6c757d;
}

.more-button:hover {
    color: #495057;
}
.custom-dropdown {
    position: absolute;
    top: 40px;
    right: 20px;
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 20px 0px 20px 20px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    display: none;
    width: 135px;
    z-index: 10;
}

.custom-dropdown a {
    display: block;
    padding: 10px 15px;
    text-decoration: none;
    color: #333;
    font-size: 12px;
    font-weight: 400;
    margin-bottom: -3px;
}

.custom-dropdown a:hover {
    background: #f8f9fa;
    border-radius: 10px;
}


.quiz-card-style {
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.quiz-select-style {
  border-radius: 10px;
  width: 386.707px;
  font-size: 12px;
  font-weight: 500;
}

.quiz-btn-style {
  background-color: #4A5568; /* Sesuaikan dengan warna yang diinginkan */
  color: white;
  border-color: #4A5568;
  border-radius: 16px;
  width: 120px;
  font-size: 12px;
  font-weight: 400;
}

.quiz-btn-style:hover {
  background-color: #2d3748;
}
.tambah-btn-style {
    background-color: transparent;
    color: #4A5568;
    font-size: 1rem;
    font-weight: 500;
    padding: 0.5rem 1rem;
    border: none;
    border-radius: 8px;
}

.tambah-btn-style:hover {
    color: #2D3748;
}
.tambah-modul-btn {
    background-color: transparent; /* Transparan */
    color: #0056D2; /* Warna teks (biru) */
    font-size: 16px;
    font-weight: 600; /* Ketebalan font */
    padding: 0; /* Hilangkan padding */
    border: none; /* Hilangkan border */
}

.tambah-modul-btn:hover {
    text-decoration: none; /* Efek garis bawah saat hover */
    color: #003d80; /* Warna teks lebih gelap */
}

.custom-file-input-style {
    width: 200px; /* Ubah ukuran sesuai kebutuhan */
    display: inline-block;
    overflow: hidden; /* Agar konten tidak keluar */
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


.modal-header {
    padding: 10px 40px;
}

.modal-title {
    font-size: 20px;
    font-weight: 600;
}

/* Modal overlay styling */
.modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Transparansi latar belakang */
    display: flex; /* Gunakan Flexbox */
    justify-content: center; /* Pusatkan secara horizontal */
    align-items: center; /* Pusatkan secara vertikal */
    z-index: 1050; /* Pastikan modal berada di atas konten lainnya */
}

/* Styling modal content */
.popup-content {
    background-color: #fff;
    border-radius: 20px;
    width: 600px;
    height: 380px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    padding: 20px;
    display: flex; /* Gunakan Flexbox untuk konten di dalam modal */
}
.modal-body {
    display: flex; /* Aktifkan Flexbox */
    justify-content: center; /* Pusatkan secara horizontal */
    align-items: center; /* Pusatkan secara vertikal */
    height: 100%; /* Pastikan tinggi elemen diatur */
    text-align: center; /* Tambahan untuk teks */
}


.content-card {
    background-color: #0056D2; /* Warna biru */
    color: #fff; /* Warna teks putih */
    width: 100px; /* Sesuaikan ukuran */
    height: 100px; /* Sesuaikan ukuran */
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border-radius: 15px; /* Membuat sudut melengkung */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.06); /* Efek bayangan */
    text-align: center;
    font-size: 14px; /* Ukuran font */
    cursor: pointer; /* Mengubah kursor menjadi pointer */
    transition: transform 0.2s ease, box-shadow 0.2s ease; /* Efek animasi */
}

.content-card:hover {

    background-color: #003D94; /* Warna latar belakang saat hover */
}

.content-card i {
    font-size: 24px; /* Ukuran ikon */
    margin-bottom: 8px; /* Jarak antara ikon dan teks */
}

.tambah-modul-btn-blue {

  color: #0056D2;
  font-size: 16px;
  cursor: pointer;
  font-weight: 600;
}

.tambah-modul-btn-blue:hover {
  color: #0041a8; /* Warna saat hover */
}

/* Grid container */
.content-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding: 0 80px;
}

/* Item dalam grid */
.content-item {
    display: flex;
    justify-content: center;
    align-items: center;
}

.module-input-style {
  font-size: 12.226px;
  font-weight: 400;
  width: 597px;
  border-radius: 8.733px;
}

</style>

<script>


// JavaScript to handle toggle effect
document.querySelectorAll('.toggle-btn').forEach(button => {
    button.addEventListener('click', () => {
        // Toggle between outline and solid styles
        button.classList.toggle('btn-solid-blue');
        button.classList.toggle('btn-outline-blue');
    });
});

// Pilih semua dropdown
const dropdownButtons = document.querySelectorAll(".custom-dropdown-button");

// Iterasi setiap tombol dropdown
dropdownButtons.forEach(button => {
    // Temukan dropdown-menu terkait tombol tersebut
    const dropdownMenu = button.nextElementSibling;

    // Pilih semua item dalam menu tersebut
    const dropdownItems = dropdownMenu.querySelectorAll(".dropdown-item");

    // Tambahkan event listener ke setiap item
    dropdownItems.forEach(item => {
        item.addEventListener("click", function (event) {
            event.preventDefault(); // Mencegah aksi default link
            const selectedText = this.textContent; // Ambil teks dari item yang diklik
            button.textContent = selectedText; // Ubah teks tombol dropdown
        });
    });
});
function updateFileName() {
      const input = document.getElementById('fileInput');
      const fileName = document.getElementById('fileName');
      fileName.textContent = input.files.length > 0 ? input.files[0].name : "No file chosen";
}

document.querySelectorAll('.toggle-dropdown').forEach(button => {
  button.addEventListener('click', function () {
    const dropdownId = this.getAttribute('data-dropdown-id');
    const dropdown = document.getElementById(dropdownId);

    // Tutup semua dropdown lain
    document.querySelectorAll('.custom-dropdown').forEach(d => {
      if (d !== dropdown) d.style.display = 'none';
    });

    // Toggle tampilan dropdown
    if (dropdown.style.display === 'block') {
      dropdown.style.display = 'none';
    } else {
      // Posisi dropdown sesuai tombol
      const rect = this.getBoundingClientRect();
      dropdown.style.display = 'block';
      dropdown.style.top = `${rect.bottom + window.scrollY}px`;
      dropdown.style.left = `${rect.right - dropdown.offsetWidth}px`;
    }
  });
});


// Ambil semua tombol dengan class 'tambah-modul-btn'
const tambahButtons = document.querySelectorAll(".tambah-modul-btn");
// Ambil elemen modal dan tombol close
const modalOverlay = document.getElementById("modalOverlay");
const closeButton = document.getElementById("closeButton");
// Container untuk menambahkan konten
const cardsContainer = document.getElementById("cardsContainer");

// Template untuk setiap card
const templates = {
    soal: `
        <div class="card custom-card-style p-3">
            <button class="more-button toggle-dropdown" title="More" type="button" data-dropdown-id="dropdown1">
                <i class="bi bi-three-dots-vertical"></i>
            </button>
            <!-- Dropdown -->
            <select class="form-select custom-dropdownn">
                <option selected>Pilih soal</option>
                <option value="1">Soal 1</option>
                <option value="2">Soal 2</option>
                <option value="3">Soal 3</option>
            </select>
            <!-- Tombol -->
            <button class="btn custom-button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Buat Soal
            </button>
        </div>
    `,
    file: `
        <div class="card custom-card-style p-3">
            <button class="more-button toggle-dropdown" title="More" type="button" data-dropdown-id="dropdown1">
                <i class="bi bi-three-dots-vertical"></i>
            </button>
            <div class="mb-3">
                <input
                    type="text"
                    class="form-control module-input-style"
                    placeholder="Masukkan judul materi">
            </div>
            <div class="mb-3 d-flex align-items-center">
                <label class="label-new-style1">File</label>
                <div class="custom-file-input">
                    <input type="file" class="custom-file-input-style" />
                    <button class="btn btn-primary">Choose file</button>
                    <span>no file chosen</span>
                </div>
            </div>
        </div>
    `,
    video: `
        <div class="card custom-card-style p-3">
            <button class="more-button toggle-dropdown" title="More" type="button" data-dropdown-id="dropdown1">
                <i class="bi bi-three-dots-vertical"></i>
            </button>
            <div class="mb-3">
                <input
                    type="text"
                    class="form-control module-input-style"
                    placeholder="Masukkan judul materi">
            </div>
            <div class="mb-3 d-flex align-items-center">
                <label class="label-new-style1">Video</label>
                <div class="custom-file-input">
                    <input type="file" class="custom-file-input-style" />
                    <button class="btn btn-primary">Choose file</button>
                    <span>no file chosen</span>
                </div>
                <input type="text" class="custom-link-masukkan" placeholder="Link URL">
            </div>
        </div>
    `,
    link: `
        <div class="card custom-card-style p-3">
            <button class="more-button toggle-dropdown" title="More" type="button" data-dropdown-id="dropdown1">
                <i class="bi bi-three-dots-vertical"></i>
            </button>

            <div class="mb-3">
                <input
                    type="text"
                    class="form-control module-input-style"
                    id="materi1"
                    placeholder="Masukkan nama catatan">
            </div>
            <div class="mb-3">
                <textarea class="form-control form-horizontal" rows="4" placeholder="Masukkan deskripsi"></textarea>
            </div>

            <div class="mb-3 d-flex align-items-center">
                <label for="videoFile" class="label-new-style1">Link</label>

                <input type="text" class="custom-link-masukkan" placeholder="Link URL">
            </div>
        </div>
        `,
    catatan: `
        <div class="card custom-card-style p-3">
            <button class="more-button toggle-dropdown" title="More" type="button" data-dropdown-id="dropdown1">
                <i class="bi bi-three-dots-vertical"></i>
            </button>

            <div class="mb-3">
                <input
                    type="text"
                    class="form-control module-input-style"
                    id="materi1"
                    placeholder="Masukkan judul">
            </div>
            <div class="mb-3">
                <textarea class="form-control form-horizontal" rows="4" placeholder="Masukkan catatan"></textarea>
            </div>

        </div>
    `,
    tugas: `
        <div class="card custom-card-style p-3">
            <button class="more-button toggle-dropdown" title="More" type="button" data-dropdown-id="dropdown1">
                <i class="bi bi-three-dots-vertical"></i>
            </button>

            <div class="mb-3">
                <input
                    type="text"
                    class="form-control module-input-style"
                    id="materi1"
                    placeholder="Masukkan nama tugas">
            </div>
            <div class="mb-3">
                <textarea class="form-control form-horizontal" rows="4" placeholder="Masukkan deskripsi"></textarea>
            </div>
            <div class="d-flex align-items-center">
                <label for="forumStatus" class="label-new-style2">Format </label>
                <select class="form-select" id="forumStatus">
                <option value="aktif" selected>Semua</option>
                <option value="nonaktif">PDF</option>
                <option value="nonaktif">DOCX</option>
                <option value="nonaktif">ZIP</option>
                </select>
            </div>
        </div>
    `,
};
let activeModul = null;

// Tambahkan event listener ke setiap tombol "Tambah"
tambahButtons.forEach((button) => {
    button.addEventListener("click", () => {
        // Ambil data modul dari tombol yang diklik
        activeModul = button.dataset.modul;
        // Tampilkan modal
        modalOverlay.style.display = "flex";
    });
});
// Event untuk menutup modal
closeButton.addEventListener("click", () => {
    modalOverlay.style.display = "none";
    activeModul = null; // Reset modul aktif
});

// Delegasi event pada modal untuk memilih konten
modalOverlay.addEventListener("click", (event) => {
    const contentCard = event.target.closest(".content-card");
    if (contentCard) {
        const contentType = contentCard.getAttribute("data-content");
        addCard(contentType, activeModul); // Panggil fungsi dengan modul aktif
        modalOverlay.style.display = "none"; // Tutup modal
    }
});

// Fungsi untuk menambahkan konten ke dalam container
function addCard(type, modul) {
    const template = templates[type];
    if (template) {
        const container = document.querySelector(`.cards-container[data-modul="${modul}"]`);
        if (container) {
            const div = document.createElement("div");
            div.innerHTML = template;
            container.appendChild(div.firstElementChild);
        } else {
            console.error("Container tidak ditemukan untuk modul:", modul);
        }
    } else {
        console.error("Template tidak ditemukan untuk tipe:", type);
    }
}




let moduleCounter = 2; // Inisialisasi counter modul
document.getElementById("addModuleButton").addEventListener("click", function () {
    moduleCounter++;

    const newModuleHTML = `
        <div class="card-custom mt-5" id="module${moduleCounter}">
            <div class="card-atas-custom">Modul ${moduleCounter}</div>
            <form>
                <div class="mb-4 horizontal-form">
                <label for="namaModul" class="label-nama-modul">Nama modul</label>
                <input type="text" class="form-control input-custom" id="namaModul" placeholder="Masukkan nama modul">
            </div>

            <!-- Deskripsi -->
            <div class="mb-4 d-flex align-items-start">
                <label for="deskripsiModul" class="label-horizontal">Deskripsi</label>
                <textarea class="form-control form-horizontal" id="deskripsiModul" rows="4" placeholder="Masukkan deskripsi modul"></textarea>
            </div>
                <div class="input-container">
                    <label for="kontenModul${moduleCounter}" class="label-aligned">Konten</label>
                    <div class="container custom-margin-top" id="card-container${moduleCounter}">
                        <div class="card custom-card-style p-3">
                            <button class="more-button toggle-dropdown" title="More" type="button" data-dropdown-id="dropdown1">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>

                            <div class="mb-3">
                                <input
                                    type="text"
                                    class="form-control module-input-style"
                                    id="materi1"
                                    placeholder="Masukkan judul materi">
                            </div>
                            <div class="mb-3 d-flex align-items-center">
                                <label for="videoFile" class="label-new-style1">File</label>
                                <div class="custom-file-input">
                                    <input type="file" id="fileInput" class="custom-file-input-style" onchange="updateFileName()" />
                                    <button class="btn btn-primary">Choose file</button>
                                    <span id="fileName">no file chosen</span>
                                </div>
                            </div>

                            <div class="d-flex align-items-center">
                                <label for="forumStatus" class="label-new-style2">Forum</label>
                                <select class="form-select" id="forumStatus">
                                <option value="aktif" selected>Aktif</option>
                                <option value="nonaktif">Nonaktif</option>
                                </select>
                            </div>
                        </div>


                        <div id="cardsContainer${moduleCounter}"></div>
                        <!-- Tombol Tambah -->
                        <div class="d-flex mt-3">
                            <button class="tambah-modul-btn" id="tambahButton${moduleCounter}" type="button">
                                <i class="bi bi-plus-lg me-2"></i> Tambah
                            </button>
                        </div>
                        <!-- Popup Modal -->
                        <div class="modal-overlay" id="modalOverlay${moduleCounter}" style="display: none;">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content popup-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="popupModalLabel">Pilih Konten</h5>
                                        <button type="button" class="btn-close" id="closeButton${moduleCounter}" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                         <div class="row g-3 content-grid">
                                            <div class="col-4 content-item">
                                                <div class="content-card" data-content="soal">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="44" viewBox="0 0 33 44" fill="none">
                                                        <path d="M7.52609 11.1105H13.3373M7.52609 22.0854H24.9598M7.52609 28.3567H24.9598M7.52609 34.628H13.3373M4.62047 42.4672H27.8655C28.6361 42.4672 29.3751 42.1368 29.9201 41.5488C30.465 40.9607 30.7711 40.1632 30.7711 39.3315V4.83922C30.7711 4.00759 30.465 3.21002 29.9201 2.62197C29.3751 2.03392 28.6361 1.70355 27.8655 1.70355H4.62047C3.84985 1.70355 3.11079 2.03392 2.56588 2.62197C2.02097 3.21002 1.71484 4.00759 1.71484 4.83922V39.3315C1.71484 40.1632 2.02097 40.9607 2.56588 41.5488C3.11079 42.1368 3.84985 42.4672 4.62047 42.4672Z" stroke="white" stroke-width="2.71659" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M24.9608 11.8944C25.362 11.8944 25.6872 11.5435 25.6872 11.1105C25.6872 10.6776 25.362 10.3266 24.9608 10.3266C24.5596 10.3266 24.2344 10.6776 24.2344 11.1105C24.2344 11.5435 24.5596 11.8944 24.9608 11.8944Z" fill="white" stroke="white" stroke-width="0.848934"/>
                                                      </svg>
                                                      <div class="text-label" style="margin-top: 10px;">Soal</div>
                                                </div>
                                            </div>
                                            <div class="col-4 content-item">
                                                <div class="content-card" data-content="video">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="47" height="51" viewBox="0 0 47 51" fill="none">
                                                        <g clip-path="url(#clip0_1392_2271)">
                                                          <path d="M0.871382 10.7232C0.871382 8.87879 2.25228 7.4301 3.89608 7.4301H43.6101C45.2539 7.4301 46.6348 8.87879 46.6348 10.7232V41.0375C46.6348 41.9195 46.3099 42.7603 45.7392 43.3761C45.1695 43.991 44.4029 44.3306 43.6101 44.3306H3.89608C3.10326 44.3306 2.33671 43.991 1.76694 43.3761C1.19631 42.7603 0.871382 41.9195 0.871382 41.0375V10.7232ZM44.2207 10.1052L43.9526 10.3536L44.2207 10.1052C44.0638 9.93592 43.8449 9.83502 43.6101 9.83502H3.89608C3.66131 9.83502 3.44236 9.93592 3.28551 10.1052C3.12953 10.2735 3.04624 10.4962 3.04624 10.7232V41.0375C3.04624 41.5012 3.40114 41.9257 3.89608 41.9257H43.6101C43.8449 41.9257 44.0638 41.8248 44.2207 41.6556C44.3767 41.4872 44.4599 41.2645 44.4599 41.0375V10.7232C44.4599 10.4962 44.3767 10.2735 44.2207 10.1052Z" fill="white" stroke="white" stroke-width="0.731045"/>
                                                          <path d="M30.0274 25.301L30.027 25.3007L19.225 17.8101C19.225 17.8101 19.225 17.8101 19.225 17.81C19.1345 17.7474 19.0328 17.7139 18.9304 17.71C18.8281 17.706 18.725 17.7317 18.6316 17.7867C18.5379 17.8419 18.4561 17.9254 18.3976 18.0315C18.3391 18.1376 18.3072 18.2608 18.3069 18.3879V33.3734V33.3752C18.3072 33.5023 18.3391 33.6255 18.3976 33.7316L18.0775 33.9081L18.3976 33.7316C18.4561 33.8377 18.5379 33.9212 18.6316 33.9764C18.725 34.0314 18.8281 34.0571 18.9304 34.0531C19.0327 34.0492 19.1344 34.0157 19.2248 33.9532L30.0274 25.301ZM30.0274 25.301C30.1123 25.3597 30.185 25.4425 30.2366 25.5441C30.2881 25.6459 30.3159 25.7616 30.3159 25.8805C30.3159 25.9994 30.2881 26.1152 30.2366 26.2169C30.185 26.3185 30.1123 26.4013 30.0274 26.46L30.027 26.4603L19.225 33.953L30.0274 25.301Z" fill="white" stroke="white" stroke-width="0.731045"/>
                                                        </g>
                                                        <defs>
                                                          <clipPath id="clip0_1392_2271">
                                                            <rect width="46.4945" height="50.1755" fill="white" transform="translate(0.505859 0.792725)"/>
                                                          </clipPath>
                                                        </defs>
                                                      </svg>
                                                      <div class="text-label" style="margin-top: 10px;">Video</div>
                                                </div>
                                            </div>
                                            <div class="col-4 content-item">
                                                <div class="content-card" data-content="file">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53" fill="none">
                                                        <path d="M18.5168 27.1802H34.4831V24.9718H18.5168V27.1802ZM18.5168 33.295H34.4831V31.0867H18.5168V33.295ZM18.5168 39.4121H27.8581V37.2038H18.5168V39.4121ZM14.6081 46.375C13.5923 46.375 12.7443 46.0349 12.0641 45.3547C11.3839 44.6746 11.0431 43.8258 11.0416 42.8085V10.1915C11.0416 9.17562 11.3824 8.32763 12.0641 7.64746C12.7457 6.96729 13.5945 6.62647 14.6103 6.625H32.0208L41.9583 16.5625V42.8085C41.9583 43.8244 41.6182 44.6731 40.938 45.3547C40.2579 46.0364 39.4084 46.3765 38.3896 46.375H14.6081ZM30.9166 17.6667V8.83333H14.6103C14.2702 8.83333 13.9581 8.97467 13.674 9.25733C13.3898 9.54 13.2485 9.85137 13.25 10.1915V42.8085C13.25 43.1472 13.3913 43.4585 13.674 43.7427C13.9566 44.0268 14.268 44.1681 14.6081 44.1667H38.3918C38.7304 44.1667 39.0418 44.0253 39.326 43.7427C39.6101 43.46 39.7514 43.1479 39.75 42.8063V17.6667H30.9166Z" fill="white"/>
                                                      </svg>
                                                      <div class="text-label" style="margin-top: 10px;">File</div>
                                                </div>
                                            </div>
                                            <div class="col-4 content-item">
                                                <div class="content-card" data-content="link">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 47 51" fill="none">
                                                        <path d="M14.0653 18.9608C10.4794 18.9608 7.62109 22.0953 7.62109 25.8805C7.62109 29.6656 10.4794 32.8001 14.0653 32.8001H21.3757V35.8951H14.0653C8.99151 35.8951 4.81753 31.4405 4.81753 25.8805C4.81753 20.3205 8.99151 15.8659 14.0653 15.8659H21.3757V18.9608H14.0653ZM31.0621 24.2284V27.5325H16.4412V24.2284H31.0621ZM33.438 35.8951H26.1275V32.8001H33.438C37.0238 32.8001 39.8821 29.6656 39.8821 25.8805C39.8821 22.0953 37.0238 18.9608 33.438 18.9608H26.1275V15.8659H33.438C38.5117 15.8659 42.6857 20.3205 42.6857 25.8805C42.6857 31.4405 38.5117 35.8951 33.438 35.8951Z" fill="white" stroke="white"/>
                                                      </svg>
                                                      <div class="text-label" style="margin-top: 10px;">Link</div>
                                                </div>
                                            </div>
                                            <div class="col-4 content-item">
                                                <div class="content-card" data-content="catatan">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53" fill="none">
                                                        <path d="M12.402 41.9583H30.9167V30.9167H41.9584V12.402C41.9584 12.0045 41.831 11.6784 41.5763 11.4237C41.3216 11.169 40.9963 11.0417 40.6002 11.0417H12.3998C12.0038 11.0417 11.6784 11.169 11.4237 11.4237C11.1691 11.6784 11.0417 12.0045 11.0417 12.402V40.6002C11.0417 40.9962 11.1691 41.3216 11.4237 41.5763C11.6784 41.831 12.0045 41.9583 12.402 41.9583ZM12.402 44.1667C11.4127 44.1667 10.5706 43.8192 9.87571 43.1243C9.18082 42.4295 8.83337 41.5881 8.83337 40.6002V12.3998C8.83337 11.4134 9.18082 10.572 9.87571 9.87568C10.5706 9.18079 11.4127 8.83334 12.402 8.83334H40.6002C41.5866 8.83334 42.428 9.18079 43.1244 9.87568C43.8193 10.5706 44.1667 11.4127 44.1667 12.402V31.5549L31.5527 44.1667H12.402ZM17.4127 29.7264V27.5181H26.5V29.7264H17.4127ZM17.4127 20.9792V18.7708H35.5873V20.9792H17.4127Z" fill="white"/>
                                                      </svg>
                                                      <div class="text-label" style="margin-top: 10px;">Catatan</div>
                                                </div>
                                            </div>
                                            <div class="col-4 content-item">
                                                <div class="content-card" data-content="tugas">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53" fill="none">
                                                        <path d="M25.3958 39.2421H27.6041V28.874L32.2416 33.5115L33.8051 31.9369L26.5 24.6318L19.1948 31.9369L20.7715 33.4982L25.3958 28.874V39.2421ZM14.6103 46.375C13.593 46.375 12.7443 46.0349 12.0641 45.3547C11.3839 44.6746 11.0431 43.8258 11.0416 42.8085V10.1915C11.0416 9.17562 11.3824 8.32763 12.0641 7.64746C12.7457 6.96729 13.5945 6.62647 14.6103 6.625H32.0208L41.9583 16.5625V42.8085C41.9583 43.8244 41.6182 44.6731 40.938 45.3547C40.2579 46.0364 39.4084 46.3765 38.3896 46.375H14.6103ZM30.9166 17.6667V8.83333H14.6103C14.2702 8.83333 13.9581 8.97467 13.674 9.25733C13.3898 9.54 13.2485 9.85137 13.25 10.1915V42.8085C13.25 43.1472 13.3913 43.4585 13.674 43.7427C13.9566 44.0268 14.268 44.1681 14.6081 44.1667H38.3918C38.7304 44.1667 39.0418 44.0253 39.326 43.7427C39.6101 43.46 39.7514 43.1479 39.75 42.8063V17.6667H30.9166Z" fill="white"/>
                                                      </svg>
                                                      <div class="text-label" style="margin-top: 10px;">Tugas</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    `;

    const cardContainer = document.getElementById("cardContainer");
    cardContainer.insertAdjacentHTML("beforeend", newModuleHTML);

    // Pastikan event listener diatur setelah elemen ter-render
    setTimeout(() => {
        initializeAddButton(moduleCounter);
    }, 0);

    // Fungsi untuk inisialisasi tombol tambah pada modul tertentu
    function initializeAddButton(moduleId) {
        const tambahButton = document.getElementById(`tambahButton${moduleId}`);
        const modalOverlay = document.getElementById(`modalOverlay${moduleId}`);
        const closeButton = document.getElementById(`closeButton${moduleId}`);
        const cardsContainer = document.getElementById(`cardsContainer${moduleId}`);

        // Cek apakah elemen ada
        if (!tambahButton || !modalOverlay || !closeButton || !cardsContainer) {
            console.error(`Elemen tidak ditemukan untuk modul ${moduleId}`);
            return;
        }

        // Event untuk menampilkan modal
        tambahButton.addEventListener("click", () => {
            modalOverlay.style.display = "flex";
        });

        // Event untuk menutup modal
        closeButton.addEventListener("click", () => {
            modalOverlay.style.display = "none";
        });

        // Event untuk memilih konten di modal
        modalOverlay.querySelectorAll(".content-card").forEach((card) => {
            card.addEventListener("click", () => {
                const contentType = card.getAttribute("data-content");
                addContent(contentType, cardsContainer); // Tambahkan konten ke modul yang sesuai
                modalOverlay.style.display = "none"; // Tutup modal
            });
        });
    }

    // Fungsi untuk menambahkan konten ke container modul tertentu
    function addContent(contentType, cardsContainer) {
        const templates = {

            soal: `
                <div class="card custom-card-style p-3">
                    <button class="more-button toggle-dropdown" title="More" type="button" data-dropdown-id="dropdown1">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>
                    <!-- Dropdown -->
                    <select class="form-select custom-dropdownn">
                        <option selected>Pilih soal</option>
                        <option value="1">Soal 1</option>
                        <option value="2">Soal 2</option>
                        <option value="3">Soal 3</option>
                    </select>
                    <!-- Tombol -->
                    <button class="btn custom-button">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Buat Soal
                    </button>
                </div>
            `,
            file: `
                <div class="card custom-card-style p-3">
                    <button class="more-button toggle-dropdown" title="More" type="button" data-dropdown-id="dropdown1">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>
                    <div class="mb-3">
                        <input
                            type="text"
                            class="form-control module-input-style"
                            placeholder="Masukkan judul materi">
                    </div>
                    <div class="mb-3 d-flex align-items-center">
                        <label class="label-new-style1">File</label>
                        <div class="custom-file-input">
                            <input type="file" class="custom-file-input-style" />
                            <button class="btn btn-primary">Choose file</button>
                            <span>no file chosen</span>
                        </div>
                    </div>
                </div>
            `,
            video: `
                <div class="card custom-card-style p-3">
                    <button class="more-button toggle-dropdown" title="More" type="button" data-dropdown-id="dropdown1">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>
                    <div class="mb-3">
                        <input
                            type="text"
                            class="form-control module-input-style"
                            placeholder="Masukkan judul materi">
                    </div>
                    <div class="mb-3 d-flex align-items-center">
                        <label class="label-new-style1">Video</label>
                        <div class="custom-file-input">
                            <input type="file" class="custom-file-input-style" />
                            <button class="btn btn-primary">Choose file</button>
                            <span>no file chosen</span>
                        </div>
                        <input type="text" class="custom-link-masukkan" placeholder="Link URL">
                    </div>
                </div>
            `,
            link: `
                <div class="card custom-card-style p-3">
                    <button class="more-button toggle-dropdown" title="More" type="button" data-dropdown-id="dropdown1">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>

                    <div class="mb-3">
                        <input
                            type="text"
                            class="form-control module-input-style"
                            id="materi1"
                            placeholder="Masukkan nama catatan">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control form-horizontal" rows="4" placeholder="Masukkan deskripsi"></textarea>
                    </div>

                    <div class="mb-3 d-flex align-items-center">
                        <label for="videoFile" class="label-new-style1">Link</label>

                        <input type="text" class="custom-link-masukkan" placeholder="Link URL">
                    </div>
                </div>
                `,
            catatan: `
                <div class="card custom-card-style p-3">
                    <button class="more-button toggle-dropdown" title="More" type="button" data-dropdown-id="dropdown1">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>

                    <div class="mb-3">
                        <input
                            type="text"
                            class="form-control module-input-style"
                            id="materi1"
                            placeholder="Masukkan judul">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control form-horizontal" rows="4" placeholder="Masukkan catatan"></textarea>
                    </div>

                </div>
            `,
            tugas: `
                <div class="card custom-card-style p-3">
                    <button class="more-button toggle-dropdown" title="More" type="button" data-dropdown-id="dropdown1">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>

                    <div class="mb-3">
                        <input
                            type="text"
                            class="form-control module-input-style"
                            id="materi1"
                            placeholder="Masukkan nama tugas">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control form-horizontal" rows="4" placeholder="Masukkan deskripsi"></textarea>
                    </div>
                    <div class="d-flex align-items-center">
                        <label for="forumStatus" class="label-new-style2">Format </label>
                        <select class="form-select" id="forumStatus">
                        <option value="aktif" selected>Semua</option>
                        <option value="nonaktif">PDF</option>
                        <option value="nonaktif">DOCX</option>
                        <option value="nonaktif">ZIP</option>
                        </select>
                    </div>
                </div>
            `,
        };

        const cardTemplate = templates[contentType];
        if (cardTemplate) {
            cardsContainer.insertAdjacentHTML("beforeend", cardTemplate); // Tambahkan konten ke modul yang sesuai
        }
    }

});

</script>

@endsection
