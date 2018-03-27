<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\visitante;
use Auth;

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

    public function salvar(Request $req)
    {
        
        $dados = $req->all();
        $dados['id_auth'] = Auth::user()->id;
        
    if ($req->hasFile('imagem')) {
        $imagem = $req->file('imagem');
        $num = rand(1111, 9999);
        $dir = "img/visitante";
        $ex = $imagem->guessClientExtension();
        $nomeImagem = "imagem" . $num . "." . $ex;
        $imagem->move($dir, $nomeImagem);
        $dados['imagem'] = $dir . "/" . $nomeImagem;
        
      }
      visitante::create($dados);
      return redirect()->route('empreendimento.index');
            
        

    }
}
