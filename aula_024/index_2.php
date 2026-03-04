<?php 
  // Funções associadas a arrays
  
  $cliente = [
    'nome' => "Joao",
    'apelido' => "Ribeiro",
    'idade' => 48,
    'email' => 'joao@gmail.com'
  ];

  // apresenta um valor de um array associativo
  echo $cliente['apelido'] . '<br>';

  // verifica se existe uma determinada key no array
  // key_exists recebe dois argumentos sendo oq e pra verificar e o segundo onde
  // fara a verificacao
  var_dump(key_exists('telefone', $cliente)); //bool(false)
  echo '<br>';

  // array para string - implode pega todos os dados da array ele passa uma ,
  // ou algum outro caracter da sua escolha q serve como uma cola 
  // que sera passado entre cada item do array retornando uma unica string
  $resultado = implode(",", $cliente);
  var_dump($resultado); // string(30) "Joao,Ribeiro,48,joao@gmail.com"

  // criar um novo array a partir de uma porcao de outro array
  // no caso array slice recebe o array, e de onde deve começar a pegar os dados
  // e atribui esse novos dados em uma nova array
  $nomes = ["pablo", 'joao', 'pedro', 'alberto'];
  $nomes_parte = array_slice($nomes, 2); // ['pedro', 'alberto']
  echo '<pre>';
  print_r($nomes_parte); // ['pedro', 'alberto']
  echo '</pre>';

  // funcoes para arrays em PHP
  // www.php.net/manual/en/ref.array.php
?>