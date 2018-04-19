<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class BoardUser
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
    	 $board = array(1, 501, 511, 512, 515, 538, 557, 585, 600, 601, 644, 739);

         if (!Auth::check() || !(in_array(Auth::user()->id, $board))) {
            //return response('Unauthorized.', 401);   
            abort(401, 'Unauthorized.');       
        }
        \Session::set('isBoardUser','true');
        return $next($request);
    }
}
