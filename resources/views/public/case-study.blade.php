<x-guest-layout>
    <div class="row">
        <div class="col-xs-12 col-md-8">

            <div class="section-container-spacer">
                <h1>{{$project->title}}</h1>
                <p>{{$project->excerpt}}</p>
            </div>

            <div class="section-container-spacer">
                <p><img class="img-responsive" alt="" src="{{asset('storage/'.$project->primary_image)}}"></p>
                <div class="row">
                    @if($project->additional_images)
                    @foreach( json_decode($project->additional_images,true) as $image)
                    <div class="col-xs-12 col-md-6">
                        <p><img class="img-responsive" alt="{{$image}}" src="{{asset('storage/'.$image)}}"></p>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>

            {!! $project->description  !!}
        </div>

    </div>
</x-guest-layout>
