<?php 
  // Para remover uma pasta
  //rmdir(__DIR__ . "/pasta_teste"); // inseguro, pois é ideal verificar 
  // antes de excluir se existe, pra n se deparar com erro alerta

  // se existir a pasta_teste ele exclui
  if(file_exists(__DIR__ . "/pasta_teste")){
    rmdir(__DIR__ . "/pasta_teste"); // excluir a pasta cm rmdir
  }

  // importante:  a pasta so pode ser removida se estiver vazia
  rmdir(__DIR__ . "/data"); // da um warning pois a pasta n esta vazia
?>