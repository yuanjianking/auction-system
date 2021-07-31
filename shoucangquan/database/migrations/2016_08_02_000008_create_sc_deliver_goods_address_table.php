<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScDeliverGoodsAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //送货地址表
        Schema::create('sc_deliver_goods_address', function (Blueprint $table)
        {
            $table->increments('id')->comment('送货地址ID');
            $table->integer('users_details_id',false,true)->comment('用户详细ID');
            $table->string('receiver')->comment('收货人');
            $table->string('contact_number',20)->comment('联系号码');
            $table->string('province',20)->comment('省');
            $table->string('city',20)->comment('市');
            $table->string('area',20)->comment('区');
            $table->string('detail_address',50)->comment('详细地址');
            $table->string('postal_code',20)->comment('邮政编码');
            $table->char('default')->comment('默认地址FLG');
            $table->string('creator_id',20)->nullable()->comment('创建者');
            $table->string('updater_id',20)->nullable()->comment('更新者');
            $table->timestamps();

            //外键
            $table->foreign('users_details_id')
                ->references('id')
                ->on('sc_user_detail');

            $table->foreign('province')
                ->references('id')
                ->on('sc_address');

            $table->foreign('city')
                ->references('id')
                ->on('sc_address');

            $table->foreign('area')
                ->references('id')
                ->on('sc_address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sc_deliver_goods_address');
    }
}
