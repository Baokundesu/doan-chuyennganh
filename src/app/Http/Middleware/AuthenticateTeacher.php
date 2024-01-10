<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateTeacher
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
        // Kiểm tra nếu người dùng không phải là giáo viên, chuyển hướng về trang đăng nhập
        if (Auth::check() && Auth::user()->role !== 'teacher') {
            return redirect()->route('login'); // Điều hướng đến trang đăng nhập
        }

        return $next($request);
    }
}
