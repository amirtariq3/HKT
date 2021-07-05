<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Closure;

class Multiauth
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
        if ($guard == "admin") {

            if(Auth::guard($guard)->check()){
                return $next($request);
            }else{
                return redirect('/admin/login')->with('error', 'Session Expired! Kindly login again.');
            }
            
        }if ($guard == "web") {

            if(Auth::guard($guard)->check()){
                return $next($request);
            }else{
                return redirect('/')->with('error', 'Session Expired! Kindly login again.');
            }
            
        }else {
            return redirect("/admin.login")->with('error', 'Session Expired! Kinndly login again.');
        }
    }
}
