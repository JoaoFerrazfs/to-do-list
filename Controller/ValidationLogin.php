<?php
session_start();

define('__ROOT__', dirname(dirname(__FILE__)));
require_once (__ROOT__.'./Model/Users.php');



$teste=  new Login();
$teste->sessao($_POST['email'],$_POST['password']);
class Login{
  
    public function __construct()
    {
        $dadosUser= new User();
        
    }    
    public function sessao($email,$password){

        
        $dados=new User();
        $gravar=[];
        $gravar= $dados->validarLogin($email,$password);

        $_SESSION['usuario'] =$gravar[1];
        $_SESSION['email']=$gravar[2]; 

        if(isset($_SESSION['usuario'])){

            header('Location: http://localhost/to-do-list/view/telaInicial.php');    

              echo"Usuário  ". $_SESSION['usuario']." logado com sucesso";
            
        }else{
            $_SESSION['nao_autenticado'] = true;
            header('Location: http://localhost/to-do-list/');    
            exit();
        }

      
        
        
        

  
        


    


}}
