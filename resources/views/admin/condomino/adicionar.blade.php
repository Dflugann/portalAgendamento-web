@extends('layout.system')

@section('titulo', 'Adicionar Condomino')

@section('corpo')
<div class="container">
  <h3 class="center">Adicionar Condomino</h3>
    <div class="row">
      <form class="col s12" action="{{route('admin.condomino.salvar')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        @include('admin.condomino._form')

        <button class="btn green">Enviar</button>
      </form>
    </div>

</div>
@endsection
