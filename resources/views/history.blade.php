@extends('layouts.mst')
@section('title', 'Brief History | KEI – Kupang Energi Indonesia')
@push('styles')
    <style>
        .wrapReady {
            float: left;
            padding: 1rem;
        }
    </style>
@endpush
@section('content')
    <aside id="fh5co-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                <li style="background-image: url({{asset('images/home-2.jpg')}});">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                            <div class="slider-text-inner desc">
                                <h2 class="heading-section">Brief History</h2>
                                <p class="fh5co-lead">Do you want to know more about our company?</p>
                                <a href="#fh5co-team-section">
                                    <button class="btn btn-send-message btn-md">EXPLORE <i class="icon-search3"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
    <div id="fh5co-team-section">
        <div class="container">
            <div class="row about">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <h2>Brief History</h2>
                    <p>This is all about us, KEI &mdash; Kupang Energi Indonesia.</p>
                </div>
                <div class="col-md-12">
                    <img src="{{asset('images/history-80.png')}}" alt="KEI Team" class="wrapReady">
                    <p align="justify">
                        In the beginning, we have a mining business in East Nusa Tenggara (NTT), and we are always in
                        trouble to find fuel oil and people need gas supply and power difficulties, as well as look
                        around our area is the same condition.</p>
                    <p align="justify">Under these conditions, we finally agreed to establish a company PT KUPANG ENERGI
                        INDONESIA (KEI) as a service provider of oil and gas fuel storage tanks, as well as our
                        providers (sellers of these fuels).</p>
                    <p align="justify">Our great hope, with this investment project will reduce the burden above and
                        most importantly will make a big change in the economy of East Nusa Tenggara (NTT) and
                        surrounding areas, especially East Indonesia.</p>
                </div>
            </div>
            {{--<div class="row">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <h2>The Team</h2>
                    <p>Feel free to get in touch with our passionate crews. </p>
                </div>
                <div class="col-md-4 fh5co-staff">
                    <img src="{{asset('images/person1.jpg')}}" alt="Free HTML5 Bootstrap Template" class="img-responsive">
                    <h3>Athan Smith</h3>
                    <h4>Engineer</h4>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                    <ul class="fh5co-social">
                        <li><a href="#"><i class="icon-google"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4 fh5co-staff">
                    <img src="{{asset('images/person2.jpg')}}" alt="Free HTML5 Bootstrap Template" class="img-responsive">
                    <h3>Nathalie Kosley</h3>
                    <h4>Architect</h4>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                    <ul class="fh5co-social">
                        <li><a href="#"><i class="icon-google"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4 fh5co-staff">
                    <img src="{{asset('images/person3.jpg')}}" alt="Free HTML5 Bootstrap Template" class="img-responsive">
                    <h3>Architect</h3>
                    <h4>Co-Founder, Principal</h4>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                    <ul class="fh5co-social">
                        <li><a href="#"><i class="icon-google"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                    </ul>
                </div>
            </div>--}}
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{asset('js/jquery.slickwrap.js')}}"></script>
    <script>
        $(function () {
            $('.wrapReady').slickWrap({
                cutoff: 10,
                resolution: 15,
                bloomPadding: true
            });
        });
    </script>
@endpush

