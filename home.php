<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

?>
<html>
	<head>
		<title>ADMINISTRADOR</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>

	<body>
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">PLUR</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="Noticias.html">PLUR MEXICO</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="home.php">PAGINA PRINCIPAL ADMINISTRACION</a></li>
            <li><a href="CrearNoticia.html">NOTICIAS</a></li>
            <li><a href="CrearEvento.html">EVENTOS</a></li>
            <li><a href="CrearMusic.html">MUSICA</a></li>
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-user"></span> CONTROL ADMINISTRATIVO DE PAGINA</h1>
          </div>
          <div class="col-md-2">
          </div>
        </div>
      </div>
    </header>

    <!-- BARRA TRANSPARENTE -->
    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active"><i>EN ESTA SECCION SE PODRA HACER LA EDICICON DE CADA ARTICULO PUBLICADO EN LA PAGINA</i> </li>
        </ol>
      </div>
    </section>


    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="list-group">
              <a  class="list-group-item active color-principal">
               <H2><center><b>SELECCIONE EL APARTADO QUE DESEA CREAR</b> </center> </H2> 
              </a>
              <a href="CrearNoticia.html" class="list-group-item"> <H2> CRERAR CONTENIDO NOTICIAS</H2></a>
              <a href="CrearEvento.html" class="list-group-item"> <H2>CREAR CONTENIDO DE EVENTOS</H2></a>
              <a href="CrearMusic.html" class="list-group-item"> <H2>CREAR CONTENIDO DE MUSICA</H2></a>
            </div>
          </section>






    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>