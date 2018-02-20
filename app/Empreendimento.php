<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empreendimento extends Model
{
  /*
  * author: Flávio Santos
  * data: 16/02/2018
  * @var fillable (valida os campos da tabela empreendimentos)
  * @var primaryKey (alterar campo ID para id_conjunto)
  */
  protected $fillable = [
      'titulo', 'tipo','quadra', 'bloco','imagem', 'descricao', 'status'
  ];
  protected $primaryKey = 'id_empr';
}
