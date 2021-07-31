<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //新闻公告表
        Schema::create('sc_news', function (Blueprint $table)
        {
            $table->bigIncrements('id')->comment('主键新闻ID');
            $table->string('name')->comment('新闻标题');
            $table->text('content')->comment('新闻内容');
            $table->string('creator_id',20)->nullable()->comment('创建者');
            $table->string('updater_id',20)->nullable()->comment('更新者');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sc_news');
    }
}
