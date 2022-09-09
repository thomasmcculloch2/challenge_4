<?php

namespace Database\Factories;

use App\Models\Airline;
use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flight>
 */
class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'origin_city' => City::factory(),
            'destination_city' => City::factory(),
            'airline_id' => Airline::factory(),
            'takeoff_time' => fake()->dateTime(),
            'arrival_time' => fake()->dateTime(),
        ];
    }
}
