@extends('layouts.master')
@section('content')

    <!-- Services Section End -->
        <div class="col-md-12">
            <div class="font-back-tittle mb-45">
                <div class="archivment-front text-center mt-3">
                    <h2 style="margin: 70px 0 50px 0; color: #dca73a">Les types d'hébergements</h2>
                </div>
            </div>
    </div>
    <!-- Home Room Section Begin -->
    <section class="rooms-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="room-item">
                        <img src="{{ asset('assets/img/room/room-1.jpg') }}" alt="">
                        <div class="ri-text">
                            <h4>Hôtels</h4>
                            <h3>60<span>établissements</span></h3>
                            <a href="{{ route('root_index_hotels') }}" class="primary-btn">Voir tous les hôtels</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="room-item">
                        <img src="{{ asset('assets/img/room/room-2.jpg') }}" alt="">
                        <div class="ri-text">
                            <h4>Appartements</h4>
                            <h3>60<span>appartements</span></h3>
                            <a href="#" class="primary-btn">Voir tous les appart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="room-item">
                        <img src="{{ asset('assets/img/room/room-3.jpg') }}" alt="">
                        <div class="ri-text">
                            <h4>Appartements</h4>
                            <h3>60<span>appartements</span></h3>
                            <a href="#" class="primary-btn">Voir tous les hôtels</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="room-item">
                        <img src="{{ asset('assets/img/room/room-4.jpg') }}" alt="">
                        <div class="ri-text">
                            <h4>Appartements</h4>
                            <h3>60<span>appartements</span></h3>
                            <a href="#" class="primary-btn">Voir tous les hôtels</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="rooms-section spad">
        <div class="container">
            <div class="archivment-front text-center mt-0">
                <h2 style="margin: 5px 0 20px 0; color: #dca73a">Explorez le Bénin</h2>
                <p>Ces destinations prisées ont beaucoup à offrir</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="room-item">
                        <img src="{{ asset('assets/img/blog/blog-10.jpg') }}" alt="">
                        <div class="ri-text">
                            <h4>Cotonou</h4>
                            <h3>120<span>établissements</span></h3>
                            <a href="#" class="primary-btn">Voir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="room-item">
                        <img src="{{ asset('assets/img/blog/blog-10.jpg') }}" alt="">
                        <div class="ri-text">
                            <h4>Grand-Popo</h4>
                            <h3>60<span>établissements</span></h3>
                            <a href="#" class="primary-btn">Voir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="room-item">
                        <img src="{{ asset('assets/img/blog/blog-10.jpg') }}" alt="">
                        <div class="ri-text">
                            <h4>Ouidah</h4>
                            <h3>60<span>établissements</span></h3>
                            <a href="#" class="primary-btn">Voir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="room-item">
                        <img src="{{ asset('assets/img/blog/blog-10.jpg') }}" alt="">
                        <div class="ri-text">
                            <h4>Porto-Novo</h4>
                            <h3>30<span>établissements</span></h3>
                            <a href="#" class="primary-btn">Voir</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Découvrez les meilleurs restaurants</span>
                        <h2>Le meilleur pour vous</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="blog-item set-bg" data-setbg="{{ asset('assets/img/blog/blog-1.jpg ')}}">
                        <div class="bi-text">
                            <span class="b-tag">Savourer</span>
                            <h4><a href="#">Tremblant In Canada</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i> 15th April, 2019</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item set-bg" data-setbg="{{ asset('assets/img/blog/blog-2.jpg') }}">
                        <div class="bi-text">
                            <span class="b-tag">Savourer</span>
                            <h4><a href="#">Choosing A Static Caravan</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i> 15th April, 2019</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item set-bg" data-setbg="{{ asset('assets/img/blog/blog-2.jpg') }}">
                        <div class="bi-text">
                            <span class="b-tag">Savourer</span>
                            <h4><a href="#">Choosing A Static Caravan</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i> 15th April, 2019</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="blog-item small-size set-bg" data-setbg="{{ asset('assets/img/blog/blog-wide.jpg') }}">
                        <div class="bi-text">
                            <span class="b-tag">Savourer</span>
                            <h4><a href="#">Trip To Iqaluit In Nunavut A Canadian Arctic City</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i> 08th April, 2019</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item small-size set-bg" data-setbg="{{ asset('assets/img/blog/blog-10.jpg') }}">
                        <div class="bi-text">
                            <span class="b-tag">Savourer</span>
                            <h4><a href="#">Traveling To Barcelona</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i> 12th April, 2019</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

@endsection
