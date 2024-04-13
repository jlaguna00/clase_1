<?php

namespace App\Http\Middleware;

use Closure;
use Jenssegers\Agent\Agent;

class CheckDevice
{
    public function handle($request, Closure $next)
    {
        // Verificar si el middleware se está ejecutando
        dd('Middleware is running');

        $agent = new Agent();

        // Verificar el agente de usuario detectado
        dd($agent->getUserAgent());

        if ($agent->isMobile()) {
            return redirect()->route('mobile');
        }

        return redirect()->route('desktop');
    }
}