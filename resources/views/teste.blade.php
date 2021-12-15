    @extends('layouts.testelayout')
    
    @section('title', 'teste')

    @section('content')

    <h1>Seja bem-vindo ao teste das funcionalidades do Laravel. Oi meu nome é {{$nome}}</h1>
        
        <h2>TESTE DE UPLOAD DE ARQUIVO</h2>
        @foreach($envios as $envio)
            <p><img src="/img/arquivo.png" alt= "arquivo" width="100"></p>
            <a href="{{URL::to('/')}}/file/estudos/{{$envio->file}}" target="_blank">
            <button class="btn"><i class="fa fa-download"></i> Baixar Envio</button></a>
            <p>Nome do envio={{$envio->nome_envio}}</p>
            <p>Email={{$envio->email}}</p>
            <p>Autor={{$envio->nome_usuario}}</p>
            <p>Disciplina={{$envio->disciplina}}</p>
            <p>Descricao={{$envio->descricao}}</p>
            <p>{{$envio->created_at}}</p>
        @endforeach 

        <h2>TESTE DE BANCO DE DADOS</h2>
        @foreach($usuarios as $usuario)
            <p><img src="/img/estudos/{{$usuario->image}}" width="100"></p>
            <p>Nome de usuário={{$usuario->nome_usuario}}</p>
            <p>Email={{$usuario->email}}</p>
            <p>Senha={{$usuario->senha}}</p><br>
        @endforeach

        <h2>TESTE DE IF</h2>

        @if($nome!="Vitor")
            <p>Pera aí! Tem alguma coisa errada >:( </p>
        @else
            <p>Meu nome é {{$nome}} e eu tenho {{$idade}} anos</p>
        @endif

        <h2>TESTE DE ARRAY E FOR</h2>

        @for($i = 0; $i <count($arr); $i++)

	        {{$arr[$i]}},
	
        @endfor

        <h2>TESTE DE PHP</h2>
        
        @php 
            $numero=6;
            echo "meu número da sorte é " . $numero;
        @endphp

        <h2>TESTE DE IMAGEM</h2>       

        <img src="/img/bonk.jpeg" alt= "bonk">
        
        <h2>TESTE DE SEARCH</h2>

            @if($busca!='')
                <p>O usuário está buscando por: {{$busca}}</p>       
            @endif
            
    @endsection
        


