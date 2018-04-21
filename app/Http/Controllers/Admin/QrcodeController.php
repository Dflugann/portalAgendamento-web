<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SimpleSoftwareIO\QrCode\BaconQrCodeGenerator;
use App\Visita;
use App\Qrcode;
use App\Agenda;

class QrcodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qrcode = new BaconQrCodeGenerator;
		$qr = $qrcode->size(500)->generate('Make a qrcode without Laravel!');
		echo $qr;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($request, $id_agenda)
    {
    	
    	//dados visitante
		$id_visitante = $request['id_visitante'];
    	$visitante = Visita::find($id_visitante);
    	$nome_visitante = $visitante->nome;
    	$rg_visitante = $visitante->rg;
    	$cpf_visitante = $visitante->cpf;
    	$nome_empresa = $visitante->empresa;
    	$funcao_visitante = $visitante->funcao;
    	//dados morador
    	$nome_morador = $request['nome_auth'];
    	$vmorador = $request['vmorador'];
    	//dados agenda
    	$date = date('d/m/y', strtotime($request['date']));
    	$starttime = $request['starttime'];
    	$endtime = $request['endtime'];
    	//dados automovel
    	$placa = $request['placa'];
    	$marca = $request['marca'];
    	$modelo = $request['modelo'];



    	$num = rand(1111,9999);
    	$file = 'img/qrcode';
    	$imagem = 'qrcode_' . $num . '.png';
        $qrcode = new BaconQrCodeGenerator;
		$qr = $qrcode->format('png')->size(500)->generate("
			Morador: $nome_morador \n
			Validar c/ Morador: $vmorador \n \n
			Nome Visitante: $nome_visitante \n
			RG: $rg_visitante \n
			CPF: $cpf_visitante \n \n
			Nome Empresa: $nome_empresa \n
			Funcao: $funcao_visitante \n \n
			Agendamento: Data $date \n
			Hora Entrada: $starttime \n
			Hora Saida: $endtime \n \n
			Dados do veiculo \n
			MOdelo: $modelo \n
			Marca: $marca \n
			Placa: $placa",
			 "$file/$imagem");
		$dados['imagem'] = $file . '/' . $imagem;
		$dados['id_visitante'] = $id_visitante;
		$dados['id_auth'] = $request['id_auth'];
		$dados['id_agenda'] = $id_agenda;

		Qrcode::create($dados);
        $email = new TesteMailController;
        $email->enviar($dados, $visitante, $request);
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
    	$qrcode = DB::table('qrcodes')->where('id_agenda', $id)->first();
    	$visitante = Visita::find($qrcode->id_visitante);
    	return view('admin.qrcode.index', compact('qrcode', 'visitante'));
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
