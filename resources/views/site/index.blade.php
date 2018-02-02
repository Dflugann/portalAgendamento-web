@extends('layout.system')

@section('titulo','Portal Agendamento')

@section('corpo')
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        @if(Auth::guest())
        @else
        <div class = "card-panel">
           <h4>Bem Vindo!!</h4> <smail>{{Auth::user()->name}}</smail>
      </div>
        @endif
        <h1 class="header center teal-text text-lighten-2">Portal Agendamento</h1>
        <div class="row center">
          <h5 class="header col s12 light">A agilidade e a possibilidade de agendar a entrada dos vizitantes e acessar informações em tempo real</h5>
        </div>
        @if(Auth::guest())
        <div class="row center">
          <a href="{{route('site.login')}}" id="download-button" class="btn-large waves-effect waves-light teal lighten-1 pulse">Faça o Login</a>
        </div>
        @else

        <div class="row">
            <div class="col s12 m4">
              <a href="{{route('admin.aparatamento.adicionar')}}" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Aqui você cadastra apartamento">Cadastro Apartamento</a>
            </div>
            <div class="col s12 m4">
              <a href="{{route('admin.condomino.adicionar')}}" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Aqui você cadastra novo morador">Cadastro Condomino</a>
            </div>
            <div class="col s12 m4">
              <a href="{{route('admin.visitante.adicionar')}}" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Aqui você cadastra visitante e agenda entrada">Cadastro Visitante</a>
            </div>
        </div>
        @endif


@endsection
