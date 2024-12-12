@extends('layout')

@section('title', 'teamMember')

@section('content')

<div class="container text-center imgCon">
    <div class="row">
      <div class="col">
        <img class="rounded-circle mx-auto d-inline-block shadow-sm memImage" src="https://picsum.photos/1920/1080">
      </div>
      <div class="col">
        <h1>Name</h1>
        <h3 class="position">Position</h3>
        <h2 class="aboutTitle">About</h2>
        <div class="about">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi amet tenetur aspernatur maiores, maxime quam necessitatibus ullam vero doloribus distinctio eius! Iure incidunt animi quas veritatis dolorem. Similique, perferendis iure.
        </div>
        <div class="card-footer theme-bg-primary border-0 text-center">
            <ul class="social-list list-inline mb-0 mx-auto">
                <li class="contacts"><i class="bi bi-linkedin"></i> linked in </a></li>
                <li class="contacts"><i class="bi bi-envelope"></i> <a class="email-link" href="mailto:email@email.com">email address </a></li>
                <li class="contacts"><i class="bi bi-telephone"></i> phone number </a></li>
            </ul>
        </div>
      </div>
    </div>
    <div class="row publ text-start">
        <h2>Publications</h2>
        <h2><a class="YearLink" data-bs-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapse1">
        2020 <img src="/assets/caret-down-fill.svg" class="LinkArrow" alt="Arrow" width="32" height="32">
        </a></h2>
        <div class="collapse" id="collapse1">
            <div>
                W. Castellanos, J. C. Guerri, and P. Arce, “SVCEval-RA: an evaluation framework for adaptive scalable video streaming,” Multimedia Tools and Applications, vol. 76, no. 1, pp. 437-461, 2017.
            </div>
        </div>
        <h2><a class="YearLink" data-bs-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2">
        2018 <img src="/assets/caret-down-fill.svg" class="LinkArrow" alt="Arrow" width="32" height="32">
        </a></h2>
        <div class="collapse" id="collapse2">
            <div>
                W. Castellanos, J. C. Guerri, and P. Arce, “SVCEval-RA: an evaluation framework for adaptive scalable video streaming,” Multimedia Tools and Applications, vol. 76, no. 1, pp. 437-461, 2017.
            </div>
        </div>
        <h2><a class="YearLink" data-bs-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapse3">
        2016 <img src="/assets/caret-down-fill.svg" class="LinkArrow" alt="Arrow" width="32" height="32">
        </a></h2>
        <div class="collapse" id="collapse3">
            <div>
                W. Castellanos, J. C. Guerri, and P. Arce, “SVCEval-RA: an evaluation framework for adaptive scalable video streaming,” Multimedia Tools and Applications, vol. 76, no. 1, pp. 437-461, 2017.
            </div>
        </div>
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
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut voluptatem cum vero obcaecati quod ipsam! Nostrum, molestias. Doloribus ut sapiente necessitatibus amet quaerat quidem eaque harum optio repellendus! Incidunt, cumque?</p>
                            </div>
                        </div>
                        <ul class="lc-block d-flex list-unstyled mt-auto ms-auto"><a
                                class="btn btn-link btn-sm text-white stretched-link" href="/projectDetails" role="button">Read more</a>
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
                                class="btn btn-link btn-sm text-white stretched-link" href="/projectDetails" role="button">Read more</a>
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
                                class="btn btn-link btn-sm text-white stretched-link" href="/projectDetails" role="button">Read
                                more</a></ul>
                    </div>
                </div>
            </div>
    </div>
  </div>






@endsection
