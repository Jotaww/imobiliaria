<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use \Illuminate\Support\Facades\Auth;

class IsAdmin
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
        if (Auth::user() &&  Auth::user()->permission == 3 ) {
            return $next($request);
        }
        if (Auth::user() &&  Auth::user()->permission == 4 ) {
            return $next($request);
        }

        return redirect('/');
    }
}
