@extends('layout.system')

@section('titulo', 'Editar Conjuntos / Torres')

@section('corpo')
  <div class="container">
    <h3 class="center">Editando Conjunto / Torre</h3>
    <div class="row">
   <form class="col s12 m12 l12" method="POST" action="{{route('admin.conjunto.atualizar',$registro->id_conjunto)}}" enctype="multipart/form-data">
     {{csrf_field()}}
     <input type="hidden" name="_method" value="put">
     @include('admin.conjunto._form')
      <div class="center">
        <button class="btn green pulse">Atualizar</button>
      </div>
   </form>
 </div>
@endsection
