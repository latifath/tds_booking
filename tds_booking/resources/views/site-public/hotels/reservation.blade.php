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
        .h-for{
            height: 750px;
        }
        .connect:hover {
        color: #007bff;
        }

        @media only screen and (max-width: 991px){
        .canvas-open {
            display:none;
        }
        .tn-right{
            margin-top: -35px;
            margin-right: 50px;
        }
        }
    </style>

<body>
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <div class="connect-menu d-flex">
            <i class="fa fa-bars" style="padding-right: 15px !important;
            "></i>
            <i class="fa fa-bars"></i>
        </div>

    </div>
    <header class="header-section">
        <div class="top-nav" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="{{ route('root_index') }}">
                                <img src="{{ asset('assets/img/logo.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="tn-right">
                            <div class="language-option">
                                <img src="{{ asset('assets/img/fr.jpeg') }}" alt="">
                                <div class="flag-dropdown">
                                    <ul>
                                        <li><a href="{{ route('locale.switch', ['locale' => 'en']) }}">En</a></li>
                                        <li><a href="{{ route('locale.switch', ['locale' => 'fr']) }}">Fr</a></li>

                                    </ul>
                                </div>
                            </div>
                            <a  class="etablissement" href="#" style="color: white; padding: right: 10px; padding: left;">Ajoutez votre établisement</a>
                            @if (Route::has('login'))
                                @auth
                                    <a class="connect" href="{{ url('/dashboard') }}" class=" connect text-sm text-gray-700 dark:text-gray-500 underline" style="border: 1px solid black; padding: 5px; text-decoration: none; background-color:white; hover: #007bff;">Dashboard</a>
                                @else
                                    <a class="connect" href="{{ route('login') }}" class="connect text-sm text-gray-700 dark:text-gray-500 underline" style="border: 1px solid black; padding: 5px; text-decoration: none; background-color:white; hover: #007bff;">Se connecter</a>

                                    @if (Route::has('register'))
                                        <a class="connect" href="{{ route('register') }}" class="connect ml-4 text-sm text-gray-700 dark:text-gray-500 underline" style="border: 1px solid black; padding: 5px; text-decoration: none; background-color:white">S'inscrire</a>
                                    @endif
                                @endauth
                            @endif

                        </div>
                    </div>
                </div>
            </div>
    </header>
    <div class="container">
        <div class="row mt-3">
            <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Chambres chez </h2>
                        <div class="bt-option">
                            <a href="{{ route('root_index') }}">Accueil</a>
                            <span>Chambre</span>
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
                        @foreach ($chambresDisponibles as $chambre)
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
                                    <h3>{{ $chambre->nom }}</h3>
                                    <div class="rdt-right">
                                        <div class="rating">
                                            <i class="fa fa-star-o" ></i>
                                            <i class="fa fa-star-o" ></i>
                                            <i class="fa fa-star-o" ></i>
                                            <i class="fa fa-star-o" ></i>
                                            <i class="fa fa-star-o" ></i>
                                        </div>
                                        <a href="{{ route('root_chambre_reservation', $chambre->id) }}">Réserver Maintenant</a>
                                    </div>
                                </div>
                                <h2>{{ format_price_xof($chambre->night) }}<span>/Par nuit</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Superficie:</td>
                                            <td>{{ $chambre->superficie }}ft</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Lit:</td>
                                            <td>{{ $chambre->Nombre_lit }}</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Prestation:</td>
                                            <td>
                                                <i class="fa fa-wifi" style="padding-right: 5px"> Wi-Fi Gratuit </i>
                                                <i class="fa fa-television" style="padding-right: 5px"> Television</i>
                                                <i class="fa fa-bath" style="padding-right: 5px"> Salle de bain</i>
                                                <i class="fas fa-air-conditioner" style="padding-right: 5px"> Climatisation</i>
                                            </td>
                                            </tr>
                                    </tbody>
                                </table>
                                <p class="f-para">{{ $chambre->description }}</p>
                            </div>
                            @endforeach
                    </div>
                </div>
                <div class="col-lg-4">

                </div>

            </div>
        </div>
    </section>

        </div>
    </div>
</body>
</html>
