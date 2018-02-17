@extends('layout.system')

@section('titulo','Portal Agendamento')

@section('corpo')
<div class="container">
  <div class="section ">
    <div class="row">
      <h1>Portal Agendamento</h1><br />
      <h4 class="center light">Cadastro</h4>
      <hr>
    </div>
    <div class="row">
        <div class="col s12 m4">
          <a href="{{route('admin.aparatamento.adicionar')}}" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Aqui você cadastra apartamento">Cadastro Apartamento</a>
        </div>
        <div class="col s12 m4">
          <a href="{{route('admin.operador.adicionar')}}" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Aqui você cadastra novo morador">Cadastro Operador</a>
        </div>
        <div class="col s12 m4">
          <a href="{{route('admin.visitante.adicionar')}}" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Aqui você cadastra visitante e agenda entrada">Cadastro Visitante</a>
        </div>
    </div>

    </div>
  </div>
</div>


@endsection
