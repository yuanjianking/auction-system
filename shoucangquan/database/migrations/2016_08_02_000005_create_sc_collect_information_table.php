<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScCollectInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //收藏信息表
        Schema::create('sc_collect_information',function(Blueprint $table)
        {
            $table->increments('id')->comment('主键ID');
            $table->integer('users_details_id',false,true)->comment('用户详细ID');
            $table->string('product_id',20)->comment('商品表的商品编号');
            $table->string('creator_id',20)->nullable()->comment('创建者');
            $table->string('updater_id',20)->nullable()->comment('更新者');
            $table->timestamps();

            //外键
            $table->foreign('users_details_id')
                ->references('id')
                ->on('sc_user_detail');

            $table->foreign('product_id')//商品表的商品编号
                ->references('id')
                ->on('sc_products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sc_collect_information');
    }
}
