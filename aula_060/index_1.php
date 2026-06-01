<?php 
  // Super globais

  // são variaveis em forma de arrays que estão sempre disponiveis
  // durante a execucao do codigo e as quais podemos acender e manipular
  // em qualquer escopo da aplicacao

  // Vejamos o exemplo de uma variavel que pode ser usada dentro
  // de uma funcao. Neste caso, todas as varaiveis que tem um escopo
  // global podem ser acedidas atraves da super global $GLOBALS
  
  $nome = "João";

  apresentar();

  echo $nome . "<br>";
  echo $apelido;

  function apresentar(){
    global $nome;
    echo $nome . "<br>";

    // ou

    echo $GLOBALS["nome"] . "<br>";

    // podemos alterar o valor da varaivel global
    $GLOBALS["nome"] = "Carlos";
    $GLOBALS["apelido"] = "ribeiro";

    // importante: Existem algumas alteracoes que nao podemos fazer
    // como por exemplo:
  }
?>

