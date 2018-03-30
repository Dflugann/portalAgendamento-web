<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_visitante');
            $table->string('nome_visitante');
            $table->string('id_auth');
            $table->string('nome_auth');
            $table->string('marca');
            $table->string('modelo');
            $table->string('placa');
            $table->string('cor');
            $table->date('date');
            $table->time('starttime');
            $table->time('endtime');
            $table->enum('sautorizacao',['sim', 'nao'])->default('sim');
            $table->enum('vmorador',['sim', 'nao'])->default('sim');
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
        Schema::dropIfExists('agendas');
    }
}
