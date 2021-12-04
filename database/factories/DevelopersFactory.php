<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DevelopersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title_en' => $this->faker->word,
            'details_en' => $this->faker->paragraph,
        ];
    }
}
