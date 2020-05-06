<?php

//Função para validar os campos de um formulário.

function validacampos(array $fields){

    $validacampos = [];

    foreach ($fields as $key => $value) {
        switch ($value) {
            case 's':
                $validacampos[$key] = filter_var($_POST[$key], FILTER_SANITIZE_STRING);
                break;
 
 
            case 'e':
                $validacampos[$key] = filter_var($_POST[$key], FILTER_SANITIZE_EMAIL);
                break;


            case 'i':
                $validacampos[$key] = filter_var($_POST[$key], FILTER_SANITIZE_NUMBER_INT);
                break;


            case 'f':
                $validacampos[$key] = filter_var($_POST[$key], FILTER_SANITIZE_NUMBER_FLOAT);
                break;
        }
    }
    return (object) $validacampos;

}




/*
function metodo(){
    $metodo = $_SERVER['REQUEST_METHOD'];
    
    if ($metodo == 'GET') {
        return $_GET;
    }
    return $_POST;
*/