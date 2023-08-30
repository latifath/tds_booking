<style>
    ul li a {
        color: white !important;
    }
    .translate {
        color: white !important;
    }
    .connect:hover {
        color: #007bff;
    }
    .flag-dropdown ul li a {
        color: black !important;
    }

</style>
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
        <div class="menu-item" style="{{ couleur_background_1() }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu" style="color: white">
                                <ul>
                                    <li class="active"><a href="{{ route('root_index') }}">Hébergements</a></li>
                                    <li><a href="./rooms.html">Restaurants</a></li>
                                    <li><a href="./about-us.html">Voitures de location</a></li>
                                    <li><a href="./pages.html">A propos</a>
                                    <li><a href="./contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mt-5">
                    <h2 style="color:white"><strong>Trouvez votre prochain séjour </strong></h2><br>
                    <h4 style="color:white">Recherchez des offres sur des hôtels, des hébergements indépendants et plus encore</h4>
                    <br>
                </div>
            </div>
        </div>
    </div>
</header>
