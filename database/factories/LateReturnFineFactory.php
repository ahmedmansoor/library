<?php

namespace Database\Factories;

use App\Models\Borrow;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LateReturnFines>
 */
class LateReturnFineFactory extends Factory
{
    public function definition(): array
    {
        return [
            'borrow_id' => Borrow::factory(),
            'amount' => $this->faker->randomFloat(2, 0, 100), // random amount between 0 and 100 with 2 decimal places
            'payment_type' => $this->faker->randomElement(['cash', 'card', 'online']),
            'payment_date' => $this->faker->dateTimeThisYear,
        ];
    }
}
