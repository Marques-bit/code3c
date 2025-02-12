<?php

$valor = 0;

echo "Digite um valor: ";
$valor = readline();
if ($valor < 10){
    echo "O numero digitado é menor que 10!";
} elseif ($valor > 10){
    echo "O numero digitado é maior que 10!";
} else{
    echo "O numero digitado é igual a 10!";
}
?>