@extends('layout.system')

@section('titulo', 'Conjuntos / Torres')

@section('corpo')
  <div class="container">
    <h3 class="center">Adicionar Conjunto / Torre</h3>
    <div class="row">
   <form class="col s12 m12 l12" method="POST" action="{{route('admin.conjunto.salvar')}}" enctype="multipart/form-data">
     {{csrf_field()}}
     @include('admin.conjunto._form')
      <div class="center">
        <button class="btn green pulse">Salvar</button>
      </div>
   </form>
 </div>
@endsection
