<?php

namespace App\Http\Middleware;

use App\Helper\Helper;
use Closure;
use DB;

class Control
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!checkDBConnection() && !$request->is('install.index')) {
            clearAllLogs();
            return redirect()->route('install.index');
        }
        if (checkDBConnection()) {
            DB::connection()->disableQueryLog();
            Helper::getRoles();
        }


        return $next($request);
    }
}
