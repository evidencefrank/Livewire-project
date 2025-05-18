<?php

namespace Database\Factories;

use App\Enums\Currency;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'           => $this->faker->word(),
            'description'    => $this->faker->paragraph(),
            'start_at'       => now()->startOfDay(),
            'end_at'         => now()->endOfDay(),
            'rows'           => $this->faker->numberBetween(1, 10),
            'columns'        => $this->faker->numberBetween(1, 10),
            'price_cents'    => $this->faker->numberBetween(1000, 10000),
            'price_currency' => $this->faker->randomElement(Currency::toArray()),
        ];
    }
}
