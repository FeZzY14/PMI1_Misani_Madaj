@extends('layout')

@section('title', 'publications')


@section('content')



<div class="container">
    @foreach($publications as $publication)
    <div class="card  publCard">
        <div class="card-body">
          <h5 class="card-title"><h2>{{$publication->title}}</h2></h5>
          <h6 class="card-subtitle mb-2 text-muted">
              @foreach ($publication->authors as $author)
              <a class="teamMemLink" href="/teamMember/{{$author->id}}">
                  <span>{{ $author->name }}</span>@if (!$loop->last), @endif
                  @endforeach
              </a>
          </h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <small class="text-muted">{{$publication->publication_date}}</small>
        </div>
    </div>
    @endforeach

</div>

@endsection
