@props(['title'])
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      x-cloak
      x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' || (window.matchMedia('(prefers-color-scheme: dark)').matches && localStorage.getItem('darkMode') !== 'false') }"
      x-init="$watch('darkMode', val => localStorage.setItem('darkMode', val))"
      x-bind:class="{'dark': darkMode === false || (darkMode === 'system' && window.matchMedia('(prefers-color-scheme: dark)').matches)}">
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Harmattan:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body {{ config('app.locale') == 'ar' ? " dir=rtl " : '' }} x-data="{OpenNavResponsive : false}" class="dark:bg-gray-900 duration-200 transition-colors" >
<main class="px-4" id="main-collapse">
    <div class="pt-20">
        {{ $slot }}
    </div>
</main>
<script>
    window.addEventListener('DOMContentLoaded', () => {
        const darkMode = localStorage.getItem('darkMode') === 'false';
        document.documentElement.classList.toggle('dark', darkMode);
        const lazyLoadImages = (element) => {
            const images = element.querySelectorAll('[data-src]');
            images.forEach(img => {
                img.addEventListener('load', () => {
                    img.removeAttribute('data-src');
                });
                img.setAttribute('src', img.getAttribute('data-src'));
                img.classList.remove('opacity-0');
            });
        }

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    lazyLoadImages(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        });

        const lazyLoad = document.querySelector('[x-data]');
        observer.observe(lazyLoad);
    });
</script>
@livewireScripts
</body>
</html>
