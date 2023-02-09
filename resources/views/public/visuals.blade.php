<x-guest-layout title="Visuals">
    <div class="hero-full-wrapper">
        <div class="grid">
            <div class="gutter-sizer"></div>
            <div class="grid-sizer"></div>
           @foreach($projects as $project)
                <div class="grid-item">
                    <img class="img-responsive" alt="{{$project->slug}}" src="{{asset('storage/'.$project->primary_image)}}">
                    <a href="{{route('portfolio',$project->slug)}}" class="project-description">
                        <div class="project-text-holder">
                            <div class="project-text-inner">
                                <h3>{{$project->title}}</h3>
                                <p>{{$project->excerpt}}</p>
                            </div>
                        </div>
                    </a>
                </div>
           @endforeach

        </div>
    </div>
</x-guest-layout>
