<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('title')</title>
</head>
<body>
    @include('partials.nav')

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>&copy; 2025 Website Portfolio</p>
    </footer>
</body>
</html>
