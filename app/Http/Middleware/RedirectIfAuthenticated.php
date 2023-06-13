<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {

            if ($guard == "web" && Auth::guard($guard)->check()) {
                return redirect('/admin/dashboard');
            } else {
                return redirect('/admin/login');
            }
            if ($guard == "siswa" && Auth::guard($guard)->check()) {
                return redirect('/siswa/dashboard');
            } else {
                return redirect('/login');
            }
            if ($guard == "guru" && Auth::guard($guard)->check()) {
                return redirect('/guru/dashboard');
            } else {
                return redirect('/guru/login');
            }
            if ($guard == "orangtua" && Auth::guard($guard)->check()) {
                return redirect('/orangtua/dashboard');
            } else {
                return redirect('/orangtua/login');
            }

            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }
}
