<?php 
  // Cosntantes magicas 

  // Existem nove constantes magicas no PHP.
  // São designadas por constantes magicas, porque o seu valor é definido
  // dependendo do local onde estão sendo usadas.
  // Por exemplo, o valor __LINE__ depende da linha de codigo dentro do script
  // onde a constante magica esta sendo usada.
  // São cosntantes case-insensitive, e permitem solucionar varios desafios.
  // vamos ver como funcionam.

  // --------------------------------------------------------------------
  // __LINE__
  // Indica a linha atual do código onde a constante se encontra
  echo "Número da linha em index_1.php " . __LINE__ . "<br>";
  require_once "script.php";

  // __FILE__ 
  // O caminho completo do ficheiro, independente de envolverem
  // symbolic links. Se for usada dentro de um include ou require,
  // sera indicado o nome do script que esta a ser incluido

  // echo "<br>";
  echo "(index_1.php): " . __FILE__ . "<br>";

  include "script_1.php";
  require "script_1.php";
?>

