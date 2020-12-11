<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);

echo $nome;
echo $email;
echo $senha;

$conexao = mysqli_connect("localhost","root","PEDRO99gb","loja");

$query = "INSERT INTO compradores (nome,email,senha) VALUES ('$nome','$email', '$senha')";
// mysqli_query($conexao,$query);
$resultado = mysqli_query($conexao, $query);

if ($resultado) {       //se der certo, redireciona pra pagina de login com msg de ok.
    header("Location: login.php?msg=OK");
} else {
    header("Location: login.php?msg=ERRO"); //se der errado passa pra pag de login avisando q deu erro.
}


?>