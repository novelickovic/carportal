<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class User
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
        if (Auth::check()) {

            if (Auth::user()->isUser()) {
                return $next($request);
            }

            return redirect('/login')->with('message', 'You must be logged in as registered user!');
        }

        return redirect('/login')->with('message', 'Please log in or register new account');

    }
}