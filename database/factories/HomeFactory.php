<?php

namespace Database\Factories;

use App\Models\Home;
use Illuminate\Database\Eloquent\Factories\Factory;

class HomeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Home::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'user_id' => 1, // Ganti dengan user ID yang valid
            'slug' => $this->faker->slug(),
            'tagline' => $this->faker->sentence(),
            'about' => $this->faker->paragraph(),
        ];
    }
}
