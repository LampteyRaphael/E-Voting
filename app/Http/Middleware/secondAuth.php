<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class secondAuth
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
       //if (Auth::check()){
            if (Auth::user()->pin_verify==session::get('key') && Auth::user()->status==session::get('verify')){
                return $next($request);
            }else{
                return  redirect()->back()->with('success','account verification failed');
            }
       //}

    }
}
