<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Media;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medias')->insert([

            [
                "id"=> 1,
                "filename"=> "https://cdn.pixabay.com/photo/2022/05/05/14/57/rice-7176354__340.jpg",
                "mimetype"=> "jpg",
                "created_at"=>Carbon::now()
            ],
            [
                "id"=> 2,
                "filename"=> "https://cdn.pixabay.com/photo/2022/05/05/14/57/rice-7176354__340.jpg",
                "mimetype"=> "jpg",
                "created_at"=>Carbon::now()
            ],
            [
                "id"=> 3,
                "filename"=> "https://cdn.pixabay.com/photo/2022/05/05/14/57/rice-7176354__340.jpg",
                "mimetype"=> "jpg",
                "created_at"=>Carbon::now()
            ],
            [
                "id"=> 4,
                "filename"=> "https://cdn.pixabay.com/photo/2022/05/05/14/57/rice-7176354__340.jpg",
                "mimetype"=> "jpg",
                "created_at"=>Carbon::now()
            ],

        ]);
    }
}
