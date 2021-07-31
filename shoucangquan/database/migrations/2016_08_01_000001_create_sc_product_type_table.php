<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScProductTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //商品类型表
        Schema::create('sc_product_type',function(Blueprint $table)
        {
            $table->string('type',20)->comment('商品类型');
            $table->string('name')->comment('类型名');
            $table->string('creator_id',20)->nullable()->comment('创建者');
            $table->string('updater_id',20)->nullable()->comment('更新者');
            $table->timestamps();
            //主键
            $table->primary('type');//商品类型编号
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sc_product_type');
    }
}
