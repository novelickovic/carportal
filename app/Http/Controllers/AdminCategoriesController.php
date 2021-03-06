<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CreateCategoryRequest;
use Illuminate\Http\Request;

class AdminCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
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
    public function store(CreateCategoryRequest $request)
    {
        //

        // working case
        //$category = $request->all();
        //Category::create($category);
        //return back()->with('message', 'Well done! New category created!');


        //demo
        return back()->with('message', 'In admin demo mode you cant create categories!');
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
        //working case
        //$category = Category::findOrFail($id);
        //return view('admin.categories.edit', compact('category'));


        return back()->with('message', 'In admin demo mode you can`t edit categories!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateCategoryRequest $request, $id)
    {

        //$category = Category::findOrFail($id);
        //$category->update($request->all());
        //return redirect('/admin/categories')->with('message', 'Category name successful updated!');


        return back()->with('message', 'In admin demo mode you can`t edit categories!');
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
        //Category::findOrFail($id)->delete();
        //return redirect('/admin/categories')->with('message', 'Category successful deleted!');
        return back()->with('message', 'In admin demo mode you can`t delete categories!');

    }
}
