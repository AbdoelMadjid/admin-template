<?php

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
        $middleware->redirectTo(
            guests: '/login',
            users: '/dashboard'
        );
        $middleware->web(append: [
            \App\Http\Middleware\LocaleMiddleware::class,
        ]);
        $middleware->alias([
            'role' => \Spatie\Permission\Middleware\RoleMiddleware::class,
            'permission' => \Spatie\Permission\Middleware\PermissionMiddleware::class,
            'role_or_permission' => \Spatie\Permission\Middleware\RoleOrPermissionMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->renderable(function (\InvalidArgumentException $e, $request) {
            if (str_contains($e->getMessage(), 'not found') && str_contains($e->getMessage(), 'View [')) {
                preg_match('/View \[(.*?)\] not found/', $e->getMessage(), $matches);
                $viewName = $matches[1] ?? 'terkait';
                return response()->view('pages.error.view-not-found', ['viewName' => $viewName], 404);
            }
        });
    })->create();
