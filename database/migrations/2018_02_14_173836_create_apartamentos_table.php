<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApartamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartamentos', function (Blueprint $table) {
            $table->increments('id_apart');
            $table->string('nome_empr');
            $table->string('id_empr');
            $table->string('andar');
            $table->string('num');
            $table->string('vaga');
            $table->string('dorm');
            $table->string('suite');
            $table->string('banh');
            $table->string('area');
            $table->enum('status',['sim', 'nao'])->default('sim');
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
        Schema::dropIfExists('apartamentos');
    }
}
