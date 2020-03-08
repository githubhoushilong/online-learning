<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Role;
use App\Admin\Auth;
use Illuminate\Support\Facades\Input;
class RoleController extends Controller
{
    //角色列表
    public function index(){
        $data = Role::get();
        return view('admin.role.index',compact('data'));
    }

    //权限分配
    public function assign(){
        //判断请求类型
        if (Input::method() ==  'POST'){
            //接收数据
            $data = Input::only(['id','auth_id']);
            //交给模型处理数据
            $role = new Role();
            //输出返回结果集
            return $role->assignAuth($data);
        }else{
            //查询一级权限
            $top = Auth::where('pid','=','0')->get();
            //查询二级权限
            $cat = Auth::where('pid','!=','0')->get();
            //获取当前角色具备的权限id集合
            $ids = Role::where('id',Input::get('id'))->value('auth_ids');
            //展示视图
            return view('admin.role.assign',compact('top','cat','ids'));
        }
    }
}
