<?php

require_once(__ROOT__ . '../Model/Notes.php');

class VisualizacaoDeNotas{

    private $nota ;
    private $status;
    private $email;

    public function __construct()
    {   
       
       
        
        $this->nota=new Nota();
    }
    
   
    
    public function mostraNotas($status)

    {
        $email =$_SESSION['email'];
  
         $notas=$this->nota->buscaNotas($email,$status);
         $linhas = count($notas);
        $i = 0;
        echo "<h2>".$status."</h2>";
        for ($i = 0; $i < count($notas); $i++) {
        $title = $notas[$i]['title'];
        echo  "<button style='box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19)'>$title</button>";
        echo "<br><br>";
    }
}

}

$teste=new VisualizacaoDeNotas;
