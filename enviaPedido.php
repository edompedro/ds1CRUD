<!-- vai cair aqui quando apertar em adicionar livro na livros.php, ai aqui 
pega os dedos e adiciona o livro com o id e nome do comprador q vai 
ta na session dentro da tabela de pedidos pra quando carregar ela 
no inicio.php estar la todos os pedidos. -->

<?php

session_start();

$idlivro = $_POST['pedido'];
$preco = $_POST['preco'];
$idcliente = $_SESSION['id'];
$nome = $_SESSION['Nome'];

$conexao = mysqli_connect("localhost","root","PEDRO99gb","loja");

$query = "INSERT INTO pedidos (idcliente, idlivro, preco, nome) VALUES ('$idcliente', '$idlivro', '$preco', '$nome')";

$result = mysqli_query($conexao, $query);
echo $preco;
echo $idlivro;


if ($result) {       //se der certo, redireciona pra pagina de login com msg de ok.
    header("Location: inicio.php?msg=OK");
}else {
    header("Location: inicio.php?msg=ERRO"); //se der errado passa pra pag de login avisando q deu erro.
}


?>