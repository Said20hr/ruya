<x-guest-layout title="Dev">
<div class="row">
    <div class="col-xs-12 section-container-spacer">
        <h1 class="mb-6">
            {{__('Web development')}}
        </h1>
        <p class="text-2xl leading-relaxed">
            {{__(' At Ruya, we specialize in delivering high-quality web development services to clients worldwide.
            Our team of expert web developers is dedicated to creating custom web applications that meet the unique needs and requirements of each of our clients.
            We use the latest technologies to ensure that our clients\' applications are robust, scalable, and user-friendly.
            Our goal is to help businesses and organizations enhance their online presence and achieve their objectives through innovative web solutions.')}}
        </p>
        <p class="text-2xl leading-relaxed">
            {{__('Take a look at some of our latest projects and see for yourself the level of expertise and attention to detail that we bring to each project.
            Our portfolio speaks for itself and showcases the diverse range of industries and clients we have worked with.')}}
            <br>
            {{__('If you have any questions or would like to discuss a potential project with us, please don\'t hesitate to reach out.
            Our team is ready to help bring your web development vision to life. Contact us today!')}}
        </p>
    </div>
  @foreach($projects as $project)
        <div class="col-xs-12 col-md-4 section-container-spacer">
            <img class="h-96 object-cover bg-gray-200 w-full object-center" alt="" src="{{asset('storage/'.$project->primary_image)}}">
            <h4>{{$project->title}}</h4>
            <p>{{$project->excerpt}}</p>
            <a href="{{route('portfolio',$project->slug)}}" class="btn btn-primary border">
                {{__('Case Study')}}
            </a>
            @if($project->link)
                <a href="{{$project->link}}" class="btn btn-default px-6" target="_blank">
                    {{__('Link')}}
                </a>
            @endif

        </div>
  @endforeach

</div>
</x-guest-layout>
