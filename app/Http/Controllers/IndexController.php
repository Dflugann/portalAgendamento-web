<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

    	return view('admin.index');

    }

    public function criar(Request $resp){
    	dd($resp->all());
    	return 'Teste CRIAR';
    }

    public function editar(){
    	return 'Teste editar';
    }
    public function excluir(){

    }
}
