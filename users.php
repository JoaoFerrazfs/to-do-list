<?php

declare (strict_types=1);

class User{
    /**
     * @var PDO
     */

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

    public function list():array
    {
        $sql='select * from users';
        $user=[];
        foreach ($this->conexao->query($sql) as $key => $value) {
            array_push($user,$value);

        return $user;
    }


}
}