<x-guest-layout title="Visuals">
    <div class="w-full min-h-screen xl:px-10 xl:py-4 p-2 container">
        <div class="grid xl:grid-cols-3 grid-cols-1 gap-8">
           @foreach($projects as $project)
                <div class="relative w-full group transition duration-600 ease-in-out transition-all duration-600 ease-in-out xl:h-48 2xl:h-64">
                    <img class="rounded-md shadow-sm object-cover w-full border dark:border-slate-800 border-gray-100 h-full" alt="{{$project->slug}}" src="{{asset('storage/'.$project->primary_image)}}">
                    <a href="{{route('portfolio',$project->slug)}}" class="w-full inset-0 h-full absolute dark:bg-slate-800 dark:bg-opacity-80 bg-white bg-opacity-80 transition transition-opacity duration-600 ease-in-out items-center justify-center hidden group-hover:flex">
                        <div class="project-text-holder">
                            <div class="text-center">
                                <h3>{{$project->title}}</h3>
                                <p class="text-red-500 bg-transparent text-base">{{$project->excerpt}}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-guest-layout>
