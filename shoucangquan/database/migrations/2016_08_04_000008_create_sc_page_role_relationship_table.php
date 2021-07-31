<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScPageRoleRelationshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //页面角色关系表
        Schema::create('sc_page_role_relationship', function (Blueprint $table)
        {
            $table->increments('id')->comment('主键ID');
            $table->integer('page_authorization_id',false,true)->comment('外键页面ID');
            $table->string('role_code',20)->comment('外键角色CODE');
            $table->string('creator_id',20)->nullable()->comment('创建者');
            $table->string('updater_id',20)->nullable()->comment('更新者');
            $table->timestamps();

            //唯一索引
            $table->unique(['page_authorization_id', 'role_code'],'sc_page_role_relationship_id_code_index');

            //生成外键
            $table->foreign('page_authorization_id')
                ->references('id')
                ->on('sc_page_authorization_relationship')
                ->onDelete('cascade');

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
        Schema::drop('sc_page_role_relationship');
    }
}
