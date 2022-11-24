<?php

namespace App\Http\Middleware;

use App\Models\Dosen;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsDosen
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            $id = Auth::id();
            if(Dosen::where('user_id', $id)->exists()) {
                return $next($request);
            }
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error' => 'Maaf anda tidak memiliki akses.']);
        }
    }
}
