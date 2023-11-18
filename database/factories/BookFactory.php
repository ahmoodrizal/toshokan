<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Publisher;
use Illuminate\Support\Str;
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
        $title = fake()->sentence(3);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'author_id' => Author::all()->random(),
            'publisher_id' => Publisher::all()->random(),
            'isbn' => fake()->unique()->isbn13(),
            'description' => fake()->sentences(5, true),
            'language' => fake()->randomElement(['English', 'Japan', 'Indonesia']),
            'page_number' => 40
        ];
    }
}
