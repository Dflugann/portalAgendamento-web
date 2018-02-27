<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministradorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administradors', function (Blueprint $table) {
            $table->increments('id_admin');
            $table->string('nome', 80);
            $table->string('cpf', 80);
            $table->string('phone', 80);
            $table->string('email_admin');
            $table->string('nome_empr');
            $table->string('imagem');
            $table->longText('descricao');
            $table->enum('status',['sim','nao'])->default('sim');
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
        Schema::dropIfExists('administradors');
    }
}
