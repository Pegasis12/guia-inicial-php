<?php 
  // ARRAYS

  // como podemos acicionar e remover valores? 
  // mesma coisa q no js, push e pop
  $nomes = ["João", "Pablo", "Pedro"];

  // adicionar push
  $nomes[] = "Novo nome"; // nomes = ["João", "Pablo", "Pedro", "Novo nome"];
  echo '<pre>';
  print_r($nomes);
  echo '</pre>';

  // ou podemos add dessa forma
  array_push($nomes, "Caio"); // nomes = ["João", "Pablo", "Pedro", "Novo nome", "Caio"];
  array_push($nomes, "Rui", "Carlos", "Fernando"); // nomes = ["João", "Pablo", "Pedro", "Novo nome", "Caio", "Rui", "Carlos", "Fernando"];
  echo '<pre>';
  print_r($nomes);
  echo '</pre>';

  // remover elemento pop, a chae index vai desaparecer unset()
  unset($nomes[5]); // nomes = ["João", "Pablo", "Pedro", "Novo nome", "Caio", "Carlos", "Fernando"];
  echo '<pre>';
  print_r($nomes);
  echo '</pre>';

  // existem dezenas de funcoes para operar ARRAYS
  // iremos abordar cad uma delas a medica das necessidades
?>