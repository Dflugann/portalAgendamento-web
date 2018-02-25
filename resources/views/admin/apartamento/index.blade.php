@extends('layout.system')

@section('titulo', 'Apartamentos')

@section('corpo')

<div class="container">
  <h3 class="center">Apartamentos</h3>
  <div class="row">
    <div class="col12 m12 l12">

            <table class="bordered centered">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Empreendimento</th>
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
                  @foreach($registros_apart as $registro)
                <tr>
                  <td>{{$registro->id_apart}}</td>
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
                    <a href="{{route('admin.apartamento.editar', $registro->id_apart)}}" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar">
                      <i class="material-icons" style="font-size:2rem">create</i></a>
                    <a href="{{route('admin.visitante')}}"class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Visitantes">
                      <i class="large material-icons" style="font-size:2rem">view_agenda</i></a>
                    <a href="{{route('admin.apartamento.deletar', $registro->id_apart)}}"class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Deletar">
                      <i class="large material-icons" style="font-size:2rem">delete_forever</i></a>
                  </td>
                </tr>
                  @endforeach
              </tbody>

            </table>
              <!-- Scaled in -->
              <a id="scale-demo" href="{{route('admin.apartamento.adicionar')}}" class="btn-floating btn-large scale-transition tooltipped" data-position="bottom" data-delay="50" data-tooltip="Novo Apartamento">
                <i class="material-icons">add</i>
              </a>
          </div>

      </div>
    </div>
  </div>
</div>

@endsection
