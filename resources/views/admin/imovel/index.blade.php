@extends('layout.system')

@section('titulo', 'Imóveis')

@section('corpo')

<div class="container">
  <h3 class="center">Imóveis</h3>
  @include('admin._caminho')
  <div class="row">
    <div class="col12 m12 l12">

            <table class="bordered centered">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Emprendimento</th>
                  <th>Andar</th>
                  <th>Numero</th>
                  <th>Vaga</th>
                  <th>Dormitorio</th>
                  <th>Suite</th>
                  <th>Banheiro</th>
                  <th>Area</th>
                  <th>status</th>
                  <th>Ação</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($registros as $registro)
                <tr>
                  <td>{{$registro->id}}</td>
                  <td>{{$registro->nome_empr}}</td>
                  <td>{{$registro->andar}}</td>
                  <td>{{$registro->num}}</td>
                  <td>{{$registro->vaga}}</td>
                  <td>{{$registro->dorm}}</td>
                  <td>{{$registro->suite}}</td>
                  <td>{{$registro->banh}}</td>
                  <td>{{$registro->area}}</td>
                  <td>
                    @if(isset($registro->status) && ($registro->status) == 'sim')
                      <small><strong style='color: green'>ATIVO</strong></small>
                      @else
                      <small><strong style='color: red'>DESATIVADO</strong></small>
                    @endif
                  </td>
                  <td>
                    <a href="{{route('imovel.edit', $registro->id)}}" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar">
                      <i class="material-icons" style="font-size:2rem">create</i></a>
                    <a href="#" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Visitantes">
                      <i class="large material-icons" style="font-size:2rem">view_agenda</i></a>
                    <a href="{{route('imovel.deletar', $registro->id)}}"class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Deletar">
                      <i class="large material-icons" style="font-size:2rem">delete_forever</i></a>
                  </td>
                </tr>
                  @endforeach
              </tbody>

            </table>
              <!-- Scaled in -->
              <a id="scale-demo" href="{{route('imovel.create')}}" class="btn-floating btn-large scale-transition tooltipped" data-position="bottom" data-delay="50" data-tooltip="Novo Apartamento">
                <i class="material-icons">add</i>
              </a>
          </div>

      </div>
    </div>
  </div>
</div>

@endsection
