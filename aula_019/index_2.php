<?php 
 // FLOATS

 // tal como os inteiros, o valor minimo e maximo depende da plataforma 32 ou 64
  echo PHP_FLOAT_MIN;
  echo '<br>';
  echo PHP_FLOAT_MAX;
  echo '<br>';

  // inifinit - INF o valor é demasiado elevado para ser apresentado
  // caso eu pegue o valor maximo e multiplique por dois por exemplo
  // ele acaba estourando a capacidade maxima de intepretacao do php
  // ocasionando no infinit
  $valor = PHP_FLOAT_MAX * 2;
  echo $valor; // INF
  echo '<br>';
  var_dump($valor); // float(INF)

  // converter para float
  echo '<br>';
  $valor = 10;
  $valor_float = (float)$valor; // transforma o inteiro em float
  echo $valor_float; // 10
  echo '<br>';
  var_dump($valor_float); // float(10)

  // ou ainda
  echo '<br>';
  $valor = 20;
  $valor_float = floatval($valor); // da mesma forma q o (float) o floarval() é uma funcao nativa q tranforma em float o inteiro $valor
  echo $valor_float; // 20
  echo '<br>';
  var_dump($valor_float); // float(20)
?>