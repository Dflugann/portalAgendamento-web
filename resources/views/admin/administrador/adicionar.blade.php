@extends('layout.system')

@section('titulo', 'Adicionar Administrador')

@section('corpo')
<div class="container">
  <h3 class="center">Adicionar Administrador</h3>
    <form action="" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      @include('admin.administrador._form')

    <div class="center">
      <button class="btn green">Enviar</button>
    </div>
    </form>
</div>


@endsection
