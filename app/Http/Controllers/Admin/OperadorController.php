<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Operador;

class OperadorController extends Controller
{

    public function index()
    {
      $dados = Operador::all();
      $registros = json_decode($dados);

      return view('admin.operador.index',compact('registros'));
    }

    public function adicionar()
    {
      return view('admin.operador.adicionar');
    }

    public function salvar(Request $req )
    {
      $dados = $req->all();
      if (isset($dados['status'])) {$dados['status'] = 'sim';}else {$dados['status'] = 'nao';}
      if ($req->hasFile('imagem')) {
        $imagem = $req->file('imagem');
        $num = rand(1111, 9999);
        $dir = "img/operador";
        $ex = $imagem->guessClientExtension();
        $nomeImagem = "imagem_" . "." . $num . "." . $ex;
        $imagem->move($dir, $nomeImagem);
        $dados['imagem'] = $dir . "/" . $nomeImagem;
      }
      Operador::create($dados);
      return redirect()->route('admin.operador');
    }

    public function editar($id)
    {
      $registro = Operador::find($id);
      return view('admin.operador.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id)
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
        $dir = "img/operador";
        $ex = $imagem->guessClientExtension();
        $nomeImagem = "imagem_" . "." . $num . "." . $ex;
        $imagem->move($dir, $nomeImagem);
        $dados['imagem'] = $dir . "/" . $nomeImagem;
      }

      Operador::find($id)->update($dados);
      return redirect()->route('admin.operador');
    }

    public function deletar($id)
    {
      Operador::find($id)->delete();
      return redirect()->route('admin.operador');
    }
}
