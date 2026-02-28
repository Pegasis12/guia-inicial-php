<?php 
//  o php tem as susas proprias constantes, 
// assim como o js tem seus metodos e propriedades nativos

//mostra a versão do php
echo PHP_VERSION;
// apenas dando um pulo pra aparecer a proxima linha abaixo
echo '<br>';

// e tem um tipo de constate que são definidas de forma dinamica
// sao designadas por constantes maginas, são executadas no ato da sua execuxão

echo "Estou executando este codigo na linha " . __LINE__; 
//a cosntante LINE mostra a linha que esta sendo executado esse echo
?>