
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Books page</title>
</head>
<body>
    

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">My books</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="">books <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
        </li>
        
        </ul>

    </div>
    </nav>
    <form method = "post" action="addlivros.html">
    
      <button type = "submit" class="btn btn-light btn-xs"  data-toggle="modal" data-target="#delete-modal">

      <svg class="bi bi-file-earmark-plus" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M9 1H4a2 2 0 00-2 2v10a2 2 0 002 2h5v-1H4a1 1 0 01-1-1V3a1 1 0 011-1h5v2.5A1.5 1.5 0 0010.5 6H13v2h1V6L9 1z"/>
        <path fill-rule="evenodd" d="M13.5 10a.5.5 0 01.5.5v2a.5.5 0 01-.5.5h-2a.5.5 0 010-1H13v-1.5a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
        <path fill-rule="evenodd" d="M13 12.5a.5.5 0 01.5-.5h2a.5.5 0 010 1H14v1.5a.5.5 0 01-1 0v-2z" clip-rule="evenodd"/>
      </svg>
      Adicionar livros
      </button> 
    </form>

    <?php


        $conexao = mysqli_connect("localhost","root","PEDRO99gb","loja");

        if(!empty($_POST['removerlivro'])){
            $idlivro = $_POST['removerlivro'];
            $removequery = "DELETE * FROM livros where id = $idlivro"; 
            mysqli_connect($conexao,$removequery);
        }

        $query = "SELECT * FROM livros";

        $result = mysqli_query($conexao,$query);
    ?>

    <table>
        <thead>
            <tr>
                <th>ID Livro</th>
                <th>Titulo</th>
                <th>Autor</th>
                <th>Preço</th>
                <th>Editora</th>
            </tr>
        </thead>

        <tbody>
            <?php
                while($linha = mysqli_fetch_array($result)){
                    echo "<tr> <td>".$linha['id']."</td>".
                            "<td>".$linha['titulo']."</td>".
                            "<td>".$linha['autor']."</td>".
                            "<td>".$linha['preco']."</td>".
                            "<td>".$linha['editora']."</td>";
            ?>
            <td>
            <form method = "post" action="enviaPedido.php">
            <input type = "hidden" id="inputHidden" name="pedido" value=<?php echo $linha['id'];?>> 
            <input type = "hidden" id="inputHidden" name="preco" value=<?php echo $linha['preco'];?>>   
            <button type = "submit" class="btn btn-primary btn-xs"  >Adicionar</button> 
            </td>
            </from>
            <td>
            <form method = "post" action="livros.php">
            <input type = "hidden" id="inputHidden" name="removerlivro" value=<?php echo $linha['id']; ?> >  
            <button type = "submit" class="btn btn-danger btn-xs"  >Excluir</button> 
            </td></tr>
            </form>
            <?php
                }
            ?>

        </tbody>
    </table>

    

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</html>