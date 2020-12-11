 
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<body>

    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="sessao.php" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Email:</label><br>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Senha:</label><br>
                                <input type="password" name="senha" id="senha" class="form-control">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="cadastro.html" class="text-info">Cadastre-se</a>
                            </div>
                            <div class="form-group">
  
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
       

       if($_GET['msg'] == "OK"){
    ?>
        <div class="alert alert-info" role="alert">
            <?php echo "<strong> Registrado com sucesso, por favor faça login</strong>"; ?>
        </div>
    <?php
        }else if($_GET['msg'] == "ERRO"){
    ?>
        <div class="alert alert-danger" role="alert">
            <?php echo "<strong> Erro ao conectar com o BD"; ?>
        </div>
    <?php
            }else if($_GET['msg'] == "error"){
    ?>
        <div class="alert alert-danger" role="alert">
            <?php echo "<strong> Email ou senha incorretos.</strong>"; ?>
        </div>
    <?php
            }
            unset($_GET['msg']);
    ?>


    
</body>
