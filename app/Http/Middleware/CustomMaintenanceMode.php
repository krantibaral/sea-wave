<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CustomMaintenanceMode
{
    public function handle(Request $request, Closure $next)
    {
        // Allow access only to the under-maintenance route
        if ($request->is('under-maintenance')) {
            return $next($request);
        }

        // Redirect all other routes to the maintenance page
        return redirect()->route('fronshowt.under_maintenance');
    }
}
