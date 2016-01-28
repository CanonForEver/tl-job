<?php

namespace App\Http\Middleware;

use Closure;

/**
 * 判断是否登录中间件
 * Class CheckLoginMiddleware
 * @package App\Http\Middleware
 */
class CheckLoginMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!session()->has('user')) {
            return redirect('/my/regist/regist');
        }
        return $next($request);
    }
}
