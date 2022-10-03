<?php

namespace App\Http\Middleware;
use Illuminate\Routing\Route;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        $routeMiddleware = Route::current()->middleware();
        // Example Output : Array ( [0] => web [1] => auth:siteusers [2] => verified )
        $route = explode(":", $routeMiddleware[1]);
        $routeName = $route[1];
        if (!$request->expectsJson()) {
            if ($routeName == 'admin'){
                return route('admin.login');
            }else{
                return route('login');
            }
        }
    }
}
