<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Inertia\Inertia;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    function handle($request, Closure $next): Response
    {
        Inertia::share([
            'csrf_token' => csrf_token()
        ]);

        return parent::handle($request, $next);
    }
}
