<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Conjunto;

class ConjuntoController extends Controller
{
    public function index()
    {
      $dados = Conjunto::all();
      $registros = json_decode($dados);
      return view('admin.conjunto.index', compact('registros'));
    }
    public function adicionar()
    {
      return view('admin.conjunto.adicionar');
    }
    public function salvar(Request $req)
    {
      $dados = $req->all();
      if ($req->hasFile('imagem')) {
        $imagem = $req->file('imagem');
        $num = rand(1111, 9999);
        $dir = "img/conjunto";
        $ex = $imagem->guessClientExtension();
        $nomeImagem = "imagem_" . $num . "." . $ex;
        $imagem->move($dir, $nomeImagem);
        $dados['imagem'] = $dir . "/" . $nomeImagem;
      }

      $result = Conjunto::create($dados);
      return redirect()->route('admin.conjunto');
    }

    public function editar($id)
    {
      $registro = Conjunto::find($id);
      return view('admin.conjunto.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
      $dados = $req->all();
      if($req->hasfile('imagem')){
        $imagem = $req->file('imagem');
        $num = rand(1111,9999);
        $dir = "img/conjunto";
        $ex = $imagem->guessClientExtencion();
        $nomeImagem = "imagem_" . $num . "." . $ex;
        $imagem->move($dir, $nomeImagem);
        $dados['imagem'] = $dir . "/" . $nomeImagem;
      }
      Conjunto::find($id)->update($dados);
      return redirect()->route('admin.conjunto');
    }

    public function deletar($id)
    {
      Conjunto::find($id)->delete($id);
      return redirect()->route('admin.conjunto');
    }
}
