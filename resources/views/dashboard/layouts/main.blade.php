<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="styles.css">
    <!-- Feather Icon -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- Trix Editor -->
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <style>
      trix-toolbar [data-trix-button-group="file-tools"] {
        display: none;
      }
    </style>
</head>

<body>
    @include('dashboard.layouts.header')


    <div class="container">
        <div class="row">
            @include('dashboard.layouts.sidebar')
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('container')
            </main>
        </div>
    </div>

    <script>
      feather.replace();
    </script>
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
</body>

</html>