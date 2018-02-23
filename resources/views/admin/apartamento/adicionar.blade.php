@extends('layout.system')

@section('titulo', 'Adicionar Apartamento')

@section('corpo')
<div class="container">
  <h3 class="center">Adicionar Apartamento</h3>
  <form class="col s12 m12 l12" action="{{route('admin.apartamento.salvar')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    @include('admin.apartamento._form')

    <div class="center">
      <button class="btn green ">Salvar</button>
    </div>
  </form>
</div>
@endsection
