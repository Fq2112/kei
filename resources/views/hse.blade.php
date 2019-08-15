@extends('layouts.mst')
@section('title', 'HSE and Quality | KEI – Kupang Energi Indonesia')
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
                <li style="background-image: url({{asset('images/home-3.jpg')}});">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                            <div class="slider-text-inner desc">
                                <h2 class="heading-section">HSE & Quality</h2>
                                <p class="fh5co-lead">Do you want to know more about it?</p>
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
                    <h2>HSE & Quality</h2>
                </div>
                <div class="col-md-6">
                    <img src="{{asset('images/hse-50.png')}}" alt="HSE" class="wrapReady">
                    <p align="justify">
                        <strong>Health, Safety & Environment (HSE)</strong><br>
                        KEI Company sets up an HSE division that will be led by a reliable manager in the areas of
                        workers 'safety, workers' health, and the local Environment. In this division will also oversee
                        COMDEV - Community Development, and this is very important to maintain the stability of our
                        daily business efforts.</p>
                    <p align="justify">Always conduct training and create routine reports on H & S issues and document
                        and review these activities, in order to always meet the company's rules according to National &
                        International Oil & Gas standardization. Neither with E - enviromental, we always keep and
                        preserve the surrounding environment with our motto "GO GREEN".</p>
                    <p align="justify">To maintain the trust of our partners and customers not to worry, our plant uses
                        Fire System with International Standard NFPA 20, fire water and fire foam system. Neither is the
                        case with this Fire System we always regularly conduct training according to the items above (H
                        & S).</p>
                </div>
                <div class="col-md-6">
                    <p align="justify">
                        <strong>Quality</strong><br>
                        Our company policy always provides solutions and provides storage tanks with the highest quality
                        standards from industry and government agencies concerned, in accordance with the requirements
                        and specifications of Oil & Gas.</p>
                    <p align="justify">In the process, from the (Design, Infrastructure & Civil, Fabrication,
                        Construction, Coating, Test & Commissioning, and related services) process are carried out
                        according to SNI and International Standard ISO, ASTM, ASME, NACE, SSPC, and AWWA.</p>
                    <p align="justify" style="margin-bottom: 0">To maintain product quality, we do the following:</p>
                    <ol>
                        <li>Routine pre-process, in-process, and post-process inspections</li>
                        <li>Always maintain and maintain existing equipment, both mechanical equipment and
                            intrumentation and always perform routine calibration according to the rules.
                        </li>
                        <li>We always accept well on customer's criticism and suggestion and verification.</li>
                    </ol>
                    <p align="justify">Our management is very supportive and promising on quality control program and
                        quality assurance applied to each division. Each manager is fully responsible for running the
                        program.</p>
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

