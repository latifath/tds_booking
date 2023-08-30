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

    @include('layouts.partials.mini-header')

    @yield('content')

    @include('layouts.partials.partenaire')
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
