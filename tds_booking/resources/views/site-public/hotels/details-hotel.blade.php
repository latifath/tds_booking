<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Sona Template">
        <meta name="keywords" content="Sona, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>TDS Booking</title>

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Css Styles -->
        <link rel="stylesheet" href="{{ asset('assets/lib/bootstrap.min.css') }}" >
        <link rel="stylesheet" href="{{ asset('assets/lib/font-awesome.min.css') }}" >
        <link rel="stylesheet" href="{{ asset('assets/css/elegant-icons.css') }}" >
        <link rel="stylesheet" href="{{ asset('assets/lib/flaticon.css') }}" >
        <link rel="stylesheet" href="{{ asset('assets/lib/owl.carousel.min.css') }}" >
        <link rel="stylesheet" href="{{ asset('assets/lib/nice-select.css') }}" >
        <link rel="stylesheet" href="{{ asset('assets/lib/jquery-ui.min.css')}}" >
        <link rel="stylesheet" href="{{ asset('assets/lib/magnific-popup.css') }}" >
        <link rel="stylesheet" href="{{ asset('assets/lib/slicknav.min.css') }}" >
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    </head>

    <style>
        body{
        margin:0;
        padding:0;
            }
        .portfolio-menu{
            text-align:center;
        }
        .portfolio-menu ul li{
            display:inline-block;
            margin:0;
            list-style:none;
            padding:10px 15px;
            cursor:pointer;
            -webkit-transition:all 05s ease;
            -moz-transition:all 05s ease;
            -ms-transition:all 05s ease;
            -o-transition:all 05s ease;
            transition:all .5s ease;
        }
        .portfolio-item .item{
            float:left;
            margin-bottom:10px;
        }

        .room-booking{
            background-color: #4312b4 !important;
        }

        @media only screen and (max-width: 991px){
            .connect{
                display: none;
            }

            .tn-right{
            margin-top: -35px;
            margin-right: 50px;
            }

            .canvas-open{
                right: 20px;
            }
            .d-flex {
                display: contents !important;
            }
            .booking-form {
                padding: 20px 10px 50px 10px;
            }
            .booking-form form button{
                display: inline;
            }
        }
    </style>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <div class="connect-menu d-flex">
            <i class="fa fa-bars"
            ></i>
        </div>

    </div>
    @include('layouts.partials.nav')

    @include('layouts.partials.header')
    @section('content')
    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Hotel #{{ $hotel->nom }}</h2>
                        <div class="bt-option">
                            <a href="{{ route('root_index') }}">Accueil</a>
                            <span>Hôtel</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <section class="room-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="room-details-item">
                        <img src="{{ asset('assets/img/room/room-details.jpg') }}" alt="">
                        <div class="container">

                            <div class="portfolio-item row">
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                                <a href="{{ asset('assets/img/room/room-details.jpg') }}" class="fancylight popup-btn" data-fancybox-group="light">
                                <img class="img-fluid" src="{{ asset('assets/img/room/room-details.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                                <a href="{{ asset('assets/img/room/room-4.jpg') }}" class="fancylight popup-btn" data-fancybox-group="light">
                                <img class="img-fluid" src="{{ asset('assets/img/room/room-4.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                                <a href="{{ asset('assets/img/room/room-6.jpg') }}" class="fancylight popup-btn" data-fancybox-group="light">
                                <img class="img-fluid" src="{{ asset('assets/img/room/room-6.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                                <a href="{{ asset('assets/img/room/room-3.jpg') }}" class="fancylight popup-btn" data-fancybox-group="light">
                                <img class="img-fluid" src="{{ asset('assets/img/room/room-3.jpg') }}" alt="">
                                </a>
                            </div>
                            </div>
                        </div>
                        <div class="rd-text">
                            <div class="rd-title">
                                <h3 >{{ $hotel->nom }}</h3>
                                <div class="rdt-right">
                                    <div class="rating">
                                        <i class="fa fa-star-o" ></i>
                                        <i class="fa fa-star-o" ></i>
                                        <i class="fa fa-star-o" ></i>
                                        <i class="fa fa-star-o" ></i>
                                        <i class="fa fa-star-o" ></i>
                                    </div>
                                    <a href="{{ route('root_chambre_reservation', $hotel->id) }}">Réserver Maintenant</a>
                                </div>
                            </div>
                            <h6><i class="fa fa-map-marker" style="color: #dca73a;"></i>{{ $hotel->adresse}}<span>, </span>{{ $hotel->code_postal }} {{ $hotel->ville }} <span>, </span>Bénin</h6>
                            <br>
                            <p class="f-para">{{ $hotel->description }}</p>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Prestation:</td>
                                        <td>
                                            <i class="fa fa-wifi" style="padding-right: 5px;"> Connexion Wi-Fi gratuit </i>
                                            <i class="fa fa-television" style="padding-right: 5px"> Television</i>
                                            <i class="fa fa-air-conditioner" style="padding-right: 5px"> Climatisation</i>
                                            <i class="fa fa-cutlery" style="padding-right: 5px"> Restaurants</i>
                                            <i class="fa fa-clock-o" style="padding-right: 5px"> Réception ouverte 24h/24</i>
                                        </td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('message')}}
                        </div>
                    @elseif (Session::has('error'))
                        <div class="alert alert-warning" role="alert">
                            {{Session::get('error')}}
                        </div>
                    @endif
                    <div class="room-booking">
                        <h3 style="color: white;">Votre réservation</h3>
                        <form action="{{ route('root_verifier_disponibilite') }}" method="POST">
                            @csrf
                            <input type="hidden" name="hotel_id" value="{{ $hotel->id }}">
                            <div class="check-date">
                                <label for="date-in">Date d'arrivée:</label>
                                <input type="date" class="" id="date_debut" name="date_debut" required>
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="check-date">
                                <label for="date-out">Date de depart:</label>
                                <input type="date" class="" id="date_fin" name="date_fin" required>
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="check-date">
                                <label for="room">Chambre:</label>
                                <input type="number" id="room" name="nombre_chambre" min="1">
                            </div>
                            <div class="check-date">
                                <label for="guest">Adulte:</label>
                                <input type="number" name="nombre_adulte" min="1">
                            </div>
                            <div class="check-date">
                                <label for="child">Enfant:</label>
                                <input type="number" name="nombre_enfant" min="0">
                            </div>
                            <button type="submit" style="{{ couleur_background_2() }}; {{ text_color() }}">Disponibilité</button>
                        </form>
                    </div>
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.0606825994123!2d-72.8735845851828!3d40.760690042573295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e85b24c9274c91%3A0xf310d41b791bcb71!2sWilliam%20Floyd%20Pkwy%2C%20Mastic%20Beach%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1578582744646!5m2!1sen!2sbd"
                            height="470" style="border:0;" allowfullscreen="">
                        </iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('layouts.partials.footer')

    @yield('js')

    <!-- Js Plugins -->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>

        $('.portfolio-menu ul li').click(function(){
            $('.portfolio-menu ul li').removeClass('active');
            $(this).addClass('active');

            var selector = $(this).attr('data-filter');
            $('.portfolio-item').isotope({
                filter:selector
            });
            return  false;
        });
        $(document).ready(function() {
        var popup_btn = $('.popup-btn');
        popup_btn.magnificPopup({
        type : 'image',
        gallery : {
            enabled : true
        }
        });
        });
   </script>

</body>

</html>
