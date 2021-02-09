<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class JsonContentType
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
        if (!$request->isMethod('get') && !$request->isJson()) {
            return response('Specified content type not allowed', 415);
        }

        return $next($request);
    }
}
