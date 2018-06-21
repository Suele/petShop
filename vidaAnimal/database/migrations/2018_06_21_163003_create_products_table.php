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
    {   //produtos
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 10);
            $table->string('name', 15);
            $table->text('description', 30);
            $table->double('price');
             //quantidade
            $table->integer('amount');
            $table->string('type_pet', 15);
            $table->timestamps();
            //categoria
            $table->integer('categorie_id')->unsigned();
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');
            //marca
            $table->integer('brand_id')->unsigned();
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
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
