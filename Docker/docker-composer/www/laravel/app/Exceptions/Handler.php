<?php

namespace App\Exceptions;

<<<<<<< HEAD
use Throwable;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
=======
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8

class Handler extends ExceptionHandler
{
    /**
<<<<<<< HEAD
     * A list of the exception types that should not be reported.
=======
     * A list of the exception types that are not reported.
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
     *
     * @var array
     */
    protected $dontReport = [
<<<<<<< HEAD
        \Illuminate\Auth\AuthenticationException::class,
        \Illuminate\Auth\Access\AuthorizationException::class,
        \Symfony\Component\HttpKernel\Exception\HttpException::class,
        \Illuminate\Database\Eloquent\ModelNotFoundException::class,
        \Illuminate\Session\TokenMismatchException::class,
        \Illuminate\Validation\ValidationException::class,
=======
        //
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
<<<<<<< HEAD
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Throwable
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        return parent::render($request, $exception);
    }

    /**
     * Convert an authentication exception into an unauthenticated response.
     *
     * @param \Illuminate\Http\Request                 $request
     * @param \Illuminate\Auth\AuthenticationException $exception
     *
     * @return \Illuminate\Http\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }

        return redirect()->guest('login');
=======
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
    }
}
