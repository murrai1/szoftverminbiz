<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cityflight>
 */
class CityflightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "cityid" => $this->faker->numberBetween($min = 1, $max = 50),
            "flightid" => $this->faker->numberBetween($min = 1, $max = 250),
        ];
    }
}
