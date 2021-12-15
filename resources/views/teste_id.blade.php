@extends('layouts.testelayout')
    
    @section('title', 'teste_id')

    @section('content')
    
    @if($id!=null)
        <h1>Exibindo id: {{$id}}</h1>
        {{$usuarios->nome_usuario}}

    @endif

    @endsection