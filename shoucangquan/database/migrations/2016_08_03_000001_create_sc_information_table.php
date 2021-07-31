<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        //资料表
        Schema::create('sc_information', function(Blueprint $table)
        {
            $table->increments('id')->comment('Id');
            $table->string('information_type',20)->comment('资料类型');
            $table->string('year_type',20)->comment('年份类型');
            $table->string('picture')->comment('示例图片文件路径');
            $table->string('detail_id')->comment('资料详细xml文件路径');
            $table->string('detail_explain')->comment('资料说明');
            $table->string('creator_id',20)->nullable()->comment('创建者');
            $table->string('updater_id',20)->nullable()->comment('更新者');
            $table->timestamps();

            //生成外键
            $table->foreign('information_type')
                ->references('type')
                ->on('sc_information_type');

            $table->foreign('year_type')
                ->references('type')
                ->on('sc_information_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sc_information');
    }
}
