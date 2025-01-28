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
                        @if(!empty($team_member->płhone_number))
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
                                <span>{{ $author->name }}</span>@if (!$loop->last)
                                    ,
                                @endif
                            @endforeach “{{ $publication->title }}”, {{ $publication->body }}
                            , {{ $publication->publication_date }}.
                        </div>
                    @endforeach
                </div>
            @endforeach

            <h2>Projects</h2>
            <h2>Teaching</h2>
        </div>
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
            <div class="col">
                <div class="lc-block card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                     lc-helper="background"
                     style="background: url(https://picsum.photos/1920/1080)  center / cover no-repeat;">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <div class="lc-block pt-5 mt-5 mb-4">
                            <div editable="rich">
                                <h2 class="display-6 lh-1 fw-bold">Short title, long jacket</h2>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut voluptatem cum vero
                                    obcaecati quod ipsam! Nostrum, molestias. Doloribus ut sapiente necessitatibus amet
                                    quaerat quidem eaque harum optio repellendus! Incidunt, cumque?</p>
                            </div>
                        </div>
                        <ul class="lc-block d-flex list-unstyled mt-auto ms-auto"><a
                                class="btn btn-link btn-sm text-white stretched-link" href="/projectDetails"
                                role="button">Read more</a>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="lc-block card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                     lc-helper="background"
                     style="background:url(https://picsum.photos/1920/1080)  center / cover no-repeat;">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <div class="lc-block pt-5 mt-5 mb-4">
                            <div editable="rich">
                                <h2 class="display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines
                                </h2>
                                <p>description</p>
                            </div>
                        </div>
                        <ul class="lc-block d-flex list-unstyled mt-auto ms-auto"><a
                                class="btn btn-link btn-sm text-white stretched-link" href="/projectDetails"
                                role="button">Read more</a>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="lc-block card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                     lc-helper="background"
                     style="background:url(https://picsum.photos/1920/1080)  center / cover no-repeat;">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <div class="lc-block pt-5 mt-5 mb-4">
                            <div editable="rich">
                                <h2 class="display-6 lh-1 fw-bold">Another longer title belongs here</h2>
                                <p>description</p>
                            </div>
                        </div>
                        <ul class="lc-block d-flex list-unstyled mt-auto ms-auto"><a
                                class="btn btn-link btn-sm text-white stretched-link" href="/projectDetails"
                                role="button">Read
                                more</a></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
