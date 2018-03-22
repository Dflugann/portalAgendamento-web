<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
  public function index()
  {
    return view('login.index');
  }
  public function entrar(Request $req)
  {
    $dados = $req->all();    

    $user = $dados['user'];
    $password = $dados['senha'];

    if (Auth::attempt(['user' => $user, 'password' => $password])) {
             return redirect()->route('admin.home');
        }else {
          return redirect()->route('site.login');
        }
  }

  public function sair()
  {
    Auth::logout();
    return redirect()->route('site.login');
  }
}
