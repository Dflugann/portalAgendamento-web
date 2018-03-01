@extends('layout.system')

@section('titulo', 'Apartamentos')

@section('corpo')

    <div class="container">
        <h3 class="center">Administradores</h3>
        <div class="row">
            <div class="col12 m12 l12">

                <table class="bordered centered">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Fone</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Foto</th>
                        <th>Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($registros as $registro)
                        <tr>
                            <td>{{$registro->id_admin}}</td>
                            <td>{{$registro->nome}}</td>
                            <td>{{$registro->phone}}</td>
                            <td>{{$registro->email_admin}}</td>
                            <td>
                                @if(isset($registro->status) && ($registro->status) == 'sim')
                                    <small><strong style='color: green'>ATIVO</strong></small>
                                @else
                                    <small><strong style='color: red'>DESATIVADO</strong></small>
                                @endif
                            </td>
                            <td>
                                <img width="150" src="{{'../'.$registro->imagem}}">
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
                <a id="scale-demo" href="{{route('admin.administrador.adicionar')}}" class="btn-floating btn-large scale-transition tooltipped" data-position="bottom" data-delay="50" data-tooltip="Novo Apartamento">
                    <i class="material-icons">add</i>
                </a>
            </div>

        </div>
    </div>
    </div>
    </div>

@endsection
