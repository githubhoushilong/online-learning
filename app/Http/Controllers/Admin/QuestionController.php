<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Question;
use Excel;
class QuestionController extends Controller
{
    //试题列表
    public function index(){
        //获取数据
        $data = Question::get();
        //展示视图
        return view('admin.question.index',compact('data'));
    }

    //导出方法
    public function export(){
        //代码
        //excel表格数据的数据内容（第一行是表头）
        $cellData = [
            ['序号', '题干', '所属试卷', '分值','选项','正确答案','添加时间'],
        ];
        //查询数据
        $data = Question::all();
        //循环写入行
        foreach($data as $key => $val){
            $cellData[] = [
                $val ->id,
                $val ->question,
                $val ->paper->paper_name,
                $val ->score,
                $val ->options,
                $val ->answer,
                $val ->created_at,
            ];
        }
//        dd($cellData);
        //使用exvel类（参数1是文件名）
        Excel::create('sha1(time().rand(1000,9999)))', function ($excel) use ($cellData) {
            //在此处可以使用celldate
            $excel->sheet('题库', function ($sheet) use ($cellData) {
                //写入行数
                $sheet->rows($cellData);
            });
        })->export('xlsx');//导出
    }

    //导入操作
    public function import(){
        //查询试卷的列表
        $list = \App\Admin\Paper::get();
        //展示视图
        return view('admin.question.import',compact('list'));
    }
}
