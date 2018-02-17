<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class UserController extends Controller
{
    public function index()
    {
      return view('login.index');
    }

    public function entrar(Request $req)
    {
      $dados = $req->all();
      if (Auth::attempt(['email'=>$dados['email'], 'password'=>$dados['senha']] )) {
        redirect()->route('admin.operador');
      }else {
        redirect()->route('login.home');
      }
    }

    public function sair()
    {
      Auth::logout();
	    return Redirect::route('site.home');
    }
}
