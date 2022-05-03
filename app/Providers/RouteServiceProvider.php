<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            Route::prefix('api')
                ->middleware('api')
                ->group(base_path('routes/api.php'));
            
            Route::prefix('administrador')
                -> group (base_path('routes/administrador.routes.php'));
                
            Route::prefix('reserva')
                -> group (base_path('routes/reserva.routes.php'));

            Route::prefix('solicitud-reserva')
                -> group (base_path('routes/solicitud-reserva.routes.php'));

            Route::prefix('mail')
                -> group (base_path('routes/mail.php'));

            Route::prefix('datos-reserva')
                -> group (base_path('routes/datos-reserva.routes.php'));

            Route::prefix('aula')
                -> group (base_path('routes/aulas.routes.php'));   
                
            Route::prefix('materia')
                -> group (base_path('routes/materia.routes.php'));      

            Route::prefix('docente')
                -> group (base_path('routes/docentes.routes.php'));      
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60);
        });
    }
}
