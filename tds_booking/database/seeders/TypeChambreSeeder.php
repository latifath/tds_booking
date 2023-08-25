<?php

namespace Database\Seeders;

use App\Models\TypeChambre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeChambreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeChambre:: factory()->count(5)->create();

    }
}
