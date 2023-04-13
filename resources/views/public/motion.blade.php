<x-guest-layout title="Motion">
    <div class="w-full min-h-screen xl:px-10 xl:py-12 p-2">
        <div class="w-full text-center mb-12">
            <h2 class="mb-8 text-4xl dark:text-white duration-200 transition-colors">{{__('Motion Graphics')}}</h2>
            <p class="mb-12 dark:text-gray-100 duration-200 transition-colors">
                {{__('Ruya provides exceptional custom motion graphics services
 to clients worldwide. Our team of skilled professionals creates visually stunning and impactful
designs that effectively communicate your brand\'s message. We take pride in our attention to detail and expertise, as demonstrated by our latest projects. Be inspired by the possibilities and reach out to us with any questions or to discuss your vision.
Let us help bring your brand to the next level. Contact us today!')}}
            </p>
            @livewire('quote',['type' => 'motion'])
        </div>
        <div class="grid xl:grid-cols-3 gap-8 2xl:grid-cols-3 md:grid-cols-1 sm:grid-cols-1 grid-cols-1">
            @foreach($projects as $project)
                <div class="w-full mb-2 w-fit uk-inline-clip uk-transition-toggle rounded-md h-full" x-data="{ lazyLoad: [] }">
                    <img class="uk-transition-scale-up uk-transition-opaque rounded-md shadow-sm mb-4 object-cover object-center w-full 2xl:max-w-[360px] border xl:max-w-[300px] border dark:border-gray-800 border-gray-100 xl:h-54" alt="" src="{{asset('storage/'.$project->primary_image)}}">
                    <div class="px-1">
                        <div class="2xl:text-xl text-sm dark:text-white font-semibold text-dark">{{$project->name}}</div>
                        @if($project->excerpto)
                            <p class="max-w-[400px] dark:text-gray-300">{{$project->excerpto}}</p>
                        @else
                            <p class="dark:text-gray-300">See details...</p>
                        @endif
                        <a href="{{route('portfolio',$project->slug)}}" class="btn-primary" title="">
                            {{__('Case Study')}}
                        </a>
                        @if($project->link)
                            <a href="{{$project->link}}" class="btn btn-primary-outline mx-4 dark:border-transparent" target="_blank">
                                {{__('Link')}}
                            </a>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-guest-layout>
