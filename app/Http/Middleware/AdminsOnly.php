<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

use Illuminate\Http\Request;

class AdminsOnly
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
        $user = Auth::user();

        if ($user === null || $user->role !== 'admin') {
            return redirect()->to('/login');
        }

        return $next($request);
    }
}
