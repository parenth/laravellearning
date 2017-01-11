<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemp1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp1s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code',20)->index();
            $table->string('a',50)->nullable();
            $table->string('b',50)->nullable();
            $table->string('c',50)->nullable();
            $table->string('d',50)->nullable();
            $table->string('e',50)->nullable();
            $table->string('f',50)->nullable();
            $table->string('g',50)->nullable();
            $table->string('h',50)->nullable();
            $table->string('i',50)->nullable();
            $table->string('j',50)->nullable();
            $table->string('k',50)->nullable();
            $table->string('l',50)->nullable();
            $table->string('m',50)->nullable();
            
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
        Schema::dropIfExists('temp1s');
    }
}
