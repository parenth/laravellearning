<?php

namespace App\Http\Middleware;

use Closure;

class Test2Middleware
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
        echo 'Middleware handle 2222222';
        \Log::info('test2 middleware');
        $response = $next($request);
        \Log::info('test2  after middleware');
        return $response;
    }
}
