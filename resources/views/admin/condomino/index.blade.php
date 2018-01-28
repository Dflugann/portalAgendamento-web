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
            <th>imagem</th>
            <th>Conj/Torre</th>
            <th>Apartamento</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
            @foreach($retorna as $registro)
          <tr>
            <td>{{$registro->id_condomino}}</td>
            <td>{{$registro->nome}}</td>
            <td>{{$registro->sobrenome}}</td>
            <td>{{$registro->imagem}}</td>
            <td>{{$registro->conj}}</td>
            <td>{{$registro->numapart}}</td>
            <td>
              <a class="btn" href="{{route('admin.condomino.editar','$registro->id_condomino')}}">Editar</a>
              <a class="btn red" href="{{route('admin.condomino.deletar','$registro->id_condomino')}}">Deletar</a>
            </td>
          </tr>
            @endforeach
        </tbody>
      </table>
        <!-- Scaled in -->
        <a id="scale-demo" href="{{route('admin.condomino.adicionar')}}" class="btn-floating btn-large scale-transition">
          <i class="material-icons">add</i>
        </a>
    </div>

</div>
@endsection
