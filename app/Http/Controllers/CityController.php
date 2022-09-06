<?php

namespace App\Http\Controllers;
use App\Models\City;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index() {
        return view ('cities', [
            'cities' => City::paginate(13),
        ]);
    }

    public function remove($id) {
        $city = City::find($id);
        $city->delete();
        return redirect('/cities')->with('success', 'City deleted');
    }

    public function edit($id) {
        $city = City::find($id);
        return view('edit',['city' => $city]);
    }

    public function update($id) {
        $city = City::find($id);
        $attributes = request()->validate([
            'name' => ['required','min:1','max:255','unique:cities,name'],
        ]);
        $city->update($attributes);
        return redirect('/cities')->with('success', 'Your city has been edited');
    }

    public function create() {
        return view ('add');
    }

    public function store() {
        $attributes = request()->validate([
            'name' => ['required','max:255','unique:cities,name'],
        ]);

        City::create($attributes);

        return redirect('/cities')->with('success', 'Your city has been added');
    }
}
