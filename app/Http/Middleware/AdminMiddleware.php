<?php
/**
 * PHP version 7.2.13 and Laravel version 5.8.17
 * Admin Middleware Class
 * Provides authorization for Admin alone
 *
 * @Package             Middleware
 * @Author              AC Jerin Monish
 * @Created On          15-05-2018
 * @Modified            AC Jerin Monish
 * @Modified On         15-05-2018
 */
namespace App\Http\Middleware;
use Illuminate\Http\Response;
use Closure;

class AdminMiddleware
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
        if ($request->user() && $request->user()->user_role != 'admin')
        {
            return new Response(view('unauthorized')->with('role', 'ADMIN'));
        }
        return $next($request);
    }
}
