<?php
    spl_autoload_register("carregarClasse");

    function carregarClasse($nomeClasse){
        $caminhos = array(
            "/model/", "/controller/",
            "/dao/connect/", "/dao/classes/"
        );
           
        
        foreach ($caminhos as $caminho){
          $classe = __DIR__.$caminho.$nomeClasse.".php";
          
          if(file_exists($classe)){
            require_once($classe);
          }
        }
    }

    function rota($caminho){
        return __DIR__."/".$caminho;
    }
?>
