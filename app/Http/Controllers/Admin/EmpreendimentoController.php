<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Empreendimento;

class EmpreendimentoController extends Controller
{
    public function index()
    {
      $dados = Empreendimento::all();
      $registros = json_decode($dados);
      return view('admin.empreendimento.index', compact('registros'));
    }
    public function adicionar()
    {
      return view('admin.empreendimento.adicionar');
    }
    public function salvar(Request $req)
    {
      $dados = $req->all();

      if(isset($dados['status'])){$dados['status'] = 'sim';}else {$dados['status'] = 'nao';}

      if ($req->hasFile('imagem')) {
        $imagem = $req->file('imagem');
        $num = rand(1111, 9999);
        $dir = "img/empreendimento";
        $ex = $imagem->guessClientExtension();
        $nomeImagem = "imagem_" . $num . "." . $ex;
        $imagem->move($dir, $nomeImagem);
        $dados['imagem'] = $dir . "/" . $nomeImagem;
      }
      Empreendimento::create($dados);
      return redirect()->route('admin.empreendimento');
    }

    public function editar($id)
    {
      $registro = Empreendimento::find($id);
      return view('admin.empreendimento.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
      $dados = $req->all();
      if (isset($dados['status'])) {$dados['status'] = 'sim';}else {$dados['status'] = 'nao';}
      if ($req->hasFile('imagem')) {
        $imagem = $req->file('imagem');
        $num = rand(1111, 9999);
        $dir = "img/empreendimento";
        $ex = $imagem->guessClientExtension();
        $nomeImagem = "imagem_" . "." . $num . "." . $ex;
        $imagem->move($dir, $nomeImagem);
        $dados['imagem'] = $dir . "/" . $nomeImagem;
      }
      Empreendimento::find($id)->update($dados);
      return redirect()->route('admin.empreendimento');
    }

    public function deletar($id)
    {
      Empreendimento::find($id)->delete($id);
      return redirect()->route('admin.empreendimento');
    }
}
