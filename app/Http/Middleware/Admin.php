<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {


        if (Auth::check()){

            if (Auth::user()->isAdmin()) {

                return $next($request);
            }
            else {
                return redirect('/home')->with('message', 'You must be looged in as an administrator to view Admin page!');
            }

        }
        return redirect('/login')->with('message', 'You must be looged in !');




    }
}
