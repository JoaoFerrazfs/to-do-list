<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '../Controller/funcaoTelaInicial.php');

$id = $_GET['id'];
$notas = new VisualizacaoDeNotas();
$nota = $notas->mostraNotasId($_GET['id']);

foreach ($nota as $value) {
    $status = $value['status'];
    $title = $value['title'];
    $description = $value['description'];
    $email = $value['email'];
}


if (isset($_POST['apagar'])) {
    $notas->apagarNotas($id);
    header('Location: /to-do-list/view/telaInicial.php');
}


?>


<!DOCTYPE html>

<html lang="pt-br">

<head>
    <title>Exibir chamado</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>



<body class="body container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> <?php echo $_SESSION['usuario'] ?></a>
            <img src="../img/post-it.png" alt="" width="20" height="20">
            <a class="navbar-brand" href="#">Perfil</a>
    </nav>

    <nav class="tarefas">
        <form method=POST>
            <div class="row mb-1  text-center ">
                <div class="col-md-12 ">

                    <div class="container-fluid">

                        <div class="container-fluid status ">
                            <p>Informações do Chamado</p>
                        </div>
                        <div class="andamento notas mb-5 ">
                            <div class="input-group input-group mb-3 text-center">
                                <span class="input-group-text">Título</span>
                                <input type="text" class="form-control" value="<?php echo $title ?>" name="title" readonly=“true”>
                            </div>

                            <div class="input-group input-group mb-3">
                                <span class="input-group-text">Descrição</span>
                                <textarea class="form-control" name="descricao" rows="3" readonly=“true”> <?php echo $description ?></textarea>
                            </div>

                            <div class=" col-lg-4 container-fluid " style="margin-top: 10px;">
                                <input class="form-control" list="datalistOptions" name="status" placeholder="<?php echo $value['status']; ?>" readonly=“true”>
                                <datalist name="status">
                                    <option value="Aberto">
                                    <option value="Em andamento">
                                    <option value="Fechado">
                                </datalist>
                            </div>
                            <div class="row col-md-12  container-fluid">

                                <div class="col-md-4 container-fluid">
                                    <button type='submit' class="btn btn-danger" name='apagar' >Apagar</button>

                                </div>
                                <div class="col-md-4 container-fluid">
                                    <?php $id = $_GET['id'];
                                    echo  "<a class='container ' href='/to-do-list/view/editarNota.php?id=$id'> Editar Nota</a> "; ?>
                                </div>
                                <div class="col-md-3 container-fluid">

                                <a class="btn btn-success" href="telaInicial.php" role="button">Voltar</a>
                                </div>



                            </div>



                        </div>






                    </div>




                </div>
        </form>
        </div>

    </nav>


    </div>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom ">
        <div class="container-fluid ">


            <a class="navbar-brand " href="# ">Logout</a>
    </nav>





    <form method=POST>


    </form>

</body>

</html>


<?php

if (isset($_POST['apagar'])) {
    $notas->apagarNotas($_GET['id']);
    header('Location: /to-do-list/view/telaInicial.php');
}


?>