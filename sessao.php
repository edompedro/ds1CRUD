<?php

    session_start();

    $email = $_POST['email'];
    echo $email;
    $senha = md5($_POST['senha']);
    echo $senha;

    $conexao = mysqli_connect("localhost","root","PEDRO99gb","loja");

    $query = "SELECT * FROM compradores WHERE email='$email' and senha= '$senha'";

    $result = mysqli_query($conexao,$query);
    
    if($result->num_rows > 0){
        $linha = mysqli_fetch_array($result);
        $_SESSION['Nome'] = $linha['Nome'];
        $_SESSION['email'] = $linha['email'];
        $_SESSION['id'] = $linha['id'];
        header("Location: inicio.php");
    }else{
        header("Location: login.php?msg=error");
    }
    

?>