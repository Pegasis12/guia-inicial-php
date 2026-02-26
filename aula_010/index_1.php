<?php
  //echo significa apresentar qualquer coisa no meu browser, então ele imprimi o h1 php e o h1 html abaixo pq interpreta o html tbm
  echo '<h1>PHP</h1>';
  //quando coloco o fechamento do php ? > ele intepreta tudo dentro do escopo como php, se eu colocar um h1 apos essa tag ele considera tudo como texto ou html, caso eu deixe sem a tag de fechamento ele vai interpretar o arquivo inteiro coo php, dando erro caso tenha algum texto ou html
?>

<!-- roda apos o fechamento do php, caso o php n esteja fechado da erro -->
<h1>HTML</h1>