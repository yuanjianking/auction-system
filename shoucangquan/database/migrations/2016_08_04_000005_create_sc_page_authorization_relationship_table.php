<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScPageAuthorizationRelationshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //页面权限关系表
        Schema::create('sc_page_authorization_relationship', function (Blueprint $table)
        {
            $table->increments('id')->comment('主键ID');
            $table->string('page_id',20)->comment('外键页面ID');
            $table->string('authorization_code',20)->comment('外键权限code');
            $table->string('creator_id',20)->nullable()->comment('创建者');
            $table->string('updater_id',20)->nullable()->comment('更新者');
            $table->timestamps();

            //唯一索引
            $table->unique(['page_id', 'authorization_code'],'sc_page_auth_relationship_id_code_index');

                //生成外键
            $table->foreign('page_id')
                ->references('id')
                ->on('sc_pages');

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
        Schema::drop('sc_page_authorization_relationship');
    }
}
