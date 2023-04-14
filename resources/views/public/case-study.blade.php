<x-layout.errors title="{{$project->name }}">
    <header class="z-50 h-fit absolute top-0 border-b border-slate-200 dark:border-slate-800 w-full bg-white dark:bg-gray-900 duration-200 transition-colors">
        <div class="container justify-between xl:px-20 px-4 flex items-center pt-2 pb-3">
            <a  href="{{url('/')}}" title="home">
                <img class="object-fit 2xl:w-24 xl:w-20 w-12 dark:hidden flex" alt="Logo" src="{{asset('assets/icons/Ruya Branding full Logo.png')}}">
                <img class="object-fit 2xl:w-24 xl:w-20 w-12 hidden dark:flex" alt="Logo" src="{{asset('assets/icons/Logo-white.png')}}">
            </a>
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
                                <a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}"  x-show="language !='Arabic'" type="button"
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

    <div class="w-full min-h-screen xl:px-20 xl:py-4 p-2 container">
        <div class="mb-6 text-center">
            <h2 class="mb-8 text-4xl dark:text-white">{{$project->name }}</h2>
            <p class="dark:text-gray-200 text-lg">{{$project->excerpto }}</p>
        </div>
        <div class="mx-auto p-4">
        @if($project->additional_images)
            <div class="uk-position-relative rounded-xl" uk-slideshow="animation: fade">
                <ul class="uk-slideshow-items rounded-xl">
                    @foreach( json_decode($project->additional_images,true) as $image)
                    <li>
                        <img src="{{asset('storage/'.$image)}}" class="object-cover rounded-xl" alt="{{$image}}" uk-cover>
                    </li>
                    @endforeach
                </ul>
                <div class="uk-position-bottom-center uk-position-small">
                    <ul class="uk-thumbnav">
                        @foreach( json_decode($project->additional_images,true) as $image)
                            <li uk-slideshow-item="{{$loop->index}}" class="mb-3"><a href="#"><img src="{{asset('storage/'.$image)}}" width="120" height="80" class="object-cover h-16 border-slate-200 border shadow rounded-md" alt="{{$image}}"></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
        </div>
        <div class="container max-w-7xl">
            <div class="dark:text-gray-200 text-gray-800">
                {!! $project->description  !!}
            </div>
            <div class="flex justify-center py-12">
                <a href="{{ URL::previous() }}" class="btn btn-primary z-50 relative">
                    {{__('Return back')}}
                </a>
            </div>
        </div>
    </div>

</x-layout.errors>
