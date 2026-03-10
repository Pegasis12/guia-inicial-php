<?php 
    // funcoes

    //  Neste modulo vamos fazer uma introducao aos principais
    //  conceitos relacionados com funcoes em PHP
    //  Existem detalhes mais avancados que iremos ver em outros modulos

    // as funcoes são blocos de codigo reutilizaveiz que apenas sao executados quado
    // sao chamadas pelo nosso codigoo php contem um vasto conuunto de funcoes ja disponiceis
    // nos podemos criar as nossas proprias

    // function nome_da_funcao(parametro){
    //     #codigo
    // }

    // uma funcao pode ter no seu interior qualquer tipo de codigo de PHP,
    // inclusive outras funcoes

    // definir uma funcao
    function apresentar(){
        echo "Estou dentro de uma funcao PHP";
    }

    // chamando a execução de uma funcao
    echo "Estou dora da função!";
    echo "<br>";
    apresentar();
?>