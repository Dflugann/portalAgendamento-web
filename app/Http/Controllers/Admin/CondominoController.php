<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Condomino;

class CondominoController extends Controller
{
    public function index()
    {
      $registros = condomino::all();

      $retorna = json_decode($registros);

      return view('admin.condomino.index',compact('retorna'));
    }
}
