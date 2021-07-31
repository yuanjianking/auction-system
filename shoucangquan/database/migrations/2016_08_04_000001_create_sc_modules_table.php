<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //模块表
        Schema::create('sc_modules', function (Blueprint $table)
        {
            $table->string('id',20)->comment('主键模块ID');
            $table->string('parent_id',20)->nullable()->comment('父模块ID');
            $table->string('name')->comment('模块名称');
            $table->string('creator_id',20)->nullable()->comment('创建者');
            $table->string('updater_id',20)->nullable()->comment('更新者');
            $table->timestamps();

            //生成主键
            $table->primary('id');
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
