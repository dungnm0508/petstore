<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_product');
            $table->string('trademark');
            $table->tinyInteger('status')->default(0);
            $table->integer('price');
            $table->integer('price_promotion')->nullable();
            $table->integer('quantity');
            $table->string('weight');
            $table->string('unit');
            $table->string('path_image');
            $table->text('description');
            $table->unsignedBigInteger('sub_cate_id');
            $table->foreign('sub_cate_id')->references('id')->on('sub_category');
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
        Schema::dropIfExists('product');
    }
}
