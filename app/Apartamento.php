<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartamento extends Model
{
  protected $fillable = [
    'nome_empr', 'id_empr', 'num',  'conjunto', 'andar', 'numero', 'vaga', 'dorm', 'suite','banh', 'email', 'area', 'imagem', 'status'
  ];
  protected $primaryKey = 'id_apart';

}
