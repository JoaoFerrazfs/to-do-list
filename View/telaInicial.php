<?php
session_start();
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '../Controller/funcaoTelaInicial.php');


$teste=new VisualizacaoDeNotas();


$teste1='Nova';
$teste2='Em andamento';
$teste3='Feito';



$teste->mostraNotas($teste1);
$teste->mostraNotas($teste2);
$teste->mostraNotas($teste3);

