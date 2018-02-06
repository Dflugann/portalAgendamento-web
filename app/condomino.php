<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condomino extends Model
{
  protected $fillable = [
      'nome', 'sobrenome', 'cpf', 'tel', 'conj', 'numapart','imagem', 'email', 'password', 'status', 'update_at', 'created_at'
  ];
  protected $primaryKey = 'id_condomino';
}
