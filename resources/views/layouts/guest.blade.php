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
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body x-data="{OpenNavResponsive : false}" class="dark:bg-gray-900 duration-200 transition-colors" >
     <div class="xl:hidden fixed p-4 top-0 w-full dark:bg-gray-900 duration-200 transition-colors z-100" >
         <i class="fa fa-bars text-2xl cursor-pointer text-dark dark:text-white" x-on:click="OpenNavResponsive = !OpenNavResponsive"></i>
         <a href="{{route('visuals')}}" class="text-2xl ml-3 font-semibold dark:text-white">Ruya Studio</a>
     </div>
    <x-public.includes.sidebar/>

        <main class="px-4 xl:pl-56 pb-20 dark:bg-gray-900 duration-200 transition-colors" id="main-collapse">
            <header class="xl:flex hidden fixed top-0 h-16 px-4 border-b border-slate-200 dark:border-slate-800 w-full bg-white dark:bg-gray-900 duration-200 transition-colors">
                <div class="py-4 text-black">
                    <div class="relative inline-block w-12 select-none" x-data="{ toggle: darkMode }"
                         @click.prevent="toggle = ! toggle" x-on:click="darkMode =! darkMode">
                        <div :class="{'translate-x-full': toggle}"
                             class="absolute z-10 border-gray-800 block w-6 h-6 px-1 rounded-full bg-white border-4 cursor-pointer transition duration-500 transform"></div>
                        <div class="overflow-hidden bg-gray-800 h-6 w-full rounded-full cursor-pointer flex justify-between items-center p-px p-0.5">
                            <!-- feathericons -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5  text-yellow-400 fill-current" viewBox="0 0 24 24" >
                                <path d="M0 0h24v24H0z" fill="none" />
                                <path d="M6.76 4.84l-1.8-1.79-1.41 1.41 1.79 1.79 1.42-1.41zM4 10.5H1v2h3v-2zm9-9.95h-2V3.5h2V.55zm7.45 3.91l-1.41-1.41-1.79 1.79 1.41 1.41 1.79-1.79zm-3.21 13.7l1.79 1.8 1.41-1.41-1.8-1.79-1.4 1.4zM20 10.5v2h3v-2h-3zm-8-5c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm-1 16.95h2V19.5h-2v2.95zm-7.45-3.91l1.41 1.41 1.79-1.8-1.41-1.41-1.79 1.8z" />
                            </svg>
                            <!-- material icons -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5  text-blue-300 fill-current" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                            </svg>
                        </div>
                        <input type="checkbox" class="hidden" aria-label="dark mode toggle" >
                    </div>
                </div>
            </header>
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
