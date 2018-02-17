@extends('layout.system')

@section('titulo', 'Lista de Operadores')

@section('corpo')
<div class="container">
  <h3 class="center">Lista de Operadores</h3>
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
            @foreach($registros as $registro)
          <tr>
            <td>{{$registro->id_operador}}</td>
            <td>{{$registro->nome}}</td>
            <td>{{$registro->sobrenome}}</td>
            <td>{{$registro->conj}}</td>
            <td>{{$registro->numapart}}</td>
            <td>
              <img width="60" height="60" src="{{asset($registro->imagem)}}" alt="$registro->nome">
            </td>
            <td style="{{isset($registro->status) && $registro->status == 'sim' ? 'color:#039be5' : 'color:red'}}">{{$registro->status}}</td>
            <td>
              <a href="{{route('admin.operador.editar',$registro->id_operador)}}" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar">
                <i class="material-icons" style="font-size:2rem">create</i></a>
              <a href="{{route('admin.visitante',$registro->id_operador)}}"class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Visitantes">
                <i class="large material-icons" style="font-size:2rem">view_agenda</i></a>
              <a href="{{route('admin.operador.deletar',$registro->id_operador)}}"class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Deletar">
                <i class="large material-icons" style="font-size:2rem">delete_forever</i></a>
            </td>
          </tr>
            @endforeach
        </tbody>

      </table>
        <!-- Scaled in -->
        <a id="scale-demo" href="{{route('admin.operador.adicionar')}}" class="btn-floating btn-large scale-transition tooltipped" data-position="bottom" data-delay="50" data-tooltip="Novo Operador">
          <i class="material-icons">add</i>
        </a>
    </div>

</div>
@endsection
