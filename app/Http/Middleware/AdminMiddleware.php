<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
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
        // Cek apakah pengguna sudah login
        if (!auth()->check()) {
            return redirect('/login');
        }

        // Cek apakah pengguna memiliki role Admin
        if (auth()->user()->role != 'Admin') {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
