<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //定义关联的数据表
    protected $table = 'member';
    //禁用时间
    public $timestamps = false;
}
