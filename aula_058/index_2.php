<?php 
  // COPIAR, Mover, Renomear e eliminar ficheiros

  // para mover um ficheiro (a copia duplicada), usamos a funcao rename
  // rename(__DIR__ . "/file_to_move.nfo", __DIR__ . "/destino/file_to_move.nfo");

  // esta funcao serve tambem para renomear o ficheiro, desde que seja mantida a path
  rename(__DIR__ . "/file_to_move.nfo", __DIR__ . "/new_file_to_move.nfo");
?>
