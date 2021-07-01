<?php

declare (strict_types=1);

class Nota{
    /**
     * @var PDO
     */

    private $id;
    private $status;
    private $title;
    private $description;
    private $email;
    private $conexao;
    private $todasNotas=[];

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
        $this->id=$i;
    }
    public function getStatus(){
        return $this->status;
    }
    public function setStatus($s){
        $this->status=$s;
    }
    public function getTitle(){
        return $this->title;
    }
    public function setTitle($t){
        $this->title=$t;
    }
    public function getDescription(){
        return $this->description;
    }
    public function setDescription($d){
        $this->description=$d;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($e){
        $this->email=$e;
    }
    public function getTodasNotas(){
        return $this->todasNotas;
    }
    public function setTodasNotas($tn){
        $this->todasNotas=$tn;
    }



    
    public function buscaNotas($email,$status){
        $sql = $this->conexao->prepare("SELECT id,email,description,status,title FROM notes WHERE email='$email' and status='$status'");
        $sql->execute();
        $resultado=[];
        $value = $sql->fetchAll(PDO::FETCH_ASSOC);
        
           
            $anotar=new Nota();
            $anotar->setTodasNotas($value);       

            $todasNotas=$anotar->getTodasNotas();           
           
            return $todasNotas;

        
    

    
    }

    public function atualizaNotas(){

    }
    public function deletaNotas(){

    }
    public function criarNota(){
    }


}


   
           



