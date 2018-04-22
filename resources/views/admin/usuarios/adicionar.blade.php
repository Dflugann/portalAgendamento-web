@extends('layout.system')

@section('titulo', 'Adicionar Usuario')

@section('corpo')
  <div class="container">
    <h3 class="center">Adicionar Usuários</h3>

      <form action="{{route('usuario.store')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}

        @include('admin.usuarios._form')

      <div class="center">
        <button class="btn green">Enviar</button>
      </div>
      </form>
  </div>


@endsection

