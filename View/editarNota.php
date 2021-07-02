<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '../Controller/funcaoTelaInicial.php');

$id=$_GET['id'];
$notas= new VisualizacaoDeNotas  ();
$nota=$notas->mostraNotasId($id);

foreach ($nota as $value){
    $id=$value['id'];
    $status= $value['status'] ;
    $title= $value['title'] ;
    $description= $value['description'] ;
    $email= $value['email'] ;
   
}

echo "$status. <br>
$title.<br>
$email.<br>
$description";

echo "<a href='/to-do-list/view/telaInicial.php'>Tela Inicial</a>";

if (isset($_POST['editar'])) {   
    $status= $_POST['status'] ;
    $title= $_POST['title'] ;
    $description= $_POST['description'] ;
    $notas->atualizarNota($id,$status,$title,$description);
    header('Location:http://localhost/to-do-list/view/telaInicial.php');
  
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



<form method=POST> 
        <?php 
           echo "<input type='text' name='status' value ='$status' ID='AA'> </input>
            <input type='text' name='title' value='$title' > </input>
            <input type='text' name='description' value='$description' > </input>
            <input type='submit' value='enviar' name='editar'> "
        ?>

</form>


</body>



</html>













