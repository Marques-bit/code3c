<?php

    $valorProduto = 0; $resultado = 0;

    echo "Qual o preço do produto?: ";
    $valorProduto = readline();

    $resultado = ($valorProduto * 1 ) / 100;
    echo "O valor do reajuste foi: " . $resultado + $valorProduto;
    echo "\n";

?>
