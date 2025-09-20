<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Review;
use App\Models\Reviews;
use Database\Factories\ReviewsFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // This function will create 33 books
        Book::factory(33)->create()->each(function ($book) {
            $numReviews = random_int(5, 30);

            Reviews::factory()->count($numReviews) // For each book will be created 5 to 30 good reviews
                ->good()
                ->for($book) // add foreign key of book in review column
                ->create();
        });

        Book::factory(33)->create()->each(function ($book) {
            $numReviews = random_int(5, 30);

            Reviews::factory()->count($numReviews)
                ->avarage()
                ->for($book)
                ->create();
        });

        Book::factory(34)->create()->each(function ($book) {
            $numReviews = random_int(5, 30);

            Reviews::factory()->count($numReviews)
                ->bad()
                ->for($book)
                ->create();
        });

    }
}
