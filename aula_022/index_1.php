<?php 
  // ARRAYS
  // É uma variavel que funciona como uma colecao de dados

  $nome = "João";
  $nome2 = "Pablo";
  $nome3 = "Pedro";

  $nomes = array("João", "Pablo", "Pedro");
  // ou a forma mais comum igual js
  $nomes = ["João", "Pablo", "Pedro"];

  // como acessar dados do array - via index, assim como js
  echo $nomes[0] . '<br>'; // primeiro nome da coleção
  echo $nomes[2] . '<br>'; // terceiro nome da coleção

  // No caso anterior, as chaves são atribuidas automaticamente.
  // Podemos definir as nossas proprias chaves
  $nomes = [
    10 => "João",
    20 => "Pablo",
    30 => "Pedro"
  ];

  // dessa forma precisamos acessar o index com a mesma chame da coleção criada acima
  echo $nomes[10];

  // se terntarmos imprmir uma chave que não existe, surge um aviso
  echo $nomes[200];

  // Para evitarmos o aviso, podemos verificar se o item existe
  var_dump(isset($nomes[200])); // verifica cm a funcao isset se $nome[200] existe dentro da coleção retornando true ou false, lembrando var dump so serve pra imprmir
?>