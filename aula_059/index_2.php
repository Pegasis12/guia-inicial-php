<?php 
  // Cosntantes magicas 

  // __DIR__

  // A pasta a qual pertence o script atual.
  // Se usada dentro de um include, sera devolvida a pasta do ficheiro
  // que esta a ser incluido.
  // Tem o mesmo output que dirname(__FILE__).
  // Não tem barra no final do valor, a não ser que estejamos na raiz.

  echo "(index_2.php) " . __DIR__ . "<br>";

  include "outros/script.php";

  // -------------------------------------------------------------------
  // __FUNCTION__
  // O nome da função onde o codigo esta a ser executado.
  adicionar(10, 20);
  function adicionar($a, $b){
    echo $a + $b . "<br>";
    echo __FUNCTION__;
  }
?>
