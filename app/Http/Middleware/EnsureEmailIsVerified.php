<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Contracts\Auth\MustVerifyEmail;
class EnsureEmailIsVerified
{

    //protected $redirectToRoute = '/members/home';

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $redirectToRoute
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, $redirectToRoute = null)
    {
        if (! $request->user() ||
            ($request->user() instanceof MustVerifyEmail &&
            ! $request->user()->hasVerifiedEmail())) {

            //return $request->expectsJson()
            //        ? abort(403, 'Your email address is not verified.')
            //        : Redirect::route($redirectToRoute ?: 'verification.notice');
            Auth::logout();      
            return redirect('/verify')->withErrors('Verify your email account, please.');      
        }
        return $next($request);
    }
}