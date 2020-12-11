<?php


$idlivro = $_POST['removelivro'];
$idcliente = $_POST['idcliente'];
echo $idcliente;
echo $idlivro;

$conexao = mysqli_connect("localhost","root","PEDRO99gb","loja");

$query = "DELETE FROM pedidos WHERE idlivro = '$idlivro' AND idcliente = '$idcliente'";

$result = mysqli_query($conexao, $query);


if ($result) {       //se der certo, redireciona pra pagina de login com msg de ok.
    header("Location: inicio.php");
}else {
    header("Location: inicio.php"); //se der errado passa pra pag de login avisando q deu erro.
}


?>