<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemp2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp2s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('old_id')->unique();
            $table->string('code',20)->index();
            $table->integer('is_year');
            $table->string('announce_date')->nullable();
            $table->decimal('d',10,2)->nullable();
            $table->decimal('e',10,2)->nullable();
            $table->decimal('f',10,2)->nullable();
            $table->decimal('g',10,2)->nullable();
            $table->decimal('h',10,2)->nullable();
            $table->decimal('i',10,2)->nullable();
            $table->decimal('j',10,2)->nullable();
            $table->decimal('k',10,2)->nullable();
            $table->decimal('l',10,2)->nullable();
            $table->decimal('m',10,2)->nullable();
            $table->decimal('n',10,2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *  营业收入	净利润	每*
    收益
    （元）	每*
    净资产
    （元）	净资产
    收益率
    （%）	每*经营
    现金流量
    （元）	销售
    毛利率
    （%）	更多
    营业收入
    （元）	同比增长
    （%）	季度环比
    增长（%）	净利润
    （元）	同比增长
    （%）	季度环比
     * @return void
     */
    public function down()
    {
        Schema::dropifexists('temp2s');
    }
}
