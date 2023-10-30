<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mangaku</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Mangaku</h1>

    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/bookmark">Bookmark</a></li>
            <li><a href="/index">Tambah</a></li>
            <li><a href="/profil">Profil</a></li>
            <li><a href="/register">Register</a></li>
        </ul>
    </nav>

    @yield('content')

</body>

</html>
