<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Chambre;
use Illuminate\Http\Request;
use App\Models\Etablissement;

class SitePulicController extends Controller
{
    public function index(){

        $last_hotels = Hotel::orderBy('id', 'DESC')->limit(4)->get();


        return view('site-public.index', compact('last_hotels'));
    }

    public function index_hotel(){

        $hotels = Hotel::orderBy('id', 'DESC')->paginate(6);

        return view('site-public.hotels.hotels', compact('hotels'));
    }

    public function show_hotel($slug) {

        $hotel = Hotel::where('slug', $slug)->first();

        return view('site-public.hotels.details-hotel', compact('hotel'));
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
