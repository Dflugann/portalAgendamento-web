<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartamento extends Model
{
  protected $fillable = [
      'conjunto', 'andar', 'numero', 'vaga', 'dorm', 'suite','banheiro', 'email', 'area', 'imagem'
  ];
  protected $primaryKey = 'id_apartamento';

}
