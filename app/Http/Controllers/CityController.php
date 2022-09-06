<?php

namespace App\Http\Controllers;
use App\Models\City;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index() {
        return view ('cities', [
            'cities' => City::all(),
        ]);
    }

    public function remove($id) {
        $city = City::find($id);
        $city->delete();
        return redirect('/')->with('success', 'City deleted');
    }

    public function edit($id) {
        $city = City::find($id);
        return view('edit',['city' => $city]);
    }

    public function add($id) {
        $attributes = request()->validate([
            'name' => ['required','max:255'],
        ]);

        City::create($attributes);

        return redirect('/')->with('success', 'Your city has been added');
    }
}
