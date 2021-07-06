<!DOCTYPE html>

<html lang="pt-br">

<head>
    <title>Criar Nota</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body class="body">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Nome</a>
            <img src="/img/post-it.png" alt="" width="20" height="20">
            <a class="navbar-brand" href="#">Perfil</a>
    </nav>

    <nav class="tarefas">



        <form method="POST">
            <div class="row mb-1 container-fluid text-center ">
                <div class="col-md-12 ">

                    <div class="container-fluid">

                        <div class="container-fluid status ">
                            <p>Nova nota</p>
                        </div>
                        <div class="andamento notas mb-5 ">
                            <div class="input-group input-group mb-3 text-center">
                                <span class="input-group-text">Título</span>                                
                                <input type="text" class="form-control" name="title" required MAXLENGTH = 30>
                            </div>
                            
                            <div class="input-group input-group mb-3">
                                <span class="input-group-text">Descrição</span> 
                            <textarea class="form-control" name="descricao" rows="3" required ></textarea>                               
                            </div>

                            <div class=" col-lg-4 container-fluid " style="margin-top: 10px;">
                                <input class="form-control" list="datalistOptions" name="status"  placeholder="Status" required >
                                <datalist id="datalistOptions" required>
                                    <option value="Aberto">
                                    <option value="Em andamento">
                                    <option value="Fechado">
                                </datalist>
                            </div>

                            <div class="row col-md-12  container-fluid text-center ">

                            <div class="col-md-1 container-fluid">
                                <button type="submit" class="btn btn-success " name="enviar" >Salvar Nota</button>
                            </div>

                                <div class="col-md-1 container-fluid">
                                    <a class="btn btn-success" href="telaInicial.php" role="button">Voltar</a>
                                </div>

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
</body>

</html>
<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '../Model/Notes.php');

$notas = new Nota();


if (isset($_POST['enviar'])){


$status = $_POST['status'];
$title = $_POST['title'];
$description = $_POST['descricao'];

    $notas->criarNota($status, $title, $description);
    header('Location:http://localhost/to-do-list/view/telaInicial');
    
    
    
}

?>
