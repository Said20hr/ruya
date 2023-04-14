<x-layout.errors title="{{$project->name }}">
    <div class="w-full min-h-screen xl:px-20 xl:py-4 p-2 container">
        <div class="mb-6 text-center">
            <h2 class="mb-8 2xl:text-5xl xl:text-4xl text-xl dark:text-white">{{$project->name }}</h2>
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
            <p class="dark:text-gray-200!">
                {!! $project->description  !!}
            </p>
            <div class="flex justify-center py-12">
                <a href="{{ URL::previous() }}}" class="btn btn-primary z-50 relative">
                    {{__('Return back')}}
                </a>
            </div>
        </div>
    </div>

</x-layout.errors>
