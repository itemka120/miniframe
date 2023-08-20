<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>

    <meta charset="utf-8">
    <title>@yield('title', 'No title')</title>
    <meta charset="utf-8">
    <link rel="icon" href="http://remember.loc/storage/img/centralized.png" type="image/png">
    <!-- Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="/resource/css/style.css" rel="stylesheet" >
</head>
<body data-plugin-page-transition>
<div class="container">
    <!-- Including header -->
        @include('layout.header')
    <!-- Including header -->
        @yield('content')
    <!-- Including header -->
        @include('layout.footer')
</div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>