<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class LastSeenMiddleware
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

        if(!Auth::check()) {
            return $next($request);
        }

        $user = Auth::user();
        $user->update([
            'last_seen' => new \DateTime(),
            'timestamps' => false
        ]);

        return $next($request);
    }
}
