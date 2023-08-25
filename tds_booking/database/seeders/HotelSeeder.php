<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Hotel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotels')->insert([

            [
                "nom"=> "Novotel",
                "slug"=> "Novotel_Slug",
                "description"=> "hôtelde luxe",
                "telephone1"=> "+229060202320",
                "telephone2"=> "+229060202320",
                "email"=> "novo@example.com",
                "commune"=> "Cotonou",
                "ville"=> "cotonou",
                "departement"=> "littoral",
                "adresse"=> " boulevar dela marina",
                "localisation"=> " Map",
                "code_postal"=> "0229",
                "media_id"=> "1",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Azalai",
                "slug"=> "aza",
                "description"=> "hôtelde luxe",
                "telephone1"=> "+229060202320",
                "telephone2"=> "+229060202320",
                "email"=> "novo@example.com",
                "commune"=> "Cotonou",
                "ville"=> "cotonou",
                "departement"=> "littoral",
                "adresse"=> " boulevar dela marina",
                "localisation"=> " Map",
                "code_postal"=> "0229",
                "media_id"=> "2",
                "created_at"=>Carbon::now()
            ]
            // [
            //     "nom"=> "Novotel",
            //     "slug"=> "Novotel_Slug",
            //     "description"=> "hôtelde luxe",
            //     "telephone1"=> "+229060202320",
            //     "telephone2"=> "+229060202320",
            //     "email"=> "novo@example.com",
            //     "commune"=> "Cotonou",
            //     "ville"=> "cotonou",
            //     "departement"=> "littoral",
            //     "adresse"=> " boulevar dela marina",
            //     "localisation"=> " Map",
            //     "code_postal"=> "0229",
            //     "media_id"=> "3",
            //     "created_at"=>Carbon::now()
            // ],
            // [
            //     "nom"=> "Novotel",
            //     "slug"=> "Novotel_Slug",
            //     "description"=> "hôtelde luxe",
            //     "telephone1"=> "+229060202320",
            //     "telephone2"=> "+229060202320",
            //     "email"=> "novo@example.com",
            //     "commune"=> "Cotonou",
            //     "ville"=> "cotonou",
            //     "departement"=> "littoral",
            //     "adresse"=> " boulevar dela marina",
            //     "localisation"=> " Map",
            //     "code_postal"=> "0229",
            //     "media_id"=> "4",
            //     "created_at"=>Carbon::now()
            // ],
        ]);
        // Hotel:: factory()->count(5)->create();


        }
}
