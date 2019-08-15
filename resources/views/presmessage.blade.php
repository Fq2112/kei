@extends('layouts.mst')
@section('title', 'President Message | KEI – Kupang Energi Indonesia')
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
                <li style="background-image: url({{asset('images/home-1.jpg')}});">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                            <div class="slider-text-inner desc">
                                <h2 class="heading-section">President Message</h2>
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
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <h2>President Message</h2>
                </div>
                <div class="col-md-12">
                    <img src="{{asset('images/president-50.png')}}" alt="President/CEO" class="wrapReady">
                    <p align="justify"><strong><u>ROBERT F.S KOTA DIA</u></strong><br>President Director</p>
                    <p align="justify">
                        We are a new company with experienced personnel in the field of fuel (Oil & Gas), both in the
                        field of oil & gas tank construction and in the field of trading of fuel oil & gas and also
                        experienced in the field of fuel oil and gas storage.</p>
                    <p align="justify">Therefore we combine and unify ourselves in the company of PT. KUPANG ENERGI
                        INDONESIA (KEI) to invest in the "INTEGRATED FUEL STORAGE SERVICES" project under the project
                        name "INFUSS PROJECT", 200 Ha of land - with storage tank capacity for oil = 1,000,000 KL
                        and LPG = 50,000 MT which is located in Kupang Barat - Kupang, East Nusa Tenggara (NTT).</p>
                    <p align="justify">With that investment we hope and always ready to serve as well as the national
                        sequence especially East Nusa Tenggara (NTT) and its surrounding areas, in the economic movement
                        as a whole both domestically and abroad. Hope we can be recognized as a leading company of
                        national and International sekala as an Oil & Gas company, for that we work together and
                        tirelessly with all our partners later with the motto in our efforts to always be a "Partner
                        Choice" both at home and abroad.</p>
                    <p align="justify">In the implementation and development we will be supported by a dedicated and
                        experienced team in business, systems and processes that are strong and always innovate and
                        pollute that make us solid and competitive. Of course we are committed to prioritize local
                        staff, among others as a form of our contribution to spur and generate local economic
                        growth.</p>
                    <p align="justify">With our guiding principles based on national and international customer service,
                        constantly innovating in energy and resource management, and working hard and committed always
                        contribute to the advancement of the Indonesian Economy.</p>
                </div>
            </div>
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

