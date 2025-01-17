<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
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
        switch($guard){
            case 'admin':
                if (Auth::guard('admin')->check()) {
                    return redirect(route('admin.dashboard'));
                }
                break;
            case 'artist':
                if (Auth::guard('artist')->check()) {
                    return redirect(route('artist.dashboard'));
                }
                break;
            default:
                if (Auth::guard($guard)->check()) {
                    return redirect('/dashboard');
                }
                break;
        }
        return $next($request);
    }
}
