<?php 
  echo '<pre>';

  // uma das formas mais diretas de criar e escrever
  // informacoes num ficheiro
  // é recorrendo a funcao file_put_content()

  // se o ficheiro não existe, é criado.
  // se rodar mais uma vez modificando o texto, o texto é alterado
  file_put_contents("file1.txt", "texto do ficheiro");

  // se pretendemos adicionar informacoes ao mesmo ficheiro
  // usamos o terceiro argumento, PHP_EOL =  Quebra de linha
  // e FILE_APPEND = Acrecentar
  // agora se rodarmos mais de uma vez e alteramos o valor que ele carrrega
  // ele atualiza o valor sem excluir o q estava antes
  file_put_contents("file2.txt", time() . PHP_EOL, FILE_APPEND);
  echo "terminado";
?>