<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'room_number' => $this->faker->unique()->numberBetween(101, 999),
            'room_type' => $this->faker->randomElement(['Single', 'Double', 'Suite']),
            'room_price' => $this->faker->numberBetween(100000, 500000),
            'room_status' => $this->faker->randomElement(['available', 'maintenance']),
        ];
    }
}
