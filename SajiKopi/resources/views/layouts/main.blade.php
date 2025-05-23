<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Font-Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    {{-- Tailwind CSS --}}
    @vite('resources/css/app.css')

    <title>Saji Kopi | @yield('title')</title>
</head>
<body class="font-quicksand">
    @include('partials.navbar')
    <div>
        @yield('container')
    </div>
</body>
</html>