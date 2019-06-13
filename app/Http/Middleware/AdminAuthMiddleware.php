<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class AdminAuthMiddleware
{
    use AuthenticatesUsers;
    /**
     * Handle an incoming request.
     *
     * @param         $request
     * @param Closure $next
     *
     * @return mixed
     * @throws AuthenticationException
     */
    public function handle($request, Closure $next)
    {
        $this->checkUserAdmin($request);

        return $next($request);
    }

    /**
     * @param $request
     *
     * @throws AuthenticationException
     */
    protected function checkUserAdmin($request)
    {
        if (is_null(Auth::user())) {
            throw new AuthenticationException('Unauthenticated.');
        }
    }
}
