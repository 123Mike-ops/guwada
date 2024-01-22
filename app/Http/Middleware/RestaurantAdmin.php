<?php

namespace App\Http\Middleware;

use Closure;
use Auth;


class RestaurantAdmin
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
        if (Auth::user() &&  Auth::user()->userRole == 'restaurants') {
            return $next($request);
       }
        // return $next($request);
        return redirect('/')->with('error','You have not admin access');

    }
}
