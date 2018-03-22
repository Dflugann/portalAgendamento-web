@extends('layout.system')

@section('titulo', 'Editar Usuario')

@section('corpo')

<div class="container">
  <h3 class="center">Editar Usuários</h3>
    <form action="{{route('usuario.update',$registro->id)}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="put">
      @include('admin.usuarios._form')

    <div class="center">
      <button class="btn blue">Atualizar</button>
    </div>
    </form>
</div>


@endsection