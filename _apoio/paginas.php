<?php

function load(){
    
    $pegaPagina = filter_input(INPUT_GET, '_paginas', FILTER_SANITIZE_STRING);

    $pegaPagina = (!$pegaPagina) ? "_paginas/home.php" : "_paginas/{$pegaPagina}.php";

    if(!file_exists($pegaPagina)){

        throw new \Exception("<center><h1>Algo errado aconteceu</h1>Página solicitada não existe</cente>");
    }

    return $pegaPagina;

}