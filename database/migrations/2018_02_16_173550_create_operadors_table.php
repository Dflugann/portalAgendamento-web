<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operadors', function (Blueprint $table) {
          $table->increments('id_operador');
          $table->string('nome');
          $table->string('sobrenome');
          $table->string('cpf', 11);
          $table->string('tel', 11);
          $table->string('conj');
          $table->string('numapart');
          $table->string('imagem');
          $table->char('email_operador', 150);
          $table->char('password');
          $table->enum('status',['sim','nao'])->default('nao');
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
        Schema::dropIfExists('operadors');
    }
}
