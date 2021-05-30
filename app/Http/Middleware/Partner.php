<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Partner
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
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        if (Auth::user()->role == 'partner') {
            return $next($request);
        }
        if (Auth::user()->role == 'member') {
            return redirect()->route('member');
        }
        if (Auth::user()->role == 'admin') {
            return redirect()->route('admin');
        }
    }
}
