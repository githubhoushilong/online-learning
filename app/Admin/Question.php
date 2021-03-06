<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //定义当前模型需要关联的数据表
    protected $table = 'question';

    //关联模型，关联专业，一对一
    public function paper(){
        return $this->hasOne('App\Admin\Question','id','paper_id');
    }
}
