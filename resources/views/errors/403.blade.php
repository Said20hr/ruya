<x-layout.errors title="{{__('Page not found')}}">
    <main class="min-h-screen py-12">
        <div class="max-w-xl mx-auto my-auto flex items-center justify-center my-auto">
            <div class="row justify-content-center">
                <div class="text-center relative z-100">
                    <div class="absolute w-full h-full">
                        <img src="{{asset('assets/icons/Ruya Branding full Logo.png')}}" alt="Logo" class="w-48 dark:hidden mx-auto">
                        <img src="{{asset('assets/icons/Logo-white.png')}}" alt="Logo" class="w-48 hidden dark:flex mx-auto">
                    </div>
                    <div class="text-dark dark:text-yellow-400 font-semibold mb-3 font-manic text-6xl pt-40">
                        {{__('Error 403')}}
                    </div>
                    <h2 class="text-dark dark:text-gray-200 uppercase font-bold text-2xl my-3">
                        {{__('Page not found')}}
                    </h2>
                    <p class="lead my-7 text-dark dark:text-gray-300">
                        {{__('The page you are trying to view does not exist or another error has occurred. You can return to the homepage if you wish.')}}
                    </p>
                    <a href="{{ route('home',config('app.locale') ) }}" class="btn btn-primary z-50 relative">
                        {{__('Return to homepage')}}
                    </a>
                </div>
            </div>
        </div>
    </main>
</x-layout.errors>
