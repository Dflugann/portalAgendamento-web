@extends('layout.system')

@section('titulo', 'Editar apartamento')

@section('corpo')
<div class="container">
  <h3 class="center">Editar Apartamento</H3>
  <form class="col s12 m12 l12" method="POST"  action="{{route('admin.apartamento.atualizar', $registros_apart->id_apart)}}" >
    {{csrf_field()}}
    <input type="hidden" name="_method" value="put">
    @include('admin.apartamento._form')

    <div class="center">
      <button class="btn blue">Atualizar</button>
    </div>
  </form>
</div>
@endsection
