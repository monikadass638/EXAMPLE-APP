<?php

use App\Http\Middleware\ageCheck;
use App\Http\Middleware\CountryCheck;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //global middleware
        //$middleware->append(ageCheck::class);
        //group middleware on one route
        $middleware->appendToGroup('M1' ,[
            ageCheck::class,
            CountryCheck::class

        ]);

    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
