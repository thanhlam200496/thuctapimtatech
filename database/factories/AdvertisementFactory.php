<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Advertisement>
 */
class AdvertisementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image_url'=>fake()->url(),
            'link'=>fake()->url(),
            'position'=>fake()->name(),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ];
    }
}
