<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //建表方法
        Schema::create('member',function (Blueprint $table){
            $table->increments('id');//主键字段
            $table->string('username',20)->notNull();//用户名，长度20的varchar,不能为null
            $table->string('password')->notNull();//密码，varchar(255),不能为null
            $table->enum('gender',[1,2,3])->notNull()->default('1');//性别，1=男，2=女，3=保密
            $table->string('mobile',11);//手机号，varchar(11)
            $table->string('email',50);//邮箱，varchar(50)
            $table->string('avatar',50);//图片路径，varchar(50)
            $table->string('country_id',50);//国家id，varchar(50)
            $table->string('province_id',50);//省id，varchar(50)
            $table->string('county_id',50);//市id，varchar(50)
            $table->timestamps();//create_at和updated_at时间字段（系统自己创建）
            $table->rememberToken();//实现记住登录状态字段，用于尊出token
            $table->enum('type',[1,2])->notNull()->default('1');
            $table->enum('status',[1,2])->notNull()->default('2');//账号状态，1=禁用，2=启用
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //删表
        Schema::dropIfExists('member');
    }
}
