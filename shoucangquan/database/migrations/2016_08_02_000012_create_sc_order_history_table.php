<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScOrderHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //订单履历表
        Schema::create('sc_order_history', function(Blueprint $table)
        {
            $table->string('order_number',20)->comment('订单号');
            $table->integer('users_details_id',false,true)->comment('用户详细ID');
            $table->dateTime('order_creation_time')->comment('创建时间');
            $table->char('trading_status')->comment('交易状态');
            $table->dateTime('closing_time')->comment('成交时间');
            $table->dateTime('delivery_time')->comment('发货时间');
            $table->decimal('transportation_expenses',20,2)->comment('运费');
            $table->String('transport_company_id')->comment('运输公司ID');
            $table->string('receiver',20)->comment('收货人');
            $table->string('contact_number',20)->comment('联系号码');
            $table->string('receipt_address')->comment('收货地址');
            $table->string('postal_code',20)->comment('邮政编码');
            $table->dateTime('payment_time')->comment('付款时间');
            $table->dateTime('receipt_time')->comment('收货时间');
            $table->string('transport_code',50)->comment('运输单号');
            $table->string('creator_id',20)->nullable()->comment('创建者');
            $table->string('updater_id',20)->nullable()->comment('更新者');
            $table->timestamps();

            //主键
            $table->primary('order_number');//订单号

            //
            $table->foreign('transport_company_id')//运输公司ID
                ->references('id')
                ->on('sc_transport_company');

            $table->foreign('users_details_id')
                ->references('id')
                ->on('sc_user_detail');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sc_order_history');
    }
}
