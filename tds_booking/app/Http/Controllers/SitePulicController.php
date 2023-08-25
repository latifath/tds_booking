<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Chambre;
use Illuminate\Http\Request;

class SitePulicController extends Controller
{
    public function index(){
        return view('site-public.index');
    }

    public function index_hotel(){

        $hotels = Hotel::orderBy('id', 'DESC')->paginate(6);

        return view('site-public.hotels', compact('hotels'));
    }

    public function show_room($id) {
        $hotel = Hotel::findOrfail($id);

        $rooms = Chambre::where('hotel_id', $hotel->id)->get();

        return view('site-public.chambres', compact('rooms', 'hotel'));
    }

    public function show($id, $id_chambre){
        $info_hotel = Hotel::findOrfail($id);

        $details_room = Chambre::where('id', $id_chambre)->get();

        return view('site-public.details-chambre', compact('details_room', 'info_hotel'));

    }

}
