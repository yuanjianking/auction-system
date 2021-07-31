<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScTransactionDetailInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        //交易信息详细表
        Schema::create('sc_transaction_detail_information', function(Blueprint $table)
        {
            $table->increments('id')->comment('Id');
            $table->string('trading_information_id',20)->comment('交易信息表主键');
            $table->integer('users_details_id',false,true)->comment('用户详细ID');
            $table->decimal('price',20,2)->comment('出价');
            $table->string('creator_id',20)->nullable()->comment('创建者');
            $table->string('updater_id',20)->nullable()->comment('更新者');
            $table->timestamps();

            //外键
            $table->foreign('trading_information_id')
                ->references('id')
                ->on('sc_trading_information');

            //外键
            $table->foreign('users_details_id')//用户详细ID
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
        Schema::drop('sc_transaction_detail_information');
    }
}
