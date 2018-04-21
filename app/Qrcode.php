<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qrcode extends Model
{
    protected $fillable =[
    	'id_agenda', 'id_auth', 'id_visitante', 'imagem'
    ];
}
