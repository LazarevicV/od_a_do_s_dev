<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $roles): Response
    {
        $rolesToCheck = explode(':', $roles);
        if (Auth::check()) {
            foreach ($rolesToCheck as $r) {
                if (Auth::user()->access_level == trim($r) && (!empty($r) || $r === null)) {
                    return $next($request);
                }
            }
        }
        return redirect()->route('pocetna');
    }
}
