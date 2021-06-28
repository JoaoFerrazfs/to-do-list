<?php
require'./Model/Users.php';
require_once('../to-do-list/index.php');



class Login{
    private $dadosUser;
    public function __construct()
    {
        $this->dadosUser= new User();
        
    }


    
    public function validarLogin($email,$password){
        foreach ($this->dadosUser->list($email,$password) as $value)
        {
       $value['id'];
       $value['name'];
        }

        try{   
            if (empty($value['id'])){
        
            throw new Exception("Campos obrigatórios não foram preenchidos!");
            
            }
            
         

            }catch(Exception $e){
            echo $e->getMessage();
            return false;
           
            die();
        }
        echo "Login Relizado ".$value['name'];
        return true;
        }
        
}


