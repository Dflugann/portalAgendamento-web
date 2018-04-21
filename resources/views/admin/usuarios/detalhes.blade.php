@extends('layout.system')

@section('titulo', 'Detalhes Usuarioo')

@section('corpo')
<div class="container">
   <div class="col s12 m7">
    <h2 class="header">{{$registro->name}}</h2>
    <div class="card horizontal">
      <div class="card-image">
        <img class="responsive-img" src="../../{{$registro->imagem}}" style="width: 350px;">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p><i class="material-icons" style="color: #4caf50">local_phone</i> {{$registro->phone}}</p>
          <p><i class="material-icons" style="color: #4caf50">contact_phone</i> Ramal</p>
          <p><i class="material-icons" style="color: #4caf50">email</i> {{$registro->email}}</p>
          <p><i class="material-icons" style="color: #4caf50">domain</i> Empreendimento</p>
          <p><i class="material-icons" style="color: #4caf50">home</i> Imovel</p>
          
        </div>
        <div class="card-action">
          <a href="{{route('agenda.index')}}" class="btn blue waves-effect waves-light">Voltar</a>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection