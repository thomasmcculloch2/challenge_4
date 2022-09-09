<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Airline;
use App\Models\AirlineCity;
use App\Models\Flight;
use Illuminate\Database\Seeder;
use App\Models\City;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $airline= Airline::factory(10)->create();
        $city= City::factory(10)->create();
        $flight= Flight::factory(10)->create();
    }
}
