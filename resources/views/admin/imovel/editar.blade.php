@extends('layout.system')

@section('titulo', 'Editar Imóvel')

@section('corpo')
<div class="container">
  <h3 class="center">Editar Imóvel</H3>
  	@include('admin._caminho')
  <form class="col s12 m12 l12" method="POST"  action="{{route('imovel.update', $registros->id)}}" >
    {{csrf_field()}}
    <input type="hidden" name="_method" value="put">
    @include('admin.imovel._form')

    <div class="center">
      <button class="btn blue">Atualizar</button>
    </div>
  </form>
</div>
@endsection
