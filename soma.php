<?php

    session_start();
    $idcliente = $_SESSION['id'];

    $conexao = mysqli_connect("localhost","root","PEDRO99gb","loja");
    $sql = "SELECT * FROM pedidos WHERE idcliente = '$idcliente'";
    $resultado = mysqli_query($conexao,$sql);
    $soma = 0;
    while($linha = mysqli_fetch_array($resultado)){
        $soma += $linha['preco'];
    }
    echo $soma;

    header("Location: inicio.php?soma=$soma");
?>