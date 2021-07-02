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
        $id=$notas[$i]['id'];
       

        echo  "<a href='/to-do-list/view/exibirNota.php?id=$id'> <button style='margin-left:25px;width: 120px;background: #069cc2; border-radius: 5px; padding: 10px; cursor: pointer; color: #fff; border: none; font-size: 16px;'>$title</button></a> ";
        echo "<br><br>";
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
        header('Location: /to-do-list/view/telaInicial.php');
    }


}

