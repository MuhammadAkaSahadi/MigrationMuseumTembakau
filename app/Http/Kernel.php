<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's route middleware.
     *
     * @var array<string, class-string|string>
     */
    protected $routeMiddleware = [
        // Middleware default Laravel
        'admin' => \App\Http\Middleware\AdminMiddleware::class, // Tambahkan ini
    ];
    
    
}