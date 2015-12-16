<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Gate;


class VerifyAdmin
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
        if (Gate::denies('admin')) {
            abort(403);
        }
        return $next($request);
    }
}
