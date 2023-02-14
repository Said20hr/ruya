<x-guest-layout title="Web Development">
    <div class="w-full min-h-screen xl:p-8 p-2">
        <div class="w-full">
            <h2 class="mb-2">
            {{__('Web development')}}
            </h2>
            <p>
            {{__(' At Ruya, we specialize in delivering high-quality web development services to clients worldwide.
            Our team of expert web developers is dedicated to creating custom web applications that meet the unique needs and requirements of each of our clients.
            We use the latest technologies to ensure that our clients\' applications are robust, scalable, and user-friendly.
            Our goal is to help businesses and organizations enhance their online presence and achieve their objectives through innovative web solutions.')}}
            </p>
            <p class="mb-6">
                {{__('Take a look at some of our latest projects and see for yourself the level of expertise and attention to detail that we bring to each project.
                 Our portfolio speaks for itself and showcases the diverse range of industries and clients we have worked with.')}}
                 <br>
                 {{__('If you have any questions or would like to discuss a potential project with us, please don\'t hesitate to reach out.
                  Our team is ready to help bring your web development vision to life. Contact us today!')}}
            </p>
    </div>
        <div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
            @foreach($projects as $project)
                <div class="w-full mb-2">
                    <img class="rounded-md shadow-sm mb-4 object-cover w-full 2xl:max-w-[360px] border xl:max-w-[300px] border border-gray-100 xl:h-64" alt="" src="{{asset('storage/'.$project->primary_image)}}">
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
