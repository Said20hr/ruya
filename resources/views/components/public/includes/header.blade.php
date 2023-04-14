<header class="z-50 xl:flex hidden fixed top-0 h-16 px-4 border-b border-slate-200 dark:border-slate-800 w-full
bg-white dark:bg-gray-900 duration-200 transition-colors">
    <div class="py-4 items-center w-full {{ config('app.locale') == 'ar' ? " pl-64" : 'pr-64' }}  text-black flex justify-between">
        <div class="relative inline-block w-12 select-none" x-data="{ toggle: darkMode }"
             @click.prevent="toggle = ! toggle" x-on:click="darkMode =! darkMode">
            <div :class="{'{{ config('app.locale') == 'ar' ? "-translate-x-full " : 'translate-x-full' }} ': toggle}"

                 class="absolute z-10 border-gray-800 block w-6 h-6 px-1 rounded-full bg-white border-4 cursor-pointer transition duration-500
                 transform"></div>
            <div class="overflow-hidden bg-gray-800 h-6 w-full rounded-full cursor-pointer flex justify-between items-center p-px p-0.5">
                <!-- feathericons -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 px-0.5 text-yellow-400 fill-current" viewBox="0 0 24 24" >
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
        <div class="flex items-center gap-x-2">
            <div x-data="{'dropdown' : false,language : 'Français' }" class="px-4 relative my-2 dark:text-white text-gray-700 lg:text-xs 2xl:text-base xl:text-base text-base">
                <button x-cloak="" x-on:click="dropdown = !dropdown" type="button" class="mr-4 xl:py-2 py-1 xl:px-3 flex items-center border rounded-md">
                    @switch(config('app.locale') )
                        @case('ar')
                            <img src="{{asset('assets/icons/dz.png')}}" alt="ar" class="w-7 h-5 object-cover">
                            @break
                        @case('fr')
                            <img src="{{asset('assets/icons/fr.png')}}" alt="fr" class="w-7 h-5 object-cover">
                            @break
                        @case('en')
                            <img src="{{asset('assets/icons/en.svg')}}" alt="en" class="w-7 h-5 object-cover">
                            @break
                    @endswitch
                    <div class="mx-2 dark:text-white text-base uppercase">
                        {{ config('app.locale') }}
                    </div>
                </button>
                <div x-cloak="" x-show="dropdown" class="absolute dark:bg-slate-900 bg-white border rounded-sm dark:border-slate-700 border-slate-200  w-full left-0 mt-3 z-990">
                    @foreach(config('app.available_locales') as $locale)
                        @if($locale != config('app.locale'))
                            <a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), ['locale' => $locale]) }}"  x-show="language !='Arabic'" type="button"
                               class="w-full px-4 py-3 hover:bg-slate-200 w-fit dark:hover:bg-gray-700 border-b dark:border-gray-800 border-slate-300 text-gray-700 flex items-center lg:text-xs 2xl:text-sm xl:text-sm text-sm">
                                @switch(strtolower($locale))
                                    @case('ar')
                                        <img src="{{asset('assets/icons/dz.png')}}" alt="ar" class="w-6 h-4 object-cover">
                                        @break
                                    @case('fr')
                                        <img src="{{asset('assets/icons/fr.png')}}" alt="fr" class="w-6 h-4 object-cover">
                                        @break
                                    @case('en')
                                        <img src="{{asset('assets/icons/en.svg')}}" alt="en" class="w-6 h-4 object-cover">
                                        @break
                                @endswitch
                                <div class="mx-2 dark:text-white text-base uppercase">
                                    {{ $locale }}
                                </div>
                            </a>
                        @endif

                    @endforeach

                </div>
            </div>
         @guest
                <a href="{{route('voyager.login')}}" class="btn btn-primary">{{__('Login')}}</a>
         @endguest
            @auth
                <a href="{{route('voyager.dashboard')}}" class="btn btn-primary">{{__('Dashboard')}}</a>
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <x-jet-dropdown-link href="{{ route('logout') }}" class="btn btn-primary-outline"
                                         @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-jet-dropdown-link>
                </form>
            @endauth
        </div>
    </div>
</header>
