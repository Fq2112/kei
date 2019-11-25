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
    <!-- Sweetalert2 -->
    <link rel="stylesheet" href="{{asset('vendor/sweetalert/sweetalert2.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Modernizr JS -->
    <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{asset('js/respond.min.js')}}"></script>
    <![endif]-->
    <style>
        ::selection {
            background: #fa7e0a;
            color: #fff;
        }

        ::-moz-selection {
            background: #fa7e0a;
            color: #fff;
        }

        body::-webkit-scrollbar-track {
            background: rgba(222, 222, 222, .75);
        }

        body::-webkit-scrollbar {
            width: 8px !important;
            background-color: #F5F5F5;
        }

        body::-webkit-scrollbar-thumb {
            width: 8px !important;
            background: rgba(250, 126, 10, 0.5);
            border-radius: 5px;
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out;
        }

        body::-webkit-scrollbar-thumb:hover {
            background: rgba(251, 139, 35, 0.8);
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out;
        }

        body::-webkit-scrollbar-thumb:active {
            background: rgb(251, 139, 35);
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out;
        }

        .fh5co-loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url({{asset('images/hourglass.svg')}}) center no-repeat #222222;
        }

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

        .progress {
            position: fixed;
            margin-bottom: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 5px;
            border-radius: 0;
            z-index: 20;
        }

        .progress .bar {
            height: 100%;
            width: 10%;
            background: #fb8b23;
            transition: background 0.15s ease;
        }

        .images-preloader {
            width: 100%;
            height: 100%;
            position: fixed;
            z-index: 10000000;
            background-color: #fff;
        }

        .images-preloader .preloader {
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            height: 50px;
            width: 50px;
            margin: -25px 0 0 -25px;
            border-radius: 50%;
        }

        .images-preloader .preloader:before,
        .images-preloader .preloader:after {
            content: "";
            border: 3px solid #FA7E0A;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            position: absolute;
            left: 0;
        }

        .images-preloader .preloader:before {
            transform: scale(1, 1);
            opacity: 1;
            -webkit-animation: outside .6s infinite linear;
            animation: outside .6s infinite linear
        }

        .images-preloader .preloader:after {
            transform: scale(0, 0);
            opacity: 0;
            -webkit-animation: inside .6s infinite linear;
            animation: inside .6s infinite linear
        }

        @-webkit-keyframes inside {
            from {
                -webkit-transform: scale(.5, .5);
                opacity: 0
            }
            to {
                -webkit-transform: scale(1, 1);
                opacity: 1
            }
        }

        @keyframes inside {
            from {
                transform: scale(.5, .5);
                opacity: 0
            }
            to {
                transform: scale(1, 1);
                opacity: 1
            }
        }

        @-webkit-keyframes outside {
            from {
                -webkit-transform: scale(1, 1);
                opacity: 1
            }
            to {
                -webkit-transform: scale(1.5, 1.5);
                opacity: 0
            }
        }

        @keyframes outside {
            from {
                -webkit-transform: scale(1, 1);
                opacity: 1
            }
            to {
                -webkit-transform: scale(1.5, 1.5);
                opacity: 0
            }
        }
    </style>
    @stack('styles')
</head>
<body class="use-nicescroll">
<div class="images-preloader">
    <div class="preloader"></div>
</div>
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
                                <li><i class="icon-globe2"></i><a href="https://kupangenergi.co.id" target="_blank">www.kupangenergi.co.id</a></li>
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
                            <p>Copyright &copy; {{now()->format('Y')}} <a href="https://kupangenergi.co.id">KEI &mdash; Kupang Energi Indonesia</a>. All Rights Reserved.
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
<div class="progress">
    <div class="bar"></div>
</div>
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
<script src="{{asset('js/checkMobileDevice.js')}}"></script>
<!-- Nicescroll -->
<script src="{{asset('vendor/nicescroll/jquery.nicescroll.js')}}"></script>
<!-- Sweetalert2 -->
<script src="{{asset('vendor/sweetalert/sweetalert.min.js')}}"></script>
<script>
    window.onload = function () {
        $('.images-preloader').fadeOut();

        window.mobilecheck() ? $("body").removeClass('use-nicescroll') : '';

        $(".use-nicescroll").niceScroll({
            cursorcolor: "rgb(250,126,10)",
            cursorwidth: "8px",
            background: "rgba(222, 222, 222, .75)",
            cursorborder:'none',
            // cursorborderradius:0,
            autohidemode:'leave',
            zindex: 99999999,
        });

        var options = {
            call: "03808443065",
            email: "{{env('MAIL_USERNAME')}}",
            call_to_action: "Message us",
            button_color: "#FA7E0A",
            position: "left",
            order: "email,call",
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    };

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

    <!--Scroll Progress Bar-->
    function progress() {
        var windowScrollTop = $(window).scrollTop();
        var docHeight = $(document).height();
        var windowHeight = $(window).height();
        var progress = (windowScrollTop / (docHeight - windowHeight)) * 100;
        var $bgColor = progress > 99 ? '#FB8B23' : '#FA7E0A';
        var $textColor = progress > 99 ? '#fff' : '#333';

        $('.progress .bar').width(progress + '%').css({backgroundColor: $bgColor});
        // $('h1').text(Math.round(progress) + '%').css({color: $textColor});
        $('.fill').height(progress + '%').css({backgroundColor: $bgColor});
    }

    progress();

    $(document).on('scroll', progress);

    @if(session('contact'))
    swal('Successfully sent a message!', '{{ session('contact') }}', 'success');
    @endif
</script>
@stack('scripts')
</body>
</html>
