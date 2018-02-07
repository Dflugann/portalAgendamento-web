@extends('layout.system')

@section('titulo','Portal Agendamento')

@section('corpo')
  <div class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        @if(Auth::guest())
        @else
        <div class="card-panel text-black">
           <smail><strong>Bem Vindo!! </strong>{{Auth::user()->name}}</smail>
         </div>
        @endif
        <h1 class="header center teal-text text-lighten-2" style="color:#99E271 !important">Portal Agendamento</h1>
        <div class="row center">
          <h5 class="header col s12 light">A agilidade e a possibilidade de agendar a entrada dos vizitantes e acessar informações em tempo real</h5>
        </div>

        @if(Auth::guest())
        <div class="row center">
          <a href="{{route('site.login')}}" id="download-button" class="btn-large waves-effect waves-light teal lighten-1 pulse">Faça o Login</a>
        </div>
        @else
        <div class="row center">
            <div class="col s12 m4 l4 push-l1">
              <a href="{{route('admin.administrador.adicionar')}}" class="btn orange darken-4 tooltipped" data-position="bottom" data-delay="100" data-tooltip="Diretor ou Sindico"><i class="material-icons">person_add</i> Administrador</a>
            </div>
            <div class="col s12 m4 l4">
              <a href="{{route('admin.supervisor.adicionar')}}" class="btn  light-blue darken-4 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Condomino Administrador"><i class="material-icons">person_add</i> Supervisor</a>
            </div>
            <div class="col s12 m4 l4 pull-l1">
              <a href="{{route('admin.condomino.adicionar')}}" class="btn teal green darken-4 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Condomino"><i class="material-icons">person_add</i> operador</a>
            </div>
        </div><br>
        <div class="row center">
            <!-- <div class="col s12 m4 l4">
              <a href="{{route('admin.administrador.adicionar')}}" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Aqui você cadastra apartamento"><i class="material-icons">person_add</i> Apartamento</a>
            </div>
            <div class="col s12 m4 l4">
              <a href="{{route('admin.condomino.adicionar')}}" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Aqui você cadastra novo morador"><i class="material-icons">person_add</i> Condomino</a>
            </div> -->
            <div class="col s12 m4 l4 push-l4">
              <a href="{{route('admin.visitante.adicionar')}}" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Visitante e Agenda"><i class="material-icons">person_add</i> Visitante</a>
            </div>
        </div>
        @endif
        <div class="carousel">
    <a class="carousel-item" href="#one!"><img src="{{asset('img/background1.jpg')}}"></a>
    <a class="carousel-item" href="#two!"><img src="{{asset('img/background1.jpg')}}"></a>
    <a class="carousel-item" href="#three!"><img src="{{asset('img/background1.jpg')}}"></a>
    <a class="carousel-item" href="#four!"><img src="{{asset('img/background1.jpg')}}"></a>
    <a class="carousel-item" href="#five!"><img src="{{asset('img/background1.jpg')}}"></a>
        </div>
      </div>
    </div>
  </div>

@endsection
