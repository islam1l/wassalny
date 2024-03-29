<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trip>
 */
class TripFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'beginning' => DB::raw('POINT(32.299402, 30.625076)'),
            'destination' => DB::raw('POINT(32.299402, 30.625076)'),
            'available_seats' => fake()->numberBetween(2, 54),
        ];
    }
}
