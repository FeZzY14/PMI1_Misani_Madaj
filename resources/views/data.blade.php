@extends('layout')

@section('title', 'publications')


@section('content')

    <div class="container">

            <div class="card  publCard">
                <div class="card-body">
                    <h5 class="card-title"><h2>Data for download</h2></h5>
                    @foreach($data as $info)
                    <h6 class="card-subtitle mb-2 text-muted">
                        {{$info->title}}
                    </h6>
                    <p class="card-text">
                        @if ($info->file) <!-- Check if the file exists -->
                        <a href="{{ Storage::url($info->file) }}" class="btn btn-primary" download>Download</a>
                        @else
                            <button class="btn btn-secondary" disabled>Download unavailable</button>
                        @endif
                    </p>
                        <hr>
                    @endforeach
                    <small class="text-muted">Please ensure proper attribution by citing this website as a reference when using or distributing the downloaded materials.</small>
                </div>

            </div>
    </div>

@endsection
