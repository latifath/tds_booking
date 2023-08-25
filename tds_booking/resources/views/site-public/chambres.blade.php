@extends('layouts.master')

@section('content')
 <!-- Breadcrumb Section Begin -->
 <div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Chambres de l'Hotel #{{ $hotel->nom }}</h2>
                    <div class="bt-option">
                        <a href="{{ route('root_index') }}">Accueil</a>
                        <span>chambres</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="rooms-section spad">
    <div class="container">
        <div class="row">
            @foreach($rooms as $room)
            <div class="col-lg-4 col-md-6">
                <div class="room-item">
                    <img src="{{ asset('assets/img/room/room-1.jpg') }}" alt="">
                    <div class="ri-text">
                        <h4>{{ $room->nom }}</h4>
                        <h3>{{ format_price_xof($room->night) }}<span>/Par nuit</span></h3>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="r-o">Numero:</td>
                                    <td>{{ $room->numero }}</td>
                                </tr>
                                <tr>
                                    <td class="r-o">Lit:</td>
                                    <td>{{ $room->Nombre_lit }}</td>
                                </tr>
                                <tr>
                                    <td class="r-o">Superficie:</td>
                                    <td>{{ $room->superficie }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="{{ route('root_show_detail_romm_hotel', [$hotel->id, $room->id]) }}" class="primary-btn">Voir les détails</a>
                    </div>
                </div>
            </div>
            @endforeach
{{--
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
            </div> --}}
        </div>
    </div>
</section>
@endsection
