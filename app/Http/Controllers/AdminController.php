<?php

namespace App\Http\Controllers;

use App\Car;
use App\Post;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index() {

        $adminUsers = User::where('role_id',1)->get();
        $authorUsers = User::where('role_id',2)->orderBy('created_at','desc')->limit(3)->get();
        $registredUsers = User::where('role_id',3)->orderBy('created_at','desc')->limit(3)->get();

        $adminCount = count(User::where('role_id',1)->get());
        $authorCount = count(User::where('role_id',2)->get());
        $regUserCount = count(User::where('role_id',3)->get());
        $regUserToday = count(User::where('role_id',3)->where('created_at', '>=', Carbon::today())->get());

        $postsActive = count(Post::where('status', 1)->get());
        $postsInActive = count(Post::where('status', 0)->get());

        $newsCount = count(Post::where('category_id',1)->get());
        $reviewsCount = count(Post::where('category_id',2)->get());

        $res=Post::orderBy('created_at','asc')->get();
        $res=$res->groupBy(function($val) {
            return Carbon::parse($val->created_at)->format('M');
        });

        $carCount = count(Car::all());
        $carCountToday = count(Car::where('created_at','>=', Carbon::today())->get());

        $carsByMonth = Car::orderBy('created_at', 'asc')->get();
        $carsByMonth = $carsByMonth->groupBy(function ($val) {
            return Carbon::parse($val->created_at)->format('M');
        });




        return view('admin.index', compact('adminUsers','authorUsers','registredUsers',
                        'adminCount', 'authorCount', 'regUserCount',
                        'postsActive', 'postsInActive',
                        'newsCount', 'reviewsCount',
                        'res',
                        'carCount','carCountToday', 'regUserToday',
                        'carsByMonth'));
    }
}
