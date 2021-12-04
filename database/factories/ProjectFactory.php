<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProjectFactory extends Factory
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
            'image' => $this->faker->image(public_path('images'),640,480, null, false),
            'category_id' => 2,
            'district_id' => 3,
            'user_id' => 1,
            'developer_id' => 1,
        ];
    }
}
