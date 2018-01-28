<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = [
          (object)['nome'=>'Flavio','tel'=>'123456'],
          (object)['nome'=>'Gabril','tel'=>'789456']
        ];
        //dd($contatos);
        $contato = new Contato();
        $lista = $contato->lista();
        dd($lista->nome);
        return view('contato/index',compact('contatos'));
    }
}
