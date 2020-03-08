<?php

use Illuminate\Database\Seeder;

class StreamAndLiveTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //直播流的数据
        DB::table('stream')->insert(
            [
                [
                    'stream_name'=>'sh09',
                    'status'=>'2',//永久禁播
                ],
                [
                    'stream_name'=>'sh09',
                    'status'=>'3',//限时禁播
                ],
                [
                    'stream_name'=>'sh09',
                    'status'=>'1',//正常
                ]
            ]
        );
        DB::table('live')->insert(
            [
                [
                'live_name'=>'北京PHP期基础班直播',
                'profession_id' =>'1',
                'stream_id'=>3,
                'cover_img'=>'/statics/demo.jpg',
                'description'=>'该课程主要是为了php基础班课程直播，以供远程同学听课',
                'begin_at' => strtotime(date('2019-08-22 00:00:00')),
                'end_at' => strtotime(date('2020-08-22 00:00:00')),
                ],
                [
                    'live_name'=>'北京PHP期就业班直播课程',
                    'profession_id' =>'2',
                    'stream_id'=>3,
                    'cover_img'=>'/statics/demo.jpg',
                    'description'=>'该课程主要是为了就业班课程直播，以供远程同学听课',
                    'begin_at' => strtotime(date('2019-08-22 00:00:00')),
                    'end_at' => strtotime(date('2020-08-22 00:00:00')),
                ]
            ]
        );
    }
}
