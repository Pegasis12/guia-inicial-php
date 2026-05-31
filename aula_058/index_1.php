<?php 
  // COPIAR, Mover, Renomear e eliminar ficheiros

  // Explicacao dir namada mais é do que a injecao da 
  // pasta onde estamos executando o script

  // para copiar um ficherio
  // estamos fazendo uma copia do arquivo e mandando pra outro destino
  copy(__DIR__ . "/origem/file1.nfo", __DIR__ . "/destino/file1.nfo");

  // fazemos a mesma coisa de cima, porem a copia vai cm nome diferente
  // na copia podemos alterar o nome do ficheiro de destino
  copy(__DIR__ . "/origem/file1.nfo", __DIR__ . "/destino/new-file.nfo");

  // Importante: Se o ficheiro de destino existir, vai ser esmagado
?>
