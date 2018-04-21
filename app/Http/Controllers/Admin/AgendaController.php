<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Agenda;
use App\Visita;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caminhos = [
            ['url'=> './home', 'titulo'=> 'Admin'],
            ['url'=> '', 'titulo'=> 'Agenda']
        ];
        $registros = DB::table('agendas')->orderBy('date')->get();;

        //$registros = Agenda::all();
        return view('admin.agenda.index', compact('registros','caminhos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.agenda.adicionar');
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
        $visitante = DB::table('visitas')->where('id', $dados['id_visitante'])->first();;
        $dados['nome_visitante'] = $visitante->nome;
        $dados['id_auth'] = Auth::user()->id;
        $dados['nome_auth'] = Auth::user()->name;

        if (isset($dados['sautorizacao'])) {
            $dados['sautorizacao'] = 'sim';
        }else{
            $dados['sautorizacao'] = 'nao';
        }

        if (isset($dados['vmorador'])) {
            $dados['vmorador'] = 'sim';
        }else{
            $dados['vmorador'] = 'nao';
        }
        $dados['date'] = date('Y-m-d', strtotime($dados['date']));
        $dados['starttime'] = $dados['starttime'] . ':00';
        $dados['endtime'] = $dados['endtime'] . ':00';

        $agenda = Agenda::create($dados);
        $id_agenda = $agenda->id;        
        $qrcode = new QrcodeController;
        $qrcode->store($dados, $id_agenda);
        return redirect()->route('agenda.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registro = Agenda::find($id);
        $registro_visitante = Visita::find($registro->id_visitante);

        return view('admin.agenda.detalhes', compact('registro_visitante','registro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
