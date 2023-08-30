<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Chambre;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function verifierDisponibilite(Request $request)
    {
        $chambreId = $request->input('chambre_id');

        $dateDebut = Carbon::parse($request->input('date_debut'));
        $dateFin = Carbon::parse($request->input('date_fin'));

        $chambre = Chambre::findOrfail($chambreId);

        $disponible = $chambre->estDisponible($dateDebut, $dateFin);

        // return response()->json(['availability' => $disponible]);

        if($disponible == true) {
            $msg = [
                 'message' => 'Chambre disponible!, veuillez faire une réservation.',
                ];

            return redirect()->back()->with($msg);
         } else {
           $msg = [
                'error' => 'Chambre indisponible,',
           ];
           return redirect()->back()->with($msg);
         }


    }
}
