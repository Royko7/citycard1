<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

//use App\User
class UserAuthenticated
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
            if (Auth::user()->role == 10) {
                return redirect(route('admin'));
            } else if (Auth::user()->role == 1) {
                return $next($request);
            } else if (Auth::user()->role !== 1 && Auth::user()->role !== 10)
                return redirect('/');

        }
        abort(404);

    }
}
