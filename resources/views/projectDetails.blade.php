@extends('layout')

@section('title', 'projectDetails')


@section('content')

    <div class="container text-center imgCon">
        <div class="row">
            <div class="col">
                <img src="{{asset('storage/' . $project->image )}}" style="width: 600px">
            </div>
            <div class="col">
                <h1>{{$project->title}}</h1>
                <h2>{{$project->type}}</h2>
                <h3 class="position">@foreach ($project->authors as $author)
                        <a class="teamMemLink" href="/teamMember/{{$author->id}}">
                            <span>{{ $author->name }}</span>@if (!$loop->last),
                            @endif
                            @endforeach
                        </a>
                </h3>
                <h5 class="aboutTitle text-break">{{$project->abstract}}</h5>
                <div class="about text-break">
                    {{$project->body}}
                </div>
            </div>
        </div>
        <div class="row publ">
            <h2><a href="{{$project->link}}" style="text-decoration: none;color: #1775bb">Link to project website</a>
            </h2>
        </div>
    </div>

@endsection
