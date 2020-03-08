<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Route;
class CheckRbac
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
        //RBAC鉴权
        //验证测试
//        phpinfo();
//        if(Auth::guard('admin')->user()->role_id != '1'){
//       //获取当前的路由
//        $route = Route::currentRouteAction();
//        //获取当前用户对应的角色已经具备的权限，注意例外
//        $ac = Auth::guard('admin')->user()->role->auth_ac;
//        $ac = strtolower($ac.',indexcontroller@index,indexcontroller@welcome');
//        //判断权限
//        $routeArr = explode('\\',$route);
//        if (strpos($ac,strtolower(end($routeArr))) === false){
//            exit("<h1>您没有访问权限</h1>");
//        }
//    }
        //继续后面的请求
        return $next($request);
    }
}
