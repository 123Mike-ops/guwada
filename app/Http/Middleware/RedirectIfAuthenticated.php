<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
     

            return redirect(RouteServiceProvider::HOME);

        }
        else

        return $next($request);

    }
    



    
    // protected function authenticated(Request $request, $user)
    // {
    // if ( $user->isAdmin() ) {// do your magic here
    //     return redirect()->route('admin/dashboard');
    // }

    // return redirect('/home');
    // }
}
