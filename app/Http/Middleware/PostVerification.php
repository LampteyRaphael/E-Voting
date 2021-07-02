<?php

namespace App\Http\Middleware;

use App\PostVerify;
use Closure;
use Illuminate\Support\Facades\Auth;

class PostVerification
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

        if (Auth::check()){
                if (Auth::user()->role==1){
                    return $next($request);
                }else{
                     return redirect(404);
                }
            }

    }
}
