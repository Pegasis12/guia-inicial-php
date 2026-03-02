<?php 
  // STRINGS

  // Uma string é um conjunto de caracteres.
  // ja vimos muitas strings ao longo do modulo.
  // vamos relembrar alguns dos conceitos e acrescentar novas informações.

  $nome = "João";
  $apelido = 'Ribeiro';

  // As duas variaveis são do tipo string
  // Diferentes: nas aspas duplas, podemos adicionar variaveis no seu interior

  // forma mais comum
  $apresentacao = "O meu nome é $nome e o meu apelido é $apelido.";
  echo $apresentacao;
  echo '<br>';
  // podemos melhorar a leitura com a seguinte equivalencia
  $apresentacao = "O meu nome é ${nome} e o meu apelido é ${apelido}.";
  echo $apresentacao;
  echo '<br>';
  // ou
  $apresentacao = "O meu nome é {$nome} e o meu apelido é {$apelido}.";
  echo $apresentacao;
  echo '<br>';

  // concatenação de strings, o . serve pra concatenar
  $nome_completo = $nome . ' ' . $apelido; // poderia ser cm aspas duplas tbm, n tem problema
  echo $nome_completo;
  echo '<br>';

  // como podemos obter a primeira letra do nome?
  // mesma coisa que uma array do js cm base 0 sendo o inicio
  echo $nome[0] . '<br>'; // J
  echo $nome[2] . '<br>'; // Obtem a 3 letra

  // para obter a letra da direita para esquerda podemos usar numeros negativos
  // J   o   ã   o
  // -4  -3  -2  -1
  echo $nome[-1] . '<br>'; // o

  // atravez dessa forma podemos modificar tbm essa letra
  $apelido[2] = 'B'; // trocou o b daposicao 2 minuculo pro Maiusculo
  echo $apelido; // RiBeiro 
?>