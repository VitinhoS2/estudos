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
            <div class="col card-body">
                <!--<a href="https://if-estudos-bucket.s3.sa-east-1.amazonaws.com/arquivos/{{$e->file}}" target="_blank"><p><img src="/img/arquivo.png" alt= "arquivo"></p></a>-->
                <a href="/upload/{{$e->id}}" target="_blank"><p><img src="/img/arquivo.png" alt= "arquivo"></p></a>
                    @if($e->report=="1")
                    <p class="card-name" title="Envio reportado"><b>{{$e->nome_envio}}</b> <i class="fa fa-exclamation" aria-hidden="true" style="color: red"></i></p>
                    @else
                    <p class="card-name"><b>{{$e->nome_envio}}</b></p>
                    @endif
                    <p>Autor: <a href="/perfil/{{$e->id}}" style="color: black">{{$e->nome_usuario}}</a></p>
                    <p class="card-date">Data: {{$e->updated_at->format('d/m/Y')}}</p>
                    <p>Disciplina: {{$e->disciplina}}</p>
                    <div class="hidden"><p>Descrição: {{$e->descricao}}</p></div>
                    <a href="/upload/{{$e->id}}" target="_blank">

                    <div id="buttons">
                    <button class="btn btn-success envios" title="Baixar Envio"><i class="fa fa-download"></i> Baixar Envio</button></a> 
                    <a href="/reportar/{{$e->id}}"><i class="fa fa-exclamation-circle" aria-hidden="true" onclick="alerta()" title="Reportar envio - reporte ao administrador do site se você achar que o conteúdo não é adequado para publicação" style="font-size: large; color: red;"></i></a>


                    </div>                    
                    
                </div><!--CARD BODY-->
            @endif
        @endforeach

        </div>
    </div>
</main>

<!--VISUALIZACAO DO ENVIO <embed src="/file/estudos/{{$envios->file}}">-->


</main>

            
    @endsection