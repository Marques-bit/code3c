<?php

    $dividendo = 0;
    $divisor = 0;
    $resultado = 0;

    echo ("Digite seu dividendo: \n");
    $dividendo = readline();

    echo "Digite seu divisor: \n";
    $divisor = readline();

    $resultado = $dividendo / $divisor;
    echo "O resultado da divisão é: " . $resultado . "\nE o resto é: " . ($dividendo % $divisor);
    echo "\n";
    
?>
