<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function show() {
        return view('search');
    }

    public function showResults(Request $request) {
        $input = $request->all();

        $cars = Car::makes($input['make'])->models($input['model'])->years($input['min_year'], $input['max_year'])
            ->mileages($input['min_mileage'], $input['max_mileage'])->bodies($input['body'])
            ->fuels($input['fuel'])->prices($input['min_price'], $input['max_price'])
            ->engines($input['min_engine'], $input['max_engine'])->powers($input['min_power'],$input['max_power'])
            ->get();

        return view('search', compact('cars', 'input'));
    }

    public function showCar($id) {
        $car = Car::findOrFail($id);
        return view('cardetails', compact('car'));
    }
}
