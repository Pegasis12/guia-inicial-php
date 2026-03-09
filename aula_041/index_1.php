<?php 
  // CICLO FOREACH

  // É a melhor opção para interações em arrays ou objetos
  // falaremos osbre objetos em outro modulo PHP

  // foreach([array] as $value ou key=>$value){
  //   #codigo
  // }

  $nomes = ["joao", "ana", "carlos", "francisco", "maria"];
  // é como se em cada execução $nome passa a assumir o resultado
  // de cada item do array
  foreach($nomes as $nome){
    echo "$nome</br>";
  }

  echo "<hr>";

  $posicoes = [
    "administrativo" => "joao",
    "secretario" => "ana",
    "colaborador" => "carlos"
  ];

  // é como se fosse o terceiro argumento do foreach em js, 
  // chave faz referencia ao indice
  foreach($posicoes as $chave=>$valor){
    echo "Com a posicao de $chave, temos a seguinte pessoa: $valor</br>";
  }

  // no final da execução, a varaivel $valor e a $chave 
  // vão permanecer disponiveis cm a ultima execução
  // no caso vazam o escopo
  echo "<hr>$chave<br>$valor";
?>