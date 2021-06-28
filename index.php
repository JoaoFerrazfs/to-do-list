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

<?php

require_once('../to-do-list/Controller/ValidationLogin.php');

$validacao = new  login;

$teste1 = "joaoferrazp@gmail.com";
$teste2 = "97283901";

echo "<form method=POST> 

<p>Email </p>
<input type='email' name='email'>
<p>Senha </p>
<input type='text' name='password'>

<input type='submit' name='submeter' value='Testar'>


</form>";

if (empty($_POST['testar'])){
    $validacao->validarLogin($_POST['email'], $_POST['password']);
}  
    




?>


</html>