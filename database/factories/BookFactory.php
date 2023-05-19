<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class BookFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(3),
            'title' => $this->faker->sentence(5),
            'author' => $this->faker->name,
            'publisher_name' => $this->faker->company,
            'book_category' => $this->faker->word,
            'isbn' => $this->faker->unique()->isbn13,
            'year' => $this->faker->year,
        ];
    }
}
