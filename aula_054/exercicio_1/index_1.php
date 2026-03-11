<?php 
  echo "<pre>";

  // listagem de ficheiros
  echo __DIR__ . "<br>"; // mostra em que pasta do servidor esta sendo executado o script
  // scandir funcao nativa que verifica uma pasta, no caso esta verificando o __DIR__ que como dito
  // mostra onde esta sendo executado no servidor o caminho
  $files = scandir(__DIR__); // COSNTANTE magica __DIR__
  print_r($files);

  // O . e o .. estão sempre presentes em cada pas.
  // São indicados como pasta atual (.) e a pasta anterior (..)

  echo "<hr>";
  $files2 = scandir("./"); // lista a pasta atual
  print_r($files2);

  echo "<hr>";
  $files3 = scandir("../"); // lista a pasta anterior (mãe)
  print_r($files3);

  // ---------------------------------------
  // podemos questionar se cada elemento encontrado é um ficheiro ou uma pasta
  echo "<hr>";
  foreach($files as $item){
    echo is_file($item) ? "Ficheiro" : "Pasta"; // is_file identifica se é pasta
    echo "<hr>";
  }

  // se quisermos listar apenas os ficheiros
  echo "<hr>";
  $files = scandir(__DIR__); // lembrando dir, mostra o local q esta sendo executado o script
  foreach($files as $item){
    if(is_file($item)){ // is_file, verifica se é um arquivo
      echo $item . "<br>";
    }
  }
?>