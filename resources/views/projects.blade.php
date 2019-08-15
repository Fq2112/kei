@extends('layouts.mst')
@section('title', 'Projects | KEI – Kupang Energi Indonesia')
@section('content')
    <aside id="fh5co-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                <li style="background-image: url({{asset('images/home-2.jpg')}});">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                            <div class="slider-text-inner desc">
                                <h2 class="heading-section">Our Portfolio</h2>
                                <p class="fh5co-lead">Feel free to check what kind of project that we've done</p>
                                <a href="#fh5co-work-section"><button class="btn btn-send-message btn-md">CHECK THIS OUT</button></a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
    <div id="fh5co-work-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center project">
                    <a href="#" class="grid-project">
                        <div class="image">
                            <img src="{{asset('images/lokasi.jpg')}}" alt="KEI" class="img-responsive"
                                 style="width: 100%">
                        </div>
                        <div class="desc">
                            <h3>KEI LOCATION</h3>
                            <p>PT. KUPANG ENERGI INDONESIA</p>
                            <ul class="text-left">
                                <li type="none">Kawasan Industri Bolok – Desa Kuanheum – Kecamatan Kupang Barat –
                                    Kabupaten Kupang – Nusa Tenggara Timur - Indonesia
                                    <ul>
                                        <li>Phone: +62 8123 4567 89</li>
                                        <li>Fax: +62 31 5621868</li>
                                        <li>E-mail: info@kupangenergi.co.id</li>
                                        <li>Website: www.kupangenergi.co.id</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center project">
                    <a href="#" class="grid-project">
                        <div class="image">
                            <img src="{{asset('images/project1.jpg')}}" alt="INFUSS PROJECT" class="img-responsive"
                                 style="width: 100%">
                        </div>
                        <div class="desc">
                            <h3>INFUSS PROJECT</h3>
                            <p>(INTEGRATED FUEL STORAGE SERVICES)</p>
                            <ul class="text-left">
                                <li>Land: 200 Ha</li>
                                <li>
                                    Capacity:
                                    <ul>
                                        <li>750,000 KL for fuel oil</li>
                                        <li>25,000 MT for fuel gas (LPG)</li>
                                    </ul>
                                </li>
                                <li>Gas Power Plant 5 MW</li>
                                <li>WWTP & WTP system</li>
                                <li>Fire & Water system</li>
                                <li>Filling Station BBM & LPG</li>
                                <li>Special Jetty Terminal for Fuel Oil</li>
                                <li>Utility & Facility Building</li>
                            </ul>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center project">
                    <a href="http://salwa.co.id" class="grid-project">
                        <div class="image">
                            <img src="{{asset('images/project2.jpg')}}" alt="EPCI" class="img-responsive"
                                 style="width: 100%">
                        </div>
                        <div class="desc">
                            <h3>EPCI &mdash; JOIN US</h3>
                            <p>PT. SALWA ANUGERAH SEMESTA</p>
                            <ul class="text-left">
                                <li type="none">Komplek Bintag Diponggo Kav. 885 Surabaya 60256 – East Java –
                                    Indonesia
                                </li>
                                <ul>
                                    <li>Phone: +62 31 5667102 / 99533701</li>
                                    <li>Fax: +62 31 5621868</li>
                                    <li>E-mail: syaif@salwa.co.id</li>
                                    <li>Website: www.salwa.co.id / www.eng.salwa.co.id</li>
                                </ul>
                            </ul>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

