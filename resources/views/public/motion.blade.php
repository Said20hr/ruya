<x-guest-layout title="Motion">
<div class="row">
    <div class="col-xs-12 section-container-spacer">
        <h1 class="mb-6">{{__('Motion Graphics')}}</h1>
        <p class="text-2xl leading-relaxed">
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

    @foreach($projects as $project)
        <div class="col-xs-12 col-md-4 section-container-spacer">
            <img class="img-responsive" alt="" src="{{asset('storage/'.$project->primary_image)}}">
            <h2>{{$project->title}}</h2>
            <p>{{$project->excerpt}}</p>
            <a href="{{route('portfolio',$project->slug)}}" class="btn btn-primary" title="">
                {{__('Case Study')}}
            </a>
            @if($project->link)
                <a href="{{$project->link}}" class="btn btn-primary" target="_blank">
                    {{__('Link')}}
                </a>
            @endif

        </div>
    @endforeach



</div>
</x-guest-layout>
