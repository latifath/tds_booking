<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Chambre;
use Illuminate\Http\Request;
use App\Models\Etablissement;

class SitePulicController extends Controller
{
    public function index(){

        $etablisssements = Etablissement::where('nom', 'hotel')->get();


        return view('site-public.index', compact('etablisssements'));
    }

    public function index_hotel(){

        $hotels = Hotel::orderBy('id', 'DESC')->paginate(6);

        return view('site-public.hotels.hotels', compact('hotels'));
    }

    public function show_room($id) {

        $hotel = Hotel::findOrfail($id);

        $rooms = Chambre::where('hotel_id', $hotel->id)->get();

        return view('site-public.hotels.chambres', compact('rooms', 'hotel'));
    }

    public function show($id, $id_chambre){
        $info_hotel = Hotel::findOrfail($id);

        $details_room = Chambre::where('id', $id_chambre)->get();

        return view('site-public.hotels.details-chambre', compact('details_room', 'info_hotel'));

    }

    public function search(Request $request){
        $lieu = $request->input('lieu');

        $hotels = Hotel::where('ville', 'like', "%$lieu%")->orwhere('commune', 'like', "%$lieu%")->paginate(6);

        $verify_hotels = $lieu;

        return view('site-public.hotels.search', compact('hotels', 'verify_hotels'));

    }

}
