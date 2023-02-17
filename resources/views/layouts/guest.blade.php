@props(['title'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="{{setting('site.keywords')}}">
    <meta name="description" content="Creative Motion and web Agency, {{setting('site.description')}}">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="author" content="{{setting('site.author')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ruya Studio | {{$title}}</title>
    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:400,700|Source+Sans+Pro:400,700">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{asset('assets/icons/admin.svg')}}" rel="apple-touch-icon">
    <link href="{{asset('assets/icons/fav-1.svg')}}" rel="icon">
    <!-- Scripts -->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-256997728-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-256997728-1');
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body x-data="{OpenNavResponsive : false}" >
     <div class="xl:hidden fixed p-4 top-0 w-full bg-white z-990" >
         <i class="fa fa-bars border px-1.5 py-1 rounded-sm border-gray-200 cursor-pointer bg-gray-100" x-on:click="OpenNavResponsive = !OpenNavResponsive"></i>
         <a href="{{route('visuals')}}" class="navbar-brand">Ruya Studio</a>
     </div>
    <x-public.includes.sidebar/>
        <main class=" xl:pl-56 xl:mt-2 my-20 pb-20" id="main-collapse">
            {{ $slot }}
        </main>


</body>
</html>
