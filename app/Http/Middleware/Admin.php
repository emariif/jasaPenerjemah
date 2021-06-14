<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // return $next($request);
        {
            // if(auth()->user()->level == 1){
            //     return $next($request);
            // }elseif(auth()->user()->level == 2){
            //     return $next($request);
            // }

            if(Auth::user() && Auth::user()->level == 'Admin'){
                return $next($request);
            }
            return redirect('/');
            // return redirect('home')->with('error',"You don't have admin access.");
        }
    }
}
