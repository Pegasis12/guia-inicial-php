<?php 
  // Escopo de varaiveis

  /*
    o escopo de uma varaivel indica a fronteira dentro da qual uma
    varivel pode ser acedida.
    Existem um escopo global e um escopo local.
    de um modo geral, as variaveis no PHP tem apenas um escopo: global ou local.
    voltaremos a fala sobre o escopo de variavel no modulo relacionado com OOP
  */

  $nome = "Pablo"; // é uma varaivel de escopo global

  /*
    esta variavel vai estar dsponivel para ser usada dentro de instrucoes condicionais
    e ciclos nese script e em outros scrips que possam ser importados para o interior
    deste script. (include e require)
  */

   if(true){
      echo $nome . "<br>";
   }
   
   for($i = 1; $i<=2; $i++){
      echo $nome . "<br>";
   }
?>