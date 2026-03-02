<?php 
  // STRINGS

  //Haredoc e nowdoc pode ser um recurso interessante para textos mais longos
  // exemplo

  $valor1 = 100;
  $valor2 = 200;
  $valor3 = 300;

  $relatorio = <<<TEXT
  O valor 1 = $valor1
  O valor 2 = $valor2
  O valor 3 = $valor3
  TEXT;

  echo nl2br($relatorio);
  // O valor 1 = 100
  // O valor 2 = 200
  // O valor 3 = 300

  // ou ent para apresentar HTML
  $html = <<<TEXT
  <h1>Titulo</h1>
  <hr>
  <p>Texto para efeito de testes</p>
  TEXT;

  echo $html; // imprimi as tags HTML no browser
?>