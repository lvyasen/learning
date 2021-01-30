<?php

namespace App\Http\Middleware;

<<<<<<< HEAD
use Illuminate\Http\Request;
use Fideloper\Proxy\TrustProxies as Middleware;
=======
use Fideloper\Proxy\TrustProxies as Middleware;
use Illuminate\Http\Request;
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
<<<<<<< HEAD
     * @var array
=======
     * @var array|string|null
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
     */
    protected $proxies;

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
<<<<<<< HEAD
    protected $headers = Request::HEADER_X_FORWARDED_ALL;
}
=======
    protected $headers = Request::HEADER_X_FORWARDED_FOR | Request::HEADER_X_FORWARDED_HOST | Request::HEADER_X_FORWARDED_PORT | Request::HEADER_X_FORWARDED_PROTO | Request::HEADER_X_FORWARDED_AWS_ELB;
}
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
