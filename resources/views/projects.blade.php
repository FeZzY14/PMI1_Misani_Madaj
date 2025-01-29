@extends('layout')

@section('title', 'projects')


@section('content')

    <div class="publications-section container overflow-hidden">
        <div class="row gy-5">
            @foreach($projects as $project)
                <div class="col-12">
                    <div class="row align-items-center gy-3 gy-md-0 gx-xl-5">
                        <div class="col-xs-12 col-md-6">
                            <div class="img-wrapper position-relative bsb-hover-push">
                                <a href="/projectDetails/{{$project->id}}">
                                    @if(empty($project->image))
                                        <div class="ratio ratio-16x9">
                                            <img src="https://placehold.co/1200x12000?text={{$project->title}}"
                                                 class="img-fluid rounded-5 object-fit-cover"
                                                 alt="{{ $project->title }}">
                                        </div>
                                    @else
                                        <div class="ratio ratio-16x9">
                                            <img class="img-fluid rounded-5 object-fit-cover"
                                                 loading="lazy"
                                                 src="{{ asset('storage/' . $project->image) }}"
                                                 alt="{{ $project->title }}">
                                        </div>
                                    @endif
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div>
                                @foreach ($project->authors as $author)
                                    <a class="teamMemLink" href="/teamMember/{{$author->id}}">
                                        <span>{{ $author->name }}</span>@if (!$loop->last),
                                        @endif
                                        @endforeach
                                    </a>
                                    <h2 class="h1 mb-3 text-break"><a class="link-dark text-decoration-none"
                                                           href="/projectDetails/{{$project->id}}">{{$project->title}}</a>
                                    </h2>
                                <div class="text-truncate-container">
                                    <p class="mb-4 multiline-truncate">{{$project->abstract}}</p>
                                </div>

                                    <a class="btn btn-primary projectButton" href="/projectDetails/{{$project->id}}"
                                       target="_self">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row mt-5">
            <div class="col-12 d-flex flex-column align-items-center">
                <nav aria-label="Projects Pagination">
                    {{ $projects->links('pagination::bootstrap-5') }}
                </nav>
            </div>
        </div>

    </div>

@endsection
