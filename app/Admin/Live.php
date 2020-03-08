<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Live extends Model
{
    //定义当前模型需要关联的数据表
    protected $table = 'stream';

    //关联模型，关联专业，一对一
    public function profession(){
        return $this->hasOne('App\Admin\Profession','id','profession_id');
    }

    //关联模型，关联直播流，一对一
    public function stream(){
        return $this->hasOne('App\Admin\Stream','id','stream_id');
    }
}
