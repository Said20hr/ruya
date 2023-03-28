<x-guest-layout title="{{$project->title}}">
    <div class="w-full min-h-screen xl:px-10 xl:py-4 p-2 container">
        <div class="mb-10">
            <h2 class="mb-2">{{$project->title}}</h2>
            <p>{{$project->excerpt}}</p>
        </div>

        <div class="mx-auto w-4/5">
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
                            <li uk-slideshow-item="{{$loop->index}}" class="mb-3"><a href="#"><img src="{{asset('storage/'.$image)}}" width="120" height="80" class="h-16 border-slate-200 border shadow rounded-md" alt="{{$image}}"></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
        </div>
        <div class="container max-w-7xl">
                <p class="">
                    {!! $project->description  !!}
                </p>
            </div>
    </div>
</x-guest-layout>
