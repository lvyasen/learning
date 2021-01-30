<?php

namespace App\Http\Middleware;

<<<<<<< HEAD
use Illuminate\Foundation\Http\Middleware\TrimStrings as BaseTrimmer;

class TrimStrings extends BaseTrimmer
=======
use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

class TrimStrings extends Middleware
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
{
    /**
     * The names of the attributes that should not be trimmed.
     *
     * @var array
     */
    protected $except = [
        'password',
        'password_confirmation',
    ];
<<<<<<< HEAD
}
=======
}
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
