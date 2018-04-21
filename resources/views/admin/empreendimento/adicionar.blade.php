@extends('layout.system')
@section('texto_modal', 'teste')
@section('titulo', 'Empreendimento')

@section('corpo')
  <div class="container">
    <h3 class="center">Adicionar Empreendimento</h3>
    <div class="row">
   <form class="col s12 m12 l12" method="POST" action="{{route('admin.empreendimento.salvar')}}" enctype="multipart/form-data">
     {{csrf_field()}}

     @include('admin.empreendimento._form')

      <div class="center">
        <button class="btn green ">Salvar</button>
      </div>
   </form>
 </div>
@endsection
