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
        <!-- Input judul kursus -->
        <input
            type="text"
            class="form-control course-title"
            placeholder="Masukkan nama soal"
        />
        <div class="custom-select-wrapper">
            <select id="courseDropdown" class="form-control course-dropdown">
                <option value="" disabled selected>Pilih kursus</option>
                <option value="java-pemula">Pemrograman Java untuk Pemula</option>
                <option value="html-css">Dasar HTML dan CSS</option>
                <option value="javascript-advanced">JavaScript Lanjutan</option>
                <option value="python-beginner">Python untuk Pemula</option>
                <option value="data-science">Pengantar Data Science</option>
            </select>
            <i class="bi bi-caret-down-fill icon"></i>
        </div>


        <!-- Tombol dalam flex container -->
        <div class="d-flex align-items-center">
            <!-- Tombol Pengaturan -->
            <a href="{{ route('admin.soal.setting-tambah') }}" class="btn btn-link d-flex align-items-center me-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none" style="margin-right: 8px;">
                    <path d="M15.2519 1.625C15.4239 1.62501 15.5915 1.67961 15.7305 1.78094C15.8695 1.88227 15.9727 2.02511 16.0254 2.18888L16.9191 4.966C17.2945 5.14963 17.6536 5.356 17.9965 5.58837L20.85 4.97413C21.0182 4.9382 21.1935 4.95661 21.3507 5.0267C21.5078 5.09679 21.6386 5.21494 21.7243 5.36413L23.9765 9.2625C24.0625 9.4116 24.0989 9.58417 24.0805 9.75531C24.0621 9.92646 23.9899 10.0873 23.8741 10.2147L21.916 12.376C21.9445 12.7904 21.9445 13.2063 21.916 13.6208L23.8741 15.7852C23.9899 15.9127 24.0621 16.0735 24.0805 16.2447C24.0989 16.4158 24.0625 16.5884 23.9765 16.7375L21.7243 20.6375C21.6383 20.7864 21.5074 20.9042 21.3503 20.974C21.1933 21.0438 21.0181 21.0619 20.85 21.0259L17.9965 20.4116C17.6553 20.6424 17.2945 20.8504 16.9208 21.034L16.0254 23.8111C15.9727 23.9749 15.8695 24.1177 15.7305 24.2191C15.5915 24.3204 15.4239 24.375 15.2519 24.375H10.7474C10.5754 24.375 10.4078 24.3204 10.2688 24.2191C10.1298 24.1177 10.0265 23.9749 9.97388 23.8111L9.08175 21.0356C8.7074 20.8525 8.34631 20.6435 8.00113 20.41L5.14925 21.0259C4.98101 21.0618 4.8057 21.0434 4.64859 20.9733C4.49148 20.9032 4.36067 20.7851 4.275 20.6359L2.02275 16.7375C1.93675 16.5884 1.90032 16.4158 1.91872 16.2447C1.93712 16.0735 2.00939 15.9127 2.12513 15.7852L4.08325 13.6208C4.05488 13.2074 4.05488 12.7926 4.08325 12.3792L2.12513 10.2147C2.00939 10.0873 1.93712 9.92646 1.91872 9.75531C1.90032 9.58417 1.93675 9.4116 2.02275 9.2625L4.275 5.3625C4.3609 5.21361 4.49182 5.0958 4.64891 5.02601C4.806 4.95622 4.98118 4.93806 5.14925 4.97413L8.00113 5.59C8.34563 5.35763 8.70638 5.148 9.08175 4.96438L9.9755 2.18888C10.028 2.02563 10.1307 1.88318 10.2691 1.78189C10.4074 1.68061 10.5743 1.62569 10.7458 1.625H15.2503H15.2519ZM14.6571 3.25H11.3421L10.4191 6.12138L9.79675 6.42525C9.49079 6.57497 9.19543 6.74545 8.91275 6.9355L8.3375 7.3255L5.3865 6.6885L3.729 9.5615L5.75213 11.8007L5.70338 12.4897C5.68002 12.8295 5.68002 13.1705 5.70338 13.5103L5.75213 14.1993L3.72575 16.4385L5.38488 19.3115L8.33588 18.6761L8.91113 19.0645C9.19381 19.2546 9.48916 19.425 9.79513 19.5747L10.4175 19.8786L11.3421 22.75H14.6604L15.5866 19.877L16.2074 19.5747C16.513 19.4254 16.8079 19.2549 17.0898 19.0645L17.6634 18.6761L20.616 19.3115L22.2735 16.4385L20.2488 14.1993L20.2975 13.5103C20.3209 13.1699 20.3209 12.8284 20.2975 12.4881L20.2488 11.7991L22.2751 9.5615L20.616 6.6885L17.6634 7.32225L17.0898 6.9355C16.8079 6.7451 16.513 6.5746 16.2074 6.42525L15.5866 6.123L14.6588 3.25H14.6571ZM12.9996 8.125C14.2926 8.125 15.5325 8.63861 16.4468 9.55285C17.361 10.4671 17.8746 11.7071 17.8746 13C17.8746 14.2929 17.361 15.5329 16.4468 16.4471C15.5325 17.3614 14.2926 17.875 12.9996 17.875C11.7067 17.875 10.4667 17.3614 9.55248 16.4471C8.63824 15.5329 8.12463 14.2929 8.12463 13C8.12463 11.7071 8.63824 10.4671 9.55248 9.55285C10.4667 8.63861 11.7067 8.125 12.9996 8.125ZM12.9996 9.75C12.1377 9.75 11.311 10.0924 10.7015 10.7019C10.092 11.3114 9.74963 12.138 9.74963 13C9.74963 13.862 10.092 14.6886 10.7015 15.2981C11.311 15.9076 12.1377 16.25 12.9996 16.25C13.8616 16.25 14.6882 15.9076 15.2977 15.2981C15.9072 14.6886 16.2496 13.862 16.2496 13C16.2496 12.138 15.9072 11.3114 15.2977 10.7019C14.6882 10.0924 13.8616 9.75 12.9996 9.75Z" fill="#4A5568"/>
                </svg> Pengaturan
            </a>
            <!-- Tombol Simpan -->
            <!-- Tombol Simpan -->
            <a href="{{ route('admin.soal.index') }}" class="btn btn-primary me-2" id="saveButton">
                Simpan
            </a>

            <!-- Tombol Cancel -->
            <a href="{{ route('admin.soal.index') }}" class="btn btn-outline-primary">
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
    <div class="d-flex align-items-center justify-content-between custom-margin-bottom"  >
        <h2 class="header-title mb-0">Tambah Soal</h2>
        <a href="#" class="text-decoration-none import-soal d-flex align-items-center" data-bs-target="#importSoalModal" data-bs-toggle="modal">
            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="18" viewBox="0 0 17 18" fill="none">
                <path d="M9.28125 7.96875V0.75H7.21875V7.96875H0V10.0312H7.21875V17.25H9.28125V10.0312H16.5V7.96875H9.28125Z" fill="#0056D2"/>
            </svg>
            <span class="ms-2" >Import Soal</span>
        </a>
    </div>
    <div class="modal fade" id="importSoalModal" tabindex="-1" aria-labelledby="importSoalModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="importSoalModalLabel">Upload file</h5>
              <a href="{{ asset('images/Template Soal Unocos.docx') }}" class="text-decoration-none template-link d-flex align-items-center" download class="download-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                  <path d="M10.0007 13.8333L5.83398 9.66658L7.00065 8.45825L9.16732 10.6249V3.83325H10.834V10.6249L13.0007 8.45825L14.1673 9.66658L10.0007 13.8333ZM5.00065 17.1666C4.54232 17.1666 4.1501 17.0035 3.82398 16.6774C3.49787 16.3513 3.33454 15.9588 3.33398 15.4999V12.9999H5.00065V15.4999H15.0007V12.9999H16.6673V15.4999C16.6673 15.9583 16.5043 16.3508 16.1782 16.6774C15.852 17.0041 15.4595 17.1671 15.0007 17.1666H5.00065Z" fill="#2D3748"/>
                </svg>
                <span class="ms-2">Download template file import</span>
              </a>

            </div>
            <div class="modal-body">
                <div class="upload">
                    <!-- Add File Button -->
                   <div class="upload-section mb-4" id="file-upload" onclick="document.getElementById('fileInput').click();">
                       <i class="bi bi-upload"></i>
                       <p>Drag and drop file</p>
                       <input type="file" class="d-none" id="fileInput">
                   </div>
               </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-import">Import</button>
              <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
    </div>
    <div id="question-container">
        <div class="card mb-3">
                <!-- Pertanyaan -->
                <div class="question-row">
                    <!-- Nomor Pertanyaan -->
                    <label class="question-number">1.</label>

                    <div class="textarea-container">
                        <textarea class="form-control question-textarea" rows="4" placeholder="Masukkan pertanyaan"></textarea>
                        <div id="imagePreviewContainer"
                            class="image-preview-container"
                            style="
                                position: absolute;
                                bottom: 10px;
                                left: 10px;
                                max-width: 90%;
                                pointer-events: none;">
                            <img id="imagePreview"
                                class="image-preview"
                                alt="Preview Gambar"
                                style="
                                    max-width: 100px; /* Atur lebar maksimum */
                                    max-height: 100px; /* Atur tinggi maksimum */
                                    display: none;
                                    border: 1px solid #ccc;
                                    border-radius: 5px;">
                        </div>
                        <button class="image-button" id="imageButton">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
                                <path d="M4.16732 4.97248H3.93147V5.20833V17.7083V17.9442H4.16732H12.2648V19.5558H4.16732C3.14862 19.5558 2.31983 18.727 2.31983 17.7083V5.20833C2.31983 4.18963 3.14862 3.36085 4.16732 3.36085H17.709C18.7277 3.36085 19.5565 4.18963 19.5565 5.20833V12.2642H17.9448V5.20833V4.97248H17.709H4.16732Z"/>
                                <path d="M16.2266 15.3892H5.68068L8.2937 11.9051L9.1647 13.6471L9.33536 13.9885L9.56433 13.6832L12.4893 9.78319L16.2266 15.3892Z" stroke-width="0.471698"/>
                                <path d="M20.8333 15.625H18.75V18.75H15.625V20.8333H18.75V23.9583H20.8333V20.8333H23.9583V18.75H20.8333V15.625Z"/>
                            </svg>
                        </button>
                        <!-- Input file yang tersembunyi -->
                        <input type="file" id="fileInput" class="hidden-file-input" accept="image/*">
                        <div id="imagePreviewContainer" class="image-preview-container">
                            <img id="imagePreview" class="image-preview" alt="Preview Gambar" style="max-width: 100%; display: none;">
                        </div>
                    </div>
                    <div class="question-options">
                        <!-- Dropdown Pilihan Ganda / Esai -->
                        <div class="question-type-container">
                            <button id="dropdown-toggle-2" class="dropdown-toggle" style="border: 1px solid #ccc;">
                                <span class="dropdown-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                        <path d="M2.64062 9.99984C2.64062 14.6023 6.37146 18.3332 10.974 18.3332C15.5765 18.3332 19.3073 14.6023 19.3073 9.99984C19.3073 5.39734 15.5765 1.6665 10.974 1.6665C6.37146 1.6665 2.64062 5.39734 2.64062 9.99984ZM17.6406 9.99984C17.6406 11.7679 16.9382 13.4636 15.688 14.7139C14.4378 15.9641 12.7421 16.6665 10.974 16.6665C9.20585 16.6665 7.51016 15.9641 6.25991 14.7139C5.00967 13.4636 4.30729 11.7679 4.30729 9.99984C4.30729 8.23173 5.00967 6.53603 6.25991 5.28579C7.51016 4.03555 9.20585 3.33317 10.974 3.33317C12.7421 3.33317 14.4378 4.03555 15.688 5.28579C16.9382 6.53603 17.6406 8.23173 17.6406 9.99984ZM10.974 14.9998C12.3 14.9998 13.5718 14.4731 14.5095 13.5354C15.4472 12.5977 15.974 11.3259 15.974 9.99984C15.974 8.67375 15.4472 7.40199 14.5095 6.4643C13.5718 5.52662 12.3 4.99984 10.974 4.99984C9.64788 4.99984 8.37611 5.52662 7.43842 6.4643C6.50074 7.40199 5.97396 8.67375 5.97396 9.99984C5.97396 11.3259 6.50074 12.5977 7.43842 13.5354C8.37611 14.4731 9.64788 14.9998 10.974 14.9998Z" fill="black" />
                                    </svg>
                                </span>
                                <span class="dropdown-text"> Pilihan ganda</span>
                            </button>
                            <ul id="dropdown-menu-2" class="dropdown-menu">
                                <li data-value="multiple-choice" data-icon='
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                        <path d="M2.64062 9.99984C2.64062 14.6023 6.37146 18.3332 10.974 18.3332C15.5765 18.3332 19.3073 14.6023 19.3073 9.99984C19.3073 5.39734 15.5765 1.6665 10.974 1.6665C6.37146 1.6665 2.64062 5.39734 2.64062 9.99984ZM17.6406 9.99984C17.6406 11.7679 16.9382 13.4636 15.688 14.7139C14.4378 15.9641 12.7421 16.6665 10.974 16.6665C9.20585 16.6665 7.51016 15.9641 6.25991 14.7139C5.00967 13.4636 4.30729 11.7679 4.30729 9.99984C4.30729 8.23173 5.00967 6.53603 6.25991 5.28579C7.51016 4.03555 9.20585 3.33317 10.974 3.33317C12.7421 3.33317 14.4378 4.03555 15.688 5.28579C16.9382 6.53603 17.6406 8.23173 17.6406 9.99984ZM10.974 14.9998C12.3 14.9998 13.5718 14.4731 14.5095 13.5354C15.4472 12.5977 15.974 11.3259 15.974 9.99984C15.974 8.67375 15.4472 7.40199 14.5095 6.4643C13.5718 5.52662 12.3 4.99984 10.974 4.99984C9.64788 4.99984 8.37611 5.52662 7.43842 6.4643C6.50074 7.40199 5.97396 8.67375 5.97396 9.99984C5.97396 11.3259 6.50074 12.5977 7.43842 13.5354C8.37611 14.4731 9.64788 14.9998 10.974 14.9998Z" fill="black"/>
                                    </svg>'>
                                    <span class="dropdown-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                            <path d="M2.64062 9.99984C2.64062 14.6023 6.37146 18.3332 10.974 18.3332C15.5765 18.3332 19.3073 14.6023 19.3073 9.99984C19.3073 5.39734 15.5765 1.6665 10.974 1.6665C6.37146 1.6665 2.64062 5.39734 2.64062 9.99984ZM17.6406 9.99984C17.6406 11.7679 16.9382 13.4636 15.688 14.7139C14.4378 15.9641 12.7421 16.6665 10.974 16.6665C9.20585 16.6665 7.51016 15.9641 6.25991 14.7139C5.00967 13.4636 4.30729 11.7679 4.30729 9.99984C4.30729 8.23173 5.00967 6.53603 6.25991 5.28579C7.51016 4.03555 9.20585 3.33317 10.974 3.33317C12.7421 3.33317 14.4378 4.03555 15.688 5.28579C16.9382 6.53603 17.6406 8.23173 17.6406 9.99984ZM10.974 14.9998C12.3 14.9998 13.5718 14.4731 14.5095 13.5354C15.4472 12.5977 15.974 11.3259 15.974 9.99984C15.974 8.67375 15.4472 7.40199 14.5095 6.4643C13.5718 5.52662 12.3 4.99984 10.974 4.99984C9.64788 4.99984 8.37611 5.52662 7.43842 6.4643C6.50074 7.40199 5.97396 8.67375 5.97396 9.99984C5.97396 11.3259 6.50074 12.5977 7.43842 13.5354C8.37611 14.4731 9.64788 14.9998 10.974 14.9998Z" fill="black" />
                                        </svg>
                                    </span>
                                    Pilihan ganda
                                </li>
                                <li data-value="essay" data-icon='
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="12" viewBox="0 0 17 12" fill="none">
                                        <path d="M15.6621 1H0.662109M15.6621 4.33333H0.662109M7.32878 7.66667H0.662109M7.32878 11H0.662109" stroke="black" stroke-width="1.0566" stroke-linecap="round"/>
                                    </svg>'>
                                    <span class="dropdown-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="12" viewBox="0 0 17 12" fill="none">
                                            <path d="M15.6621 1H0.662109M15.6621 4.33333H0.662109M7.32878 7.66667H0.662109M7.32878 11H0.662109" stroke="black" stroke-width="1.0566" stroke-linecap="round"/>
                                        </svg>
                                    </span>
                                    Esai
                                </li>
                            </ul>

                        </div>

                        <!-- Input Poin -->
                        <div class="points-container">
                            <label for="points" class="mb-1">Poin</label>
                            <input type="number" id="points" class="form-control" style="width: 80px;" min="0" value="0">
                        </div>
                    </div>

                </div>
                <!-- Jawaban -->
                <div class="answers-container" id="multiple-choice" style="display: block;">
                    <div id="answers-container">
                        <!-- Answer Group -->
                            <div class="answer-input-group d-flex align-items-center mb-2" data-answer="A">
                                <button class="btn status-button me-2" onclick="toggleAnswerStatus(this)" style="border: none;">
                                    <!-- Ikon SVG Silang -->
                                    <svg class="icon-x" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.40234 12.0001C1.40234 9.18967 2.51879 6.49434 4.50607 4.50705C6.49336 2.51977 9.1887 1.40332 11.9991 1.40332C14.8096 1.40332 17.5049 2.51977 19.4922 4.50705C21.4795 6.49434 22.5959 9.18967 22.5959 12.0001C22.5959 14.8106 21.4795 17.5059 19.4922 19.4932C17.5049 21.4805 14.8096 22.5969 11.9991 22.5969C9.1887 22.5969 6.49336 21.4805 4.50607 19.4932C2.51879 17.5059 1.40234 14.8106 1.40234 12.0001ZM11.9991 2.92332C9.59183 2.92332 7.28311 3.87962 5.58088 5.58185C3.87865 7.28408 2.92234 9.5928 2.92234 12.0001C2.92234 14.4074 3.87865 16.7162 5.58088 18.4184C7.28311 20.1206 9.59183 21.0769 11.9991 21.0769C14.4065 21.0769 16.7152 20.1206 18.4174 18.4184C20.1196 16.7162 21.0759 14.4074 21.0759 12.0001C21.0759 9.5928 20.1196 7.28408 18.4174 5.58185C16.7152 3.87962 14.4065 2.92332 11.9991 2.92332ZM15.7655 8.23532C15.9155 8.38534 15.9998 8.58879 15.9998 8.80092C15.9998 9.01305 15.9155 9.2165 15.7655 9.36652L13.1303 12.0001L15.7655 14.6337C15.9158 14.7839 16.0002 14.9877 16.0002 15.2001C16.0002 15.4126 15.9158 15.6163 15.7655 15.7665C15.6153 15.9167 15.4116 16.0011 15.1991 16.0011C14.9867 16.0011 14.783 15.9167 14.6327 15.7665L11.9991 13.1313L9.36554 15.7665C9.29116 15.8409 9.20286 15.8999 9.10568 15.9402C9.0085 15.9804 8.90434 16.0011 8.79914 16.0011C8.69395 16.0011 8.58979 15.9804 8.49261 15.9402C8.39543 15.8999 8.30713 15.8409 8.23274 15.7665C8.15836 15.6921 8.09936 15.6038 8.05911 15.5067C8.01885 15.4095 7.99813 15.3053 7.99813 15.2001C7.99813 15.0949 8.01885 14.9908 8.05911 14.8936C8.09936 14.7964 8.15836 14.7081 8.23274 14.6337L10.8679 12.0001L8.23274 9.36652C8.08253 9.2163 7.99813 9.01256 7.99813 8.80012C7.99813 8.58768 8.08253 8.38394 8.23274 8.23372C8.38296 8.0835 8.5867 7.99911 8.79914 7.99911C9.01159 7.99911 9.21533 8.0835 9.36554 8.23372L11.9991 10.8689L14.6327 8.23372C14.7071 8.15922 14.7953 8.10011 14.8925 8.05978C14.9897 8.01945 15.0939 7.99869 15.1991 7.99869C15.3044 7.99869 15.4086 8.01945 15.5058 8.05978C15.603 8.10011 15.6912 8.16082 15.7655 8.23532Z" fill="black"/>
                                    </svg>
                                </button>
                                <label class="answer-label me-2">A.</label>
                                <div class="input-wrapper position-relative">
                                    <input type="text" class="form-control pr-5" placeholder="Masukkan jawaban">
                                    <button class="btn image-button position-absolute end-0 top-50 translate-middle-y" style="border: none;" onclick="this.closest('.answer-input-group').querySelector('.custom-image-upload').click();">
                                        <!-- Ikon Upload -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                            <path d="M4.16732 4.97248H3.93147V5.20833V17.7083V17.9442H4.16732H12.2648V19.5558H4.16732C3.14862 19.5558 2.31983 18.727 2.31983 17.7083V5.20833C2.31983 4.18963 3.14862 3.36085 4.16732 3.36085H17.709C18.7277 3.36085 19.5565 4.18963 19.5565 5.20833V12.2642H17.9448V5.20833V4.97248H17.709H4.16732Z" fill="#4A5568" stroke="#4A5568" stroke-width="0.471698"/>
                                            <path d="M16.2266 15.3892H5.68068L8.2937 11.9051L9.1647 13.6471L9.33536 13.9885L9.56433 13.6832L12.4893 9.78319L16.2266 15.3892Z" fill="#4A5568" stroke="#4A5568" stroke-width="0.471698"/>
                                            <path d="M20.8333 15.625H18.75V18.75H15.625V20.8333H18.75V23.9583H20.8333V20.8333H23.9583V18.75H20.8333V15.625Z" fill="#4A5568"/>
                                        </svg>
                                    </button>
                                    <input type="file" class="custom-image-upload" style="display: none;" onchange="handleCustomFileUpload(event, this)">
                                </div>
                                <div class="uploaded-image-preview ms-2" style="width: 50px; height: 50px; display: none;">
                                    <img class="custom-image-preview" src="" alt="Preview" style="width: 100%; height: 100%; object-fit: cover; border-radius: 5px;">
                                </div>
                            </div>

                            <div class="answer-input-group d-flex align-items-center mb-2" data-answer="B">
                                <button class="btn status-button me-2" onclick="toggleAnswerStatus(this)" style="border: none;">
                                    <!-- Ikon SVG Silang -->
                                    <svg class="icon-x" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.40234 12.0001C1.40234 9.18967 2.51879 6.49434 4.50607 4.50705C6.49336 2.51977 9.1887 1.40332 11.9991 1.40332C14.8096 1.40332 17.5049 2.51977 19.4922 4.50705C21.4795 6.49434 22.5959 9.18967 22.5959 12.0001C22.5959 14.8106 21.4795 17.5059 19.4922 19.4932C17.5049 21.4805 14.8096 22.5969 11.9991 22.5969C9.1887 22.5969 6.49336 21.4805 4.50607 19.4932C2.51879 17.5059 1.40234 14.8106 1.40234 12.0001ZM11.9991 2.92332C9.59183 2.92332 7.28311 3.87962 5.58088 5.58185C3.87865 7.28408 2.92234 9.5928 2.92234 12.0001C2.92234 14.4074 3.87865 16.7162 5.58088 18.4184C7.28311 20.1206 9.59183 21.0769 11.9991 21.0769C14.4065 21.0769 16.7152 20.1206 18.4174 18.4184C20.1196 16.7162 21.0759 14.4074 21.0759 12.0001C21.0759 9.5928 20.1196 7.28408 18.4174 5.58185C16.7152 3.87962 14.4065 2.92332 11.9991 2.92332ZM15.7655 8.23532C15.9155 8.38534 15.9998 8.58879 15.9998 8.80092C15.9998 9.01305 15.9155 9.2165 15.7655 9.36652L13.1303 12.0001L15.7655 14.6337C15.9158 14.7839 16.0002 14.9877 16.0002 15.2001C16.0002 15.4126 15.9158 15.6163 15.7655 15.7665C15.6153 15.9167 15.4116 16.0011 15.1991 16.0011C14.9867 16.0011 14.783 15.9167 14.6327 15.7665L11.9991 13.1313L9.36554 15.7665C9.29116 15.8409 9.20286 15.8999 9.10568 15.9402C9.0085 15.9804 8.90434 16.0011 8.79914 16.0011C8.69395 16.0011 8.58979 15.9804 8.49261 15.9402C8.39543 15.8999 8.30713 15.8409 8.23274 15.7665C8.15836 15.6921 8.09936 15.6038 8.05911 15.5067C8.01885 15.4095 7.99813 15.3053 7.99813 15.2001C7.99813 15.0949 8.01885 14.9908 8.05911 14.8936C8.09936 14.7964 8.15836 14.7081 8.23274 14.6337L10.8679 12.0001L8.23274 9.36652C8.08253 9.2163 7.99813 9.01256 7.99813 8.80012C7.99813 8.58768 8.08253 8.38394 8.23274 8.23372C8.38296 8.0835 8.5867 7.99911 8.79914 7.99911C9.01159 7.99911 9.21533 8.0835 9.36554 8.23372L11.9991 10.8689L14.6327 8.23372C14.7071 8.15922 14.7953 8.10011 14.8925 8.05978C14.9897 8.01945 15.0939 7.99869 15.1991 7.99869C15.3044 7.99869 15.4086 8.01945 15.5058 8.05978C15.603 8.10011 15.6912 8.16082 15.7655 8.23532Z" fill="black"/>
                                    </svg>
                                </button>
                                <label class="answer-label me-2">B.</label>
                                <div class="input-wrapper position-relative">
                                    <input type="text" class="form-control pr-5" placeholder="Masukkan jawaban">
                                    <button class="btn image-button position-absolute end-0 top-50 translate-middle-y" style="border: none;" onclick="this.closest('.answer-input-group').querySelector('.custom-image-upload').click();">
                                        <!-- Ikon Upload -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                            <path d="M4.16732 4.97248H3.93147V5.20833V17.7083V17.9442H4.16732H12.2648V19.5558H4.16732C3.14862 19.5558 2.31983 18.727 2.31983 17.7083V5.20833C2.31983 4.18963 3.14862 3.36085 4.16732 3.36085H17.709C18.7277 3.36085 19.5565 4.18963 19.5565 5.20833V12.2642H17.9448V5.20833V4.97248H17.709H4.16732Z" fill="#4A5568" stroke="#4A5568" stroke-width="0.471698"/>
                                            <path d="M16.2266 15.3892H5.68068L8.2937 11.9051L9.1647 13.6471L9.33536 13.9885L9.56433 13.6832L12.4893 9.78319L16.2266 15.3892Z" fill="#4A5568" stroke="#4A5568" stroke-width="0.471698"/>
                                            <path d="M20.8333 15.625H18.75V18.75H15.625V20.8333H18.75V23.9583H20.8333V20.8333H23.9583V18.75H20.8333V15.625Z" fill="#4A5568"/>
                                        </svg>
                                    </button>
                                    <input type="file" class="custom-image-upload" style="display: none;" onchange="handleCustomFileUpload(event, this)">
                                </div>
                                <div class="uploaded-image-preview ms-2" style="width: 50px; height: 50px; display: none;">
                                    <img class="custom-image-preview" src="" alt="Preview" style="width: 100%; height: 100%; object-fit: cover; border-radius: 5px;">
                                </div>
                            </div>

                    </div>
                    <!-- Button "Tambah jawaban" -->
                    <div class="container mt-3">
                        <div>
                            <button class="btn add-answer-btn" onclick="addAnswer()" id="add-answer-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none" class="add-answer-icon">
                                    <path d="M9.28125 7.46875V0.25H7.21875V7.46875H0V9.53125H7.21875V16.75H9.28125V9.53125H16.5V7.46875H9.28125Z" fill="#0056D2"/>
                                </svg>
                                <span class="add-answer-text">Tambah jawaban</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="answers-container" id="essay" style="display: none;">
                    <textarea class="form-control textarea-jawaban" placeholder="Masukkan jawaban"></textarea>
                </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="custom-card-body">
            <button class="btn d-flex align-items-center tambah-pertanyaan-btn" id="add-question-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none" class="icon">
                    <path d="M9.28125 7.46875V0.25H7.21875V7.46875H0V9.53125H7.21875V16.75H9.28125V9.53125H16.5V7.46875H9.28125Z"/>
                </svg>
                Tambah Pertanyaan
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


.input-wrapper {
  width: 820px; /* Ukuran lebar tetap */
  max-width: 100%; /* Agar tetap responsif */
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
.upload-section {
    border: 2px dashed #ccc;
    border-radius: 10px;
    padding: 40px;
    text-align: center;
    color: #666;
    background-color: #fff;
    cursor: pointer;
    width: 936px;
    height: 150px; /* Tinggi elemen */
    margin-left: 10px;
}
.upload-section:hover {
    border-color: #007bff;
    color: #007bff;
}
.upload-btn {
    border: none;
    font-size: 14px;
    font-weight: 400;
    margin-left: 230px;
}
.upload {
    margin-top: 40px; /* Menggeser elemen ke atas */
}
.upload-btn:hover,
.upload-btn:focus {
    background-color: transparent; /* Warna latar tetap sama */
    border-color: #CBD5E0; /* Warna border tetap */
    color: #2D3748; /* Warna teks tetap sama */
}
.upload-section i {
    font-size: 24px;
    color: #718096;
}

.upload-section p {
    font-size: 14px;
    margin-top: 10px;
}
.custom-heading {
    font-size: 24px;
    font-weight: 600;
    color: var(--Neutral-400, #2D3748);
    margin-bottom: 22px;
}

.label-text {
    font-size: 14px;
    margin-bottom: 5px;
    display: block;
}
.btn-import {
  background-color: #0056D2;
  color: white;
  border: 2px solid #0056D2;
  border-radius: 20px;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
  outline: none;
}

.btn-import:hover {
  background-color: #0041a8;
}

.btn-cancel {
  background-color: white;
  color: #0056D2;
  border: 2px solid #0056D2;
  border-radius: 20px;
  padding: 10px 20px;
  cursor: pointer;
}

.btn-cancel:hover {
  background-color: #f1f1f1;
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
.import-soal {
    font-size: 14px;
    font-weight: 600;
    color: #0056D2;
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
.custom-margin-bottom {
        margin-bottom: 20px;
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
button:focus {
  outline: none;
  border: none;
}
.question-type-container {
    position: relative;
    display: inline-block;
    width: 200px;

}

.dropdown-toggle {
    width: 100%;
    padding: 8px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border: 1px;
    border-color: #a0a0a0;
    background-color: white;
    border-radius: 10px;

}
.dropdown-text {
    flex-grow: 1; /* Pastikan teks mengambil ruang yang tersedia */
    text-align: left; /* Teks rata kiri */
    margin-left: 8px;
}


.dropdown-menu {
    display: none;
    position: absolute;
    width: 100%;
    background-color: white;
    border-radius: 10px;
    margin-top: 4px;
    z-index: 1000;
    list-style: none;
}

.dropdown-menu li {
    padding: 8px;
    display: flex;
    align-items: center;
    cursor: pointer;
}

.dropdown-menu li:hover {
    background-color: #f1f1f1;
}

.dropdown-menu li span {
    margin-right: 8px;
}


#multiple-choice {
    margin-top: 20px; /* Ganti 20px sesuai kebutuhan */
}
.answer-input-group {
    margin-bottom: 10px;
    align-items: center;
}

.answer-label {
    font-weight: 500;
    font-size: 14px;
    margin-right: 10px;
}
.add-answer-btn {
    color: #007bff;
    font-weight: bold;
    cursor: pointer;
}
.point-input {
    width: 60px;
    text-align: center;
}
.question-type {
    display: flex;
    flex-direction: column;
}
.question-type input {
    margin-right: 5px;
}
.question-row {
    display: flex;
    align-items: start;
    gap: 10px;
}
.question-number {
    font-weight: 500;
    font-size: 16px;
    margin-top: 8px;
}


.textarea-container {
    position: relative;
    width: 100%;
}
.textarea-container textarea {
    padding-right: 40px;
}
.textarea-container .image-button {
    position: absolute;
    top: 15%;
    right: 10px;
    transform: translateY(-50%);
    background: none;
    border: none;
    font-size: 1.2rem;
    color: #6c757d;
    cursor: pointer;
}
.image-button svg {
  fill: #4A5568; /* Warna default */
  transition: fill 0.3s ease; /* Animasi hover */
}

.image-button:hover svg {
  fill: #007bff; /* Warna saat hover */
}

.hidden-file-input {
    display: none;
}
.modal-content {
    height: 495px;
    border-radius: 20px;
    padding: 30px;
}
.modal-dialog {
    max-width: 1064px;
}
.add-answer-btn {
    display: flex;
    align-items: center;
    border: none;
    background: transparent;
    padding: 0;
    color: #0056D2;
    cursor: pointer;
}
.modal-title {
    font-size: 20px;
    font-weight: 600;
    color: #003D94;
}
.template-link {
    font-size: 14px;
    font-weight: 400;
    color: #2D3748;
}
.modal-body {
  border: none; /* Menghilangkan border */
  box-shadow: none; /* Menghilangkan shadow */
}

.add-answer-icon {
    margin-right: 8px; /* Jarak antara ikon dan teks */
}

.add-answer-text {
    font-size: 14px;
    font-weight: 600;
    color: #0056D2;
}
.textarea-jawaban {
    width: 79%;
    height: 150px; /* Tinggi tetap */
    resize: none; /* Disable resize */
    margin-top: 20px;
    margin-left: 20px;
}
.custom-select-wrapper {
    position: relative;
    display: inline-block;
    width: 300px;
    border-radius: 7.802px;
}

/* Elemen select asli */
.custom-select-wrapper select {
    appearance: none; /* Hilangkan tampilan bawaan browser */
    -webkit-appearance: none;
    -moz-appearance: none;
    background: none;
    border: 1px solid #ccc;
    padding: 10px 40px 10px 15px;
    font-size: 10.922px;
    font-weight: 400;
    width: 100%;
    color: #2D3748;
    border-radius: 7.802px; /* Membuat sudut membulat */
}

/* Wrapper ikon panah */
.custom-select-wrapper .icon {
    position: absolute;
    top: 50%;
    right: 15px;
    transform: translateY(-50%);
    pointer-events: none; /* Supaya ikon tidak bisa diklik */
    color: #2D3748;
    font-size: 14px;
}
.custom-select-wrapper select option {
    font-size: 10.922px;
    font-weight: 400;
}

/* Hover dan fokus untuk select */
.custom-select-wrapper select:hover {
    border-color: #2D3748;
}

.custom-select-wrapper select:focus {
    outline: none;
    border-color: #2D3748;
    box-shadow: 0 0 5px rgba(45, 55, 72, 0.5);
}
.custom-card-body {
    padding: 0px; /* Padding untuk elemen dalam card */

}
.tambah-pertanyaan-btn {
    border: none; /* Menghilangkan border tombol */
    background: none; /* Menghilangkan background */
    color: #0056b3; /* Warna teks biru */
    font-size: 16px; /* Ukuran font */
    font-weight: 600;
    cursor: pointer; /* Mengatur kursor agar terlihat clickable */
    text-decoration: none; /* Menghilangkan garis bawah */
}

.tambah-pertanyaan-btn .icon {
    margin-right: 8px; /* Menambahkan jarak antara ikon dan teks */
    fill: #0056b3; /* Warna ikon biru */
}

.tambah-pertanyaan-btn:hover {
    color: #003d80; /* Warna biru lebih gelap pada hover */
}

.tambah-pertanyaan-btn:hover .icon {
    fill: #003d80; /* Warna ikon pada hover */
}


</style>
<script>
// Ambil elemen tombol dan input file
const imageButton = document.getElementById('imageButton');
const fileInput = document.getElementById('fileInput');


function toggleAnswerStatus(selectedButton) {
    // Ambil semua tombol dengan class .status-button
    const allButtons = document.querySelectorAll('.status-button');

    allButtons.forEach((button) => {
        // Reset semua tombol ke ikon silang
        button.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.40234 12.0001C1.40234 9.18967 2.51879 6.49434 4.50607 4.50705C6.49336 2.51977 9.1887 1.40332 11.9991 1.40332C14.8096 1.40332 17.5049 2.51977 19.4922 4.50705C21.4795 6.49434 22.5959 9.18967 22.5959 12.0001C22.5959 14.8106 21.4795 17.5059 19.4922 19.4932C17.5049 21.4805 14.8096 22.5969 11.9991 22.5969C9.1887 22.5969 6.49336 21.4805 4.50607 19.4932C2.51879 17.5059 1.40234 14.8106 1.40234 12.0001ZM11.9991 2.92332C9.59183 2.92332 7.28311 3.87962 5.58088 5.58185C3.87865 7.28408 2.92234 9.5928 2.92234 12.0001C2.92234 14.4074 3.87865 16.7162 5.58088 18.4184C7.28311 20.1206 9.59183 21.0769 11.9991 21.0769C14.4065 21.0769 16.7152 20.1206 18.4174 18.4184C20.1196 16.7162 21.0759 14.4074 21.0759 12.0001C21.0759 9.5928 20.1196 7.28408 18.4174 5.58185C16.7152 3.87962 14.4065 2.92332 11.9991 2.92332ZM15.7655 8.23532C15.9155 8.38534 15.9998 8.58879 15.9998 8.80092C15.9998 9.01305 15.9155 9.2165 15.7655 9.36652L13.1303 12.0001L15.7655 14.6337C15.9158 14.7839 16.0002 14.9877 16.0002 15.2001C16.0002 15.4126 15.9158 15.6163 15.7655 15.7665C15.6153 15.9167 15.4116 16.0011 15.1991 16.0011C14.9867 16.0011 14.783 15.9167 14.6327 15.7665L11.9991 13.1313L9.36554 15.7665C9.29116 15.8409 9.20286 15.8999 9.10568 15.9402C9.0085 15.9804 8.90434 16.0011 8.79914 16.0011C8.69395 16.0011 8.58979 15.9804 8.49261 15.9402C8.39543 15.8999 8.30713 15.8409 8.23274 15.7665C8.15836 15.6921 8.09936 15.6038 8.05911 15.5067C8.01885 15.4095 7.99813 15.3053 7.99813 15.2001C7.99813 15.0949 8.01885 14.9908 8.05911 14.8936C8.09936 14.7964 8.15836 14.7081 8.23274 14.6337L10.8679 12.0001L8.23274 9.36652C8.08253 9.2163 7.99813 9.01256 7.99813 8.80012C7.99813 8.58768 8.08253 8.38394 8.23274 8.23372C8.38296 8.0835 8.5867 7.99911 8.79914 7.99911C9.01159 7.99911 9.21533 8.0835 9.36554 8.23372L11.9991 10.8689L14.6327 8.23372C14.7071 8.15922 14.7953 8.10011 14.8925 8.05978C14.9897 8.01945 15.0939 7.99869 15.1991 7.99869C15.3044 7.99869 15.4086 8.01945 15.5058 8.05978C15.603 8.10011 15.6912 8.16082 15.7655 8.23532Z" fill="black"/>
            </svg>
        `;
    });

    // Ubah tombol yang diklik menjadi ikon centang
    selectedButton.innerHTML = `
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
        <mask id="mask0_3863_10049" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="22">
            <path d="M10.9981 20.9995C12.3115 21.0012 13.6124 20.7433 14.8259 20.2407C16.0393 19.738 17.1415 19.0005 18.0691 18.0705C18.999 17.143 19.7366 16.0408 20.2392 14.8273C20.7419 13.6138 20.9998 12.313 20.9981 10.9995C20.9997 9.68606 20.7418 8.38521 20.2392 7.17173C19.7365 5.95826 18.999 4.85607 18.0691 3.92852C17.1415 2.99853 16.0393 2.26102 14.8259 1.75836C13.6124 1.25571 12.3115 0.997818 10.9981 0.99952C9.68459 0.997846 8.38375 1.25575 7.17027 1.7584C5.95679 2.26106 4.85461 2.99856 3.92706 3.92852C2.99709 4.85607 2.25959 5.95826 1.75694 7.17173C1.25428 8.38521 0.996381 9.68606 0.998055 10.9995C0.996353 12.313 1.25424 13.6138 1.7569 14.8273C2.25955 16.0408 2.99707 17.143 3.92706 18.0705C4.85461 19.0005 5.95679 19.738 7.17027 20.2406C8.38375 20.7433 9.68459 21.0012 10.9981 20.9995Z" fill="white" stroke="white" stroke-width="1.81132" stroke-linejoin="round"/>
            <path d="M6.99805 10.9995L9.99805 13.9995L15.998 7.99951" stroke="black" stroke-width="1.81132" stroke-linecap="round" stroke-linejoin="round"/>
        </mask>
        <g mask="url(#mask0_3863_10049)">
            <path d="M-1.00195 -1.00049H22.998V22.9995H-1.00195V-1.00049Z" fill="#0056D2"/>
        </g>
        </svg>
    `;
}

document.getElementById("dropdown-toggle-2").addEventListener("click", function (event) {
    event.stopPropagation();
    const menu = document.getElementById("dropdown-menu-2");
    menu.classList.toggle("show");
});

// Close dropdown when clicking outside
document.addEventListener("click", function () {
    const menu = document.getElementById("dropdown-menu-2");
    if (menu.classList.contains("show")) {
        menu.classList.remove("show");
    }
});

// Change content based on dropdown selection
document.querySelectorAll("#dropdown-menu-2 li").forEach(function (item) {
    item.addEventListener("click", function () {
        const selectedValue = this.getAttribute("data-value");
        const selectedIcon = this.getAttribute("data-icon");
        const dropdownText = document.querySelector("#dropdown-toggle-2 .dropdown-text");
        const dropdownIcon = document.querySelector("#dropdown-toggle-2 .dropdown-icon");

        // Ganti teks pada dropdown
        dropdownText.textContent = this.textContent;

        // Ganti ikon pada dropdown
        dropdownIcon.innerHTML = selectedIcon;

        // Tampilkan konten berdasarkan pilihan
        if (selectedValue === "multiple-choice") {
            document.getElementById("multiple-choice").style.display = "block";
            document.getElementById("essay").style.display = "none";
        } else if (selectedValue === "essay") {
            document.getElementById("multiple-choice").style.display = "none";
            document.getElementById("essay").style.display = "block";
        }

        // Tutup dropdown
        document.getElementById("dropdown-menu-2").classList.remove("show");
    });
});

document.getElementById('imageButton').addEventListener('click', function () {
    document.getElementById('fileInput').click();
});

document.getElementById('fileInput').addEventListener('change', handleFileUpload);

function handleFileUpload(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            const imagePreview = document.getElementById('imagePreview');
            imagePreview.src = e.target.result; // Menampilkan gambar
            imagePreview.style.display = 'block'; // Memastikan gambar terlihat
        };
        reader.readAsDataURL(file);
    }

    // Reset input file agar event `change` bisa dipicu lagi
    event.target.value = '';
}

function handleCustomFileUpload(event, inputElement) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            const previewContainer = inputElement.closest('.answer-input-group');
            const previewImage = previewContainer.querySelector('.custom-image-preview');
            previewImage.src = e.target.result;
            previewImage.parentElement.style.display = 'block';
        };
        reader.readAsDataURL(file);
    }
}



let answerIndex = 2; // Dimulai dari "C" (A=0, B=1, C=2)
const maxAnswerIndex = 4; // Batas maksimum jawaban, yaitu "E"

document.getElementById('add-answer-button').addEventListener('click', function () {
    if (answerIndex > maxAnswerIndex) {
        return; // Hentikan fungsi jika sudah mencapai batas
    }

    const answersContainer = document.getElementById('answers-container');

    // Buat elemen baru
    const uniqueFileId = `image-upload-${answerIndex}`; // ID unik untuk file input
    const newAnswer = document.createElement('div');
    newAnswer.className = 'answer-input-group d-flex align-items-center mb-2';
    newAnswer.setAttribute('data-answer', String.fromCharCode(65 + answerIndex)); // Tambahkan atribut jawaban
    newAnswer.innerHTML = `
        <button class="btn status-button me-2" onclick="toggleAnswerStatus(this)" style="border: none;">
            <!-- Ikon SVG Silang -->
            <svg class="icon-x" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.40234 12.0001C1.40234 9.18967 2.51879 6.49434 4.50607 4.50705C6.49336 2.51977 9.1887 1.40332 11.9991 1.40332C14.8096 1.40332 17.5049 2.51977 19.4922 4.50705C21.4795 6.49434 22.5959 9.18967 22.5959 12.0001C22.5959 14.8106 21.4795 17.5059 19.4922 19.4932C17.5049 21.4805 14.8096 22.5969 11.9991 22.5969C9.1887 22.5969 6.49336 21.4805 4.50607 19.4932C2.51879 17.5059 1.40234 14.8106 1.40234 12.0001ZM11.9991 2.92332C9.59183 2.92332 7.28311 3.87962 5.58088 5.58185C3.87865 7.28408 2.92234 9.5928 2.92234 12.0001C2.92234 14.4074 3.87865 16.7162 5.58088 18.4184C7.28311 20.1206 9.59183 21.0769 11.9991 21.0769C14.4065 21.0769 16.7152 20.1206 18.4174 18.4184C20.1196 16.7162 21.0759 14.4074 21.0759 12.0001C21.0759 9.5928 20.1196 7.28408 18.4174 5.58185C16.7152 3.87962 14.4065 2.92332 11.9991 2.92332ZM15.7655 8.23532C15.9155 8.38534 15.9998 8.58879 15.9998 8.80092C15.9998 9.01305 15.9155 9.2165 15.7655 9.36652L13.1303 12.0001L15.7655 14.6337C15.9158 14.7839 16.0002 14.9877 16.0002 15.2001C16.0002 15.4126 15.9158 15.6163 15.7655 15.7665C15.6153 15.9167 15.4116 16.0011 15.1991 16.0011C14.9867 16.0011 14.783 15.9167 14.6327 15.7665L11.9991 13.1313L9.36554 15.7665C9.29116 15.8409 9.20286 15.8999 9.10568 15.9402C9.0085 15.9804 8.90434 16.0011 8.79914 16.0011C8.69395 16.0011 8.58979 15.9804 8.49261 15.9402C8.39543 15.8999 8.30713 15.8409 8.23274 15.7665C8.15836 15.6921 8.09936 15.6038 8.05911 15.5067C8.01885 15.4095 7.99813 15.3053 7.99813 15.2001C7.99813 15.0949 8.01885 14.9908 8.05911 14.8936C8.09936 14.7964 8.15836 14.7081 8.23274 14.6337L10.8679 12.0001L8.23274 9.36652C8.08253 9.2163 7.99813 9.01256 7.99813 8.80012C7.99813 8.58768 8.08253 8.38394 8.23274 8.23372C8.38296 8.0835 8.5867 7.99911 8.79914 7.99911C9.01159 7.99911 9.21533 8.0835 9.36554 8.23372L11.9991 10.8689L14.6327 8.23372C14.7071 8.15922 14.7953 8.10011 14.8925 8.05978C14.9897 8.01945 15.0939 7.99869 15.1991 7.99869C15.3044 7.99869 15.4086 8.01945 15.5058 8.05978C15.603 8.10011 15.6912 8.16082 15.7655 8.23532Z" fill="black"/>
            </svg>
        </button>
        <label class="answer-label me-2">${String.fromCharCode(65 + answerIndex)}.</label>
        <div class="input-wrapper position-relative">
            <input type="text" class="form-control pr-5" placeholder="Masukkan jawaban">
            <button class="btn image-button position-absolute end-0 top-50 translate-middle-y" style="border: none;" onclick="document.getElementById('${uniqueFileId}').click();">
                <!-- Ikon Upload -->
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                    <path d="M4.16732 4.97248H3.93147V5.20833V17.7083V17.9442H4.16732H12.2648V19.5558H4.16732C3.14862 19.5558 2.31983 18.727 2.31983 17.7083V5.20833C2.31983 4.18963 3.14862 3.36085 4.16732 3.36085H17.709C18.7277 3.36085 19.5565 4.18963 19.5565 5.20833V12.2642H17.9448V5.20833V4.97248H17.709H4.16732Z" fill="#4A5568" stroke="#4A5568" stroke-width="0.471698"/>
                    <path d="M16.2266 15.3892H5.68068L8.2937 11.9051L9.1647 13.6471L9.33536 13.9885L9.56433 13.6832L12.4893 9.78319L16.2266 15.3892Z" fill="#4A5568" stroke="#4A5568" stroke-width="0.471698"/>
                    <path d="M20.8333 15.625H18.75V18.75H15.625V20.8333H18.75V23.9583H20.8333V20.8333H23.9583V18.75H20.8333V15.625Z" fill="#4A5568"/>
                </svg>
            </button>
            <input type="file" id="${uniqueFileId}" class="custom-image-upload" style="display: none;" onchange="handleFileUpload(event)">
        </div>
        <div class="uploaded-image-preview ms-2" style="width: 50px; height: 50px; display: none;">
            <img class="custom-image-preview" src="" alt="Preview" style="width: 100%; height: 100%; object-fit: cover; border-radius: 5px;">
        </div>
    `;

    // Tambahkan elemen ke container
    answersContainer.appendChild(newAnswer);

    // Tambahkan indeks label jawaban
    answerIndex++;
});
function handleFileUpload(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            const previewContainer = event.target.closest('.answer-input-group');
            const previewImage = previewContainer.querySelector('.custom-image-preview');
            previewImage.src = e.target.result;
            previewImage.parentElement.style.display = 'block';
        };
        reader.readAsDataURL(file);
    }
}

function toggleAnswerStatus(button) {
    // Contoh fungsi untuk toggle status jawaban (bisa dimodifikasi sesuai kebutuhan)
    button.classList.toggle('active');
}


document.getElementById('add-question-btn').addEventListener('click', function () {
    const questionContainer = document.getElementById('question-container');
    const questionCount = questionContainer.querySelectorAll('.card.mb-3').length;

    // ID unik untuk elemen dropdown
    const uniqueToggleId = `dropdown-toggle-${Date.now()}`;
    const uniqueMenuId = `dropdown-menu-${Date.now()}`;

    const uniqueAnswersContainerId = `answers-container-${Date.now()}`;
    const uniqueAddAnswerButtonId = `add-answer-button-${Date.now()}`;


    const newCard = document.createElement('div');
    newCard.className = 'card mb-3';

    // Isi elemen baru dengan struktur HTML
    newCard.innerHTML = `

        <!-- Pertanyaan -->
                <div class="question-row">
                    <!-- Nomor Pertanyaan -->
                    <label class="question-number">${questionCount + 1}.</label>

                    <div class="textarea-container" data-group="${questionCount + 1}">
                        <textarea class="form-control question-textarea" rows="4" placeholder="Masukkan pertanyaan"></textarea>
                        <div id="imagePreviewContainer"
                            class="image-preview-container"
                            style="
                                position: absolute;
                                bottom: 10px;
                                left: 10px;
                                max-width: 90%;
                                pointer-events: none;">
                            <img
                                class="image-preview"
                                alt="Preview Gambar"
                                style="
                                    max-width: 100px; /* Atur lebar maksimum */
                                    max-height: 100px; /* Atur tinggi maksimum */
                                    display: none;
                                    border: 1px solid #ccc;
                                    border-radius: 5px;">
                        </div>
                        <button class="image-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
                                <path d="M4.16732 4.97248H3.93147V5.20833V17.7083V17.9442H4.16732H12.2648V19.5558H4.16732C3.14862 19.5558 2.31983 18.727 2.31983 17.7083V5.20833C2.31983 4.18963 3.14862 3.36085 4.16732 3.36085H17.709C18.7277 3.36085 19.5565 4.18963 19.5565 5.20833V12.2642H17.9448V5.20833V4.97248H17.709H4.16732Z"/>
                                <path d="M16.2266 15.3892H5.68068L8.2937 11.9051L9.1647 13.6471L9.33536 13.9885L9.56433 13.6832L12.4893 9.78319L16.2266 15.3892Z" stroke-width="0.471698"/>
                                <path d="M20.8333 15.625H18.75V18.75H15.625V20.8333H18.75V23.9583H20.8333V20.8333H23.9583V18.75H20.8333V15.625Z"/>
                            </svg>
                        </button>
                        <!-- Input file yang tersembunyi -->
                        <input type="file" class="file-input" style="display: none;" accept="image/*">
                    </div>
                    <div class="question-options">
                        <!-- Dropdown Pilihan Ganda / Esai -->
                        <div class="question-type-container">
                            <button id="${uniqueToggleId}" class="dropdown-toggle" style="border: 1px solid #ccc;">
                                <span class="dropdown-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                        <path d="M2.64062 9.99984C2.64062 14.6023 6.37146 18.3332 10.974 18.3332C15.5765 18.3332 19.3073 14.6023 19.3073 9.99984C19.3073 5.39734 15.5765 1.6665 10.974 1.6665C6.37146 1.6665 2.64062 5.39734 2.64062 9.99984ZM17.6406 9.99984C17.6406 11.7679 16.9382 13.4636 15.688 14.7139C14.4378 15.9641 12.7421 16.6665 10.974 16.6665C9.20585 16.6665 7.51016 15.9641 6.25991 14.7139C5.00967 13.4636 4.30729 11.7679 4.30729 9.99984C4.30729 8.23173 5.00967 6.53603 6.25991 5.28579C7.51016 4.03555 9.20585 3.33317 10.974 3.33317C12.7421 3.33317 14.4378 4.03555 15.688 5.28579C16.9382 6.53603 17.6406 8.23173 17.6406 9.99984ZM10.974 14.9998C12.3 14.9998 13.5718 14.4731 14.5095 13.5354C15.4472 12.5977 15.974 11.3259 15.974 9.99984C15.974 8.67375 15.4472 7.40199 14.5095 6.4643C13.5718 5.52662 12.3 4.99984 10.974 4.99984C9.64788 4.99984 8.37611 5.52662 7.43842 6.4643C6.50074 7.40199 5.97396 8.67375 5.97396 9.99984C5.97396 11.3259 6.50074 12.5977 7.43842 13.5354C8.37611 14.4731 9.64788 14.9998 10.974 14.9998Z" fill="black" />
                                    </svg>
                                </span>
                                <span class="dropdown-text"> Pilihan ganda</span>
                            </button>
                            <ul id="${uniqueMenuId}" class="dropdown-menu">
                                <li data-value="multiple-choice" data-icon='
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                        <path d="M2.64062 9.99984C2.64062 14.6023 6.37146 18.3332 10.974 18.3332C15.5765 18.3332 19.3073 14.6023 19.3073 9.99984C19.3073 5.39734 15.5765 1.6665 10.974 1.6665C6.37146 1.6665 2.64062 5.39734 2.64062 9.99984ZM17.6406 9.99984C17.6406 11.7679 16.9382 13.4636 15.688 14.7139C14.4378 15.9641 12.7421 16.6665 10.974 16.6665C9.20585 16.6665 7.51016 15.9641 6.25991 14.7139C5.00967 13.4636 4.30729 11.7679 4.30729 9.99984C4.30729 8.23173 5.00967 6.53603 6.25991 5.28579C7.51016 4.03555 9.20585 3.33317 10.974 3.33317C12.7421 3.33317 14.4378 4.03555 15.688 5.28579C16.9382 6.53603 17.6406 8.23173 17.6406 9.99984ZM10.974 14.9998C12.3 14.9998 13.5718 14.4731 14.5095 13.5354C15.4472 12.5977 15.974 11.3259 15.974 9.99984C15.974 8.67375 15.4472 7.40199 14.5095 6.4643C13.5718 5.52662 12.3 4.99984 10.974 4.99984C9.64788 4.99984 8.37611 5.52662 7.43842 6.4643C6.50074 7.40199 5.97396 8.67375 5.97396 9.99984C5.97396 11.3259 6.50074 12.5977 7.43842 13.5354C8.37611 14.4731 9.64788 14.9998 10.974 14.9998Z" fill="black"/>
                                    </svg>'>
                                    <span class="dropdown-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                            <path d="M2.64062 9.99984C2.64062 14.6023 6.37146 18.3332 10.974 18.3332C15.5765 18.3332 19.3073 14.6023 19.3073 9.99984C19.3073 5.39734 15.5765 1.6665 10.974 1.6665C6.37146 1.6665 2.64062 5.39734 2.64062 9.99984ZM17.6406 9.99984C17.6406 11.7679 16.9382 13.4636 15.688 14.7139C14.4378 15.9641 12.7421 16.6665 10.974 16.6665C9.20585 16.6665 7.51016 15.9641 6.25991 14.7139C5.00967 13.4636 4.30729 11.7679 4.30729 9.99984C4.30729 8.23173 5.00967 6.53603 6.25991 5.28579C7.51016 4.03555 9.20585 3.33317 10.974 3.33317C12.7421 3.33317 14.4378 4.03555 15.688 5.28579C16.9382 6.53603 17.6406 8.23173 17.6406 9.99984ZM10.974 14.9998C12.3 14.9998 13.5718 14.4731 14.5095 13.5354C15.4472 12.5977 15.974 11.3259 15.974 9.99984C15.974 8.67375 15.4472 7.40199 14.5095 6.4643C13.5718 5.52662 12.3 4.99984 10.974 4.99984C9.64788 4.99984 8.37611 5.52662 7.43842 6.4643C6.50074 7.40199 5.97396 8.67375 5.97396 9.99984C5.97396 11.3259 6.50074 12.5977 7.43842 13.5354C8.37611 14.4731 9.64788 14.9998 10.974 14.9998Z" fill="black" />
                                        </svg>
                                    </span>
                                    Pilihan ganda
                                </li>
                                <li data-value="essay" data-icon='
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="12" viewBox="0 0 17 12" fill="none">
                                        <path d="M15.6621 1H0.662109M15.6621 4.33333H0.662109M7.32878 7.66667H0.662109M7.32878 11H0.662109" stroke="black" stroke-width="1.0566" stroke-linecap="round"/>
                                    </svg>'>
                                    <span class="dropdown-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="12" viewBox="0 0 17 12" fill="none">
                                            <path d="M15.6621 1H0.662109M15.6621 4.33333H0.662109M7.32878 7.66667H0.662109M7.32878 11H0.662109" stroke="black" stroke-width="1.0566" stroke-linecap="round"/>
                                        </svg>
                                    </span>
                                    Esai
                                </li>
                            </ul>

                        </div>

                        <!-- Input Poin -->
                        <div class="points-container">
                            <label for="points" class="mb-1">Poin</label>
                            <input type="number" id="points" class="form-control" style="width: 80px;" min="0" value="0">
                        </div>
                    </div>

                </div>
                <!-- Jawaban -->
                <div class="answers-container" id="multiple-choice" style="display: block;">
                    <div id="${uniqueAnswersContainerId}">
                        <!-- Answer Group -->
                            <div class="answer-input-group d-flex align-items-center mb-2">
                                <button class="btn status-button me-2" onclick="toggleAnswerStatus(this)" style="border: none;">
                                    <!-- Ikon SVG Silang -->
                                    <svg class="icon-x" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.40234 12.0001C1.40234 9.18967 2.51879 6.49434 4.50607 4.50705C6.49336 2.51977 9.1887 1.40332 11.9991 1.40332C14.8096 1.40332 17.5049 2.51977 19.4922 4.50705C21.4795 6.49434 22.5959 9.18967 22.5959 12.0001C22.5959 14.8106 21.4795 17.5059 19.4922 19.4932C17.5049 21.4805 14.8096 22.5969 11.9991 22.5969C9.1887 22.5969 6.49336 21.4805 4.50607 19.4932C2.51879 17.5059 1.40234 14.8106 1.40234 12.0001ZM11.9991 2.92332C9.59183 2.92332 7.28311 3.87962 5.58088 5.58185C3.87865 7.28408 2.92234 9.5928 2.92234 12.0001C2.92234 14.4074 3.87865 16.7162 5.58088 18.4184C7.28311 20.1206 9.59183 21.0769 11.9991 21.0769C14.4065 21.0769 16.7152 20.1206 18.4174 18.4184C20.1196 16.7162 21.0759 14.4074 21.0759 12.0001C21.0759 9.5928 20.1196 7.28408 18.4174 5.58185C16.7152 3.87962 14.4065 2.92332 11.9991 2.92332ZM15.7655 8.23532C15.9155 8.38534 15.9998 8.58879 15.9998 8.80092C15.9998 9.01305 15.9155 9.2165 15.7655 9.36652L13.1303 12.0001L15.7655 14.6337C15.9158 14.7839 16.0002 14.9877 16.0002 15.2001C16.0002 15.4126 15.9158 15.6163 15.7655 15.7665C15.6153 15.9167 15.4116 16.0011 15.1991 16.0011C14.9867 16.0011 14.783 15.9167 14.6327 15.7665L11.9991 13.1313L9.36554 15.7665C9.29116 15.8409 9.20286 15.8999 9.10568 15.9402C9.0085 15.9804 8.90434 16.0011 8.79914 16.0011C8.69395 16.0011 8.58979 15.9804 8.49261 15.9402C8.39543 15.8999 8.30713 15.8409 8.23274 15.7665C8.15836 15.6921 8.09936 15.6038 8.05911 15.5067C8.01885 15.4095 7.99813 15.3053 7.99813 15.2001C7.99813 15.0949 8.01885 14.9908 8.05911 14.8936C8.09936 14.7964 8.15836 14.7081 8.23274 14.6337L10.8679 12.0001L8.23274 9.36652C8.08253 9.2163 7.99813 9.01256 7.99813 8.80012C7.99813 8.58768 8.08253 8.38394 8.23274 8.23372C8.38296 8.0835 8.5867 7.99911 8.79914 7.99911C9.01159 7.99911 9.21533 8.0835 9.36554 8.23372L11.9991 10.8689L14.6327 8.23372C14.7071 8.15922 14.7953 8.10011 14.8925 8.05978C14.9897 8.01945 15.0939 7.99869 15.1991 7.99869C15.3044 7.99869 15.4086 8.01945 15.5058 8.05978C15.603 8.10011 15.6912 8.16082 15.7655 8.23532Z" fill="black"/>
                                    </svg>
                                </button>
                                <label class="answer-label me-2">A.</label>
                                <div class="input-wrapper position-relative ">
                                    <input type="text" class="form-control pr-5" placeholder="Masukkan jawaban">
                                    <button class="btn image-button position-absolute end-0 top-50 translate-middle-y" style="border: none;" onclick="document.getElementById('image-upload').click();">
                                        <!-- Ikon Upload -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                            <path d="M4.16732 4.97248H3.93147V5.20833V17.7083V17.9442H4.16732H12.2648V19.5558H4.16732C3.14862 19.5558 2.31983 18.727 2.31983 17.7083V5.20833C2.31983 4.18963 3.14862 3.36085 4.16732 3.36085H17.709C18.7277 3.36085 19.5565 4.18963 19.5565 5.20833V12.2642H17.9448V5.20833V4.97248H17.709H4.16732Z" fill="#4A5568" stroke="#4A5568" stroke-width="0.471698"/>
                                            <path d="M16.2266 15.3892H5.68068L8.2937 11.9051L9.1647 13.6471L9.33536 13.9885L9.56433 13.6832L12.4893 9.78319L16.2266 15.3892Z" fill="#4A5568" stroke="#4A5568" stroke-width="0.471698"/>
                                            <path d="M20.8333 15.625H18.75V18.75H15.625V20.8333H18.75V23.9583H20.8333V20.8333H23.9583V18.75H20.8333V15.625Z" fill="#4A5568"/>
                                        </svg>
                                    </button>
                                    <input type="file" id="image-upload" style="display: none;" onchange="handleFileUpload(event)">
                                </div>
                            </div>

                            <div class="answer-input-group d-flex align-items-center mb-2">
                                <button class="btn status-button me-2" onclick="toggleAnswerStatus(this)" style="border: none;">
                                    <!-- Ikon SVG Silang -->
                                    <svg class="icon-x" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.40234 12.0001C1.40234 9.18967 2.51879 6.49434 4.50607 4.50705C6.49336 2.51977 9.1887 1.40332 11.9991 1.40332C14.8096 1.40332 17.5049 2.51977 19.4922 4.50705C21.4795 6.49434 22.5959 9.18967 22.5959 12.0001C22.5959 14.8106 21.4795 17.5059 19.4922 19.4932C17.5049 21.4805 14.8096 22.5969 11.9991 22.5969C9.1887 22.5969 6.49336 21.4805 4.50607 19.4932C2.51879 17.5059 1.40234 14.8106 1.40234 12.0001ZM11.9991 2.92332C9.59183 2.92332 7.28311 3.87962 5.58088 5.58185C3.87865 7.28408 2.92234 9.5928 2.92234 12.0001C2.92234 14.4074 3.87865 16.7162 5.58088 18.4184C7.28311 20.1206 9.59183 21.0769 11.9991 21.0769C14.4065 21.0769 16.7152 20.1206 18.4174 18.4184C20.1196 16.7162 21.0759 14.4074 21.0759 12.0001C21.0759 9.5928 20.1196 7.28408 18.4174 5.58185C16.7152 3.87962 14.4065 2.92332 11.9991 2.92332ZM15.7655 8.23532C15.9155 8.38534 15.9998 8.58879 15.9998 8.80092C15.9998 9.01305 15.9155 9.2165 15.7655 9.36652L13.1303 12.0001L15.7655 14.6337C15.9158 14.7839 16.0002 14.9877 16.0002 15.2001C16.0002 15.4126 15.9158 15.6163 15.7655 15.7665C15.6153 15.9167 15.4116 16.0011 15.1991 16.0011C14.9867 16.0011 14.783 15.9167 14.6327 15.7665L11.9991 13.1313L9.36554 15.7665C9.29116 15.8409 9.20286 15.8999 9.10568 15.9402C9.0085 15.9804 8.90434 16.0011 8.79914 16.0011C8.69395 16.0011 8.58979 15.9804 8.49261 15.9402C8.39543 15.8999 8.30713 15.8409 8.23274 15.7665C8.15836 15.6921 8.09936 15.6038 8.05911 15.5067C8.01885 15.4095 7.99813 15.3053 7.99813 15.2001C7.99813 15.0949 8.01885 14.9908 8.05911 14.8936C8.09936 14.7964 8.15836 14.7081 8.23274 14.6337L10.8679 12.0001L8.23274 9.36652C8.08253 9.2163 7.99813 9.01256 7.99813 8.80012C7.99813 8.58768 8.08253 8.38394 8.23274 8.23372C8.38296 8.0835 8.5867 7.99911 8.79914 7.99911C9.01159 7.99911 9.21533 8.0835 9.36554 8.23372L11.9991 10.8689L14.6327 8.23372C14.7071 8.15922 14.7953 8.10011 14.8925 8.05978C14.9897 8.01945 15.0939 7.99869 15.1991 7.99869C15.3044 7.99869 15.4086 8.01945 15.5058 8.05978C15.603 8.10011 15.6912 8.16082 15.7655 8.23532Z" fill="black"/>
                                    </svg>
                                </button>
                                <label class="answer-label me-2">B.</label>
                                <div class="input-wrapper position-relative">
                                    <input type="text" class="form-control pr-5" placeholder="Masukkan jawaban">
                                    <button class="btn image-button position-absolute end-0 top-50 translate-middle-y" style="border: none;" onclick="document.getElementById('image-upload').click();">
                                        <!-- Ikon Upload -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                            <path d="M4.16732 4.97248H3.93147V5.20833V17.7083V17.9442H4.16732H12.2648V19.5558H4.16732C3.14862 19.5558 2.31983 18.727 2.31983 17.7083V5.20833C2.31983 4.18963 3.14862 3.36085 4.16732 3.36085H17.709C18.7277 3.36085 19.5565 4.18963 19.5565 5.20833V12.2642H17.9448V5.20833V4.97248H17.709H4.16732Z" fill="#4A5568" stroke="#4A5568" stroke-width="0.471698"/>
                                            <path d="M16.2266 15.3892H5.68068L8.2937 11.9051L9.1647 13.6471L9.33536 13.9885L9.56433 13.6832L12.4893 9.78319L16.2266 15.3892Z" fill="#4A5568" stroke="#4A5568" stroke-width="0.471698"/>
                                            <path d="M20.8333 15.625H18.75V18.75H15.625V20.8333H18.75V23.9583H20.8333V20.8333H23.9583V18.75H20.8333V15.625Z" fill="#4A5568"/>
                                        </svg>
                                    </button>
                                    <input type="file" id="image-upload" style="display: none;" onchange="handleFileUpload(event)">
                                </div>
                            </div>
                    </div>
                    <!-- Button "Tambah jawaban" -->
                    <div class="container mt-3">
                        <div>
                            <button class="btn add-answer-btn" id="${uniqueAddAnswerButtonId}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none" class="add-answer-icon">
                                    <path d="M9.28125 7.46875V0.25H7.21875V7.46875H0V9.53125H7.21875V16.75H9.28125V9.53125H16.5V7.46875H9.28125Z" fill="#0056D2"/>
                                </svg>
                                <span class="add-answer-text">Tambah jawaban</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="answers-container" id="essay" style="display: none;">
                    <textarea class="form-control textarea-jawaban" placeholder="Masukkan jawaban"></textarea>
                </div>
    `;

    questionContainer.appendChild(newCard);

    let answerIndex = 2; // Dimulai dari "C"

    // Event listener untuk tombol "Tambah Jawaban"
    document.getElementById(uniqueAddAnswerButtonId).addEventListener('click', function () {
        const answersContainer = document.getElementById(uniqueAnswersContainerId);

        if (answerIndex > 4) {
            alert("Batas maksimum jawaban tercapai!");
            return;
        }

        const uniqueFileId = `image-upload-${Date.now()}`;
        const newAnswer = document.createElement('div');
        newAnswer.className = 'answer-input-group d-flex align-items-center mb-2';
        newAnswer.innerHTML = `
            <button class="btn status-button me-2" onclick="toggleAnswerStatus(this)" style="border: none;">
                <svg class="icon-x" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.40234 12.0001C1.40234 9.18967 2.51879 6.49434 4.50607 4.50705C6.49336 2.51977 9.1887 1.40332 11.9991 1.40332C14.8096 1.40332 17.5049 2.51977 19.4922 4.50705C21.4795 6.49434 22.5959 9.18967 22.5959 12.0001C22.5959 14.8106 21.4795 17.5059 19.4922 19.4932C17.5049 21.4805 14.8096 22.5969 11.9991 22.5969C9.1887 22.5969 6.49336 21.4805 4.50607 19.4932C2.51879 17.5059 1.40234 14.8106 1.40234 12.0001ZM11.9991 2.92332C9.59183 2.92332 7.28311 3.87962 5.58088 5.58185C3.87865 7.28408 2.92234 9.5928 2.92234 12.0001C2.92234 14.4074 3.87865 16.7162 5.58088 18.4184C7.28311 20.1206 9.59183 21.0769 11.9991 21.0769C14.4065 21.0769 16.7152 20.1206 18.4174 18.4184C20.1196 16.7162 21.0759 14.4074 21.0759 12.0001C21.0759 9.5928 20.1196 7.28408 18.4174 5.58185C16.7152 3.87962 14.4065 2.92332 11.9991 2.92332ZM15.7655 8.23532C15.9155 8.38534 15.9998 8.58879 15.9998 8.80092C15.9998 9.01305 15.9155 9.2165 15.7655 9.36652L13.1303 12.0001L15.7655 14.6337C15.9158 14.7839 16.0002 14.9877 16.0002 15.2001C16.0002 15.4126 15.9158 15.6163 15.7655 15.7665C15.6153 15.9167 15.4116 16.0011 15.1991 16.0011C14.9867 16.0011 14.783 15.9167 14.6327 15.7665L11.9991 13.1313L9.36554 15.7665C9.29116 15.8409 9.20286 15.8999 9.10568 15.9402C9.0085 15.9804 8.90434 16.0011 8.79914 16.0011C8.69395 16.0011 8.58979 15.9804 8.49261 15.9402C8.39543 15.8999 8.30713 15.8409 8.23274 15.7665C8.15836 15.6921 8.09936 15.6038 8.05911 15.5067C8.01885 15.4095 7.99813 15.3053 7.99813 15.2001C7.99813 15.0949 8.01885 14.9908 8.05911 14.8936C8.09936 14.7964 8.15836 14.7081 8.23274 14.6337L10.8679 12.0001L8.23274 9.36652C8.08253 9.2163 7.99813 9.01256 7.99813 8.80012C7.99813 8.58768 8.08253 8.38394 8.23274 8.23372C8.38296 8.0835 8.5867 7.99911 8.79914 7.99911C9.01159 7.99911 9.21533 8.0835 9.36554 8.23372L11.9991 10.8689L14.6327 8.23372C14.7071 8.15922 14.7953 8.10011 14.8925 8.05978C14.9897 8.01945 15.0939 7.99869 15.1991 7.99869C15.3044 7.99869 15.4086 8.01945 15.5058 8.05978C15.603 8.10011 15.6912 8.16082 15.7655 8.23532Z" fill="black"/>
                </svg>
            </button>
            <label class="answer-label me-2">${String.fromCharCode(65 + answerIndex)}.</label>
            <div class="input-wrapper position-relative">
                <input type="text" class="form-control pr-5" placeholder="Masukkan jawaban">
                <button class="btn image-button position-absolute end-0 top-50 translate-middle-y" style="border: none;" onclick="document.getElementById('${uniqueFileId}').click();">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                        <path d="M4.16732 4.97248H3.93147V5.20833V17.7083V17.9442H4.16732H12.2648V19.5558H4.16732C3.14862 19.5558 2.31983 18.727 2.31983 17.7083V5.20833C2.31983 4.18963 3.14862 3.36085 4.16732 3.36085H17.709C18.7277 3.36085 19.5565 4.18963 19.5565 5.20833V12.2642H17.9448V5.20833V4.97248H17.709H4.16732Z" fill="#4A5568" stroke="#4A5568" stroke-width="0.471698"/>
                        <path d="M16.2266 15.3892H5.68068L8.2937 11.9051L9.1647 13.6471L9.33536 13.9885L9.56433 13.6832L12.4893 9.78319L16.2266 15.3892Z" fill="#4A5568" stroke="#4A5568" stroke-width="0.471698"/>
                        <path d="M20.8333 15.625H18.75V18.75H15.625V20.8333H18.75V23.9583H20.8333V20.8333H23.9583V18.75H20.8333V15.625Z" fill="#4A5568"/>
                    </svg>
                </button>
                <input type="file" id="${uniqueFileId}" style="display: none;" onchange="handleFileUpload(event)">
            </div>
        `;

        answersContainer.appendChild(newAnswer);
        answerIndex++;
    });

    document.getElementById(uniqueToggleId).addEventListener('click', function (event) {
        event.stopPropagation();
        const menu = document.getElementById(uniqueMenuId);
        menu.classList.toggle('show');
    });

    document.querySelectorAll(`#${uniqueMenuId} li`).forEach(function (item) {
        item.addEventListener('click', function () {
            const selectedValue = this.getAttribute('data-value');
            const selectedIcon = this.getAttribute("data-icon");
            const dropdownText = document.querySelector(`#${uniqueToggleId} .dropdown-text`);
            const dropdownIcon = document.querySelector(`#${uniqueToggleId} .dropdown-icon`);

            dropdownText.textContent = this.textContent;
            dropdownIcon.innerHTML = selectedIcon;


            document.getElementById(uniqueMenuId).classList.remove('show');


            const multipleChoiceContainer = newCard.querySelector("#multiple-choice");
            const essayContainer = newCard.querySelector("#essay");

            if (selectedValue === "multiple-choice") {
                multipleChoiceContainer.style.display = "block";
                essayContainer.style.display = "none";
            } else if (selectedValue === "essay") {
                multipleChoiceContainer.style.display = "none";
                essayContainer.style.display = "block";
            }


        });
    });

    document.body.addEventListener('click', function (event) {
        if (event.target.classList.contains('image-button')) {
            const group = event.target.closest('[data-group]');
            if (!group) {
                console.error("Elemen dengan data-group tidak ditemukan.");
                return;
            }
            const fileInput = group.querySelector('.file-input');
            if (!fileInput) {
                console.error("File input tidak ditemukan dalam grup.");
                return;
            }
            fileInput.click();
        }
    });

    document.body.addEventListener('change', function (event) {
        if (event.target.classList.contains('file-input')) {
            const group = event.target.closest('[data-group]');
            if (!group) {
                console.error("Elemen dengan data-group tidak ditemukan.");
                return;
            }
            const file = event.target.files[0];
            if (!file || !file.type.startsWith('image/')) {
                alert("Harap pilih file gambar!");
                return;
            }
            const reader = new FileReader();
            reader.onload = function (e) {
                const imagePreview = group.querySelector('.image-preview');
                if (!imagePreview) {
                    console.error("Elemen image-preview tidak ditemukan dalam grup.");
                    return;
                }
                imagePreview.src = e.target.result;
                imagePreview.style.display = 'block';
            };
            reader.onerror = function () {
                alert("Terjadi kesalahan saat membaca file.");
            };
            reader.readAsDataURL(file);

            // Reset input file agar dapat diunggah ulang
            event.target.value = '';
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
