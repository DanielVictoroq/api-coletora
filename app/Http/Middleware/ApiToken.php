<?php

namespace App\Http\Middleware;

use Closure;

class ApiToken
{
    public function handle($request, Closure $next)
    {
        if ($request->getUser() != config('tokenApi.username') 
        || $request->getPassword() != config('tokenApi.password')) {
            return response()->json('Unauthorized', 401);
        } 
        
        return $next($request);
    }
}
