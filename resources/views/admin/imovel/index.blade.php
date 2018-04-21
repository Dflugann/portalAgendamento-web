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
                  <th>Bloco</th>
                  <th>Andar</th>
                  <th>Apto</th>
                  <th>Quadra</th>
                  <th>Num/Lote</th>
                  <th>Conjunto</th>
                  <th>Vaga</th>
                  <th>Descricao</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($registros as $registro)
                <tr>
                  @if(($registro->id_imovel) == 'null')
                  <td style="color: red;">{{$registro->id_imovel}}</td>
                  @else
                  <td>{{$registro->id_imovel}}</td>
                  @endif

                  @if(($registro->bloco) == 'null')
                  <td style="color: red;">{{$registro->bloco}}</td>
                  @else
                  <td>{{$registro->bloco}}</td>
                  @endif
                  
                  @if(($registro->andar) == 'null')
                  <td style="color: red;">{{$registro->andar}}</td>
                  @else
                  <td>{{$registro->andar}}</td>
                  @endif

                  @if(($registro->apto) == 'null')
                  <td style="color: red;">{{$registro->apto}}</td>
                  @else
                  <td>{{$registro->apto}}</td>
                  @endif                  

                  @if(($registro->quadra) == 'null')
                  <td style="color: red;">{{$registro->quadra}}</td>
                  @else
                  <td>{{$registro->quadra}}</td>
                  @endif

                  @if(($registro->numLote) == 'null')
                  <td style="color: red;">{{$registro->numLote}}</td>
                  @else
                  <td>{{$registro->numLote}}</td>
                  @endif

                  @if(($registro->conjunto) == 'null')
                  <td style="color: red;">{{$registro->conjunto}}</td>
                  @else
                  <td>{{$registro->conjunto}}</td>
                  @endif                  
                  
                  <td>{{$registro->vaga}}</td>
                  <td>{{$registro->descricao}}</td>
                  <td>
                    @if(isset($registro->status) && ($registro->status) == 'sim')
                      <small><strong style='color: green'>ATIVO</strong></small>
                      @else
                      <small><strong style='color: red'>DESATIVADO</strong></small>
                    @endif
                  </td>
                  <td>
                    <a href="{{route('imovel.edit', $registro->id_imovel)}}" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar">
                      <i class="material-icons" style="font-size:1rem">create</i></a>

                    <a href="{{route('imovel.show', $registro->id_imovel)}}" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Detalhes">
                      <i class="large material-icons" style="font-size:1rem">view_agenda</i></a>

                    <a href="{{route('imovel.deletar', $registro->id_imovel)}}"class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Deletar">
                      <i class="large material-icons" style="font-size:1rem">delete_forever</i></a>
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
