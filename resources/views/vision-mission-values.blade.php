@extends('layouts.mst')
@section('title', 'Vision-Mission & Our Values | KEI – Kupang Energi Indonesia')
@section('content')
    <aside id="fh5co-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                <li style="background-image: url({{asset('images/slide_2.jpg')}});">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                            <div class="slider-text-inner desc">
                                <h2 class="heading-section">Vision-Mission & Our Values</h2>
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
                <div class="col-md-6">
                    <h2>Vision</h2>
                    <p align="justify">We are committed to be the safest, most cost-effective, reliable and focused
                        provider to the customers that we serve</p>
                    <hr>
                    <h2>Mission</h2>
                    <p align="justify">Our mission is to provide solutions, best services, precise and safe also with a
                        competitive price for the customers of fuel oil storage tanks.
                    <blockquote>"WE ALWAYS GIVE THE BEST SOLUTION".</blockquote>
                    </p>
                </div>
                <div class="col-md-6">
                    <h2>Our Values</h2>
                    <p align="justify">Our core value is the trust given by our partners and customers, because it is
                        this trust that gives a very strong boost beyond our company, and this can motivate our company
                        in our daily business guide, the core value that can make KEI solid and strong are, i.e:</p>
                    <ol>
                        <li> Primary work safety and should be in priority.</li>
                        <li> Our greatest strength is our people</li>
                        <li> Train for improvement</li>
                        <li> Commitment to customer satisfaction</li>
                        <li> Make the customer as a king</li>
                        <li> Implement always with urgency</li>
                        <li> Act with high integrity</li>
                        <li> Gives a positive result</li>
                        <li> Responsible for social and environmental</li>
                        <li> Innovate for better solutions</li>
                        <li> Implement and abide by existing rules</li>
                        <li> Do not give up - always ready and alert</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

