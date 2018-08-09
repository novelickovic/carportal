<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */


    //protected $redirectTo = '/admin';


//    public function redirectTo(){
//
//        $rule=Auth::user()->role->name;
//
//        switch ($rule) {
//            case 'administrator':
//                return redirect('/admin');
//                break;
//            case 'author':
//                return redirect('/author');
//                break;
//            default:
//                return redirect('/login');
//                break;
//        }
//
//    }

    protected function authenticated($request, $user){


        if(Auth::user()->role->name =='administrator'){
            return redirect('/admin');
        }
        else if (Auth::user()->role->name =='author') {
            return redirect('/author');
        }
        else if (Auth::user()->role->name == 'user') {
            return redirect('/user');
        }
        else {
            return redirect('/home');
            }
        }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
