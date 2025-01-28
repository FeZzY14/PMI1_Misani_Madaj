@extends('layout')

@section('title', 'publications')


@section('content')

    <div class="container">
        @foreach($data as $info)
            <div class="card  publCard">
                <div class="card-body">
                    <h5 class="card-title"><h2>{{$info->title}}</h2></h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        V databaze sa nachadzaju udaje o ....
                    </h6>
                    <p class="card-text">
                        @if ($info->file) <!-- Check if the file exists -->
                        <a href="{{ Storage::url($info->file) }}" class="btn btn-primary" download>Stiahnuť dáta</a>
                        @else
                            <button class="btn btn-secondary" disabled>Žiadne dáta na stiahnutie</button>
                        @endif
                    </p>
                    <small class="text-muted">V pripade použitia údajov citujte.</small>
                </div>
                @endforeach
            </div>
    </div>

@endsection
