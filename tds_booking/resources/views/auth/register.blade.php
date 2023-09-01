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
                        <div class="logo mt-2">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
</html>

<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            {{-- <x-authentication-card-logo /> --}}
            <h1>Création de compte</h1>

        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Nom') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Mot de Passe') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirmation Mot de Passe') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Déjà inscrit?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('S\'inscrire') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
