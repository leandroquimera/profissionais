<?php require "load.php"; ?>


<!doctype html>
<html lang="en">
  <head>
    <title>Profissionais da Saúde</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="_css/standard.css">
  </head>
  <body>
    <div class="jumbotron bg-dark text-white">
        <div class="container">
            <div class="row" id="topoinic">
                <div class="col-2">
                    <img src="_img/logo_inicial_sem_fundo.png" alt="LOGO" witdh="150px" height="150px" srcset="">
                </div>
                <div class="col-8 text-center">
                    <div class="nameQ"><p>QUIMERA</p></div>
                    <div class="subnameQ">Administração e Soluções em Informática</div>
                </div>
                <div class="col-2">
                    <img src="_img/qr_code_quimera_leandro.png" alt="QR-Code" witdh="150px" height="150px" srcset="">
                </div>
                
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark">
        <!--Inicio do NAVBAR  navbar navbar-default navbar-fixed-top  // navbar-default navbar-fixed-top -->
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark ">
            <a class="navbar-brand" href="?_paginas=home">
                <img src="_img/logo_navbar_001_b.png" width="40" height="38" alt="" srcset="">
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="?_paginas=home">Início <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?_paginas=servicos">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?_paginas=parceiros">Parceiros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?_paginas=profissionais">Profissionais</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?_paginas=contato">Contato</a>
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