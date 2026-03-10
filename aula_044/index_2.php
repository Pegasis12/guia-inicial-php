<?php 
    // funcoes

    apresentar();
    executar();

    function apresentar(){
        echo "funcao apresentar<br>";
    }

    function executar(){
        echo "funcao executar!";
    }


    // -------------------------------------------
    for($i = 0; $i <= 10; $i++){
        funcao_teste();
    }
    
    function funcao_teste(){
        echo "Execução da funcao<br>";
    }

    // funcoes são case INSENSITIVE apresentar() = APRESENTAR()
?>