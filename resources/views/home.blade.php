@extends('layout')

@section('title', 'home')

@section('content')

    <div class="container">
        <div class="row">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    @foreach($teachings as $index => $teaching)
                        <button type="button"
                                data-bs-target="#carouselExampleCaptions"
                                data-bs-slide-to="{{ $index }}"
                                class="{{ $index == 0 ? 'active' : '' }}"
                                aria-current="{{ $index == 0 ? 'true' : 'false' }}"
                                aria-label="Slide {{ $index + 1 }}"></button>
                    @endforeach
                </div>
                <div class="carousel-inner rounded-5">
                    @foreach($teachings as $index => $teaching)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <div class="ratio ratio-16x9">
                                @if(empty($teaching->image))
                                    <img src="https://placehold.co/1000x5000?text=Project" class="d-block w-100" alt="{{ $teaching->title }}">
                                @else
                                    <img src="{{asset('storage/' . $teaching->image )}}" class="d-block w-100" alt="{{ $teaching->title }}">
                                @endif
                            </div>
                            <div class="carousel-caption">
                                <h5 class="caption-title">{{ $teaching->title }}</h5>
                                <p class="caption text-break">{{ $teaching->body }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <h1 class="team home_welcome">Our team</h1>

        <section class="team-section py-10">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach($team_members as $team_member)
                        @if($team_member->show_homepage)
                            <div class="team-col col-lg-6">
                                <div class="card-sl card border-0 pt-5 my-5 position-relative teamCard">
                                    <a href="/teamMember/{{ $team_member->id }}" class="Person-link stretched-link"
                                       style="position: relative">
                                        <div class="card-body p-4">
                                            <div class="member-profile position-absolute w-100 text-center">
                                                <img class="rounded-circle mx-auto d-inline-block shadow-sm"
                                                     src="{{asset('storage/' . $team_member->image )}}" alt="">
                                            </div>
                                            <div class="card-text pt-1">
                                                <h3 class="member-name mb-0 text-center font-weight-bold">
                                                    {{$team_member->name}}
                                                </h3>
                                                <div class="mb-3 text-center"> {{$team_member->position}}</div>
                                                <div class="text-break">{{$team_member->about}}</div>
                                            </div>
                                        </div><!--//card-body-->
                                    </a>
                                    <div class="card-footer theme-bg-primary border-0 text-center">
                                        <ul class="social-list list-inline mb-0 mx-auto">
                                            <li class="contacts"><i
                                                    class="bi bi-linkedin"></i> {{$team_member->linkedIn}} </a></li>
                                            <li class="contacts"><i class="bi bi-envelope"></i> <a class="email-link"
                                                                                                   href="mailto:email@email.com">{{$team_member->email}} </a>
                                            </li>
                                            <li class="contacts"><i
                                                    class="bi bi-telephone"></i> {{$team_member->phone_number}} </a>
                                            </li>
                                        </ul><!--//social-list-->
                                    </div><!--//card-footer-->
                                </div><!--//card-->
                            </div><!--//col-->
                        @endif
                    @endforeach
                </div>
            </div>
        </section>


        <h1 class="home_welcome description">Some of our projects</h1>
        <div class="row">
            <div class="publications-section container overflow-hidden">
                <div class="row gy-5">
                    @foreach($projects as $project)
                        <div class="col-12">
                            <div class="row align-items-center gy-3 gy-md-0 gx-xl-5">
                                <div class="col-xs-12 col-md-6">
                                    <div class="img-wrapper position-relative bsb-hover-push">
                                        <a href="/projectDetails/{{$project->id}}">
                                        <span
                                            class="badge rounded-pill text-bg-warning position-absolute top-0 start-0 m-3">{{$project->title}}</span>
                                            <img class="img-fluid rounded-5 w-100 h-100 object-fit-cover" loading="lazy"
                                                 src="{{asset('storage/' . $project->image )}}">
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
                                            <h2 class="h1 mb-3"><a class="link-dark text-decoration-none"
                                                                   href="/projectDetails/{{$project->id}}">{{$project->title}}</a></h2>
                                            <p class="mb-4 text-break">{{$project->abstract}}</p>
                                            <a class="btn btn-primary projectButton" href="/projectDetails/{{$project->id}}"
                                               target="_self">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                    <a class="btn btn-primary moreProjectsButtom text-center" href="/projects">All projects</a>

                    <h1 class="home_welcome public">Publications</h1>

                    @foreach($publications as $publication)
                        <div class="card  publCard">
                            <div class="card-body">
                                <h5 class="card-title"><h2>{{$publication->title}}</h2></h5>
                                <h6 class="card-subtitle mb-2 text-muted">
                                    @foreach ($publication->authors as $author)
                                        <a class="teamMemLink" href="/teamMember/{{$author->id}}">
                                            <span>{{ $author->name }}</span>@if (!$loop->last),
                                            @endif
                                            @endforeach
                                        </a>
                                </h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <small class="text-muted">{{$publication->publication_date}}</small>
                            </div>
                        </div>
                    @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
