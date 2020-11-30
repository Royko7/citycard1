<?php

namespace App\Http\Middleware;

use Closure;

//use   Illuminate\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;

class AdminAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->role == 1) {
                return redirect(route('home'));
            }
            else if (Auth::user()->role == 10) {
                return $next($request);
            }
            else if(Auth::user()->role !== 1 && Auth::user()->role !==10)
                return redirect('/');

        }
        abort(404);

    }


}
