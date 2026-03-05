<?php 
  // Operadores de string

  // são operadores especificos para efetuar operações com strings
  // estamos falando especificamente de operadores de concatenação
  $nome = "João";
  $nome = $nome . " Ribeiro";  // João Ribeiro
  $apresentacao = "Bom dia, " . $nome  . "."; // Bom dia, João Ribeiro.

  // Podemos simplificar uma parte do codigo acima da seguinte forma
  $nome = "João";
  $nome .= " Ribeiro"; // João Ribeiro

  // portanto
  $cliente = "João Ribeiro";
  $telefone = "3123543245";
  $email = "joao.ribeiro@gmail.com";

  $completo = $cliente . ' - ' . $telefone . ' - ' . $email;
  // João Ribeiro - 3123543245 - joao.ribeiro@gmail.com
?>  