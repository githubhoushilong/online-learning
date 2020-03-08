<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Lesson;
use Input;
class LessonController extends Controller
{
    //列表展示
    public function index(){
        //获取数据
        $data = Lesson::orderBy('sort','desc')->get();
        //展示视图
        return view('admin.lesson.index',compact('data'));
    }

    //播放方法
    public function play(){
        //获取播放的时评id
        $id = Input::get('id');
//        dd($id);
        //根据id查询视频地址
        $addr = Lesson::where('id',$id)->value('video_addr');
        //播放视频
        return "<video src='$addr' controls='controls' width='100%'>您的浏览器不支持video标签</video>";
    }
}
