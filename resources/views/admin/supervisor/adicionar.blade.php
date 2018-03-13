@extends('layout.system')

@section('titulo', 'Adicionar Supervisor')

@section('corpo')
<div class="container">
  <h3 class="center">Adicionar Supervisor</h3>
  <form class="col s12 m12 l12" action="" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    @include('admin.supervisor._form')

    <div class="center">
      <button class="btn green">Enviar</button>
    </div>

  </form>
</div>
@endsection
