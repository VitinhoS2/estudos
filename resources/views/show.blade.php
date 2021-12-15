@extends('layouts.testelayout')
    
    @section('title', 'IF Estudos perfil')

    @section('content')
    
    @if($id!=null)

<main>
    
<br><br><center><img src="/img/estudos/{{$usuarios->image}}" alt= "arquivo" width="200"></center>
<div class="user"><center>{{$usuarios->nome_usuario}}</center></div>
<div class="useremail"><center>{{$usuarios->email}}</center></div>

<div id="events-container" class="col-md-12">
        <h2>Envios</h2>
        <div id="cards-container" class="row">
        @foreach($envios as $envio)
                <a href="{{URL::to('/')}}/file/estudos/{{$envios->file}}" target="_blank"><p><img src="/img/arquivo.png" alt= "arquivo" width="100"></p></a>
                <div class="card-body">
                    <p class="card-name"><b>{{$envios->nome_envio}}</b></p>
                    <p>Autor={{$envios->nome_usuario}}</p>
                    <p class="card-date">{{$envios->created_at}}</p>
                    <p>Disciplina={{$envios->disciplina}}</p>
                    <p>Descricao={{$envios->descricao}}</p>
                
                    <a href="{{URL::to('/')}}/file/estudos/{{$envios->file}}" target="_blank">
                    <button class="btn btn-success"><i class="fa fa-download"></i> Baixar Envio</button></a>
                </div>
        @endforeach
        </div>
    </div>
</main>

<!--VISUALIZACAO DO ENVIO <embed src="/file/estudos/{{$envios->file}}">-->


</main>

    @endif
            
    @endsection