<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdministradorController extends Controller
{
    public function adicionar()
    {
      return view('admin.administrador.adicionar');
    }
}
