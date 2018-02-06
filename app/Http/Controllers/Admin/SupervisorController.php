<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SupervisorController extends Controller
{
    public function adicionar()
    {
      return view('admin.supervisor.adicionar');
    }
}
