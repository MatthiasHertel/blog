<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

use Session;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                // Notify
                notify()->flash('You have to login before accessing this site!', 'error', [
                  'timer' => 2000,
                ]);
                // Session::flash('error','You have to login before accessing this site!');
                return redirect()->guest('auth/login');
            }
        }

        return $next($request);
    }
}
