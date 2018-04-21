<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $fillable = [
    'id_empreendimento', 'tipo', 'vaga', 'descricao', 'status'
  ];
  	protected $primaryKey = 'id_imovel';
}
