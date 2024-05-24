<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $routeMiddleware = [
        // Outros middlewares...
        'auth.custom' => \App\Http\Middleware\VerificaAutenticacao::class,
        ];
}
