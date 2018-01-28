<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class condomino extends Model
{
  protected $fillable = [
      'nome', 'sobrenome', 'cpf', 'imagem', 'conj', 'numapart', 'dtentrada', 'dtsaida'
  ];
}
