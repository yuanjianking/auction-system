<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScUserRoleRelationshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        //用户角色关系表
        Schema::create('sc_user_role_relationship', function(Blueprint $table)
        {
                $table->increments('id')->comment('Id');
                $table->integer('user_id',false,true)->comment('用户表的用户ID');
                $table->string('role_code',20)->comment('角色');
                $table->string('creator_id',20)->nullable()->comment('创建者');
                $table->string('updater_id',20)->nullable()->comment('更新者');
                $table->timestamps();

                //约束
                $table->unique(['user_id', 'role_code'],'sc_user_role_relationship_id_code_index');

                //生成外键
                $table->foreign('user_id')
                    ->references('id')
                    ->on('sc_users');

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
        Schema::drop('sc_user_role_relationship');
    }
}
