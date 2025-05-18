<?php

namespace Database\Factories;

use App\Enums\Currency;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Purchase>
 */
class PurchaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'        => $this->faker->uuid(),
            'seat_id'        => $this->faker->uuid(),
            'event_id'       => $this->faker->uuid(),
            'price_cents'    => $this->faker->numberBetween(1000, 10000),
            'price_currency' => $this->faker->randomElement(Currency::toArray()),
            'purchased_at'   => now(),
        ];
    }
}
