@extends('layout')

@section('title', 'projectDetails')


@section('content')
    <div class="container  imgCon">
        <!-- Centered Image at the Top -->
        <div class="row justify-content-center">
            <div class="col-md-8 img-fluid rounded">
                @if(empty($project->image))
                    <div class="ratio ratio-16x9">
                        <img src="https://placehold.co/100x100?text={{$project->title}}"
                             class="img-fluid rounded-5 object-fit-cover"
                             alt="{{ $project->title }}"  style="max-width: 100%; ">
                    </div>
                @else
                    <div class="ratio ratio-16x9">
                        <img class="img-fluid rounded-5 object-fit-cover"
                             loading="lazy"
                             src="{{ asset('storage/' . $project->image) }}"
                             alt="{{ $project->title }}"  style="max-width: 100%;">
                    </div>
                @endif
            </div>
        </div>

        <!-- Project Information -->
        <div class="row justify-content-center mt-4 ">
            <div class="col-md-8">
                <h1 class="text-center">{{$project->title}}</h1>
                <h2 class="text-center">{{$project->type}}</h2>

                <h3 class="position"> <span class="text-black">Authors:</span>
                    @foreach ($project->authors as $author)
                        <a class="teamMemLink" href="/teamMember/{{$author->id}}">
                            <span>{{ $author->name }}</span>@if (!$loop->last),
                            @endif
                        </a>
                    @endforeach
                </h3>

                <h2 class="aboutTitle text-break">
                    Abstract

                </h2>
                <button class="btn btn-primary projectButton mb-2" type="button" data-bs-toggle="collapse"
                        data-bs-target="#abstractCollapse">
                    Show Abstract
                </button>
                <div id="abstractCollapse" class="collapse">
                    <p>{{$project->abstract}}</p>
                </div>

                <h2 class="aboutTitle text-break"> Details </h2>
                <div class="about text-break">
                    {{$project->body}}
                </div>

                <div class="mt-4 text-center">
                    <h2><a href="{{$project->link}}" style="text-decoration: none;color: #1775bb">Link to project
                            website</a></h2>
                </div>
            </div>
        </div>
    </div>

@endsection
