<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });

        $this->renderable(function (AuthenticationException $e) {
            return response()->json(["message" => $e->getMessage()], 403); 
        });

        $this->renderable(function (QueryException $e) {
            return response()->json(["message" => $e->getMessage()], 500); 
        });

        $this->renderable(function (ValidationException $e) {
            return response()->json(["message" => $e->errors()], 400); 
        });
        
        $this->renderable(function (Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500); 
        });
    }
}
