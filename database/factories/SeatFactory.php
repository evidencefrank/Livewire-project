<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seat>
 */
class SeatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'row_number'    => $this->faker->numberBetween(1, 10),
            'column_number' => $this->faker->numberBetween(1, 10),
            'label'         => $this->faker->word(),
            'version'       => $this->faker->numberBetween(0, 5),
        ];
    }
}
