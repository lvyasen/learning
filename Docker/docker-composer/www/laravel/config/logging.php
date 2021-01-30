<?php

use Monolog\Handler\NullHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\SyslogUdpHandler;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Log Channel
    |--------------------------------------------------------------------------
    |
    | This option defines the default log channel that gets used when writing
    | messages to the logs. The name specified in this option should match
    | one of the channels defined in the "channels" configuration array.
    |
    */

    'default' => env('LOG_CHANNEL', 'stack'),

    /*
    |--------------------------------------------------------------------------
    | Log Channels
    |--------------------------------------------------------------------------
    |
    | Here you may configure the log channels for your application. Out of
    | the box, Laravel uses the Monolog PHP logging library. This gives
    | you a variety of powerful log handlers / formatters to utilize.
    |
    | Available Drivers: "single", "daily", "slack", "syslog",
    |                    "errorlog", "monolog",
    |                    "custom", "stack"
    |
    */

    'channels' => [
        'stack' => [
            'driver' => 'stack',
            'channels' => ['single'],
            'ignore_exceptions' => false,
        ],

        'single' => [
            'driver' => 'single',
            'path' => storage_path('logs/laravel.log'),
<<<<<<< HEAD
            'level' => 'debug',
=======
            'level' => env('LOG_LEVEL', 'debug'),
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
        ],

        'daily' => [
            'driver' => 'daily',
            'path' => storage_path('logs/laravel.log'),
<<<<<<< HEAD
            'level' => 'debug',
=======
            'level' => env('LOG_LEVEL', 'debug'),
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
            'days' => 14,
        ],

        'slack' => [
            'driver' => 'slack',
            'url' => env('LOG_SLACK_WEBHOOK_URL'),
            'username' => 'Laravel Log',
            'emoji' => ':boom:',
<<<<<<< HEAD
            'level' => 'critical',
=======
            'level' => env('LOG_LEVEL', 'critical'),
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
        ],

        'papertrail' => [
            'driver' => 'monolog',
<<<<<<< HEAD
            'level' => 'debug',
=======
            'level' => env('LOG_LEVEL', 'debug'),
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
            'handler' => SyslogUdpHandler::class,
            'handler_with' => [
                'host' => env('PAPERTRAIL_URL'),
                'port' => env('PAPERTRAIL_PORT'),
            ],
        ],

        'stderr' => [
            'driver' => 'monolog',
            'handler' => StreamHandler::class,
            'formatter' => env('LOG_STDERR_FORMATTER'),
            'with' => [
                'stream' => 'php://stderr',
            ],
        ],

        'syslog' => [
            'driver' => 'syslog',
<<<<<<< HEAD
            'level' => 'debug',
=======
            'level' => env('LOG_LEVEL', 'debug'),
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
        ],

        'errorlog' => [
            'driver' => 'errorlog',
<<<<<<< HEAD
            'level' => 'debug',
=======
            'level' => env('LOG_LEVEL', 'debug'),
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
        ],

        'null' => [
            'driver' => 'monolog',
            'handler' => NullHandler::class,
        ],

        'emergency' => [
            'path' => storage_path('logs/laravel.log'),
        ],
    ],

<<<<<<< HEAD
];
=======
];
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
