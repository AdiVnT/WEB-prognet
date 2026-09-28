<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Game Community')</title>
    
    <!-- Memanggil file CSS (Menggunakan Vite / Asset Laravel) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <!-- Memanggil Navbar dari folder layouts/navbar.blade.php -->
    @include('layouts.navbar')

    <!-- Tempat untuk konten halaman utama -->
    <main class="container">
        @yield('content')
    </main>

</body>
</html>