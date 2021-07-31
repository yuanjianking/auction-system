
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScTradingInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //交易信息表
        Schema::create('sc_trading_information', function(Blueprint $table)
        {
            $table->string('id',20)->comment('交易id');
            $table->integer('users_details_id',false,true)->comment('用户详细ID');
            $table->string('product_id',20)->comment('商品ID');
            $table->decimal('transaction_price',20,2)->comment('交易价格');
            $table->integer('auction_count',false,true)->default(0)->comment('竞拍次数');
            $table->integer('browse_count',false,true)->default(0)->comment('浏览次数');
            $table->string('browse_person_name',20)->comment('拍卖人');
            $table->char('trading_status',20)->nullable()->comment('交易状态');
            $table->date('start_time')->nullable()->comment('拍卖开始日时');
            $table->date('end_time')->nullable()->comment('拍卖结束日时');
            $table->string('creator_id',20)->nullable()->comment('创建者');
            $table->string('updater_id',20)->nullable()->comment('更新者');
            $table->timestamps();

            //主键
            $table->primary('id',20);//交易id

            //外键
            $table->foreign('users_details_id')//用户详细ID
            ->references('id')
                ->on('sc_user_detail');

            $table->foreign('product_id')//商品ID
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
        Schema::drop('sc_trading_information');
    }
}
