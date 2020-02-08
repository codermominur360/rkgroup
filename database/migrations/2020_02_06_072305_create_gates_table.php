<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGatesTable extends Migration
{
    /**
     * Run the migrations.
     * order_number','chalan','gate_seria
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('order_number');
            $table->string('chalan');
            $table->string('gate_seria');
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('gates');
    }
}
