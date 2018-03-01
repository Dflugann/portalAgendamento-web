@extends('layout.system)

@section('titulo', 'Editar Administrador')

@section('corpo')
    <div class="container">
        <h3 class="center"> Editar Administrador</h3>
        <form action="" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            @include('admin.administrador._form')

            <button class="btn blue">Atualizar</button>

        </form>
    </div>


@endsection