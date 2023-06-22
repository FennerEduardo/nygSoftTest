<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Departament>
 */
class DepartamentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->state(),
            'area_code' => $this->faker->numberBetween(100, 999),
            'gob_code' => $this->faker->numberBetween(10000, 99999),
            'country_id' => 1,
        ];
    }
}
