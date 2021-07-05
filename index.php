<!DOCTYPE html>

<html lang="pt-br">

<head>
    <title>Página de Login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body class="body">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">To-do List</a>
    </nav>

    <form class="logar" method="POST" action="./Controller/ValidationLogin.php">

    

        <div class="container-fluid text-center col-sm-3 ">

            <img src="./img/post-it.png" alt="" width="110" height="110">
            </form>
            <?php
            session_start();
            if (isset($_SESSION['nao_autenticado'])) {
                echo "  <div>
                    <p>Usuário ou senha inválidos</p>
                        </div>";
            } else {
            unset($_SESSION['nao_autenticado']);
            }
            ?>

            <div class=" input-group input-group-lg  mb-3 stext-center  ">
                <span class="input-group-text">Email</span>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="input-group input-group-lg mb-3 text-center">
                <span class="input-group-text">Senha</span>
                <label class="form-label"></label>
                <input type="password" class="form-control" name="password">
            </div>

            <button type="submit" class="btn btn-dark" value="testar">Logar</button>
            <div class="col-lg-12" style="text-align: right;">
                <a href="./View/cadastroUsuario.php" class="link-dark">Faça seu cadastro</a>
            </div>
        </div>
    


    </nav>

</body>

</html>