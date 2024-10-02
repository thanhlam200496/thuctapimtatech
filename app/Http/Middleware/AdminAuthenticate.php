<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Kiểm tra xem người dùng có vai trò là admin
        if (Auth::check() && Auth::user()->role == 'admin') {
            return $next($request); 
        }

        // Chuyển hướng đến trang đăng nhập nếu không có quyền
        return redirect()->route('login')->withErrors(['error' => 'Bạn không có quyền truy cập trang này.']);
    }
}
