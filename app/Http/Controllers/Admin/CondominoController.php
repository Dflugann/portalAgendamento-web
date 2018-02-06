<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Condomino;

class CondominoController extends Controller
{

    public function index()
    {
      $dados = Condomino::all();
      $registros = json_decode($dados);

      return view('admin.condomino.index',compact('registros'));
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

    public function editar($id)
    {
      $registro = condomino::find($id);
      return view('admin.condomino.editar', compact('registro'));
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
        $dir = "img/condomino";
        $ex = $imagem->guessClientExtension();
        $nomeImagem = "imagem_" . "." . $num . "." . $ex;
        $imagem->move($dir, $nomeImagem);
        $dados['imagem'] = $dir . "/" . $nomeImagem;
      }

      Condomino::find($id)->update($dados);
      return redirect()->route('admin.condomino');
    }

    public function deletar($id)
    {
      Condomino::find($id)->delete();
      return redirect()->route('admin.condomino');
    }
}
