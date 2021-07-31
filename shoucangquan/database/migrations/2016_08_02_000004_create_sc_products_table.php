<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //商品表
         Schema::create('sc_products',function(Blueprint $table)
        {
            $table->string('id',20)->comment('商品编号');
            $table->string('name')->comment('商品名称');
            $table->decimal('price',20,2)->comment('一口价');
            $table->string('type_year',20)->comment('商品年代');
            $table->string('type_material',20)->comment('商品材质');
            $table->string('salesroom_id',20)->nullable()->comment('商品拍卖场的id');
            $table->string('detail_id')->comment('商品详细xml文件路径');
            $table->integer('user_id',false,true)->comment('商品所有者');
            $table->string('image')->comment('图片');
            $table->string('introduction')->comment('简介');
            $table->char('deleted')->comment('是否注销');
            $table->string('creator_id',20)->nullable()->comment('创建者');
            $table->string('updater_id',20)->nullable()->comment('更新者');
            $table->timestamps();

            //主键
            $table->primary('id');//商品编号

            //外键
            $table->foreign('type_year')//商品年代
                ->references('type')
                ->on('sc_product_type');

            $table->foreign('type_material')//商品材质
                ->references('type')
                ->on('sc_product_type');

            $table->foreign('salesroom_id')//商品拍卖场的id
                ->references('id')
                ->on('sc_salesroom');

            $table->foreign('user_id')//商品所有者
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
       Schema::drop('sc_products');
    }
}
