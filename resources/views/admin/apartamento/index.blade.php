@extends('layout.system')

@section('titulo', 'Apartamentos')

@section('corpo')

<div class="container">
  <h3 class="center">Apartamentos</h3>
  <div class="row">
    <div class="col12 m12 l12">
      @foreach($registros as $registro)
      <div class="col s6 m6">
        <!-- <h2 class="header">Horizontal Card</h2> -->
        <div class="card horizontal">

          <div class="card-image">
            <img src="{{asset($registro->imagem)}}">
          </div>
          <div class="card-stacked">
            <div class="card-content">
            <strong>Conjunto:</strong> <smail>{{$registro->conjunto}}</smail>
            <p><strong>Andar:</strong> <small>{{$registro->andar}}</small><strong> - </strong>
            <strong>Numero:</strong> <smail>{{$registro->numero}}</smail></p>
            <p><strong>Vaga:</strong> <smail>{{$registro->vaga}}</smail><strong> - </strong>
            <strong>Dormitório:</strong> <smail>{{$registro->dorm}}</smail></p>
            <p><strong>Suite:</strong> <smail>{{$registro->suite}}</smail><strong> - </strong>
            <strong>Banheiro:</strong> <smail>{{$registro->banheiro}}</smail></p>
            <p><strong>Area:</strong> <smail>{{$registro->area}}</smail></p>
            </div>
            <div class="card-content">
            <a href="" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar">
              <i class="material-icons" style="font-size:2rem">create</i></a>
            <a href=""class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Apartamentos">
              <i class="large material-icons" style="font-size:2rem">view_agenda</i></a>
            <a href=""class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Deletar">
              <i class="large material-icons" style="font-size:2rem">delete_forever</i></a>
            </div>
          </div>

        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>

@endsection
