@extends('layout-admin.app')

@section('content')

<nav class="navbar navbar-expand-lg custom-navbar">
    <div class="container-fluid px-4">
        <!-- Title -->
        <h4 class="mb-0">Manajemen Pengajar</h4>

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
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownUrut" data-bs-toggle="dropdown" aria-expanded="false">
                    Urutkan Berdasarkan
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownUrut">
                    <li><a class="dropdown-item sort-option" data-sort="all" href="#">Semua</a></li>
                    <li><a class="dropdown-item sort-option" data-sort="nama" href="#">Nama</a></li>
                    <li><a class="dropdown-item sort-option" data-sort="keahlian" href="#">Keahlian</a></li>
                </ul>
            </div>

            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownStatus" data-bs-toggle="dropdown" aria-expanded="false">
                    Status
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownStatus">
                    <li><a class="dropdown-item filter-option" data-filter="all" href="#">Semua</a></li>
                    <li><a class="dropdown-item filter-option" data-filter="Aktif" href="#">Aktif</a></li>
                    <li><a class="dropdown-item filter-option" data-filter="Non Aktif" href="#">Non Aktif</a></li>
                </ul>
            </div>

            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownKursus" data-bs-toggle="dropdown" aria-expanded="false">
                    Kategori Kursus
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownKursus">
                    <li><a class="dropdown-item filter-option" data-filter="bahasa" href="#">Bahasa</a></li>
                    <li><a class="dropdown-item filter-option" data-filter="sains" href="#">Sains dan Matematika</a></li>
                    <li><a class="dropdown-item filter-option" data-filter="pengembangan" href="#">Pengembangan Personal</a></li>
                    <li><a class="dropdown-item filter-option" data-filter="desain" href="#">Desain</a></li>
                    <li><a class="dropdown-item filter-option" data-filter="bahasa pemrograman" href="#">Bahasa Pemrograman</a></li>
                    <li><a class="dropdown-item filter-option" data-filter="jaringan" href="#">Jaringan dan Keamanan</a></li>
                    <li><a class="dropdown-item filter-option" data-filter="pemasaran" href="#">Pemasaran</a></li>
                    <li><a class="dropdown-item filter-option" data-filter="keuangan" href="#">Keuangan dan Akutansi</a></li>
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
                onclick="window.location.href='{{ route('admin.pengajar.create') }}'">
            <svg class="icon-spacing" xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                <path d="M9.28125 7.46875V0.25H7.21875V7.46875H0V9.53125H7.21875V16.75H9.28125V9.53125H16.5V7.46875H9.28125Z" fill="white"/>
            </svg>
            Tambah Baru
        </button>

    </div>
</div>

<div class="container mt-5">
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Keahlian</th>
                <th>Deskripsi</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody id="tableBody">
                <tr data-status="Aktif" data-category="bahasa" data-email="rina@example.com">
                    <td>Rina Wijaya, S.Pd.</td>
                    <td>Spesialis Linguistik Bahasa Indonesia</td>
                    <td>Spesialis Linguistik Bahasa Indonesia yang berpengalaman dalam mengajar dan riset</td>
                    <td>Aktif</td>
                    <td>
                        <button class="btn-icon" onclick="window.location.href='{{ route('admin.pengajar.show-rina') }}'">
                          <i class="bi bi-person-lines-fill"></i>
                        </button>
                        <button class="btn-icon" onclick="window.location.href='{{ route('admin.pengajar.edit-rina') }}'">
                          <i class="bi bi-pencil-fill"></i>
                        </button>
                        <button class="btn-icon delete-btn">
                          <i class="bi bi-trash-fill"></i>
                        </button>
                    </td>

                  </tr>
                  <tr data-status="Aktif" data-category="sains" data-email="rina@example.com">
                    <td>Dr. Budi Setiawan, M.Si.</td>
                    <td>Biologi Molekuler</td>
                    <td>Ahli Biologi Molekuler yang berpengalaman dalam penelitian genetika</td>
                    <td>Aktif</td>
                    <td>
                        <button class="btn-icon" onclick="window.location.href='{{ route('admin.pengajar.show-budi') }}'">
                          <i class="bi bi-person-lines-fill"></i>
                        </button>
                        <button class="btn-icon" onclick="window.location.href='{{ route('admin.pengajar.edit-budi') }}'">
                          <i class="bi bi-pencil-fill"></i>
                        </button>
                        <button class="btn-icon delete-btn">
                          <i class="bi bi-trash-fill"></i>
                        </button>
                    </td>
                  </tr>
                    <tr data-status="Non Aktif" data-category="bahasa pemrograman" data-email="rina@example.com">
                        <td>Fajar Pratama, S.Kom.</td>
                        <td>Pengembang Web Frontend</td>
                        <td>Pengembang Web Frontend yang ahli dalam teknologi front-end</td>
                        <td>Non Aktif</td>
                        <td>
                            <button class="btn-icon" onclick="window.location.href='{{ route('admin.pengajar.show-rina') }}'">
                                <i class="bi bi-person-lines-fill"></i>
                              </button>
                              <button class="btn-icon" onclick="window.location.href='{{ route('admin.pengajar.edit-rina') }}'">
                                <i class="bi bi-pencil-fill"></i>
                              </button>
                              <button class="btn-icon delete-btn">
                                <i class="bi bi-trash-fill"></i>
                              </button>
                        </td>
                    </tr>
                    <tr data-status="Aktif" data-category="jaringan">
                        <td>Teguh Kurniawan, S.Kom.</td>
                        <td>Jaringan dan Keamanan Siber</td>
                        <td>Spesialis Jaringan dan Keamanan Siber yang berpengalaman</td>
                        <td>Aktif</td>
                        <td>
                            <button class="btn-icon" onclick="window.location.href='{{ route('admin.pengajar.show-rina') }}'">
                                <i class="bi bi-person-lines-fill"></i>
                              </button>
                              <button class="btn-icon" onclick="window.location.href='{{ route('admin.pengajar.edit-rina') }}'">
                                <i class="bi bi-pencil-fill"></i>
                              </button>
                              <button class="btn-icon delete-btn">
                                <i class="bi bi-trash-fill"></i>
                              </button>
                        </td>
                    </tr>
                    <tr data-status="Aktif" data-category="pemasaran" >
                        <td>Andika Surya, S.E.</td>
                        <td>Spesialis Digital Marketing</td>
                        <td>Spesialis Digital Marketing dengan keahlian dalam pemasaran melalui...</td>
                        <td>Aktif</td>
                        <td>
                            <button class="btn-icon" onclick="window.location.href='{{ route('admin.pengajar.show-budi') }}'">
                                <i class="bi bi-person-lines-fill"></i>
                              </button>
                              <button class="btn-icon" onclick="window.location.href='{{ route('admin.pengajar.edit-budi') }}'">
                                <i class="bi bi-pencil-fill"></i>
                              </button>
                              <button class="btn-icon delete-btn">
                                <i class="bi bi-trash-fill"></i>
                              </button>
                        </td>
                    </tr>
                    <tr data-status="Aktif" data-category="pemasaran">
                        <td>Rudi Santoso, S.E.</td>
                        <td>Analis Pasar dan Konsumen</td>
                        <td>Analis Pasar dan Konsumen yang melakukan riset pasar</td>
                        <td>Aktif</td>
                        <td>
                            <button class="btn-icon" onclick="window.location.href='{{ route('admin.pengajar.show-rina') }}'">
                                <i class="bi bi-person-lines-fill"></i>
                              </button>
                              <button class="btn-icon" onclick="window.location.href='{{ route('admin.pengajar.edit-rina') }}'">
                                <i class="bi bi-pencil-fill"></i>
                              </button>
                              <button class="btn-icon delete-btn">
                                <i class="bi bi-trash-fill"></i>
                              </button>
                        </td>
                    </tr>
                    <tr data-status="Aktif" data-category="desain">
                        <td>Satrio Aditya, S.Ds.</td>
                        <td>Spesialis Desain User Interface (UI)</td>
                        <td>Spesialis Desain User Interface (UI) yang fokus pada perancangan</td>
                        <td>Aktif</td>
                        <td>
                            <button class="btn-icon" onclick="window.location.href='{{ route('admin.pengajar.show-budi') }}'">
                                <i class="bi bi-person-lines-fill"></i>
                              </button>
                              <button class="btn-icon" onclick="window.location.href='{{ route('admin.pengajar.edit-budi') }}'">
                                <i class="bi bi-pencil-fill"></i>
                              </button>
                              <button class="btn-icon delete-btn">
                                <i class="bi bi-trash-fill"></i>
                              </button>
                        </td>
                    </tr>
            </tbody>
          </table>
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
.icon-spacing {
        margin-right: 8px; /* Atur jarak sesuai kebutuhan Anda */
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
    font-size: 12px;
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
    font-size: 12px; /* Mengatur ukuran font */
    font-weight: 500; /* Mengatur ketebalan font */
}

table {
    font-size: 12px;
    font-weight: 400;
    table-layout: fixed; /* Membatasi ukuran tabel */
    width: 100%; /* Membuat tabel melebar sesuai container */
}
.btn-icon {
  border: none;
  background: none;
  outline: none;
  cursor: pointer;
  padding: 5px; /* Opsional, untuk mengatur ruang sekitar ikon */
}
td {
  word-wrap: break-word; /* Bungkus kata panjang */
  word-break: break-word; /* Memotong kata panjang jika perlu */
  white-space: normal; /* Izinkan teks untuk membungkus ke bawah */
}
</style>
<script>

const filters = {
  status: 'all', // Nilai default
  category: 'all' // Nilai default
};

// Event listener untuk filter status
document.querySelectorAll('.filter-status').forEach(option => {
  option.addEventListener('click', event => {
    event.preventDefault(); // Mencegah reload halaman
    filters.status = option.getAttribute('data-status'); // Update filter status
    applyFilters(); // Terapkan filter
  });
});

// Event listener untuk filter status
document.querySelectorAll('.filter-option').forEach(option => {
  option.addEventListener('click', event => {
    event.preventDefault(); // Mencegah reload halaman
    const filterType = option.closest('.dropdown').querySelector('button').id;

    if (filterType === 'dropdownStatus') {
      filters.status = option.getAttribute('data-filter'); // Update filter status
    } else if (filterType === 'dropdownKursus') {
      filters.category = option.getAttribute('data-filter'); // Update filter kategori
    }

    applyFilters(); // Terapkan filter
  });
});


function applyFilters() {
  console.log('Filters:', filters); // Debug log
  const rows = document.querySelectorAll('#tableBody tr');

  rows.forEach(row => {
    const status = row.getAttribute('data-status');
    const category = row.getAttribute('data-category');

    console.log('Row:', { status, category }); // Debug log

    const statusMatch = filters.status === 'all' || filters.status === status;
    const categoryMatch = filters.category === 'all' || filters.category === category;

    if (statusMatch && categoryMatch) {
      row.style.display = ''; // Tampilkan baris
    } else {
      row.style.display = 'none'; // Sembunyikan baris
    }
  });
}



document.querySelectorAll('.sort-option').forEach(option => {
    option.addEventListener('click', event => {
    event.preventDefault();
    const sortKey = option.getAttribute('data-sort');
    const rows = Array.from(document.querySelectorAll('#tableBody tr'));

    rows.sort((a, b) => {
        const textA = a.querySelector(`td:nth-child(${sortKey === 'nama' ? 1 : 2})`).innerText.toLowerCase();
        const textB = b.querySelector(`td:nth-child(${sortKey === 'nama' ? 1 : 2})`).innerText.toLowerCase();
        return textA.localeCompare(textB);
    });

    const tableBody = document.getElementById('tableBody');
    rows.forEach(row => tableBody.appendChild(row));
    });
});

// Update button text on dropdown selection
document.querySelectorAll('.dropdown-menu').forEach(menu => {
    menu.addEventListener('click', function(e) {
        if (e.target.classList.contains('dropdown-item')) {
            const button = this.previousElementSibling; // Get the associated button
            button.textContent = e.target.textContent;  // Set button text to the selected item
        }
    });
});

// Ambil elemen input dan tabel
const searchInput = document.getElementById('searchInput');
const tableBody = document.getElementById('tableBody');

// Fungsi untuk menyaring tabel berdasarkan input
searchInput.addEventListener('input', function () {
    const filter = searchInput.value.toLowerCase();
    const rows = tableBody.getElementsByTagName('tr');

    Array.from(rows).forEach(row => {
        const nameCell = row.cells[0].textContent.toLowerCase(); // Hanya kolom Nama

        if (nameCell.includes(filter)) {
            row.style.display = ''; // Tampilkan baris
        } else {
            row.style.display = 'none'; // Sembunyikan baris
        }
    });
});

// Tambahkan event listener ke semua tombol hapus
document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.delete-btn');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function () {
            // Cari elemen <tr> terdekat dari tombol yang ditekan
            const row = this.closest('tr');
            if (row) {
                row.remove(); // Hapus baris dari DOM
            }
        });
    });
});

</script>
@endsection
