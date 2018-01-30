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
    public function adicionar()
    {
      return view('admin.condomino.adicionar');
    }
    public function salvar(Request $req )
    {
      $dados = $req->all();
      if (isset($dados['status'])) {
        $dados['status'] = 'sim';
      }else {
        $dados['status'] = 'nao';
      }
      if ($req->hasFile('imagem')) {
        $imagem = $req->file('imagem');
        $num = rand(1111, 9999);
        $dir = "img/condomino";
        $ex = $imagem->guessClientExtension();
        $nomeImagem = "imagem_" . "." . $num . "." . $ex;
        $imagem->move($dir, $nomeImagem);
        $dados['imagem'] = $dir . "/" . $nomeImagem;
      }

      Condomino::create($dados);
      return redirect()->route('admin.condomino');
    }
}
