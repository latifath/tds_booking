<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Chambre;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ChambreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chambres')->insert([

            [
                "nom"=> "chambre",
                "slug"=> "chambre_Slug",
                "description"=> "hôtelde luxe",
                "night"=> "28000",
                "Nombre_lit"=> "1",
                "numero"=> "01",
                "superficie"=> "2",
                "availability"=> "disponible",
                "media_id"=> "1",
                "type_chambre_id"=> "1",
                "hotel_id"=> "2",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "suite",
                "slug"=> "suite_su",
                "description"=> "hôtelde luxe",
                "night"=> "28000",
                "Nombre_lit"=> "1",
                "numero"=> "02",
                "superficie"=> "2",
                "availability"=> "disponible",
                "media_id"=> "1",
                "type_chambre_id"=> "1",
                "hotel_id"=> "1",
                "created_at"=>Carbon::now()
            ]

        ]);
    }
}
