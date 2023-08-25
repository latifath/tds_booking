<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Media>
 */
class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'filename' =>$this->faker->randomElement($array = [
            //     'https://cdn.pixabay.com/photo/2022/05/05/14/57/rice-7176354__340.jpg',
            //     'https://cdn.pixabay.com/photo/2022/05/10/11/12/tree-7186835__480.jpg'
            // ]),
            // 'mimetype' => 'image/jpeg',
            // 'created_at' => $this->faker->date(),
            // 'updated_at' => $this->faker->date(),
        ];
    }
}
