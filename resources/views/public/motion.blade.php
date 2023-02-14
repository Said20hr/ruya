<x-guest-layout title="Motion">
    <div class="w-full min-h-screen xl:p-8 p-2">
        <div class="w-full">
            <h2 class="mb-2">{{__('Motion Graphics')}}</h2>
            <p class="mb-12">
                {{__('At Ruya, we pride ourselves on delivering top-notch custom motion graphics services to clients all around the world.
                      Our team of skilled professionals is dedicated to creating visually stunning and impactful designs that will elevate your brand
                      and communicate your message effectively.')}}
                <br>
                {{__('We would like to share with you some of our latest projects that showcase our expertise and attention to detail.
                      Take a look and be inspired by the possibilities.')}}
                <br>
                {{__(' If you have any questions or would like to discuss a potential project with us,
                   please don\'t hesitate to reach out. We would be happy to help bring your vision to life. Contact us today!')}}
            </p>
        </div>
        <div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
            @foreach($projects as $project)
                <div class="w-full mb-2">
                    <img class="rounded-md shadow-sm mb-4 object-cover w-full 2xl:max-w-[360px] border xl:max-w-[300px] border border-gray-100 xl:h-48 2xl:h-64" alt="" src="{{asset('storage/'.$project->primary_image)}}">
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
