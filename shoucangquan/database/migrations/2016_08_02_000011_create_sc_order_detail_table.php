<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScOrderDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //订单详细表
        Schema::create('sc_order_detail', function (Blueprint $table)
        {
            $table->increments('id')->comment('订单详细ID');
            $table->string('order_number',20)->comment('订单号');
            $table->string('product_id',20)->comment('商品编号');
            $table->decimal('trading_balance',20,2)->comment('交易价格');
            $table->string('creator_id',20)->nullable()->comment('创建者');
            $table->string('updater_id',20)->nullable()->comment('更新者');
            $table->timestamps();

            //外键
            $table->foreign('order_number')
                ->references('order_number')
                ->on('sc_order_item');

            $table->foreign('product_id')
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
        Schema::drop('sc_order_detail');
    }
}
