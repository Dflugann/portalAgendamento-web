<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCondominosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condominos', function (Blueprint $table) {
          $table->increments('id_condomino');
          $table->string('nome');
          $table->string('sobrenome');
          $table->string('cpf');
          $table->string('imagem');
          $table->string('conj');
          $table->string('numapart');
          $table->dateTime('dtentrada');
          $table->dateTime('dtsaida');
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
        Schema::dropIfExists('condominos');
    }
}
