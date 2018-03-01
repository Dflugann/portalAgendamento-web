<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $fillable = [
        'nome', 'phone', 'email_admin', 'imagem', 'user_admin', 'password', 'status'
    ];
     protected $primaryKey = 'id_admin';
}