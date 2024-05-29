<?php

use App\Http\Middleware\RedirectIfNotPremium;
use App\Http\Middleware\RedirectIfNotSubscribed;
use App\Http\Middleware\RedirectIfSubscribed;
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
        $middleware->alias([
            'redirect.subscribed' => RedirectIfSubscribed::class,
            'redirect.not.premium' => RedirectIfNotPremium::class,
            'redirect.not.subscribed' => RedirectIfNotSubscribed::class,

        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
