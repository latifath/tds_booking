<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
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
            'telephone1' => $this->faker->e164PhoneNumber,
            'telephone2' => $this->faker->e164PhoneNumber,
            'email' => $this->faker->freeEmail ,
            'commune' => $this->faker->city  ,
            'ville' => $this->faker->city  ,
            'departement' => $this->faker->city                                                                                         ,
            'adresse' => $this->faker->city ,
            'localisation' => $this->faker->city ,
            'code_postal' => $this->faker->numberBetween($min =1, $max = 100),
            'media_id' => $this->faker->numberBetween($min =1, $max = 100),
            'created_at' => $this->faker->date(),
            'updated_at' => $this->faker->date(),
        ];
    }
}
