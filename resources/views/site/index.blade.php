@extends('layout.system')

@section('titulo','Portal Agendamento')

@section('corpo')

    @if(Auth::guest())
      <div class="section no-pad-bot">
        <div class="container">
          <h1 class="header center teal-text text-lighten-2" style="color:#99E271 !important">Portal Agendamento</h1>
            <div class="row center">
              <h5 class="header col s12 light">A agilidade e a possibilidade de agendar a entrada dos vizitantes e acessar informações em tempo real</h5>
            </div>
            <div class="row center">
              <a href="{{route('site.login')}}" id="download-button" class="btn-large waves-effect waves-light teal lighten-1 ">Faça o Login</a>
            </div>
            @else
          <div class="parallax-container">
            <div class="parallax"><img src="{{asset('img/parallax1.jpg')}}"></div>
          </div>
          <div class="section white">
            <div class="row container">
              <div class="text-black">
                 <smail><strong>Bem Vindo!! </strong>{{Auth::user()->name}}</smail>
               </div><hr>
               <h1 class="header center teal-text text-lighten-2" style="color:#99E271 !important">Portal Agendamento</h1>
               <div class="row center">
                 <h5 class="header col s12 light">A agilidade e a possibilidade de agendar a entrada dos vizitantes e acessar informações em tempo real</h5>
               </div>
            </div>
          </div>
          <div class="parallax-container">
            <div class="col s12">
                <div class="parallax"><img src="{{asset('img/parallax2.jpg')}}"></div>
            </div>

          </div>
    @endif
        </div>
      </div>
@endsection

    <!-- <div class="section no-pad-bot">
      <div class="container">
        @if(Auth::guest())
        @else
        <div class="text-black">
           <smail><strong>Bem Vindo!! </strong>{{Auth::user()->name}}</smail>
         </div><hr>
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

        @endif
      </div>
    </div> -->
