<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use App\Models\City;
use App\Models\Flight;
use Faker\Core\DateTime;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index() {
        return view ('flightsComponent.flights', [
            'flights' => Flight::paginate(13),
        ]);
    }

    public function remove($id) {
        $flights = Flight::find($id);
        $flights->delete();
    }

    public function create() {
        return view ('flightsComponent.add_flight', [
            'airlines' => Airline::all(),
            'cities' => City::all(),
        ]);
    }

    public function cities_origin($id) {
        $airline = Airline::find($id);
        $cities = $airline->cities;

        if($cities->count() > 0) {
            echo '<option value=""> Select origin city </option>';
            foreach ($cities as $city) {

                echo '<option value="'.$city->id.'">'.$city->name.'</option>';
            }
        } else {
            echo '<option value=""> No cities </option>';
        }
    }

    public function cities_destination($id) {
        $airline = Airline::find($id);
        $cities = $airline->cities;

        if($cities->count() > 0) {
            echo '<option value=""> Select destination city </option>';
            foreach ($cities as $city) {

                echo '<option value="'.$city->id.'">'.$city->name.'</option>';
            }
        } else {
            echo '<option value=""> No cities </option>';
        }
    }

    public function store() {

        $attributes = request()->validate([
            'airline' => ['required'],
            'origin_city' => ['required'],
            'destination_city' => ['required'],
            'start' => ['required'],
            'end' => ['required']
        ]);



        $flight = [
            'airline_id' => $attributes['airline'],
            'origin_city' => $attributes['origin_city'],
            'destination_city' => $attributes['destination_city'],
            'takeoff_time' => date('Y-m-d',strtotime($attributes['start'])),
            'arrival_time' => date('Y-m-d',strtotime($attributes['end'])),
        ];


        Flight::create($flight);

        return redirect('flights')->with('success', 'Your flight has been created');
    }

}
