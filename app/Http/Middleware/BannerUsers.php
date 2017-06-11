<?php

namespace App\Http\Middleware;

use Closure;

class BannerUsers
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
        // dd(\Auth::user());
        if (\Auth::user()->banned == 0) {
          return $next($request);
        }

        session()->flash('message','vergas  te han banneado');

        return redirect('/home');

    }
}
