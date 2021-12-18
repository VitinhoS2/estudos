@extends('layouts.testelayout')
    
    @section('title', 'IF Estudos')

    @section('content')

<main>
<br>
   <div id="events-container" class="col-md-12">
        <h2>Envios</h2>
        @if($search)
            <p class="subtitle">Buscando por: "{{$search}}"</p>
        @elseif($disciplina)
            @if($disciplina=="Desenvolvimento")        
                <p class="subtitle">Buscando por: "Desenvolvimento de Sistemas"</p>
            @else
                <p class="subtitle">Buscando por: "{{$disciplina}}"</p>
            @endif
        @else
            <p class="subtitle">Todos</p>
        @endif

        <!--@if($disciplina)
        <p class="subtitle">Buscando pela disciplina: "{{$disciplina}}"</p>
            @if($disciplina=="dashboard")
                <p class="subtitle">Todos</p>
            @endif        
        @endif -->

        <div id="cards-container" class="row">
        @foreach($envios as $e) <!--"$e" é a versão foreach de $envios-->
                <div class="col card-body">
                <a href="{{URL::to('/')}}/file/estudos/{{$e->file}}" target="_blank"><p><img src="/img/arquivo.png" alt= "arquivo"></p></a>
                    @if($e->report=="1")
                    <p class="card-name" title="Envio reportado"><b>{{$e->nome_envio}}</b> <i class="fa fa-exclamation" aria-hidden="true" style="color: red"></i></p>
                    @else
                    <p class="card-name"><b>{{$e->nome_envio}}</b></p>
                    @endif
                    <p>Autor: <a href="/perfil/{{$e->id}}" style="color: black">{{$e->nome_usuario}}</a></p>
                    <p class="card-date">Data: {{$e->updated_at->format('d/m/Y')}}</p>
                    <p>Disciplina: {{$e->disciplina}}</p>
                    <p>Descrição: {{$e->descricao}}</p>
                    <a href="{{URL::to('/')}}/file/estudos/{{$e->file}}" target="_blank">
                    <div id="buttons">
                    <button class="btn btn-success" title="Baixar Envio"><i class="fa fa-download"></i> Baixar Envio</button></a> 

                    <a href="/reportar/{{$e->id}}"><i class="fa fa-exclamation-circle" aria-hidden="true" onclick="alerta()" title="Reportar envio" style="font-size: large; color: red"></i></a>
 

                    </div>                    


                </div><!--CARD BODY-->
        @endforeach
        @if(count($envios)==0 && $search)
            <p>Não foi possível encontrar nenhum envio correspondente a "{{$search}}"</p>
        @elseif(count($envios)==0)
            <p>Não há envios disponíveis</p>
        @endif
        </div>
    </div>
</main>


            
    @endsection