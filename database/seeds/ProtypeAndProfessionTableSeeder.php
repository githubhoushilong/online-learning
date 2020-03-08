<?php

use Illuminate\Database\Seeder;

class ProtypeAndProfessionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //创建两个数据表的模拟数据
        DB::table('profession')->insert([
            ['pro_name'=>'php基础班',
            'protype_id'=>'1',
            'teachers_ids'=>'3.6.8.10',
            'created_at'=>date('Y-m-d H:i:s'),
            'duration'=>18,
            'cover_img'=>'/statics/demo.jpg',
            'price'=>'100.00',],
            ['pro_name'=>'php就业班',
                'protype_id'=>'1',
                'teachers_ids'=>'33,35,37,39',
                'created_at'=>date('Y-m-d H:i:s'),
                'duration'=>19,
                'cover_img'=>'/statics/demo.jpg',
                'price'=>'1070.00',],
            ['pro_name'=>'前端基础班',
                'protype_id'=>'1',
                'teachers_ids'=>'42,45,46',
                'created_at'=>date('Y-m-d H:i:s'),
                'duration'=>20,
                'cover_img'=>'/statics/demo.jpg',
                'price'=>'170.00',],
            ['pro_name'=>'php基础班',
                'protype_id'=>'1',
                'teachers_ids'=>'49,50,51',
                'created_at'=>date('Y-m-d H:i:s'),
                'duration'=>21,
                'cover_img'=>'/statics/demo.jpg',
                'price'=>'150.00',],
        ]);

    }
}
