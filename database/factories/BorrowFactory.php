<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Borrower;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Borrow>
 */
class BorrowFactory extends Factory
{
    public function definition(): array
    {
        $issueDate = $this->faker->dateTimeBetween('-1 year', 'now');
        $dueDate = (clone $issueDate)->modify('+14 days');

        return [
            'borrower_id' => Borrower::factory(),
            'book_id' => Book::factory(),
            'issue_date' => $issueDate,
            'due_date' => $dueDate,
            'return_date' => $this->faker->optional()->dateTimeBetween($dueDate, 'now'),
            'is_late' => $this->faker->randomElement(['no', 'yes']),
        ];
    }
}
