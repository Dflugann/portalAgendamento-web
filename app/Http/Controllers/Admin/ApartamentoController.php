<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Empreendimento;
use App\Apartamento;

class ApartamentoController extends Controller
{
    public function index()
    {
        $dados = Apartamento::all();
        $registros = json_decode($dados);
        return view('admin.apartamento.index', compact('registros'));
    }

    public function adicionar()
    {
      $registros = Empreendimento::all();
      return view('admin.apartamento.adicionar', compact('registros'));
    }

    public function salvar(Request $req)
    {
      $dados = $req->all();
      var_dump($dados);exit;
      if ($req->hasFile('imagem')) {
        $imagem = $req->file('imagem');
        $num = rand(1111, 9999);
        $dir = "img/apartamento";
        $ex = $imagem->guessClientExtension();
        $nomeImagem = "imagem_" . "." . $num . "." . $ex;
        $imagem->move($dir, $nomeImagem);
        $dados['imagem'] = $dir . "/" . $nomeImagem;
      }
      Apartamento::create($dados);
      return redirect()->route('admin.apartamento');
    }
}
