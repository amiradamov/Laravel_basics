<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;


class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $members = new Member();
        $role = Auth::user()->role;
        if ($role == 'admin')
            return $next($request);
        return redirect('/');
        
    }
}
