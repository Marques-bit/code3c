<?php


    echo "Digite o resultado da primeira prova: ";
    $valor1 = readline() * 1;

    echo "Digite o resultado da segunda prova: ";
    $valor2 = readline() * 2;

    echo "Digite o resultado da terceira prova: ";
    $valor3 = readline() * 3;

    echo "Digite o resultado da quarta prova: ";
    $valor4 = readline() * 4;

    $media = ($valor1 + $valor2 + $valor3 + $valor4) / 10;
    echo "O resultado da sua media equivalente a suas notas é de: " . $media;
    echo "\n"

?>
