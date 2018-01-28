<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitantes', function (Blueprint $table) {
            $table->increments('id_visitante');
            $table->char('id_condomino');
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('cpf');
            $table->string('imagem');
            $table->string('condominio');
            $table->string('apartamento');
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
        Schema::dropIfExists('visitantes');
    }
}
