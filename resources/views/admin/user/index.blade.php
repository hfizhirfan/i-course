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
        <!-- Dropdown filters -->
        <div class="dropdown-group d-flex gap-3">
            <!-- Urutkan -->
            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownTahun" data-bs-toggle="dropdown" aria-expanded="false">
                    Urutkan
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownTahun">
                    <li><a class="dropdown-item" href="#" onclick="sortTable('all')">Semua</a></li>
                    <li><a class="dropdown-item" href="#" onclick="sortTable('name')">Abjad</a></li>
                    <li><a class="dropdown-item" href="#" onclick="sortTable('date')">Tanggal Bergabung</a></li>
                </ul>
            </div>
            <!-- Status -->
            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownUrutkan" data-bs-toggle="dropdown" aria-expanded="false">
                    Status
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownUrutkan">
                    <li><a class="dropdown-item" href="#" onclick="filterTable('All')">Semua</a></li>
                    <li><a class="dropdown-item" href="#" onclick="filterTable('Admin')">Admin</a></li>
                    <li><a class="dropdown-item" href="#" onclick="filterTable('User')">User</a></li>
                </ul>
            </div>
        </div>

        <!-- Search input -->
        <div class="input-group" style="max-width: 260px;">
            <span class="input-group-text bg-white border-end-0">
                <i class="bi bi-search text-primary"></i>
            </span>
            <input type="text" class="form-control border-start-0" placeholder="Search" aria-label="Search">
        </div>
    </div>
</div>


<div class="container my-5">
    <div class="table-container">
        <table class="table table-striped" id="dataTable">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Tanggal Bergabung</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr data-status="Admin" data-name="Andi Prasetyo" data-date="2022-08-12">
                    <td>Andi Prasetyo</td>
                    <td>4ndi@email.com</td>
                    <td>Admin</td>
                    <td>12-08-2022</td>
                    <td><a href="{{ route('admin.user.show-siti') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="11" viewBox="0 0 15 11" fill="none">
                            <path d="M9.625 5.49902C9.625 6.06261 9.40112 6.60311 9.0026 7.00163C8.60409 7.40014 8.06358 7.62402 7.5 7.62402C6.93641 7.62402 6.39591 7.40014 5.9974 7.00163C5.59888 6.60311 5.375 6.06261 5.375 5.49902C5.375 4.93544 5.59888 4.39494 5.9974 3.99642C6.39591 3.59791 6.93641 3.37402 7.5 3.37402C8.06358 3.37402 8.60409 3.59791 9.0026 3.99642C9.40112 4.39494 9.625 4.93544 9.625 5.49902Z" fill="black"/>
                            <path d="M14.5072 5.18272C12.9786 2.12485 10.2643 0.541016 7.49897 0.541016C4.73364 0.541016 2.0193 2.12485 0.490721 5.18272C0.441592 5.28104 0.416016 5.38944 0.416016 5.49935C0.416016 5.60926 0.441592 5.71766 0.490721 5.81597C2.0193 8.87385 4.73364 10.4577 7.49897 10.4577C10.2643 10.4577 12.9786 8.87385 14.5072 5.81597C14.5563 5.71766 14.5819 5.60926 14.5819 5.49935C14.5819 5.38944 14.5563 5.28104 14.5072 5.18272ZM7.49897 9.04102C5.39593 9.04102 3.24755 7.89352 1.92439 5.49935C3.24755 3.10518 5.39522 1.95768 7.49897 1.95768C9.60272 1.95768 11.7504 3.10518 13.0736 5.49935C11.7504 7.89352 9.60201 9.04102 7.49897 9.04102Z" fill="black"/>
                          </svg>Lihat detail</a></td>
                </tr>
                <tr data-status="User" data-name="Siti Aisyah" data-date="2022-09-22">
                    <td>Siti Aisyah</td>
                    <td>sitiaisyah@email.com</td>
                    <td>User</td>
                    <td>22-09-2022</td>
                    <td><a href="{{ route('admin.user.show-siti') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="11" viewBox="0 0 15 11" fill="none">
                            <path d="M9.625 5.49902C9.625 6.06261 9.40112 6.60311 9.0026 7.00163C8.60409 7.40014 8.06358 7.62402 7.5 7.62402C6.93641 7.62402 6.39591 7.40014 5.9974 7.00163C5.59888 6.60311 5.375 6.06261 5.375 5.49902C5.375 4.93544 5.59888 4.39494 5.9974 3.99642C6.39591 3.59791 6.93641 3.37402 7.5 3.37402C8.06358 3.37402 8.60409 3.59791 9.0026 3.99642C9.40112 4.39494 9.625 4.93544 9.625 5.49902Z" fill="black"/>
                            <path d="M14.5072 5.18272C12.9786 2.12485 10.2643 0.541016 7.49897 0.541016C4.73364 0.541016 2.0193 2.12485 0.490721 5.18272C0.441592 5.28104 0.416016 5.38944 0.416016 5.49935C0.416016 5.60926 0.441592 5.71766 0.490721 5.81597C2.0193 8.87385 4.73364 10.4577 7.49897 10.4577C10.2643 10.4577 12.9786 8.87385 14.5072 5.81597C14.5563 5.71766 14.5819 5.60926 14.5819 5.49935C14.5819 5.38944 14.5563 5.28104 14.5072 5.18272ZM7.49897 9.04102C5.39593 9.04102 3.24755 7.89352 1.92439 5.49935C3.24755 3.10518 5.39522 1.95768 7.49897 1.95768C9.60272 1.95768 11.7504 3.10518 13.0736 5.49935C11.7504 7.89352 9.60201 9.04102 7.49897 9.04102Z" fill="black"/>
                          </svg>Lihat detail</a></td>
                </tr>
                <tr data-status="User" data-name="Budiono Siregar" data-date="2018-12-19">
                    <td>Budiono Siregar</td>
                    <td>budionosiregar@email.com</td>
                    <td>User</td>
                    <td>19-12-2018</td>
                    <td><a href="{{ route('admin.user.show-budiono') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="11" viewBox="0 0 15 11" fill="none">
                            <path d="M9.625 5.49902C9.625 6.06261 9.40112 6.60311 9.0026 7.00163C8.60409 7.40014 8.06358 7.62402 7.5 7.62402C6.93641 7.62402 6.39591 7.40014 5.9974 7.00163C5.59888 6.60311 5.375 6.06261 5.375 5.49902C5.375 4.93544 5.59888 4.39494 5.9974 3.99642C6.39591 3.59791 6.93641 3.37402 7.5 3.37402C8.06358 3.37402 8.60409 3.59791 9.0026 3.99642C9.40112 4.39494 9.625 4.93544 9.625 5.49902Z" fill="black"/>
                            <path d="M14.5072 5.18272C12.9786 2.12485 10.2643 0.541016 7.49897 0.541016C4.73364 0.541016 2.0193 2.12485 0.490721 5.18272C0.441592 5.28104 0.416016 5.38944 0.416016 5.49935C0.416016 5.60926 0.441592 5.71766 0.490721 5.81597C2.0193 8.87385 4.73364 10.4577 7.49897 10.4577C10.2643 10.4577 12.9786 8.87385 14.5072 5.81597C14.5563 5.71766 14.5819 5.60926 14.5819 5.49935C14.5819 5.38944 14.5563 5.28104 14.5072 5.18272ZM7.49897 9.04102C5.39593 9.04102 3.24755 7.89352 1.92439 5.49935C3.24755 3.10518 5.39522 1.95768 7.49897 1.95768C9.60272 1.95768 11.7504 3.10518 13.0736 5.49935C11.7504 7.89352 9.60201 9.04102 7.49897 9.04102Z" fill="black"/>
                          </svg>Lihat detail</a></td>
                </tr>
                <tr data-status="User" data-name="Rina Wulandari" data-date="2021-02-26">
                    <td>Rina Wulandari</td>
                    <td>rinaawulandari@email.com</td>
                    <td>User</td>
                    <td>26-02-2021</td>
                    <td><a href="{{ route('admin.user.show-budiono') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="11" viewBox="0 0 15 11" fill="none">
                            <path d="M9.625 5.49902C9.625 6.06261 9.40112 6.60311 9.0026 7.00163C8.60409 7.40014 8.06358 7.62402 7.5 7.62402C6.93641 7.62402 6.39591 7.40014 5.9974 7.00163C5.59888 6.60311 5.375 6.06261 5.375 5.49902C5.375 4.93544 5.59888 4.39494 5.9974 3.99642C6.39591 3.59791 6.93641 3.37402 7.5 3.37402C8.06358 3.37402 8.60409 3.59791 9.0026 3.99642C9.40112 4.39494 9.625 4.93544 9.625 5.49902Z" fill="black"/>
                            <path d="M14.5072 5.18272C12.9786 2.12485 10.2643 0.541016 7.49897 0.541016C4.73364 0.541016 2.0193 2.12485 0.490721 5.18272C0.441592 5.28104 0.416016 5.38944 0.416016 5.49935C0.416016 5.60926 0.441592 5.71766 0.490721 5.81597C2.0193 8.87385 4.73364 10.4577 7.49897 10.4577C10.2643 10.4577 12.9786 8.87385 14.5072 5.81597C14.5563 5.71766 14.5819 5.60926 14.5819 5.49935C14.5819 5.38944 14.5563 5.28104 14.5072 5.18272ZM7.49897 9.04102C5.39593 9.04102 3.24755 7.89352 1.92439 5.49935C3.24755 3.10518 5.39522 1.95768 7.49897 1.95768C9.60272 1.95768 11.7504 3.10518 13.0736 5.49935C11.7504 7.89352 9.60201 9.04102 7.49897 9.04102Z" fill="black"/>
                          </svg>Lihat detail</a></td>
                </tr>
                <tr data-status="User" data-name="Joko Susilo" data-date="2023-01-29">
                    <td>Joko Susilo</td>
                    <td>jokosusilo@email.com</td>
                    <td>User</td>
                    <td>29-01-2023</td>
                    <td><a href="{{ route('admin.user.show-budiono') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="11" viewBox="0 0 15 11" fill="none">
                            <path d="M9.625 5.49902C9.625 6.06261 9.40112 6.60311 9.0026 7.00163C8.60409 7.40014 8.06358 7.62402 7.5 7.62402C6.93641 7.62402 6.39591 7.40014 5.9974 7.00163C5.59888 6.60311 5.375 6.06261 5.375 5.49902C5.375 4.93544 5.59888 4.39494 5.9974 3.99642C6.39591 3.59791 6.93641 3.37402 7.5 3.37402C8.06358 3.37402 8.60409 3.59791 9.0026 3.99642C9.40112 4.39494 9.625 4.93544 9.625 5.49902Z" fill="black"/>
                            <path d="M14.5072 5.18272C12.9786 2.12485 10.2643 0.541016 7.49897 0.541016C4.73364 0.541016 2.0193 2.12485 0.490721 5.18272C0.441592 5.28104 0.416016 5.38944 0.416016 5.49935C0.416016 5.60926 0.441592 5.71766 0.490721 5.81597C2.0193 8.87385 4.73364 10.4577 7.49897 10.4577C10.2643 10.4577 12.9786 8.87385 14.5072 5.81597C14.5563 5.71766 14.5819 5.60926 14.5819 5.49935C14.5819 5.38944 14.5563 5.28104 14.5072 5.18272ZM7.49897 9.04102C5.39593 9.04102 3.24755 7.89352 1.92439 5.49935C3.24755 3.10518 5.39522 1.95768 7.49897 1.95768C9.60272 1.95768 11.7504 3.10518 13.0736 5.49935C11.7504 7.89352 9.60201 9.04102 7.49897 9.04102Z" fill="black"/>
                          </svg>Lihat detail</a></td>
                </tr>
                <tr data-status="User" data-name="Lilia Sari" data-date="2021-11-20">
                    <td>Lilia Sari</td>
                    <td>lyliaasari@email.com</td>
                    <td>User</td>
                    <td>20-11-2021</td>
                    <td><a href="{{ route('admin.user.show-siti') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="11" viewBox="0 0 15 11" fill="none">
                            <path d="M9.625 5.49902C9.625 6.06261 9.40112 6.60311 9.0026 7.00163C8.60409 7.40014 8.06358 7.62402 7.5 7.62402C6.93641 7.62402 6.39591 7.40014 5.9974 7.00163C5.59888 6.60311 5.375 6.06261 5.375 5.49902C5.375 4.93544 5.59888 4.39494 5.9974 3.99642C6.39591 3.59791 6.93641 3.37402 7.5 3.37402C8.06358 3.37402 8.60409 3.59791 9.0026 3.99642C9.40112 4.39494 9.625 4.93544 9.625 5.49902Z" fill="black"/>
                            <path d="M14.5072 5.18272C12.9786 2.12485 10.2643 0.541016 7.49897 0.541016C4.73364 0.541016 2.0193 2.12485 0.490721 5.18272C0.441592 5.28104 0.416016 5.38944 0.416016 5.49935C0.416016 5.60926 0.441592 5.71766 0.490721 5.81597C2.0193 8.87385 4.73364 10.4577 7.49897 10.4577C10.2643 10.4577 12.9786 8.87385 14.5072 5.81597C14.5563 5.71766 14.5819 5.60926 14.5819 5.49935C14.5819 5.38944 14.5563 5.28104 14.5072 5.18272ZM7.49897 9.04102C5.39593 9.04102 3.24755 7.89352 1.92439 5.49935C3.24755 3.10518 5.39522 1.95768 7.49897 1.95768C9.60272 1.95768 11.7504 3.10518 13.0736 5.49935C11.7504 7.89352 9.60201 9.04102 7.49897 9.04102Z" fill="black"/>
                          </svg>Lihat detail</a></td>
                </tr>
                <tr data-status="Admin" data-name="Tania Melati" data-date="2022-08-06">
                    <td>Tania Melati</td>
                    <td>taniamelati@email.com</td>
                    <td>Admin</td>
                    <td>06-08-2022</td>
                    <td><a href="{{ route('admin.user.show-budiono') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="11" viewBox="0 0 15 11" fill="none">
                            <path d="M9.625 5.49902C9.625 6.06261 9.40112 6.60311 9.0026 7.00163C8.60409 7.40014 8.06358 7.62402 7.5 7.62402C6.93641 7.62402 6.39591 7.40014 5.9974 7.00163C5.59888 6.60311 5.375 6.06261 5.375 5.49902C5.375 4.93544 5.59888 4.39494 5.9974 3.99642C6.39591 3.59791 6.93641 3.37402 7.5 3.37402C8.06358 3.37402 8.60409 3.59791 9.0026 3.99642C9.40112 4.39494 9.625 4.93544 9.625 5.49902Z" fill="black"/>
                            <path d="M14.5072 5.18272C12.9786 2.12485 10.2643 0.541016 7.49897 0.541016C4.73364 0.541016 2.0193 2.12485 0.490721 5.18272C0.441592 5.28104 0.416016 5.38944 0.416016 5.49935C0.416016 5.60926 0.441592 5.71766 0.490721 5.81597C2.0193 8.87385 4.73364 10.4577 7.49897 10.4577C10.2643 10.4577 12.9786 8.87385 14.5072 5.81597C14.5563 5.71766 14.5819 5.60926 14.5819 5.49935C14.5819 5.38944 14.5563 5.28104 14.5072 5.18272ZM7.49897 9.04102C5.39593 9.04102 3.24755 7.89352 1.92439 5.49935C3.24755 3.10518 5.39522 1.95768 7.49897 1.95768C9.60272 1.95768 11.7504 3.10518 13.0736 5.49935C11.7504 7.89352 9.60201 9.04102 7.49897 9.04102Z" fill="black"/>
                          </svg>Lihat detail</a></td>
                </tr>
                <tr data-status="Admin" data-name="Fajar Nugroho" data-date="2022-03-17">
                    <td>Fajar Nugroho</td>
                    <td>fajarnugroho@email.com</td>
                    <td>Admin</td>
                    <td>17-03-2022</td>
                    <td><a href="{{ route('admin.user.show-siti') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="11" viewBox="0 0 15 11" fill="none">
                            <path d="M9.625 5.49902C9.625 6.06261 9.40112 6.60311 9.0026 7.00163C8.60409 7.40014 8.06358 7.62402 7.5 7.62402C6.93641 7.62402 6.39591 7.40014 5.9974 7.00163C5.59888 6.60311 5.375 6.06261 5.375 5.49902C5.375 4.93544 5.59888 4.39494 5.9974 3.99642C6.39591 3.59791 6.93641 3.37402 7.5 3.37402C8.06358 3.37402 8.60409 3.59791 9.0026 3.99642C9.40112 4.39494 9.625 4.93544 9.625 5.49902Z" fill="black"/>
                            <path d="M14.5072 5.18272C12.9786 2.12485 10.2643 0.541016 7.49897 0.541016C4.73364 0.541016 2.0193 2.12485 0.490721 5.18272C0.441592 5.28104 0.416016 5.38944 0.416016 5.49935C0.416016 5.60926 0.441592 5.71766 0.490721 5.81597C2.0193 8.87385 4.73364 10.4577 7.49897 10.4577C10.2643 10.4577 12.9786 8.87385 14.5072 5.81597C14.5563 5.71766 14.5819 5.60926 14.5819 5.49935C14.5819 5.38944 14.5563 5.28104 14.5072 5.18272ZM7.49897 9.04102C5.39593 9.04102 3.24755 7.89352 1.92439 5.49935C3.24755 3.10518 5.39522 1.95768 7.49897 1.95768C9.60272 1.95768 11.7504 3.10518 13.0736 5.49935C11.7504 7.89352 9.60201 9.04102 7.49897 9.04102Z" fill="black"/>
                          </svg>Lihat detail</a></td>
                </tr>
                <tr data-status="User" data-name="Diah Permata Sari" data-date="2022-08-06">
                    <td>Diah Permata Sari</td>
                    <td>diahpermatasari@email.com</td>
                    <td>Admin</td>
                    <td>06-08-2022</td>
                    <td><a href="{{ route('admin.user.show-budiono') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="11" viewBox="0 0 15 11" fill="none">
                            <path d="M9.625 5.49902C9.625 6.06261 9.40112 6.60311 9.0026 7.00163C8.60409 7.40014 8.06358 7.62402 7.5 7.62402C6.93641 7.62402 6.39591 7.40014 5.9974 7.00163C5.59888 6.60311 5.375 6.06261 5.375 5.49902C5.375 4.93544 5.59888 4.39494 5.9974 3.99642C6.39591 3.59791 6.93641 3.37402 7.5 3.37402C8.06358 3.37402 8.60409 3.59791 9.0026 3.99642C9.40112 4.39494 9.625 4.93544 9.625 5.49902Z" fill="black"/>
                            <path d="M14.5072 5.18272C12.9786 2.12485 10.2643 0.541016 7.49897 0.541016C4.73364 0.541016 2.0193 2.12485 0.490721 5.18272C0.441592 5.28104 0.416016 5.38944 0.416016 5.49935C0.416016 5.60926 0.441592 5.71766 0.490721 5.81597C2.0193 8.87385 4.73364 10.4577 7.49897 10.4577C10.2643 10.4577 12.9786 8.87385 14.5072 5.81597C14.5563 5.71766 14.5819 5.60926 14.5819 5.49935C14.5819 5.38944 14.5563 5.28104 14.5072 5.18272ZM7.49897 9.04102C5.39593 9.04102 3.24755 7.89352 1.92439 5.49935C3.24755 3.10518 5.39522 1.95768 7.49897 1.95768C9.60272 1.95768 11.7504 3.10518 13.0736 5.49935C11.7504 7.89352 9.60201 9.04102 7.49897 9.04102Z" fill="black"/>
                          </svg>Lihat detail</a></td>
                </tr>
                <tr data-status="User" data-name="Zahra Meylani" data-date="2021-05-20">
                    <td>Zahra Meylani</td>
                    <td>zahramey@email.com</td>
                    <td>User</td>
                    <td>20-05-2021</td>
                    <td><a href="{{ route('admin.user.show-budiono') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="11" viewBox="0 0 15 11" fill="none">
                            <path d="M9.625 5.49902C9.625 6.06261 9.40112 6.60311 9.0026 7.00163C8.60409 7.40014 8.06358 7.62402 7.5 7.62402C6.93641 7.62402 6.39591 7.40014 5.9974 7.00163C5.59888 6.60311 5.375 6.06261 5.375 5.49902C5.375 4.93544 5.59888 4.39494 5.9974 3.99642C6.39591 3.59791 6.93641 3.37402 7.5 3.37402C8.06358 3.37402 8.60409 3.59791 9.0026 3.99642C9.40112 4.39494 9.625 4.93544 9.625 5.49902Z" fill="black"/>
                            <path d="M14.5072 5.18272C12.9786 2.12485 10.2643 0.541016 7.49897 0.541016C4.73364 0.541016 2.0193 2.12485 0.490721 5.18272C0.441592 5.28104 0.416016 5.38944 0.416016 5.49935C0.416016 5.60926 0.441592 5.71766 0.490721 5.81597C2.0193 8.87385 4.73364 10.4577 7.49897 10.4577C10.2643 10.4577 12.9786 8.87385 14.5072 5.81597C14.5563 5.71766 14.5819 5.60926 14.5819 5.49935C14.5819 5.38944 14.5563 5.28104 14.5072 5.18272ZM7.49897 9.04102C5.39593 9.04102 3.24755 7.89352 1.92439 5.49935C3.24755 3.10518 5.39522 1.95768 7.49897 1.95768C9.60272 1.95768 11.7504 3.10518 13.0736 5.49935C11.7504 7.89352 9.60201 9.04102 7.49897 9.04102Z" fill="black"/>
                          </svg>Lihat detail</a></td>
                </tr>
                <tr data-status="User" data-name="Cut Novita Saru" data-date="2022-11-09">
                    <td>Cut Novita Saru</td>
                    <td>cutnovita@email.com</td>
                    <td>User</td>
                    <td>09-11-2022</td>
                    <td><a href="{{ route('admin.user.show-siti') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="11" viewBox="0 0 15 11" fill="none">
                            <path d="M9.625 5.49902C9.625 6.06261 9.40112 6.60311 9.0026 7.00163C8.60409 7.40014 8.06358 7.62402 7.5 7.62402C6.93641 7.62402 6.39591 7.40014 5.9974 7.00163C5.59888 6.60311 5.375 6.06261 5.375 5.49902C5.375 4.93544 5.59888 4.39494 5.9974 3.99642C6.39591 3.59791 6.93641 3.37402 7.5 3.37402C8.06358 3.37402 8.60409 3.59791 9.0026 3.99642C9.40112 4.39494 9.625 4.93544 9.625 5.49902Z" fill="black"/>
                            <path d="M14.5072 5.18272C12.9786 2.12485 10.2643 0.541016 7.49897 0.541016C4.73364 0.541016 2.0193 2.12485 0.490721 5.18272C0.441592 5.28104 0.416016 5.38944 0.416016 5.49935C0.416016 5.60926 0.441592 5.71766 0.490721 5.81597C2.0193 8.87385 4.73364 10.4577 7.49897 10.4577C10.2643 10.4577 12.9786 8.87385 14.5072 5.81597C14.5563 5.71766 14.5819 5.60926 14.5819 5.49935C14.5819 5.38944 14.5563 5.28104 14.5072 5.18272ZM7.49897 9.04102C5.39593 9.04102 3.24755 7.89352 1.92439 5.49935C3.24755 3.10518 5.39522 1.95768 7.49897 1.95768C9.60272 1.95768 11.7504 3.10518 13.0736 5.49935C11.7504 7.89352 9.60201 9.04102 7.49897 9.04102Z" fill="black"/>
                          </svg>Lihat detail</a></td>
                </tr>
                <!-- Tambahkan data lainnya -->
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
    font-size: 12px;
    font-weight: 500;
    background-color: white; /* Latar belakang tombol */
    color: #0056D2; /* Warna teks */
}

/* Gaya untuk menu dropdown */
.dropdown-menu {
    font-size: 12px;
    color: #2D3748;
    border: 1px solid transparent; /* Sama dengan tombol */
    border-radius: 8.341px;
    padding: 10px; /* Ruang dalam menu */
    background-color: white; /* Latar belakang menu */
}

/* Item dalam dropdown */
.dropdown-menu .dropdown-item {
    border-radius: 8.341px; /* Opsi untuk item individu */
    padding: 8px 12px; /* Padding setiap item */
    color: #2D3748;
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

.table-rounded {
    overflow: hidden;
    font-size: 14px; /* Atur ukuran font untuk tabel */
}
.btn-detail {
    display: inline-flex;
    align-items: center;
    font-size: 14px; /* Ukuran font */
    color: #000; /* Warna teks */
    text-decoration: none; /* Hilangkan garis bawah */
    background: none;
    border: none;
    padding: 0;
    gap: 12px;
}

.btn-detail i {
    font-size: 18px; /* Ukuran ikon */
    margin-right: 5px; /* Jarak antara ikon dan teks */
}
.btn-detail:hover {
    color: #003D94; /* Ubah warna teks saat hover */
}

.btn-detail svg path {
    fill: black; /* Warna awal ikon SVG */
    transition: fill 0.3s; /* Animasi transisi untuk ikon */
}

.btn-detail:hover svg path {
    fill: #003D94; /* Ubah warna ikon SVG saat hover */
}

table {
    font-size: 12px;
    font-weight: 400;
    table-layout: fixed; /* Membatasi ukuran tabel */
    width: 100%; /* Membuat tabel melebar sesuai container */
}

a {
    text-decoration: none;
    color: black;
}
a svg {
    margin-right: 5px;
}
</style>
<script>
function filterTable(status) {
    const rows = document.querySelectorAll("#dataTable tbody tr");
    rows.forEach(row => {
        if (row.dataset.status === status || status === "All") {
            row.style.display = "";
        } else {
            row.style.display = "none";
        }
    });
}

function sortTable(type) {
    const table = document.getElementById("dataTable");
    const rows = Array.from(table.querySelectorAll("tbody tr"));

    if (type === "all") {
        rows.forEach(row => row.style.display = "");
        return;
    }

    const sortedRows = rows.sort((a, b) => {
        if (type === "name") {
            return a.dataset.name.localeCompare(b.dataset.name);
        } else if (type === "date") {
            return new Date(a.dataset.date) - new Date(b.dataset.date);
        }
    });

    const tbody = table.querySelector("tbody");
    tbody.innerHTML = "";
    sortedRows.forEach(row => tbody.appendChild(row));
}
document.querySelector('input[aria-label="Search"]').addEventListener('input', function (e) {
    const searchValue = e.target.value.toLowerCase();
    const rows = document.querySelectorAll('#dataTable tbody tr');

    rows.forEach(row => {
        const name = row.querySelector('td:nth-child(1)').textContent.toLowerCase();
        const email = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
        if (name.includes(searchValue) || email.includes(searchValue)) {
            row.style.display = ''; // Tampilkan baris
        } else {
            row.style.display = 'none'; // Sembunyikan baris
        }
    });
});
</script>
@endsection
