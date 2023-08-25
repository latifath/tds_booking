<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $nom = $this->faker->city();
        return [
            'nom' => $nom,
            'description' => $this->faker->sentence($nbWords = 8, $variableNbWords = true) ,
            'prix' => $this->faker->numberBetween($min = 10000, $max = 10000),
            'media_id' => $this->faker->numberBetween($min =1, $max = 100),
            'created_at' => $this->faker->date(),
            'updated_at' => $this->faker->date(),
        ];
    }
}
