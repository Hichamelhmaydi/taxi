<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        // التحقق من الدور
        if (Auth::check() && Auth::user()->role === $role) {
            return $next($request);
        }

        // إذا لم يكن الدور متطابقًا، قم بتوجيه المستخدم إلى صفحة أخرى (مثل الصفحة الرئيسية أو صفحة الخطأ)
        return redirect('/');
    }
}
