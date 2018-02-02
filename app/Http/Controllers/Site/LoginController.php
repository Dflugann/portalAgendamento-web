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

    $email = $dados['email'];
    $password = $dados['senha'];

    if (Auth::attempt(['email' => $email, 'password' => $password])) {
             return redirect()->route('site.home');
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
