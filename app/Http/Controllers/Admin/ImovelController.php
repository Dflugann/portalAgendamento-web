<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Empreendimento;
use App\Imovel;

class ImovelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caminhos = [
            ['url'=>'./home','titulo'=>'Admin'],
            ['url'=>'','titulo'=>'Imóveis'],
        ];
        $dados = Imovel::all();
        $registros = json_decode($dados);
        return view('admin.imovel.index', compact('registros','caminhos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $registros_empr = Empreendimento::all();
        
        return view('admin.imovel.adicionar', compact('registros_empr'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $dados = $req->all();
      if (isset($dados['nome_empr'])) {
        $registro = DB::table('empreendimentos')->where('titulo', $dados['nome_empr'])->value('titulo');
        $dados['nome_empr'] = $registro;
      }else {
        $dados['nome_empr'] = '';
      }

      if (isset($dados['status'])) {
        $dados['status'] = 'sim';
      }else {
        $dados['status'] = 'nao';
      }
      Imovel::create($dados);
      return redirect()->route('imovel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $caminhos = [
            ['url'=>'./home','titulo'=>'Admin'],
            ['url'=>'./imovel','titulo'=>'Imóvel'],
            ['url'=>'','titulo'=>'Editar']
        ];
        $registros_empr = Empreendimento::all();
        $registros = Imovel::find($id);
        return view('admin.imovel.editar', compact('registros','registros_empr','caminhos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $dados = $req->all();
      if (isset($dados['nome_empr'])) {
        $registro = DB::table('empreendimentos')->where('titulo', $dados['nome_empr'])->value('titulo');
        $dados['nome_empr'] = $registro;
      }else {
        $dados['nome_empr'] = '';
      }

      if (isset($dados['status'])) {
        $dados['status'] = 'sim';
      }else {
        $dados['status'] = 'nao';
      }
        Imovel::find($id)->update($dados);
        return redirect()->route('imovel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletar($id)
    {
        Imovel::find($id)->delete();
        return redirect()->route('imovel.index');
    }
}
