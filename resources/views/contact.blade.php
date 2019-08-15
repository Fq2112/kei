@extends('layouts.mst')
@section('title', 'Contact | KEI – Kupang Energi Indonesia')
@push('styles')
    <style>
        .gm-style-iw {
            width: 350px !important;
            top: 15px;
            left: 22px;
            background-color: #fff;
            box-shadow: 0 1px 6px rgba(178, 178, 178, 0.6);
            border: 1px solid rgba(250, 126, 10, 0.6);
            border-radius: 2px 2px 10px 10px;
        }

        .gm-style-iw > div:first-child {
            max-width: 350px !important;
        }

        #iw-container {
            margin-bottom: 10px;
        }

        #iw-container .iw-title {
            font-family: 'Open Sans Condensed', sans-serif;
            font-size: 22px;
            font-weight: 400;
            padding: 10px;
            background-color: #FA7E0A;
            color: white;
            margin: 0;
            border-radius: 2px 2px 0 0;
        }

        #iw-container .iw-content {
            font-size: 13px;
            line-height: 18px;
            font-weight: 400;
            margin-right: 1px;
            padding: 15px 5px 20px 15px;
            max-height: 140px;
            overflow-y: auto;
            overflow-x: hidden;
        }

        .iw-content a {
            color: #FA7E0A;
            text-decoration: none;
        }

        .iw-content img {
            float: right;
            margin: 0 5px 5px 10px;
            width: 50%;
        }

        .iw-subTitle {
            font-size: 16px;
            font-weight: 700;
            padding: 5px 0;
        }

        .iw-bottom-gradient {
            position: absolute;
            width: 326px;
            height: 25px;
            bottom: 10px;
            right: 18px;
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 1) 100%);
            background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 1) 100%);
            background: -moz-linear-gradient(top, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 1) 100%);
            background: -ms-linear-gradient(top, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 1) 100%);
        }
    </style>
@endpush
@section('content')
    <aside id="fh5co-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                <li style="background-image: url({{asset('images/project-2.jpg')}});">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                            <div class="slider-text-inner desc">
                                <h2 class="heading-section">Contact Us</h2>
                                <p class="fh5co-lead">Feel free to get in touch with us</p>
                                <a href="#fh5co-contact-section">
                                    <button class="btn btn-send-message btn-md">GET IN TOUCH</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
    <div id="map" class="fh5co-map"></div>
    <!-- END map -->
    <div id="fh5co-contact-section">
        <div class="container">
            <form method="post" action="{{route('contact.submit')}}">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6 col-md-push-6">
                        <h3 class="section-title">Our Address</h3>
                        <ul class="contact-info">
                            <li><i class="icon-location-pin"></i>Jl. Sam Ratulangi IV RT 020 RW 007 No. 5 Kel. Oesapa
                                Barat Kec. Kelapalima - Kupang, Nusa Tenggara Timur
                            </li>
                            <li><i class="icon-phone2"></i><a href="tel:03808443065">(0380) 8443065</a></li>
                            <li><i class="icon-mail"></i><a href="mailto:info@kupangenergi.co.id">info@kupangenergi.co.id</a>
                            </li>
                            <li><i class="icon-globe2"></i><a href="https://kupangenergi.co.id" target="_blank">www.kupangenergi.co.id</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-md-pull-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="name" type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="email" type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input name="subject" type="text" class="form-control" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                        <textarea name="message" class="form-control" id="" cols="30" rows="7"
                                                  placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="Send Message" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END fh5co-contact -->
@endsection
@push('scripts')
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIljHbKjgtTrpZhEiHum734tF1tolxI68&libraries=places"></script>
    <script>
        var google;

        function init() {
            var myLatlng = new google.maps.LatLng(-10.1534914, 123.6304974);

            var mapOptions = {
                zoom: 15,
                center: myLatlng,
                scrollwheel: true,
                styles: [
                    {
                        "featureType": "administrative.land_parcel",
                        "elementType": "all",
                        "stylers": [{"visibility": "on"}]
                    }, {
                        "featureType": "landscape.man_made",
                        "elementType": "all",
                        "stylers": [{"visibility": "on"}]
                    }, {"featureType": "poi", "elementType": "labels", "stylers": [{"visibility": "on"}]}, {
                        "featureType": "road",
                        "elementType": "labels",
                        "stylers": [{"visibility": "simplified"}, {"lightness": 20}]
                    }, {
                        "featureType": "road.highway",
                        "elementType": "geometry",
                        "stylers": [{"hue": "#f49935"}]
                    }, {
                        "featureType": "road.highway",
                        "elementType": "labels",
                        "stylers": [{"visibility": "simplified"}]
                    }, {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [{"hue": "#fad959"}]
                    }, {
                        "featureType": "road.arterial",
                        "elementType": "labels",
                        "stylers": [{"visibility": "on"}]
                    }, {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [{"visibility": "simplified"}]
                    }, {
                        "featureType": "road.local",
                        "elementType": "labels",
                        "stylers": [{"visibility": "simplified"}]
                    }, {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [{"visibility": "on"}]
                    }, {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [{"hue": "#a1cdfc"}, {"saturation": 30}, {"lightness": 49}]
                    }]
            };

            var mapElement = document.getElementById('map');

            var map = new google.maps.Map(mapElement, mapOptions);

            var contentString =
                '<div id="iw-container">' +
                '<div class="iw-title">KEI – Kupang Energi Indonesia</div>' +
                '<div class="iw-content">' +
                '<img class="img-fluid" src="{{asset('images/Logo KEI.png')}}">' +
                '<div class="iw-subTitle">Contacts</div>' +
                '<p>Jl. Sam Ratulangi IV RT 020 RW 007 No. 5 Kel. Oesapa Barat Kec. Kelapalima - Kupang, Nusa Tenggara Timur<br>' +
                '<br>Phone: <a href="tel:038084430652">(0380) 8443065</a>' +
                '<br>E-mail: <a href="mailto:{{env('MAIL_USERNAME')}}">{{env('MAIL_USERNAME')}}</a>' +
                '</p></div><div class="iw-bottom-gradient"></div></div>';

            var infowindow = new google.maps.InfoWindow({
                content: contentString,
                maxWidth: 350
            });

            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                icon: '{{asset('images/loc.png')}}',
                anchorPoint: new google.maps.Point(0, -29)
            });

            marker.addListener('click', function () {
                infowindow.open(map, marker);
            });

            google.maps.event.addListener(map, 'click', function () {
                infowindow.close();
            });

            // styling infoWindow
            google.maps.event.addListener(infowindow, 'domready', function () {
                var iwOuter = $('.gm-style-iw');
                var iwBackground = iwOuter.prev();

                iwBackground.children(':nth-child(2)').css({'display': 'none'});
                iwBackground.children(':nth-child(4)').css({'display': 'none'});

                iwOuter.css({left: '22px', top: '15px'});
                iwOuter.parent().parent().css({left: '0'});

                iwBackground.children(':nth-child(1)').attr('style', function (i, s) {
                    return s + 'left: -39px !important;'
                });

                iwBackground.children(':nth-child(3)').attr('style', function (i, s) {
                    return s + 'left: -39px !important;'
                });

                iwBackground.children(':nth-child(3)').find('div').children().css({
                    'box-shadow': 'rgba(72, 181, 233, 0.6) 0 1px 6px',
                    'z-index': '1'
                });

                var iwCloseBtn = iwOuter.next();
                iwCloseBtn.css({
                    background: '#fff',
                    opacity: '1',
                    width: '30px',
                    height: '30px',
                    right: '15px',
                    top: '6px',
                    border: '6px solid #48b5e9',
                    'border-radius': '50%',
                    'box-shadow': '0 0 5px #3990B9'
                });

                if ($('.iw-content').height() < 140) {
                    $('.iw-bottom-gradient').css({display: 'none'});
                }

                iwCloseBtn.mouseout(function () {
                    $(this).css({opacity: '1'});
                });
            });
        }

        google.maps.event.addDomListener(window, 'load', init);
    </script>
@endpush

