<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('order_id')->unsigned();
            $table->bigInteger('ve_id')->unsigned();
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ve_id')->references('id')->on('vendors')->onDelete('cascade')->onUpdate('cascade');

            
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
        Schema::dropIfExists('v_orders');
    }
}
