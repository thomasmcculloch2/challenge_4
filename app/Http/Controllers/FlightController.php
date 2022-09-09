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

}
