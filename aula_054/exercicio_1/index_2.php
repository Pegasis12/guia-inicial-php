<?php 
  // Podemos criar e remover uma pasta
  //mkdir(__DIR__ . "/pasta_teste"); // inseguro, pois sempre é bom verificar
  // se existe a pasta antes

  // Se a pasta existir, vai aparecer um aviso
  // Devemos sempre assegurar se a pasta ou ficheiro existe
  // Para isso podemosusar a funcao file_exists().
  // Funciona para ficheiros e pastas.

  // se não existir a pasta_teste ele cria
  if(!file_exists(__DIR__ . "/pasta_teste")){
    mkdir(__DIR__ . "/pasta_teste"); // cria a pasta
  }
?>