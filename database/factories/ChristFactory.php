<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ChristFactory extends Factory
{
    /**
     * Define the publicController's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'description' => fake()->text(150),
            'price' => rand(10, 100),
            'product_code' => fake()->unique()->postcode(),
            'image' => 'https://picsum.photos/seed/'.fake()->uuid.'/300/200',
            'name' => fake()->words(3,true),
            'status' => fake()->randomElement(['available', 'not available']),
            'brand' => fake()->word,
        ];
    }
}
