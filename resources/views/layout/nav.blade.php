@php
    $currentRouteName = Route::currentRouteName();
@endphp

<nav class="navbar navbar-expand-md navbar-custom">
    <div class="container">
        <!-- Brand Logo -->
        <a href="{{ route('home.guest') }}" class="navbar-brand">
            <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Logo">
        </a>

        <!-- Search Box -->
        <form class="d-flex form-search">
          <div class="input-group">
            <span class="input-group-text bg-white border-0">
              <i class="bi bi-search"></i>
            </span>
            <input
              type="text"
              class="form-control border-0"
              placeholder="Search"
            />
          </div>
        </form>

        <!-- Navbar Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a href="{{ route('home.guest') }}" class="nav-link custom-nav-link @if (Route::currentRouteName() == 'home.guest') active @endif">Beranda</a>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link custom-nav-link @if ($currentRouteName == 'kategori') active @endif" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Kategori</a>
                <ul class="dropdown-menu">
                  <li><a href="{{ route('category.index') }}" class="dropdown-item">Bahasa</a></li>
                  <li><a href="{{ route('category.index') }}" class="dropdown-item">Sains dan Matematika</a></li>
                  <li><a href="{{ route('category.index') }}" class="dropdown-item">Pengembangan Personal</a></li>
                  <li><a href="{{ route('category.index') }}" class="dropdown-item">Desain</a></li>
                  <li><a href="{{ route('category.index') }}" class="dropdown-item">Bahasa Pemrograman</a></li>
                  <li><a href="{{ route('category.index') }}" class="dropdown-item">Jaringan dan Keamanan</a></li>
                  <li><a href="{{ route('category.index') }}" class="dropdown-item">Pemasaran</a></li>
                  <li><a href="{{ route('category.index') }}" class="dropdown-item">Keuangan dan Akuntansi</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="{{ route('course.index') }}" class="nav-link custom-nav-link @if ($currentRouteName == 'pembelajaran') active @endif">Pembelajaran</a>
              </li>
            </ul>
            <!-- Login Button -->
            <a href="{{ route('login') }}" class="btn btn-login">Login</a>
        </div>
    </div>
</nav>

<style>
/* Dropdown Styles */
.nav-item.dropdown {
    position: relative;
}

.dropdown-menu {
    display: none; /* Hidden by default */
    position: absolute;
    top: 100%;
    left: 0;
    background-color: white;
    border-radius: 8px;
    list-style: none;
    padding: 10px 0;
    z-index: 1000;
    border: none; /* Hilangkan border */
}

.dropdown-item {
    padding: 10px 20px;
    color: #000; /* Warna teks default */
    text-decoration: none;
    display: block;
    background: none; /* Hilangkan latar belakang */
}

.dropdown-item:hover {
    color: #002661; /* Warna teks saat hover */
    background: none; /* Hilangkan latar belakang */
}

/* Show dropdown on hover */
.nav-item.dropdown:hover .dropdown-menu {
    display: block;
}


</style>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const dropdownItems = document.querySelectorAll('.dropdown-item');

    dropdownItems.forEach(item => {
        item.addEventListener('click', function() {
            const dropdownMenu = this.closest('.dropdown-menu');
            if (dropdownMenu) {
                dropdownMenu.style.display = 'none'; // Menutup dropdown setelah klik
            }
        });
    });
});

</script>
