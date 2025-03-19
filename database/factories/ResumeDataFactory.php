<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ResumeData>
 */
class ResumeDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'role' => fake()->word(),
            'company' => fake()->company(),
            'description' => fake()->paragraph(),
            'from' => fake()->date(),
            'to' => fake()->date(),
        ];
    }
}
