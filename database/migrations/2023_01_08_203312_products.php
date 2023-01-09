<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name', 300);
            $table->bigInteger('price_min_range');
            $table->bigInteger('price_max_range');
            $table->string('description', 500);
            $table->string('main_product_image', 500);
            // $table->enum('secondary_product_image', array())->nullable();
            // $table->enum('tags', array('jewellery'))->nullable();
            // $table->enum('inclusions', array('hair'))->nullable();
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
};
