<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScOutStorehouseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //出库表
        Schema::create('sc_out_storehouse',function(Blueprint $table)
        {
            $table->increments('out_storehouse_number')-> comment('出库单号');
            $table->string('product_id',20)->comment('商品编号');
            $table->integer('product_qty')->default(0)->index()->comment('商品数量');
            $table->dateTime('out_storehouse_time')->comment('出库时间');
            $table->string('group_id',20)->comment('分组ID');
            $table->string('creator_id',20)->nullable()->comment('创建者');
            $table->string('updater_id',20)->nullable()->comment('更新者');
            $table->timestamps();

            //外键
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
        Schema::drop('sc_out_storehouse');
    }
}
