@extends('layout.system')

@section('titulo', 'Empreendimento')
@include('layout._includes.modalEmpreendimento')

@section('corpo')
<div class="container">
  <h3 class="center">Empreendimentos</h3>
  @include('admin._caminho')
  <div class="row">
    <div class="col s12 m12 l12">
      @foreach($registros as $registro)
      <div class="card col s12 m4 l4">
        <div class="card-image waves-effect waves-block waves-light">
          <div class="center">
            <img height="270"  style="width: 270px; height: 270px;" class="activator responsive-img" src="../{{$registro->imagem}}">  
          </div>
          
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4 center">{{$registro->titulo}}<i class="material-icons right">more_vert</i></span>

          <div class="center-align">

            <?php if ($registro->tipo == 'Residencial'): ?>
              <p><strong>Quadra:</strong> {{$registro->quadra}}
              <strong>Lote:</strong> {{$registro->lote}}</p>
            <?php else: ?>
                <p><strong>Conjunto:</strong> {{$registro->conjunto}}</p>
            <?php endif ?>

            @if(isset($registro->status) && ($registro->status) == 'sim')
              <small><strong style='color: green'>ATIVO</strong></small>
              @else
              <small><strong style='color: red'>DESATIVADO</strong></small>
            @endif

          </div>
          <!-- <p><a href="#"><i class="material-icons"></i> This is a link</a></p> -->
          <div class="center">
          <a href="{{route('admin.empreendimento.editar',$registro->id)}}" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar">
            <i class="material-icons" style="font-size:2rem">create</i></a>
          <a href="{{route('admin.empreendimento.filterImovel', $registro->id)}}"class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Imóveis">
            <i class="large material-icons" style="font-size:2rem">view_agenda</i></a>
          <a href="{{route('admin.empreendimento.deletar', $registro->id)}}"class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Deletar">
            <i class="large material-icons" style="font-size:2rem">delete</i></a>
          </div>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">{{$registro->tipo}}<i class="material-icons right">close</i></span>
          <p>{{$registro->descricao}}</p>
        </div>
      </div>
      @endforeach
    </div>
    
    <a id="scale-demo" href="#empreendimento" class="btn-floating btn-large scale-transition tooltipped waves-effect modal-trigger" data-position="bottom" data-delay="50" data-tooltip="Novo Conjunto">
      <i class="material-icons">add</i>
    </a>
  </div>

</div>


@endsection
