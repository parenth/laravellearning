<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsPriceTable extends Migration
{
    /**
     * Run the migrations.
     *  营业收入	净利润	每
    收益
    （元）	每
    净资产
    （元）	净资产
    收益率
    （%）	每经营
    现金流量
    （元）	销售
    毛利率
    （%）	更多
     * @return void
     */
    public function up()
    {
        Schema::create('goodsprice', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code',20)->index();
            $table->string('datename',50);
            $table->timestamp('publish_date');
            $table->string('net_income',50);
            //$table->timestamp('update_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goodsprice');
    }
}
