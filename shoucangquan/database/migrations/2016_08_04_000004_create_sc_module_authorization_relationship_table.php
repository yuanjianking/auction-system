<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScModuleAuthorizationRelationshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //模块权限关系表
        Schema::create('sc_module_authorization_relationship', function (Blueprint $table)
        {
            $table->increments('id')->comment('主键ID');
            $table->string('module_id',20)->comment('外键模块ID');
            $table->string('authorization_code',20)->comment('外键权限CODE');
            $table->string('creator_id',20)->nullable()->comment('创建者');
            $table->string('updater_id',20)->nullable()->comment('更新者');
            $table->timestamps();

            //唯一索引
            $table->unique(['module_id', 'authorization_code'],'sc_module_auth_relationship_id_code_index');

            //生成外键
            $table->foreign('module_id')
                ->references('id')
                ->on('sc_modules');

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
        Schema::drop('sc_module_authorization_relationship');
    }
}
