<x-guest-layout title="{{$project->title}}">
    <div class="w-full min-h-screen xl:px-10 xl:py-4 p-2 container">
        <div class="mb-10">
            <h2 class="mb-2">{{$project->title}}</h2>
            <p>{{$project->excerpt}}</p>
        </div>
        <div class="mb-12">
            <img class="w-1/3 h-1/3 rounded-md shadow object-cover" alt="" src="{{asset('storage/'.$project->primary_image)}}">
        </div>
        @if($project->additional_images)
        <section class="inline-block py-2 px-4 bg-gray-200 rounded-md h-full w-full">
            <div class="grid xl:grid-cols-3 grid-cols-1 gap-6 mt-4 !h-full">
                @foreach( json_decode($project->additional_images,true) as $image)
                    <img class="rounded-md shadow-sm mb-4 object-cover w-full 2xl:max-w-[360px] border xl:max-w-[300px] border border-gray-100 xl:h-full" alt="{{$image}}" src="{{asset('storage/'.$image)}}">
                @endforeach
            </div>
        </section>
        @endif
        <div class="container max-w-7xl">
                <p class="">
                    {!! $project->description  !!}
                </p>
            </div>
    </div>
</x-guest-layout>
