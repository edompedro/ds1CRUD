<?php

$titulo = $_POST['titulo'];
$editora = $_POST['editora'];
$preco = $_POST['preco'];
$autor = $_POST['autor'];

$conexao = mysqli_connect("localhost","root","PEDRO99gb","loja");

$query = "INSERT INTO livros (titulo,editora, autor, preco) VALUES ('$titulo','$editora', '$autor','$preco')";
// mysqli_query($conexao,$query);
$resultado = mysqli_query($conexao, $query);

if ($resultado) {       //se der certo, redireciona pra pagina de login com msg de ok.
    header("Location: livros.php");
} else {
    header("Location: livros.php"); //se der errado passa pra pag de login avisando q deu erro.
}


?>