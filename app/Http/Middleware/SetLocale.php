<?php

namespace App\Http\Middleware;

use Closure;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        $locale = $request->route('lang') 
                  ?? session('locale', config('app.locale'));
        
        App::setLocale($locale);
        return $next($request);
    }
}