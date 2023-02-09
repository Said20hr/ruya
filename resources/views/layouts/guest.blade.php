<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width,initial-scale=1" name="viewport">

    <meta content="" name="description">
    <meta name="google" content="" />
    <meta content="" name="author">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ruya Studio | {{$title ?? ''}}</title>
    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="{{asset('assets/icons/admin.svg')}}" rel="apple-touch-icon">
    <link href="{{asset('assets/icons/fav-1.svg')}}" rel="icon">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{asset('assets/css/main.82cfd66e.css')}}" rel="stylesheet">
</head>
<body>
    <x-public.includes.sidebar/>
        <main class="font-sans text-gray-900 antialiased" id="main-collapse">
            {{ $slot }}
            <script>
                document.addEventListener("DOMContentLoaded", function (event) {
                    masonryBuild();
                });
            </script>
        </main>

    <script>
        document.addEventListener("DOMContentLoaded", function (event) {
            navbarToggleSidebar();
            navActivePage();
        });
    </script>
    <script type="text/javascript" src="{{asset('assets/js/main.85741bff.js')}}"></script></body>
</body>
</html>
