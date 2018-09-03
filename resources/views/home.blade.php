@extends('layouts.master')

@section('content')

<div id="home">
    <div class="header" style="background-image: url('/images/header-bg.jpg'); background-size: cover">
        <div class="overlay pt-5 pb-3">
            <div class="container pt-md-3 pt-md-5">
                <div class="row">
                    <div class="col-md-7 text-white pt-md-5 mb-3">
                        <h1 class="mb-3 pt-5">HELLO VOYAGER DECK!</h1>
                        <p class="lead">
                            Voyager is a Laravel Admin Package that includes BREAD(CRUD) operations, a media manager, menu builder, and much more.
                        </p>
                        <hr class="my-4">
                        <p class="lead text-center text-md-left">
                            <a class="btn btn-dark mb-2" href="https://github.com/handiwijoyo/voyager-deck" role="button"><i class="fab fa-github"></i> View on Github</a>
                            <a class="btn btn-outline-light mb-2" href="#" role="button"><i class="fas fa-play"></i> Learn more</a>
                        </p>
                    </div>
                    <div class="col-md-5 text-center">
                        <img src="/images/header-device.png" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="features" class="bg-white py-5">
        <div class="container">
            <h2 class="text-uppercase text-center">Features</h2>
            <h5 class="mb-5 text-center text-muted">Our <em>hand-crafted</em> features just for You.</h5>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="icon">
                        <span class="lnr lnr-star"></span>
                    </div>
                    <h5>High Quality</h5>
                    <p class="text-muted">
                        Quisque sit amet porttitor orci, non varius ex. Sed rhoncus mi sit amet mollis dapibus. Duis euismod vehicula quam vitae.
                    </p>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="icon">
                        <span class="lnr lnr-magic-wand"></span>
                    </div>
                    <h5>Seamless Design</h5>
                    <p class="text-muted">
                        Nullam pellentesque dolor est, eu tristique odio sagittis vitae. Donec luctus, quam sit amet pharetra vehicula, est tellus semper dolor.
                    </p>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="icon">
                        <span class="lnr lnr-hourglass"></span>
                    </div>
                    <h5>Quick Navigation</h5>
                    <p class="text-muted">
                        Pellentesque rutrum mollis dui. Proin diam enim, aliquet non rutrum in, maximus sed risus. Duis condimentum urna in enim varius.
                    </p>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="icon">
                        <span class="lnr lnr-calendar-full"></span>
                    </div>
                    <h5>Calendar of Events</h5>
                    <p class="text-muted">
                        Morbi in justo non leo euismod aliquet. Nullam libero risus, rhoncus hendrerit molestie eget, viverra eget ex. Donec maximus dolor.
                    </p>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="icon">
                        <span class="lnr lnr-bubble"></span>
                    </div>
                    <h5>Free Updates & Support</h5>
                    <p class="text-muted">
                        Quisque pharetra turpis vitae efficitur tempor. Proin quis molestie augue. Quisque a nunc sapien. Donec eget tristique eros. Donec sagittis.
                    </p>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="icon">
                        <span class="lnr lnr-chart-bars"></span>
                    </div>
                    <h5>Analytics & Insight</h5>
                    <p class="text-muted">
                        Suspendisse libero odio, rhoncus sed consequat non, aliquet maximus metus. Duis sed dolor ultrices, congue risus in, congue lectus. Phasellus.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="statistic" class="bg-dark py-5">
        <div class="container">
            <h2 class="text-uppercase text-center text-white">Our Numbers</h2>
            <h5 class="mb-3 text-center text-muted">Duis sed dolor ultrices, congue risus in, congue lectus.</h5>
            <div class="row">
                <div class="col-md-4">
                    <div class="countdown-item svg-container" data-percent="70" data-border-width="1" data-counter-width="4" data-size-cirlce="40" data-border-color="rgba(59,85,230,0.15)" data-counter-color="#4dc0b5" data-number-color="#4dc0b5"></div>
                    <p class="text-center text-muted">
                        Nulla ligula magna, cursus et dui at, imperdiet sollicitudin nunc. Quisque scelerisque mattis consectetur.
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="countdown-item svg-container" data-percent="59" data-border-width="1" data-counter-width="4" data-size-cirlce="40" data-border-color="rgba(59,85,230,0.15)" data-counter-color="#4dc0b5" data-number-color="#4dc0b5"></div>
                    <p class="text-center text-muted">
                        Aenean dictum tincidunt semper. Nam mauris odio, mattis vel faucibus non, lobortis a ante.
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="countdown-item svg-container" data-percent="99" data-border-width="1" data-counter-width="4" data-size-cirlce="40" data-border-color="rgba(59,85,230,0.15)" data-counter-color="#4dc0b5" data-number-color="#4dc0b5"></div>
                    <p class="text-center text-muted">
                        Sed et ex a erat iaculis venenatis. Fusce sit amet leo volutpat ligula scelerisque scelerisque.
                    </p>
                </div>
            </div>
        </div>
    </div>

    @component('components.blog', ['posts' => $blog_posts])
        @slot('title')
            From Our Blog
        @endslot
        @slot('subtitle')
            Vestibulum pharetra elit sed convallis elementum.
        @endslot
        @slot('button')
            <a href="/blog" class="btn btn-lg btn-primary text-white">Go to Blog</a>
        @endslot
    @endcomponent

    <div id="closing" class="bg-white py-5">
        <div class="container">
            <h2 class="text-uppercase text-center">Start your project right now</h2>
            <h5 class="mb-5 text-center text-muted">In luctus mi sed ipsum pharetra, vitae consequat eros molestie.</h5>
            <p class="text-center">
                <a href="https://github.com/handiwijoyo/voyager-deck" class="btn btn-outline-primary btn-lg"><i class="fab fa-github"></i> View on Github</a>
            </p>
        </div>
    </div>
    <div id="footer" class="bg-dark pt-5 pb-3 text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mb-3">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 mb-3">
                            <h6>Hello <em>Voyager Deck!</em></h6>
                            <p class="text-muted">
                                Nulla lobortis fringilla nulla, sit amet aliquet arcu sodales in. Phasellus sed arcu feugiat urna elementum elementum a id metus.
                            </p>
                            <div class="mb-3">
                                <a href="#" class="text-white pr-3"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="text-white pr-3"><i class="fab fa-facebook"></i></a>
                                <a href="#" class="text-white pr-3"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="text-white pr-3"><i class="fab fa-google-plus"></i></a>
                                <a href="#" class="text-white pr-3"><i class="fab fa-pinterest"></i></a>
                                <a href="#" class="text-white pr-3"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 mb-3">
                            <h5>Useful Links</h5>
                            <ul class="list-unstyled">
                                <li><a href="#" class="text-white">Voyager Deck</a></li>
                                <li><a href="#" class="text-white">Voyager</a></li>
                                <li><a href="#" class="text-white">Laravel</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-4 mb-3">
                            <h5>Pages</h5>
                            <ul class="list-unstyled">
                                <li><a href="#" class="text-white">About</a></li>
                                <li><a href="#" class="text-white">Hello World</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <p>Get notified when we add new features</p>
                    <div class="row no-gutters">
                        <div class="col-sm-8 col-md-12 col-lg-8 mb-2 pr-sm-1 pr-md-0 pr-lg-1">
                            <input type="text" class="form-control" placeholder="Enter your email">
                        </div>
                        <div class="col-sm-4 col-md-12 col-lg-4 mb-2">
                            <button class="btn btn-primary btn-block">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="copyright" class="bg-dark pt-1 pb-4">
        <hr class="mb-4">
        <div class="container">
            <div class="row text-muted small">
                <div class="col-md-6">Copyright &copy; Voyager Deck 2018. All rights reserved.</div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </div>
</div>

@endsection