@extends('layout.system')

@section('titulo', 'Adicionar Imóveis')

@section('corpo')
<div class="container">
  <h3 class="center">Adicionar Imóveis</h3>

  <form class="col s12 m12 l12" action="{{route('imovel.store')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    @include('admin.imovel._form')
    <div class="center">
      <button class="btn green ">Salvar</button>
    </div>
  </form>
</div>
@endsection
