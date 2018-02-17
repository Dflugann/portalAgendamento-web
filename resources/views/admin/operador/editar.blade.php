@extends('layout.system')

@section('titulo', 'Editar operador')

@section('corpo')
<div class="container">
  <h3 class="center">Editando Operador</h3>
    <div class="row">
      <form class="col s12" action="{{route('admin.operador.atualizar',$registro->id_operador)}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="put">
        @include('admin.operador._form')

        <button class="btn deep-orange">Atualizar</button>
      </form>
    </div>

</div>
@endsection
