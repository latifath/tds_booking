<style>

    .translate {
        color: white !important;
    }
    .connect:hover {
        color: #007bff;
    }
    .flag-dropdown ul li a {
        color: black !important;
    }
    .propos{
        color: white !important;
    }
    .booking-area form {
        background-color: #4312b4 !important;
    }

    .boking-tittle {
        color: white;
    }

</style>
<header class="header-section">
    <div class="top-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="tn-right">
                        <a class="propos" href="./blog.html">A propos</a>
                        <a class="propos" href="./contact.html">Contact</a>
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
                        <div class="language-option">
                            <img src="{{ asset('assets/img/fr.jpeg') }}" alt="">
                            <span style="color: white;">EN <i class="fa fa-angle-down"></i></span>
                            <div class="flag-dropdown">
                                <ul>
                                    <li><a href="{{ route('locale.switch', ['locale' => 'en']) }}">En</a></li>
                                    <li><a href="{{ route('locale.switch', ['locale' => 'fr']) }}">Fr</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item">
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
                    <div class="nav-menu">
                        <nav class="mainmenu">
                            <ul>
                                <li class="active"><a href="{{ route('root_index') }}">Accueil</a></li>
                                <li><a href="{{ route('root_index_hotels') }}">Hébergements</a></li>
                                <li><a href="#">Restaurants</a></li>
                                <li><a href="#">Voitures de location</a></li>
                            </ul>
                        </nav>
                        <a href="#"><button type="button" style="{{ couleur_background_2() }}; {{ text_color() }} ; border:none;">Réservez maintenant</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->

<!-- Hero Section Begin -->
<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-sm-3">
                <div class="hero-text">
                    <h1>Visiter les meilleurs hôtels et restaurants dans toutes les villes du Bénin </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="{{ asset('assets/img/hero/hero-1.jpg') }}"></div>
        <div class="hs-item set-bg" data-setbg="{{ asset('assets/img/hero/hero-2.jpg') }}"></div>
        <div class="hs-item set-bg" data-setbg="{{ asset('assets/img/hero/hero-3.jpg') }}"></div>
    </div>
</section>
