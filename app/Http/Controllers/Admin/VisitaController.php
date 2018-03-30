<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Visita;
use Auth;

class VisitaController extends Controller
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
            ['url'=> '', 'titulo'=> 'Visitante']
        ];
        $registros = Visita::all();
        return view('admin.visitante.index', compact('registros', 'caminhos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.visitante.adicionar');
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
        $dados['id_auth'] = Auth::user()->id;
        
    if ($req->hasFile('imagem')) {
        $imagem = $req->file('imagem');
        $num = rand(1111, 9999);
        $dir = "img/visita";
        $ex = $imagem->guessClientExtension();
        $nomeImagem = "imagem_" . $num . "." . $ex;
        $imagem->move($dir, $nomeImagem);
        $dados['imagem'] = $dir . "/" . $nomeImagem;
        
      }
      visita::create($dados);
      return redirect()->route('visita.index');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registro_visitante = Visita::find($id);
        return view('admin.agenda.adicionar', compact('registro_visitante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registro = Visita::find($id);
        return view('admin.visitante.editar', compact('registro'));
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
        $dados['id_auth'] = Auth::user()->id;
        
    if ($req->hasFile('imagem')) {
        $imagem = $req->file('imagem');
        $num = rand(1111, 9999);
        $dir = "img/visita";
        $ex = $imagem->guessClientExtension();
        $nomeImagem = "imagem_" . $num . "." . $ex;
        $imagem->move($dir, $nomeImagem);
        $dados['imagem'] = $dir . "/" . $nomeImagem;
        
      }
      visita::find($id)->update($dados);
      return redirect()->route('visita.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletar($id)
    {
        Visita::find($id)->delete();
        return redirect()->route('visita.index');
    }
}
