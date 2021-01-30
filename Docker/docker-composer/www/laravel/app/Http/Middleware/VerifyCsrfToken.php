<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
<<<<<<< HEAD
     * Indicates whether the XSRF-TOKEN cookie should be set on the response.
     *
     * @var bool
     */
    protected $addHttpCookie = true;

    /**
=======
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
    ];
<<<<<<< HEAD
}
=======
}
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
