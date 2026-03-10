<?php 
  // Escopo de varaiveis

  /*
    e possivel acessar dentro de uma funcao a varaivel global
    fazemos da seguinte forma
  */

  $nome = "Pablo"; // global

  function dados(){
    global $nome;
    $nome = "Joaquin";
  }

  dados();

  echo $nome; //Joaquin

  // improtante: a melhor estrategia passa por usar parametros nas funcoes
?>