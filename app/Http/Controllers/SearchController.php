<?php

namespace App\Http\Controllers;

use App\Car;
use App\Carmake;
use App\Carmodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SearchController extends Controller
{
    //
    public function show() {

        $makes = Carmake::pluck('name', 'name')->all();
        return view('search', compact('makes'));
    }

    public function showMakes($id) {
        $makes = Carmake::pluck('name', 'name')->all();

        $newmake = str_replace("-"," ", $id);
        $cars = Car::makes($newmake)->get();

        $input['make']=$newmake;
        $carmodels = Carmodel::where('carmake_name', $input['make'])->pluck('name', 'name')->all();
        return view('search', compact('cars', 'input', 'makes', 'carmodels'));


    }

    public function showResults(Request $request) {
        $input = $request->all();

        $makes = Carmake::pluck('name', 'name')->all();


        if (!empty($input['make'])) {
            $carmodels = Carmodel::where('carmake_name', $input['make'])->pluck('name', 'name')->all();
        }


        $cars = Car::makes($input['make'])->models($input['model'])->years($input['min_year'], $input['max_year'])
            ->mileages($input['min_mileage'], $input['max_mileage'])->bodies($input['body'])
            ->engines($input['min_engine'], $input['max_engine'])->powers($input['min_power'],$input['max_power'])
            ->get();



        return view('search', compact('cars', 'input', 'makes', 'carmodels'));
    }

    public function showCar($id) {

        $carKey = 'car_' . $id;
        // Check if blog session key exists
        // If not, update view_count and create session key
        if (!Session::has($carKey)) {
            Car::where('slug', $id)->increment('view_count');
            Session::put($carKey, 1);
        }





        $car = Car::where('slug', $id)->first();
        return view('cardetails', compact('car'));
    }

    public function getCarmodels($id) {

        $carmodels = Carmodel::where('carmake_name', $id)->pluck('name', 'name')->all();
        return json_encode($carmodels);
    }
}
