<?php

namespace App\Http\Middleware;

use Closure;
use App\model\Auth;
class CheckAge
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
        // return $next($request);
        if(!Auth::checkLogin()){
            //    return redirect()->route('login');
            return redirect('/login');
        }

        return $next($request);
    }
}
