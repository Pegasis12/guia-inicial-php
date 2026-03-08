<?php 
  // Operador Ternario

  // ternario é um if else, "?" se ":" else
  // usamos o echo para imprimir uma string com uma condição
  // ternaria avaliando a idade e retornando o valor correto da concatenação
  // com base no resutlado
  $idade = 15;
  echo "Eu sou " . ($idade >= 18 ? 'maior de idade.' : 'menor de idade.');

  echo "<br>";

  $erro = true;
  echo "Resultado: " . ($erro ? "Aconteceu um erro" : "Sucesso");
?>