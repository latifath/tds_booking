@extends('layouts.master')

@section('content')
 <!-- Breadcrumb Section Begin -->
 <div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Tous les hôtels</h2>
                    <div class="bt-option">
                        <a href="{{ route('root_index') }}">Accueil</a>
                        <span>Hôtels</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->

<!-- Rooms Section Begin -->
<section class="rooms-section spad">
    <div class="container">
        <div class="row">
            @foreach($hotels as $hotel)

            <div class="col-lg-4 col-md-6">
                <div class="room-item">
                    <img src="{{ asset('assets/img/room/room-1.jpg') }}" alt="">
                    <div class="ri-text">
                        <h4>{{ $hotel->nom }}</h4>
                        <h3>{{ $hotel->ville }}<span>/ {{ $hotel->departement }}</span></h3>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="r-o">adresse:</td>
                                    <td>{{ $hotel->adresse }}</td>
                                </tr>
                                <tr>
                                    <td class="r-o">localisation:</td>
                                    <td>{{ $hotel->localisation }}</td>
                                </tr>
                                <tr>
                                    <td class="r-o">telephone1:</td>
                                    <td>{{ $hotel->telephone1 }}</td>
                                </tr>
                                 <tr>
                                    <td class="r-o">telephone2:</td>
                                    <td>{{ $hotel->telephone2 }}</td>
                                </tr>
                                <tr>
                                    <td class="r-o">Email:</td>
                                    <td>{{ $hotel->email }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="{{ route('root_show_room_hotel', $hotel->id) }}" class="primary-btn">Voir les tarifs</a>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="col-lg-12">
                <div class="room-pagination">
                    @if ($hotels->currentPage() > 1)
                        <a href="{{ $hotels->previousPageUrl() }}">Previous</a>
                    @endif

                    @for ($i = 1; $i <= $hotels->lastPage(); $i++)
                        <a href="{{ $hotels->url($i) }}" class="{{ $i == $hotels->currentPage() ? 'active' : '' }}">{{ $i }}</a>
                    @endfor

                    @if ($hotels->hasMorePages())
                        <a href="{{ $hotels->nextPageUrl() }}">Next <i class="fa fa-long-arrow-right"></i></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Rooms Section End -->
@endsection
