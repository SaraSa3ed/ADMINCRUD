<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'redirect.admin' => \App\Http\Middleware\RedirectIfNotAuthenticatedAdmin::class,
        // Other middleware
        'checksuperadmin' => \App\Http\Middleware\CheckSuperAdmin::class,
    ];
}