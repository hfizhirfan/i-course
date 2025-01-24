<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{Vite::asset('resources/images/logo tanpa text.png') }}" type="image/x-icon">
    <title>Admin Unocos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/path-to-styles.css">
    @vite('resources/sass/app.scss')
</head>
<body>
    <div class="admin-layout">
        <div class="d-flex">
            @include('layout-admin.sidebar') <!-- Sidebar -->
            <main class="content">
                @yield('content') <!-- Konten halaman -->
            </main>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    </div>
</body>
</html>
<style>
    .content{
        margin-bottom: 30px;
    }
</style>
