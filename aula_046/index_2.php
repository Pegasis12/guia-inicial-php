<?php 
  // Escopo de varaiveis

  /*
    No entanto, a varaivel não estara acesivel dentro de uma funcao
  */

  $nome = "Pablo"; // é uma varaivel de escopo global

  function executar(){
    //não funciona pois a funcao n tem acesso a variavel global
    echo $nome;
  }

  executar();

  /*
    todas as variaveis dentro de uma funcao tem escopo local
    apenas existem dentro da funcao
    Elas saoo criadas dentro da funcao e detruidas assim que a funcao termina 
    a sua execução
  */

  function adicionar(){
    $a = 100;
  }

  echo $a; // erro pois a varaivel a so existe dentro de adicionar
?>