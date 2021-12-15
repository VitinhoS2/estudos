<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Navega</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />-->
</head>
<style>

    body {
    margin: 0;
    font-family: Arial;
  }
  
  header{
    position: fixed;
    top: 0;
    left: 0;
    z-index: 999;
    width: 100%;
    height: 8%;
     background-color: #29b8b8;
     color: white;
  }

  
  ul {
    list-style-type: none;
    margin-top: 3.9%;
    margin-bottom: 3.9%;
    padding: 0;
    width: 10%;
    background-color: #f1f1f1;
    position: fixed;
    height: 100%;
    overflow: auto;

  }
  
  li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
    padding: 16.29px;
  }
  
  li a.active {
    background-color: #04AA6D;
    color: white;
  }
  
  li a:hover:not(.active) {
    background-color: #29b8b8;
    color: white;
  }

</style>
<body>

<header>
  <p>VITINHO @php echo date('Y')@endphp</p>
</header>


<ul>
  <li><a href="#portugues">Português</a></li>
  <li><a href="#matematica">Matemática</a></li>
  <li><a href="#biologia">Biologia</a></li>
  <li><a href="#quimica">Qui#mica</a></li>
  <li><a href="sociologia">Sociologia</a></li>
  <li><a href="#filosofia">Filosofia</a></li>
  <li><a href="#ingles">Inglês</a></li>
  <li><a href="#espanhol">Espanhol</a></li>
  <li><a href="#historia">História</a></li>
  <li><a href="#geografia">Geografia</a></li>
  <li><a href="#administracao">Administração</a></li>
  <li><a href="#eletronica">Eletrônica</a></li>
  <li><a href="#desenvolvimentodesistemas">Desenvolvimento de Sistemas</a></li>
</ul>

<div style="margin-left:10%;padding:1px 16px;height:1000px;">

<p>Cu pinto</p>

</div>

</body>

</html>