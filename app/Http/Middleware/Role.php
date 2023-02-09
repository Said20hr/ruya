<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next,Request $role)
    {
        if (Auth::check())
        {
            if ($role == 'admin' )
            {
                // for admin
                return auth()->user()->getRoleNames()->contains('admin') ? $next($request) : abort(404);
            }
            if ($role == 'user' )
            {
                // for users
                auth()->user()->getRoleNames()->contains('user') ? $next($request) : abort(404);
                //
            }
        }
        return $next($request);
    }
}
