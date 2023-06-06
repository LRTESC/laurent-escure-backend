<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class StuckInTheMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $request->headers->set('X-Stuck-In-The-Middle', 'no');

        return $next($request);
    }
}
