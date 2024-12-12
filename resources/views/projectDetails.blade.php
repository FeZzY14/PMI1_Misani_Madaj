@extends('layout')

@section('title', 'projectDetails')


@section('content')

<div class="container text-center imgCon">
    <div class="row">
      <div class="col">
        <img src="https://picsum.photos/1920/1080" style="width: 600px">
      </div>
      <div class="col">
        <h1>Title</h1>
        <h2>Type</h2>
        <h3 class="position">Author
        <h2 class="aboutTitle">Abstract</h2>
        <div class="about">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi amet tenetur aspernatur maiores, maxime quam necessitatibus ullam vero doloribus distinctio eius! Iure incidunt animi quas veritatis dolorem. Similique, perferendis iure.
        </div>
      </div>
    </div>
    <div class="row publ">
        <h2><a href="#" style="text-decoration: none;color: #1775bb" >Link to project website</a></h2>
    </div>
  </div>






@endsection
