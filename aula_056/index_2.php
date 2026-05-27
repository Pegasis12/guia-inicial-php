<?php 
  // Em muitas circunstancia vai necessitar de um modo difrente de leitura dos
  // dados. Ler uma linha de cada vez, por exemplo


  // prepara um ficheiro apenas pra leitura
  // file faz um apontamento tipo hendler cm a funcao fopen q 
  // serve rpa abrir um ficheiro
  // e o segundo argumento r q representa ler apenas
  $file = fopen("dados.txt", "r");
  // enquanto o final do ficheiro for falso
  while(!feof($file)){
    // busca oq tem em file e imprimi uma linha de cada vez
    echo fgets($file) . "<br>";
  }
  // fechamos o ficheiro apos abrir depois doq precisamos
  fclose($file);

  // ou
  echo "<hr>";
  $file = fopen("dados.txt", "r");
  while(($linha = fgets($file)) !== false){
    echo $linha . "<br>";
  }
  fclose($file);
?>
