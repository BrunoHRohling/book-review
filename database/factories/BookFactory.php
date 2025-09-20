<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'author' => fake()->name,
            'created_at' => fake()->dateTimeBetween('-2 years'),
            'updated_at' => function (array $attributes) { // This function is for you catch the created_at attibute for range of updated_at column
                return fake()->dateTimeBetween($attributes['created_at']);
            }
        ];
    }
}
