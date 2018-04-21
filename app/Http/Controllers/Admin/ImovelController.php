<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Empreendimento;
use App\Imovel;
Use App\Endereco;

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
        $dados = DB::table('enderecos')
        ->join('imovels', 'enderecos.id_imoveis', '=', 'imovels.id_imovel')
        ->select('imovels.id_imovel as enderecos.id_imoveis', '*')
        ->get();
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
        if ($dados['tipo'] == 'comercial') {
            $dados['bloco']     = $dados['blocoComercial'];
            $dados['andar']     = $dados['andarComercial'];
            $dados['vaga']      = $dados['vagaComercial'];
            $dados['descricao'] = $dados['descricaoComercial'];
        }elseif ($dados['tipo'] == 'vertical') {
            $dados['descricao'] = $dados['descricaoVertical'];
        }

      if (isset($dados['id_empreendimento'])) {
        $registro = DB::table('empreendimentos')->where('id_empreendimento', $dados['id_empreendimento'])->value('titulo');
        $dados['nome_empr'] = $registro;
      }else {
        $dados['nome_empr'] = '';
      }

      if (isset($dados['status'])) {
        $dados['status'] = 'sim';
      }else {
        $dados['status'] = 'nao';
      }

        $dados_tb_imovel = array(
            'id_empreendimento' => $dados['id_empreendimento'],
            'tipo' => $dados['tipo'], 
            'vaga' => $dados['vaga'],
            'descricao' => $dados['descricao'],
            'status' => $dados['status']//tb_imoveis
        );
        Imovel::create($dados_tb_imovel);
        $imovel = Imovel::all();
        $id = $imovel->last();

        //Imovel::create($dados_tb_imovel);
        $dados_tb_endereco = array(
            'id_empreendimento' => $dados['id_empreendimento'],
            'id_imoveis' => (($id->id_imovel) ? $id->id_imovel : 'null') ,
            'bloco' => (($dados['bloco']) ? $dados['bloco'] : 'null'),
            'andar' => (($dados['andar']) ? $dados['andar'] : 'null'),
            'apto' => (($dados['apto']) ? $dados['apto'] : 'null'),
            'quadra' => (($dados['quadra']) ? $dados['quadra'] : 'null'),
            'numLote' => (($dados['numLote']) ? $dados['numLote'] : 'null'),
            'conjunto' => (($dados['conjunto']) ? $dados['conjunto'] : 'null')//tb_endereco
        );
        
        Endereco::create($dados_tb_endereco);
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
        $imovel = Imovel::find($id);
        $endereco = Endereco::find($id);
        $id_empreendimento = $imovel->id_empreendimento;
        $empreendimento = Empreendimento::find($id_empreendimento);
        
        return view('admin.imovel.detalhe', compact('imovel', 'endereco', 'empreendimento'));   
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
        $endereco = Endereco::find($id);

        $empreendimento = Empreendimento::find($registros['id_empreendimento']);
        return view('admin.imovel.editar', compact('registros','registros_empr','caminhos','empreendimento','endereco'));
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
        if (isset($dados['blocoComercial'])) {
            $dados['bloco']     = $dados['blocoComercial'];
            $dados['andar']     = $dados['andarComercial'];
            $dados['vaga']      = $dados['vagaComercial'];
            $dados['descricao'] = $dados['descricaoComercial'];
        }elseif (isset($dados['descricaoVertical'])) {
            $dados['descricao'] = $dados['descricaoVertical'];
        }
        

      if (isset($dados['status'])) {
        $dados['status'] = 'sim';
      }else {
        $dados['status'] = 'nao';
      }

        $dados_tb_imovel = array(
            'vaga' => $dados['vaga'],
            'descricao' => $dados['descricao'],
            'status' => $dados['status']//tb_imoveis
        );  
        Imovel::find($id)->update($dados_tb_imovel);
        //$imovel = Imovel::all();
        //$id = $imovel->last();

        //Imovel::create($dados_tb_imovel);
        $dados_tb_endereco = array(
            //'id_imoveis' => (($id->id_imovel) ? $id->id_imovel : 'null') ,
            'bloco' => ((isset($dados['bloco'])) ? $dados['bloco'] : 'null'),
            'andar' => ((isset($dados['andar'])) ? $dados['andar'] : 'null'),
            'apto' => ((isset($dados['apto'])) ? $dados['apto'] : 'null'),
            'quadra' => ((isset($dados['quadra'])) ? $dados['quadra'] : 'null'),
            'numLote' => ((isset($dados['numLote'])) ? $dados['numLote'] : 'null'),
            'conjunto' => ((isset($dados['conjunto'])) ? $dados['conjunto'] : 'null')//tb_endereco
        );
        
        Endereco::find($id)->update($dados_tb_endereco);
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
        Endereco::find($id)->delete();
        Imovel::find($id)->delete();
        return redirect()->route('imovel.index');
    }
}
