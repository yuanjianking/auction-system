<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScAccountFundTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //账户资金
        Schema::create('sc_account_fund', function (Blueprint $table)
        {
            $table->increments('id')->comment('账户资金ID');
            $table->integer('users_details_id',false,true)->comment('用户详细ID');
            $table->decimal('cash_balance',20,2 )->default(0.00)->comment('账户资金余额');
            $table->string('creator_id',20)->nullable()->comment('创建者');
            $table->string('updater_id',20)->nullable()->comment('更新者');
            $table->timestamps();

             //外键
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
        Schema::drop('sc_account_fund');
    }
}
