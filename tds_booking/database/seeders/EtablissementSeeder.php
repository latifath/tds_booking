<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EtablissementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('etablissements')->insert([
        [
            "nom"=> "hotel",
            "slug"=> "N_Slug",
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
            "created_at"=>Carbon::now()
        ],
        ]);
    }
}
