
@extends('layout.system')

@section('titulo', 'Lista Visitante')

@section('corpo')
<div class="container">
  <h3 class="center">Lista de Visitantes</h3>
  @include('admin._caminho')
  <div class="row">
  	<div class="col12 m12 l12">

            <table class="bordered centered">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nome</th>
                  <th>Sobrenome</th>
                  <th>RG</th>
                  <th>CPF</th>
                  <th>E-mail</th>
                  <th>Fone</th>
                  <th>Imagem</th>
                  <th>Ação</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($registros as $registro)
                <tr>
                  <td>{{$registro->id}}</td>
                  <td>{{$registro->nome}}</td>
                  <td>{{$registro->sobrenome}}</td>
                  <td>{{$registro->rg}}</td>
                  <td>{{$registro->cpf}}</td>
                  <td>{{$registro->email}}</td>
                  <td>{{$registro->phone}}</td>
                  <td>
                  	<img width="70" src="../{{$registro->imagem}}" class="responsive-img">
                  </td>
                  <td>
                    <a href="{{route('visita.edit', $registro->id)}}" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar">
                      <i class="material-icons" style="font-size:2rem">create</i></a>
                    <a href="{{route('visita.show', $registro->id)}}" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Agendar">
                      <i class="large material-icons" style="font-size:2rem">view_agenda</i></a>
                    <a href="{{route('visita.deletar', $registro->id)}}"class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Deletar">
                      <i class="large material-icons" style="font-size:2rem">delete_forever</i></a>
                  </td>
                </tr>
                  @endforeach
              </tbody>

            </table>
              <!-- Scaled in -->
              <a id="scale-demo" href="{{route('visita.create')}}" class="btn-floating btn-large scale-transition tooltipped" data-position="bottom" data-delay="50" data-tooltip="Novo Apartamento">
                <i class="material-icons">add</i>
              </a>
          </div>
  </div>
</div>
@endsection
