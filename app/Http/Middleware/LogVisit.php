<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visit;
use Carbon\Carbon;
use Symfony\Component\HttpFoundation\Response;

class LogVisit
{
    public function handle(Request $request, Closure $next): Response
    {
        // Ne pas tracker la page des stats
        if ($request->is('stats*')) {
            return $next($request);
        }

        $ip = $request->ip();
        $date = Carbon::today()->toDateString();
        $userAgent = $request->userAgent();

        // Incrémente les vues pour cette IP aujourd'hui, ou crée une nouvelle entrée
        $visit = Visit::firstOrCreate(
            ['ip_address' => $ip, 'visited_date' => $date],
            ['user_agent' => $userAgent, 'views' => 0]
        );
        
        $visit->increment('views');

        return $next($request);
    }
}
