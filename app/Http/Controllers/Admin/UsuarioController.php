<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
        $caminhos = [
            ['url'=>'/admin','titulo'=>'Admin'],
            ['url'=>'','titulo'=>'Usuários'],
        ];
        return view('admin.usuarios.index',compact('usuarios','caminhos'));
    }
    

    public function home()
    {
        return view('admin.home');
    }

    public function permissao()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //echo "teste create";exit();
      return view('admin.usuarios.adicionar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        try {

            $dados = $req->all();
            if (isset($dados['status'])){
                $dados['status'] = 'sim';
            }else{
                $dados['status'] = 'nao';
            }

            if ($req->hasFile('imagem')){
                $imagem = $req->file('imagem');
                $num = rand(1111 , 9999);
                $dir = "img/usuarios";
                $ex = $imagem->guessClientExtension();
                $nomeImagem = 'imagem_' . $num . '.' . $ex;
                $imagem->move($dir, $nomeImagem);
                $dados['imagem'] = $dir . '/' . $nomeImagem;
            }
            $dados['password'] = bcrypt($dados['password']);
            user::create($dados);
            return redirect()->route('usuarios.index');
            
        } catch (Exception $e) {
            echo "Erro ao salvar USUÁRIO " . $e->getMensage() . '-' . $e->getFile();
        }
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
        $registro = User::find($id);
        return view('admin.usuarios.editar', compact('registro'));
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
        try {
            $dados = $req->all();
            if (isset($dados['status'])){
                $dados['status'] = 'sim';
            }else{
                $dados['status'] = 'nao';
            }

            if ($req->hasFile('imagem')){
                $imagem = $req->file('imagem');
                $num = rand(1111 , 9999);
                $dir = "img/usuarios";
                $ex = $imagem->guessClientExtension();
                $nomeImagem = 'imagem_' . $num . '.' . $ex;
                $imagem->move($dir, $nomeImagem);
                $dados['imagem'] = $dir . '/' . $nomeImagem;
            }
            if (isset($dados['password'])) {
                $dados['password'] = bcrypt($dados['password']);
            }
            

            user::find($id)->update($dados);
            return redirect()->route('usuario.index');
            
        } catch (Exception $e) {
            echo "Erro ao salvar USUÁRIO " . $e->getMensage() . '-' . $e->getFile();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletar($id)
    {
        User::find($id)->delete();
        return redirect()->route('usuario.index');
    }
}
