@extends('layout.system')

@section('titulo', 'Empreendimento / imóvel')

@section('corpo')

<div class="container">
  <h3 class="center">Empreendimento / imóvel</h3>
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
            @foreach($imoveis as $imovel)
          <tr>
            <td>{{$imovel->id_imovel}}</td>
            
            @if(($enderecos->bloco) == 'null')
            <td style="color: red;">{{$enderecos->apto}}</td>
            @else
            <td>{{$enderecos->bloco}}</td>
            @endif

            @if(($enderecos->andar) == 'null')
            <td style="color: red;">{{$enderecos->apto}}</td>
            @else
            <td>{{$enderecos->andar}}</td>
            @endif
            
            @if(($enderecos->apto) == 'null')
            <td style="color: red;">{{$enderecos->apto}}</td>
            @else
            <td>{{$enderecos->apto}}</td>
            @endif

            @if(($enderecos->quadra) == 'null')
            <td style="color: red;">{{$enderecos->apto}}</td>
            @else
            <td>{{$enderecos->quadra}}</td>
            @endif

            @if(($enderecos->conjunto) == 'null')
            <td style="color: red;">{{$enderecos->apto}}</td>
            @else
            <td>{{$enderecos->conjunto}}</td>
            @endif 

            <td>{{$imovel->vaga}}</td>
            <td>{{$imovel->descricao}}</td>
            <td>
              @if(isset($imovel->status) && ($imovel->status) == 'sim')
                <small><strong style='color: green'>ATIVO</strong></small>
                @else
                <small><strong style='color: red'>DESATIVADO</strong></small>
              @endif
            </td>
            <td>
              <a href="{{route('imovel.edit', $imovel->id_imovel)}}" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar">
                <i class="material-icons" style="font-size:1rem">create</i></a>

              <a href="{{route('imovel.show', $imovel->id_imovel)}}" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Detalhes">
                <i class="large material-icons" style="font-size:1rem">view_agenda</i></a>

              <a href="{{route('imovel.deletar', $imovel->id_imovel)}}"class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Deletar">
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
@endsection
