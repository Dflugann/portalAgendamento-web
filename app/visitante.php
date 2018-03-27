<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visitante extends Model
{
    protected $fillable = [
  'nome','sobrenome', 'rg', 'cpf', 'email', 'phone', 'imgem'
	];
}
/*Schema::create('visitantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('rg');
            $table->string('cpf')->unique();
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('marca');
            $table->string('modelo');
            $table->string('placa');
            $table->string('cor');
            $table->date('date');
            $table->dateTime('starttime');
            $table->dateTime('endtime');
            $table->string('imgem');
            $table->longText('descricao');
            $table->enum('sautorizacao',['sim','nao'])->default('sim');
            $table->enum('vmorador',['sim','nao'])->default('sim');
            $table->timestamps();
        });*/