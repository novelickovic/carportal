<?php

namespace App\Http\Controllers;

use App\Car;
use App\Carmake;
use App\Post;
use Illuminate\Http\Request;

class InterfaceController extends Controller
{
    //
    public function homePage() {

        $cars = Car::orderBy('created_at','desc')->limit(4)->get();

        $makes = Carmake::pluck('name', 'name')->all();

        $news = Post::where('category_id', '1')->orderBy('created_at','desc')->limit(3)->get();

        $reviews = Post::where('category_id', '2')->orderBy('created_at','desc')->limit(2)->get();


        return view('welcome3', compact('makes', 'cars', 'news', 'reviews'));
    }



}
