@extends('layout')

@section('title', 'people')

@section('content')



<section class="team-section py-10">
    <div class="container">
        <div class="row justify-content-center">
            @foreach($team_members as $team_member)
            <div class="team-col col-lg-6 rounded-circle">
                <div class="card-sl card border-0 pt-5 my-5 position-relative teamCard">
                    <a href="/teamMember/{{$team_member->id}}" class="Person-link stretched-link" style="position: relative">
                    <div class="card-body p-4">
                        <div class="member-profile position-absolute w-100 text-center">
                            @if(empty($team_member->image))
                                <img  src="https://placehold.co/1200x1200?text={{$team_member->name}}" class="rounded-circle mx-auto d-inline-block shadow-sm"
                                      alt="{{ $team_member->title }}">
                            @else
                                <img class="rounded-circle mx-auto d-inline-block shadow-sm"
                                     src="{{asset('storage/' . $team_member->image )}}" alt="">
                            @endif
                        </div>
                        <div class="card-text pt-1">
                            <h3 class="member-name mb-0 text-center font-weight-bold">
                                {{$team_member->name}}
                            </h3>
                            <div class="mb-3 text-center">{{$team_member->position}}</div>
                            <div>{{$team_member->about}}</div>
                        </div>
                    </div><!--//card-body-->
                    </a>
                    <div class="card-footer theme-bg-primary border-0 text-center">
                        <ul class="social-list list-inline mb-0 mx-auto">
                            @if(!empty($team_member->linkedIn))
                                <li class="contacts"><i class="bi bi-linkedin"></i> <a href="{{ $team_member->linkedIn }}"
                                                                                       target="_blank">LinkedIn</a></li>
                            @endif

                            @if(!empty($team_member->researchgate))
                                <li class="contacts">
                                    <img src="https://help.researchgate.net/hc/theming_assets/01HZPWT1CS5WRP04ZJX0DM6135"
                                         alt="" style="width: 30px">
                                    <a href="{{ $team_member->researchgate }}" target="_blank">Research Gate</a>
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
                    </div><!--//card-footer-->
                </div><!--//card-->
            </div><!--//col-->
            @endforeach
    </div>

</section>


@endsection
