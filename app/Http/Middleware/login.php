<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Closure;

class login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {
        // dd(Auth::guard($guard)->check());
        if(Auth::guard('member')->check()){
            return $next($request);
        }else{
            return redirect()->route('frontend.login')->with('error', 'Session Expired! Kindly login again.');
        }
}

}