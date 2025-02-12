<?php

$valor = 0;

echo "Digite um valor: ";
$valor = readline();
if ($valor < 0){
    echo "O numero digitado é negativo! ";
} elseif ($valor >= 0){
    echo "O numero digitado é positivo! ";
}
?>