<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate
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
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                //TODO:Redirect to login after Site ready to go live
                //return redirect()->guest('login');
                return redirect()->guest('/');
            }
        }

        #logout if user email not verified
        // if(Auth::check() && !Auth::user()->hasVerifiedEmail()){
        //     Auth::logout();
        //     return redirect('/verify')->withErrors('Verify your email account, please.');
        // }

        #logout if user not active
        if(Auth::check() && Auth::user()->disabled == 1){
            Auth::logout();
            return redirect('/login')->withErrors('Sorry, this user account is not activate. Contact us to reactivate this account.');
        }

        return $next($request);
    }
}
