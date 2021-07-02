<?php 
    define('__ROOT__', dirname(dirname(__FILE__)));
    require_once(__ROOT__ . '../Model/Users.php');

    $usuario=new User();

    if(isset($_POST['cadastrar']))
    {

        $name=$_POST['name'];
        $age=$_POST['age'];
        $email=$_POST['email'];
        $fone=$_POST['fone'];
        $password=$_POST['password'];


        $usuario->insereUsuario($name,$age,$email,$fone,$password);       

       header('Location:./cadastroUsuario.php');
        
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

<body>
<form method=POST >
    <p>Nome:</p><input type='text' name='name'>
    <p>Idade</p> <input type='text' name='age'>
    <p>Telefone</p> <input type='text' name='fone'>
    <p>Email:</p><input type='email' name='email'>
    <p>Senha:</p><input type='password' name='password'>
    <input type='submit' name='cadastrar' value='cadastrar'>
    
    </form>
    
</body>




