<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reviews>
 */
class ReviewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_id' => null,
            'review' => fake()->paragraph,
            'rating' => fake()->numberBetween(1, 5),
            'created_at' => fake()->dateTimeBetween('-2 years'),
            'updated_at' => function (array $attributes) { // This function is for you catch the created_at attibute for range of updated_at column
                return fake()->dateTimeBetween($attributes['created_at']);
            }
        ];
    }

    /**
     * Add good rating, numbers between 4 and 5
     * @return ReviewsFactory
     */
    public function good()
    {
        return $this->state(function (array $attributes) {
            return [
                'rating' => fake()->numberBetween(4,5)
            ];
        });
    }

    /**
     * Add avarage rating, numbers between 2 and 5
     * @return ReviewsFactory
     */
    public function avarage()
    {
        return $this->state(function (array $attributes) {
            return [
                'rating' => fake()->numberBetween(2,5)
            ];
        });
    }


    /**
     * Add bad rating, numbers between 1 and 3
     * @return ReviewsFactory
     */
    public function bad()
    {
        return $this->state(function (array $attributes) {
            return [
                'rating' => fake()->numberBetween(1,3)
            ];
        });
    }
}
