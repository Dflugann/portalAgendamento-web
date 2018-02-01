@extends('layout.system')

@section('titulo','Portal Agendamento')

@section('corpo')
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Portal Agendamento</h1>
        <div class="row center">
          <h5 class="header col s12 light">A agilidade e a possibilidade de agendar a entrada dos vizitantes e acessar informações em tempo real</h5>
        </div>
        <div class="row center">
          <a href="{{route('site.login')}}" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Login</a>
        </div>
        <br><br>

@endsection
