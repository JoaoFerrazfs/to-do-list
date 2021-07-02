<!DOCTYPE html>
<!--Doctype informa ao navegador a versão do html que deve ser renderizada-->
<html lang="pt-br">

<head>
    <title>Novo Chamado</title>
    <meta charset="utf-8">
    <meta name="author" content="João">
    <meta name="description" content="lista de documentos">
    <meta name="keywords" content="html5, tecnologia">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

    <form method=POST>
        <input type="text" name="status" ID="AA"> </input>
        <input type="text" name="title" > </input>
        <input type="text" name="descricao" > </input>
        <input type="submit" value="enviar" name="botao">

    </form>

    <a href='./telaInicial.php'>Tela Inicial</a>


</body>
</html>
<?php
session_start();
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '../Model/Notes.php');

$notas = new Nota();


if (isset($_POST['botao'])){


$status = $_POST['status'];
$title = $_POST['title'];
$description = $_POST['descricao'];

    $notas->criarNota($status, $title, $description);
    header('Location:http://localhost/to-do-list/view/criarNota.php');
    
    
    
}

?>
