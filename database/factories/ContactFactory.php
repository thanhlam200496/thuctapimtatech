<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'message' => $this->faker->realText(200),
            'mess_return' => $this->faker->boolean(50) ? $this->faker->realText(200) : null,
            'status' => $this->faker->numberBetween(0, 1),
        ];
    }
}
