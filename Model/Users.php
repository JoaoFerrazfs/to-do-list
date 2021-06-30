<?php

declare (strict_types=1);

class User{
    /**
     * @var PDO
     */
     private $id;
     private $name;
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

    public function getId(){
        return $this->id;

    }
    public function setId($i){
        $this->id = $i;

    }
    public function setName($n){
        $this->name = $n;

    }
    public function getName(){
        return $this->name;

    }    

    public function getAge(){
        return $this->age;

    }
    public function setAge($a){
        $this->age = $a;

    }
    public function getEmail(){
        return $this->email;

    }
    public function setEmail($e){
        $this->email = $e;

    }
    public function getPassword(){
        return $this->password;

    }
    public function setPassword($p){
        $this->password = $p;

    }



    public function validarLogin($email,$password)
    {
        $sql = "SELECT id,name,age,email,fone,password FROM users WHERE email='$email' and password='$password'";
        foreach ($this->conexao->query($sql) as $key => $value) {            
            $logar=new User();
            $logar->setId($value['id']);
            $logar->setName($value['name']);
            $logar->setEmail($value['email']);
            $logar->setAge($value['age']);
            $logar->setPassword($value['password']);

            $id=$logar->getId();
            $name=$logar->getName();
            $email=$logar->getEmail();
            $password=$logar->getPassword();

          return array($id,$name,$email,$password);
            

    }

   
           


}}
