<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class Role
{

    public function handle(Request $request, Closure $next)
    {
        if($request->user()->role == 'admin') {
            return $next($request);
        }
        return new Response(view('unauthorized'));
    }
}
