<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019/8/12
 * Time: 20:30
 */

namespace App\Http\Controllers;
use app\Admin\Manager;
use Illuminate\Support\Facades\Session;

class TestController extends Controller
{
    public function test(){
        return view('test');
    }

    public function test1(){
        $data = 'nihaofdfdf';
        return response()->json($data);
    }

    public function test2(){
        Session::push('姓名','侯世龙');
        dd(Session::get('姓名'));

    }
}

