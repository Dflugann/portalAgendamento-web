<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Empreendimento;

class EmpreendimentoController extends Controller
{
    public function index()
    {
      $caminhos = [
        ['url'=>'./home','titulo'=>'Admin'],
        ['url'=>'','titulo'=>'Empreendimento']
      ];
      $dados = Empreendimento::all();
      $registros = json_decode($dados);
      return view('admin.empreendimento.index', compact('registros','caminhos'));
    }

    public function adicionar($type)
    {
      $type = $type;
      return view('admin.empreendimento.adicionar', compact('type'));
    }

    public function salvar(Request $req)
    {
      $dados = $req->all();

      if(isset($dados['status'])){$dados['status'] = 'sim';}else {$dados['status'] = 'nao';}
      if(isset($dados['quadra'])){$dados['quadra'] = $dados['quadra'];}else {$dados['quadra'] = '';}
      if(isset($dados['lote'])){$dados['lote'] = $dados['lote'];}else {$dados['lote'] = '';}
      if(isset($dados['conjunto'])){$dados['conjunto'] = $dados['conjunto'];}else {$dados['conjunto'] = '';}
      if(isset($dados['tipo'])){$dados['tipo'] = $dados['tipo'];}else {$dados['tipo'] = '';}

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
      return redirect()->route('empreendimento.index');
    }

    public function editar($id)
    {
      $caminhos = [
        ['url'=>'./home','titulo'=>'Admin'],
        ['url'=>'./empreendimento','titulo'=>'Empreendimento'],
        ['url'=>'','titulo'=>'Editar']
      ];
      $registro = Empreendimento::find($id);
      return view('admin.empreendimento.editar', compact('registro','caminhos'));
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
      return redirect()->route('empreendimento.index');
    }

    public function deletar($id)
    {
      Empreendimento::find($id)->delete($id);
      return redirect()->route('empreendimento.index');
    }


      public function filterImovel($id)
      {
        $caminhos = [
        ['url'=>'../.././home','titulo'=>'Admin'],
        ['url'=>'#','titulo'=>'Imovel']
      ];
        $dados = Empreendimento::find($id);
        $titulo = $dados['titulo'];
        $registros = DB::table('imovels')->where('nome_empr', $titulo)->get();
        return view('admin.imovel.index', compact('registros', 'caminhos'));
      }
}
