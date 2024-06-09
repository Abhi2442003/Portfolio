<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user_id = 1;
        return [
            'user_id' => $user_id++,
            'city' => fake()->city(),
            'state' => fake()->state(),
            'country' => fake()->country(),
        ];
    }
}
