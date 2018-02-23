<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Empreendimento;
use App\Apartamento;

class ApartamentoController extends Controller
{
    public function index()
    {
        $dados = Apartamento::all();
        $registros_apart = json_decode($dados);
        return view('admin.apartamento.index', compact('registros_apart'));
    }

    public function adicionar()
    {
      $registros_empreend = Empreendimento::all();
      return view('admin.apartamento.adicionar', compact('registros_empreend'));
    }

    public function salvar(Request $req)
    {
      // $registros = DB::table('empreendimentos')->get();
      $dados = $req->all();

      if (isset($dados['nome_empr'])) {
        $registro = DB::table('empreendimentos')->where('titulo', $dados['nome_empr'])->value('id_empr');
        $dados['id_empr'] = $registro;
      }else {
        $dados['id_empr'] = '';
      }

      if (isset($dados['status'])) {
        $dados['status'] = 'sim';
      }else {
        $dados['status'] = 'nao';
      }
      Apartamento::create($dados);
      return redirect()->route('admin.apartamento');
    }

    public function editar($id)
    {
      $registros_empreend = Empreendimento::all();
      $registros_apart = Apartamento::find($id);
      return view('admin.apartamento.editar', compact('registros_empreend','registros_apart'));
    }

    public function brincar($id)
  {
    echo $id;
  }

}
