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


<!DOCTYPE html>
<!--Doctype informa ao navegador a versão do html que deve ser renderizada-->
<html lang="pt-br">

<head>
    <title>HelpDesk</title>
    <meta charset="utf-8">
    <meta name="author" content="João">
    <meta name="description" content="lista de documentos">
    <meta name="keywords" content="html5, tecnologia">
    <link rel="stylesheet" href="css/estilos.css">
</head>




<form method=POST action="./Controller/ValidationLogin.php">
    <p>Email</p>
    <input type='email' name='email'>

    <p>Senha</p>
    <input type='text' name='password'>

    <input type='submit' name='submeter' value='Testar'>
    
    </form>

    <a href='View/cadastroUsuario.php'>Criar novo Usuário</a>