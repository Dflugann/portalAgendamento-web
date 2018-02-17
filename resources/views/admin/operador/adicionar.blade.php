@extends('layout.system')

@section('titulo', 'Adicionar Operador')

@section('corpo')
<div class="container">
  <h3 class="center">Adicionar Operador</h3>
    <div class="row">
      <form class="col s12" action="{{route('admin.operador.salvar')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        @include('admin.operador._form')

        <button class="btn green">Enviar</button>
      </form>
    </div>

</div>
@endsection
