<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Mail\Correio;

class TesteMailController extends Controller
{
    public function index()
    {
    	return view('admin.testemail');
    }

    public function enviar($qrcode, $visitante, $agenda)
    {

        $imagem = $qrcode['imagem'];
        $nome_visitante = $visitante['nome'];
        $email = $visitante['email'];
        $nome_auth = $agenda['nome_auth'];
        $date = $agenda['date'];
        $starttime = $agenda['starttime'];
        $endtime = $agenda['endtime'];

    	$dados = array('imagem' => $imagem , 'nome_visitante' => $nome_visitante , 'nome_auth' => $nome_auth, 'date' => $date, 'starttime' => $starttime, 'endtime' => $endtime, 'email' => $email );
    	Mail::to($dados['email'])->send(new Correio($dados));
    	return true;

    	
    }
}
