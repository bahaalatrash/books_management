<?php

namespace Database\Factories;

use App\FormatEnum;
use App\Models\Book;
use App\Models\Cover;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Cover>
 */
class CoverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "color"=>fake()->name(),
            "book_id"=>28,
            "format"=>fake()->randomElement(FormatEnum::cases())->value,

        ];
    }
}
