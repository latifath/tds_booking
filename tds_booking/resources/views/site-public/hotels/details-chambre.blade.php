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
        @media only screen and (max-width: 991px){
            .top-nav {
            }
            .etablissement{
                display: none;
            }
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
            ..booking-form form button{
                display: inline;            }
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

    <!-- Breadcrumb Section Begin -->
 <div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Chambres chez {{ $info_hotel->nom }}</h2>
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
                    @foreach($details_room as $room)
                        <img src="{{ asset('assets/img/room/room-details.jpg') }}" alt="">
                        <div class="rd-text">
                            <div class="rd-title">
                                <h3>{{ $room->nom }}</h3>
                                <div class="rdt-right">
                                    <div class="rating">
                                        <i class="fa fa-star-o" ></i>
                                        <i class="fa fa-star-o" ></i>
                                        <i class="fa fa-star-o" ></i>
                                        <i class="fa fa-star-o" ></i>
                                        <i class="fa fa-star-o" ></i>
                                    </div>
                                    <a href="#">Réserver Maintenant</a>
                                </div>
                            </div>
                            <h2>{{ $room->night }}<span>/Par nuit</span></h2>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Superficie:</td>
                                        <td>{{ $room->superficie }}ft</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Lit:</td>
                                        <td>{{ $room->Nombre_lit }}</td>
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
                            <p class="f-para">{{ $room->description }}</p>
                        </div>
                        @endforeach
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
                    <h3>Votre réservation</h3>
                    <form action="{{ route('root_verifier_disponibilite') }}" method="POST">
                        @csrf
                        <input type="hidden" name="chambre_id" value="{{ $room->id }}">
                        <div class="check-date">
                            <label for="date-in">Date d'arrivée:</label>
                            <input type="text" class="date-input" id="date-in" name="date_debut">
                            <i class="icon_calendar"></i>
                        </div>
                        <div class="check-date">
                            <label for="date-out">Date de depart:</label>
                            <input type="text" class="date-input" id="date-out" name="date_fin">
                            <i class="icon_calendar"></i>
                        </div>
                        <div class="select-option">
                            <label for="room">Chambre:</label>
                            <select id="room" name="chambre">
                                <option value="1">1 chambre</option>
                                <option value="2">2 chambres</option>
                                <option value="3">3 chambres</option>
                                <option value="4">4 chambres</option>
                            </select>
                        </div>
                        <div class="select-option">
                            <label for="guest">Adulte:</label>
                            <select id="guest" name="adulte">
                                <option value="1">1 Adulte</option>
                                <option value="2">2 Adultes</option>
                                <option value="3">3 Adultes</option>
                                <option value="4">4 Adultes</option>
                            </select>
                        </div>
                        <div class="select-option">
                            <label for="child">Enfant:</label>
                            <select id="child" name="child">
                                <option value="0">0 </option>
                                <option value="1">1 </option>
                                <option value="2">2 </option>
                                <option value="3">3 </option>
                                <option value="4">4 </option>
                            </select>
                        </div>

                        <button type="submit" style="{{ couleur_background_2() }}; {{ text_color() }}">Disponibilité</button>
                    </form>
                </div>
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.0606825994123!2d-72.8735845851828!3d40.760690042573295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e85b24c9274c91%3A0xf310d41b791bcb71!2sWilliam%20Floyd%20Pkwy%2C%20Mastic%20Beach%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1578582744646!5m2!1sen!2sbd"
                        height="470" style="border:0;" allowfullscreen=""></iframe>
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

</body>

</html>

@section('js')
<script>

const datein = document.getElementById('date-in');

// Obtenir la date actuelle
const today = new Date();

// Convertir la date en format "yyyy-mm-dd"
const year = today.getFullYear();
const month = String(today.getMonth() + 1).padStart(2, '0');
const day = String(today.getDate()).padStart(2, '0');
const minDate = `${year}-${month}-${day}`;

// Appliquer la date minimale au champ d'entrée
date-in.min = minDate;

</script>
@endsection
