<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScUserDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //用户详细表
        Schema::create('sc_user_detail',function(Blueprint $table)
        {
            $table->increments('id')->comment('主键ID');
            $table->integer('user_id',false,true)->comment('用户表的用户ID');
            $table->string('user_name')->nullable()->comment('用户真实姓名');
            $table->string('certificate_id',30)->nullable()->comment('用户真实身份证号');
            $table->string('phone_no',20)->comment('手机号');
            $table->string('email')->nullable()->comment('邮箱');
            $table->string('wechat_code',30)->nullable()->comment('微信号');
            $table->string('qq_code',30)->nullable()->comment('QQ号');
            $table->char('sex')->nullable()->comment('性别');
            $table->string('age',5)->nullable()->comment('年龄');
            $table->string('address')->nullable()->comment('地址');
            $table->string('creator_id',20)->nullable()->comment('创建者');
            $table->string('updater_id',20)->nullable()->comment('更新者');
            $table->timestamps();

            //主键
            $table->foreign('user_id')//用户表的用户名
                ->references('id')
                ->on('sc_users');

            //唯一索引
            $table->unique('user_id');//用户表的用户名
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sc_user_detail');
    }
}
