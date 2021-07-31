<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScCashMovementDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //资金移动明细表
        Schema::create('sc_cash_movement_detail', function (Blueprint $table)
        {
            $table->increments('id')->comment('主键ID');
            $table->integer('account_id',false,true)->comment('账户资金ID');
            $table->char('pay_receive_type')->comment('入出金区分');
            $table->decimal('amount',20,2)->default(0.00)->comment('金额');
            $table->string('creator_id',20)->nullable()->comment('创建者');
            $table->string('updater_id',20)->nullable()->comment('更新者');
            $table->timestamps();

            //外键
            $table->foreign('account_id')
                ->references('id')
                ->on('sc_account_fund');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sc_cash_movement_detail');
    }
}
