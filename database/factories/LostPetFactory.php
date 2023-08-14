<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LostPet>
 */
class LostPetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->firstName(),
            'species' => fake()->randomElement(['cat', 'dog', 'bird', 'rabbit', 'guinea pig']),
            'sex' => fake()->randomElement(['male', 'female']),
            'status'=> 'Lost',
            'physical_description' => fake()->sentence(),
            'message' => fake()->paragraph(),
            'last_seen_date' => fake()->dateTime(),
            'last_known_location' => fake()->address(),
            'cross_street' => fake()->streetName(),
            'age' => fake()->numberBetween(0,30),
            'microchip_no' => fake()->randomNumber(5, true),
            'tattoo' => fake()->randomElement(['Yes', 'No'])
        ];
    }
}
