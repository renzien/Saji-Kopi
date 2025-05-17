<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Tailwind CSS --}}
    @vite('resources/css/app.css')

    <title>Saji Kopi | @yield('title')</title>
</head>
<body>
    @include('partials.navbar')
    <div>
        @yield('container')
    </div>
</body>
</html>