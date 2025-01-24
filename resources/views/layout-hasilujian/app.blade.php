<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <link rel="icon" href="{{Vite::asset('resources/images/logo tanpa text.png') }}" type="image/x-icon">
    <title>Unocos</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    @vite('resources/sass/app.scss')
</head>
<body>
    @include('layout-hasilujian.nav')
    <main class="content">
        @yield('content')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @vite('resources/js/app.js')
</body>
</html>
<style>
    .content {
    margin-top: 75px; /* Sesuaikan dengan kebutuhan */
    flex: 1; /* Membuat elemen content mengambil sisa ruang yang ada */

}


</style>


