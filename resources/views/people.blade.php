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
                            <img class="rounded-circle mx-auto d-inline-block shadow-sm" src="{{asset('storage/' . $team_member->image )}}" alt="">
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
                            <li class="contacts"><i class="bi bi-linkedin"></i> {{$team_member->linkedIn}} </a></li>
                            <li class="contacts"><i class="bi bi-envelope"></i> <a class="email-link" href="mailto:email@email.com">{{$team_member->email}} </a></li>
                            <li class="contacts"><i class="bi bi-telephone"></i> {{$team_member->phone_number}} </a></li>
                        </ul><!--//social-list-->
                    </div><!--//card-footer-->
                </div><!--//card-->
            </div><!--//col-->
            @endforeach
    </div>

</section>


@endsection
