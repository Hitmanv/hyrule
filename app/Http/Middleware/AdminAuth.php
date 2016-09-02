<?php
/**
 * Author: hitman
 * Date: 2/9/2016
 * Time: 5:08 PM
 */

namespace App\Http\Middleware;

use Closure;

class AdminAuth
{
    public function handle($request, Closure $next)
    {
        if(!$request->user()->is_admin){
            return redirect(env('WWW_URL', 'http://www.exp.com'));
        }

        return $next($request);
    }
}
