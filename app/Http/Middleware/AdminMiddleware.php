<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login')
                ->with('error', 'You must be logged in.');
        }

        // Only allow admins
        if (Auth::user()->role !== 'admin') {
            return redirect('/home');
        }

        return $next($request); // allow admin to continue
    }
}