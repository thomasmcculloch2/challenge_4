<?php

namespace App\Http\Controllers;
use App\Models\Airline;

use Illuminate\Http\Request;

class AirlineController extends Controller
{
    public function index() {
        return view ('airlinesComponent.airlines', [
            'airlines' => Airline::paginate(13),
        ]);
    }

    public function remove($id) {
        $airlines = Airline::find($id);
        $airlines->delete();
    }

    public function edit($id) {
        $airlines = Airline::find($id);
        return view('airlinesComponent.edit_airline',['airline' => $airlines]);
    }

    public function update($id) {
        $airlines = Airline::find($id);
        $attributes = request()->validate([
            'name' => ['required','min:1','max:255','unique:cities,name'],
            'description' => ['required','min:10'],
        ]);
        $airlines->update($attributes);
        return redirect('airlines')->with('success', 'Your airlines has been edited');
    }

    public function create() {
        return view ('airlinesComponent.add_airline');
    }

    public function store() {
        $attributes = request()->validate([
            'name' => ['required','max:255','unique:cities,name'],
            'description' => ['required','min:10'],
        ]);

        Airline::create($attributes);

        return redirect('airlines')->with('success', 'Your airline has been added');
    }
}
