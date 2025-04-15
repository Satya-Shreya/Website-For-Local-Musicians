<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    // ... other code

    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        // other middleware...

        // ✅ Add your role middleware here
        'role' => \App\Http\Middleware\CheckRole::class,
    ];
}
