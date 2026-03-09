<?php 
  // CICLO FOR

  // É uma das estruturas de ciclo mais usadas
  // Permite executar blocos de codico enquanto uma condição for verdadeira

  // Ao contrario do ciclo while e do while, o ciclo for ja inclui
  // a logica para atualizar o valor da condição

  // contem 3 expressoes separadas por ponto e virgula

  // for(expressao de iniciacao; expressao de condição; expressao de incremento){
  //   #codigo
  // }

  for($indice = 1; $indice <= 10; $indice++){
    echo "indice: $indice<br>";
  }

  // em cenarios menos comuns, podemos remover algumas expressoes

  // for(;;){

  // }

  // Trata-se de um ciclo infinito. Para que ele termine sera necessario
  // criar um cenario no interior do ciclo para que ele seja interrompido
  // Veremos como usar as intrucoes continue e break numa outra aula

  echo "<hr>";

  // tambem é possivel algo do tipo
  // print $i apresenta o valor no browser de cada execuçao do i
  for($i = 0; $i < 10; print $i, $i++){
  }

  echo "<hr>";

  // tambem podemos usar o ciclo for para fazer uma iteração
  // pelos dados de um array, da seguinte forma, count conta o numero de elementos duma array
  $nome = ["pablo", "pedro", "joao"];
  for($i = 0; $i < count($nome); $i++){
    echo $nome[$i] . "</br>";
  }

  echo "<hr>";

  // ou interar pelas letras de uma string
  // lembrando strlen conta a quantidade de caracter de uma string
  $frase = "Teste com uma string.";
  for($i = 0; $i < strlen($frase); $i++){
    echo $frase[$i] . "</br>";
  }

  // importante: sobnre questoes de performance
  // se usarmos uma funcao na expressao de avaliacao da coindicao
  // podemos comprometer a performance, no caso de ser um ciclo longo
  // entao:

  $valores = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100]; // vamos imaginar um array gigante

  // em vez de
  for($i = 0; $i < count($valores); $i++){
  }

  // podemos escrever, mais otimizado, assim evita do for rodar diversas vezes
  // o ciclo inicial de count que é uma funcao, dessa forma ele executa o ciclo inicial
  // Ja pega o tamanho da array na primeira execução, e depois so roda a segunda execução
  // que é $i < $total_valores; $i++
  for($i = 0, $total_valores = count($valores); $i < $total_valores; $i++){
  }

  // $total_valores só vai ser executado no primeiro passo do ciclo.
  // A expressao de avaliacao da condição vai apenas analisar o valor da variavel
?>