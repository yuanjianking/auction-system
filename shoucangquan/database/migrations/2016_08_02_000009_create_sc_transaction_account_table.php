<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScTransactionAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //交易账号表
        Schema::create('sc_transaction_account', function (Blueprint $table)
        {
            $table->increments('id')->comment('交易帐ID');
            $table->string('transaction_account')->comment('交易帐号');
            $table->integer('account_id',false,true)->comment('账户资金ID');
            $table->string('trading_platform_id',20)->comment('交易平台ID');
            $table->string('creator_id',20)->nullable()->comment('创建者');
            $table->string('updater_id',20)->nullable()->comment('更新者');
            $table->timestamps();

            //外键
            $table->foreign('account_id')
                ->references('id')
                ->on('sc_account_fund');

            $table->foreign('trading_platform_id')
                ->references('id')
                ->on('sc_trading_platform');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sc_transaction_account');
    }
}
