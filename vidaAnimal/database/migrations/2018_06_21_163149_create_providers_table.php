<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   //fornecedores
        Schema::create('providers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('CNPJ', 15);
            $table->string('name', 20);
            $table->string('address', 20);
            $table->string('phone', 12);
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
        Schema::dropIfExists('providers');
    }
}
