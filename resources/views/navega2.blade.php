<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Navega2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<style>

body {
    font-family: 'Open Sans', sans-serif;
    margin: 0;
}

header {
  position: fixed;
  top: 0;
  width: 100%
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 15px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 15px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

.topnav {
  overflow: hidden;
  background-color:  #29b8b8;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 25px;
}

.navbar {
  overflow: hidden;
  background-color: #1d8c8c;
}

.navbar a {
  float: left;
  font-size: 14px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  position: absolute;
  display: inline-block;
}

.dropdown .dropbtn {
  font-size: 14px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  color: black;
}

.dropdown-content {
  display: none;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>

<body>
<header>
<div class="topnav">
<a href="/" class="navbar-brand">
    <b>IF Estudos</b>
</a>

<div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Pesquisar..." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>

<div class="navbar">
  <a href="#home">Página inicial</a>
  <a href="#news">Fazer envio</a>
  <a href="#gerenciar">Gerenciar perfil</a>
  <div class="dropdown">
    <button class="dropbtn">Disciplinas 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#portugues">Português</a>
      <a href="#matematica">Matemática</a>
      <a href="#biologia">Biologia</a>
      <a href="#quimica">Química</a>
      <a href="#sociologia">Sociologia</a>
      <a href="#filosofia">Filosofia</a>
      <a href="#ingles">Inglês</a>
      <a href="#espanhol">Espanhol</a>
      <a href="#historia">História</a>
      <a href="#geografia">Geografia</a>
      <a href="#administracao">Administração</a>
      <a href="#eletronica">Eletrônica</a>
      <a href="#desenvolvimentodesistemas">Desenvolvimento de Sistemas</a>     
    </div>
  </div> 
</div>
</header>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>cudeded

</body>

</html>