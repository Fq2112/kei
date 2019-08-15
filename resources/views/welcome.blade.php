@extends('layouts.mst')
@section('title', 'Home | KEI – Kupang Energi Indonesia')
@section('content')
    <aside id="fh5co-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                <li style="background-image: url({{asset('images/home-1.jpg')}});">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="col-md-5 col-sm-6 col-xs-12 js-fullheight slider-text">
                            <div class="slider-text-inner">
                                {{--<div class="desc">
                                    <h2>We shape our buildings; thereafter they shape Us.</h2>
                                    <p><a href="#" class="btn btn-primary btn-outline">View Details</a></p>
                                </div>--}}
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url({{asset('images/home-2.jpg')}});">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="col-md-5 col-sm-6 col-xs-12 js-fullheight slider-text">
                            <div class="slider-text-inner">
                                {{--<div class="desc">
                                    <h2>Architecture is a visual art, and the buildings speak for themselves.</h2>
                                    <p><a href="#" class="btn btn-primary btn-outline">View Details</a></p>
                                </div>--}}
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url({{asset('images/home-3.jpg')}});">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="col-md-5 col-sm-6 col-xs-12 js-fullheight slider-text">
                            <div class="slider-text-inner">
                                {{--<div class="desc">
                                    <h2>Architecture begins where engineering ends.</h2>
                                    <p><a href="#" class="btn btn-primary btn-outline">View Details</a></p>
                                </div>--}}
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
    {{--<div id="fh5co-section">
        <div class="grid-project-section">
            <a href="#">
                <img src="{{asset('images/lokasi.jpg')}}" alt="KEI" class="img-responsive">
                <div class="desc text-center">
                    <h2>KEI LOCATION</h2>
                </div>
            </a>
        </div>
        <div class="grid-project-section">
            <a href="#">
                <img src="{{asset('images/project1.jpg')}}" alt="INFUSS" class="img-responsive">
                <div class="desc text-center">
                    <h2>INFUSS PROJECT</h2>
                </div>
            </a>
        </div>
        <div class="grid-project-section">
            <a href="#">
                <img src="{{asset('images/project2.jpg')}}" alt="EPCI" class="img-responsive">
                <div class="desc text-center">
                    <h2>EPCI - JOIN US</h2>
                </div>
            </a>
        </div>
    </div>--}}
@endsection

