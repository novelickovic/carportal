<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Author
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

            if (Auth::user()->isAuthor()) {

                return $next($request);

            }

            return redirect('/home')->with('message', 'You must be looged in as an author to view this page!');

        }

        return redirect('/home')->with('message', 'You must be looged in to view this page!');

    }
}
