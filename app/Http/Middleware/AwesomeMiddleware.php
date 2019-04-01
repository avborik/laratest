<?php

namespace App\Http\Middleware;

use Closure;

class AwesomeMiddleware
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
       // echo $request;
       if($request->path()=='/'){
        return redirect('/home');
       } else {
        return $next($request);
       }
        
    }
}
