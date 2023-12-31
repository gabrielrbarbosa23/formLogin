<?php

    session_start();

    //se login e senha cadastrado...
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        //acessa a página
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        /* print_r('Email: ' . $email);
        print_r('<br>');
        print_r('Senha: ' . $senha); */

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        //debug query banco de dados
        //print_r($result);

        if(mysqli_num_rows($result) < 1){
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('location: login.php');
        }else{
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }
    }else{
        //não acessa a página
        header('location: login.php');
    }

?>