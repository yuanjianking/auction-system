<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScUserAuthorizationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //用户权限表
        Schema::create('sc_user_authorization',function(Blueprint $table)
        {
            $table->string('code',20)->comment('权限CODE');
            $table->string('name')->comment('权限名称');
            $table->string('creator_id',20)->nullable()->comment('创建者');
            $table->string('updater_id',20)->nullable()->comment('更新者');
            $table->timestamps();

            //主键
            $table->primary('code');//权限等级
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sc_user_authorization');
    }
}
