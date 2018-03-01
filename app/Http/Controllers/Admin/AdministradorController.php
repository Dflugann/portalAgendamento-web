<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Administrador;

class AdministradorController extends Controller
{
    public function index()
    {
        $registros = Administrador::all();
        return view('admin.administrador.index', compact('registros'));
    }

    public function adicionar()
    {
      return view('admin.administrador.adicionar');
    }

    public function salvar(Request $req)
    {
        try{
            $dados = $req->all();
            if (isset($dados['status'])){
                $dados['status'] = 'sim';
            }else{
                $dados['status'] = 'nao';
            }

            if ($req->hasFile('imagem')){
                $imagem = $req->file('imagem');
                $num = rand(1111 , 9999);
                $dir = "img/adminitrador";
                $ex = $imagem->guessClientExtension();
                $nomeImagem = 'imagem_' . $num . '.' . $ex;
                $imagem->move($dir, $nomeImagem);
                $dados['imagem'] = $dir . '/' . $nomeImagem;
            }
            Administrador::create($dados);
            return redirect()->route('admin.administrador');

        }catch (\Exception $e){
            echo "Error:" . $e->getMessage() . '-' . $e->getFile();
        }

    }

    public function editar($id)
    {
        $registros = Administrador::find($id);
        return view('admin.administrador.editar', compact('registros'));
    }


}
