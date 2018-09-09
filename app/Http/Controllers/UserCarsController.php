<?php

namespace App\Http\Controllers;

use App\Car;
use App\Carmake;
use App\Carmodel;
use App\Http\Requests\CreateCarsRequest;
use App\Photo;
use function Composer\Autoload\includeFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserCarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cars = Car::all()->where('user_id', Auth::user()->id);
        return view('user.car.index', compact('cars'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cars = Car::where('user_id', Auth::user()->id)->get();
        if (count($cars)>=12) {
            return redirect('/user')->with('message_error','You can`t add more cars!');

        }

        $makes= Carmake::pluck('name','name')->all();
        return view('user.car.create', compact('makes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCarsRequest $request)
    {
        //
        $input = $request->all();

        if ($request->spec) {
            count($request->spec) >= 1  ? $specification = implode(',', $request->spec): $specification = $request->spec;
            $input['specification']= $specification;
        }

        unset($input['spec']);

        $car = Car::create($input);

        $car_id = $car->id;
        return view('user.car.createImages', compact('car_id'));
        //return redirect('/user/cars/images', compact('car_id'))->with('message', 'Well done ! Car information inserted successfully!');
        //return redirect('user/cars')->with('message', 'Well done! Car inserted succefully!');
    }

    public function storeImages(Request $request){

        $file = $request->file('file');

        $name = time(). $file->getClientOriginalName();

        $file->move('images/', $name);

        $photo = Photo::create(['name'=>$name, 'created_by'=>$request->created_by, 'car_id'=>$request->car_id]);



    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $car = Car::findOrFail($id);
        return view('cardetails', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $car = Car::findOrFail($id);

        $spec = explode(',' ,$car->specification);

        $makes= Carmake::pluck('name','name')->all();

        $carmodels = Carmodel::where('carmake_name', $car->make)->pluck('name', 'name')->all();

        return view('user.car.edit', compact('car', 'spec','makes','carmodels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

    $car = Car::findOrFail($id);

    $input = $request->all();

    if ($request->spec) {
        count($request->spec) >= 1  ? $specification = implode(',', $request->spec): $specification = $request->spec;
        $input['specification']= $specification;
    }

    unset($input['spec']);

    $car->update($input);

    return redirect('user/cars')->with('message', 'Car information successfully updated');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $car = Car::findOrFail($id);

        $photos = $car->photos;

        foreach ($photos as $photo) {
            $photo_to_delete = Photo::find($photo->id);
            if (file_exists(public_path().'/images/'. $photo->getOriginal('name'))) unlink(public_path().'/images/'. $photo->getOriginal('name'));
            $photo_to_delete->delete();
        }

        $car->delete();

        return redirect('/user/cars')->with('message', 'Car successfully deleted!');


    }

    public function customDelete($id){

        $photo_to_delete = Photo::findOrFail($id);
        if (file_exists(public_path().'/images/'.$photo_to_delete->getOriginal('name'))) unlink(public_path().'/images/'. $photo_to_delete->getOriginal('name'));
        $photo_to_delete->delete();

        return back();

    }

}
