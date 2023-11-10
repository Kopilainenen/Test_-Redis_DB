<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' =>fake()->realText(20),
            'surname'=>fake()->realText(20),
            'age' =>fake()->numberBetween(20, 100),
            'work'=>fake()->realText(20),
            'salary'=>fake()->realText(20)
        ];
    }
}
