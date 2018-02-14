<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conjunto extends Model
{
  protected $fillable = [
      'titulo', 'tipo','imagem', 'descricao'
  ];
  protected $primaryKey = 'id_conjunto';
}
