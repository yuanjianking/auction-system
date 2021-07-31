<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //页面表
        Schema::create('sc_pages', function (Blueprint $table)
        {
            $table->string('id',20)->comment('主键页面ID');
            $table->string('parent_id',20)->nullable()->comment('父页面ID');
            $table->string('name')->comment('页面名称');
            $table->string('module_id',20)->nullable()->comment('外键模块ID');
            $table->string('creator_id',20)->nullable()->comment('创建者');
            $table->string('updater_id',20)->nullable()->comment('更新者');
            $table->timestamps();

            //生成主键
            $table->primary('id');

            //生成外键
            $table->foreign('module_id')
                ->references('id')
                ->on('sc_modules');

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
        Schema::drop('sc_pages');
    }
}
