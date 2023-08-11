<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'No title')</title>
</head>
<body class="body">

    <header>
        @include('layout.header')
    </header>

    <main>

        <h1>@yield('heading')</h1>

        @yield('content')

    </main>

    <footer>

        @include('layout.footer')

    </footer>
</body>
</html>