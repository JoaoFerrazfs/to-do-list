<?php

declare (strict_types=1);

class User{
    /**
     * @var PDO
     */

     private $nome;
     private $age;
     private $email;
     private $fone;
     private $password;



    private $conexao;

    public function __construct()
    {
        try{
            $this->conexao = new PDO('mysql:host=localhost;dbname=todolist','root','');
        }catch (Exception $e){
            echo $e->getMessage();
            die();
        }
    }

    public function list($email,$password):array
    {
        $user = [];
        $sql = "SELECT id,name,age,email,fone,password FROM users WHERE email='$email' and password='$password'";
        foreach ($this->conexao->query($sql) as $key => $value) {
            array_push($user, $value);
            
        }
        return $user;

        
           
       
    }


}
