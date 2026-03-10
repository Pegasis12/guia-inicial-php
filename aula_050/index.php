<?php 

  // Sessões

  /*
  As sessões são um dos mecanismos que o PHP oferece para manter informação
  entre diferentes requests.
  Sempre que navegamos numa pagina web criada em PHP, e sempre que um novo
  pedido é feito ao servidor (por exemplo para ver uma nova pagina),
  toda a informação sobre variaveis é perdida.

  Existem varias formas de persistencia de informação.
  Se quremos guardar informação entre request, podemos usar Cookies
  que veremos mais a frente neste modulo, guardar e ler dados de uma base de dados,
  passando variaveis atravez de POST ou GET (veremos em breve como funciona).

  Com as Sessões, podemos guardar dados temporariamente no servidor e, no request
  seguinte esses dados vão continuar disponiveis.

  vejamos como funciona com um exemplo simples.
  */
?>