@extends('layout.system')

@section('titulo', 'Editar Condomino')

@section('corpo')
<div class="container">
  <h3 class="center">Editando Condomino</h3>
    <div class="row">
      <form class="col s12" action="{{route('admin.condomino.atualizar',$registro->id_condomino)}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="put">
        @include('admin.condomino._form')

        <button class="btn deep-orange">Atualizar</button>
      </form>
    </div>

</div>
@endsection
