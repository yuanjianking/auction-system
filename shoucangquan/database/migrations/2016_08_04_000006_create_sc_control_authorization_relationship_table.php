<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScControlAuthorizationRelationshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //控件权限关系表
        Schema::create('sc_control_authorization_relationship', function (Blueprint $table)
        {
            $table->increments('id')->comment('主键ID');
            $table->string('control_id',20)->comment('外键控件ID');
            $table->string('authorization_code',20)->comment('外键权限CODE');
            $table->string('creator_id',20)->nullable()->comment('创建者');
            $table->string('updater_id',20)->nullable()->comment('更新者');
            $table->timestamps();

            //唯一索引
            $table->unique(['control_id', 'authorization_code'],'sc_control_auth_relationship_id_code_index');

                //生成外键
            $table->foreign('control_id')
                ->references('id')
                ->on('sc_controls');

            //生成外键
            $table->foreign('authorization_code')
                ->references('code')
                ->on('sc_role_authorization');

    });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('sc_control_authorization_relationship');
    }
}
