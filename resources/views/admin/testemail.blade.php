@extends('layout.system')

@section('titulo', 'E-mail')

@section('corpo')

<div class="container">
  <h3>Formulário</h3>
  <div class="row">
    <form action="{{route('testemail.enviar')}}" method="post">
      {{csrf_field()}}
      <div class="row">
        <div class="input-field col s12 m4 l4">
          <input type="text" name="nome" class="input-field">
          <label>Nome</label>
        </div>
        <div class="input-field col s12 m4 l4">
          <input type="email" name="email" class="validate">
          <label>Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m8 l8">
          <textarea id="mensagem" name="mensagem" class="materialize-textarea"></textarea>
          <label for="textarea1">Mensagem</label>
        </div>  
      </div>
      <input type="submit" value="Enviar">

    </form>
  </div>
</div>

@endsection