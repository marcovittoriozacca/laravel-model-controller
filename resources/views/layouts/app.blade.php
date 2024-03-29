<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/js/app.js')
</head>
<body>
    {{-- header content --}}
    <header>
        @include('partials.header.header')
    </header>

    {{-- main content --}}
    <main>
        @yield('main')
    </main>

    {{-- footer content --}}
    <footer></footer>

</body>
</html>