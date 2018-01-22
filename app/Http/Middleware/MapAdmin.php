<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class MapAdmin
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
         if (!Auth::check() || (Auth::user()->id != 1 && Auth::user()->id != 520))  {
            //return response('Unauthorized.', 401);   
            abort(401, 'Unauthorized.');       
        }
        return $next($request);
    }
}
