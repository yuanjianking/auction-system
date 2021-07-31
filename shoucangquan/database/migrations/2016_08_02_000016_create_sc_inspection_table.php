<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScInspectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //检货表
        Schema::create('sc_inspection',function(Blueprint $table)
        {
            $table->increments('inspection_number')-> comment('检货单号');
            $table->string('product_id',20)->comment('商品编号');
            $table->dateTime('inspection_time')->nullable()->comment('检货时间');
            $table->integer('user_id',false,true)->nullable()->comment('检货人');
            $table->string('creator_id',20)->nullable()->comment('创建者');
            $table->string('updater_id',20)->nullable()->comment('更新者');
            $table->timestamps();

            //外键
            $table->foreign('user_id')//检货人
            ->references('id')
                ->on('sc_users');

            $table->foreign('product_id')//商品编号
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
        Schema::drop('sc_inspection');
    }
}
