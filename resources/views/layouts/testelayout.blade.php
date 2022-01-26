<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">-->

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link rel="stylesheet" href="/css/estilo.css">

    </head>
    
    <body class="antialiased">
    @guest
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="/">
          IF Estudos
      </a>
    </nav>


    </header>
    <div style="background: linear-gradient(rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.1)), url('/img/cinza.jpeg'); no-repeat fixed; background-repeat: no-repeat; background-attachment: fixed; background-size: cover; background-size: 100% 100%; height: 92vh;" >
    <br><br><br><br><br><br><center><h1>Bem-vindo ao IF Estudos</h1></center><br>
    <center><p class="treco"> </p></center>
    <center><p class="welcome-desc">O IF Estudos é uma plataforma de compartilhamento de material para estudo. <br> Crie uma conta agora e tenha acesso a vários arquivos disponibilizados pelos usuários!</p></center><br>

    <center><button class="btn btn-success "><a href="/login"  style="color: white">Fazer login</a></button></center><br>
    
    <center><button class="btn btn-success"><a href="/register" style="color: white">Criar uma conta</a></button></center><br>
    </div>
    @endguest
    
    @auth

    <header>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="/">
          IF Estudos
      </a>
      <form action="/" method="GET" class="form-inline my-2 my-lg-0" >
      <input class="form-control mr-sm-2" type="search" id="search" name="search" autocomplete="off" aria-label="Search">
      <button type="submit" class="btn btn-light">Buscar</button>
    </form>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Página inicial <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/upload">Realizar um envio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/gerenciar">Gerenciar envios</a>
      </li>

      <li class="nav-item active dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Disciplina
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <form action="/" method="GET">
          <a class="dropdown-item" href="/Administração"  value="Administração">Administração</a>
          <a class="dropdown-item" href="/Biologia" value="biologia">Biologia</a>
          <a class="dropdown-item" href="/Desenvolvimento" value="desenvolvimentodesistemas">Desenvolvimento de Sistemas</a> 
          <a class="dropdown-item" href="/Eletrônica" value="eletronica">Eletrônica</a>
          <a class="dropdown-item" href="/Espanhol" value="espanhol">Espanhol</a>
          <a class="dropdown-item" href="/Filosofia" value="filosofia">Filosofia</a>
          <a class="dropdown-item" href="/Geografia" value="geografia">Geografia</a>
          <a class="dropdown-item" href="/Historia" value="historia">História</a>
          <a class="dropdown-item" href="/Inglês" value="ingles">Inglês</a>
          <a class="dropdown-item" href="/Matemática" value="matematica">Matemática</a>
          <a class="dropdown-item" href="/Português" value="portugues">Português</a>
          <a class="dropdown-item" href="/Química" value="quimica">Química</a>
          <a class="dropdown-item" href="/Sociologia" value="sociologia">Sociologia</a>
          </form>
        </div>
      </li>

      <!--<div class="align-items-right">
          <a href="#">
            <img src="/img/logo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
        </div>-->
    </ul>

      <form action="/logout" method="POST">                             
        @csrf                             
        <a href="/logout" class="nav-link" style="color: black" onclick="event.preventDefault(); this.closest('form').submit();">Sair <i class="fa fa-sign-in" aria-hidden="true"></i></a>                         
      </form>


  </div>
</nav>
</header>
        <main>
            @yield('content')
        </main>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    @endauth  
  </body>
    
    <script>

        function alerta(){
          confirm("Deseja mesmo reportar esse envio?");
          alert("Obrigado! Verificaremos se o envio possui conteúdo inadequado");
        }
        
        function alerta2(){
          confirm("Deseja mesmo excluir esse envio?");
        }

    </script>
</html>