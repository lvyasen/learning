<?php

namespace App\Http\Middleware;

<<<<<<< HEAD
use Closure;
=======
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
<<<<<<< HEAD
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect('/');
=======
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::HOME);
            }
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
        }

        return $next($request);
    }
}
