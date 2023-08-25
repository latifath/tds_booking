<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chambre>
 */
class ChambreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $nom = $this->faker->city();
        $slug= Str::slug($nom . $this->faker->time($format = 's', $max = 'now'));
        return [
            'nom' => $nom,
            'slug' => $slug,
            'description' => $this->faker->sentence($nbWords = 8, $variableNbWords = true) ,
            'night' => $this->faker->numberBetween($min = 10000, $max = 10000),
            'Nombre_lit' => $this->faker->randomElement($array = array ('1','2','3','4','5','6','7','8','9','10')),
            'numero' => $this->faker->numberBetween($min = 1, $max = 9000),
            'superficie' => $this->faker->numberBetween($min = 1, $max = 9000),
            'availability' => $this->faker->freeEmail ,
            'media_id' => $this->faker->numberBetween($min =1, $max = 100),
            'type_chambre_id' => $this->faker->numberBetween($min =1, $max = 100),
            'hotel_id' => $this->faker->numberBetween($min =1, $max = 100),
            'created_at' => $this->faker->date(),
            'updated_at' => $this->faker->date(),
        ];
    }
}
