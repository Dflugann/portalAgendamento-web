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
      $registros = Empreendimento::all();
      
      return view('admin.empreendimento.index', compact('registros','caminhos'));
    }

    public function adicionar()
    {
      return view('admin.empreendimento.adicionar');
    }

    public function salvar(Request $req)
    {
      $dados = $req->all();
      if (isset($dados['status'])) {
        $dados['status'] = 'sim';
      }else{
        $dados['status'] = 'nao';
      }

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
        ['url'=>'#','titulo'=>'Empreendimento-Imovel']
      ];
        $imoveis = DB::table('imovels')->where('id_empreendimento', $id)->get();
        $enderecos = DB::table('enderecos')->where('id_empreendimento', $id)->get();
        
        $users = DB::table('imovels')
            ->join('enderecos', 'enderecos.id_empreendimento', '=', 'imovels.id_empreendimento')
            ->select('id_imoveis')
            ->get($id);

            foreach ($users as $key) {
             
              var_dump($key);
            }
        dd($users);

        return view('admin.empreendimento.empreendimento_imovel', compact('imoveis', 'enderecos', 'caminhos'));
      }

      
}
