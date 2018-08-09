<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Photo;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $role = array(Auth::user()->role->id => Auth::user()->role->name);
        $user = User::findOrFail(Auth::user()->id);
        return view('user.profile.index', compact('user', 'role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        //
        $user = User::findOrFail($id);

        $input = $request->all();

        //check if new picture is set
        if ($file = $request->file('photo_id')){

            //check if there is old picture
            if ($user->photo_id) {
                if (file_exists(public_path().$user->photo->name)) unlink(public_path().$user->photo->name);
                $photo = Photo::findOrFail($user->photo_id);
                $photo->delete();
            }

            $name = time(). $file->getClientOriginalName();
            $file->move('images/', $name);
            $photo = Photo::create(['name'=>$name, 'created_by'=>$id]);
            $input['photo_id']=$photo->id;

        }

        $user->update($input);

        return redirect('user/profile')->with('message', 'Information successfuly updated');




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
    }
}
