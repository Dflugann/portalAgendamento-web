<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
   protected $fillable = [
        'id_visitante', 'nome_visitante', 'nome_auth', 'id_auth', 'marca', 'modelo', 'placa', 'cor', 'date', 'starttime', 'endtime', 'sautorizacao', 'vmorador'
    ];
}
