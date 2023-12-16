<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.15.1/css/pro.min.css" />
    @vite('resources/css/app.css')
    <title>Le France Course | {{ $title }}</title>
</head>

<body>

    @include('partials.navbar')

    <div class="mx-auto w-full">
        @yield('container')
    </div>

    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
</body>
@include('partials.footer')
</html>