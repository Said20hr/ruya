<x-guest-layout title="Visuals">
    <div class="w-full min-h-screen xl:px-10 xl:py-4 p-2 container">
        <div class="grid grid-cols-3">
           @foreach($projects as $project)
                <div class="relative w-full group transition duration-600 ease-in-out transition-all duration-1000 ease-in-out">
                    <img class="rounded-md shadow-sm mb-4 object-cover w-full 2xl:max-w-[360px] border xl:max-w-[300px] border border-gray-100 xl:h-48 2xl:h-64" alt="{{$project->slug}}" src="{{asset('storage/'.$project->primary_image)}}">
                    <a href="{{route('portfolio',$project->slug)}}" class="inset-0 absolute bg-white bg-opacity-60 transition-all duration-1000 ease-in-out items-center justify-center my-8 items-center hidden group-hover:flex">
                        <div class="project-text-holder">
                            <div class="text-center">
                                <h2>{{$project->title}}</h2>
                                <p class="text-red-500 bg-transparent text-lg">{{$project->excerpt}}</p>
                            </div>
                        </div>
                    </a>
                </div>
           @endforeach

        </div>
    </div>
</x-guest-layout>
