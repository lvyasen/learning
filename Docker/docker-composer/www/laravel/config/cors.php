<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

<<<<<<< HEAD
    'paths' => ['api/*'],
=======
    'paths' => ['api/*', 'sanctum/csrf-cookie'],
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8

    'allowed_methods' => ['*'],

    'allowed_origins' => ['*'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

<<<<<<< HEAD
];
=======
];
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
