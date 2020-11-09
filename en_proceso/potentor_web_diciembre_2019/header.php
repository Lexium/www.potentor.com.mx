<!doctype html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">

    <meta name="author" content="">

    <link rel="icon" href="./favicon.ico">



    <title>POTENTOR</title>



    <!-- Bootstrap core CSS -->

    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <link href="./css/style.css" rel="stylesheet">

	<link type="text/css" rel="stylesheet" href="bower_components/toastr/toastr.min.css"/>

  <link href="./css/owl.carousel.css" rel="stylesheet">


	<!--recaptcha-->

	<script src="https://www.google.com/recaptcha/api.js?onload=myCallBack&render=explicit" async defer></script>

  </head>



  <body>

    <nav class="navbar navbar-dark navbar-expand-md fixed-top navbar-blue">

      <a class="navbar-brand" href="<?php echo 'index.php' ?>"><img src="images/logo_azul_cielo.png" class="img-fluid"></a>

      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

      </button>

      <div class="navbar-collapse collapse" id="navbarCollapse" style="">

        <ul class="navbar-nav ml-auto">

          <li class="nav-item">

            <a class="nav-link" href="<?php echo 'index.php' ?>">Inicio <span class="sr-only">(current)</span></a>

          </li>

          <li class="nav-itemdropdown" style="position: relative;">

              <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Soluciones</a>

              <div class="dropdown-menu sub-menu-bg-blue" aria-labelledby="dropdown01">

                <a class="dropdown-item" href="<?php echo 'mapa_de_talento.php'?>">Mapa de talento</a>

                <a class="dropdown-item" href="<?php echo 'gestion_de_objetivos.php'?>">Desempeño</a>

                <a class="dropdown-item" href="<?php echo 'desarrollo.php'?>">Desarrollo</a>

                <a class="dropdown-item" href="<?php echo 'capacitacion.php'?>">Capacitación</a>

                <a class="dropdown-item" href="<?php echo 'encuesta_clima.php'?>">Encuesta de clima</a>

                <a class="dropdown-item" href="<?php echo 'reclutamiento.php'?>">Reclutamiento</a>

              </div>

          </li>
          <li class="nav-item">

            <a class="nav-link" href="<?php echo 'clientes.php'?>">Clientes</a>

          </li>
          <li class="nav-item">

            <a class="nav-link" href="<?php echo 'partners.php'?>">Partners</a>

          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-success" href="<?php echo 'solicita_demo.php'?>" style="margin-top:0;">Solicita Demo</a>

          </li>

          <li class="nav-item">

            <a class="nav-link" href="<?php echo 'contacto.php'?>">Contacto</a>

          </li>

        </ul>

      </div>

    </nav>



