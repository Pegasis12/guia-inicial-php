<?php
  // definir o nome e valor de uma variavel
  $nome1 = "João";
  echo $nome1;

  //nome um passa a ser Pablo
  $nome1 = "Pablo";
  echo $nome1;

  //não pode atribuir valor string por exemplo sem aspas
  //$nome2 = carla; //errado

  //podemos somar dividir assim como no geral
  $valor1 = 100;
  $valor2 = 200;
  $soma = $valor1 + $valor2;
  echo $soma; //300

  // valor de uma variavel dentro de uma string
  //diferente das aspas duplas a simples n aparece a varivel, somente a
  //dupla mostra o resultado
  $nome = "Pedrin";
  echo 'O meu nome é $nome'; //O meu nome é $nome
  echo "O meu nome é $nome"; //o meu nome é Pedrin
?>