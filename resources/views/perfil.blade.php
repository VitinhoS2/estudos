@extends('layouts.testelayout')
    
    @section('title', 'IF Estudos ')

    @section('content')

    <br>

<main>
<center><br><img src="/img/icon.png" alt= "arquivo" width="150"></center>    
<div class="user"><center>{{$envios->nome_usuario}}</center></div>
<div class="useremail"><center>{{$userEmail['email']}}</center></div>

<div id="events-container" class="col-md-12">
        <h2>Envios do usuário</h2><br>
        
        <div id="cards-container" class="row">
        @foreach($envio as $e) <!--"$e" é a versão foreach de $envios-->
            @if($e->user_id==$userEmail['id'])
                <div class="card-body">
                <a href="{{URL::to('/')}}/file/estudos/{{$e->file}}" target="_blank"><p><img src="/img/arquivo.png" alt= "arquivo" width="100"></p></a>

                    @if($e->report=="1")
                    <p class="card-name" title="Envio reportado"><b>{{$e->nome_envio}}</b> <i class="fa fa-exclamation" aria-hidden="true" style="color: red"></i></p>
                    @else
                    <p class="card-name"><b>{{$e->nome_envio}}</b></p>
                    @endif
                    <p>Autor: {{$e->nome_usuario}}</p>
                    <p class="card-date">Data:{{$e->updated_at->format('d/m/Y')}}</p>
                    <p>Disciplina: {{$e->disciplina}}</p>
                    <p>Descrição: {{$e->descricao}}</p>
                    <a href="{{URL::to('/')}}/file/estudos/{{$e->file}}" target="_blank">
                    <div id="buttons">
                    <button class="btn btn-success" title="Baixar Envio"><i class="fa fa-download"></i> Baixar Envio</button></a> 
                    <a href="/reportar/{{$e->id}}"><i class="fa fa-exclamation-circle" aria-hidden="true" onclick="alerta()" title="Reportar envio" style="font-size: large; color: red"></i></a>
                    </div>  
                </div>
            @endif
        @endforeach

        </div>
    </div>
</main>

<!--VISUALIZACAO DO ENVIO <embed src="/file/estudos/{{$envios->file}}">-->


</main>

            
    @endsection