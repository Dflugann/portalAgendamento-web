<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class condomino extends Model
{
  protected $fillable = [
      'nome', 'sobrenome', 'cpf', 'tel', 'conj', 'numapart','imagem', 'email', 'password', 'status', 'update_at', 'created_at'
  ];
}
