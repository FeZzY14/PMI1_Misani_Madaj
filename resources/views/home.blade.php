@extends('layout')

@section('title', 'home')

@section('content')

<div class="container">
    <div class="row">
        <div class="description">
            <h1 class="home_welcome">Who are we ?</h1>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique, dolore ea. Pariatur autem amet tempora delectus tenetur maiores perferendis deserunt quod sunt neque, quibusdam molestias illum veniam nobis quisquam alias?
        </div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://placehold.jp/30/1775bb/ffffff/600x400.png?text=placeholder+image"
                         class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h5 class="caption-title">Title</h5>
                        <p class="caption">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla est dolores laborum! Exercitationem, culpa quibusdam iusto fugit eaque magni. Labore alias sunt, provident adipisci expedita dolores. Nisi deleniti repudiandae debitis.

                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://placehold.jp/30/1775bb/ffffff/600x400.png?text=placeholder+image"
                         class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h5 class="caption-title">Title</h5>
                        <p class="caption">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia laborum aut animi facilis praesentium iste et, dicta neque ab ad sit, fugiat eos possimus eveniet facere quod, repudiandae quis alias.
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://placehold.jp/30/1775bb/ffffff/600x400.png?text=placeholder+image"
                         class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h5 class="caption-title">Title</h5>
                        <p class="caption">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate et iste autem voluptatum eos nihil culpa in, molestias eaque laudantium dolore nostrum dolores maiores reprehenderit hic sunt, dolorum, corporis esse.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://placehold.jp/30/1775bb/ffffff/600x400.png?text=placeholder+image"
                         class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h5 class="caption-title">Title</h5>
                        <p class="caption"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quia culpa itaque optio doloremque aliquam, reprehenderit suscipit quasi, minima facilis excepturi quibusdam, neque sed officiis. Corrupti et reiciendis ipsam aperiam?</p>
                    </div>
                </div>
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
</div>

@endsection