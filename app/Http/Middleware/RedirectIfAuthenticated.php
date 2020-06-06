<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if (Auth::user()->userid == "1")
            {
                return redirect('/dashboard/admin');
            }
            elseif (Auth::user()->userid == "2")
            {
                return redirect('/dashboard/user');
            }
            elseif (Auth::user()->userid == "3")
            {
                return redirect('/dashboard/agent');
            }
        }

        return $next($request);
    }
}
