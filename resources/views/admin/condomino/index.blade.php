@extends('layout.system')

@section('titulo', 'Lista Condomino')

@section('corpo')
<div class="container">
  <h3 class="center">Lista de Condomino</h3>
    <div class="row">
      <table class="bordered centered">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Conj/Torre</th>
            <th>Apartamento</th>
            <th>imagem</th>
            <th>Ativo</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
            @foreach($retorna as $registro)
          <tr>
            <td>{{$registro->id_condomino}}</td>
            <td>{{$registro->nome}}</td>
            <td>{{$registro->sobrenome}}</td>
            <td>{{$registro->conj}}</td>
            <td>{{$registro->numapart}}</td>
            <td>
              <img width="150" height="150" src="{{asset($registro->imagem)}}" alt="$registro->nome">
            </td>
            <td style="{{isset($registro->status) && $registro->status == 'sim' ? 'color:#039be5' : 'color:red'}}">{{$registro->status}}</td>
            <td>
              <a href="{{route('admin.condomino.editar',$registro->id_condomino)}}" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar">
                <i class="material-icons" style="font-size:2rem">create</i></a>
              <a href="{{route('admin.agenda',$registro->id_condomino)}}"class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Agendar">
                <i class="large material-icons" style="font-size:2rem">view_agenda</i></a>
              <a href="{{route('admin.condomino.deletar',$registro->id_condomino)}}"class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Deletar">
                <i class="large material-icons" style="font-size:2rem">delete_forever</i></a>
            </td>
          </tr>
            @endforeach
        </tbody>

      </table>
        <!-- Scaled in -->
        <a id="scale-demo" href="{{route('admin.condomino.adicionar')}}" class="btn-floating btn-large scale-transition tooltipped" data-position="bottom" data-delay="50" data-tooltip="Novo Condomino">
          <i class="material-icons">add</i>
        </a>
    </div>

</div>
@endsection
