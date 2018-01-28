@extends('layout.system')

@section('titulo','Contato')

  @section('corpo')

    @foreach($contatos as $contato)
        <p>{{$contato->nome}}</p>
        <p>{{$contato->tel}}</p>
    @endforeach

  @endsection
