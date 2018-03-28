@extends('layout.system')

@section('titulo', 'Admin')

@section('corpo')
<div class="container">
    <div class="row center">
      <h2>Admin</h2>
    </div>

    <div class="row">
      
        <div class="col s12 m4 l4">
          <div class="card purple darken-2">
            <div class="card-content white-text">
              <span class="card-title">Usuários</span>
              <p>Usuários do sistema</p>
            </div>
            <div class="card-action">
              <a href="{{route('usuario.index')}}">Visualizar</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4 l4">
          <div class="card blue">
            <div class="card-content white-text">
              <span class="card-title">Empreendimento</span>
              <p>Lista de Empreendimento</p>
            </div>
            <div class="card-action">
              <a href="{{route('empreendimento.index')}}">Visualizar</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4 l4">
          <div class="card green">
            <div class="card-content white-text">
              <span class="card-title">Imovel</span>
              <p>Lista de imoveis</p>
            </div>
            <div class="card-action">
              <a href="{{route('imovel.index')}}">Visualizar</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4 l4">
          <div class="card orange darken-4">
            <div class="card-content white-text">
              <span class="card-title">Papéis</span>
              <p>Listar papéis do sistema</p>
            </div>
            <div class="card-action">
              <a href="">Visualizar</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4 l4">
          <div class="card indigo darken-4">
            <div class="card-content white-text">
              <span class="card-title">Visitantes</span>
              <p>Lista de Visitantes</p>
            </div>
            <div class="card-action">
              <a href="{{route('visita.index')}}">Visualizar</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4 l4">
          <div class="card blue-grey">
            <div class="card-content white-text">
              <span class="card-title">Permissões</span>
              <p>Listar papéis do sistema</p>
            </div>
            <div class="card-action">
              <a href="">Visualizar</a>
            </div>
          </div>
        </div>
      </div>


</div>
@endsection
