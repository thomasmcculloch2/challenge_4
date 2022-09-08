<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Airline;
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
        $city = City::factory(20)->create();
        $airline = Airline::factory(20)->create();
    }
}
