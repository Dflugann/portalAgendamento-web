@extends('layout.system')

@section('titulo', "Login")

@section('corpo')

<div class="container">
  <h3 class="center">Login</h3>
  <div class="row">
    <form class="col s12" action="{{route('site.login.entrar')}}" method="post">
      {{csrf_field()}}
      <div class="input-field col s12 m6">
            <i class="material-icons prefix">person</i>
            <input placeholder="Usuário" type="text" name="user">
            <label >Usuário</label>
          </div>
          <div class="input-field col s12 m6">
            <i class="material-icons prefix">vpn_key</i>
            <input placeholder="Password" type="password" name="senha">
            <label>Password</label>
          </div>

          <div class="col s12">
          <p>
          <input type="checkbox" id="lembrarSenha" name="remember" {{ old('remember') ? 'checked' : ''}} />
          <label for="lembrarSenha">Lembrar senha?</label>  
          </p>
          
          <button class="btn green">Entrar</button>
          <a href=""  class="btn orange">Recuperar senha</a>
          
          </div>

    </form>

  </div>
</div>


@endsection
