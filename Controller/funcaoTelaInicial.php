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
        for ($i = 0; $i < count($notas); $i++) {
        $title = $notas[$i]['title'];
        $id=$notas[$i]['id'];   
        echo  "<a href='/to-do-list/view/exibirNota.php?id=$id' class='container-fluid btn' style='width:50%'>$title </a> ";
        
        }   
    }

    public function mostraNotasId($id)

    {
        $notas = $this->nota->buscaNotasFiltroID($id);
        

      return $notas ;

    }

    public function apagarNotas($id)
    {
        $this->nota->deletaNotas($id);
        return "A nota foi apagada";
        
    }
    public function atualizarNota($id,$status,$title,$description)
    {
        $this->nota->atualizaNotas($id,$status,$title,$description);
       
        
    }


}

