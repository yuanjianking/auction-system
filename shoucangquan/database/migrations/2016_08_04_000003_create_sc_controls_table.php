<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScControlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //控件表
        Schema::create('sc_controls', function (Blueprint $table)
        {
            $table->string('id',20)->comment('主键控件ID');
            $table->string('parent_id',20)->nullable()->comment('父控件ID');
            $table->string('name')->comment('控件名称');
            $table->string('control_type',20)->comment('控件类型');
            $table->string('page_id',20)->nullable()->comment('页面模块ID');
            $table->string('creator_id',20)->nullable()->comment('创建者');
            $table->string('updater_id',20)->nullable()->comment('更新者');
            $table->timestamps();

            //生成主键
            $table->primary('id');

            //生成外键
            $table->foreign('page_id')
                ->references('id')
                ->on('sc_pages');

            $table->foreign('control_type')
                ->references('type')
                ->on('sc_control_type');
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
        Schema::drop('sc_controls');
    }
}
