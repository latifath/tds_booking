<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Chambre;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function verifierDisponibilite(Request $request)

    {

        $chambreId = $request->input('hotel_id');

        $dateDebut = Carbon::parse($request->input('date_debut'));
        $dateFin = Carbon::parse($request->input('date_fin'));

        $chambre = Chambre::where('hotel_id', $chambreId)->first();

        $disponible = $chambre->estDisponible($dateDebut, $dateFin);


        if($disponible == true) {
            $msg = [
                'message' => 'Chambre disponible!, veuillez faire une réservation.',
               ];

            $chambresDisponibles = Chambre::where('hotel_id', $chambre->id)->Where('availability', 'disponible')->get();

        return view('site-public.hotels.reservation', compact('chambresDisponibles'))->with($msg);

        } else {
           $msg = [
                'error' => 'Chambre indisponible,',
           ];
           return redirect()->back()->with($msg);
        }
    }

    // public function reservation($id){

    //     $room = chambre::findOrfail($id);

    //     return view('site-public.hotels.reservation', compact('room'));
    // }
}

