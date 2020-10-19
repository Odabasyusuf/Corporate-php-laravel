<?php

namespace App\Http\Middleware;

use Closure;
use DB;

class Control
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (checkDBConnection()){
            DB::connection() -> disableQueryLog();
        }
        if(!checkDBConnection() && !$request->is('install.index')){
            clearAllLogs();
            return redirect()-> route('install.index');
        }


        return $next($request);
    }
}
