<?php 
  // data types, tipos de dados em php
  // No PHP as variaveis não sao tipadas
  // Isso vai ser mais complexo de processar e pode gerar erros

  // tipos de dados escalares
  // bool / booleano - aceita valores verdadeiro ou falso (true / false)
  $apresentar_dados = true;

  // int / inteiros - são valores numericos sem casas decimais
  $valor = 0;
  $valor1 = 1251567;
  $valor2 = -34599;

  // floa - valores fluatiantes (numeros com casas decimais)
  $float1 = 1.5;
  $float2 = 2451.578;
  $float3 = 0.0035;
  $float4 = -0.5;

  // string - valores alfonumericos (letras, palavras, frases, textos ...)
  $nome = "João";
  $apelido = "Escobar";
  $letra_escolhida = "A";
  $frase_do_dia = "Lorem ipsum";

  // lembrando que esse ponto nada mais é do que concatenar
  // por ser true imprimi 1, caso seja false imprimi nada vazio
  echo $apresentar_dados . '<br>';

  // gettype msotra o tipo de dados passado nas variaveis
  echo gettype($apresentar_dados) . '<br>'; // boolean
  echo gettype($valor) . '<br>'; // integer
  echo gettype($float1) . '<br>'; // double
  echo gettype($nome) . '<br>'; // string

  // var_dump uma função nativa que apresenta informacoes da variavel
  var_dump($apresentar_dados); // bool(true)
  echo '<br>';
  var_dump($valor1); // int(1251567)
  echo '<br>';
  var_dump($nome); // string(5) "João"

?>