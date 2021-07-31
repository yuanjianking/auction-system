<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //地址表
        Schema::create('sc_address', function (Blueprint $table)
        {
            $table->string('id',20)->comment('地址id');
            $table->string('name')->comment('地址名');
            $table->string('parent_id',20)->nullable()->comment('父id');
            $table->string('zip_code',20)->nullable()->comment('邮编');
            $table->string('creator_id',20)->nullable()->comment('创建者');
            $table->string('updater_id',20)->nullable()->comment('更新者');
            $table->timestamps();

            //主键
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sc_address');
    }
}
