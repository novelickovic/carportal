<?php

namespace App\Http\Controllers;

use App\Category;
use App\Photo;
use App\Post;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::all();
        return view('author.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user_id = Auth::user()->id;
        $categories = Category::pluck('name', 'id')->all();
        return view('author.create', compact('categories', 'user_id'));
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
        $input = $request->all();

        //save image
        if ($file = $request->file('photo_id')){

            $name = time().$file->getClientOriginalName();

            $file->move('images/', $name);

            $photo = Photo::create(['name'=>$name, 'created_by'=>$request->created_by]);

            $input['photo_id']= $photo->id;

        }

        Post::create($input);

        return redirect('/author')->with('message', 'Well Done! Post successfuly created!');




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



        $posts = Post::all()->where('user_id', $id);

        return view('author.index', compact('posts'));
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



        $categories= Category::pluck('name', 'id')->all();
        $user_id=Auth::user()->id;
        $post = Post::findOrFail($id);
        if (Auth::user()->id == $post->user_id) {
            return view('author.edit', compact('categories', 'user_id', 'post'));
            }
        return redirect('/author')->with('message_error', 'Error! You can update only you posts!');

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
        $input = $request->all();
        $post = Post::findOrFail($id);

        if (Auth::user()->id !== $post->user_id) {

            return redirect('/author')->with('message_error', 'Error! You can update only you posts!');
        }

        // check if set new image
        if ($file = $request->file('photo_id')){

            //delete old one
            if (file_exists(public_path(). $post->photo->name)) unlink(public_path().$post->photo->name);
            $photo = Photo::findOrFail($post->photo_id);
            $photo->delete();


            //set new one
            $name = time().$file->getClientOriginalName();

            $file->move('images/',$name);

            $photo = Photo::create(['name'=>$name, 'created_by'=>$request->created_by]);

            $input['photo_id']=$photo->id;
        }

        $post->update($input);

        return redirect('/author')->with('message','Post successfuly updated');
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


        $post = Post::findOrFail($id);

        if (Auth::user()->id == $post->user_id) {


            // check if there is any images attached to post
            if ($post->photo_id) {
                if (file_exists(public_path().$post->photo->name)) unlink(public_path(). $post->photo->name);

                $photo = Photo::findOrFail($post->photo_id);
                $photo->delete();
            }

            $post->delete();

            return redirect('/author')->with('message', 'Post successfuly deleted!');

        } else {

            return redirect('/author')->with('message_error', 'Error! You can delete only you posts!');

        }
    }

    public function showProfile($id){

        $user = User::findOrFail($id);

        $role = array(Auth::user()->role->id=>Auth::user()->role->name);

        return view('author.profile', compact('user', 'role'));

    }

    public function updateProfile(Request $request, $id){

        $user = User::findOrFail($id);

        $input = $request->all();

        if ($file = $request->file('photo_id')){

            if ($old_picture = $user->photo_id) {
                if (file_exists(public_path(). $user->photo->name)) unlink(public_path(). $user->photo->name);
                $photo = Photo::findOrFail($old_picture);
                $photo->delete();
            }

            $name = time().$file->getClientOriginalName();
            $file->move('images/', $name);

            $newphoto = Photo::create(['name'=>$name, 'created_by'=>$request->created_by]);
            $input['photo_id']= $newphoto->id;

        }

        $user->update($input);

        return back()->with('message', 'Information successfuly updated!');


    }



}
