@extends('layout.system')

@section('titulo', 'Editar Administrador')

@section('corpo')
<div class="container">
    <h3 class="center">Editar Administrador</h3>
    <form class="col s12 m12 l12" method="POST" action="{{route('admin.administrador.atualizar', $registro->id_admin)}}" enctype="multipart/form-data" >
        {{csrf_field()}}
        <input type="hidden" name="_method" value="put">
        @include('admin.administrador._form')

        <div class="center">
            <button class="btn blue">Atualizar</button>
        </div>
    </form>
</div>

@endsection