<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $fillable = [
    'nome_empr', 'andar', 'num', 'vaga', 'dorm', 'suite', 'banh', 'area', 'status'
  ];
}
