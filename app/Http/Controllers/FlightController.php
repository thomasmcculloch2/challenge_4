<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use App\Models\City;
use App\Models\Flight;
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

//    public function create() {
//        return view ('flightsComponent.add_flight', [
//            'airlines' => Airline::all(),
//            'cities' => City::all(),
//        ]);
//    }

//    public function store() {
//
//        $attributes = request()->validate([
//            'name' => ['required','max:255','unique:cities,name'],
//            'description' => ['required','min:10'],
//            'cities' => ['required', 'array', 'min:1']
//        ]);
//
//        $airline = Airline::create($attributes);
//
//        foreach ($attributes['cities'] as $city) {
//            $airline->cities()->attach($city);
//        }
//
//        return redirect('airlines')->with('success', 'Your airline has been added');
//    }

}
