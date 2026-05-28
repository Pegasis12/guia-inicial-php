<?php 
  //  A leitura é feita usando a funcao fgetcsv

  echo "<pre>";

  $file = fopen("dados.csv", "r");
  
  // enquanto n existir o final do ficheiro
  while(!feof($file)){
    // pega os dados da linha do arquivo csv, uma por uma e imprimi com print_r
    $linha = fgetcsv($file);
    print_r($linha);
  }

  fclose($file);
?>
