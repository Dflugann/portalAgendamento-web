<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpreendimentosTable extends Migration
{
    /**
     * Função: Up()
     * autor: Flávio Santos
     * Descrição: Migração (criação modelo de tabela para empreendimentos)
     * Data: 16/02/2018
     * @return void
     */
    public function up()
    {
        Schema::create('empreendimentos', function (Blueprint $table) {
          $table->increments('id_empreendimento');
          $table->string('titulo');
          $table->longText('descricao');
          $table->string('imagem');
          $table->enum('status',['sim','nao'])->default('sim');
          $table->timestamps();
      });
    }

    /**
     * função: down()
     * autor: Flávio Santos
     * descrição: Reverte migração (deleta tabela empreendimentos)
     * data: 16/02/2018
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empreendimentos');
    }
}
