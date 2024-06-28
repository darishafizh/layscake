<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $userType1 = null, $userType2 = null): Response
    {
        if (Auth::check()) {
            if (Auth::user()->role == $userType1 || Auth::user()->role == $userType2) {
                return $next($request);
            } else {
                // return redirect('blok.403')->with('message', 'Maaf, anda tidak memiliki akses halaman ini!');
            }
        } else {
            return redirect('/')->with('message', 'Anda belum login, silahkan login dulu!');
        }

        return $next($request);
    }
}
