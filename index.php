<?php
require __DIR__.'/vendor/autoload.php';
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Profissionais da Saúde</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="app/_css/standard.css">
  </head>
  <body>
    <div class="jumbotron text-center bg-dark text-white" style="margin-bottom:0">
        <h1>QUIMERA Adm.Soluções em Informática</h1>
    </div>
    <div class="container-fluid bg-dark">
        <!--Inicio do NAVBAR  navbar navbar-default navbar-fixed-top  // navbar-default navbar-fixed-top -->
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark ">
            <a class="navbar-brand" href="index.php">
                <img src="_img/logo_navbar_001.png" width="40" height="38" alt="" srcset="">
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Início <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Parceiros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profissionais</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Redes Sociais</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="https://bit.ly/2VAaAlN" target="_blank">Facebook</a>
                            <a class="dropdown-item" href="#">Instagram</a>
                            <a class="dropdown-item" href="#">linkedin</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!--Fim do NAVBAR-->
    </div>
    <div class="container bg-dark text-white pt-3 pb-4">
        <?php

		  	try {

                require_once load();
			  } catch (Exception $err){

				echo $err->getMessage();
			  }

          ?>
    </div>






      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>