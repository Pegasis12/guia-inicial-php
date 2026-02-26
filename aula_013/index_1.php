<?php 

//variaveis

// $valor -> nome da variavel
// = -> operador de atribuição
// 100 -> valor atribuido a variavel
//o nome da variavel deve sempre comecar com _ ou letra, e pode conter numeros, mas nao pode comecar com numero

//e case sensitive, ou seja, $valor e diferente de $Valor
$valor = 100;
$VALOR = 200;
$Valor = 300;

echo $valor; //imprime o valor da variavel
echo $VALOR;
echo $Valor;

//formas corretas de declarar também
$valor_da_variavel = 100;
$_valor = 200;

//forma errado numeros no inicio da variavel, espacos etc
// $01teste = 100;
?>