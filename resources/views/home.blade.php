@extends('layout')

@section('title', 'home')

@section('content')

    <div class="container">
        <div class="row">
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
                <div class="carousel-inner rounded-5">
                    <div class="carousel-item active">
                        <img src="https://placehold.jp/30/1775bb/ffffff/600x400.png?text=placeholder+image"
                            class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h5 class="caption-title">Title</h5>
                            <p class="caption">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla est dolores
                                laborum! Exercitationem, culpa quibusdam iusto fugit eaque magni. Labore alias sunt,
                                provident adipisci expedita dolores. Nisi deleniti repudiandae debitis.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://placehold.jp/30/1775bb/ffffff/600x400.png?text=placeholder+image"
                            class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h5 class="caption-title">Title</h5>
                            <p class="caption">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia laborum aut
                                animi facilis praesentium iste et, dicta neque ab ad sit, fugiat eos possimus eveniet facere
                                quod, repudiandae quis alias.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://placehold.jp/30/1775bb/ffffff/600x400.png?text=placeholder+image"
                            class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h5 class="caption-title">Title</h5>
                            <p class="caption">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate et iste
                                autem voluptatum eos nihil culpa in, molestias eaque laudantium dolore nostrum dolores
                                maiores reprehenderit hic sunt, dolorum, corporis esse.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://placehold.jp/30/1775bb/ffffff/600x400.png?text=placeholder+image"
                            class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h5 class="caption-title">Title</h5>
                            <p class="caption"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quia
                                culpa itaque optio doloremque aliquam, reprehenderit suscipit quasi, minima facilis
                                excepturi quibusdam, neque sed officiis. Corrupti et reiciendis ipsam aperiam?</p>
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

        <h1 class="team home_welcome">Our team</h1>

        <section class="team-section py-10">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="team-col col-lg-6">
                        <div class="card-sl card border-0 pt-5 my-5 position-relative">
                            <a href="#" class="Person-link stretched-link" style="position: relative">
                            <div class="card-body p-4">
                                <div class="member-profile position-absolute w-100 text-center">
                                    <img class="rounded-circle mx-auto d-inline-block shadow-sm" src="https://picsum.photos/1920/1080" alt="">
                                </div>
                                <div class="card-text pt-1">
                                    <h3 class="member-name mb-0 text-center font-weight-bold">
                                        Name
                                    </h3>
                                    <div class="mb-3 text-center">Positon</div>
                                    <div>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Vivamus eget eros vestibulum, accumsan ante viverra, condimentum tellus. Curabitur pellentesque convallis purus non ornare. Donec bibendum sed purus dignissim rutrum. Maecenas bibendum feugiat est, et venenatis nunc.</div>
                                </div>
                            </div><!--//card-body-->
                            </a>
                            <div class="card-footer theme-bg-primary border-0 text-center">
                                <ul class="social-list list-inline mb-0 mx-auto">
                                    <li>Email: <a class="email-link" href="mailto:email@email.com">email address </a></li>
                                    <li>Phone: phone number </a></li>
                                </ul><!--//social-list-->
                            </div><!--//card-footer-->
                        </div><!--//card-->
                    </div><!--//col-->

                    <div class="team-col col-lg-6">
                        <div class="card-sl card border-0 pt-5 my-5 position-relative">
                            <a href="#" class="Person-link stretched-link" style="position: relative">
                            <div class="card-body p-4">
                                <div class="member-profile position-absolute w-100 text-center">
                                    <img class="rounded-circle mx-auto d-inline-block shadow-sm" src="https://picsum.photos/1920/1080" alt="">
                                </div>
                                <div class="card-text pt-1">
                                    <h3 class="member-name mb-0 text-center font-weight-bold">
                                        Name
                                    </h3>
                                    <div class="mb-3 text-center">Positon</div>
                                    <div>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Vivamus eget eros vestibulum, accumsan ante viverra, condimentum tellus. Curabitur pellentesque convallis purus non ornare. Donec bibendum sed purus dignissim rutrum. Maecenas bibendum feugiat est, et venenatis nunc.</div>
                                </div>
                            </div><!--//card-body-->
                            </a>
                            <div class="card-footer theme-bg-primary border-0 text-center">
                                <ul class="social-list list-inline mb-0 mx-auto">
                                    <li>Email: <a class="email-link" href="mailto:email@email.com">email address </a></li>
                                    <li>Phone: phone number </a></li>
                                </ul><!--//social-list-->
                            </div><!--//card-footer-->
                        </div><!--//card-->
                    </div><!--//col-->

                    <div class="col-lg-6">
                        <div class="card-sl card border-0 pt-5 my-5 position-relative">
                            <a href="#" class="Person-link stretched-link" style="position: relative">
                            <div class="card-body p-4">
                                <div class="member-profile position-absolute w-100 text-center">
                                    <img class="rounded-circle mx-auto d-inline-block shadow-sm" src="https://picsum.photos/1920/1080" alt="">
                                </div>
                                <div class="card-text pt-1">
                                    <h3 class="member-name mb-0 text-center font-weight-bold">
                                        Name
                                    </h3>
                                    <div class="mb-3 text-center">Positon</div>
                                    <div>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Vivamus eget eros vestibulum, accumsan ante viverra, condimentum tellus. Curabitur pellentesque convallis purus non ornare. Donec bibendum sed purus dignissim rutrum. Maecenas bibendum feugiat est, et venenatis nunc.</div>
                                </div>
                            </div><!--//card-body-->
                            </a>
                            <div class="card-footer theme-bg-primary border-0 text-center">
                                <ul class="social-list list-inline mb-0 mx-auto">
                                    <li>Email: <a class="email-link" href="mailto:email@email.com">email address </a></li>
                                    <li>Phone: phone number </a></li>
                                </ul><!--//social-list-->
                            </div><!--//card-footer-->
                        </div><!--//card-->
                    </div><!--//col-->

                    <div class="col-lg-6">
                        <div class="card-sl card border-0 pt-5 my-5 position-relative">
                            <a href="#" class="Person-link stretched-link" style="position: relative">
                            <div class="card-body p-4">
                                <div class="member-profile position-absolute w-100 text-center">
                                    <img class="rounded-circle mx-auto d-inline-block shadow-sm" src="https://picsum.photos/1920/1080" alt="">
                                </div>
                                <div class="card-text pt-1">
                                    <h3 class="member-name mb-0 text-center font-weight-bold">
                                        Name
                                    </h3>
                                    <div class="mb-3 text-center">Positon</div>
                                    <div>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Vivamus eget eros vestibulum, accumsan ante viverra, condimentum tellus. Curabitur pellentesque convallis purus non ornare. Donec bibendum sed purus dignissim rutrum. Maecenas bibendum feugiat est, et venenatis nunc.</div>
                                </div>
                            </div><!--//card-body-->
                            </a>
                            <div class="card-footer theme-bg-primary border-0 text-center">
                                <ul class="social-list list-inline mb-0 mx-auto">
                                    <li>Email: <a class="email-link" href="mailto:email@email.com">email address </a></li>
                                    <li>Phone: phone number </a></li>
                                </ul><!--//social-list-->
                            </div><!--//card-footer-->
                        </div><!--//card-->
                    </div><!--//col-->
            </div>

        </section>


        <h1 class="home_welcome description">Some of our projects ?</h1>
        <div class="row">
            <div class="container">
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
                                        class="btn btn-link btn-sm text-white stretched-link" href="#" role="button">Read more</a>
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
                                        class="btn btn-link btn-sm text-white stretched-link" href="#" role="button">Read more</a>
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
                                        class="btn btn-link btn-sm text-white stretched-link" href="#" role="button">Read
                                        more</a></ul>
                            </div>
                        </div>
                    </div>

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
                                        class="btn btn-link btn-sm text-white stretched-link" href="#" role="button">Read more</a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h1 class="home_welcome public">Publications</h1>

            <div class="publications-section container overflow-hidden">
                <div class="row gy-5">
                    <div class="col-12">
                        <div class="row align-items-center gy-3 gy-md-0 gx-xl-5">
                            <div class="col-xs-12 col-md-6">
                                <div class="img-wrapper position-relative bsb-hover-push">
                                    <a href="#!">
                                        <span
                                            class="badge rounded-pill text-bg-warning position-absolute top-0 start-0 m-3">Title</span>
                                        <img class="img-fluid rounded-5 w-100 h-100 object-fit-cover" loading="lazy"
                                            src="https://placehold.jp/30/1775bb/ffffff/600x400.png?text=placeholder+image"
                                            alt="Sports">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div>
                                    <p class="text-secondary mb-1">Nov 11, 2022</p>
                                    <h2 class="h1 mb-3"><a class="link-dark text-decoration-none"
                                            href="#!">Title</a></h2>
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius in quis
                                        quidem, velit, consequuntur voluptatum quam rem exercitationem est soluta facilis
                                        eaque voluptatibus libero sapiente ducimus quaerat at cupiditate beatae!</p>
                                    <a class="btn btn-primary" href="#!" target="_self">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="row align-items-center flex-row-reverse gy-3 gy-md-0 gx-xl-5">
                            <div class="col-xs-12 col-md-6">
                                <div class="img-wrapper position-relative bsb-hover-push">
                                    <a href="#!">
                                        <span
                                            class="badge rounded-pill text-bg-warning position-absolute top-0 end-0 m-3">Title</span>
                                        <img class="img-fluid rounded-5 w-100 h-100 object-fit-cover" loading="lazy"
                                            src="https://placehold.jp/30/1775bb/ffffff/600x400.png?text=placeholder+image"
                                            alt="Travel">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div>
                                    <p class="text-secondary mb-1">Oct 9, 2022</p>
                                    <h2 class="h1 mb-3"><a class="link-dark text-decoration-none"
                                            href="#!">Title</a></h2>
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda,
                                        officiis laborum corrupti molestiae culpa esse voluptate facere ipsam eius. Est aut
                                        iste rem fuga recusandae nisi nobis, explicabo quis excepturi?</p>
                                    <a class="btn btn-primary" href="#!" target="_self">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="row align-items-center gy-3 gy-md-0 gx-xl-5">
                            <div class="col-xs-12 col-md-6">
                                <div class="img-wrapper position-relative bsb-hover-push">
                                    <a href="#!">
                                        <span
                                            class="badge rounded-pill text-bg-warning position-absolute top-0 start-0 m-3">Title</span>
                                        <img class="img-fluid rounded-5 w-100 h-100 object-fit-cover" loading="lazy"
                                            src="https://placehold.jp/30/1775bb/ffffff/600x400.png?text=placeholder+image"
                                            alt="Photography">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div>
                                    <p class="text-secondary mb-1">Sep 17, 2022</p>
                                    <h2 class="h1 mb-3"><a class="link-dark text-decoration-none"
                                            href="#!">Title</a></h2>
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam quo
                                        expedita in laudantium eligendi, voluptatem, veniam eos eveniet nostrum numquam
                                        ratione exercitationem illo vero cupiditate consequuntur explicabo? Explicabo,
                                        pariatur officiis?</p>
                                    <a class="btn btn-primary" href="#!" target="_self">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="row align-items-center flex-row-reverse gy-3 gy-md-0 gx-xl-5">
                            <div class="col-xs-12 col-md-6">
                                <div class="img-wrapper position-relative bsb-hover-push">
                                    <a href="#!">
                                        <span
                                            class="badge rounded-pill text-bg-warning position-absolute top-0 end-0 m-3">title</span>
                                        <img class="img-fluid rounded-5 w-100 h-100 object-fit-cover" loading="lazy"
                                            src="https://placehold.jp/30/1775bb/ffffff/600x400.png?text=placeholder+image"
                                            alt="Food">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div>
                                    <p class="text-secondary mb-1">Aug 23, 2022</p>
                                    <h2 class="h1 mb-3"><a class="link-dark text-decoration-none"
                                            href="#!">Title</a></h2>
                                    <p class="mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam
                                        laudantium fugiat eius obcaecati ullam, accusantium voluptas dolore pariatur
                                        praesentium quod officiis, neque laboriosam molestiae. Accusamus totam quasi sit
                                        ullam dolore.</p>
                                    <a class="btn btn-primary" href="#!" target="_self">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="row align-items-center gy-3 gy-md-0 gx-xl-5">
                            <div class="col-xs-12 col-md-6">
                                <div class="img-wrapper position-relative bsb-hover-push">
                                    <a href="#!">
                                        <span
                                            class="badge rounded-pill text-bg-warning position-absolute top-0 end-0 m-3">Title</span>
                                        <img class="img-fluid rounded-5 w-100 h-100 object-fit-cover" loading="lazy"
                                            src="https://placehold.jp/30/1775bb/ffffff/600x400.png?text=placeholder+image"
                                            alt="Travel">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div>
                                    <p class="text-secondary mb-1">Oct 9, 2022</p>
                                    <h2 class="h1 mb-3"><a class="link-dark text-decoration-none"
                                            href="#!">Title</a></h2>
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda,
                                        officiis laborum corrupti molestiae culpa esse voluptate facere ipsam eius. Est aut
                                        iste rem fuga recusandae nisi nobis, explicabo quis excepturi?</p>
                                    <a class="btn btn-primary" href="#!" target="_self">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
