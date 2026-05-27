<?php 
  // existem varias formas de leitura de dados a partir de um ficheiro de texto.
  // No video anteiror vimos a funca file_putcontents() para guardar dados.
  // vejamos a funcao file_get_contents();

  $dados = file_get_contents("dados.txt");
  echo nl2br($dados); // nl2br transforma quebra de linha em br html

  echo "<hr>";

  // podemos ler apenas uma parte do ficheiro
  // comeca a partir do index 6 e acaba até o index 40
  $dados = file_get_contents("dados.txt", offset: 6, length: 40);
  echo nl2br($dados);
?>
