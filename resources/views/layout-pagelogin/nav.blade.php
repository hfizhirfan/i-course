@php
    $currentRouteName = Route::currentRouteName();
@endphp

<nav class="navbar navbar-expand-md navbar-custom">
    <div class="container">
        <!-- Brand Logo -->
        <a href="{{ route('home') }}" class="navbar-brand">
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
                <a href="{{ route('home') }}" class="nav-link custom-nav-link @if ($currentRouteName == 'home') active @endif">Beranda</a>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link custom-nav-link @if ($currentRouteName == 'category.after-login') active @endif" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Kategori</a>
                <ul class="dropdown-menu">
                  <li><a href="{{ route('category.after-login') }}" class="dropdown-item">Bahasa</a></li>
                  <li><a href="{{ route('category.after-login') }}" class="dropdown-item">Sains dan Matematika</a></li>
                  <li><a href="{{ route('category.after-login') }}" class="dropdown-item">Pengembangan Personal</a></li>
                  <li><a href="{{ route('category.after-login') }}" class="dropdown-item">Desain</a></li>
                  <li><a href="{{ route('category.after-login') }}" class="dropdown-item">Bahasa Pemrograman</a></li>
                  <li><a href="{{ route('category.after-login') }}" class="dropdown-item">Jaringan dan Keamanan</a></li>
                  <li><a href="{{ route('category.after-login') }}" class="dropdown-item">Pemasaran</a></li>
                  <li><a href="{{ route('category.after-login') }}" class="dropdown-item">Keuangan dan Akuntansi</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="{{ route('course.after-login') }}" class="nav-link custom-nav-link @if ($currentRouteName == 'course.after-login') active @endif">Pembelajaran</a>
              </li>
            </ul>
            <div class="dropdown">
              <a href="#" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="{{ Vite::asset('resources/images/profile.png') }}" alt="Profile" class="rounded-circle" width="40" height="40">
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                    <li>
                    <a class="dropdown-item" href="{{ route('user.profile') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                            <path d="M13.9202 13.7452C14.3112 13.6638 14.5449 13.2543 14.3501 12.9044C13.9209 12.1345 13.2451 11.4573 12.381 10.9416C11.2675 10.2772 9.90251 9.91667 8.50001 9.91667C7.09681 9.91667 5.73256 10.2765 4.61906 10.9416C3.75489 11.4573 3.07914 12.1345 2.64989 12.9044C2.4551 13.2543 2.68885 13.6638 3.07985 13.7452C6.65465 14.4902 10.3447 14.4902 13.9195 13.7452" fill="#4A5568"/>
                            <path d="M8.49998 9.20833C10.456 9.20833 12.0416 7.62267 12.0416 5.66667C12.0416 3.71066 10.456 2.125 8.49998 2.125C6.54397 2.125 4.95831 3.71066 4.95831 5.66667C4.95831 7.62267 6.54397 9.20833 8.49998 9.20833Z" fill="#4A5568"/>
                          </svg> Profil</a>
                    </li>
                    <li>
                    <a class="dropdown-item" href="{{ route('course.after-login') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                            <path d="M5.78712 1.59375H12.325C12.7975 1.59375 13.2714 1.67096 13.6022 2.01379C13.928 2.35237 13.9896 2.82129 13.9896 3.25833V11.6167C13.9896 12.0013 13.9386 12.3795 13.7417 12.6855C13.6281 12.862 13.4691 13.0047 13.2813 13.0985V13.7417C13.2813 14.2134 13.2048 14.6873 12.8627 15.0181C12.5241 15.3453 12.0552 15.4062 11.6181 15.4062H4.07295C3.79116 15.4062 3.52091 15.2943 3.32165 15.095C3.12239 14.8958 3.01045 14.6255 3.01045 14.3437V4.26204C3.00833 3.90929 3.0062 3.46871 3.10253 3.06708C3.22083 2.57692 3.49353 2.10162 4.07366 1.80625C4.31308 1.68442 4.56524 1.63625 4.83441 1.615C5.09295 1.59375 5.40816 1.59375 5.78712 1.59375ZM4.07295 14.3437H11.6181C12.0056 14.3437 12.1019 14.2757 12.1239 14.2545C12.1416 14.2375 12.2188 14.1447 12.2188 13.7417V13.2812H5.13545C4.85366 13.2812 4.58341 13.3932 4.38415 13.5924C4.18489 13.7917 4.07295 14.062 4.07295 14.3437Z" fill="#4A5568"/>
                          </svg> Kursus</a>
                    </li>
                  <li>
                    <a class="dropdown-item" href="{{ route('user.catatan') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                            <path d="M13.8125 2.125H3.1875C2.90571 2.125 2.63546 2.23694 2.4362 2.4362C2.23694 2.63546 2.125 2.90571 2.125 3.1875V13.8125C2.125 14.0943 2.23694 14.3645 2.4362 14.5638C2.63546 14.7631 2.90571 14.875 3.1875 14.875H10.4052C10.5447 14.8752 10.683 14.8478 10.8119 14.7944C10.9408 14.7409 11.0578 14.6625 11.1562 14.5636L14.5636 11.1562C14.6625 11.0578 14.7409 10.9408 14.7944 10.8119C14.8478 10.683 14.8752 10.5447 14.875 10.4052V3.1875C14.875 2.90571 14.7631 2.63546 14.5638 2.4362C14.3645 2.23694 14.0943 2.125 13.8125 2.125ZM6.375 5.84375H10.625C10.7659 5.84375 10.901 5.89972 11.0006 5.99935C11.1003 6.09898 11.1562 6.2341 11.1562 6.375C11.1562 6.5159 11.1003 6.65102 11.0006 6.75065C10.901 6.85028 10.7659 6.90625 10.625 6.90625H6.375C6.2341 6.90625 6.09898 6.85028 5.99935 6.75065C5.89972 6.65102 5.84375 6.5159 5.84375 6.375C5.84375 6.2341 5.89972 6.09898 5.99935 5.99935C6.09898 5.89972 6.2341 5.84375 6.375 5.84375ZM8.5 11.1562H6.375C6.2341 11.1562 6.09898 11.1003 5.99935 11.0006C5.89972 10.901 5.84375 10.7659 5.84375 10.625C5.84375 10.4841 5.89972 10.349 5.99935 10.2493C6.09898 10.1497 6.2341 10.0937 6.375 10.0937H8.5C8.6409 10.0937 8.77602 10.1497 8.87565 10.2493C8.97528 10.349 9.03125 10.4841 9.03125 10.625C9.03125 10.7659 8.97528 10.901 8.87565 11.0006C8.77602 11.1003 8.6409 11.1562 8.5 11.1562ZM6.375 9.03125C6.2341 9.03125 6.09898 8.97528 5.99935 8.87565C5.89972 8.77602 5.84375 8.6409 5.84375 8.5C5.84375 8.3591 5.89972 8.22398 5.99935 8.12435C6.09898 8.02472 6.2341 7.96875 6.375 7.96875H10.625C10.7659 7.96875 10.901 8.02472 11.0006 8.12435C11.1003 8.22398 11.1562 8.3591 11.1562 8.5C11.1562 8.6409 11.1003 8.77602 11.0006 8.87565C10.901 8.97528 10.7659 9.03125 10.625 9.03125H6.375ZM10.625 13.5927V10.625H13.5934L10.625 13.5927Z" fill="#4A5568"/>
                          </svg> Catatan</a>
                    </li>
                  <li>
                    <a class="dropdown-item" href="{{ route('user.pencapaian') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                            <g clip-path="url(#clip0_1031_2675)">
                              <path d="M14.3438 6.375C14.3443 5.39019 14.096 4.42122 13.6219 3.55806C13.1478 2.69491 12.4632 1.96557 11.6317 1.43781C10.8003 0.910038 9.84896 0.600952 8.86609 0.539258C7.88322 0.477564 6.9007 0.665262 6.00979 1.08492C5.11888 1.50458 4.34847 2.14258 3.77012 2.93967C3.19178 3.73676 2.82425 4.66709 2.70169 5.64423C2.57912 6.62138 2.70549 7.61365 3.06905 8.52889C3.43262 9.44413 4.02158 10.2526 4.78125 10.8793V15.9375C4.78119 16.0281 4.80429 16.1172 4.84838 16.1964C4.89246 16.2755 4.95606 16.3421 5.03312 16.3897C5.11018 16.4374 5.19814 16.4645 5.28865 16.4686C5.37916 16.4727 5.46921 16.4535 5.55024 16.413L8.5 14.9414L11.4504 16.4163C11.5244 16.4516 11.6055 16.4696 11.6875 16.4687C11.8284 16.4687 11.9635 16.4128 12.0632 16.3131C12.1628 16.2135 12.2188 16.0784 12.2188 15.9375V10.8793C12.8834 10.3319 13.4187 9.64411 13.7861 8.86533C14.1535 8.08655 14.3439 7.23609 14.3438 6.375ZM3.71875 6.375C3.71875 5.42936 3.99917 4.50495 4.52454 3.71868C5.04991 2.93241 5.79664 2.31958 6.6703 1.9577C7.54395 1.59582 8.5053 1.50113 9.43278 1.68562C10.3602 1.8701 11.2122 2.32547 11.8809 2.99414C12.5495 3.66281 13.0049 4.51475 13.1894 5.44222C13.3739 6.36969 13.2792 7.33104 12.9173 8.2047C12.5554 9.07836 11.9426 9.82509 11.1563 10.3505C10.37 10.8758 9.44564 11.1562 8.5 11.1562C7.23237 11.1548 6.01705 10.6507 5.1207 9.7543C4.22435 8.85795 3.72016 7.64263 3.71875 6.375ZM4.78125 6.375C4.78125 5.6395 4.99935 4.92052 5.40797 4.30897C5.81659 3.69743 6.39738 3.22078 7.0769 2.93932C7.75641 2.65786 8.50413 2.58421 9.22549 2.7277C9.94686 2.87119 10.6095 3.22537 11.1296 3.74545C11.6496 4.26552 12.0038 4.92814 12.1473 5.64951C12.2908 6.37087 12.2171 7.11859 11.9357 7.7981C11.6542 8.47761 11.1776 9.0584 10.566 9.46703C9.95448 9.87565 9.2355 10.0937 8.5 10.0937C7.51405 10.0927 6.56878 9.70056 5.87161 9.00339C5.17444 8.30621 4.78231 7.36095 4.78125 6.375Z" fill="#4A5568"/>
                            </g>
                            <defs>
                              <clipPath id="clip0_1031_2675">
                                <rect width="17" height="17" fill="white"/>
                              </clipPath>
                            </defs>
                          </svg> Pencapaian</a>
                    </li>
                  <li>
                    <a class="dropdown-item" href="{{ route('home.guest') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                            <path d="M3.97798 14.1667C3.65167 14.1667 3.37944 14.0576 3.16127 13.8394C2.9431 13.6213 2.83379 13.3488 2.83331 13.022V3.978C2.83331 3.6517 2.94263 3.37946 3.16127 3.16129C3.37991 2.94313 3.65215 2.83381 3.97798 2.83333H8.51344V3.54167H3.97798C3.8689 3.54167 3.76879 3.587 3.67765 3.67767C3.58651 3.76833 3.54117 3.86845 3.54165 3.978V13.0227C3.54165 13.1313 3.58698 13.2312 3.67765 13.3223C3.76831 13.4135 3.86819 13.4588 3.97727 13.4583H8.51344V14.1667H3.97798ZM11.6606 11.0068L11.1633 10.4968L12.8059 8.85417H6.51098V8.14583H12.8059L11.1626 6.5025L11.6599 5.99392L14.1666 8.5L11.6606 11.0068Z" fill="#4A5568"/>
                          </svg> Keluar</a></li>
              </ul>
            </div>
        </div>
    </div>
</nav>

<style>
/* Dropdown Styles */
.nav-item.dropdown {
    position: relative;
}
.dropdown-item svg {
    margin-right: 8px; /* Jarak antara ikon dan teks */
    vertical-align: middle; /* Posisikan SVG sejajar dengan teks */
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
