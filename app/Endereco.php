<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = [
    	'id_empreendimento', 'id_imoveis', 'andar', 'apto', 'bloco', 'conjunto', 'numLote', 'quadra', 'vaga'
    ];
    protected $primaryKey = 'id_endereco';
}
