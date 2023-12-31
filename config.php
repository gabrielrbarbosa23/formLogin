<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'form-login';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);


//testando conexão

   /*  if($conexao->connect_errno){
        echo "Erro";
    }
    else{
        echo "Conexão efetuada com sucesso";
    } */



    
?>