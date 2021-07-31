<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScSalesroomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //拍卖场表
        Schema::create('sc_salesroom', function(Blueprint $table)
        {
            $table->string('id',20)->comment('拍卖场ID');
            $table->string('salesroom_name')->comment('拍卖场名称');
            $table->integer('user_id',false,true)->comment('用户表的用户ID');
            $table->integer('event_times')->default(0)->index()->comment('拍卖场次');
            $table->dateTime('sales_date')->comment('拍卖日期');
            $table->dateTime('start_time')->comment('开始时间');
            $table->dateTime('end_time')->comment('结束时间');
            $table->string('creator_id',20)->nullable()->comment('创建者');
            $table->string('updater_id',20)->nullable()->comment('更新者');
            $table->timestamps();

            //主键
            $table->primary('id');//拍卖场ID

            //外键
             $table->foreign('user_id')//用户名
             ->references('id')
                 ->on('sc_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sc_salesroom');
    }
}
