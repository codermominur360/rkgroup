<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchandisersTable extends Migration
{
    /**
     * Run the migrations.
     *Item','size','qty','booking','actual_qty','file_no'
     * @return void
     */
    public function up()
    {
        Schema::create('merchandisers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('buyer_id');
            $table->string('order_id');
            $table->string('item');
            $table->string('size');
            $table->string('qty');
            $table->string('booking');
            $table->string('actual_qty');
            $table->string('file_no');
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
        Schema::dropIfExists('merchandisers');
    }
}
