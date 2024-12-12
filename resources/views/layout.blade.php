<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <title>App Name - @yield('title')</title>

        @vite([
            'resources/sass/app.scss',
            'resources/js/app.js',
            'resources/css/layout.css',
            'resources/css/home.css',
            'resources/css/people.css',
            'resources/css/teamMember.css',
            'resources/css/publications.css',])
        <style>
          </style>
    </head>
    <body>
        <header>
        @section('TopMenu')
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
            <img class="navbar-brand" src="resources/logo2.png" alt="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse"
                    aria-controls="navBar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navBar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link"
                           href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                           href="/people">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                           href="/projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                        href="/publications">Publications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                           href="">Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                           onclick="scrollToEnd()">About us
                            </a>
                           <script>
                            function scrollToEnd() {
                                window.scrollTo(0, document.body.scrollHeight);
                            }
                            </script>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
        <header>
        @show
        <div>
            @yield('content')
        </div>
        <footer class="footer-nav text-center text-lg-start text-white ">
            <div class="container p-4 pb-0 ">
                <section class="">
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
                            <div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2606.857578509884!2d18.752670975982888!3d49.20326127637566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471459482d177287%3A0x278378d8bd875274!2zxb1pbGluc2vDoSB1bml2ZXJ6aXRhIHYgxb1pbGluZQ!5e0!3m2!1ssk!2ssk!4v1728324868596!5m2!1ssk!2ssk" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                              </div>
                        </div>
                        <hr class="w-100 clearfix d-md-none"/>
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h6>Information</h6>
                            <p>
                                <a href="" class="footer-txt">--</a>
                            </p>
                            <p>
                                <a href="" class="footer-txt">--</a>
                            </p>
                            <p>
                                <a href="" class="footer-txt">--</a>
                            </p>
                            <p>
                                <a href="" class="footer-txt">--</a>
                            </p>
                        </div>
                        <hr class="w-100 clearfix d-md-none"/>
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6>Contact??</h6>
                            <p><i class="fas fa-home mr-3"></i> Adress</p>
                            <p><i class="fas fa-envelope mr-3"></i> email@email.com</p>
                            <p><i class="fas fa-phone mr-3"></i> 760-420-5023</p>
                            <p><i class="fas fa-print mr-3"></i> 619-548-6452</p>
                        </div>
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h6>Follow us</h6>
                            <a
                                    class="footer-btn btn btn-primary btn-floating m-1"
                                    style="background-color: #3b5998"
                                    href="https://www.facebook.com/"
                                    role="button"
                            ><i class="bi bi-facebook"></i
                                ></a>
                            <a
                                    class="footer-btn btn btn-primary btn-floating m-1"
                                    style="background-color: #000000"
                                    href="https://twitter.com/"
                                    role="button"
                            ><i class="bi bi-twitter-x"></i
                                ></a>
                            <a
                                    class="footer-btn btn btn-primary btn-floating m-1"
                                    style="background-color: #dd4b39"
                                    href="https://sk.wikipedia.org/wiki/Google%2B"
                                    role="button"
                            ><i class="bi bi-google"></i
                                ></a>
                            <a
                                    class="footer-btn btn btn-primary btn-floating m-1"
                                    style="background-color: #ac2bac"
                                    href="https://www.instagram.com/"
                                    role="button"
                            ><i class="bi bi-instagram"></i
                                ></a>
                            <a
                                    class="footer-btn btn btn-primary btn-floating m-1"
                                    style="background-color: #0082ca"
                                    href="https://www.linkedin.com/"
                                    role="button"
                            ><i class="bi bi-linkedin"></i
                                ></a>
                            <a
                                    class="footer-btn btn btn-primary btn-floating m-1"
                                    style="background-color: #333333"
                                    href="https://github.com/"
                                    role="button"
                            ><i class="bi bi-github"></i
                                ></a>
                        </div>
                    </div>
                </section>
            </div>
            <div class="copy text-center p-3">
                © 2024 Copyright:
                <a class="text-white" href=""
                ></a>
            </div>
        </footer>
    </body>
</html>
