@extends('layouts.master')
<style>
    .restaurats-section{
        background-color: #4312b4;
    }
    .res-text{
        color: #ffffff;
        border: black;
    }
    .res-text h3 {
        color:#dca73a
    }
</style>
@section('content')

    <!-- Services Section End -->
        <div class="col-md-12">
            <div class="font-back-tittle mb-45">
                <div class="archivment-front text-center">
                    <h2 style="margin: 0px 0 50px 0; color: #dca73a">Les plus beaux hôtels à visiter au Bénin</h2>
                </div>
            </div>
    </div>
    <!-- Home hotel Section Begin -->
    <section class="rooms-section spad">
        <div class="container">
            <div class="row">
                @foreach($last_hotels as $last_hotel)
                <div class="col-lg-3 col-md-6">
                        <div class="room-item">
                            <a href="{{ route('root_show_hotel', $last_hotel->slug) }}" class="primary-btn"><img src="{{ asset('assets/img/room/room-1.jpg') }}" alt="">
                            </a>
                            <div class="ri-text">
                                <h4>{{ $last_hotel->nom }}</h4>
                                <h3>{{ $last_hotel->ville }}<span> - </span><span> Bénin </span></h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="float-right">
                <a href="{{ route('root_index_hotels') }}"><button type="button" style="{{ couleur_background_2() }}; {{ text_color() }} ; border:none;">Voir plus</button></a>
            </div>
        </div>
    </section>

    <section class="restaurats-section spad">
        <div class="container">
            <div class="archivment-front text-center mt-0">
                <h2 style="margin: 5px 0 20px 0; color: #dca73a">Découvrez les meilleurs restaurants</h2>
                <h4 class="mb-3 text-white">Les restaurants que vous pouvez visiter</h4>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="room-item">
                        <a href="#" class="primary-btn"><img src="{{ asset('assets/img/hamberger.png') }}" alt="">
                        </a>
                        <div class="res-text">
                            <h3>chez Carine</h3>
                            <span>cotonou</span><br>
                            <span>18h à 19h</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="room-item">
                        <a href="#" class="primary-btn"><img src="{{ asset('assets/img/hamberger.png') }}" alt="">
                        </a>
                        <div class="res-text">
                            <h3>Petit Noir</h3>
                            <span>cotonou</span><br>
                            <span>18h à 00h</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="room-item">
                        <a href="#" class="primary-btn"><img src="{{ asset('assets/img/hamberger.png') }}" alt="">
                        </a>
                        <div class="res-text">
                            <h3>chez Carine</h3>
                            <span>cotonou</span><br>
                            <span>18h à 19h</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="room-item">
                        <a href="#" class="primary-btn"><img src="{{ asset('assets/img/hamberger.png') }}" alt="">
                        </a>
                        <div class="res-text">
                            <h3>chez Carine</h3>
                            <span>cotonou</span><br>
                            <span>18h à 19h</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="float-right">
                <a href="#"><button type="button" style="{{ couleur_background_2() }}; {{ text_color() }} ; border:none;">Voir plus</button></a>
            </div>
        </div>
    </section>

    <!-- Blog Section voiture -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span></span>
                        <h2>Les meilleures voiture à louer</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card col-lg-4 col-md-6">
                    <img class="card-img-top" src="{{ asset('assets/img/land-rover-range-rover-back.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Range Rover 2023</h5>
                    <p class="card-text">This is a longer</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card col-lg-4">
                    <img class="card-img-top" src="{{ asset('assets/img/honda.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Honda</h5>
                    <p class="card-text">This card has supporting</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card col-lg-4">
                    <img class="card-img-top" src="{{ asset('assets/img/range-hover.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Range Rover</h5>
                    <p class="card-text">This is a wider</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
            <div class="float-right mt-3">
                <a href="#"><button type="button" style="{{ couleur_background_2() }}; {{ text_color() }} ; border:none;">Voir plus</button></a>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

@endsection
