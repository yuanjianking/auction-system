<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateScUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //用户表
        Schema::create('sc_users',function(Blueprint $table)
        {
            $table->increments('id')-> comment('用户ID');
            $table->string('email')->unique()-> comment('邮箱');
            $table->string('mobile', 13)-> comment('手机号');;
            $table->string('name')->comment('昵称');
            $table->string('password')->comment('用户密码');
            $table->char('deleted')->comment('是否注销');
            $table->string('creator_id',20)->nullable()->comment('创建者');
            $table->string('updater_id',20)->nullable()->comment('更新者');
            $table->rememberToken();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sc_users');
    }
}
