@extends('layouts.mst')
@section('title', 'Services | KEI – Kupang Energi Indonesia')
@section('content')
    <aside id="fh5co-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                <li style="background-image: url({{asset('images/home-3.jpg')}});">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                            <div class="slider-text-inner desc">
                                <h2 class="heading-section">Our Services</h2>
                                <p class="fh5co-lead">What services does our company provide to you?</p>
                                <a href="#fh5co-services-section"><button class="btn btn-send-message btn-md">FIND IT OUT</button></a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
    <div id="fh5co-services-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="services-inner text-center">
                        <img src="{{asset('images/oil_rent.png')}}" alt="Oil Rent" style="width: 50%">
                        <h3>Rent Facility</h3>
                        <p>Total Capacity Oil tank leased 800,000 KL:<br>
                            - 250,000 KL for Crude Oil<br>
                            - 500,000 KL for HSD<br>
                            - 50,000 KL for MFO & MDO
                        </p>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="services-inner text-center">
                        <img src="{{asset('images/oil_trade.png')}}" alt="Oil Trade" style="width: 50%">
                        <h3>Trading Facility</h3>
                        - Total HSD Tank Capacity for trading 200,000 KL<br>
                        - Total LPG Tank Capacity for trading 50,000 MT
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

