<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <link rel="icon" href="{{Vite::asset('resources/images/logo tanpa text.png') }}" type="image/x-icon">
    <title>Unocos</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    @vite('resources/sass/app.scss')
</head>
<body>
    @include('layout-pagelogin.nav')
    <main class="content">
        @yield('content')
    </main>
    @include('layout-pagelogin.footer')

</body>
</html>
<style>
    .content {
    margin-top: 75px; /* Sesuaikan dengan kebutuhan */
    flex: 1; /* Membuat elemen content mengambil sisa ruang yang ada */

}

footer {
    /* Atur gaya footer di sini */
    margin-top: 20px; /* Menempatkan footer di bawah */
}
</style>


