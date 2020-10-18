<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_ar');
            $table->string('name_en');
            $table->string('body_en');
            $table->string('body_ar');
            $table->string('price1');
            $table->string('price2');
            $table->bigInteger('vendor_id')->unsigned();
            $table->foreign('vendor_id')->references('id')->on('vendors')->onDelete('cascade')->onUpdate('cascade');
            
            

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
        Schema::dropIfExists('products');
    }
}
