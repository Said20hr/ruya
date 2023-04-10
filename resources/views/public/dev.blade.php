<x-guest-layout title="Web Development">
    <div class="w-full min-h-screen xl:px-10 xl:py-12 p-2 container">
        <div class="w-full text-center mb-12">
            <h2 class="mb-8 text-4xl">
            {{__('Web development')}}
            </h2>
            <p>
            {{__(' Ruya specializes in providing high-quality web development services to clients worldwide. Our expert team creates custom web
             applications tailored to each client\'s unique needs and requirements, using the latest technologies to ensure robust, scalable, and user-friendly applications. Our goal is to help businesses enhance their online presence and achieve their objectives through innovative web solutions.
             Check out our portfolio to see the diverse industries and clients we have worked with. Contact us today to discuss your web development vision..')}}
            </p>
            <div class="max-w-sm mx-auto flex justify-center my-12">
                <button class="w-full py-3 px-6 text-white hover:bg-opacity-80 bg-dark rounded-full">{{__('Get quote')}}</button>
            </div>
    </div>
        <div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
            @foreach($projects as $project)
                <div class="w-full mb-2" x-data="{ lazyLoad: [] }">
                    <img class="rounded-md shadow-sm mb-4 object-cover object-center w-full 2xl:max-w-[360px] border xl:max-w-[300px] border border-gray-100 xl:h-54 hover:scale-105 transition cursor-pointer ease-in-out duration-600" alt="" src="{{asset('storage/'.$project->primary_image)}}">
                    <div class="px-1">
                        <div class="2xl:text-xl text-sm">{{$project->title}}</div>
                        @if($project->excerpt)
                            <p>{{$project->excerpt}}</p>
                        @else
                            <p>See details...</p>
                        @endif
                        <a href="{{route('portfolio',$project->slug)}}" class="btn-primary" title="">
                            {{__('Case Study')}}
                        </a>
                        @if($project->link)
                            <a href="{{$project->link}}" class="btn btn-primary-outline mx-4" target="_blank">
                                {{__('Link')}}
                            </a>
                        @endif
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</x-guest-layout>
