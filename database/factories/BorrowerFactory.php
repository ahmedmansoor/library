<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Borrower>
 */
class BorrowerFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'nic' => 'A' . $this->faker->unique()->numerify('######'),
            'phone_number' => $this->faker->unique()->phoneNumber,
            'address' => $this->faker->address,
        ];
    }
}
