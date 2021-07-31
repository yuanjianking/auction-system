<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScSalesroomRoleRelationshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //卖场角色关系表
        Schema::create('sc_salesroom_role_relationship', function (Blueprint $table)
        {
            $table->increments('id')->comment('主键ID');
            $table->integer('salesroom_authorization_id',false,true)->comment('外键模块ID');
            $table->string('role_code',20)->comment('外键角色CODE');
            $table->string('creator_id',20)->nullable()->comment('创建者');
            $table->string('updater_id',20)->nullable()->comment('更新者');
            $table->timestamps();

            //唯一索引
            $table->unique(['salesroom_authorization_id', 'role_code'],'sc_salesroom_role_relationship_id_code_index');

                //生成外键
            $table->foreign('salesroom_authorization_id','sc_salesroom_role_relationship_salesroom_auth_id_foreign')
                ->references('id')
                ->on('sc_salesroom_authorization_relationship');

            //生成外键
            $table->foreign('role_code')
                ->references('code')
                ->on('sc_role');

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
        Schema::drop('sc_salesroom_role_relationship');
    }
}
