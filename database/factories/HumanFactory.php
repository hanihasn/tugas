<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Human>
 */
class HumanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           "name"=> $this->faker->name(),
            "age" => $this->faker->numberBetween(18,60),
            "gender"=> $this->faker->randomElement(["Male", "Female"])
        ];
    }
}