<?php

namespace App\Http\Middleware;

use Closure;

class HRD
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
        if(auth()->check() && $request->User()->permission == 'Admin') {
            return $next($request);
        }
        elseif(auth()->check() && $request->User()->permission == 'Bendahara') {
            return $next($request);
        }
        if(auth()->check() && $request->User()->permission == 'HRD') {
            return $next($request);
        }
        return redirect()->guest('/');
    }
}
