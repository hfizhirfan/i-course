@extends('layout-admin.app')

@section('content')
<nav class="navbar navbar-expand-lg custom-navbar">
    <div class="container-fluid px-4">
        <!-- Title -->
        <h4 class="mb-0">Dashboard</h4>

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
    <div class="container search">
        <div class="input-group" style="max-width: 400px;">
            <span class="input-group-text bg-white border-end-0">
                <i class="bi bi-search text-primary"></i>
            </span>
            <input type="text" class="form-control border-start-0" placeholder="Search" aria-label="Search">
        </div>
    </div>
</div>

<div class="container my-5 isi">
    <div class="row g-4">
      <!-- Left Info Cards -->
        <div class="col-md-2">
            <div class="card info-card">
                <div class="info-content">
                    <div class="info-number">114</div>
                    <div class="info-label">Peserta</div>
                </div>
                <svg class="icon-background" xmlns="http://www.w3.org/2000/svg" width="62" height="61" viewBox="0 0 62 61" fill="none">
                    <path d="M25.8675 36.0194C31.6163 36.0194 36.274 31.3617 36.274 25.6128C36.274 19.864 31.6163 15.2063 25.8675 15.2063C20.1186 15.2063 15.4609 19.864 15.4609 25.6128C15.4609 31.3617 20.1186 36.0194 25.8675 36.0194ZM58.5738 30.8161C58.5738 35.3341 54.9151 38.9927 50.3972 38.9927C48.2286 38.9927 46.1489 38.1312 44.6155 36.5978C43.0821 35.0644 42.2206 32.9847 42.2206 30.8161C42.2206 26.2982 45.8793 22.6395 50.3972 22.6395C54.9151 22.6395 58.5738 26.2982 58.5738 30.8161ZM25.8675 38.9927C29.932 38.9927 36.5461 40.2578 40.8841 42.7762C42.6562 44.5795 43.7073 46.5464 43.7073 48.5073V56.8325H6.54102V48.5073C6.54102 42.1801 19.4169 38.9927 25.8675 38.9927ZM66.007 56.8325H46.6806V48.5073C46.6806 46.4022 45.9209 44.4636 44.7122 42.7346C47.0032 42.2232 49.2584 41.966 50.9815 41.966C56.5222 41.966 66.007 44.6226 66.007 49.8943V56.8325Z" fill="white" fill-opacity="0.1"/>
                </svg>
            </div>

            <div class="card bg-dark info-card mt-3">
                <div class="info-content">
                    <div class="info-number">61</div>
                    <div class="info-label">Pengajar</div>
                </div>
                <svg class="icon-background" xmlns="http://www.w3.org/2000/svg" width="57" height="54" viewBox="0 0 57 54" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.36396 20.0769C1.80453 19.8118 1.33184 19.3933 1.00085 18.8701C0.669851 18.3469 0.494141 17.7406 0.494141 17.1215C0.494141 16.5024 0.669851 15.896 1.00085 15.3728C1.33184 14.8496 1.80453 14.4312 2.36396 14.166L29.3615 1.39865C29.9578 1.11654 30.6092 0.970215 31.2689 0.970215C31.9286 0.970215 32.58 1.11654 33.1763 1.39865L60.1738 14.166C62.3562 15.1948 62.6328 18.0372 61.0034 19.5269V31.988C61.0034 32.7765 60.6901 33.5328 60.1325 34.0904C59.5749 34.648 58.8187 34.9613 58.0301 34.9613C57.2415 34.9613 56.4853 34.648 55.9276 34.0904C55.37 33.5328 55.0568 32.7765 55.0568 31.988V22.5031L52.0835 23.9095V34.9613C52.0835 37.6945 51.5451 40.4009 50.4992 42.9261C49.4532 45.4513 47.9201 47.7457 45.9875 49.6784C44.0548 51.611 41.7604 53.1441 39.2352 54.1901C36.7101 55.236 34.0036 55.7744 31.2704 55.7744C28.5372 55.7744 25.8307 55.236 23.3056 54.1901C20.7804 53.1441 18.486 51.611 16.5533 49.6784C14.6206 47.7457 13.0875 45.4513 12.0416 42.9261C10.9956 40.4009 10.4573 37.6945 10.4573 34.9613V23.9036L2.36396 20.0769ZM46.1369 20.0948H46.2291L52.5176 17.1215L31.2704 7.07171L10.0232 17.1215L16.3117 20.0948H16.4039V20.1394L31.2704 27.1682L46.1369 20.1394V20.0948ZM29.3645 32.8443L16.4039 26.7193V34.9613C16.4039 38.9041 17.9702 42.6855 20.7582 45.4735C23.5462 48.2615 27.3275 49.8278 31.2704 49.8278C35.2132 49.8278 38.9946 48.2615 41.7826 45.4735C44.5706 42.6855 46.1369 38.9041 46.1369 34.9613V26.7163L33.1763 32.8443C32.5804 33.1259 31.9295 33.272 31.2704 33.272C30.6113 33.272 29.9604 33.1259 29.3645 32.8443Z" fill="white" fill-opacity="0.1"/>
                </svg>
            </div>
            <div class="card info-card mt-3">
                <div class="info-content">
                    <div class="info-number">204</div>
                    <div class="info-label">Total Kursus</div>
                </div>
                <svg class="icon-background" xmlns="http://www.w3.org/2000/svg" width="61" height="69" viewBox="0 0 61 69" fill="none">
                    <path d="M18.9801 6.17944C16.888 6.17944 14.8816 7.01053 13.4022 8.48989C11.9229 9.96924 11.0918 11.9757 11.0918 14.0678V54.1163C11.0918 56.2085 11.9229 58.2149 13.4022 59.6942C14.8816 61.1736 16.888 62.0047 18.9801 62.0047H55.3879C55.8707 62.0047 56.3337 61.8129 56.6751 61.4715C57.0165 61.1301 57.2083 60.6671 57.2083 60.1843C57.2083 59.7015 57.0165 59.2385 56.6751 58.8971C56.3337 58.5557 55.8707 58.3639 55.3879 58.3639H18.9801C17.9588 58.3639 16.9716 57.9958 16.1995 57.3272C15.4275 56.6585 14.9222 55.734 14.7763 54.7231H55.3879C55.8707 54.7231 56.3337 54.5313 56.6751 54.19C57.0165 53.8486 57.2083 53.3855 57.2083 52.9027V14.0678C57.2083 11.9757 56.3772 9.96924 54.8979 8.48989C53.4185 7.01053 51.4121 6.17944 49.32 6.17944H18.9801ZM53.5675 51.0824H14.7326V14.0678C14.7326 11.7231 16.6355 9.82022 18.9801 9.82022H49.32C51.6646 9.82022 53.5675 11.7231 53.5675 14.0678V51.0824ZM22.6209 14.6746C20.9462 14.6746 19.5869 16.0338 19.5869 17.7086V22.5629C19.5869 24.2377 20.9462 25.5969 22.6209 25.5969H45.6792C47.3539 25.5969 48.7132 24.2377 48.7132 22.5629V17.7086C48.7132 16.0338 47.3539 14.6746 45.6792 14.6746H22.6209ZM23.2277 21.9561V18.3154H45.0724V21.9561H23.2277Z" fill="white" fill-opacity="0.1"/>
                </svg>
            </div>
        </div>



        <!-- Chart -->
        <div class="col-md-6">
            <div class="chart-card">
                <h5 class="chart-text">Statistik Aktivitas Peserta</h5>
                <div class="chart-container">
                    <!-- Y-axis labels -->
                    <div class="angka">
                        <span>300</span>
                        <span>200</span>
                        <span>100</span>
                        <span>50</span>
                        <span>0</span>
                    </div>
                    <!-- Chart bars -->
                    <div class="chart-bar-container">
                        <div class="chart-bar">
                            <div class="bar-1"></div>
                            <span>Senin</span>
                        </div>
                        <div class="chart-bar">
                            <div class="bar-2"></div>
                            <span>Selasa</span>
                        </div>
                        <div class="chart-bar">
                            <div class="bar-3"></div>
                            <span>Rabu</span>
                        </div>
                        <div class="chart-bar">
                            <div class="bar-4"></div>
                            <span>Kamis</span>
                        </div>
                        <div class="chart-bar">
                            <div class="bar-5"></div>
                            <span>Jumat</span>
                        </div>
                        <div class="chart-bar">
                            <div class="bar-6"></div>
                            <span>Sabtu</span>
                        </div>
                        <div class="chart-bar">
                            <div class="bar-7"></div>
                            <span>Minggu</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Date Card -->
        <div class="col-md-3">
            <div class="card date-card">
                <div class="date-title">Today</div>
                <div class="date-tgl">10 October 2024</div>
                <hr>
                <div class="time-display">
                    <span class="time">12 : 10</span>
                    <span class="ampm">PM</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-6">
    <div class="card card-custom">
      <div class="card-body">
        <h5 class="card-title mb-4">Top Kursus</h5>
        <div class="row g-3">
          <div class="col-12">
            <div class="card card-kursus p-3">
              <div class="card-body d-flex justify-content-between align-items-center">
                <span class="kursus-title">HTML, CSS, dan JavaScript untuk Pemula</span>
                <span class="kursus-peserta">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M8.5 12C10.4335 12 12 10.4335 12 8.5C12 6.5665 10.4335 5 8.5 5C6.5665 5 5 6.5665 5 8.5C5 10.4335 6.5665 12 8.5 12ZM19.5 10.25C19.5 11.7695 18.2695 13 16.75 13C16.0207 13 15.3212 12.7103 14.8055 12.1945C14.2897 11.6788 14 10.9793 14 10.25C14 8.7305 15.2305 7.5 16.75 7.5C18.2695 7.5 19.5 8.7305 19.5 10.25ZM8.5 13C9.867 13 12.0915 13.4255 13.5505 14.2725C14.1465 14.879 14.5 15.5405 14.5 16.2V19H2V16.2C2 14.072 6.3305 13 8.5 13ZM22 19H15.5V16.2C15.5 15.492 15.2445 14.84 14.838 14.2585C15.6085 14.0865 16.367 14 16.9465 14C18.81 14 22 14.8935 22 16.6665V19Z" fill="#0056D2"/>
                      </svg>
                    581 peserta</span>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card card-kursus p-3">
              <div class="card-body d-flex justify-content-between align-items-center">
                <span class="kursus-title2">Pemrograman Python untuk Menengah</span>
                <span class="kursus-peserta2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M8.5 12C10.4335 12 12 10.4335 12 8.5C12 6.5665 10.4335 5 8.5 5C6.5665 5 5 6.5665 5 8.5C5 10.4335 6.5665 12 8.5 12ZM19.5 10.25C19.5 11.7695 18.2695 13 16.75 13C16.0207 13 15.3212 12.7103 14.8055 12.1945C14.2897 11.6788 14 10.9793 14 10.25C14 8.7305 15.2305 7.5 16.75 7.5C18.2695 7.5 19.5 8.7305 19.5 10.25ZM8.5 13C9.867 13 12.0915 13.4255 13.5505 14.2725C14.1465 14.879 14.5 15.5405 14.5 16.2V19H2V16.2C2 14.072 6.3305 13 8.5 13ZM22 19H15.5V16.2C15.5 15.492 15.2445 14.84 14.838 14.2585C15.6085 14.0865 16.367 14 16.9465 14C18.81 14 22 14.8935 22 16.6665V19Z" fill="#2D3748"/>
                      </svg>
                    539 peserta</span>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card card-kursus p-3">
              <div class="card-body d-flex justify-content-between align-items-center">
                <span class="kursus-title2">Vue.js untuk Menengah</span>
                <span class="kursus-peserta2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M8.5 12C10.4335 12 12 10.4335 12 8.5C12 6.5665 10.4335 5 8.5 5C6.5665 5 5 6.5665 5 8.5C5 10.4335 6.5665 12 8.5 12ZM19.5 10.25C19.5 11.7695 18.2695 13 16.75 13C16.0207 13 15.3212 12.7103 14.8055 12.1945C14.2897 11.6788 14 10.9793 14 10.25C14 8.7305 15.2305 7.5 16.75 7.5C18.2695 7.5 19.5 8.7305 19.5 10.25ZM8.5 13C9.867 13 12.0915 13.4255 13.5505 14.2725C14.1465 14.879 14.5 15.5405 14.5 16.2V19H2V16.2C2 14.072 6.3305 13 8.5 13ZM22 19H15.5V16.2C15.5 15.492 15.2445 14.84 14.838 14.2585C15.6085 14.0865 16.367 14 16.9465 14C18.81 14 22 14.8935 22 16.6665V19Z" fill="#2D3748"/>
                      </svg>
                     488 peserta</span>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card card-kursus p-3">
              <div class="card-body d-flex justify-content-between align-items-center">
                <span class="kursus-title2">Pemrograman Java untuk Pemula</span>
                <span class="kursus-peserta2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M8.5 12C10.4335 12 12 10.4335 12 8.5C12 6.5665 10.4335 5 8.5 5C6.5665 5 5 6.5665 5 8.5C5 10.4335 6.5665 12 8.5 12ZM19.5 10.25C19.5 11.7695 18.2695 13 16.75 13C16.0207 13 15.3212 12.7103 14.8055 12.1945C14.2897 11.6788 14 10.9793 14 10.25C14 8.7305 15.2305 7.5 16.75 7.5C18.2695 7.5 19.5 8.7305 19.5 10.25ZM8.5 13C9.867 13 12.0915 13.4255 13.5505 14.2725C14.1465 14.879 14.5 15.5405 14.5 16.2V19H2V16.2C2 14.072 6.3305 13 8.5 13ZM22 19H15.5V16.2C15.5 15.492 15.2445 14.84 14.838 14.2585C15.6085 14.0865 16.367 14 16.9465 14C18.81 14 22 14.8935 22 16.6665V19Z" fill="#2D3748"/>
                      </svg>
                    431 peserta</span>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card card-kursus p-3">
              <div class="card-body d-flex justify-content-between align-items-center">
                <span class="kursus-title2">Kimia Dasar</span>
                <span class="kursus-peserta2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M8.5 12C10.4335 12 12 10.4335 12 8.5C12 6.5665 10.4335 5 8.5 5C6.5665 5 5 6.5665 5 8.5C5 10.4335 6.5665 12 8.5 12ZM19.5 10.25C19.5 11.7695 18.2695 13 16.75 13C16.0207 13 15.3212 12.7103 14.8055 12.1945C14.2897 11.6788 14 10.9793 14 10.25C14 8.7305 15.2305 7.5 16.75 7.5C18.2695 7.5 19.5 8.7305 19.5 10.25ZM8.5 13C9.867 13 12.0915 13.4255 13.5505 14.2725C14.1465 14.879 14.5 15.5405 14.5 16.2V19H2V16.2C2 14.072 6.3305 13 8.5 13ZM22 19H15.5V16.2C15.5 15.492 15.2445 14.84 14.838 14.2585C15.6085 14.0865 16.367 14 16.9465 14C18.81 14 22 14.8935 22 16.6665V19Z" fill="#2D3748"/>
                      </svg>
                    406 peserta</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="container mt-6">
    <div class="row g-4">
      <!-- Top Kategori -->
      <div class="col-md-6">
        <div class="card card-kategori-rating">
          <h5 class="card-title mb-3">Top Kategori</h5>
          <ul class="list-group">
            <li class="list-group-item active">Bahasa Pemrograman</li>
            <li class="list-group-item">Desain</li>
            <li class="list-group-item">Pemasaran</li>
            <li class="list-group-item">Sains dan Matematika</li>
            <li class="list-group-item">Pengembangan Personal</li>
          </ul>
        </div>
      </div>
      <!-- Top Rating -->
      <div class="col-md-6">
        <div class="card card-kategori-rating">
          <h5 class="card-title mb-3">Top Rating</h5>
          <ul class="list-group">
            <li class="list-group-item active">
              <div class="rating">
                <span>Pemrograman Python untuk Menengah</span>
                <span>4,9 <i class="bi bi-star-fill star"></i></span>
              </div>
            </li>
            <li class="list-group-item">
              <div class="rating">
                <span>React.js untuk Menengah</span>
                <span>4,8 <i class="bi bi-star-fill star"></i></span>
              </div>
            </li>
            <li class="list-group-item">
              <div class="rating">
                <span>Belajar CorelDraw</span>
                <span>4,8 <i class="bi bi-star-fill star"></i></span>
              </div>
            </li>
            <li class="list-group-item">
              <div class="rating">
                <span>Laravel untuk Menengah</span>
                <span>4,7 <i class="bi bi-star-fill star"></i></span>
              </div>
            </li>
            <li class="list-group-item">
              <div class="rating">
                <span>Bahasa Jepang N3</span>
                <span>4,7 <i class="bi bi-star-fill star"></i></span>
              </div>
            </li>
          </ul>
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
    margin-left: 0; /* Pastikan margin kiri diatur ke nol */
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


.activity, .today {
  flex: 1 1 45%; /* Elemen mengambil 45% lebar */
  margin: 10px;
  padding: 20px;
  border-radius: 10px;
  background: #f9f9f9;
}

.activity {
  text-align: center;
}

.today {
  text-align: right;
}

.card {
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}
.info-card {
    width: 175px;
    height: 85.801px;
    border-radius: 16.99px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    background-color: #0056D2;
    padding: 8px;
    overflow: hidden;
}
.bg-dark.info-card.mt-3 {
    background-color: #002661 !important; /* Ubah warna background */
}
.icon-background {
    position: absolute;
    bottom: -10px; /* Menempatkan SVG di bagian bawah */
    right: -10px; /* Menempatkan SVG di sisi kanan */
    width: 80px;
    height: 80px;
    z-index: 0; /* Menempatkan di belakang teks */
}
.info-card .icon {
    font-size: 2rem;
    margin-bottom: 10px;
}
.info-card .info-number {
    font-size: 28.883px;
    font-weight: 600;
    text-align: left;
    margin-left: 8px; /* Mengatur jarak ke kiri untuk posisi "center kiri" */
    color: white;
}

.info-card .info-label {
    font-size: 16.99px;
    font-weight: 600;
    text-align: left;
    margin-left: 8px; /* Menyamakan posisi dengan angka */
    color: white;
}
.date-card {
    display: flex;
    flex-direction: column; /* Atur elemen dalam kolom */
    justify-content: center; /* Center secara vertikal */
    text-align: left;
    padding: 16px;
    width: 283px;
    height: 290px;
    border-radius: 20px;
    margin-left: 50px;
}

.date-title {
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 8px;
    color: #003D94;
}
.date-tgl {
    font-size: 20px;
    font-weight: 600;
    color: #0056D2;
    margin-top: 13px;
    margin-bottom: 18px;
}
.time-display {
    margin-top: 18px;
}
.time {
    font-size: 34px;
    font-weight: 600;
    color: #0056D2;
}

.ampm {
    font-size: 16px;
    font-weight: 600;
    margin-left: 8px;
    color: #0056D2;

}

.chart-card {
    background-color: #ffffff;
    border-radius: 20px;
    padding: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 610px;
    height: 290px;
}
.chart-text{
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 40px;
}

.chart-container {
    display: flex;
    align-items: flex-end;
    margin-top: -20px;
}


.angka {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    height: 200px; /* Tinggi total sumbu */
    font-size: 14px;
    color: #6c757d;
    margin-bottom: -20px; /* Kurangi margin bawah kotak keseluruhan */
    gap: 18px;

}
.angka span{
    font-size: 10px;
    font-weight: 400;
    color: #4A5568;

}
.angka span:last-child {
    margin-bottom: 0; /* Pastikan tidak ada jarak ekstra di bawah angka "0" */
}

.chart-bar-container {
    display: flex;
    justify-content: center;
    margin-left: 20px;
}

.chart-bar {
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    align-items: center;
    height: 200px;
    width: 40px;
    margin: 0 15px;
}

.chart-bar div {
    width: 100%;
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
    animation: growBar 1s ease-out forwards;
}

@keyframes growBar {
    0% {
        height: 0;
    }
    100% {
        /* Nanti tetap tinggi aslinya, biar pakai inherit */
        height: var(--target-height);
    }
}

.chart-bar span {
    margin-top: 20px;
    font-size: 10px;
    font-weight: 400;
    color: #070707;
}

/* Update masing-masing bar dengan custom property untuk target tingginya */
.bar-1 { --target-height: 60px; height: 60px; background-color: #a8c7ff; animation-delay: 0.2s; }
.bar-2 { --target-height: 40px; height: 40px; background-color: #a8c7ff; animation-delay: 0.4s; }
.bar-3 { --target-height: 90px; height: 90px; background-color: #3b82f6; animation-delay: 0.6s; }
.bar-4 { --target-height: 60px; height: 60px; background-color: #a8c7ff; animation-delay: 0.8s; }
.bar-5 { --target-height: 70px; height: 70px; background-color: #3b82f6; animation-delay: 1s; }
.bar-6 { --target-height: 100px; height: 100px; background-color: #1e40af; animation-delay: 1.2s; }
.bar-7 { --target-height: 80px; height: 80px; background-color: #1e40af; animation-delay: 1.4s; }


.card-custom {
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 20px;
}
.card-title {
    font-size: 20px;
    font-weight: 600;
    color: #003D94;
}
.card-kursus {
    border: none;
    border-radius: 14px;
    height: 50px;
    justify-content: center;
    box-shadow: 2px 2px 10px 0px rgba(0, 0, 0, 0.25);
    transition: transform 0.2s;
}
.card-body a {
    text-decoration: none;
    color: #007bff;
    font-weight: bold;
}
.card-body a:hover {
    text-decoration: underline;
}

.kursus-title {
    font-size: 16px;
    font-weight: 600;
    color: #0056D2;
  }

.kursus-peserta {
    font-size: 14px;
    font-weight: 400;
    color: #0056D2;
}
.kursus-title2 {
    font-size: 16px;
    font-weight: 600;
    color: #2D3748;
  }

.kursus-peserta2{
    font-size: 14px;
    font-weight: 400;
    color: #2D3748;
}

.card-kategori-rating {
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

.list-group-item {
    border: none;
    border-radius: 8px;
    margin-bottom: 8px;
    height: 45px;
    padding: 10px 15px;
    background-color: #f8f9fa;
    font-size: 14px;
    font-weight: 500;
    box-shadow: 2px 2px 10px 0px rgba(0, 0, 0, 0.25);
}

.list-group-item.active {
    background-color: white;
    color: #0056d2 !important; /* Memastikan warna biru diterapkan */
    font-weight: 600;
    box-shadow: 2px 2px 10px 0px rgba(0, 0, 0, 0.25);
}

.rating {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.rating .star {
    color: #f39c12;
    font-size: 16px;
}

.card-title {
    font-size: 18px;
    font-weight: 600;
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


</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>

    document.addEventListener("DOMContentLoaded", function() {
    const numbers = document.querySelectorAll(".info-number");

        numbers.forEach(num => {
            const target = parseInt(num.textContent); // Ambil angka target
            let count = 0;
            const speed = 20; // kecepatan (lebih kecil = lebih cepat)

            const updateCount = () => {
                count += Math.ceil(target / 100); // Naik bertahap
                if (count >= target) {
                    num.textContent = target; // Set angka target pas selesai
                } else {
                    num.textContent = count;
                    setTimeout(updateCount, speed);
                }
            };

            num.textContent = "0"; // Mulai dari 0
            updateCount();
        });
    });
    document.addEventListener("DOMContentLoaded", function() {
        function animateNumber(element, target, duration) {
            let start = 0;
            let startTime = null;

            function updateNumber(currentTime) {
                if (!startTime) startTime = currentTime;
                const progress = Math.min((currentTime - startTime) / duration, 1);
                const value = Math.floor(progress * target);
                element.textContent = value.toString().padStart(2, '0'); // 2 digit

                if (progress < 1) {
                    requestAnimationFrame(updateNumber);
                } else {
                    element.textContent = target.toString().padStart(2, '0'); // final fix
                }
            }

            requestAnimationFrame(updateNumber);
        }

        // Animasi waktu
        const timeElement = document.querySelector('.time');
        const [hourStr, minuteStr] = timeElement.textContent.split(':').map(s => s.trim());

        // Kosongkan dulu
        timeElement.innerHTML = `<span class="hour">00</span> : <span class="minute">00</span>`;

        const hourElement = document.querySelector('.hour');
        const minuteElement = document.querySelector('.minute');

        animateNumber(hourElement, parseInt(hourStr), 1000); // 1 detik
        animateNumber(minuteElement, parseInt(minuteStr), 1000);

        // Animasi tanggal
        const dateElement = document.querySelector('.date-tgl');
        const dateText = dateElement.textContent; // contoh: "10 October 2024"
        const [dayStr, monthStr, yearStr] = dateText.split(' ');

        // Ganti jadi sementara 00 Month Year
        dateElement.innerHTML = `<span class="day">00</span> ${monthStr} ${yearStr}`;

        const dayElement = document.querySelector('.day');
        animateNumber(dayElement, parseInt(dayStr), 1000);
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
