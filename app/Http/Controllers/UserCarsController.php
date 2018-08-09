<?php

namespace App\Http\Controllers;

use App\Car;
use App\Http\Requests\CreateCarsRequest;
use App\Photo;
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

        return view('user.car.create');
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
            count($request->spec) >= 2  ? $specification = implode(',', $request->spec): $specification = $request->spec;

            $input['specification']= $specification;
        }

        unset($input['spec']);



        if ($photo_all= $request->file('photo_all')) {

            $photos = array();

            foreach ($photo_all as $photo_item) {
                $name_all = time(). $photo_item->getClientOriginalName();

                $photo_item->move('images/', $name_all);


                $photo = Photo::create(['name'=>$name_all, 'created_by'=>$input['user_id']]);
                $photos[] = $photo->id;
            }
            $input['photo_all']= implode(',', $photos);
        }


        if ($file = $request->file('photo_id')) {
            $name = time().$file->getClientOriginalName();
            $file->move('images/', $name);


            $photo = Photo::create(['name'=>$name, 'created_by'=>$input['user_id']]);
            $input['photo_id'] = $photo->id;

        }







        Car::create($input);

        return redirect('user/cars')->with('message', 'Well done! Car inserted succefully!');
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

        return view('user.car.edit', compact('car', 'spec'));
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

        if ($photos = $car->photo_all) {

            $photos_array= explode(',', $photos);

            foreach ($photos_array as $photos_to_delete) {
                $photo = Photo::find($photos_to_delete);
                if (file_exists(public_path(). $photo->name)) unlink(public_path(). $photo->name);
                $photo->delete();
            }
        }

        if ($car->photo_id) {

            $photo = Photo::find($car->photo_id);
            if (file_exists(public_path(). $photo->name)) unlink(public_path(). $photo->name);
            $photo->delete();

        }

        $car->delete();

        return redirect('/user/cars')->with('message', 'Car successfuly deleted!');


    }
}
