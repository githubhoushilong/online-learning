<?php

use Illuminate\Database\Seeder;

class PaperAndQuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //创建两个表的模拟数据
        //创建试卷的模拟数据
        DB::table('paper')->insert(
            [
                [
                    'paper_name'=>'ThinkPHP电子商城',
                    'course_id'=>3,
                    'created_at'=>date('Y-m-d H:i:s')
                ],
                [
                    'paper_name'=>'jQuery阶段考试',
                    'course_id'=>2,
                    'created_at'=>date('Y-m-d H:i:s')
                ],
                [
                    'paper_name'=>'linux阶段考试',
                    'course_id'=>1,
                    'created_at'=>date('Y-m-d H:i:s')
                ],
                [
                    'paper_name'=>'Laravel阶段考试',
                    'course_id'=>4,
                    'created_at'=>date('Y-m-d H:i:s')
                ],
            ]
        );
        DB::table('question')->insert(
            [
                [
                    'question'=>'下列关于购物车说法错误的是？',
                    'paper_id'=>1,
                    'options'=>'A.这是购物车错误答案 B.这是购物车错误答案 C.这是购物车错误答案 D.这是购物车正确答案',
                    'answer'=>'D',
                    'created_at'=>date('Y-m-d H:i:s')
                ],
                [
                    'question'=>'支付宝接口申请不需要什莫材料？',
                    'paper_id'=>1,
                    'options'=>'A.出生证 B.身份证 C.手机号 D.营业执照',
                    'answer'=>'A',
                    'created_at'=>date('Y-m-d H:i:s')
                ],
                [
                    'question'=>'如果想用navicat将sql代码在远程服务器上执行，则必须保证远程服务器的用户表中的host字段至少有一个位？',
                    'paper_id'=>1,
                    'options'=>'A.% B.:: C.localhost D.127.0.0.1',
                    'answer'=>'A',
                    'created_at'=>date('Y-m-d H:i:s')
                ],
            ]
        );
    }
}
