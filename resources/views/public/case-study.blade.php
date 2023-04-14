<x-layout.errors title="{{$project->name }}">
    <header class="z-50 h-fit absolute top-0 border-b border-slate-200 dark:border-slate-800 w-full bg-white dark:bg-gray-900 duration-200 transition-colors">
        <div class="container justify-between xl:px-20 px-4 flex items-center pt-2 pb-3">
            <a  href="{{url('/')}}" title="home">
                <img class="object-fit 2xl:w-24 w-20 xl:w-20 dark:hidden flex" alt="Logo" src="{{asset('assets/icons/Ruya Branding full Logo.png')}}">
                <img class="object-fit 2xl:w-24 w-20 xl:w-20 hidden dark:flex" alt="Logo" src="{{asset('assets/icons/Logo-white.png')}}">
            </a>
            @if($project->category)
                <a href="{{ route($project->category->slug) }}" class="xl:hidden flex btn btn-primary z-50 relative">
                    {{__('Return back')}}
                </a>
            @else
                <a href="{{ URL::previous() }}" class="xl:hidden flex btn btn-primary z-50 relative">
                    {{__('Return back')}}
                </a>
            @endif

            <div class="xl:flex items-center gap-x-2 hidden">
                
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
        <div class="my-6 text-center">
            <h2 class="mb-8 text-5xl dark:text-white">{{$project->name }}</h2>
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
                @if($project->category)
                    <a href="{{ route($project->category->slug) }}" class="btn btn-primary z-50 relative">
                        {{__('Return back')}}
                    </a>
                @else
                    <a href="{{ URL::previous() }}" class="btn btn-primary z-50 relative">
                        {{__('Return back')}}
                    </a>
                @endif
            </div>
        </div>
    </div>

</x-layout.errors>
