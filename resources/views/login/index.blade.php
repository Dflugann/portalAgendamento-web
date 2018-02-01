@extends('layout.system')

@section('titulo', "Login")

@section('corpo')

<div class="container">
  <h3 class="center">Login</h3>
  <div class="row">
    <form class="col s12" action="{{route('site.login.entrar')}}" method="post">
      {{csrf_field()}}

      <div class="input-field col s6">
            <i class="material-icons prefix">email</i>
            <input type="text" name="email">
            <label >E-mail</label>
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">vpn_key</i>
            <input type="password" name="senha">
            <label>Password</label>
          </div>

          <div class="center">
            <button class="btn green">Entrar</button>
          </div>
    </form>

  </div>
</div>


@endsection
