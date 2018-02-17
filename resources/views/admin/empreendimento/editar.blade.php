@extends('layout.system')

@section('titulo', 'Editar Empreendimento')

@section('corpo')
  <div class="container">
    <h3 class="center">Editando Empreendimento</h3>
    <div class="row">
   <form class="col s12 m12 l12" method="POST" action="{{route('admin.empreendimento.atualizar',$registro->id_empreendimento)}}" enctype="multipart/form-data">
     {{csrf_field()}}
     <input type="hidden" name="_method" value="put">
     @include('admin.empreendimento._form')
      <div class="center">
        <button class="btn green pulse">Atualizar</button>
      </div>
   </form>
 </div>
@endsection
