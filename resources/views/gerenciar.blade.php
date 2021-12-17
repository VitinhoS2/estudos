@extends('layouts.testelayout') <!--DASHBOARD-->
    
    @section('title', 'IF Estudos ')

    @section('content')

    <center><br><img src="/img/icon.png" alt= "arquivo" width="150"></center>    
    <div class="user"><center>{{$user->name}}</center></div>
    <div class="useremail"><center>{{$user->email}}</center></div>

    <br>
    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h4>Envios</h4>
    </div>

    <div class="col-md-10 offset-md-1 dashboard-events-container">
        @if(count($envios) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Data</th>
                        <th scope="col">Disciplina</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Ações</th>
                        <th scope="col"></th>
                    </tr>  
                </thead>
            
            <tbody>
                @foreach($envios as $e)
                    <tr>
                        <th scropt="row">{{$loop->index + 1}}</th>
                        @if($e->report=="1")
                        <td style="color: red">{{$e->nome_envio}}</td> 
                        @else 
                        <td>{{$e->nome_envio}}</td>                         
                        @endif
                        <td>{{$e->updated_at->format('d/m/Y')}}</td>
                        <td>{{$e->disciplina}}</td>
                        <td>{{$e->descricao}}</td>
                        <td><a href="/envios/edit/{{$e->id}}" class="btn btn-info edit-btn">Editar <i class="fa fa-pencil"></i> </a> </td>
                        <td>
                            <form action="/envios/{{$e->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn" onclick="alerta2()">Excluir <i class="fa fa-trash-o"></i> </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        @else
            <p>Você não possui envios realizados</p>
        @endif
    </div>

            
    @endsection