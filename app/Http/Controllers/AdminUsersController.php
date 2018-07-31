<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Photo;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::paginate(10);
        $roles = Role::pluck('name','id')->all();

        return view('admin.users.index', compact('users', 'roles'));
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
    public function store(CreateUserRequest $request)
    {
        //


        $input = $request->all();

        if ($file = $request->file('photo_id')){

            $name = time(). $file->getClientOriginalName();

            $file->move('images/', $name);

            $photo = Photo::create(['name'=>$name]);

            $input['photo_id']= $photo->id;
        }

        User::create($input);

        return back()->with('message', 'Well done ! User has been succesful created !');




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
        $user = User::findOrFail($id);
        $roles = Role::pluck('name', 'id');
        return view('admin.users.edit', compact('user', 'roles'));
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
        $user= User::findOrFail($id);

        $input = $request->all();

        if ($file = $request->file('photo_id')){

            // Check and delete old image
            if ($user->photo) {
                $old_image_name = $user->photo->name;
                unlink(public_path() . $old_image_name);
            }

            // set new image
            $name = time(). $file->getClientOriginalName();
            $file->move('images/', $name);
            $photo = Photo::create(['name'=>$name]);
            $input['photo_id']= $photo->id;
        }

        $user->update($input);

        return redirect('/admin/users')->with('message', 'User status has been updated');

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

        $user = User::findOrFail($id);

        if ($user->id == Auth::user()->id) {
            return redirect('/admin/users')->with('message_error', 'You can not delete youself!');
        }
        if ($user->photo_id) {

            unlink(public_path(). $user->photo->name);
            Photo::findOrFail($user->photo_id)->delete();

        }
        $user->delete();

        return redirect('/admin/users')->with('message', 'User has been deleted');

    }
}
