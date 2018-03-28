<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visita extends Model
{
    protected $fillable = [
  'id_auth', 'nome','sobrenome', 'rg', 'cpf', 'email', 'phone', 'imagem'
	];
}
