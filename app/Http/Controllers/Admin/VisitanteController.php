<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisitanteController extends Controller
{
    public function index()
    {
      return view('admin.visitante.index');
    }
    public function adicionar()
    {
      return view('admin.visitante.adicionar');
    }
}
