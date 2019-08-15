<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO"/>
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive"/>
    <meta name="author" content="FREEHTML5.CO"/>

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>
    <meta name="twitter:card" content=""/>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <!-- Superfish -->
    <link rel="stylesheet" href="{{asset('css/superfish.css')}}">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{asset('css/flexslider.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Modernizr JS -->
    <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{asset('js/respond.min.js')}}"></script>
    <![endif]-->
    <style>
        .to-top {
            position: fixed;
            right: 1%;
            bottom: -7.5%;
            height: 15px;
            width: 40px;
            padding: 3px 5px;
            font-size: 10px;
            font-weight: bold;
            color: transparent;
            opacity: 0.5;
            z-index: 3;
            visibility: hidden;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
            -webkit-transition: all 0.25s ease-in-out;
            transition: all 0.25s ease-in-out;
            background-color: #858585;
        }

        .to-top:hover, .to-top:focus {
            opacity: 1;
            text-decoration: none;
        }
        .to-top:focus {
            outline: thin dotted;
        }

        .to-top::before,
        .to-top::after {
            content: '';
            position: absolute;
            left: 0;
            width: 0;
            height: 0;
            border: 20px solid transparent;
            border-top: 0;
        }

        .to-top::before {
            top: -20px;
            z-index: 4;
            border-bottom: 20px solid #858585;
        }

        .to-top::after {
            bottom: 0;
            z-index: 5;
            border-bottom: 20px solid #505050;
        }

        .to-top:hover,
        .to-top:focus {
            height: 40px;
            color: #212223;
        }

        .show-to-top {
            display: block;
            bottom: 1.25%;
            visibility: visible;
        }
    </style>
    @stack('styles')
</head>
<body>
<a href="#" onclick="scrollToTop()" class="to-top" title="Go to top">Top</a>
<div id="fh5co-wrapper">
    <div id="fh5co-page">
        <div id="fh5co-header">
            <header id="fh5co-header-section">
                <div class="container">
                    <div class="nav-header">
                        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                        <h1 id="fh5co-logo">
                            <a href="{{route('dashboard')}}">
                                <i class="icon-genius"></i>KEI
                            </a>
                        </h1>
                        <!-- START #fh5co-menu-wrap -->
                        <nav id="fh5co-menu-wrap" role="navigation">
                            <ul class="sf-menu" id="fh5co-primary-menu">
                                <li>
                                    <a class="{{ \Illuminate\Support\Facades\Request::is('/') ? 'active' : '' }}" href="{{route('dashboard')}}">Home</a>
                                </li>

                                <li>
                                    <a class="{{ \Illuminate\Support\Facades\Request::is('about*') ? 'active' : '' }} fh5co-sub-ddown">About</a>
                                    <ul class="fh5co-sub-menu">
                                        <li><a href="{{route('president_message')}}">President Message</a></li>
                                        <li><a href="{{route('history')}}">Brief History</a></li>
                                        <li><a href="{{route('vision_mission_values')}}"
                                               title="Vision-Mission & Our Values">Vision & Mission</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a class="{{ \Illuminate\Support\Facades\Request::is('projects') ? 'active' : '' }}"
                                       href="{{route('projects')}}">Projects</a>
                                </li>

                                <li>
                                    <a class="{{ \Illuminate\Support\Facades\Request::is('services') ? 'active' : '' }}"
                                       href="{{route('services')}}">Services</a>
                                </li>

                                <li>
                                    <a class="{{ \Illuminate\Support\Facades\Request::is('hse-quality') ? 'active' : '' }}"
                                       href="{{route('hse')}}">HSE & QUALITY</a>
                                </li>

                                <li>
                                    <a class="{{ \Illuminate\Support\Facades\Request::is('contact') ? 'active' : '' }}"
                                       href="{{route('contact')}}">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
        </div>
        <!-- end:fh5co-header -->

        @yield('content')

        <footer>
            <div id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h3 class="section-title">About Us</h3>
                            <p align="justify"> In the beginning, we have a mining business in East Nusa Tenggara (NTT),
                                and we are always in trouble to...<a href="{{route('history')}}#fh5co-team-section"><em>read
                                        more</em></a></p>
                        </div>

                        <div class="col-md-4">
                            <h3 class="section-title">Our Address</h3>
                            <ul class="contact-info">
                                <li><i class="icon-map2"></i>Jl. Sam Ratulangi IV RT 020 RW 007 No. 5 Kel. Oesapa Barat
                                    Kec. Kelapalima - Kupang, Nusa Tenggara Timur
                                </li>
                                <li><i class="icon-phone2"></i><a href="tel:03808443065">(0380) 8443065</a></li>
                                <li><i class="icon-envelope2"></i><a href="mailto:info@kupangenergi.co.id">info@kupangenergi.co.id</a></li>
                                <li><i class="icon-globe2"></i><a href="http://kupangenergi.co.id" target="_blank">www.kupangenergi.co.id</a></li>
                            </ul>
                        </div>

                        <div class="col-md-4">
                            <h3 class="section-title">Drop us a line</h3>
                            <form class="contact-form" method="post" action="{{route('contact.submit')}}">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="name" class="sr-only">Name</label>
                                    <input name="name" type="text" class="form-control" id="name"
                                           placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="sr-only">Email</label>
                                    <input name="email" type="email" class="form-control" id="email"
                                           placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="subject" class="sr-only">Subject</label>
                                    <input name="subject" type="text" class="form-control" id="subject"
                                           placeholder="Subject">
                                </div>
                                <div class="form-group">
                                    <label for="message" class="sr-only">Message</label>
                                    <textarea name="message" class="form-control" id="message" rows="7"
                                              placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" id="btn-submit" class="btn btn-send-message btn-md"
                                           value="Send Message">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row copy-right">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            {{--<p class="fh5co-social-icons">
                                <a href="#"><i class="icon-twitter2"></i></a>
                                <a href="#"><i class="icon-facebook2"></i></a>
                                <a href="#"><i class="icon-instagram"></i></a>
                                <a href="#"><i class="icon-dribbble2"></i></a>
                                <a href="#"><i class="icon-youtube"></i></a>
                            </p>--}}
                            <p>Copyright &copy; {{now()->format('Y')}} <a href="http://kupangenergi.co.id">KEI &mdash; Kupang Energi Indonesia</a>. All Rights Reserved.
                                <br>Template by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a>. Designed & Developed by <a href="https://rabbit-media.net/" target="_blank">Rabbit Media</a>.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- END fh5co-page -->
</div>
<!-- END fh5co-wrapper -->

<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
<!-- Superfish -->
<script src="{{asset('js/hoverIntent.js')}}"></script>
<script src="{{asset('js/superfish.js')}}"></script>
<!-- Flexslider -->
<script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
<!-- Main JS (Do not remove) -->
<script src="{{asset('js/main.js')}}"></script>
<script>
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if ( $( this ).scrollTop() > 100 ) {
            $( '.to-top' ).addClass( 'show-to-top' );
        } else {
            $( '.to-top' ).removeClass( 'show-to-top' );
        }
    }

    function scrollToTop(callback) {
        if ($('html').scrollTop()) {
            $('html').animate({ scrollTop: 0 }, callback);
            return;
        }
        if ($('body').scrollTop()) {
            $('body').animate({ scrollTop: 0 }, callback);
            return;
        }
        callback();
    }

    var title = document.getElementsByTagName("title")[0].innerHTML;
    (function titleScroller(text) {
        document.title = text;
        setTimeout(function () {
            titleScroller(text.substr(1) + text.substr(0, 1));
        }, 500);
    }(title + " ~ "));

    @if(session('contact'))
    window.alert('{{session('contact')}}');
    @endif
</script>
@stack('scripts')
</body>
</html>
