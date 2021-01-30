<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
<<<<<<< HEAD
     * @return string
=======
     * @return string|null
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
