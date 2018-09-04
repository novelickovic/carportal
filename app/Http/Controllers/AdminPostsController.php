<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CreatePostRequest;
use App\Photo;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::pluck('name', 'id')->all();
        $user_id = Auth::user()->id;
        return view('admin.posts.create', compact('categories', 'user_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
        //
        $input = $request->all();

        if ($file = $request->file('photo_id')){

            $name = time().$file->getClientOriginalName();

            $file->move('images/', $name);

            $photo = Photo::create(['name'=>$name, 'created_by'=>$input['created_by']]);

            $input['photo_id']= $photo->id;

        }

        Post::create($input);


        return redirect('/admin/posts')->with('message', 'New post successful created!');

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
        $post = Post::findOrFail($id);
        $categories = Category::pluck('name', 'id')->all();
        $user_id = Auth::user()->id;

        return view('admin.posts.edit', compact('post', 'categories', 'user_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreatePostRequest $request, $id)
    {
        //



        $post=Post::findOrFail($id);

        $input = $request->all();



        // Check if new thumbnail picture is set
        if ($file = $request->file('photo_id')){

            //Delete old picture
            $oldphoto = Photo::findOrFail($post->photo_id);
            unlink(public_path().'/images/'. $oldphoto->getOriginal('name'));
            $oldphoto->delete();

            //Set new picture
            $name = time().$file->getClientOriginalName();
            $file->move('images/', $name);
            $photo = Photo::create(['name'=>$name, 'created_by'=>$request->user_id]);
            $input['photo_id'] = $photo->id;

        } else {
            unset($input['photo_id']);

        }



        $post->update($input);

        return redirect('/admin/posts')->with('message', 'Post successful updated');




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

        //check if post have an image
        if ($post->photo_id) {

            $photo_to_delete = Photo::findOrFail($post->photo_id);
            unlink(public_path().'/images/'. $photo_to_delete->getOriginal('name'));
            $photo_to_delete->delete();
        }

        $post->delete();

        return redirect('/admin/posts')->with('message', 'Post successful deleted !');


    }
}
