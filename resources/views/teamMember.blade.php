@extends('layout')

@section('title', 'teamMember')

@section('content')

    <div class="container text-center imgCon">
        <div class="row">
            <div class="col">
                <img class="rounded-circle mx-auto d-inline-block shadow-sm memImage"
                     src="{{asset('storage/' . $team_member->image )}}">
            </div>
            <div class="col">
                <h1>{{$team_member->name}}</h1>
                <h3 class="position">{{$team_member->position}}</h3>
                <h2 class="aboutTitle">About</h2>
                <div class="about">
                    {{$team_member->about}}
                </div>
                <div class="card-footer theme-bg-primary border-0 text-center">
                    <ul class="social-list list-inline mb-0 mx-auto">
                        @if(!empty($team_member->linkedIn))
                            <li class="contacts"><i class="bi bi-linkedin"></i> <a href="{{ $team_member->linkedIn }}"
                                                                                   target="_blank">LinkedIn</a></li>
                        @endif

                        @if(!empty($team_member->researchGate))
                            <li class="contacts">
                                <img src="https://help.researchgate.net/hc/theming_assets/01HZPWT1CS5WRP04ZJX0DM6135"
                                     alt="" style="width: 30px">
                                <a href="{{ $team_member->researchGate }}" target="_blank">Research Gate</a>
                            </li>
                        @endif

                        @if(!empty($team_member->orcid))
                            <li class="contacts">
                                <img src="https://www.svgrepo.com/show/314412/orcid.svg" alt="" style="width: 30px">
                                <a href="{{ $team_member->orcid }}" target="_blank">ORCID</a>
                            </li>
                        @endif

                        @if(!empty($team_member->email))
                            <li class="contacts">
                                <i class="bi bi-envelope"></i>
                                <a class="email-link"
                                   href="mailto:{{ $team_member->email }}">{{ $team_member->email }}</a>
                            </li>
                        @endif
                        @if(!empty($team_member->phone_number))
                            <li class="contacts"><i class="bi bi-telephone"></i> {{$team_member->phone_number}}
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <div class="row publ text-start">
            <h2>Publications</h2>
            @foreach ($groupedPublications as $year => $publications)
                <h3>
                    <a class="YearLink" data-bs-toggle="collapse" href="#collapse-{{ $year }}" role="button"
                       aria-expanded="false" aria-controls="collapse-{{ $year }}">
                        {{ $year }} <img src="/assets/caret-down-fill.svg" class="LinkArrow" alt="Arrow" width="32"
                                         height="32">
                    </a>
                </h3>

                <div class="collapse" id="collapse-{{ $year }}">
                    @foreach ($publications as $publication)
                        <div>
                            @foreach ($publication->authors as $author)
                                <span>{{ $author->name }}</span>@if (!$loop->last),
                                @endif
                            @endforeach “{{ $publication->title }}”, {{ $publication->body }}
                            , {{ $publication->publication_date }}.
                        </div>
                    @endforeach
                </div>
            @endforeach


            <h2>Projects</h2>
            @foreach ($groupedProjects as $year => $projects)
                <h3>
                    <a class="YearLink" data-bs-toggle="collapse" href="#collapse-p-{{ $year }}" role="button"
                       aria-expanded="false" aria-controls="collapse-p-{{ $year }}">
                        {{ $year }} <img src="/assets/caret-down-fill.svg" class="LinkArrow" alt="Arrow" width="32"
                                         height="32">
                    </a>
                </h3>

                <div class="collapse" id="collapse-p-{{ $year }}">
                    @foreach ($projects as $project)
                        <div>
                            @foreach ($project->authors as $author)
                                <div>
                                    <a class="teamMemLink" href="/teamMember/{{$author->id}}">
                                        <span>{{ $author->name }}</span>@if (!$loop->last)
                                            ,
                                        @endif
                                    </a>
                                </div>
                            @endforeach
                            <p class="link-dark text-decoration-none h3 mb-0">{{$project->title}}</p>
                            <p class="text-truncate mb-2">{{$project->abstract}}</p>
                            <a class="btn btn-sm btn-primary projectButton mt-0" href="/projectDetails/{{$project->id}}"
                               target="_self">Read More</a>
                        </div>
                        <hr>
                    @endforeach
                </div>
            @endforeach
            <h2>Teaching</h2>
            <span class="h5">
                @foreach($team_member->teachings as $teaching)
                    {{ $teaching->title }}{{ !$loop->last ? ', ' : '' }}
                @endforeach
            </span>
        </div>
    </div>

@endsection
