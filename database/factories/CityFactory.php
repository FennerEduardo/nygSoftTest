<?php

namespace Database\Factories;

use App\Models\Departament;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class CityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'city' => $this->faker->city(),
            'area_code' => $this->faker->numberBetween(100, 999),
            'lat' => $this->faker->numberBetween(10000, 99999),
            'lon' => $this->faker->numberBetween(10000, 99999),
            'gob_code' => $this->faker->numberBetween(10000, 99999),
            'departament_id' => Departament::inRandomOrder()->first() ?? Departament::factory(),
        ];
    }
}
