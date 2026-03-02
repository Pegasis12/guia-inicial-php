<?php 
  // ARRAYS

  // Tambem podemos alterar um valor de uma array usando suas chaves index
  $nomes = ["João", "Pablo", "Pedro"];
  $nomes[1] = "Paulo";
  
  //var dump imprmi a array completa
  var_dump($nomes); //array(3) { [0]=> string(5) "João" [1]=> string(5) "Paulo" [2]=> string(5) "Pedro" }

  // ou de uma forma mais facil de ler
  echo '<pre>'; // tag html que formata
  print_r($nomes); //imprimi a array de nomes
  echo '</pre>';
?>