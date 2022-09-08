<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Airline;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CityAirline>
 */
class CityAirlineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'city_id' => City::factory(),
            'airline_id' => Airline::factory()
        ];
    }
}
