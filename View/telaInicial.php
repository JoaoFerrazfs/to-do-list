<!DOCTYPE html>

<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '../Controller/funcaoTelaInicial.php');


$notas=new VisualizacaoDeNotas();
?>

<html lang="pt-br">

<head>
    <title>To-do List</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body class="body container-fluid">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><?php echo $_SESSION['usuario'] ?></a>
            <img src="../img/post-it.png" alt="" width="20" height="20">
            <a class="navbar-brand" href="#">Perfil</a>
    </nav>

    <nav class=" container-fluid  " style="padding-bottom: 100px;">

        <div class="container " style="text-align:left; margin-top: 70px;">
            <a class="btn btn-success" href="criarNota.php" role="button">Nova Nota</a>
            
        </div>

        <div class="row col-md-12  container-fluid text-center ">


            <div class="col-md-4 container ">            
            <div class="aberto  notas ">
                    <div class="container-fluid status ">
                    <p>Novas tarefas</p>
                </div>
                    <?php                     
                        $notas->mostraNotas('Nova');
                    ?>
                </div>

            </div>

            <div class="col-md-4 container  ">
                <div class="andamento  notas ">
                    <div class="container-fluid status ">
                        <p>Em andamento</p>
                    </div>
                    <?php                     
                        $notas->mostraNotas('Em andamento');
                    ?>
                </div>


            </div>

            <div class="col-md-4  ">
                <div class="concluido notas padding ">
                    <div class="container-fluid status ">
                        <p>Finalizadas</p>
                    </div>
                    <?php                     
                        $notas->mostraNotas('Feito');
                    ?>
                </div>


            </div>
        </div>

    </nav>


    </div>


    <nav class="navbar navbar-toggler navbar-dark bg-dark fixed-bottom ">
        <div class="container-fluid ">
            <a class="navbar-brand " href="# ">Logout</a>
    </nav>

</body>









