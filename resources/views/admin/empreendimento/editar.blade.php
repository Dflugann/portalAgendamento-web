@extends('layout.system')

@section('titulo', 'Editar Empreendimento')

@section('corpo')
  <div class="container">
    <h3 class="center">Editando Empreendimento</h3>
    @include('admin._caminho')
    <div class="row">
   <form class="col s12 m12 l12" method="POST" action="{{route('admin.empreendimento.atualizar',$registro->id)}}" enctype="multipart/form-data">
     {{csrf_field()}}
     <input type="hidden" name="_method" value="put">

     <?php $type = $registro['tipo']; ?>

     @if($type === 'Comercial')
     @include('admin.empreendimento._formComercial')
     @else
     @include('admin.empreendimento._formResidencial')
     @endif

      <div class="center">
        <button class="btn green ">Atualizar</button>
      </div>
   </form>
 </div>
@endsection
