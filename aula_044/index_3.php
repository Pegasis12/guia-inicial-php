<?php 
    // funcoes

    // A intrucao return quando usada no inteiro de uma funcao
    // permite devolver o resultado da execução do codigo dessa funcao

    // por exemplo

    function mensagem(){
        return "Este texto foi criado dentro da função!";
    }

    // se a funcao for apenas chamada, não vai acontecer nada.
    mensagem();

    // podemos enstão atribuir o valor de retorno, por exemplo a uma variavel
    $texto = mensagem();
    echo $texto;

    echo "<hr>";

    // podemos executar quaqluer tipo de operação dentro de uma funcao
    // e devolver o resultado
    function construir_resultado(){
        $valor1 = 100;
        $valor2 = 5;
        return $valor1 * $valor2;
    }

    $resultado = construir_resultado();
    echo $resultado;
?>